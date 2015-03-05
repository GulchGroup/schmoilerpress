<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mytheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- META PROPERTIES USED FOR SHARING -->
<meta property="og:url" content="http://www.yoursite.com"/>
<meta property="og:image" content="http://www.yoursite.com/img.png"/>
<meta property="og:title" content="Your Site Name"/>
<meta property="og:description" content="Description of your site"/>

<!-- PRIMARY STYLESHEET -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/stylesheets/main.min.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">

    <!--<header id="masthead" class="site-header" role="banner">-->
    <!--<div class="site-branding">-->
    <!--<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>-->
    <!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
    <!--</div>&lt;!&ndash; .site-branding &ndash;&gt;-->

    <!--<nav id="site-navigation" class="main-navigation" role="navigation">-->
    <!--<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'mytheme' ); ?></button>-->
    <!--<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>-->
    <!--</nav>&lt;!&ndash; #site-navigation &ndash;&gt;-->
    <!--</header>&lt;!&ndash; #masthead &ndash;&gt;-->

    <div class="header">
        <div class="container">
            <div class="logo">logo</div>
            <div class="nav mobile-hide">
                <a class="tablet-hide" href="<?php echo $pagePath; ?>/home/"><div class="nav-home nav-cell" navTo="/home/">Home</div></a>
                <a href="<?php echo $pagePath; ?>/blog/"><div class="nav-blog nav-cell" navTo="/blog/">Blog</div></a>
            </div>
            <div class="nav-mobile mobile-show">
                <div class="nav-home mobile-nav-cell active" navTo="/home/">home</div>
                <div class="nav-blog mobile-nav-cell" navTo="/blog/">blog</div>
            </div>
        </div>
    </div>

	<div id="content" class="site-content full main-cell">
