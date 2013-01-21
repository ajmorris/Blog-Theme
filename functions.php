<?php
    
    /**
     * Initializer of theme functions
     * to run on init
     * @return [type]
     */
    function theme_initializer() {
        /*
        Register header menu
         */
        register_nav_menus(
            array( 'header-menu' => __( 'Header Menu' ) )
        );
    }
    add_action( 'init', 'theme_initializer' );


    /**
     * Add the Read More
     * @param $more [description]
     * @return [type]
     */
    function new_excerpt_more($more) {
       global $post;
        return ' <a href="'. get_permalink($post->ID) . '">Read the Rest...</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

?>