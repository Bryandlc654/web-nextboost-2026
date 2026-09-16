<?php
require_once __DIR__ . '/db.php';

function enqueueMail($to, $subject, $body) {
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO mail_queue (email_to, subject, body) VALUES (?, ?, ?)");
    $stmt->execute([$to, $subject, $body]);
    return true;
}

function processMailQueue() {
    $db = getDB();
    require_once __DIR__ . '/smtp.php';

    $pending = $db->query("SELECT * FROM mail_queue WHERE status = 'pending' AND attempts < 3 ORDER BY created_at ASC LIMIT 10")->fetchAll(PDO::FETCH_ASSOC);
    $sent = 0;

    foreach ($pending as $mail) {
        $stmt = $db->prepare("UPDATE mail_queue SET attempts = attempts + 1 WHERE id = ?");
        $stmt->execute([$mail['id']]);

        $ok = @sendMail($mail['email_to'], $mail['subject'], $mail['body']);

        if ($ok) {
            $db->prepare("UPDATE mail_queue SET status = 'sent', sent_at = datetime('now') WHERE id = ?")->execute([$mail['id']]);
            $sent++;
        } else {
            $error = error_get_last()['message'] ?? 'sendMail returned false';
            $db->prepare("UPDATE mail_queue SET last_error = ? WHERE id = ?")->execute([$error, $mail['id']]);
            if ($mail['attempts'] + 1 >= 3) {
                $db->prepare("UPDATE mail_queue SET status = 'failed' WHERE id = ?")->execute([$mail['id']]);
            }
        }
    }
    return $sent;
}
