<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>


<div class="wrapper bg-secondary p-1" id="wrapper-footer">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer py-3" id="colophon">

					<div class="site-info">

						<p class="mb-0 pb-2 lead font-weight-normal"><?php echo get_bloginfo('name'); ?> &copy; <?php echo get_the_date('Y'); ?>
						</p>
						<p class="font-weight-normal">This resource was co-created by Catalyst, CAST, Inclusion London, and On Our Radar.</p>



					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->


<script>

</script>

<script>
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function(e) {
			e.preventDefault();

			document.querySelector(this.getAttribute('href')).scrollIntoView({
				behavior: 'smooth'
			});
		});
	});
</script>



<?php wp_footer(); ?>

</body>

</html>