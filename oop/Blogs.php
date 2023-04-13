<?php
namespace Test\Blog;
require_once "/xampp/htdocs/learn/learning/test_blog/vendor/autoload.php";

class Blogs
{
    public $tỉtle;
    public $posts;
    protected $id;
    private $connection;


    public function __construct()
    {
        $this->connection = new Database();
    }

    public function addPosts($title, $posts)
    {
        $sql = "insert into blog (title,posts) values ('$title','$posts')";
        if ($this->connection->connect()->query($sql)) {
            echo 'thêm thành công bài viết: ' . $title;
            $this->connection->close();
            return;
        }
        echo 'có lỗi add';
    }
    public function updatePosts($title, $posts)
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
    public function delPost($title)
    {
        $sql = "delete from blog where title = '$title'";
        $result = $this->connection->connect()->query($sql);
        if ($result) {
            echo 'xóa thành công:';
            $this->connection->close();
            return;
        }
        echo 'vui lòng kiểm tra lại Id';
    }
    public function getPosts()
    {
        $sql = "select * from blog";
        $result = $this->connection->connect()->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
