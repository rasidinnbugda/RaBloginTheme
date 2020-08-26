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
                <div class="new-wrapper c-wrapper">
                    <h2 style="margin: -15px auto 0px auto;">İletişim</h2>
                    <div class="contact-box">
                        <form action="" method="">
                            <input type="text" placeholder="Adınız...">
                            
                            <input type="email" placeholder="e-posta adresiniz...">
                            <input type="text" placeholder="Mesaj Başlığı...">
                            <textarea name="" id="" placeholder="Mesajınız..."></textarea>
                            <button type="submit">Mesaj Gönder</button>
                        </form>
                    </div>
                    <p class="about-text">Yazdığınız mesaj e-mail ile gönderilmez. Veritabanına kaydedilir ve oradan size mail adresiniz ile cevap verilir.</p>
                    <p class="about-text">Lütfen gerçek e-posta adresinizi giriniz. Aksi takdirde cevap yazılmayacaktır.</p>
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
