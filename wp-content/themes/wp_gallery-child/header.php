<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gallery
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- <link rel='stylesheet' id='megamenu-css' href='https://www.megamenu.com/wp-content/uploads/maxmegamenu/style.css?ver=f399f6' type='text/css' media='all' /> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gallery' ); ?></a>
    <div id="wrapper">
<header id="header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="header-top-left">
                            <a href="#">Questions?</a>
                            <span>Call us at +1800-621-3294 (M-F 9AM-5PM EST)</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="header-top-right">
                                <ul class="list-inline">
                                    <li class="searchBox">
                                        <a href="javascript:void(0);" class="search-boxSmall"><i class="fa fa-search"></i><?php aws_get_search_form( true ); ?></a>
                                    </li> 
                                    <li><a href="<?php echo home_url( $wp->request )."/wishlist" ; ?>"><i class="fa fa-heart-o" aria-hidden="true"></i>My Wishlist</a></li>
                                    <li><a href="<?php echo home_url( 'login' ); ?>"><i class="fa fa-user" aria-hidden="true"></i>Login/Register</a></li>
                                    <li class="cart-items">
                                        <a href="<?php echo home_url( $wp->request )."/cart"; ?>" class="cart-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('logo','options'); ?>" alt="<?php echo get_bloginfo('name'); ?>" /></a> 
                    </div> 
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                           <?php //wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>