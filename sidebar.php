<?php 
if(basename($_SERVER['PHP_SELF'])==basename(__FILE__)){
    header("Location: http://localhost/rablogintheme");
    exit();
}
?>
<aside>
    <section class="search">
        <span class="section-title"><i class="fas fa-search"></i> Arama Yap</span>
        <center>
            <form action="search" method="GET">
                <input type="search" name="ara" placeholder="Arama Yap" title="arama...">
                <button type="search" class="searchbutton">Arama Yap</button>
            </form>
        </center>
    </section>

    <section class="topics">
        <span class="section-title">Kategoriler</span>
        <ul>
            <li><a href="category.html">Kategori 1</a></li>
            <li><a href="category.html">Kategori 2</a></li>
            <li><a href="category.html">Kategori 3</a></li>
            <li><a href="category.html">Kategori 4</a></li>
            <li><a href="category.html">Kategori 5</a></li>
        </ul>
    </section>
</aside>

<aside class="fixed-aside">
    <section class="social-media">
        <span class="section-title">Sosyal Medya</span>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-square" style="color: #4064AD;"></i> Facebook</a></li>
            <li><a href="#"><i class="fab fa-instagram-square" style="color: #CF3E87;"></i> İnstagram</a></li>
            <li><a href="#"><i class="fab fa-twitter-square" style="color: #1DA1F2;"></i> Twitter</a></li>
            <li><a href="#"><i class="fab fa-youtube" style="color: #FB0009;"></i> YouTube</a></li>
        </ul>
    </section>
</aside>