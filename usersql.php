<?php
require_once 'connsql.php';
$conn = connection();

function adduser($newusername, $newpassword1)
{
    $conn = connection();
    $sql = "insert into user (username, password) values ('$newusername','$newpassword1')";
    if ($conn->query($sql)) {
        $_SESSION['messenger'] = "Tạo tài khoản: $newusername thành công";
        disconnect($conn);
        return;
    }
}

function getUserByUserName($username, $password)
{
    $conn = connection();
    $sql = "select * from user where username = '$username' and password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    }
    return false;
}

function getEistUser($newusername)
{
    $conn = connection();
    $sql = "select * from user where username= '$newusername'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    }
    return false;
}

function changepw($username, $newpassword1)
{
    $conn = connection();
    $sql = "update user set password ='$newpassword1' where username ='$username'";
    if ($conn->query($sql)) {
        $_SESSION['messenger'] = "Đổi password thành công";
        disconnect($conn);
        return;
    }
    else{
        $_SESSION['messenger'] = 'có lỗi, vui lòng kiểm tra lại';
    }
}
function getuser()
{
    $conn = connection();
    $sql = "select * from user";
    $result = $conn->query($sql);
    $row = $result->fetch_all();
    disconnect($conn);
    return $row;
}
