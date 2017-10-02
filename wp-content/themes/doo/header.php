<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doo
 */

 $doo_option = doo_option(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- ========== Meta Tags ========== -->
    <!-- ========== Meta Tags ========== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =================== Favicons =============================== -->
    <?php if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) { ?>
        <link rel="shortcut icon" href="<?php
        if(isset($doo_option['favicon'])){
            echo esc_url($doo_option['favicon']['url']);
        } ?>" type="image/png">
    <?php } ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="0">
<!-- ========== preloader Start ========== -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<!-- ========== preloader End ========== -->

<!-- ========== Header ========== -->
<div class="navbar header-white header navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Navbar-header -->
        <div class=" navbar-header">
            <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'doo' ); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- LOGO -->
            <a class="navbar-brand logo <?php if($doo_option['doo_logo']['url'] == ""){ echo 'text_logo'; }?>"  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                <?php if($doo_option['doo_logo']['url'] != ""){ ?>
                    <img src="<?php echo esc_url( $doo_option['doo_logo']['url']); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) ; ?>">
                <?php }else{
                    echo esc_attr( get_bloginfo( 'name', 'display' ) );
                } ?>
            </a>
        </div>
        <!-- end navbar-header -->

        <!-- menu -->
        <div class="navbar-collapse collapse" id="data-scroll">
            <?php  if ( is_front_page() ) { ?>
                <?php
                $primarymenu = array(
                    'theme_location'  => 'primary',
                    'container' => 'ul',
                    'menu_class' => ' nav navbar-nav navbar-right'
                );
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( $primarymenu );
                }
                ?>
            <?php }else{ ?>
                <?php
                $secondarymenu = array(
                    'theme_location'  => 'secondary',
                    'container' => 'ul',
                    'menu_class' => ' nav navbar-nav navbar-right'

                );
                if ( has_nav_menu( 'secondary' ) ) {
                    wp_nav_menu( $secondarymenu );
                }
                ?>
            <?php } ?>
        </div>
        <!--/Menu -->
    </div>
    <!-- end container -->
</div>
<!-- ========== Header End ========== -->



