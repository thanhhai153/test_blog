<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Update Blog';
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
                <form  action="actions\addposts.php" method="post">
                    <h3>Chỉnh sửa bài viết</h3>
                    <div class="form-outline mb-4">
                        <h3>Tiêu đề</h3>
                        <input type="text" name="title" placeholder="title" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <h3>Bài viết</h3>
                        <textarea name="posts" class="ckeditor"></textarea>
                    </div>
                    <input type="submit" name="updateposts" value="update">
                </form>
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