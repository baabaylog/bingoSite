<?php

include 'components/version.php';
include 'connection/connection.php';


if (isset($_POST['sub'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);

    if ($name && $email && $subject && $msg) {
        $sqli = "INSERT INTO `ooptech_project_data` (`name`, `email`, `subject`, `msg`) VALUES ('$name', '$email', '$subject', '$msg')";
        $run = mysqli_query($conn, $sqli);
        if ($run) {
            echo "<script> alert('Your info has been recieved.') </script>";
        }
    } else {
        echo "<script> alert('please fill all entries of contact form.') </script>";
    }



    header("location: ./onepage.php");
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

    <!-- SLICK CSS FILES  -->
    <link rel="stylesheet" href="./style/slick.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/slick-theme.css?v = <?= $version ?>">

    <!-- CSS STYLE SHEET LINK -->
    <link rel="stylesheet" href="./style/team.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/service.css?v = <? $version ?>">
    <link rel="stylesheet" href="./style/portfolio.css?v = <? $version ?>">
    <link rel="stylesheet" href="./style/about.css?v = <? $version ?>">
    <link rel="stylesheet" href="./style/style.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/pricing.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/contact.css?v = <?= $version ?>">
</head>

<body>

    <!-- PRELOADER STARTS HERE  -->
    <?php include_once 'components/preloader.php'; ?>
    <!-- PRELOADER ENDS HERE  -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- NAVBAR STARS HERE -->
    <?php include_once 'components/navbar.php'; ?>
    <!-- NAVBAR ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- BANNER SECTION STARTS HERE -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="./img/banner-bg-1.jpg" class=" img-fluid  w-100" alt="">
                <div class="carousel-caption caption-1">
                    <div class="container ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8 col-lg-6  ">
                                <h1>creating digital experience</h1>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, <br>
                                    of Elements & simply put them on our Canvas.
                                    <br> ipsa aliquam velit.
                                </p>
                                <a href="#" class="butn" role="button"> explore us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/banner-bg-2.jpg" class=" img-fluid w-100" alt="">
                <div class="carousel-caption caption-2">
                    <div class="container ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8 col-lg-6 ">
                                <h1>we combine design and creativity</h1>
                                <p class="mb-4">create just what you need from your website. choose from a wide range
                                    <br> and simply put them on our canvas.
                                </p>
                                <a href="#" class="butn" role="button"> explore us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="prev d-none d-md-block"><span class="carousel-control-prev-icon m-auto" aria-hidden="true"></span></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="next d-none d-md-block"><span class="carousel-control-next-icon m-auto" aria-hidden="true"></span></span>
        </button>
    </div>
    <!-- BANNER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- ABOUT SECTION STARTS HERE -->
    <section class="about-sec py-5">
        <div class="container">
            <div class="row py-4 mt-4 justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <h2 class="fw-bold mb-2">about us</h2>
                    <p class="px-3 pb-1 fs-6"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa placeat voluptas tempore recusandae quasi nesciunt in, facilis animi. Sint, possimus? </p>
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
    <!-- CALL SECTION STARTS HERE -->
    <section class="call-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center my-auto ">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum nulla sed justo tempor posuere sit amet sit amet ligula.</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- CALL SECTION ENDS HERE -->
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
    <!-- TOGETHER SECTION STARTS HERE -->
    <?php include_once 'components/toegther-sec.php'; ?>
    <!-- TOGETHER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- SKILL SECTION STARTS HERE -->
    <section class="skill-sec py-5">
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
                        <div class="progress">
                            <div class="progress-bar w-75 h-100" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
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
    <!-- COUNTER SECTION STARTS HERE  -->
    <?php include_once 'components/counter-sec.php'; ?>
    <!-- COUNTER SECTION ENDS HERE  -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- PORTFOLIO SECTION STARTS HERE -->
    <?php include './components/portfolio-sec.php'; ?>
    <!-- PORTFOLIO SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- POPUP SECTION STARTS HERE -->
    <?php include './components/popup-sec.php'; ?>
    <!-- POPUP SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- TEAM SECTION STARTS HERE -->
    <?php include './components/team-sec.php'; ?>
    <!-- TEAM SECTION ENDS HERE -->
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
                    <div class="pricing py-5 px-5">
                        <!-- pricing 1 -->
                        <div class="header pt-4 pb-2">
                            <h5>basic</h5>
                            <h1>$19</h1>
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
                    <div class="pricing py-5 px-5">
                        <!-- pricing 2 -->
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
                    <div class="pricing py-5 px-5">
                        <!-- pricing 3 -->
                        <div class="header pt-4 pb-2">
                            <h5>enterprise</h5>
                            <h1>$59</h1>
                            <p>Perfect for single freelancers who work by themselves</p>
                        </div>
                        <div class="body">
                            <ul class="pb-1">
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
    <!-- TESTIMONIALS SECTION STARTS HERE -->
    <?php include_once 'components/testimonial-sec.php'; ?>
    <!-- TESTIMONIALS SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- LATEST POST SECTION STARTS HERE -->

    <section class="latest-post-sec py-5 bg-light">
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
                            <a href="#" class="btn ">Read more</a>
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
            </div>
        </div>
    </section>
    <!-- LATEST POST SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- CONTACT SECTION STARTS HERE -->
    <section class="contact-sec py-5">
        <div class="container">
            <div class="row py-3 justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <h2 class="fw-bold">get in touch</h2>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam ut numquam molestiae quaerat incidunt?</p>
                    <div class="line mx-auto"></div>
                </div>
            </div>
            <div class="row my-3 pt-3">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h4 class="fw-bold pb-3 text-black fs-2">contact details </h4>
                    <p class="fs-6 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
                    <div class="address ">
                        <ul class="mb-2">
                            <li class="mb-3 text-black">
                                <ion-icon class=" text-black" name="home"></ion-icon>
                                <span> Khaja Road, Bayzid, Chittagong, Bangladesh </span>
                            </li>
                            <li class="mb-3 text-black">
                                <ion-icon class=" text-black" name="phone-portrait-sharp"></ion-icon>
                                <span> Phone: +880-31-000-000</span>
                            </li>
                            <li class="mb-3 text-black">
                                <ion-icon class=" text-black" name="earth"></ion-icon>
                                <span>Fax: +880-31-000-000</span>
                            </li>
                            <li class="mb-3 text-black">
                                <ion-icon class=" text-black" name="mail"></ion-icon>
                                <span>Email: hello@moeez.com</span>
                            </li>
                        </ul>
                        <ul class="social pt-1">
                            <li>
                                <ion-icon class="fs-6 p-3 me-2 border rounded-circle " name="logo-facebook"></ion-icon>
                            </li>
                            <li>
                                <ion-icon class="fs-6 p-3 me-2 border rounded-circle" name="logo-twitter"></ion-icon>
                            </li>
                            <li>
                                <ion-icon class="fs-6 p-3 me-2 border rounded-circle" name="logo-dribbble"></ion-icon>
                            </li>
                            <li>
                                <ion-icon class="fs-6 p-3 me-2 border rounded-circle" name="logo-linkedin"></ion-icon>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <form method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" required name="name" id="exampleFormControlInput1" placeholder=" Your Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" required name="email" id="exampleFormControlInput1" placeholder=" Your Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" required name="subject" id="exampleFormControlInput1" placeholder=" subject">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" required name="msg" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="submitbtn py-3 my-2" name="sub" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>
    <!-- CONTACT SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- MAP SECTION STARTS HERE -->
    <section class="map-sec">

        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="100%" height="369" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123 movies</a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 369px;
                        width: 100%;
                    }
                </style><a href="https://www.embedgooglemap.net">google map websites</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 369px;
                        width: 100%;
                    }
                </style>
            </div>
        </div>
    </section>
    <!-- MAP SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- FOOTER SECTION STARTS HERE -->
    <?php include_once 'components/footer.php'; ?>
    <!-- FOOTER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- ION ICON LINK  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Java Script link -->
    <script src="./js/app.js?v=<?= $version ?>"></script>

    <!-- JQuery link  -->
    <script src="./js/jquery3.6.0.js"></script>
    <!-- SLICK SLIDER JAVASCRIPT -->
    <script src="./js/slick.min.js?v=<?= $version ?>"></script>
    <script>
        $('.testimonial').slick({
            infinite: true,
            autoplay: true,
            arrows: false,
        });

        $('.slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 2,
            autoplay: true,
            arrows: false,
        });


        // PORTFOLIO SECTION 
        $('.slides').slick({
            infinite: true,
            fade: true,
            cssEase: 'linear',
            arrows: true,
            prevArrow: "<span  class='a-left control-c prev slick-prev' ><ion-icon name='chevron-back-outline'></ion-icon></span>",
            nextArrow: "<span  class='a-right control-c next slick-next' ><ion-icon name='chevron-forward-outline'></ion-icon> </span>"
        });


        let btns = document.querySelectorAll('.pbtn');
        let item = document.querySelectorAll('.item');
        let img = document.querySelectorAll('.img-fluid')

        for (let i = 0; i < btns.length; i++) {
            btns[i].addEventListener('click', function() {

                let dataFilter = this.getAttribute('data-filter');


                for (let j = 0; j < item.length; j++) {
                    item[j].classList.add('hide');
                    item[j].classList.remove('active');


                    // dataItem = item[j].getAttribute('data-item');

                    if (item[j].getAttribute('data-item') == dataFilter || dataFilter == "all") {
                        item[j].classList.add('active');
                        item[j].classList.remove('hide');

                        // const itemarr = dataItem.split(" ");
                        // console.log(itemarr);
                    }
                }
            });
        }

        // POP UP SECTION
        let popup = document.getElementById('popupId');
        let close = document.querySelector('.close');
        let popbtns = document.querySelectorAll('.popbtn');

        popbtns.forEach((popbtn) => {
            // console.log(popbtn)
            popbtn.addEventListener('click', () => {
                if (popup.style.visibility = 'hidden') {
                    popup.style.visibility = "visible";
                }
            })
        });
        close.addEventListener("click", () => {
            if (popup.style.visibility = 'visible') {
                popup.style.visibility = "hidden";
            }
        })
    </script>
</body>

</html>