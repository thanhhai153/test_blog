<?php
session_start();
require_once '../vendor/autoload.php';

use Test\Blog\Users;
//register
if (isset($_POST['register'])) {
    $newusername = $_POST['newusername'];
    $newpassword1 = md5($_POST['newpassword1']);
    $newpassword2 = md5($_POST['newpassword2']);
    $user = new Users();
    $checkExistUser = $user->getEistUser($newusername);
    if ($checkExistUser) {
        $_SESSION['messenger'] = 'tên đăng nhập đã tồn tại';
        header("Location: http://localhost/learn/learning/test_blog/register.php");
        die;
    } else {
        if ($newpassword1 !== $newpassword2) {
            $_SESSION['messenger'] = 'Mật khẩu không trùng nhau';
            header("Location: http://localhost/learn/learning/test_blog/register.php");
            die;
        } else {
            $user->adduser($newusername, $newpassword1);
        }
    }
}
// trở về trang chủ
header("Location: http://localhost/learn/learning/test_blog/index.php");
