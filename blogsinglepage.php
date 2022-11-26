<?php
include 'components/version.php';
include './connection/connection.php';

if (isset($_POST['sub'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);

    if ($name && $email && $msg) {
        $sqli = "INSERT INTO `comments`(`name`, `email`, `msg`) VALUES ('$name', '$email', '$msg')";
        $run = mysqli_query($conn, $sqli);
    }

    header('location: ./blogsinglepage.php');
    exit;
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- Slick slider  -->
    <link rel="stylesheet" href="./style/slick-theme.css">
    <link rel="stylesheet" href="./style/slick.css">
    <!-- CSS STYLE SHEET LINK -->
    <link rel="stylesheet" href="./style/style.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/about.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/singleblog.css?v = <?= $version ?>">
</head>

<body>

    <!-- PRELOADER STARTS HERE  -->
    <?php
    include_once 'components/preloader.php';
    ?>
    <!-- PRELOADER ENDS HERE  -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- NAVBAR STARS HERE -->
    <?php include_once 'components/navbar.php'; ?>
    <!-- NAVBAR ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- HEADER SECTION STARTS HERE -->
    <section class="header-section">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="main-txt">
                        <h2>Blog single </h2>
                        <div class="links">
                            <a href="#">home</a> <span> / </span>
                            <p>Blog single </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- SINGLE BLOG SECTION STARTS HERE -->
    <section class="single-blog-sec py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <article>
                        <img src="./img/post-1.jpg" class="img-fluid" alt="">
                        <div class="post-sec">
                            <h2 class="fw-bold pb-2">Cras Sed Elit Sit Amet.</h2>
                            <ul class="pb-3">
                                <li>
                                    <a href="./index.php">admin</a>
                                    /
                                </li>
                                <li>
                                    <a href="./index.php" class="ms-3">30 comments </a>
                                    /
                                </li>
                                <li>
                                    <a href="./index.php" class="ms-3">35 likes </a>
                                    /
                                </li>
                            </ul>
                            <p class="pb-2 fs-6">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archite beatae vitae dicta sunt explicabo. nemo enim ipsam voluptatem quia voluptassit.aspernatur aut odit aut fugit.</p>
                            <p class="pb-2 fs-6">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque poro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
                            <blockquote class="py-5 px-4 mb-4 ">
                                Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim iest.laborum. sed perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque laudantium.
                            </blockquote>
                            <p class="pb-2 fs-6 pt-1">
                                Occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Seper spiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem. aperiam eaque ipsa quae ab illo inventore veritatis.
                            </p>
                            <ul class="social mb-4">
                                <li>
                                    <ion-icon class="me-3" name="logo-twitter"></ion-icon>
                                </li>
                                <li>
                                    <ion-icon class="me-3" name="logo-linkedin"></ion-icon>
                                </li>
                                <li>
                                    <ion-icon class="me-3" name="logo-facebook"></ion-icon>
                                </li>
                                <li>
                                    <ion-icon class="me-3" name="logo-skype"></ion-icon>
                                </li>
                            </ul>
                            <div class="comments">
                                <h3 class="fw-bold pb-4 pt-5">2 comments</h3>
                                <ul>
                                    <li>
                                        <div class="com mb-4">
                                            <img src="./img/comment-1.jpg" class="img-fluid" alt="">
                                            <div class="inner-com ps-3">
                                                <h4 class="fw-bold text-black">Anke Kirsch</h4>
                                                <h6 class="text-black fs-6">Aug 20, 2018</h6>
                                                <p class="pe-4 fs-6">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudant tota rem ape riamipsa eaque.</p>
                                                <a href="./index.php">reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="com mb-4">
                                            <img src="./img/comment-2.jpg" class="img-fluid" alt="">
                                            <div class="inner-com ps-3">
                                                <h4 class="fw-bold text-black">Falk Burger</h4>
                                                <h6 class="text-black fs-6">Aug 20, 2018</h6>
                                                <p class="pe-4 fs-6">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudant tota rem ape riamipsa eaque.</p>
                                                <a href="./index.php">reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- COMMENTS FORM -->

                            <form method="POST">
                                <h3 class="fw-bold py-4">leave a comment</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-4" placeholder="first name" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control mb-4" placeholder="email" name="email">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <textarea name="msg" id="msg" class="form-control" placeholder="message" rows="7"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <input type="submit" name="sub" class="butn" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-4   mt-5 mt-lg-0">
                    <div class="side-col ps-4">
                        <div class="input-group mb-3 ">
                            <input type="text" class="form-control py-4" placeholder="Search..." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <a type="submit" class="input-group-text py-4 d-flex justify-content-center align-items-center" id="inputGroup-sizing-default">
                                <ion-icon name="search-outline"></ion-icon>
                            </a>
                        </div>
                        <h2 class="pt-3 pb-3 fs-3 fw-bold">categories</h2>
                        <ul class="categries">
                            <li class="py-3">
                                <a href="./blogpage.php" >financial advice</a>
                            </li>
                            <li class="py-3">
                                <a href="./blogpage.php" >buisness growth</a>
                            </li>
                            <li class="py-3">
                                <a href="./blogpage.php" >investment marketing</a>
                            </li>
                            <li class="py-3">
                                <a href="./blogpage.php" >buisness consulting</a>
                            </li>
                            <li class="py-3">
                                <a href="./blogpage.php" >advanced analytics</a>
                            </li>
                            <li class="py-3">
                                <a href="./blogpage.php" >investment marketing</a>
                            </li>
                        </ul>
                        <h2 class="fw-bold fs-3 pt-4 pb-4">latest post</h2>
                        <ul class="latest-post">
                            <li class="d-flex ">
                                <img src="./img/post-1.jpg" class="img-fluid me-3 " alt="">
                                <div class="text d-flex flex-column ">
                                    <a href="./blogpage.php" class="pb-2" >Condentum Quam Vitae Ligu. tempor bibendum.</a> 
                                    <h6>Aug 20, 2018</h6>
                                </div>
                            </li>
                            <li class="d-flex ">
                                <img src="./img/post-2.jpg" class="img-fluid me-3 " alt="">
                                <div class="text d-flex flex-column ">
                                    <a href="./blogpage.php" class="pb-2" >Condentum Quam Vitae Ligu. tempor bibendum.</a> 
                                    <h6>Aug 20, 2018</h6>
                                </div>
                            </li>
                            <li class="d-flex ">
                                <img src="./img/post-3.jpg" class="img-fluid me-3 " alt="">
                                <div class="text d-flex flex-column ">
                                    <a href="./blogpage.php" class="pb-2" >Condentum Quam Vitae Ligu. tempor bibendum.</a> 
                                    <h6>Aug 20, 2018</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SINGLE BLOG SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- FOOTER SECTION STARTS HERE -->
    <?php include_once 'components/footer.php'; ?>
    <!-- FOOTER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- ION ICON LINK  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- JQuery link  -->
    <script src="./js/jquery3.6.0.js"></script>
    <!-- slikc  js  -->
    <script src="./js/slick.min.js"></script>
    <!-- Java Script link -->
    <script src="./js/app.js?v=<?= $version ?>"></script>
    <script>

    </script>
</body>

</html>