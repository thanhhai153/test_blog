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
    include_once './components/header.php';
    ?>

    <!-- message -->
    <?php
    if ($messenger) {
    ?>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="alert alert-primary" role="alert">
                        <?= $messenger ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <!-- Divider-->
                <div class="post-preview">
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
                        <a href="post.php">
                            <h3 class="post-title"><?= $title ?></h3>
                            <p id="post-content"><?= $posts ?></p>

                            <p class="post-meta">
                                Posted by
                                <a href="#!">Ahihi</a>
                                on September 24, 2023
                            </p>
                        </a>
                    <?php

                    }
                    ?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!=">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php
        include_once './components/footer.php';
        include_once './components/script.php';
        ?>



</body>

</html>