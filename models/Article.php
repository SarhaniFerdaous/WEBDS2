<?php 
class Article {
    private $id;
    private $title;
    private $content;
    private $imageURL;
    private $userID;

    public function __construct($id, $title, $content, $imageURL, $userID) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->imageURL = $imageURL;
        $this->userID = $userID;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getImageURL() {
        return $this->imageURL;
    }

    public function getUserID() {
        return $this->userID;
    }
}
?>