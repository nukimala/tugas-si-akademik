<?php
 class AuthMiddleware
 {
    public function handle()
    {
        if (!isset($_SESSION['login'])){

        header('location: /si-akademik/public/login');
        exit;
        }
    }
 }
