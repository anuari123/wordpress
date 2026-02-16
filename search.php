<?php get_header(); ?>
<div id="primary">
    <div id="main">
    <div id="container">
        <h1>search result for: <?php echo get_search_query(); ?></h1>

       <?php
                get_search_form();
                while ( have_posts() ) : the_post();
                    get_template_part( 'parts/content', 'search' );
                    endwhile;
                    the_posts_pagination( array(
                        'prev_text' => 'Previous',
                        'next_text' => 'Next',
                    ) );




        ?>
    

</div>
</div>
</div>
<?php get_footer(); ?>    












