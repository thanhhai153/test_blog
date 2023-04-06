<?php
session_start();
$_SESSION['username']="";
// Trở về trang trước
header("Location: index.html");
?>