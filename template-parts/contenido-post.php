<?php get_header(); ?>


<div class="pagina-post">
    <div class="header-post">
        <div class="post-imagen">
            <?php the_post_thumbnail(); ?>
        </div>
        
    </div>
    
    <div class="caja-titulo">
        <div class="row">
            <div class="col-sm-0 col-md-2 col-lg-2"></div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="caja-titulo">
                        <div class="titulo">
                            <h1> <?php the_title(); ?> </h1>
                        </div>    
                    </div>
            </div>
            <div class="col-sm-0 col-md-2 col-lg-2"></div>
        </div>
        
    </div>

    <div class="contenido-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                        <div class="information-post">
                            <p class="autor"> <?php the_author(); ?> </p>
                            <p class="fecha"> <?php the_date(); ?> </p>
                            <p class="tag"> <?php the_category(); ?> </p>
                        </div>

                        <div class="contenido">
                            <?php the_content(); ?>
                            
                            <div class="tags">
                                <?php the_tags( '<ul><button class="btn btn-outline-danger">', '</button><button class="btn btn-outline-danger">', '</button></ul>' ); ?>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-md-12 col-lg-12">
                        <div class="publicidad-lateral">
                            <div class="container">
                                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/bannerlateral.png" alt="Logo">
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>

    </div>
    <div>
        
    </div>



</div>  

<?php get_footer(); ?>