<?php
require_once '../core/Database.php';
require_once '../models/ChatMessage.php'; // Corrected class name
$database = new Database();
$conn = $database->getConnection();
// Create a new instance of the ChatMessage class with the database connection
$chat = new ChatMessage($conn); // Assuming $conn is your PDO connection

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the message from the form
    $message = $_POST['message'];

    // Save the message to the database
    $chat->saveMessage($message); // Replace 'username_placeholder' with actual username

    // Redirect to the chat room page after sending the message
    header("Location: chat_room.php");
    exit();
}

// Get messages to display in the chat
$messages = $chat->getMessages();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Chatroom</h2>
                <div class="chat-box mb-4">
                    <?php foreach ($messages as $msg) : ?>
                        <div class="message">
                            <?php echo htmlspecialchars($msg['message']); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="message">Votre message :</label>
                        <input type="text" class="form-control" id="message" name="message" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>