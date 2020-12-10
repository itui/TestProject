<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */
 get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<div id="main" class="site-main row flex" role="main">
			<div class="col-md-5">		
				<?php echo "<img class='img h-full img-fluid' src='".get_field ("header_img")."' /> "; ?>	
			</div>
			<div class=" col-md-6">
				<div class=" row">
				<p class=" col-md-12">
					<?php echo get_field("price") ?>
				</p>
				<div class=" col-md-12">
					<div class="row flex">
						<div class="bg-secondary text-light m-1 p-1 col-md-5">
						<p>
						<?php echo get_field("facts") ?>
					</p>
					</div>
						<div class="bg-info text-light m-1 p-1 col-md-5">
					<p>
						<?php echo get_field("payment_plan") ?>
					</p>
						</div>
					</div>
					
				</div>
				</div>
			</div>
			
<!-- 		while ( have_posts() ) : the_post(); -->


		</div><!-- #main -->
	</section><!-- #primary -->

<?php
// get_sidebar();
// get_footer();
