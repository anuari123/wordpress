<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
       wp_head();
    ?>
</head>
<body <?phpbody_class(arrey('ds-theme'));?>>

         <?php
         if(!is_page('landing-page')):?>

         <section class="menu-area">
            <div class="container">

               <nav class="main-menu">
               <button class="check-button">
                <button class="menu-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
         </div>
         </button>
               <?phpwp_nav_menu( array('theme_location' => 'wp_devs_footer_menu','depth'=>2)); ?>
         </nav>
         </div>
         </section>