<?php include 'sistem/connect.php'; 
error_reporting(E_ALL & ~E_NOTICE);
$ara = strip_tags(trim($_GET["ara"]));
?>
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
                    <h2>"<?php echo $ara; ?>" Hakkında Bulunan Sonuçlar</h2>
                    <div class="grid">
                        <?php 

                        error_reporting(E_ALL & ~E_NOTICE);
                        $sayfa = intval($_GET["sayfa"]);  if (!$sayfa || $sayfa < 1) {$sayfa=1;}
                        $yazi_say = $db->query("SELECT *FROM yazilar WHERE yazi_title LIKE '%{$ara}%'");
                        $ToplamYazi = $yazi_say->rowCount();
                        $limit = 6;
                        $sayfasayisi = ceil($ToplamYazi/$limit); if($sayfa > $sayfasayisi){$sayfa=$sayfasayisi;}
                        $goster = $sayfa * $limit - $limit;
                        $gorunensayfa = 2;

                        $yazilar = $db->prepare("SELECT * FROM yazilar
                            INNER JOIN kategoriler ON kategoriler.kategori_id = yazilar.yazi_kategori_id
                            INNER JOIN yazarlar ON yazarlar.yazar_id = yazilar.yazi_yazar_id
                            WHERE yazi_durum=? AND yazi_title LIKE ? ORDER BY yazi_tarih DESC LIMIT $goster,$limit");
                        $yazilar->execute(array(1,'%'.$ara.'%'));
                        $yazi_listele = $yazilar->fetchALL(PDO::FETCH_ASSOC);
                        $yazi_say = $yazilar->rowCount();

                        if ($yazi_say) {

                            foreach ($yazi_listele as $row) { ?>

                                <article>
                                    <img src="img/yazilar/<?php echo $row["yazi_foto"]; ?>" alt="<?php echo $row["yazi_title"]; ?>" title="<?php echo $row["yazi_title"]; ?>">
                                    <div class="text">
                                        <a href="yazilar/<?php echo $row['yazi_seolink']; ?>" title="Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?">
                                            <h3><?php echo $row["yazi_title"]; ?></h3>
                                        </a>
                                        <p>
                                            <b><i class="fas fa-user"></i></b> <?php echo $row['yazar_ad']; ?> &nbsp; <b><i class="far fa-calendar-alt"></i></b> <?php echo date('d.m.Y' ,strtotime($row['yazi_tarih'])); ?><br>
                                            <b><i class="fas fa-eye"></i></b> <?php echo $row["yazi_okunma"]; ?><br>
                                            <a href="kategori/<?php echo $row["kategori_url"]; ?>" title="<?php echo $row["kategori_title"]; ?>" class="c-item"><i class="fas fa-list"></i> <?php echo $row["kategori_title"]; ?></a>
                                        </p>
                                        <a href="yazilar/<?php echo $row['yazi_seolink']; ?>" class="read-me" title="<?php echo $row["yazi_title"]; ?>">Gönderiyi Oku <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </article>

                            <?php } }else{
                                echo "<p style='color: #222831; width: 100%; padding: 5px; background-color: #d8345f; font-size: 22px; text-align: center; margin: 0px auto; box-sizing: border-box;'>Aradığınız sözcük ile ilgili sonuç bulunamadı!</p>";
                            } ?>


                        </div>
                        <div class="clearfix"></div>

                        <!-- Pagination -->
                        <?php if ($yazi_say > 0) { ?>
                            <div class="pagination">
                                <ul>
                                    <div class="li-container">
                                        <?php if($sayfa > 1) { ?>
                                            <li><a href="arama/<?php echo $ara; ?>/sayfa/<?php echo $sayfa - 1 ?>"><i class="fas fa-angle-left"></i></a></li>
                                        <?php } ?>

                                        <?php for ($i=$sayfa - $gorunensayfa; $i < $sayfa + $gorunensayfa + 1 ; $i++) { 
                                            if ($i > 0 AND $i <= $sayfasayisi) {
                                                if ($i == $sayfa) {
                                                    echo '<li><a class="active">'.$i.'</a></li>';
                                                }else{
                                                    echo '<li><a href="arama/'.$ara.'/sayfa/'.$i.'">'.$i.'</a></li>';
                                                }
                                            }
                                        } 
                                        ?>
                                        <?php if ($sayfa != $sayfasayisi) { ?>
                                            <li><a href="arama/<?php echo $ara; ?>/sayfa/<?php echo $sayfa +1 ?>"><i class="fas fa-angle-right"></i></a></li>
                                        <?php } ?>
                                    </div>
                                </ul>
                            </div>
                        <?php } ?>
                        <!-- Pagination end -->

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
