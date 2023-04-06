<?php
session_start();
// login
require_once 'connsql.php';
require_once 'usersql.php';
if (!empty($_POST['username']) && !empty($_POST['password'])) {   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = connection();
    $sql = "select * from user where username = '$username' and password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
    } else {
        $_SESSION['messenger'] = 'Tài khoản hoặc mật khẩu không đúng';
        disconnect($conn);
    }
    } else {
    $_SESSION['messenger'] = 'Chưa nhập tài khoản hoặc mật khẩu';
    }
//changepw
if (isset($_POST['changepw'])) {
    $username = $_SESSION['username'];
    $oldpassword = $_POST['oldpassword'];
    $newpassword1 = $_POST['newpassword1'];
    $newpassword2 = $_POST['newpassword2'];
    $checkuser = getUserByUserName($username, $oldpassword);

    if ($checkuser) {
        if ($newpassword1 == $newpassword2) {
            changepw($username, $newpassword1);
        } else {
            $_SESSION['messenger'] = 'password mới không trùng nhau';
        }
    } else {
        $_SESSION['messenger'] = 'Nhập sai password hiện tại';
        die;
    }
}
//register
if (!empty($_POST['register'])) {
    $newusername = $_POST['newusername'];
    $newpassword1 = $_POST['newpassword1'];
    $newpassword2 = $_POST['newpassword2'];
    $checkExistUser = getEistUser($newusername);
    if ($checkExistUser) {
        $_SESSION['messenger'] = 'tên đăng nhập đã tồn tại';
        die;
    } else {
        if ($newpassword1 !== $newpassword2) {
            $_SESSION['messenger'] = 'Mật khẩu không trùng nhau';
            die;
        } else {
            adduser($newusername, $newpassword1);
        }
    }
}
// Trở về trang trước
header("Location: author.php");
