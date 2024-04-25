
<?php
require_once '../models/ChatMessage.php';

class ChatController {
    private $chatMessageModel;

    public function __construct($pdo) {
        $this->chatMessageModel = new ChatMessage($pdo);
    }

    public function saveMessage($username, $message) {
        $this->chatMessageModel->saveMessage($username, $message);
    }

    public function getMessages() {
        return $this->chatMessageModel->getMessages();
    }
}
?>