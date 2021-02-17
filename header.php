<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orca_Affairs
 */

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

	<div id="wrapper-header" class="site-header d-flex flex-row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-6">
                    <div class="logo">
                        <?php
                        the_custom_logo();
                        ?>
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <div class="d-flex flex-row flex-md-column align-items-end">
                        <nav id="site-navigation" class="main-navigation">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                            ?>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
	</div><!-- #wrapper-header -->
