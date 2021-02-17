<?php
/**
 * Created by PhpStorm
 * User: Aleš
 * Date: 17/02/2021
 * Time: 11:30
 */
?>
<?php get_header(); ?>
<div class="wrapper" id="page-wrapper">

    <div id="content" tabindex="-1">


        <main class="site-main px-lg-0 px-3" id="main">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-column blcq">
                        <h1 class="d-flex justify-content-center"></h1>
                        <h2 class="d-flex justify-content-center""></h2>
                    </div>
                </div>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->

    </div> <!-- .row -->

</div><!-- Container end -->


<?php get_footer(); ?>


