<?php get_header(); ?>

    
<div class="pagina-principal">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="row">

                    <div class="col-sm-12 col-lg-12">
                        <div class="noticias-principales ">
                            <div id="carouselnoticiasprincipales" class="carousel slide carousel-fade" data-ride="carousel">
                                <ol class="carousel-indicators">

                                <?php
                                    /*imprime los puntos o rayas del slider*/
                                    $l = 5;
                                    for ($i = 0; $i < $l; $i++) { ?>
                                        <li data-target="#carouselnoticiasprincipales" data-slide-to="<?php echo $i; ?>" <?php if($i == 0) { ?> class="active" <?php } ?>>
                                        
                                        </li>  
                                        <?php
                                    }
                                ?>
                                </ol>

                                <div class="carousel-inner">
                                    
                                    <?php $a = 0; ?>

                                <?php
                                    $query = new WP_Query (array ('showposts'=>'5'));
                                    while ($query->have_posts()) : $query->the_post();
                                ?>
                                
                                    <div class="carousel-item <?php echo ($a == 0) ? 'active':''?>">
                                        <div class="imagen">
                                            <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                                        </div>

                                        <div class="carousel-caption">
                                            <h3 class="titulo"><a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></h3>
                                            <p class="titulo-tag"><?php the_category(); ?></p>
                                        </div>
                                    </div>
                                    <?php $a++;?>
                                <?php endwhile;?>

                                </div>
                                <a class="carousel-control-prev" href="#carouselnoticiasprincipales" role="button" data-slide="prev">
                                    <h2> <i class="fas fa-long-arrow-alt-left"></i> </h2>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselnoticiasprincipales" role="button" data-slide="next">
                                    <h2> <i class="fas fa-long-arrow-alt-right"></i> </h2>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-12">
                        <div class="noticias-secundarias">
                            <div class="tarjeta-principal">
                                <div class="titulo-tarjeta">
                                    <h2>Noticias</h2>
                                </div>
                                <div class="contenido-tarjeta">
                                
                                <?php
                                    $query = new WP_Query (array ('category_name' => 'noticias', 'showposts'=>'4'));
                                    while ($query->have_posts()) : $query->the_post();
                                ?>

                                    <div class="tarjeta">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5 col-lg-5">
                                                <div class="imagen">
                                                    <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7 col-lg-7">
                                                <div class="tarjeta-cuerpo">                        
                                                    <h4 class="tarjeta-titulo"><a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></h4>
                                                    <p class="tarjeta-tag"><?php the_category(); ?></p>
                                                    <p class="tarjeta-autor"><?php the_author(); ?> </p>
                                                    <p class="tarjeta-fecha"><?php the_time(get_option('date_format')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
 

                                </div>
                                <div class="link-tarjeta">
                                    <h6><a href="https://www.indie157.com/category/noticias/">Leer Más</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-12">
                        <div class="publicidad-lateral">
                            <div class="container">
                                
                                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/bannerlateral.png" alt="Logo">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-12">
                        <div class="agenda">
                            <div class="card">
                                <div class="card-header titulo text-uppercase text-center">
                                    <h2>Magazine</h2>
                                </div>

                                <div class="contenido-agenda">
                                    <div class="row">

                                    <?php
                                        $query = new WP_Query (array ('category_name' => 'magazine', 'showposts'=>'3'));
                                        while ($query->have_posts()) : $query->the_post();
                                    ?>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
    
                                            <div class="tarjeta">
                                                <div class="imagen">
                                                    <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                                                </div>
                                                <div class="tarjeta-cuerpo">                        
                                                    <h2 class="tarjeta-titulo"><a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>

                                       
                                    </div>
                                </div>
                                      
                            </div>
                        </div>
                    </div>

                </div>  
            </div>

        </div>
    </div>

        <div class="propuestas col-lg-12">
            <div class="titulo">
                <h2>Propuestas</h2>
            </div>
            <div class="contenido">
                <div class="container">
                    <div class="row">


                    <?php
                        $query = new WP_Query (array ('category_name' => 'propuestas', 'showposts'=>'3'));
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="tarjeta">
                                <div class="imagen">
                                <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                                </div>
                                <div class="tarjeta-cuerpo">                
                                    <h4 class="tarjeta-titulo"><a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></h4>
                                    <p class="tarjeta-tag"><?php the_category(); ?></p>
                                </div>
                            </div>
                        </div>
                                    
                    <?php endwhile; ?>

                    

                    </div>
                </div>
            </div>
        </div> 
</div>

<?php get_footer(); ?>