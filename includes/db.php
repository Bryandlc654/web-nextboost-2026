<?php
$DB_PATH = __DIR__ . '/../data/leads.db';

$dataDir = dirname($DB_PATH);
if (!is_dir($dataDir)) {
    @mkdir($dataDir, 0775, true);
}

function getDB() {
    global $DB_PATH;
    static $db = null;
    if ($db) return $db;
    $db = new PDO("sqlite:$DB_PATH");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("CREATE TABLE IF NOT EXISTS admins (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT UNIQUE NOT NULL,
        password_hash TEXT NOT NULL,
        email TEXT NOT NULL
    )");
    $db->exec("CREATE TABLE IF NOT EXISTS leads (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        phone TEXT,
        email TEXT,
        page_url TEXT,
        ip_address TEXT,
        is_read INTEGER DEFAULT 0,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");
    $db->exec("CREATE TABLE IF NOT EXISTS messages (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        lead_id INTEGER NOT NULL,
        message TEXT NOT NULL,
        sender TEXT NOT NULL DEFAULT 'visitor',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (lead_id) REFERENCES leads(id)
    )");

    // Migration: recreate messages table if old CHECK constraint exists
    try {
        $db->exec("INSERT INTO messages (lead_id, message, sender) VALUES (0, 'migration_test', 'ai')");
        $db->exec("DELETE FROM messages WHERE lead_id = 0");
    } catch (Exception $e) {
        // Old schema with CHECK constraint — recreate table
        $db->exec("CREATE TABLE IF NOT EXISTS messages_new (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            lead_id INTEGER NOT NULL,
            message TEXT NOT NULL,
            sender TEXT NOT NULL DEFAULT 'visitor',
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (lead_id) REFERENCES leads(id)
        )");
        $db->exec("INSERT OR IGNORE INTO messages_new SELECT * FROM messages");
        $db->exec("DROP TABLE messages");
        $db->exec("ALTER TABLE messages_new RENAME TO messages");
    }

    $stmt = $db->query("SELECT COUNT(*) FROM admins");
    if ($stmt->fetchColumn() == 0) {
        $hash = password_hash('N3xtBu$t2026!', PASSWORD_DEFAULT);
        $db->prepare("INSERT INTO admins (username, password_hash, email) VALUES (?, ?, ?)")->execute(['nextboost_admin', $hash, 'admin@nextboost.business']);
    }

    $db->exec("CREATE TABLE IF NOT EXISTS mail_queue (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email_to TEXT NOT NULL,
        subject TEXT NOT NULL,
        body TEXT NOT NULL,
        status TEXT DEFAULT 'pending',
        attempts INTEGER DEFAULT 0,
        last_error TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        sent_at DATETIME
    )");

    return $db;
}

function jsonResponse($data, $code = 200) {
    header('Content-Type: application/json');
    http_response_code($code);
    echo json_encode($data);
    exit;
}
