<?php
// models/ArticleService.php
require_once '../core/Model.php';

class ArticleService extends Model {
    public function getAllArticles() {
        $stmt = $this->db->prepare("SELECT * FROM articles");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete() {
        $stmt = $this->conn->prepare("DELETE FROM articles WHERE id = :id");
        $stmt->execute();
        $stmt->execute(['id' => $id]);
    }

    public function getArticle() {
        $stmt = $this->db->prepare("SELECT * FROM articles ORDER BY id DESC LIMIT 1;");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getCommentsByArticleId() {
        $stmt = $this->db->prepare("SELECT comment_text FROM comments ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function likeArticle($articleId, $userId) {
        $stmt = $this->db->prepare("INSERT INTO likes (article_id, user_id) VALUES (:article_id, :user_id)");
        $stmt->bindParam(':article_id', $articleId, PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function addComment($articleId, $userId, $commentText) {
        $stmt = $this->db->prepare("INSERT INTO comments (article_id, user_id, comment_text) VALUES (:article_id, :user_id, :comment_text)");
        $stmt->bindParam(':article_id', $articleId, PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':comment_text', $commentText, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function reportArticle($articleId, $userId, $reason) {
        $stmt = $this->db->prepare("INSERT INTO reports (article_id, user_id, reason) VALUES (:article_id, :user_id, :reason)");
        $stmt->bindParam(':article_id', $articleId, PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':reason', $reason, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function addArticle($title, $content, $imageURL, $userId) {
        $stmt = $this->db->prepare("INSERT INTO articles (title, content, image_url, user_id, created_at) VALUES (:title, :content, :image_url, :user_id, NOW())");
        $stmt->bindParam(':title', $title, PDO::PARAM_STR); // Bind as string
        $stmt->bindParam(':content', $content, PDO::PARAM_STR); // Bind as string
        $stmt->bindParam(':image_url', $imageURL, PDO::PARAM_STR); // Bind as string
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_STR); // Bind as integer
    
        $stmt->execute();
    }

    }
?>