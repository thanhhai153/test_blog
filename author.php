<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Login';
include_once './components/meta.php';
?>

<body>
    <!-- Navigation + Page Header-->
    <?php
    include_once './components/header.php';
    ?>



    <!-- login form -->

    <?php
    if (empty($_SESSION['username'])) {
    ?>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <form action="./actions/login.php" method="post">
                        <!-- Uesername input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example1" name="username" class="form-control" />
                            <label class="form-label" for="form2Example1">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="login" class="btn btn-primary btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="register.php">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="submit" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
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