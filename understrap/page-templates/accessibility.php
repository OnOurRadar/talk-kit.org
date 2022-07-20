<?php

/**
 * Template Name: Accessibility
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


    <section class="section-hero section-100 row align-content-center justify-content-between p-5">

        <div class="container-small mx-auto text-center text-md-left">

            <i class="fas fa-universal-access fa-4x" aria-hidden="true"></i>
            <h1 class="font-weight-bold py-3"> Accessibility Statement</h1>
            <hr class='bg-secondary' style="height:3px">

            <div class="py-4 font-weight-normal">
                <?php the_content(); ?>
            </div>

            <div class="py-3">

                <a href="https://talk-kit.org/" class="btn rounded-pill px-3 py-2 bg-dark text-white font-weight-bold"><i class="fas fa-undo-alt"></i> Back to Home Page</a>

            </div>

        </div>
    </section>


</main>

<?php get_footer(); ?>