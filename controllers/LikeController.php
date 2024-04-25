<?php
require_once '../models/ArticleService.php';
require_once '../core/Controller.php';

class LikeController extends Controller {
    private $articleService;

    public function __construct() {
        $this->articleService = new ArticleService();
    }

    public function likeArticle($articleID, $userID) {
        $this->articleService->likeArticle($articleID, $userID);
        header("Location: article_view.php?id=$articleID");
        exit();
    }
}
?>
