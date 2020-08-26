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
                    <h2>"Kategori 1" Kategorisinde Bulunan Yazılar</h2>


                    <div class="grid">
                        <article>
                            <img src="img/yazilar/domain.jpg" alt="" title="">
                            <div class="text">
                                <a href="page.html" title="Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?">
                                    <h3>Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?</h3>
                                </a>
                                <p>
                                    <b><i class="fas fa-user"></i></b> Raşidin Buğda &nbsp; <b><i class="far fa-calendar-alt"></i></b> 17.08.2020<br>
                                    <b><i class="fas fa-eye"></i></b> 14<br>
                                    <a href="kategori/<?php echo $row["kategori_url"]; ?>" title="<?php echo $row["kategori_title"]; ?>" class="c-item"><i class="fas fa-list"></i> <?php echo $row["kategori_title"]; ?></a>
                                </p>
                                <a href="page.html" class="read-me" title="">Gönderiyi Oku <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </div>
                            <div class="clearfix"></div>
                        </article>

                        <article>
                            <img src="img/yazilar/howtoblogimg.jpg" alt="" title="">
                            <div class="text">
                                <a href="page.html" title="Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?">
                                    <h3>Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?</h3>
                                </a>
                                <p>
                                    <b><i class="fas fa-user"></i></b> Raşidin Buğda &nbsp; <b><i class="far fa-calendar-alt"></i></b> 17.08.2020<br>
                                    <b><i class="fas fa-eye"></i></b> 14<br>
                                    <a href="#" title="" class="c-item"><i class="fas fa-list"></i> Kategori 1</a>
                                </p>
                                <a href="page.html" class="read-me" title="">Gönderiyi Oku <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </div>
                            <div class="clearfix"></div>
                        </article>

                        <article>
                            <img src="img/yazilar/ilkpost.png" alt="" title="">
                            <div class="text">
                                <a href="page.html" title="Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?">
                                    <h3>Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?</h3>
                                </a>
                                <p>
                                    <b><i class="fas fa-user"></i></b> Raşidin Buğda &nbsp; <b><i class="far fa-calendar-alt"></i></b> 17.08.2020<br>
                                    <b><i class="fas fa-eye"></i></b> 14<br>
                                    <a href="#" title="" class="c-item"><i class="fas fa-list"></i> Kategori 1</a>
                                </p>
                                <a href="page.html" class="read-me" title="">Gönderiyi Oku <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </div>
                            <div class="clearfix"></div>
                        </article>

                        <article>
                            <img src="img/yazilar/hostingimg.jpg" alt="" title="">
                            <div class="text">
                                <a href="page.html" title="Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?">
                                    <h3>Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?</h3>
                                </a>
                                <p>
                                    <b><i class="fas fa-user"></i></b> Raşidin Buğda &nbsp; <b><i class="far fa-calendar-alt"></i></b> 17.08.2020<br>
                                    <b><i class="fas fa-eye"></i></b> 14<br>
                                    <a href="#" title="" class="c-item"><i class="fas fa-list"></i> Kategori 1</a>
                                </p>
                                <a href="page.html" class="read-me" title="">Gönderiyi Oku <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </div>
                            <div class="clearfix"></div>
                        </article>

                        <article>
                            <img src="img/yazilar/blognedirrehber1.jpg" alt="" title="">
                            <div class="text">
                                <a href="page.html" title="Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?">
                                    <h3>Domain Nedir? Nasıl Alınır? Hangi Domainler Tercih Edilmeli?</h3>
                                </a>
                                <p>
                                    <b><i class="fas fa-user"></i></b> Raşidin Buğda &nbsp; <b><i class="far fa-calendar-alt"></i></b> 17.08.2020<br>
                                    <b><i class="fas fa-eye"></i></b> 14<br>
                                    <a href="#" title="" class="c-item"><i class="fas fa-list"></i> Kategori 1</a>
                                </p>
                                <a href="page.html" class="read-me" title="">Gönderiyi Oku <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </div>
                            <div class="clearfix"></div>
                        </article>


                    </div>
                    <div class="clearfix"></div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <ul>
                            <div class="li-container">
                                <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                            </div>
                        </ul>
                    </div>
                    <!-- Pagination end -->

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
