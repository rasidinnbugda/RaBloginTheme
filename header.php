<?php 
if(basename($_SERVER['PHP_SELF'])==basename(__FILE__)){
    header("Location: http://localhost/rablogintheme");
    exit();
}
?>
<header>
    <div class="logo">
        <a href="http://localhost/rablogintheme/"><img src="img/RaBlogin.png" alt="RaBlogin" title="RaBlogin" width="80" height="80"></a>
    </div>
    <div class="menu-toggle"></div>
    <nav>
        <ul>
            <li><a href="http://localhost/rablogintheme/" class="cool-link" title="Anasayfa">Anasayfa</a></li>
            <li><a href="iletisim" class="cool-link" title="İletişim">İletişim</a></li>
            <li><a href="hakkimizda" class="cool-link" title="Hakkımızda">Hakkımızda</a></li>
            <li><a href="konukyazar" class="cool-link" title="Konuk Yazarlık">Konuk Yazarlık</a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>
</header>