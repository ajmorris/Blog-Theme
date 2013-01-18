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

?>