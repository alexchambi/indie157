<!DOCTYPE html>
<html lang="es">
<head>
	<script data-ad-client="ca-pub-5878694475200474" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head(); ?>

</head>
<body>

    <!-- Redes Sociales -->
    <div class="navbar-top">
        <div class="container">
            <nav class="nav justify-content-end">
                <a class="nav-link" href="https://www.facebook.com/indie157" target="__blank"><i class="fab fa-facebook-f"></i></a>
                <a class="nav-link" href="https://www.twitter.com/indienews157" target="__blank"><i class="fab fa-twitter"></i></a>
                <a class="nav-link" href="https://www.instagram.com/theindienews157" target="__blank" ><i class="fab fa-instagram"></i></a>
                <a class="nav-link" href="https://www.youtube.com/channel/UCJ1azfS3oO11geJXCo2_-7Q" target="__blank"><i class="fab fa-youtube"></i></a>
                
            </nav>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="http://www.indie157.com/">
                <img src="<?php bloginfo('template_url'); ?>/img/logoblack.png" width="210" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu(array(
                'theme_location' =>'menu-principal',
                'container' =>'div',
                'depth'           => 1,
                'container_class'=>'collapse navbar-collapse text-uppercase',
                'container_id'    => 'navbarNav',
                'menu_class' =>'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ));?>
        </div>
    </nav>
  



    <!-- Fin Navbar -->


    <!-- Publicidad-menu-->
    <div class="publicidad-menu">
        <div class="container-fluid text-center">
            <div class="img-fluid">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/publicidad.png" alt="Logo">
            </div>            
        </div>
    </div>

    <!-- Fin Publicidad-menu-->

