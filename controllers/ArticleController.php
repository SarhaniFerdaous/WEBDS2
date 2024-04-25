
3 of 2,364
control
Inbox

Robbana Amenallah
Attachments
19:21 (20 minutes ago)
to me


 7 attachments
  • Scanned by Gmail
<?php
// controllers/ArticleController.php
require_once '../core/Controller.php';
require_once '../models/ArticleService.php';

class ArticleController extends Controller {
    private $articleService;

    public function __construct() {
        $this->articleService = new ArticleService();
    }

    public function viewArticles() {
        $articles = $this->articleService->getAllArticles();
        $this->view('articles', ['articles' => $articles]);
    }

    public function viewArticle($articleId) {
        $article = $this->articleService->getArticleById($articleId);
        $comments = $this->articleService->getCommentsByArticleId($articleId);
        $this->view('article', ['article' => $article, 'comments' => $comments]);
    }

    public function addArticle() {
        // Assuming form data is submitted via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $imageURL = $_POST['image']; // Make sure it matches the input name in your HTML form
            $userID = $_POST['userID']; // Make sure it matches the input name in your HTML form
    
            $this->articleService->addArticle($title, $content, $imageURL, $userID);
    
            // Redirect to the article view page or handle success logic
            header("Location: Articles.php");
            exit();
        }
    }
    

    public function addComment() {
        // Assuming form data is submitted via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $articleID = $_POST['article_id']; // Changed from 'articleID' to 'article_id'
            $userID = $_POST['user_id'];
            $commentText = $_POST['comment_text'];

            $this->articleService->addComment($articleID, $userID, $commentText);

            // Redirect to the article view page
            header("Location: article_view.php?id=$articleID");
            exit();
        }
    }

    public function likeArticle() {
        // Assuming form data is submitted via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $articleID = $_POST['article_id'];
            $userID = $_POST['user_id'];

            $this->articleService->likeArticle($articleID, $userID);

            // Redirect to the article view page
            header("Location: article_view.php?id=$articleID");
            exit();
        }
    }

    public function reportArticle() {
        // Assuming form data is submitted via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $articleID = $_POST['article_id'];
            $userID = $_POST['user_id'];
            $reason = $_POST['reason'];

            $this->articleService->reportArticle($articleID, $userID, $reason);

            // Redirect to the article view page
            header("Location: article_view.php?id=$articleID");
            exit();
        }
    }


    
}


?>