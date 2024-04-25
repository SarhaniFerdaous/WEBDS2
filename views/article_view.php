<?php
require_once '../core/Database.php';
require_once '../models/ArticleService.php';
require_once '../Controllers/LikeController.php';
require_once '../Controllers/ReportControllor.php';
require_once '../Controllers/CommentController.php';

$articleService = new ArticleService();
$likeController = new LikeController();
$reportController = new ReportController();
$commentController = new CommentController();
$latestArticle = $articleService->getArticle(); // Assuming this method retrieves the latest article

if ($latestArticle) {
    $comments = $articleService->getCommentsByArticleId($latestArticle['id']); // Fetch comments for the latest article
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            background-image: url('p.jpg');
        }

        .article-box {
            margin-bottom: 20px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.7); /* Couleur de fond semi-transparente */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            overflow-wrap: break-word; /* Ajout de la propriété pour le texte long */
        }

        .article-box img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .article-box h2 {
            margin-bottom: 5px;
            color: black;
        }

        .article-box p {
            margin-bottom: 5px;
            color: green;
        }

        .article-box form {
            margin-bottom: 5px;
        }

        .article-box .btn {
            margin-right: 5px;
        }

        .btn-danger {
            color: white !important;
        }

        .btn-secondary {
            color: red !important;
        }

        .btn-link {
            color: blue !important;
        }
    </style>
    </head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="article-box">
                <h1><?= $latestArticle['title'] ?></h2>
                    <h3><?= $latestArticle['content'] ?></h3>
                    <?php if ($latestArticle && !empty($latestArticle['image_url'])): ?>
                        <img src="<?= $latestArticle['image_url']; ?>" alt="Article Image" class="img-fluid">
                    <?php endif; ?>
                    <h5>Author: <?= $latestArticle['user_id'] ?></h5>
                    <h5>Date: <?= $latestArticle['created_at'] ?></h5>
                    <h5>Likes: <?= $latestArticle['likes'] ?></h5>
                    <?php foreach ($comments as $comment): ?>
                        <p>unknow: <?= $comment['comment_text'] ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
} else {
    echo "No articles found.";
}
?>