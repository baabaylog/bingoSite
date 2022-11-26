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



    header("location: ./contact.php");
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
    <link rel="stylesheet" href="./style/slick.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/slick-theme.css?v = <?= $version ?>">
    <!-- CSS STYLE SHEET LINK -->
    <link rel="stylesheet" href="./style/style.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/service.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/contact.css?v = <?= $version ?>">


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
                        <h2>Contact Us</h2>
                        <div class="links">
                            <a href="/index.php">home</a> <span> / </span>
                            <p>contact us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER SECTION ENDS HERE -->
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