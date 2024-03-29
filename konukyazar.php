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
                    <h2 style="margin: -15px auto 10px auto;">Konuk Yazarlık</h2>
                    <p class="about-text">Konuk yazar olmak için belli başlı şartlar gerekir. Bu şartlara bakacak olursak:</p>
                    <div style="padding: 10px; border-radius: 5px;">
                        <h3 style="margin: 0px auto 0px auto; text-align: center;">Yazı Şartları</h3>
                        <p class="about-text">1. Yayımlanacak yazının içeriği <u>web tasarım, web kodlama, blog ipuçları, bloglar, web sitelerine yardımcı olacak şeyler vb.</u> konularda olmalıdır.</p>
                        <p class="about-text">2. Konuk yazarlık için yazdığınız yazılar en az <b>500 kelime</b> olmalıdır.</p>
                        <p class="about-text">3. Yazınızın daha önce başka yerde yayımlanmamış ve daha sonra başka biryerde yayımlanmaması gerekmektedir.</p>
                        <p class="about-text">4. En önemlisi yazılar özgün ve kaliteli olmalıdır.</p>
                        <p class="about-text">5. Yazınız okunabilir düzgün bir Türkçe ile yazılması gerekmektedir.</p>
                        <p class="about-text">6. Yazıda en azından bir görsel bulundurmanız gerekir.</p>
                        <p class="about-text">7. Eğer kendi siteniz varsa yazdığınız yazıda en fazla <b>3 link çıkışı</b> yapılabilir.</p>
                    </div>
                    <div style="padding: 10px; border-radius: 5px; margin-top: 10px;">
                        <h3 style="margin: 0px auto 0px auto; text-align: center;">Yazar Şartları</h3>
                        <p class="about-text">Yazılarımızda yazar kısmı olduğundan dolayı bu kısmı yapmanız gerekmektedir.</p>
                        <p class="about-text">1. Eğer isterseniz kare şeklinde (örneğin: 256x256) bir profil fotoğrafı koyabilirsiniz.</p>
                        <p class="about-text">2. Kendiniz hakkında <b>en az 25 en fazla 50 kelimelik</b> kısa bir tanıtım yapınız.</p>
                        <p class="about-text">3. Eğer web siteniz varsa linkini verebilirsiniz.</p>
                        <p class="about-text">4. Facebook ve İnstagram hesaplarınızın linkini paylaşabilirsiniz. Başka sosyal medya hesaplarını kabul edemiyoruz.</p>
                    </div>
                    <div style="padding: 10px; border-radius: 5px; margin-top: 10px;">
                        <h3 style="margin: 0px auto 0px auto; text-align: center;">Yazıyı Yollamak</h3>
                        <p class="about-text">Yazılarınızı resimleri eklenmiş biçimi ile <b>word formatında</b> yollamanız gerekir.</p>
                        <p class="about-text">Herşey hazır olunca dosyaları <b>rablogin05@gmail.com</b> hesabına gönderebilirsiniz.</p>
                        <p class="about-text">Konuk yazarlık hakkında sorularınız için <a href="iletisim">iletişim</a> sayfasından bize ulaşabilirsiniz.</p>
                    </div>
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
