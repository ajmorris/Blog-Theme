<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?php bloginfo(template_directory); ?>/css/app.css">
        <!-- Need to include this, but through the use of require or background or something like that. -->
        <!-- <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->
        <!-- Might want to include wp_head() -->
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <div class="header">
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'top-nav' ) ); ?>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="twelve columns logo">
                        <div class="blog-title"><a href="<?php echo home_url('/'); ?>"><?php echo bloginfo('name'); ?></a></div>
                        <div class="blog-description"><?php echo bloginfo('description'); ?></div>
                    </div>
                </div> 
            </div>
        </header>