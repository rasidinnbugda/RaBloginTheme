<?php include 'sistem/connect.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width, inital-scale=1.0">
    <meta name="author" content="Raşidin Buğda">
    <meta name="publisher" content="Raşidin Buğda" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="description example">
    <meta name="keywords" content="keywords example">
    <base href="http://localhost/rablogintheme/">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/cd25521a32.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>RaBlogin | Theme 1.1</title>
    <!-- <link rel="canonical" href="link example" /> -->
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
    <!-- Header end -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="main-content">
            <main>
                <!-- New Post -->
                <div class="new-wrapper">
                    <h2 style="background-color: #d54062; padding: 5px; box-sizing: border-box; border-radius: 5px;">İzinsiz giriş saptandı. Umarım bir daha olmaz.</h2>
                    <p style="font-size: 18px;">Bu sayfaya giriş izniniz bulunmamaktadır. Lütfen bu işleme devam etmeyin. Lütfen <a href="#" class="e404">anasayfaya</a> dönünüz.</p>
                    <div style="box-sizing: border-box; padding: 15px; background-color: #ffa36c; border-radius: 5px;">
                    <p style="font-size: 18px;">"Zafer, zafer benimdir diyebilenindir. Başarı ise 'başaracağım' diye başlayarak sonunda 'başardım' diyenindir."</p>
                    <p style="font-size: 18px; text-align: right;">Mustafa Kemal Atatürk</p>
                    </div>
                    <div class="clearfix"></div>

                </div>
                <!-- New Post End -->
            </main>

            <!-- aside -->
            <?php include 'custom-sidebar.php'; ?>
            <!-- Aside end -->
            <div class="clearfix"></div>
        </div>
        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!-- Footer end -->

    </div>
    <!-- Page Wrapper end -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('.menu-toggle').toggleClass('active')
                $('nav').toggleClass('active')
            })
        })
    </script>

    <script>
        $(".carousel").owlCarousel({
            margin: 10,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            items: 1,
        });
    </script>

    <!-- JavaScript End -->
</body></html>
