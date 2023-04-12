<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Home';
include_once './components/meta.php';
?>

<body>
    <!-- Navigation + Page Header-->
    <?php
    require_once 'vendor/autoload.php';
    use Test\Blog\Users;
    include_once './components/header.php';
    ?>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="actions\addposts.php" method="post">
                    <h3>Thêm blog</h3><br>
                    <div class="form-outline mb-4">
                        <h3>Tiêu đề</h3>
                        <input type="text" name="title" placeholder="title" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <h3>Bài viết</h3>
                        <textarea name="posts" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="submit" name="addposts" value="Đăng bài">
                </form>

                <form  action="actions\addposts.php" method="post">
                    <h3>Update bài viết</h3>
                    id bài viết 
                    <input type="text" name="id"class="form-control" class="form-control"> <br>
                    <div class="form-outline mb-4">
                        <h3>Tiêu đề</h3>
                        <input type="text" name="title" placeholder="title" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <h3>Bài viết</h3>
                        <textarea name="posts" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="submit" name="updateposts" value="update">
                </form>


                <form action="actions\addposts.php" method="post">
                    <h3>Xóa sản bài viết</h3>
                    id bài viết<br>
                    
                    <input type="text" name="id" class="form-control" class="form-control"> <br>
                    <input type="submit" name="delposts" value="Xóa bài viết" >
                </form>
                <button onclick="document.location='index.php'">Trở về trang chủ</button>

            </div>
        </div>
    </div>
    <?php
    include_once './components/footer.php';
    include_once './components/script.php';
    ?>

</body>

</html>