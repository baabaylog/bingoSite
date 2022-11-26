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
    <link rel="stylesheet" href="./style/pricing.css?v = <?= $version ?>">


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
                        <h2>easy pricing</h2>
                        <div class="links">
                            <a href="#">home</a> <span> / </span>
                            <p>easy pricing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- AGENCY SECTION STARTS HERE -->
    <?php include_once 'components/agency-sec.php'; ?>
    <!-- AGENCY SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- PRICING SECTION STARTS HERE -->
    <section class="pricing-sec py-5">
        <div class="container">
            <div class="row py-4 justify-content-center text-center">
                <div class="col-md-8 col-lg-6 ">
                    <h2 class="mb-2 text-white">our greatest plan</h2>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium soluta deserunt eaque, est, quia hic odit sed incidunt officiis quidem.</p>
                    <div class="line mx-auto  mb-4"></div>
                </div>
            </div>
            <div class="row pb-5 justify-content-center">
                <div class="col-lg-4 col-md-6 px-5 px-md-3   mt-5 mt-lg-0">
                    <div class="pricing py-5 px-5"> <!-- pricing 1 -->
                        <div class="header pt-4 pb-2">
                            <h5>basic</h5>
                            <h1>$19</h1>
                            <p>Perfect for single freelancers who work by themselves</p>
                        </div>
                        <div class="body">
                            <ul class="pb-1">
                                <li class="my-4">
                                <ion-icon  name="chevron-forward-outline"></ion-icon>
                                1GB disk space
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                10 email account
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                script installer
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                1 GB storage
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                2 GB bandwidth 
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                24/7 tech support
                                </li>
                            </ul>
                            <a href="#" class="butn fw-normal ">sign up</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-5 px-md-3   mt-5 mt-lg-0">
                <div class="pricing py-5 px-5"> <!-- pricing 2 -->
                        <div class="header pt-4 pb-2">
                            <h5>standard</h5>
                            <h1>$39</h1>
                            <p>Perfect for single freelancers who work by themselves</p>
                        </div>
                        <div class="body">
                            <ul class="pb-1">
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                1GB disk space
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                50 email account
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                script installer
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                1 GB storage
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                10 GB bandwidth 
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                24/7 tech support
                                </li>
                            </ul>
                            <a href="#" class="butn fw-normal ">sign up</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-5 px-md-3   mt-5 mt-lg-0">
                <div class="pricing py-5 px-5"> <!-- pricing 3 -->
                        <div class="header pt-4 pb-2">
                            <h5>enterprise</h5>
                            <h1>$59</h1>
                            <p>Perfect for single freelancers who work by themselves</p>
                        </div>
                        <div class="body">
                            <ul class="pb-1" >
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                unlimited disk space
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                unlimited email account
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                script installer
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                unlimited storage
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                unlimited bandwidth 
                                </li>
                                <li class="my-4">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                24/7 tech support
                                </li>
                            </ul>
                            <a href="#" class="butn fw-normal ">sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRICING SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- FOOTER SECTION STARTS HERE -->
    <?php include_once 'components/footer.php'; ?>
    <!-- FOOTER SECTION ENDS HERE -->
    <!-- --------------------------------------------------- ------------------------------------------- -->


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