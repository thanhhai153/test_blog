<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Delete Blog';
include_once './components/meta.php';
?>

<body>
    <!-- Navigation + Page Header-->
    <?php
    require_once 'vendor/autoload.php';

    use Test\Blog\Users;

    include_once './components/header.php';
    $messenger = '';
    if (isset($_SESSION['messenger'])) {
        $messenger = $_SESSION['messenger'];
        unset($_SESSION['messenger']);
    }
    ?>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="actions\addposts.php" method="post">
                    <h3>Xóa sản bài viết</h3>
                    <h3>Bài viết</h3>

                    <input type="text" name="title" placeholder="title" class="form-control">
                    <input type="submit" name="delposts" value="Xóa bài viết">
                </form>
                <button onclick="document.location='index.php'">Trở về trang chủ</button>
            </div>
        </div>
    </div>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php
                require_once './vendor/autoload.php';

                use Test\Blog\Blogs;

                $blog = new Blogs();
                $posts = $blog->getPosts();
                // var_dump($posts); exit;
                foreach ($posts as $post) {

                    $id = $post['id'];
                    $title = $post['title'];
                    $posts = $post['posts'];


                ?>
                    <h2 class="section-heading"><?= $title ?></h2>
                    <p><?= $posts ?></p>

                <?php

                }
                ?>

            </div>
        </div>
    </div>
    <?php
    include_once './components/footer.php';
    include_once './components/script.php';
    ?>

</body>

</html>