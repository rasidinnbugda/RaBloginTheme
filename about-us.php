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
                    <div class="banner-img">
                        <img src="img/banner.png" alt="">
                    </div>
                    <h2 style="margin: 10px auto -10px auto;">Hakkımızda</h2>
                    <p class="about-text"><a href="#">RaBlogin</a> olarak kullanıcılara elimizden geldiğince yararlı bilgiler sunmak için çabalamaktayız. Bu vermeye çalıştığımız bilgiler genel olarak <a href="#">Web Tasarım ve Kodlama</a> ile <a href="#">Blog ipuçlaru</a> ve <a href="#">Web Siteleri</a> hakkında yararlı içeriklerdir.</p>
                    <p class="about-text">Hedefimiz ise bu blog ile birçok kişiye ulaşmak ve bu kişilerinde bu alanda ilerlemesine yardım etmektir. Eğer siz de yardım etmek istiyorsanız yazılarımızı paylaşabilirsiniz.</p>
                    <p class="about-text">Ayrıca bu siteye konuk yazar olabilirsiniz. Konuk yazarlık şartlarımıza <a href="#">konuk yazarlık</a> sayfasından ulaşabilir ve iletişime nasıl geçeceğinizi o sayfada bulabilirsiniz.</p>
                </div>
                <div class="new-wrapper c-wrapper">
                    <h2 style="margin: -15px auto 0px auto;">Yazarlar</h2>


                    <?php 

                    $yazarlar = $db->prepare("SELECT * FROM yazarlar WHERE konukyazar=0");
                    $yazarlar->execute();
                    $yazar_listele = $yazarlar->fetchALL(PDO::FETCH_ASSOC);

                    foreach ($yazar_listele as $row) { ?>
                        <div class="writer-box">
                            <div class="writer-img">
                                <img src="img/<?php echo $row['yazar_foto']; ?>" alt="<?php echo $row["yazar_ad"]; ?>" title="<?php echo $row["yazar_ad"]; ?>">
                            </div>
                            <div class="writer-info">
                                <h3><?php echo $row["yazar_ad"]; ?></h3>
                                <p><?php echo $row["yazar_desc"]; ?></p>
                                <p>
                                    <a href="<?php echo $row["yazar_facebook"] ?>"><i class="fab fa-facebook-square" style="color: #4064AD;"></i> Facebook</a> |
                                    <a href="<?php echo $row["yazar_instagram"] ?>"><i class="fab fa-instagram-square" style="color: #CF3E87;"></i> İnstagram</a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <?php } ?>


                    </div>
                    <!-- New Post End -->
                </main>

                <!-- aside -->
                <?php include 'sidebar.php'; ?>
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
