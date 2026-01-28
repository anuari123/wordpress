<?php get_header();  ?>
   
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
    
             <section class="hero">
                hero
             </section>    

             <section class="services">
                <h2>services</h2>
                <div class="service-item">
                    <?php if(is_active_sidebar('services-1')): 
                        dynamic_sidebar('services-1'); ?>
                   

                </div>
                </div>
                    </section>

                    <section class="home-blog">
                        <h2>Latest Posts</h2>
                        <div class="container">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'category_in' => array(9,10,15),
                                'category_not_in' => array(1)
                            );
                            $postlist = new WP_Query($args);

                            if($postlist->have_posts()):
                                while($postlist->have_posts()): $postlist->the_post(); 
                                get_template_part('parts/content', 'latest-news');
                                endwhile;
                                wp_reset_postdata();
                                else :?>
                                <p>Nothing yet to be displayed</p>
                            <?php endif; ?>
                                
                                
                                
                                
                                
                                
                                    



                            ?>


                    </div>
                    </section>
    
            </main>
      </div>         
</div>

<?php get_footer();?>