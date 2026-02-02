<?php get_header(); ?>
    <img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>">

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php the_archive_title('<h1 class="archive-title">','</h1>'); ?>
                <?php the_archive_description('<div class="archive-description">','</div>');?>
                

                <div class="container">
                    <?php
                    if ( have_posts() ) :

                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'parts/content' );
                        endwhile;

                        
                    ?>
                    <div class="wpdevs-pagination">
                        <div class="pages new">
                            <?php next_posts_link('<< newer posts' ?>
                            </div>
                            <div class="pages old">
                                <?php next_posts_link('older posts >>') ?>
                                </div>
                                </div>
                                 
                    <?php

                    else : ?>
                        <p>nothing yet to be displayed</p>
                    <?php endif; ?>
                    </div>
                    <?php get_sidebar();  ?>
                    </>

                        
                        
                        
                        

                   </div>
    
   </main>
</div>
</div>
    <?php get_footer(); ?>     