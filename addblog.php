<html>
<form action="" method="post">
    <h3>Thêm blog</h3><br>
    <div class="mb-3">
        <h3>Tiêu đề</h3>
        <input type="text" name="title" placeholder="title">
    </div>
    <div class="mb-3">
    <h3>Bài viết</h3>
        <textarea name="posts" rows="5"></textarea>
    </div>
    <input type="submit" name="addposts" value="Đăng bài">
</form>

<form action="" method="post">
    <h3>Update bài viết</h3>
    id bài viết <input type="text" name="id"> <br>
    <div class="mb-3">
        <h3>Tiêu đề</h3>
        <input type="text" name="title" placeholder="title">
    </div>
    <div class="mb-3">
    <h3>Bài viết</h3>
        <textarea name="posts" rows="5"></textarea>
    </div>
    <input type="submit" name="updateposts" value="update">
</form>


<form action="" method="post">
    <h3>Xóa sản bài viết</h3>
    id bài viết<input type="text" name="id"> <br>
    <input type="submit" name="delposts" value="Xóa sản phẩm">
</form>
<button onclick="document.location='index.html'">Trở về trang chủ</button>

</html>
<?php
session_start();
$messenger = '';
require_once 'blogsql.php';
if (!empty($_SESSION['messenger'])) {
    $messenger = $_SESSION['messenger'];
    unset($_SESSION['messenger']);
}

if (!empty($_POST['addposts'])) {
    $title = $_POST['title'];
    $posts = $_POST['posts'];
    addPosts($title,$posts);
}

if (!empty($_POST['updateposts'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $posts = $_POST['posts'];
    updatePosts($id, $title, $posts);
}
if (!empty($_POST['delposts'])) {
    $id = $_POST['id'];
    delPost($id);
}

?>