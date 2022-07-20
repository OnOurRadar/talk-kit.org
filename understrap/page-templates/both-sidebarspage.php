<?php

/**
 * Template Name: About
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>


<main id="main" class="main" role='main'>


	<section class="container-fluid section-hero row align-content-center justify-content-between p-5">

		<div class="container">


			<h1 class="display-4 font-weight-bold pb-2"><i class="fas fa-universal-access"></i> About this Project</h1>
			<p>Creating a site for everyone</p>
			<p class="lead"><?php the_content(); ?></p>

			<div class="col-2">



			</div>

			<div class="my-3">

				<a href="https://talk-kit.org/" class="btn rounded-pill px-3 py-2 bg-dark text-white font-weight-bold"><i class="fas fa-undo-alt"></i> Back to Home Page</a>

			</div>

		</div>

	</section>


</main>

<?php get_footer(); ?>