<?php
require_once '../vendor/autoload.php';
use Test\Blog\Users;

// login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new Users();
    $result = $user->login($username, $password);
    if (!$result) {
        $_SESSION['messenger'] = 'Tài khoản hoặc mật khẩu không đúng';
    }
} else {
    $_SESSION['messenger'] = 'Chưa nhập tài khoản hoặc mật khẩu';
}

//changepw
if (isset($_POST['changepw'])) {
    $username = $_SESSION['username'];
    $password = $_POST['password'];
    $newpassword1 = $_POST['newpassword1'];
    $newpassword2 = $_POST['newpassword2'];
    $user = new Users();
    $checkuser = $user->getUserByUserName($username, $password);
    if ($checkuser) {
        if ($newpassword1 == $newpassword2) {
            $user->changepw($username, $newpassword1);
        } else {
            $_SESSION['messenger'] = 'password mới không trùng nhau';
        }
    } else {
        $_SESSION['messenger'] = 'Nhập sai password hiện tại';
        die;
    }
}
//register
if (isset($_POST['register'])) {
    $newusername = $_POST['newusername'];
    $newpassword1 = $_POST['newpassword1'];
    $newpassword2 = $_POST['newpassword2'];
    $user = new Users();
    $checkExistUser = $user->getEistUser($newusername);
    if ($checkExistUser) {
        $_SESSION['messenger'] = 'tên đăng nhập đã tồn tại';
        

    } else {
        if ($newpassword1 !== $newpassword2) {
            $_SESSION['messenger'] = 'Mật khẩu không trùng nhau';
        } else {
            $user->adduser($newusername, $newpassword1);
        }
    }
}
// header('Location: ' . $_SERVER['HTTP_REFERER']);
header("Location: http://localhost/learn/learning/test_blog/author.php");
// header("Location: http://localhost/learn/learning/test_blog");
// $page = 'author.php';

