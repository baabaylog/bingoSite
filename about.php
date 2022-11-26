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
                        <h2>about us</h2>
                        <div class="links">
                            <a href="#">home</a> <span> / </span>
                            <p>about us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- DESIGNS AND TECHNOLOGY SECTION STARTS HERE -->
    <section class="design-and-tech-sec my-5 pt-4 pb-2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-4 tech-txt">
                    <h3 class="mb-4 ">we create designs <br> and technology</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus dolor harum voluptatibus modi dicta ducimus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas. Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam! </p>
                </div>
                <div class="col-lg-6 mt-3">
                    <img src="./img/about-sec-img.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- DESIGNS AND TECHNOLOGY SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- MISSION AND VISION SECTION STARTS HERE -->
    <section class="mission-vision-sec bg-light py-5 ">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h3>our mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
                    <img src="./img/company-image-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <h3>our vision</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
                    <img src="./img/company-image-3.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- MISSION AND VISION SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- PROMO VIDEO SECTION STARTS HERE -->
    <section class="promo-video-sec py-5 my-3">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 col-md-8">
                    <h2>our promo video</h2>
                    <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
                    <div class="line mx-auto mb-5"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12">
                        <iframe title="vimeo-player" src="https://player.vimeo.com/video/51119176?h=f0be4e3ab0" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROMO VIDEO SECTION ENDS HERE -->
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
    <!-- GALLERY SECTION STARTS HERE -->
    <section class="gallery-sec py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5 text-center">
                    <h2 class="mb-3">sneak peak gallery</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore numquam esse vitae recusandae qui aspernatur, blanditiis, laboriosam dignissimos dolore facere provident ex? Porro, praesentium consectetur tempore. Nulla, error eius dolorem.</p>
                    <div class="line mx-auto my-4"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="slides">
                        <div class="slide">
                            <img src="./img/company-image-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="slide">
                            <img src="./img/company-image-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="slide">
                            <img src="./img/gallery-5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="slide">
                            <img src="./img/company-image-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="slide">
                            <img src="./img/company-image-2.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="slide">
                            <img src="./img/gallery-5.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="slide">
                            <img src="./img/company-image-3.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="slide">
                            <img src="./img/company-image-2.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="slide">
                            <img src="./img/gallery-5.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="slide">
                            <img src="./img/company-image-2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GALLERY SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- TEAM SECTION STARTS HERE -->
    <?php include_once 'components/team-sec.php'; ?>
    <!-- TEAM SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- COUNTER SECTION STARTS HERE -->
    <?php include_once 'components/counter-sec.php'; ?>
    <!-- COUNTER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!--  TOGETHER SECTION STARTS HERE -->
    <?php include_once 'components/toegther-sec.php'; ?>
    <!--  TOGETHER SECTION ENDS HERE -->
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
        $('.slides').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
        });
    </script>
</body>

</html>