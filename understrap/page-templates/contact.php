<?php

/**
 * Template Name: Contact Us 
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


    <section class="container-fluid ">

        <div class="container py-5">

            <h1 class="font-weight-bold"> Let's Talk </h1>
            <hr class='bg-secondary' style="height:3px">
            <p class="lead font-weight-normal">If you have some feedback on this site, or want to share an idea or a concern, please get in touch.</p>

        </div>


        <div class="container d-block d-md-flex align-content-center justify-content-around my-5">

            <div class="details col-sm">
                <p class="lead font-weight-normal mb-4"><i class="fas fa-home" aria-hidden="true"></i> Office</p>
                <div class="text-left">
                    <hr class='bg-light' style='height:3px; width:35%; margin-left:0;'>
                </div>

                <address class="lead mb-5">
                    On Our Radar <br>
                    The Market<br>
                    Peckham<br>
                    London, SE15 4SE

                </address>

                <p class="mb-4 lead font-weight-normal"><i class="fas fa-link" aria-hidden="true"></i> Email and Social Media</p>
                <hr class='bg-light' style=' height:3px; width:65%; margin-left:0;'>

                <a href="mailto:info@onourradar.org" class='lead text-dark'>
                    <p> <i class="fas fa-envelope" aria-hidden="true"></i> &nbsp; info@onourradar.org </p>
                </a>

                <a href="https://twitter.com/onourradar?lang=en" class='lead text-dark'>
                    <p> <i class="fab fa-twitter-square" aria-hidden="true"></i> &nbsp; Twitter </p>
                </a>

                <a href="https://www.facebook.com/OnOurRadar/" class='lead text-dark'>
                    <p><i class="fab fa-facebook-square" aria-hidden="true"></i> &nbsp; Facebook </p>
                </a>

                <a href="https://www.linkedin.com/company/on-our-radar" class='lead text-dark'>
                    <p><i class="fab fa-linkedin" aria-hidden="true"></i> &nbsp; Linkedin</p>
                </a>

            </div>

            <div class="container col-sm">
                <p class="mt-5 mt-md-0 mb-4 lead font-weight-normal"><i class="fas fa-envelope" aria-hidden="true"></i> Send us a message </p>
                <hr class='bg-light' style=' height:3px; width:75%; margin-left:0;'>
                <div class="col-sm bg-white shadow-sm mb-5 p-md-4">
                    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact Us"]'); ?>
                </div>

            </div>


        </div>



    </section>


</main>

<?php get_footer(); ?>