<?php
session_start();

$messenger = '';
if (!empty($_SESSION['messenger'])) {
    $messenger = $_SESSION['messenger'];
    unset($_SESSION['messenger']);
}

?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php">Test Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.php">Sample Post</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                <?php
                if (isset($_SESSION['username'])) {
                ?>

                    <li class="nav-item header__navbar-user"><a class="nav-link px-lg-3 py-3 py-lg-4" href="addblog.php">Manage Blog</a>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <button onclick="document.location='addblog.php'">Add Blog</button>
                            </li>
                            <li class="header__navbar-user-item">
                                <button onclick="document.location='updateblog.php'">Update Blog</button>
                            </li>
                            <li class="header__navbar-user-item">
                                <button onclick="document.location='deleteblog.php'">Delete Blog</button>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item header__navbar-user"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">
                            <img src="https://www.nwf.org/-/media/NEW-WEBSITE/Shared-Folder/Wildlife/Mammals/mammal_mule-deer-California_Richard-Douse_600x300.ashx" alt="" class="header__navbar-user-img">
                            <?= $_SESSION['username'] ?> </a>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <button onclick="document.location='changepw.php'">Change Password</button>
                            </li>
                            <li class="header__navbar-user-item header__navbar-user-item-separate">
                                <form action="http://localhost/learn/learning/test_blog/actions/logout.php" method="post">
                                    <button type="submit">Log Out</button>
                                </form>
                            </li>

                        </ul>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="author.php">Log In/Register</a></li>
                <?php
                }
                ?>
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