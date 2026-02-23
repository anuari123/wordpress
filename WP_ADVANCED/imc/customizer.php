<?php
     
     function wpdevs_customizer($wp_custumaize){
                   $wp_custumaize -> add_section(
                      'sec_copyright',
                        array(
                            'title' => 'Copyright Settings',
                            'description' => 'copyright settings'
                        ));

                     $wp_custumaize -> add_setting(
                        'set_copyright',
                        array(
                            'type' => 'theme_mod',
                            'default' => 'Copyright X - all rights reserved',
                            'sanitize_callback' => 'sanitize_text_field'
                        ));
                       $wp_custumaize -> add_control(
                        'set_copyright',
                        array(
                            'label' => 'Copyright Text',
                            'description' => 'Enter your copyright text',
                            'section' => 'sec_copyright',
                            'type' => 'text'
                        ));


     }
        add_action('customize_register', 'wpdevs_customizer');


?>