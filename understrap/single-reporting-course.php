<?php

/**
 * The template for displaying all single reporting courses .
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('alt');
?>


<main id="main" class="main post-body p-1 py-lg-2 ">
    <section class="container-fluid p-3 py-lg-5">

        <div class="container my-5 my-md-0">
            <p class='btn btn-secondary px-3 py2 rounded-pill mb-1'>Module <?php echo get_field('module_number'); ?></p>
            <h1 class="my-3 my-md-0"><?php the_title(); ?></h1>
            <hr class="bg-dark" style="height:1px">
            <p class="module-lead my-4 my-md-0"><?php echo get_field('summary'); ?></p>
            <p class="d-block d-sm-none rounded-lg pt-2"><i class="fas fa-universal-access"></i> All our videos include Closed Captions, British Sign Language, and full Transcriptions</p>

        </div> <!-- // Header -->


        <div class="container py-1 my-md-5">
            <h2>Module Contents</h2>
            <hr class='bg-dark' style='height:1px; width:50%; margin-left:0;'>
            <div class="d-md-flex d-none d-sm-block mt-4 ">
                <p class="lead mr-3 "><i class="fas fa-play-circle fa-fw"> </i> <?php echo get_field('total_videos'); ?> videos </p>
                <p class="lead mx-3 "><i class="fas fa-clock fa-fw"></i> <?php echo get_field('total_video_time'); ?> minutes </p>
                <p class="lead mx-3 "><i class="fas fa-check-square fa-fw"> </i> <?php echo get_field('total_activies'); ?> activities </p>
                <p class="lead mx-3 "><i class="fas fa-search fa-fw"></i> <?php echo get_field('total_case_studies'); ?> case study </p>
            </div>

            <div class="row my-1">
                <?php if (have_rows('sub-modules')) : ?>
                    <?php while (have_rows('sub-modules')) : the_row();
                        $sub_title = get_sub_field('sub-module_title');
                        $sub_link = get_sub_field('sub-module_anchor_link');
                    ?>
                        <a href="#<?php echo $sub_link ?>" class="highlight-dark btn m-2 px-3 py-2 bg-secondary text-dark  shadow-sm"> <?php echo $sub_title ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <p class="d-none d-sm-block lead py-3"><i class="fas fa-universal-access"></i> All our videos include Closed Captions, British Sign Language, and full Transcriptions</p>
         
        </div><!-- // Module Info -->
    </section>
    <!-- // Section  -->

    <section class="container p-4 p-sm-0 my-5">

        <h2>Module Videos</h2>
        <hr class='bg-dark' style='height:1px; width:50%; margin-left:0;'>
        <?php
        if (have_rows('sub-modules')) :
            while (have_rows('sub-modules')) : the_row();
        ?>
                <div id="<?php echo get_sub_field('sub-module_anchor_link'); ?>" class="module bg-white shadow-sm rounded-lg p-4 p-lg-5 my-5  ">
                    <div class="module-header">
                        <h3><?php the_sub_field('sub-module_title'); ?></h3>
                        <hr class="bg-secondary" style="height:3px">
                    </div>

                    <div class="module-body my-2 my-lg-5 row align-content-lg-center">

                        <div class="module-right col-sm order-lg-2 my-2">
                            <div class="embed-responsive justify-content-center embed-responsive-16by9 rounded-lg shadow-sm">
                                <iframe class="embed-responsive-item" src="<?php the_sub_field('sub-module_video_url'); ?>"></iframe>
                            </div>
                        </div>

                        <div class="module-left col-sm order-lg-1 my-4">
                            <?php the_sub_field('sub-module_description'); ?> </div>
                    </div>



                    <div class="module-footer my-2">
                        <button class="highlight-dark btn btn-block btn-secondary rounded-pill shadow-sm my-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Read the transcript for this video
                        </button>

                        <div class="collapse" id="collapseExample">
                            <div class="card card-body text-left">
                                <?php the_sub_field('sub-module_transcription'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


        <div class="d-block d-sm-flex align-content-center text-center justify-content-center my-3">
            <a href="http://talk-kit.org/" class="highlighttext-center rounded-pill bg-dark text-white  m-2 px-3 py-2 shadow-sm"> <i class="fas fa-undo-alt"></i> Back to Homepage </a>
            <a href="http://talk-kit.org/reporting-course/module-1/" class="highlight-dark btn rounded-pill bg-secondary text-dark  m-2 px-3 py-2 shadow-sm">Start Module 1</a>
            <a href="http://talk-kit.org/reporting-course/module-2/" class="highlight-dark btn rounded-pill bg-secondary text-dark  m-2 px-3 py-2 shadow-sm">Start Module 2</a>
            <a href="http://talk-kit.org/reporting-course/module-3/" class="highlight-dark btn rounded-pill bg-secondary text-dark  m-2 px-3 py-2 shadow-sm">Start Module 3</a>
            <a href="http://talk-kit.org/reporting-course/module-4/" class="highlight-dark btn rounded-pill bg-secondary text-dark  m-2 px-3 py-2 shadow-sm">Start Module 4</a>
        </div>

    </section>
</main>




<div id="comments" class="container-fluid py-5 bg-theme-blue border-top border-dark shadow">
    <div class="container-small mx-auto my-5">
        <?php comments_template(); ?>
    </div>
</div>


<?php get_footer('alt'); ?>