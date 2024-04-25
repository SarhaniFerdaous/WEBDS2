<?php
    require_once '../core/Database.php';
    require_once '../models/ArticleService.php';
    require_once '../Controllers/LikeController.php';
    require_once '../Controllers/ReportController.php';
    require_once '../Controllers/CommentController.php';

    $articleService = new ArticleService();
    $likeController = new LikeController();
    $reportController = new ReportController();
    $commentController = new CommentController();

    $articles = $articleService->getAllArticles();

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
    <h1 class="text-center mt-3 mb-4">Article List</h1>
    <div class="container">
        <?php foreach ($articles as $article): ?>
            <div class="row justify-content-center">
                <div class="col-md-6"> <!-- Utilisation d'une colonne de 6 pour rendre la boîte plus petite -->
                    <div class="article-box">
                        <h2><?= $article['title'] ?></h2>
                        <p><?= $article['content'] ?></p>
                        <?php if ($article && !empty($article['image_url'])): ?>
                        <img src="<?php echo $article['image_url']; ?>" alt="Photo de l'article" class="img-fluid">
                        <?php endif; ?>
                        <p>Author: <?= $article['user_id'] ?></p>
                        <p>Date: <?= $article['created_at'] ?></p>
                        <p>Likes: <?= $article['likes'] ?></p>
                        <form action="like_article.php" method="post">
                            <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                            <button type="submit" name="like" class="btn btn-primary">Like</button>
                        </form>
                        <form action="report_article.php" method="post">
                            <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                            <input type="text" name="report_reason" placeholder="Reason for reporting" class="form-control mb-2">
                            <button type="submit" name="report" class="btn btn-danger">Report</button>
                        </form>
                        <form action="add_comment.php" method="post">
                            <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                            <input type="text" name="comment_text" placeholder="Leave a comment" class="form-control mb-2">
                            <button type="submit" name="comment" class="btn btn-secondary">Comment</button>
                        </form>
                        <p><a href="article_view.php?id=<?= $article['id'] ?>" class="btn btn-link">Read more</a></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>