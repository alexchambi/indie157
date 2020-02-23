<?php get_header(); ?>

<main id="agenda">

    <div class="pagina-agenda">
        <div class="header-agenda">
            <div class="agenda-imagen">
                <a href="<?php echo get_permalink(); ?>"> <?php  the_post_thumbnail(); ?> </a>                
                <div class="agenda-mes">
                    <h1>Noviembre</h1>
                </div>  
            </div>
            
        </div>
        <div class="caja-titulo-pagina">
            <div class="row">
                <div class="col-sm-0 col-md-2 col-lg-3"></div>
                <div class="col-sm-12 col-md-8 col-lg-6">
                        <div class="caja-titulo">
                            <div class="nombre-titulo">
                                <h1>Agenda</h1>
                            </div>    
                        </div>
                </div>
                <div class="col-sm-0 col-md-2 col-lg-3"></div>
            </div>
            
        </div>



        <div class="contenido-agenda">
            <div class="container">
                <div class="row">

                <?php while(have_posts()): the_post(); ?>


                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="tarjeta">
                            <div class="imagen">
                            <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                            </div>
                            <div class="tarjeta-header">
                                <p class="tarjeta-mes">Month<p>
                                <h2 class="tarjeta-dia">Day</h2>
                            </div>
                            <div class="tarjeta-cuerpo">                        
                                <h3 class="tarjeta-titulo"><a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></h3>
                                <h6 class="tarjeta-lugar">Place</h6>
                                <h6 class="tarjeta-ciudad">City</h6 >
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