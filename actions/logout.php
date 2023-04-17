<?php
session_start();
require_once '../vendor/autoload.php';
use Test\Blog\Users;
// $_SESSION['username']="";
unset($_SESSION['username']);
$_SESSION['messenger'] = "Have a nice day";
// Trở về trang trước
header("Location: http://localhost/learn/learning/test_blog");
// header('Location: ' . $_SERVER['HTTP_REFERER']);
// $page = 'index.php';
// header("Location: index.php"); exit;
// header("Location: https://google.com");
?>