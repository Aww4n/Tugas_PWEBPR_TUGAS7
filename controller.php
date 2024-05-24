<?php
require_once 'models/UserModel.php';

class AuthController {
    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            header("Location: dashboard.php");

        } else {
            echo "Email or password is incorrect.";
        }
    }

    public function register() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password === $confirm_password) {
            $userModel = new UserModel();
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $userModel->createUser($name, $email, $hashedPassword);

            header("Location: index.php");
        } else {

            echo "Passwords do not match.";
        }
    }
}
?>
