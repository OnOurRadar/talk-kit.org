<?php

/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>


<header class="container-fluid py-4 bg-green">
    <div class="container py-4 my-4">
        <div class="row align-items-center">

            <div class="col-12 col-lg-4 order-lg-2">
                <img class="w-50 mx-auto d-block" src="https://talk-kit.org/wp-content/uploads/2021/03/lime-534.png" alt="">
            </div>

            <div class="col-12 col-lg-8 order-lg-1 text-center text-lg-left">
                <h1 class="display-4"> <b>Welcome to Talk Kit</b></h1>
                <h2 class="pb-3"> Creating Talkative Communities </h2>

                <div class="row mt-4 justify-content-center justify-content-lg-start">
                    <a href="#reporting-course" class='btn btn-small btn-info rounded-pill font-weight-bold m-2'>Start our Community Reporting Video Course</a>
                    <a href="#reporting-guides" class='btn btn-small btn-info rounded-pill font-weight-bold m-2'>Read our Reporting Network Guides</a>
                    <a href="#stories" class='btn btn-small btn-info rounded-pill text-white font-weight-bold m-2'>Discover our Stories & Case Studies</a>
                </div>
            </div>
        </div>
    </div>
</header>


<article id="about-us" class="container-fluid my-4 d-flex align-items-center">

    <div class="container my-4 py-4 ">

        <h1>
            <small class='hw-font'> About this Project</small>
        </h1>
        <hr>

        <p>This is a toolkit for Deaf and Disabled Person led Organisations (DDPOs) who want to get their communities talking about the issues that matter. </p>

        <p>Small DDPOs can find it difficult to access the technology they need to get information and stories from the communities they support and represent.</p>

        <p>This project is an experiment, offering DDPOs tools to increase community engagement, information-sharing and data collection.</p>

        <p>This is a joint project by Catalyst, CAST, Inclusion London, and On Our Radar. We are a mixed group of funders, digital specialists, inclusion specialists, journalists and DDPOs. We hope to learn as much as we share.</p>


        <div class="row flex-lg-row align-items-center justify-content-center py-2">

            <img class="aligncenter  d-none d-sm-block" width="120" src="https://talk-kit.org/wp-content/uploads/2021/03/Catalyst-Logo.png" alt="">
            <img class="aligncenter  d-none d-sm-block" width="120" src="https://talk-kit.org/wp-content/uploads/2021/03/Cast-Logo.png" alt="">
            <img class="aligncenter  d-none d-sm-block" width="120" src="https://talk-kit.org/wp-content/uploads/2021/03/Inclusion-London-Logo.png" alt="">
            <img class="aligncenter  d-none d-sm-block" width="120" src="https://talk-kit.org/wp-content/uploads/2021/03/On-Our-Radar-Logo.jpeg" alt="">
        </div>


</article>



<!-- Reeporting Course -->


<main id="reporting-course" class="container-fluid video-guides py-5 bg-blue">

    <div class="container ">

        <div class="row align-items-center">

            <div class="col-12 col-lg-8">
                <h1> <small class='hw-font'> Community Reporting Course </small></h1>
                <hr>
                <p class=""> Community reporting is a great way of engaging people in communications and advocacy. By inviting community members to document and share their own experiences and that of those around them you can surface unique stories, track invisible issues and capture innovative ideas. This video course will take you through the history of community reporting and the steps to establishing your own network using simple mobile tools</p>

                <div class="container text-center text-lg-left">
                    <a href="https://talk-kit.org/video_course/module-1/" class="btn btn-sm btn-info rounded-pill my-2 px-2 py-1 font-weight-bold">Module 1 - Introduction to Community Reporting</a>
                    <a href="https://talk-kit.org/video_course/module-2/" class="btn btn-sm btn-info rounded-pill my-2 px-2 py-1 font-weight-bold">Module 2 - Barriers to Participation</a>
                    <a href="https://talk-kit.org/video_course/module-3/" class="btn btn-sm btn-info rounded-pill my-2 px-2 py-1 font-weight-bold">Module 3 - Starting a Community Reporting Network</a>
                    <a href="https://talk-kit.org/video_course/module-4/" class="btn btn-sm btn-info rounded-pill my-2 px-2 py-1 font-weight-bold">Module 4 - Stories for Impact</a>
                </div>
            </div>



            <div class="col-12 col-lg-4">
                <div class="align-items-top my-4 p-2">
                    <div class="card p-2 border module-card rounded-lg shadow">
                        <a href="https://talk-kit.org/video_course/module-1/">

                            <div class="card-img-top embed-responsive embed-responsive-16by9 rounded">
                                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/512223485?title=0&byline=0&portrait=0" autoplay=0></iframe>
                            </div>
                            <div class="card-body p-2 mt-2 rounded-xl">
                                <p class=" py-0 m-0 "> <b> Module 1</b> </p>
                                <p class="py-0 ">Introduction to Community Reporting</p>
                                <p class=""> <small> Shifting the power - an introduction to the power of community reporting and how listening to shared experience can make society fairer and safer.
                                    </small>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>





