<?php

/**
 * The template for displaying all single reporting guides.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('alt');
?>


<main id="main" class="main">

    <section class="container-fluid  post-body text-center py-5">

        <div class="container">

            <?php the_post_thumbnail('thumbnail', array('class' => 'rounded-circle mb-4 p-1 bg-secondary')); ?>
            <p class='lead font-weight-bold'>How to..?</p>
            <h1><?php the_title(); ?></h1>
            <p class="py-3 font-weight-normal"><?php echo get_field('summary'); ?></p>
        </div>

        <div class="d-flex flex-wrap justify-content-center">
            <a href="#intro" class="highlight-dark btn rounded-pill m-2 px-3 py-2 bg-secondary text-dark"><i class="fas fa-play" aria-hidden="true"></i> Introduction</a>
            <a href="#tools" class="highlight-dark btn rounded-pill m-2 px-3 py-2 bg-secondary text-dark"><i class="fas fa-wrench" aria-hidden="true"></i> Tools & Resources</a>
            <a href="#guide" class="highlight-dark btn rounded-pill m-2 px-3 py-2 bg-secondary text-dark"><i class="fas fa-walking" aria-hidden="true"></i> Step-by-Step Guide</a>

            <?php
            $file = get_field('download_guide_file');
            if ($file) : ?>
                <a href="<?php echo $file['url']; ?>" class="highlight-dark btn rounded-pill m-2 px-3 py-2 bg-secondary text-dark"><i class="fas fa-file-download" aria-label="download"></i> Download this guide</a>
            <?php endif; ?>


            <a href="#comments" class="highlight-dark btn rounded-pill m-2 px-3 py-2 bg-secondary text-dark"><i class="fas fa-comment"></i> Comments</a>

        </div>

        <div class="row justify-content-center mt-5">
            <a href="http://talk-kit.org/#guides" class="btn btn-sm rounded-pill mx-2 px-3 py-2 bg-dark text-white"><i class="fas fa-undo-alt" aria-hidden="true"></i> Back to all Guides</a>
        </div>
    </section>


    <section class="container-small mx-auto p-3 post-content">
        <p class=""><?php the_content(); ?></p>
    </section>

    <div class="container pb-5 text-center">

        <a href="http://talk-kit.org/#guides" class="btn rounded-pill mx-2 px-3 py-2 bg-dark text-white"><i class="fas fa-undo-alt" aria-hidden="true"></i> Back to all Guides</a>

    </div>

</main>

<div id="comments" class="container-fluid py-5 bg-theme-blue border-top border-dark shadow">
    <div class="container-small mx-auto my-5">
        <?php comments_template(); ?>
    </div>
</div>

<?php get_footer(); ?>