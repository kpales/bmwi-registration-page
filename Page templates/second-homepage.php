<?php
/**
 * Template Name: Second homepage
 *
 * Registration template with second style homepage with bg picture
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper" id="page-wrapper">

    <div id="content" tabindex="-1">


        <main class="site-main px-lg-0 px-3" id="main">
            <div class="container">
                <div class="row">
                </div>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->

    </div> <!-- .row -->

</div><!-- Container end -->


<?php get_footer(); ?>
