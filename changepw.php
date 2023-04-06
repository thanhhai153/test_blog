<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="./css/main.css" rel="stylesheet" />

</head>

<body>
    <?php
    session_start();
    $messenger = '';
    require_once 'usersql.php';
    if (!empty($_SESSION['messenger'])) {
        $messenger = $_SESSION['messenger'];
        unset($_SESSION['messenger']);
    }

    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="addblog.php">Add Blog</a></li>

                    <li class="nav-item header__navbar-user"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">
                            <img src="https://www.nwf.org/-/media/NEW-WEBSITE/Shared-Folder/Wildlife/Mammals/mammal_mule-deer-California_Richard-Douse_600x300.ashx" alt="" class="header__navbar-user-img"> <?= $_SESSION['username'] ?> </a>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item" >
                                <button onclick="document.location='changepw.php'">Thay đổi mật khẩu</button>
                            </li>
                            <li class="header__navbar-user-item header__navbar-user-item-separate">
                                <form action="logout.php" method="post">
                                    <button type="submit">Đăng xuất</button>
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="login.php" method="post">
                    <!-- Old Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="oldpassword" class="form-control" />
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
                    <button onclick="document.location='index.html'" class="btn btn-primary btn-block mb-4">Trở về trang chủ</button>
                </form>
            </div>
        </div>
    </div>


    <?php

    ?>
    <!-- Footer-->
    <?php
    include 'footer.php';
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>