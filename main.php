<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>testblog</title>
</head>

<body>
    <?php
    session_start();
    require_once 'blogsql.php';
    require_once 'blogsql.php';
    $messenger = '';
    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>title</td>
            <td>posts</td>
        </tr>
        <?php
        $blogs = getposts();
        foreach ($blogs as $blog) {
            $id = $blog['id'];
            $title = $blog['title'];
            $posts = $blog['posts'];
        ?>
            <tr>
                <td>
                    <?= $id ?>
                </td>
                <td>
                    <?= $title ?>
                </td>
                <td>
                    <?= $posts ?>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
        <?php
        $blogs = getposts();
        foreach ($blogs as $blog) {
            $id = $blog['id'];
            $title = $blog['title'];
            $posts = $blog['posts'];
        ?>
        <div class="col-md-10 col-lg-8 col-xl-7">
        <h2 class="section-heading"><?= $title ?></h2>
        <p><?= $posts ?></p>
        </div>
        
        <?php
        }
        ?>



    <?php
    if (!empty($_SESSION['messenger'])) {
        $messenger = $_SESSION['messenger'];
        unset($_SESSION['messenger']);
    }
    if (empty($_SESSION['username'])) {
    ?>
        <form action="login.php" method="post" class="login">
            <div>
                <?= $messenger ?>
            </div>
            <div>
                <input type="text" name="username" placeholder="Nhập user: customer">
            </div>
            <div>
                <input type="password" name="password" placeholder="Nhập pass: 123456">
            </div>

            <button type="submit" name="login" class="btn-login" onclick="message()">Đăng nhập</button>
            <a href="register.php">Đăng ký</a>

        </form>
    <?php
    } else {
    ?>
        <h2>Xin chào:
            <?= $_SESSION['username'] ?>
        </h2><br>
        <div>
            <button onclick="document.location='addblog.php'">Chỉnh sửa bài viết</button></br>
        </div>

        <br>
        <button onclick="document.location='changepw.php'">Thay đổi mật khẩu</button>
        <span>
            <form action="logout.php" method="post">
                <button type="submit">Đăng xuất</button>
            </form>
        </span>
    <?php
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>