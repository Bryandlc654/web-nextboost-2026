<?php
require_once __DIR__ . '/ai-config.php';

define('SMTP_HOST', $_ENV['SMTP_HOST'] ?? 'smtp.hostinger.com');
define('SMTP_PORT', (int)($_ENV['SMTP_PORT'] ?? 465));
define('SMTP_USER', $_ENV['SMTP_USER'] ?? '');
define('SMTP_PASS', $_ENV['SMTP_PASS'] ?? '');
define('SMTP_FROM', $_ENV['SMTP_USER'] ?? '');
define('SMTP_FROM_NAME', 'Next Boost Peru');

function smtpCmd($fp, $cmd, $expect = 250) {
    if ($cmd) fputs($fp, $cmd . "\r\n");
    $res = '';
    while (true) {
        $line = fgets($fp, 512);
        if ($line === false) break;
        $res .= $line;
        if (isset($line[3]) && $line[3] === ' ') break;
    }
    $code = (int)$line;
    if ($code !== $expect) {
        error_log("SMTP: expected $expect, got $code — $res");
        return false;
    }
    return $res;
}

function sendMail($to, $subject, $body) {
    $crlf = "\r\n";
    $fromName = "=?UTF-8?B?" . base64_encode(SMTP_FROM_NAME) . "?=";
    $headers = "MIME-Version: 1.0" . $crlf;
    $headers .= "Content-Type: text/html; charset=UTF-8" . $crlf;
    $headers .= "To: " . $to . $crlf;
    $headers .= "From: " . $fromName . " <" . SMTP_FROM . ">" . $crlf;
    $headers .= "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=" . $crlf;
    $headers .= "Date: " . date('r') . $crlf;
    $msg = $headers . $crlf . $body;

    if (function_exists('fsockopen')) {
        $prefix = (SMTP_PORT == 465) ? 'ssl://' : '';
        $errno = 0; $errstr = '';
        $fp = @fsockopen($prefix . SMTP_HOST, SMTP_PORT, $errno, $errstr, 30);
        if ($fp) {
            $ok = smtpConversation($fp, $to, $msg, $crlf, $fromName);
            fclose($fp);
            if ($ok) return true;
        }
    }
    $mailHeaders = "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM . ">\r\n";
    $mailHeaders .= "MIME-Version: 1.0\r\n";
    $mailHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";
    return mail($to, $subject, $body, $mailHeaders);
}

function smtpConversation($fp, $to, $msg, $crlf, $fromName) {
    if (!smtpCmd($fp, null, 220)) return false;
    if (!smtpCmd($fp, "EHLO nextboost.business", 250)) return false;
    if (SMTP_PORT == 587) {
        if (!smtpCmd($fp, "STARTTLS", 220)) return false;
        if (!stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) return false;
        if (!smtpCmd($fp, "EHLO nextboost.business", 250)) return false;
    }
    if (!smtpCmd($fp, "AUTH LOGIN", 334)) return false;
    if (!smtpCmd($fp, base64_encode(SMTP_USER), 334)) return false;
    if (!smtpCmd($fp, base64_encode(SMTP_PASS), 235)) return false;
    if (!smtpCmd($fp, "MAIL FROM:<" . SMTP_FROM . ">", 250)) return false;
    if (!smtpCmd($fp, "RCPT TO:<" . $to . ">", 250)) return false;
    if (!smtpCmd($fp, "DATA", 354)) return false;
    if (!smtpCmd($fp, $msg . $crlf . ".", 250)) return false;
    fputs($fp, "QUIT\r\n");
    return true;
}
