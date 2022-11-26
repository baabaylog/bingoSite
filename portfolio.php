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

    <!-- SLICK CSS FILES  -->
    <link rel="stylesheet" href="./style/slick.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/slick-theme.css?v = <?= $version ?>">
    <!-- CSS STYLE SHEET LINK -->
    <link rel="stylesheet" href="./style/style.css?v = <?= $version ?>">
    <link rel="stylesheet" href="./style/portfolio.css?v = <?= $version ?>">
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
    <!-- HEADER SECTION STARTS HERE -->
    <section class="header-section">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="main-txt">
                        <h2>portfolio</h2>
                        <div class="links">
                            <a href="/index.php">home</a> <span> / </span>
                            <p>portfolio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- HEADER SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- WORK SECTION STARTS HERE -->
    <?php include 'components/portfolio-sec.php'; ?>
    <!-- WORK SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- POP UP SECTION STARTS HERE -->
    <?php include 'components/popup-sec.php'; ?>
    <!-- POP UP SECTION ENDS HERE -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- TESTIMONIALS SECTION STARTS HERE -->

    <?php include_once 'components/testimonial-sec.php'; ?>
    <!-- TESTIMONIALS SECTION ENDS HERE -->
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