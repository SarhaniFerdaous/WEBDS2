<?php
require_once '../core/Model.php';

class User extends Model {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function getUser($username, $password) {
        // Logic to get a user from the database
        $stmt = $this->conn->prepare("SELECT * FROM Users WHERE username = :username AND password = :password");
        $stmt->execute(['username' => $username, 'password' => $password]);
        return $stmt->fetch();
    }
    public function getUserById($id) {
        // Logic to get a user from the database
        $stmt = $this->conn->prepare("SELECT * FROM Users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function createUser($username, $password) {
        // Logic to create a new user in the database
        $stmt = $this->conn->prepare("INSERT INTO Users (username, password) VALUES (:username, :password)");
        $stmt->execute(['username' => $username, 'password' => $password]);
    }
    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM Users");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM Users WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
    
}

?>