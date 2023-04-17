<?php
session_start();
require_once '../vendor/autoload.php';

use Test\Blog\Users;

// login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $user = new Users();
    $result = $user->login($username, $password);
    if (!$result) {
        $_SESSION['messenger'] = 'Tài khoản hoặc mật khẩu không đúng';
        header("Location: http://localhost/learn/learning/test_blog/author.php");
        die;
    }
} else {
    $_SESSION['messenger'] = 'Chưa nhập tài khoản hoặc mật khẩu';
    header("Location: http://localhost/learn/learning/test_blog/author.php");
    die;
}


// header('Location: ' . $_SERVER['HTTP_REFERER']);
header("Location: http://localhost/learn/learning/test_blog/index.php");
// header("Location: http://localhost/learn/learning/test_blog");
// $page = 'author.php';
