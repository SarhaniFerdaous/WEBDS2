<?php
require_once '../core/Controller.php';
session_start();

class UserController extends Controller {
    public function login() {
        $userModel = $this->model('User');
        $user = $userModel->getUser($_POST['username'], $_POST['password']);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: /Palestine/views/index.php');
        } else {
            header('Location: /Palestine/views/login_err.php');
        }
    }

    public function register() {
        $userModel = $this->model('User');
        $userModel->createUser($_POST['username'], $_POST['password']);
        header('Location: /Palestine/views/login.php');
    }
}
?>