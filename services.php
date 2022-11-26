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
    <link rel="stylesheet" href="./style/about.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/service.css?v = <?= $version ?>">

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
                        <h2>our services</h2>
                        <div class="links">
                            <a href="#">home</a> <span> / </span>
                            <p>our services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- SERVICES SECTION STARTS HERE -->
    <section class="services-sec py-5 mt-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <h2>our services</h2>
                    <p class=" px-3  pt-2 pb-1">Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.
                    </p>
                    <div class="line mx-auto mb-5"></div>
                </div>
            </div>
            <div class="row mt-4 child">
                <!-- Boxes -->
                <div class="col-md-4">
                    <div class="content text-center py-4 px-3 ">
                        <!-- blue -->
                        <ion-icon class="p-3" name="copy-outline"></ion-icon>
                        <h4 class="text-white">wordpress theme</h4>
                        <p class="text-white  px-3">Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content text-center py-4 px-3">
                        <ion-icon class="p-3 text-black" name="alarm-outline"></ion-icon>
                        <h4 class="text-black ">responsive design</h4>
                        <p class="px-3">Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content text-center py-4 px-3">
                        <!-- Blue -->
                        <ion-icon class="p-3 text-white" name="book-outline"></ion-icon>
                        <h4 class="text-white">media & advertisement</h4>
                        <p class="px-3 text-white">Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content text-center py-4 px-3">
                        <ion-icon class="p-3 text-black" name="briefcase-outline"></ion-icon>
                        <h4 class="text-black">graphic design</h4>
                        <p class="px-3">Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content text-center py-4 px-3">
                        <!-- blue -->
                        <ion-icon class="p-3 text-white" name="crop-outline"></ion-icon>
                        <h4 class="text-white ">apps development</h4>
                        <p class="px-3 text-white">Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content text-center py-4 px-3">
                        <ion-icon class="p-3 text-black" name="home-outline"></ion-icon>
                        <h4 class="text-black">networking</h4>
                        <p class="px-3">Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- SERVICES SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- SKILL SECTION STARTS HERE -->
    <section class="skill-sec">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-md-6">
                    <h2 class="mb-2">our skills</h2>
                    <p class="mx-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus fugiat, vel veniam, eos et delectus eveniet molestiae. Esse, voluptas ratione.</p>
                    <div class="line mb-4 mx-auto"></div>
                </div>
            </div>
            <div class="row my-4 py-4">
                <div class="col-md-6 mb-4 mb-md-1 mb-lg-0">
                    <h3 class="mb-4 fw-bold">simple to start</h3>
                    <p class="pe-5 pb-4">Vestibulum nisl tortor, consectetur quis imperdiet bium, letcu. Sedndime ntumiaculis ex, in faucibus lorem accumsan non. Donec mattis tin unt metuorbi sed tort Igor aman luctus dignissim. Vestibulum nisl tortor, consectetur quis imperdiet bium, letcu. Sedndime ntumiaculis ex, in faucibus lorem accumsan non.</p>
                    <a href="#" class="butn fw-normal"> contact us </a>
                </div>
                <div class="col-md-6">
                    <div class="bar">
                        <label class="mt-3 mb-2"> Photoshop</label>
                        <div class="progress" >
                            <div class="progress-bar w-75 h-100"  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="bar">
                        <label class="mt-3 mb-2"> web application</label>
                        <div class="progress">
                            <div class="progress-bar w-75" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="bar">
                        <label class="mt-3 mb-2"> android application</label>
                        <div class="progress">
                            <div class="progress-bar w-75" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="bar">
                        <label class="mt-3 mb-2"> IOS development</label>
                        <div class="progress">
                            <div class="progress-bar w-75" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col col-md-12">
                        <div class="slider">
                            <div class="slide"> 
                                <img src="./img/services/logo1.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-4.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-5.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo1.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-4.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-5.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo1.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-4.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-5.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo1.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-4.png" class="img-fluid" alt="">
                            </div>
                            <div class="slide"> 
                                <img src="./img/services/logo-5.png" class="img-fluid" alt="">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SKILL SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- COUNTER SECTION STARTS HERE -->
    <?php include_once 'components/counter-sec.php'; ?>
    <!-- COUNTER SECTION ENDS HERE -->

    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- SLIDER SECTION STARTS HERE -->
    <?php include 'components/testimonial-sec.php'; ?>
    <!-- SLIDER SECTION ENDS HERE -->
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
        $('.slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows:false,
        });
        $('.testimonial').slick({
            infinite: true,
            autoplay: true,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            arrows:false,
        });
    </script>
</body>

</html>