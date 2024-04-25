<?php
require_once 'ChatController.php';

$pdo = new Database();
$chatController = new ChatController($pdo);

$messages = $chatController->getMessages();

foreach ($messages as $message) {
    echo '<div class="chat-message">';
    echo '<span class="message">' . htmlspecialchars($message['message']) . '</span>';
    echo '</div>';
}
?>