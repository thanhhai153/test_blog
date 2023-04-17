<?php
session_start();
require_once '../vendor/autoload.php';
use Test\Blog\Users;
//changepw
if (isset($_POST['changepw'])) {
    $username = $_SESSION['username'];
    $password = md5($_POST['password']);
    $newpassword1 = md5($_POST['newpassword1']);
    $newpassword2 = md5($_POST['newpassword2']);
    $user = new Users();
    $checkuser = $user->getUserByUserName($username, $password);
    if ($checkuser) {
        if ($newpassword1 == $newpassword2) {
            $user->changepw($username, $newpassword1);
        } else {
            $_SESSION['messenger'] = 'password mới không trùng nhau';
            header("Location: http://localhost/learn/learning/test_blog/changepw.php");
            die;
        }
    } else {
        $_SESSION['messenger'] = 'Nhập sai password hiện tại';
        header("Location: http://localhost/learn/learning/test_blog/changepw.php");
        die;
    }
}