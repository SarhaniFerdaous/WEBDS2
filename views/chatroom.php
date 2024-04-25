<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chat Room</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .chat-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .chat-message {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .chat-message .username {
            font-weight: bold;
        }
        .chat-message .timestamp {
            color: #999;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <h1>Simple Chat Room</h1>

        <!-- Chat messages display area -->
        <div id="chat-messages"></div>

        <!-- Chat input form -->
        <form id="chat-form">
            <input type="text" id="username-input" placeholder="Your Name">
            <input type="text" id="message-input" placeholder="Type your message...">
            <button type="submit">Send</button>
        </form>
    </div>

    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JavaScript for handling chat messages -->
    <script>
        $(document).ready(function(){
            // Function to fetch and display chat messages
            function fetchMessages() {
                $.ajax({
                    url: window.location.href, // Fetch messages from the same page
                    method: 'POST',
                    data: {fetch_messages: true},
                    success: function(response) {
                        $('#chat-messages').html(response);
                    }
                });
            }

            // Fetch and display messages on page load
            fetchMessages();

            // Function to handle form submission (sending a message)
            $('#chat-form').submit(function(e){
                e.preventDefault();
                var username = $('#username-input').val();
                var message = $('#message-input').val();
                $.ajax({
                    url: window.location.href, // Send message to the same page
                    method: 'POST',
                    data: {username: username, message: message},
                    success: function() {
                        fetchMessages(); // Refresh messages after sending
                        $('#message-input').val(''); // Clear input field
                    }
                });
            });

            // Refresh messages every 5 seconds
            setInterval(fetchMessages, 5000);
        });
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["fetch_messages"])) {
            require_once '../core/Database.php';
            require_once '../controllers/ChatroomController.php';

            $pdo = new Database();
            $chatMessageModel = new ChatMessage($pdo);
            $messages = $chatMessageModel->getMessages();

            foreach ($messages as $message) {
                echo '<div class="chat-message">';
                echo '<span class="username">' . htmlspecialchars($message['username']) . '</span>: ';
                echo '<span class="message">' . htmlspecialchars($message['message']) . '</span>';
                echo '<span class="timestamp">' . htmlspecialchars($message['created_at']) . '</span>';
                echo '</div>';
            }
        } else {
            $username = $_POST["username"] ?? "";
            $message = $_POST["message"] ?? "";

            if (!empty($username) && !empty($message)) {
                require_once '../core/Database.php';
                require_once '../controllers/ChatroomController.php';

                $pdo = new Database();
                $chatMessageModel = new ChatMessage($pdo);
                $chatMessageModel->saveMessage($username, $message);
            }
        }
    }
    ?>
</body>
</html>