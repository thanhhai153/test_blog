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
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="./actions/login.php" method="post">
                    <!-- Old Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control" />
                        <label class="form-label" for="form2Example1">Password hiện tại</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="newpassword1" class="form-control" />
                        <label class="form-label" for="form2Example2">Password mới</label>
                    </div>
                    <!-- Password input 2 -->
                    <div class="form-outline mb-4">
                        <input type="password" name="newpassword2" class="form-control" />
                        <label class="form-label" for="form2Example2">nhập lại password mới</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="changepw" class="btn btn-primary btn-block mb-4">Đổi password</button>
                    <button onclick="document.location='index.php'" class="btn btn-primary btn-block mb-4">Trở về trang chủ</button>
                </form>
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