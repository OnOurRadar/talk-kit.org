<?php

/**
 * Template Name: Module-1
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('alt');
?>

<header class="container-fluid hero bg-green  pb-4">

    <div class="container py-4">
        <h1 class="mb-0"> <small><?php echo get_field('main_module_number'); ?></small></h1>
        <h1 class="pb-2 font-weight-medium"><?php the_title(); ?></h1>
        <h2 class=""><small><?php the_content(); ?></small></h2>
    </div>

</header>

<div class="bg-dark py-2 text-light">
    <span class="d-none d-sm-block text-light"><?php understrap_post_nav(); ?></span>
</div>






<!-- Video Guides -->


<main id="content" class="container-fluid">

    <div class="container">

        <?php
        if (have_rows('modules')) :
            while (have_rows('modules')) : the_row();
        ?>

                <div class="rounded my-5 video-card border border-4 shadow">
                    <!-- Card Container -->

                    <div class="px-4 py-1 border-bottom bg-blue rounded-top">
                        <h4 class="card-title mb-1"> <small> <?php the_sub_field('module_number'); ?> - <?php the_sub_field('module_name'); ?></small> </h4>
                    </div>

                    <div class="px-4 py-2">

                        <div class="row d-flex">

                            <div class="col-lg-6 py-3 ">
                                <!-- Card Title Guides -->
                                <p class="mb-1"> <b>Description</b></p>
                                <?php the_sub_field('module_description'); ?>

                                <p class="mb-1"> <b>Activity</b></p>
                                <?php the_sub_field('module_activity'); ?>


                                <!-- Card Transcript  -->
                            </div>


                            <div class="col-lg-6 p-4 align-content-center ">

                                <div class="card module-card">

                                    <div class="card-img-top embed-responsive embed-responsive-16by9  rounded shadow-sm">
                                        <iframe class="embed-responsive-item" src="<?php echo get_sub_field('module_video_url'); ?>" autoplay=0></iframe>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="bg-blue px-4 py-3 border-top rounded-bottom shadow-sm ">


                        <button class="btn btn-block btn-info rounded-pill " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Read the transcript for this video
                        </button>

                        <div class="collapse" id="collapseExample">
                            <div class="card card-body border-0">
                                <?php the_sub_field('module_transcript'); ?>
                            </div>

                        </div>

                    </div>

                </div>




            <?php endwhile; ?>
        <?php endif; ?>

    </div>



    </div>



</main>


<div class="container-fluid bg-light p-4">

    <footer id="comments" class="container">

        <?php comments_template(); ?>

    </footer>

</div>

<?php get_footer(); ?>