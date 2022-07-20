<?php

/**
 * Template Name: About Us
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('alt');
?>


<main id="main" class="main" role='main'>

    <section class=" section-100  section-hero row align-content-center justify-content-between p-5">
        <div class="container-small mx-auto text-center text-sm-left ">

            <i class="far fa-question-circle fa-4x" aria-hidden="true"></i>
            <h1 class="font-weight-bold py-3"> About this Project</h1>
            <hr class='bg-secondary' style="height:3px">

            <div class="py-4">
                <?php the_content(); ?>
            </div>

            <div class="py-3 text-center text-sm-left">

                <a href="http://talkkit-v3.local/" class="btn rounded-pill px-3 py-2 bg-secondary text-dark font-weight-bold"><i class="fas fa-envelope"></i> Contact our team</a>

            </div>

            <div class="d-flex  my-5 align-content-center">
                <div class="d-none d-sm-block col-sm align-self-center my-2">
                    <img src="http://talkkit-v3.local/wp-content/uploads/2021/04/Cast-Logo.png" alt="">
                </div>
                <div class="d-none d-sm-block col-sm align-self-center my-2">
                    <img src="http://talkkit-v3.local/wp-content/uploads/2021/04/Catalyst-Logo.png" alt="">
                </div>
                <div class="d-none d-sm-block col-sm align-self-center my-2">
                    <img src="http://talkkit-v3.local/wp-content/uploads/2021/04/Inclusion-London-Logo.png" alt="">
                </div>
                <div class="d-none d-sm-block col-sm align-self-center my-2">
                    <img src="http://talkkit-v3.local/wp-content/uploads/2021/04/On-Our-Radar-Logo.jpeg" alt="">
                </div>
            </div>



            <div class="py-3 text-center  text-left">

                <a href="http://talkkit-v3.local/" class="btn rounded-pill px-3 py-2 bg-dark text-white font-weight-bold"><i class="fas fa-undo-alt"></i> Back to Home Page</a>

            </div>

        </div>

    </section>


</main>

<?php get_footer(); ?>