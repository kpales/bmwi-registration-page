<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orca_microsite
 */

?>


    <div class="container">
        <div class="row">
            <div class="col-12 d-flex site-footer justify-content-end p-0">
                    <hr>
                <img src="<?php the_field('footer_logo','options');?>" alt="">
            </div><!-- #colophon -->
        </div>

    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
