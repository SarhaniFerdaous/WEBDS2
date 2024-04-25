<?php
class ChatMessage {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function saveMessage($message) {
        $stmt = $this->conn->prepare("INSERT INTO chat_messages (message) VALUES (?)");
        $stmt->execute([ $message]);
    }

    public function getMessages() {
        $stmt = $this->conn->prepare("SELECT * FROM chat_messages ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    }
    

?>