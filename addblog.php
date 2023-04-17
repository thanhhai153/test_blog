<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Addblog';
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
                    <h2>Thêm blog</h2><br>
                    <div class="form-outline mb-4">
                        <h3>Tiêu đề</h3>
                        <input type="text" name="title" placeholder="title" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <h3>Bài viết</h3>
                        <textarea class="ckeditor" name="posts" rows="10"></textarea>
                    </div>
                    <input type="submit" name="addposts" value="Đăng bài">
                </form>

            </div>
        </div>
    </div>
    <?php
    include_once './components/footer.php';
    include_once './components/script.php';
    ?>

</body>

</html>