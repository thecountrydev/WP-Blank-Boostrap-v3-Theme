<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ) );

        ?></title>

    <meta name="author" content="">
    <!--  Mobile Viewport Fix -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icons in the images folder -->


		<link rel='stylesheet' id='bootstrap_style-css'  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type='text/css' media='all' />

		<link rel='stylesheet' id='bootstrap_style-css'  href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all' />






    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header>
        <div class="container-fluid full-width-menu  ">

                <div class="row">
                    <div class="col-sm-3">
                        Logo
                    </div>

                    <div class=""> <!-- Menu -->
                        <nav class="main-menu col-sm-9 " role="banner" >
                            <div class="navbar-header" >
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse" >
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                            </div>

                            <?php
                            wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'theme_location'    => 'primary',
                                    'depth'             => 5,
                                    'container'         => 'nav',
                                    'container_class'   => 'navbar-collapse bs-navbar-collapse collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                    'menu_class'        => 'nav navbar-nav no-gutter cl-effect-4',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                            );
                            ?>
                        </nav>
                    </div> <!-- End menu -->
                </div> <!-- end row -->
        </div> <!-- end container-fluid -->
    </header>
