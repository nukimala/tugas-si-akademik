<?php

class AuthController
{
    public function index()
    {
        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function process()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'admin' && $password === '1234') {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("location: /si-akademik/public/dashboard");
            exit;
        } else {
            $_SESSION['error'] = "Username atau password salah!";
            header("Location: /si-akademik/public/login");
            exit;
        }
    }

    

    public function logout()
    {
        session_destroy();
        header("location: /si-akademik/public/login");
        exit;
    }
        
}
