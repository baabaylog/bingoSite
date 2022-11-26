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
    <link rel="stylesheet" href="./style/slick.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/slick-theme.css?v = <?= $version ?>">
    <!-- CSS STYLE SHEET LINK -->
    <link rel="stylesheet" href="./style/style.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/service.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/team.css?v = <?= $version ?>">


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
                        <h2>our team</h2>
                        <div class="links">
                            <a href="#">home</a> <span> / </span>
                            <p>our team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- ABOUT SECTION STARTS HERE -->
    <section class="about-sec py-5">
        <div class="container">
            <div class="row py-4 mt-4 justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <h2 class="fw-bold mb-2">about us</h2>
                    <p class="px-3 pb-1 fs-6">   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa placeat voluptas tempore recusandae quasi nesciunt in, facilis animi. Sint, possimus?  </p>
                    <div class="line mx-auto"></div>
                </div>
            </div>
            <div class="row mt-5 py-4">
                <div class="col-md-6">
                    <img src="./img/about-us.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 mt-5  mt-md-0">
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum nulla sed justo tempor posuere sit amet sit amet ligula. Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus ex blandit a.</p>
                    <p class="fs-6 pb-2">Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus ex blandit a</p>
                    <h4 class="fw-bold text-black fs-4 mt-4">lorem ipsum dolor sit.</h4>
                    <ul>
                        <li>
                        <ion-icon class="pe-2 fs-10" name="checkmark-circle-outline"></ion-icon>
                        web development
                        </li>
                        <li>
                        <ion-icon class="pe-2 fs-10" name="checkmark-circle-outline"></ion-icon>
                        website design
                        </li>
                        <li>
                        <ion-icon class="pe-2 fs-10" name="checkmark-circle-outline"></ion-icon>
                        SEO service
                        </li>
                        <li>
                        <ion-icon class="pe-2 fs-10" name="checkmark-circle-outline"></ion-icon>
                        application development
                        </li>
                        <li>
                        <ion-icon class="pe-2 fs-10" name="checkmark-circle-outline"></ion-icon>
                            UI/UX design
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- TEAM SECTION STARTS HERE -->
    <?php include 'components/team-sec.php' ?>
    <!-- TEAM SECTION ENDS HERE -->
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
    <script src="./js/slick.min.js?v = <?= $version ?>"></script>
    <!-- Java Script link -->
    <script src="./js/app.js?v=<?= $version ?>"></script>
    <script>

    </script>
</body>

</html>