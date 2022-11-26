<?php
include 'components/version.php';
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
                        <h2>Blogs</h2>
                        <div class="links">
                            <a href="#">home</a> <span> / </span>
                            <p>Blogs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- CARDS SECTION STARTS HERE -->
    <section class="latest-post-sec mt-0 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="heading">
                        <h2>latest posts</h2>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-4 col-sm-6">
                    <!-- Card 1 -->
                    <div class="card mt-5 mt-md-0" style="width: auto;">
                        <img src="./img/post-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">reason for smile</h3>
                            <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                            <a href="#" class="btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Card 2 -->
                    <div class="card mt-5 mt-md-0" style="width: auto;">
                        <img src="./img/post-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">new moments</h3>
                            <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                            <a href="#" class="btn ">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Card 3 -->
                    <div class="card mt-5 mt-md-0" style="width: auto;">
                        <img src="./img/post-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">hints for life</h3>
                            <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                            <a href="#" class="btn ">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Card 4 -->
                    <div class="card mt-5 " style="width: auto;">
                        <img src="./img/post-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">looking ack</h3>
                            <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                            <a href="#" class="btn ">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Card 5 -->
                    <div class="card mt-5 " style="width: auto;">
                        <img src="./img/post-5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">laugh and cry</h3>
                            <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                            <a href="#" class="btn ">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <!-- Card 6 -->
                    <div class="card mt-5 " style="width: auto;">
                        <img src="./img/post-6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">regret no more</h3>
                            <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                            <a href="#" class="btn ">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!-- CARDS SECTION ENDS HERE -->
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