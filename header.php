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
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex header-logo">
                    <img src="<?php the_field('left-logo')?>" alt="">
                </div>
            </div>
        </div>
	</div><!-- #wrapper-header -->
