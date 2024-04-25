<?php
require_once '../models/ArticleService.php';
require_once '../core/Controller.php';

class CommentController extends Controller {
    private $articleService;

    public function __construct() {
        $this->articleService = new ArticleService();
    }

    public function addComment($articleID, $userID, $commentText) {
        $this->articleService->addComment($articleID, $userID, $commentText);
        header("Location: article_view.php?id=$articleID");
        exit();
    }
}
?>