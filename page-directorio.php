

<?php 

/**
 * Template para Propuestas
 */
    
get_header(); ?>


<main id="directorio">
    <div class="pagina-propuestas">
        <div class="caja-titulo-pagina">
            <div class="row">
                <div class="col-sm-0 col-md-2 col-lg-3"></div>
                <div class="col-sm-12 col-md-8 col-lg-6">
                        <div class="caja-titulo">
                            <div class="nombre-titulo">
                                <h1><?php the_title(); ?></h1>
                            </div>    
                        </div>
                </div>
                <div class="col-sm-0 col-md-2 col-lg-3"></div>
            </div>
            
        </div>



        <div class="contenido-noticias">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="tarjeta-perfil">
                            <div class="imagen">
                                <img src="<?php bloginfo('template_url'); ?>/img/perfil.jpg">
                            </div>
                            <div class="tarjeta-cuerpo">                        
                                <h4 class="tarjeta-titulo">Alex Chambi</h4>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>

                    </div>
                   

                </div>
            </div>    
        </div>
    </div>  

</main>

<?php get_footer(); ?>