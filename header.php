<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orca_microsite
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
<div class="container">

	<div class="row">
        <div class="col-12 d-flex header-logo justify-content-between align-items-center">
            <img src="<?php the_field('left_logo' , 'options'); ?>" alt="">
            <img src="<?php  the_field('right_logo','options');?>" alt="">
        </div>
	</div><!-- end row -->
</div>
