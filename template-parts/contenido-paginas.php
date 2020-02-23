<?php get_header(); ?>

    <?php while(have_posts()): the_post();?>

    <div class="pagina-estatica">
        <div class="caja-titulo-pagina">
            <div class="row">
                <div class="col-sm-0 col-md-2 col-lg-3"></div>
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="caja-titulo">
                        <div class="nombre-titulo">
                            <h1> <?php the_title(); ?> </h1>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-0 col-md-2 col-lg-3"></div>
            </div>
        </div>


        <div class="contenido-estatico">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-8 col-lg-8 contenido">
                        <div class="container">
                        <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                </div>
            </div>    
        </div>

    </div>
    
    <?php endwhile;?>
    <?php get_footer(); ?>