<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package createtheme
 */


$bootstrap_walker = new WP_Bootstrap_Navwalker;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'createtheme' ); ?></a>
	<header id="masthead" class="site-header">
	
	<section class="home-menu">
        <div class="container">
            <div class="row">
                <div class="d-block d-md-none d-sm-none col-2 menu-icon-mobile">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </div>
                <div class="col-8 col-sm-12 col-md-12   text-center">
                    <img class="d-none d-md-block d-sm-block home-logo" src="<?php echo get_template_directory_uri(); ?>/images/tap-chi-dong-y-logo.png">
                    <img class="d-block d-md-none d-sm-none home-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile.png" alt="">
                </div>
                <div class="d-block d-md-none d-sm-none col-2 moblie-menu-search">
                    <i class="fa fa-search fa-1x" id="icon-menu-search" aria-hidden="true"></i>
                </div>
            </div>
            
        </div>
        <div class="d-none d-md-block d-sm-block menu-background-first">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php 
						$menu = array(
							'theme_location' => 'menu-primary',
							'container'         => 'false',
							'menu_class'        => 'navbar-nav',
							'walker' => $bootstrap_walker
						);
						wp_nav_menu( $menu );
					?>
                    </div>
                    <i class="fa fa-search" id="icon-menu-search" aria-hidden="true"></i>
                    <div class="menu-search">
                        <input type="text" class="inphut-search" name="menu_search" placeholder="Từ khóa...">
                        <i class="fa fa-search search-icon" aria-hidden="true"></i>
                    </div> 
                </nav> 
            </div>
        </div>
        <div class="menu-background-second">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <?php 
						$menu = array(
							'theme_location' => 'menu-benh',
							'container'         => 'false',
							'menu_class'        => 'navbar-nav',
							'walker' => $bootstrap_walker
						);
						wp_nav_menu( $menu );
					?>
                    </div>
                </nav>
            </div>
        </div>   
    </section>
	
	</header><!-- #masthead -->
