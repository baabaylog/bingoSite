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



</head>
<style>
h1{
    font-size: 13rem;
    font-weight: 600;
    
    letter-spacing:1px;
}
h5{
    font-size: 2rem;
}

</style>
<body>

    <!-- PRELOADER STARTS HERE  -->
    <?php
    include_once 'components/preloader.php';
    ?>
    <!-- PRELOADER ENDS HERE  -->
    <section class="main mt-5 pt-5">
        <div class="container">
            <div class="row  mt-5 text-center">
                <div class="col-md-12">
                    <h1 class="mb-2">4O4</h1>
                    <h5>page not found</h5>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="pb-4">Sorry, but the page you were trying to view does not exist.</p>
                    <a href="./index.php" class="butn ">go home</a>
                </div>
            </div>
        </div>
    </section>

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