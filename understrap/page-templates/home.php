<?php

/**
 * Template Name: Home Page Template
 * 
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>



<div class="pb-5 " style="background-image: url('https://talk-kit.org//wp-content/uploads/2021/07/bg-home.png'); background-size: auto 100% ; background-position: top; background-repeat: no-repeat;">

    <div class="pb-5 pt-sm-3">
        <div class="container text-center d-flex align-items-center">
            <div class="container text-center text-sm-left col-sm-12 col-md-8 py-5">


                <img class="w-50 mx-auto mb-3 d-block d-sm-none" src="<?php the_post_thumbnail_url(''); ?>" alt="">

                <h1 class="display-4  text-center text-sm-left font-weight-normal my-2">Welcome to <?php echo get_bloginfo('site-title'); ?></h1>
                <h2 class="my-3 text-center text-sm-left font-weight-normal description"><?php echo get_bloginfo('description'); ?></h2>

                <div class="text-center text-sm-left py-3">

                    <a class="btn btn-lg btn-secondary rounded-pill shadow-lg highlight-dark px-3 py-2 mr-sm-4 mb-4 mb-sm-0 font-weight-normal" href="#info"><i class="fas fa-arrow-circle-right fa-fw" aria-hidden="true"></i> Start Learning!</a>
                    <a class="btn btn-lg btn-secondary rounded-pill shadow-lg highlight-dark px-3 py-2 font-weight-normal " href="<?php echo site_url('/accessibility'); ?>"><i class="fas fa-universal-access fa-fw" aria-hidden="true"></i> Our accessibility statement</a>
                </div>
            </div>

            <div class="col-4 d-none d-sm-none d-md-none d-lg-block">
                <img class="" width='100%' height='auto' src="<?php the_post_thumbnail_url(''); ?>" alt="">
            </div>
        </div>
    </div>
</div>





<section class="container text-center text-md-left p-4 p-sm-2 ">
    <div id="info" class=" my-4">
        <i class="fas d-sm-none fa-universal-access p-2 rounded-circle shadow-sm fa-3x" style="background: #FFD042;"></i>
        <h2 class="mt-5"> How to use this site</h2>
    </div>
    <p class="info-text font-weight-normal"><?php the_field('how_headline'); ?></p>


    <div class="p-4">
        <div class="d-block d-md-flex">

            <div class="col-sm rounded-lg text-center p-3 h-100">

                <img class="rounded-circle shadow mb-4 w-50" src="https://talk-kit.org/wp-content/uploads/2021/07/Watch-Courses.jpg">

                <h3 class='header-title mb-lg-2 lh-2 text-dark'>Watch </h3>
                <h3 class='header-title mb-lg-3 lh-2 text-dark'>Reporting Courses</h3>

                <p class='px-lg-2 font-weight-normal'><?php the_field('video_feature_description'); ?></p>
                <a href="#video" class="highlight-dark btn btn-lg rounded-pill shadow bg-secondary text-dark mt-2 px-3 py-2">
                    4 Video Courses
                </a>
            </div>

            <div class="col-sm rounded-lg text-center p-3 h-100">

                <img class="img-responsive rounded-circle shadow mb-4 w-50" src="https://talk-kit.org/wp-content/uploads/2021/07/Read-Guides.jpg" alt="">
                <h3 class='header-title mb-lg-2 lh-2 text-dark'>Read </h3>
                <h3 class='header-title mb-lg-3 lh-2 text-dark'> Step-by-Step Guides</h3>
                <p class='px-lg-2 font-weight-normal'><?php the_field('guide_feature_description'); ?> </p>
                <a href="#guides" class="highlight-dark btn btn-lg rounded-pill shadow bg-secondary text-dark mt-2 px-3 py-2">
                    8 Learning Blogs
                </a>

            </div>


            <div class="col-sm rounded-lg text-center p-3">
                <img class="img-responsive rounded-circle shadow mb-4 w-50" src="https://talk-kit.org/wp-content/uploads/2021/07/Discover-Stories.jpg" alt="">

                <h3 class='header-title mb-lg-2 lh-2 text-dark'>Discover </h3>
                <h3 class='header-title mb-lg-3 lh-2 text-dark'>Community Stories</h3>
                <p class='px-lg-2 font-weight-normal'><?php the_field('story_feature_description'); ?> </p>
                <a href="#stories" class="highlight-dark btn btn-lg rounded-pill shadow bg-secondary text-dark mt-2 px-3 py-2">
                    6 Case Studies
                </a>

            </div>
        </div>
    </div>
</section>




<section id="video" class="section-100 d-flex justify-content-center align-items-center" style="background-image: url('https://talk-kit.org/wp-content/uploads/2021/07/video-backround.png'); background-size: auto 100%; background-position: top; background-repeat: no-repeat;">
    <div class="container">
        <div class="d-block d-md-flex align-items-center">

            <div class="d-none d-sm-block col-12 col-md-6 order-1 order-sm-2 px-5 p-lg-0">
                <div class="c embed-responsive embed-responsive-16by9 rounded-lg shadow">
                    <iframe class="embed-responsive" src="https://player.vimeo.com/video/512223485?&title=0&byline"></iframe>
                </div>
            </div>

            <div class="text-center text-md-left col-12 col-md-6 d-flex flex-column justify-content-center align-content-center order-2 order-sm-1">
                <div class="">
                    <p class="btn rounded-pill bg-secondary text-dark px-3 py-1">Video Learning</p>
                </div>
                <h2 class="">Reporting Course </h2>

                <p class="lead lh-2"><?php the_field('video_headline'); ?></p>

                <div class="d-block d-sm-none embed-responsive embed-responsive-16by9 rounded-lg shadow-lg mb-3">
                    <iframe class="embed-responsive" src="https://player.vimeo.com/video/512223485?&title=0&byline"></iframe>
                </div>


                <div class="row justify-content-center justify-content-sm-start">

                    <a href="http://talk-kit.org/reporting-course/module-1/" class="highlight-dark btn btn-lg bg-secondary text-dark shadow rounded-pill my-2 my-md-3 px-3 py-2 shadow-sm text-sm-left"><i class="fas fa-play fa-fw" aria-hidden="true"></i> Introduction to Community Reporting</a>
                    <a href="http://talk-kit.org/reporting-course/module-2/" class="highlight-dark btn btn-lg bg-secondary text-dark shadow rounded-pill my-2 my-md-3 px-3 py-2 shadow-sm text-sm-left"><i class="fas fa-play fa-fw" aria-hidden="true"></i> Barriers to Participation</a>
                    <a href="http://talk-kit.org/reporting-course/module-3/" class="highlight-dark btn btn-lg bg-secondary text-dark shadow rounded-pill my-2 my-md-3 px-3 py-2 shadow-sm text-sm-left"><i class="fas fa-play fa-fw" aria-hidden="true"></i> Community Reporting Networks</a>
                    <a href="http://talk-kit.org/reporting-course/module-4/" class="highlight-dark btn btn-lg bg-secondary text-dark shadow rounded-pill my-2 my-md-3 px-3 py-2 shadow-sm text-sm-left"><i class="fas fa-play fa-fw" aria-hidden="true"></i> Stories for Impact</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="guides" class="section-100 d-flex justify-content-center align-items-center my-5">
    <div class="container text-center text-md-left my-5">
        <div>
            <p class="btn rounded-pill bg-secondary text-dark px-3 py-1">Written Guides</p>
        </div>
        <h2 class="pb-2">Step-by-Step Guides</h2>
        <hr class='bg-secondary d-block d-sm-none' style='width:50%; height:3px;'>
        <p class="lead lh-2"><?php the_field('guide_headline'); ?></p>

        <div class="row my-4">

            <?php
            $args = array(
                'post_type' => 'guides',
                'post_status' => 'publish',
                'orderby' => 'rand',
                'posts_per_page' => -1,
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :

                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
            ?>

                    <div class="col-6 col-md-3 h-100">
                        <div class="card rounded-lg shadow p-0 my-3 ">
                            <a href="<?php the_permalink(); ?>" class="highlight text-dark">
                                <?php the_post_thumbnail('large', array('class' => 'card-top shadow-sm p-0')); ?>
                                <div class=" card-body px-2 py-3 px-md-3 pt-md-4">
                                    <h3 class="guide-title text-left"><?php the_title(); ?></h3>
                                    <p class="guide-text d-none d-sm-block font-weight-normal"><?php echo get_field('summary'); ?></p>
                                </div>

                            </a>
                        </div>
                    </div>

            <?php
                endwhile;
            endif; ?>
            <?php wp_reset_postdata(); ?>

        </div><!-- //Card Deck -->
        <div>
        </div>
</section>




<section id="stories" class="d-flex justify-content-center align-items-center my-5 ">
    <div class="container my-5 text-center text-md-left">
        <div class="">
            <p class="btn rounded-pill bg-secondary text-dark  px-3 py-1">Case Studies</p>
        </div>
        <h2 class="pb-2">Talk Kit Story Series</h2>
        <hr class='bg-secondary d-block d-sm-none' style='width:50%; height:3px;'>
        <p class="lead lh-2"><?php the_field('story_headline'); ?></p>

        <div id="stories" class="container ">
            <div class="row" data-masonry='{"percentPosition": true }'>

                <?php
                $args = array(
                    'post_type' => 'stories',
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'posts_per_page' => -1,
                );
                $arr_posts = new WP_Query($args);

                if ($arr_posts->have_posts()) :

                    while ($arr_posts->have_posts()) :
                        $arr_posts->the_post();
                ?>
                        <div class="d-flex  col-12 col-md-4">
                            <div class="card text-left my-4 p-0 shadow-sm rounded border-0">
                                <a href=" <?php the_permalink(); ?>" class="highlight text-dark text-decoration-none">

                                    <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
                                    <div class="card-body">
                                        <h3 class="card-title lh-1 mt-3"><?php the_title(); ?></h3>
                                        <p class="font-weight-normal"><?php echo get_field('summary'); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
</main>



<?php get_footer(); ?>