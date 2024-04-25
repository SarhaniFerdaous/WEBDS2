<?php
session_start(); // Start the session

require_once '../controllers/ArticleController.php';

// Create an instance of ArticleController
$articleController = new ArticleController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the form submission
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imageURL = $_POST['image']; // Changed from 'image_url' to 'image'
    $userID = $_POST['userID']; // Changed from 'user_id' to 'userID'

    $articleController->addArticle($title, $content, $imageURL, $userID);

    // Redirect to a success page or handle any other logic after adding the article
    header("Location: Articles.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{

            background-image: url('p.jpg');
        }
        .container {
            margin-bottom: 20px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.7); /* Couleur de fond semi-transparente */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            overflow-wrap: break-word; /* Ajout de la propriété pour le texte long */
        }
        .container {
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Add New article</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">article title :</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">article Content :</label>
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image (URL) :</label>
                <input type="text" class="form-control" id="image" name="image" required> <!-- Changed from 'image_url' to 'image' -->
            </div>
            <div class="form-group">
                <label for="userID">Your Name :</label>
                <input type="text" class="form-control" id="userID" name="userID" required> <!-- Changed from 'user_id' to 'userID' -->
            </div>
            <button type="submit" class="btn btn-primary">Ajouter l'article</button>
        </form>
    </div>
</body>
</html>
