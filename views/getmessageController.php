<?php
require_once 'ChatroomController.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $message = $_POST["message"] ?? "";

    if (!empty($username) && !empty($message)) {
        $pdo = new Database();
        $chatController = new ChatController($pdo);
        $chatController->saveMessage($username, $message);
    }
}
?>