<?php
 class AuthMiddleware
 {
    public function handle()
    {
        if (!isset($_SESSION['login'])){
            $_SESSION['error'] = "Anda belum login!";
            header('location: /si-akademik/public/login');
            exit;
        }
    }
 }
