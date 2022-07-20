<?php

/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header(); ?>




<header class="container-fluid single-header shadow-sm border border-lg">

    <div class="container py-4">

        <div class="row py-4 flex-column-reverse flex-lg-row align-items-center">


            <div class="col-lg-8">

                <h2 class="pb-3">Community Story Series</h2>
                <h1 class="pb-2"><?php the_title() ?></h1>

            </div>


        </div>

    </div>

</header>


<main class="container">

    <div class="row">


        <article class="post-content col-lg-7 p-4">

            <p class=" lh-lg"><?php the_content() ?></p>

        </article>

        <div class="col-lg-2"></div>

    </div>


</main>


<div class="container-fluid bg-light p-4">

    <footer class="container">


        <?php

        if (comments_open()) {
            comments_template();
        }

        ?>

    </footer>

</div>


<?php
get_footer();