<!-- Reeporting Guides -->

<section id="reporting-guides" class="container-fluid reporting-guides py-5 bg-green">

    <div class="container py-5">

        <div class="">

            <h1 class="fw-bolder"> <small class='hw-font'> Reporting Network Guides </small></h1>
            <hr>
            <p class="">Use these guides to critical tools that will help you create a community reporter network </p>

        </div>

        <div class="row p-4 p-md-0">

            <?php

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'Guides',
                'orderby' => 'name',
                'posts_per_page' => -1,
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :



                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
            ?>
                    <article class="col-lg-3 col-md-4  col-sm-auto d-flex my-3">

                        <a href="<?php the_permalink(); ?>" class="nounderline text-bl">
                            <div class="card card-special h-100  pt-3 border-3 border-info shadow rounded-lg" data-mdb-ripple-color="dark">
                                <div class="mx-auto my-1">
                                    <?php the_post_thumbnail('single-thumb', array('class' => 'img-responsive')); ?>
                                </div>
                                <div class="card-body bg-light  border border-0 rounded">
                                    <h6 class="card-title text-black"><?php the_title(); ?></6>
                                </div>
                            </div>
                        </a>
                    </article>

            <?php
                endwhile;
            endif; ?>
            <?php wp_reset_postdata(); ?>


        </div>


    </div>

</section>





<section id="stories" class="container-fluid stories py-5 bg-blue">

    <div class="container py-5">

        <h1> <small class='hw-font'> Stories in Action</small> </h1>
        <hr>
        <p class="">Enjoy this showcase of brilliant ways in which the voices of Disabled and Deaf people and communities have been brought to life through creative co-production.
        </p>

        <div class="row" data-masonry='{"percentPosition": true }'>
            <?php

            $args = array(
                'post_type' => 'stories',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :



                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
            ?>

                    <div class="col-12 col-lg-4 my-3">
                        <a href="<?php the_permalink(); ?>">
                            <article <?php post_class('card'); ?> id="post-<?php the_ID(); ?>">
                                <?php the_post_thumbnail($size, array('class' => 'car-img-top m-auto')); ?>

                                <div class="card-body text-black">
                                    <?php the_title('<h5 class="entry-title card-title">', '</h5>'); ?>

                                    <div class="card-text text-black">
                                        <div class="entry-content">
                                            <?php echo get_field('summary'); ?>
                                            <?php
                                            wp_link_pages(array(
                                                'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
                                                'after'  => '</div>',
                                            ));
                                            ?>
                                        </div>
                                    </div>

                                    <footer class="entry-footer my-2">
                                        <p>Published <?php echo get_the_date('l jS F Y'); ?></p>

                                    </footer>
                                </div>
                            </article>
                        </a>
                    </div>

            <?php
                endwhile;
            endif; ?>
            <?php wp_reset_postdata(); ?>


        </div>

    </div>

</section>












<?php get_footer(); ?>