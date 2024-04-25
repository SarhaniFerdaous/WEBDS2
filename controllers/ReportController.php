<?php
require_once '../models/ArticleService.php';
require_once '../core/Controller.php';

class ReportController extends Controller {
    private $articleService;

    public function __construct() {
        $this->articleService = new ArticleService();
    }

    public function reportArticle($articleID, $userID, $reason) {
        $this->articleService->reportArticle($articleID, $userID, $reason);
        header("Location: article_view.php?id=$articleID");
        exit();
    }
}
?>