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
    <!-- Main Content-->
    <?php

    if (empty($_SESSION['username'])) {
    ?>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <form action="./actions/login.php" method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example1" name="newusername" class="form-control" />
                            <label class="form-label" for="form2Example1">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="newpassword1" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="newpassword2" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Nhập lại Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->

                        <!-- Submit button -->
                        <button type="submit" name="register" class="btn btn-primary btn-block mb-4">Register</button>

                        <!-- Register buttons -->
                        <div class="text-center">
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
    <!-- Footer-->
    <?php
    include_once './components/footer.php';
    include_once './components/script.php';
    ?>
</body>

</html>