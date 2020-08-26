<?php include 'sistem/connect.php'; 

error_reporting(E_ALL & ~E_NOTICE);
$yazi_seolink = $_GET["yazi_seolink"];

$yazilar = $db->prepare("SELECT * FROM yazilar
    INNER JOIN kategoriler ON kategoriler.kategori_id = yazilar.yazi_kategori_id
    INNER JOIN yazarlar ON yazarlar.yazar_id = yazilar.yazi_yazar_id
    WHERE yazi_seolink=? AND yazi_durum=?");
$yazilar->execute(array($yazi_seolink,1));
$yazi_cek = $yazilar->fetch(PDO::FETCH_ASSOC);

if (!$yazi_cek["yazi_seolink"]) {
    header("Location: ../404");
}

$okunma = @$_COOKIE[$yazi_cek["yazi_seolink"]];

if (!$okunma) {
    $okunma = $db->prepare("UPDATE yazilar SET yazi_okunma = ".$yazi_cek["yazi_okunma"]."+1 WHERE yazi_seolink=?");
    $okunma->execute(array($yazi_seolink));
    setcookie(''.$yazi_cek["yazi_seolink"],"_",time()+600);
}
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

            <main class="page">
                <article class="main-page">
                    <h1 class="article-title"><?php echo $yazi_cek['yazi_title']; ?></h1>
                    <div class="post-info">
                        <b><i class="fas fa-user"></i></b> <?php echo $yazi_cek['yazar_ad']; ?> &nbsp;
                        <b><i class="far fa-calendar-alt"></i></b> <?php echo date('d.m.Y' ,strtotime($yazi_cek['yazi_tarih'])); ?> &nbsp;
                        <b><i class="fas fa-eye"></i></b> <?php echo $yazi_cek["yazi_okunma"]; ?><br>
                        <a href="kategori/<?php echo $yazi_cek["kategori_url"]; ?>" title="<?php echo $yazi_cek["kategori_title"]; ?>" class="c-item"><i class="fas fa-list"></i> <?php echo $yazi_cek["kategori_title"]; ?></a>
                    </div>

                    <div class="post-image">
                        <img src="img/yazilar/<?php echo $yazi_cek['yazi_foto']; ?>" alt="">
                    </div>

                    <div class="post-write">
                        
                        <?php echo $yazi_cek['yazi_icerik']; ?>
                        
                        <br><center style="margin: 10px 0px 10px 0px; font-size: 16px;">Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli? | rablogin.com</center><br>
                        
                    </div>

                </article>
                
                <div class="new-wrapper c-wrapper change">
                    <div class="writer-box">
                        <div class="writer-img">
                            <img src="img/<?php echo $yazi_cek['yazar_foto']; ?>" alt="<?php echo $yazi_cek["yazar_ad"]; ?>" title="<?php echo $yazi_cek["yazar_ad"]; ?>">
                        </div>
                        <div class="writer-info">
                            <h3><?php echo $yazi_cek["yazar_ad"]; ?></h3>
                            <p><?php echo $yazi_cek["yazar_desc"]; ?></p>
                            <p>
                                <a href="<?php echo $yazi_cek["yazar_facebook"] ?>"><i class="fab fa-facebook-square" style="color: #4064AD;"></i> Facebook</a> |
                                <a href="<?php echo $yazi_cek["yazar_instagram"] ?>"><i class="fab fa-instagram-square" style="color: #CF3E87;"></i> İnstagram</a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
            </main>

            <!-- aside -->
            <?php include 'page-sidebar.php'; ?>
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

    <script src="js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('.menu-toggle').toggleClass('active')
                $('nav').toggleClass('active')
            })
        })
    </script>

    <!-- JavaScript End -->
</body>

</html>
