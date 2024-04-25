<?php
require_once 'Database.php';

class ChatMessage {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function saveMessage($username, $message) {
        $stmt = $this->pdo->prepare("INSERT INTO chat_messages (username, message) VALUES (?, ?)");
        $stmt->execute([$username, $message]);
    }

    public function getMessages() {
        $stmt = $this->pdo->query("SELECT * FROM chat_messages ORDER BY created_at DESC LIMIT 50");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>