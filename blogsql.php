<?php
require_once"connsql.php";
$conn = connection();

function addPosts($title,$posts){
    $conn = connection();
    $sql = "insert into blog (title,posts) values ('$title','$posts')";
    if ($conn->query($sql)){
        echo 'thêm thành công bài viết: ' . $title;
        disconnect($conn);
        return;
    }
}
function updatePosts($title,$posts)
{
    $conn = connection();
    $sql = "update blog set title = '$title', posts ='$posts' where title = '$title'";
    if ($conn->query($sql)) {
        echo 'update thành công:' . $title; 
        disconnect($conn);
        return;
    }
    echo 'update thất bại';
}
function delPost($id)
{
    $conn = connection();
    $sql = "delete from blog where id=$id";
    if ($conn->query($sql)) {
        echo 'xóa thành công:' . $id;
        disconnect($conn);
        return;
    }
    echo 'vui lòng kiểm tra lại Id';
}
function getposts()
{
    $conn = connection();
    $sql = "select * from blog";
    $result = $conn->query($sql);
    $row = $result->fetch_all(MYSQLI_ASSOC);
    // check fetch_assoc
    return $row;
}

?>
