<?php get_header(); ?>
<main id="tag">
    <div class="pagina-noticias">
        <div class="caja-titulo-pagina">
            <div class="row">
                <div class="col-sm-0 col-md-2 col-lg-3"></div>
                <div class="col-sm-12 col-md-8 col-lg-6">
                        <div class="caja-titulo">
                            <div class="nombre-titulo">
                                <h1>Tag</h1>
                            </div>    
                        </div>
                </div>
                <div class="col-sm-0 col-md-2 col-lg-3"></div>
            </div>
            
        </div>

        <div class="contenido-noticias">
            <div class="container">
                <div class="row">

                    <?php while(have_posts()): the_post(); ?>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="tarjeta">
                            <div class="imagen">
                                <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                            </div>
                            <div class="tarjeta-cuerpo">                        
                                <p class="tarjeta-autor"><?php the_author(); ?></p>
                                <p class="tarjeta-fecha"><?php the_time(get_option('date_format')); ?></p>
                                <h4 class="tarjeta-titulo"><a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></h4>
                                <?php the_category(); ?>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                </div>
            </div>    
        </div>
    </div>  

</main>

<?php get_footer(); ?>