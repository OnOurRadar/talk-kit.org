<?php

/**
 * The template for displaying all single stories.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('alt');
?>


<div class="main">


    <section class="container-fluid  post-body text-center py-5">

        <div class="container-small mx-auto">

            <?php the_post_thumbnail('thumbnail', array('class' => 'rounded-circle mb-4 p-1 bg-secondary')); ?>

            <h1><?php the_title(); ?></h1>
            <p class="py-3"><?php echo get_field('summary'); ?></p>
        </div>

        <a href="#comments" class="highlight-dark btn rounded-pill m-2 px-3 py-2 bg-secondary text-dark"><i class="fas fa-comment"></i> Comments</a><br>

        <a href="http://talk-kit.org/#stories" class="btn btn-sm rounded-pill mx-2 px-3 py-2 bg-dark text-white "><i class="fas fa-undo-alt"></i> Back to all Stories</a>

    </section>





    <section class="container-small mx-auto p-3 post-content">
        <p class=""><?php the_content(); ?></p>
    </section>

    <div class="row justify-content-center my-3">

        <a href="http://talk-kit.org/#stories" class="btn btn-sm rounded-pill mx-2 px-3 py-2 bg-dark text-white "><i class="fas fa-undo-alt"></i> Back to all Stories</a>

    </div>

</div>


<div id="comments" class="container-fluid py-5 bg-theme-blue border-top border-dark shadow">
    <div class="container-small mx-auto my-5">
        <?php comments_template(); ?>
    </div>
</div>

<?php get_footer(); ?>