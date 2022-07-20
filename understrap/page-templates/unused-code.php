<main id="reporting-course" class="container-fluid video-guides py-5 bg-blue">

    <div class="container ">


        <div class="">
            <h1 lass="pr-4"> <small class='hw-font'> Community Reporting Course </small></h1>
            <hr>
            <p class="pr-4"> Do you want to harness the power of community reporting in your communities? These video modules explain how listening to shared experience can make society fairer and safer.</p>

        </div>


        <div class="card-deck row align-items-top my-4 p-3 p-lg-0">

            <div class="card p-0 mb-4 border module-card rounded-lg ">
                <a href="http://talkkitbootstrap-v2.local/video_course/module-1/">

                    <div class="card-img-top embed-responsive embed-responsive-16by9  rounded-top-lg shadow-sm">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/512223485?title=0&byline=0&portrait=0" autoplay=0></iframe>
                    </div>

                    <div class="card-body p-1 bg bg-transparent shadow-bottom-sm">
                        <p class="  py-0 m-0 nounderline"> <small><b> Module 1</b></small> </b> </p>
                        <p class="pt-0 nounderline">Community Reporting</p>
                        <p><small>Do you want to harness the power of community reporting in your communities? These video modules explain how listening to shared experience can make society fairer and safer.
                            </small> </p>

                    </div>

                </a>
            </div>

            <div class="card p-2 mb-4 border module-card rounded-lg shadow">
                <a href="http://talkkitbootstrap-v2.local/video_course/module-2/">

                    <div class=" card-img-top embed-responsive embed-responsive-16by9 rounded-lg shadow-sm">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/512223485?title=0&byline=0&portrait=0" autoplay=0></iframe>
                    </div>

                    <div class="card-body p-1">
                        <p class="  py-0 m-0 nounderline"> <small><b> Module 2</b></small> </b> </p>
                        <p class=" pt-0 nounderline">Introduction to Community Reporting</p>

                    </div>

                </a>
            </div>


            <div class="card p-2 mb-4 border module-card rounded-lg shadow">
                <a href="http://talkkitbootstrap-v2.local/video_course/module-3/">

                    <div class="card-img-top embed-responsive embed-responsive-16by9  rounded-lg shadow-sm">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/512223485?title=0&byline=0&portrait=0" autoplay=0></iframe>
                    </div>

                    <div class="card-body p-1 ">
                        <p class="  py-0 m-0 nounderline"> <small><b> Module 3</b></small> </b> </p>
                        <p class=" pt-0 nounderline">Introduction to Community Reporting</p>

                    </div>

                </a>
            </div>

            <div class="card p-2 mb-4 border module-card rounded-lg shadow">
                <a href="http://talkkitbootstrap-v2.local/video_course/module-4/">

                    <div class="card-img-top embed-responsive embed-responsive-16by9  rounded-lg shadow-sm">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/512223485?title=0&byline=0&portrait=0" autoplay=0></iframe>
                    </div>

                    <div class="card-body p-1 ">
                        <p class="  py-0 m-0 nounderline"> <small><b> Module 4</b></small> </b> </p>
                        <p class=" pt-0 nounderline">Introduction to Community Reporting</p>

                    </div>

                </a>
            </div>


        </div>

    </div>


    </div>



</main>




<section id="stories" class="container-fluid stories py-5 bg-light">

    <div class="container py-5">

        <h1> <small> Stories in Action</small> </h1>
        <hr>
        <p class="">Enjoy this showcase of brilliant ways in which the voices of Disabled and Deaf people and communities have been brought to life through creative co-production.
        </p>

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

                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <a href="<?php the_permalink() ?>" class="nounderline">
                            <div class="card story-card rounded-lg shadow-lg my-2">
                                <img class="card-img rounded-lg" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                <div class="card-img-overlay rounded-lg text-white d-flex flex-column justify-content-end">
                                    <h4 class="card-title mt-4"><?php the_title(); ?></h4>
                                    <p class="quotes mb-1"> <?php the_field('quotes'); ?> </p>

                                </div>
                            </div>
                    </div>
                    </a>
            <?php
                endwhile;
            endif; ?>
            <?php wp_reset_postdata(); ?>





        </div>

    </div>

</section>



<div class="container">

    <div class="row-sm  container">
        <h6><span class="text-muted text-center color--info"><i class="fas fa-graduation-cap fa-fw"></i> </span> 18 Modules</h6>
        <p class="px-3 d-none d-sm-block">|</p>
        <h6><span class="text-muted text-center"><i class="fas fa-play fa-fw"></i> </span> 1.5hr videos</h6>
        <p class="px-3 d-none d-sm-block">|</p>
        <h6><span class="text-muted text-center"><i class="far fa-check-circle fa-fw"></i> </span>6 activities</h6>
        <p class="px-3 d-none d-sm-block">|</p>
        <h6><span class="text-muted text-center"> <i class="fas fa-search fa-fw"></i></span> 1 case-study</h6>

    </div>

</div>