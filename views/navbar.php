<header id="header" class="fixed-top <?php echo $inner_pages?'header-inner-pages':'' ?>">
    <div class="container d-flex align-items-center">

        <!-- <h1 class="logo me-auto"><a href="<?=base_url?>">NewAge <h6>Asansör</h6></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?=base_url?>" class="logo me-auto"><img src="<?=base_url?>/assets/img/<?php echo $siteLogoPath ?>" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="<?=base_url?>">Anasayfa</a></li>
                <li class="dropdown"><a href="#"><span>Kurumsal</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?=base_url?>/hakkimizda">Hakkımızda</a></li>
                        <li><a href="<?=base_url?>/misyon-vizyon">Misyon ve Vizyon</a></li>
                        <li><a href="<?=base_url?>/belgelerimiz">Belgelerimiz</a></li>
                    </ul>
                </li>
                <li><a class="nav-link   scrollto" href="<?=base_url?>/asansorler">Asansörler</a></li>
                <li><a class="nav-link   scrollto" href="<?=base_url?>/referanslarimiz">Referanslarımız</a></li>
                
                <li><a class="nav-link scrollto" href="<?=base_url?>/iletisim">İletişim</a></li>
                <li><a class="getstarted scrollto" href="tel:<?php echo $siteContactInformationData['site_tel'] ?>" target="_blank" ><i class='bx bxs-phone-call me-2'></i>Telefon</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>