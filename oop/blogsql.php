<?php
namespace Test\Blog;
session_start();
require_once '../vendor/autoload.php';


class Blogs{
    public $tỉtle;
    public $posts;
    protected $id;
    private $connection;


    public function __construct()
    {
        $this->connection = new Database();
    }
 
    public function addPosts($title,$posts) {
    
        $sql = "insert into blog (title,posts) values ('$title','$posts')";
        $result = $this->connection->connect()->query($sql);
        if ($result){
            echo 'thêm thành công bài viết: ' . $title;
            $this->connection->close();
            return;
        }
        echo 'có lỗi add';
    }
    public function updatePosts($title,$posts)
    {
        $sql = "update blog set title = '$title', posts ='$posts' where title = '$title'";
        $result = $this->connection->connect()->query($sql);
        if ($result) {
            echo 'update thành công:' . $title; 
            $this->connection->close();
            return;
        }
        echo 'update thất bại';
    }
    public function delPost($id)
    {
        $sql = "delete from blog where id=$id";
        $result = $this->connection->connect()->query($sql);
        if ($result) {
            echo 'xóa thành công:' . $id;
            $this->connection->close();
            return;
        }
        echo 'vui lòng kiểm tra lại Id';
    }
    public function getposts()
    {
        $sql = "select * from blog";
        $result = $this->connection->connect()->query($sql);
        $row = $result->fetch_all(MYSQLI_ASSOC);
        return $row;
    }
    }

?>
