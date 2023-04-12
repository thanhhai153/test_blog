<?php
session_start();
require_once '../vendor/autoload.php';
use Test\Blog\Blogs;

if (isset($_POST['addposts'])) {
    $title = $_POST['title'];
    $posts = $_POST['posts'];
    $blog = new Blogs();
    $blog->addPosts($title, $posts);
}

if (isset($_POST['updateposts'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $posts = $_POST['posts'];
    $blog = new Blogs();
    $blog->updatePosts($title, $posts);
}
if (isset($_POST['delposts'])) {
    $id = $_POST['id'];
    $blog = new Blogs();
    $blog->delPost($id);
}
header("Location: http://localhost/learn/learning/test_blog/author.php");
?>