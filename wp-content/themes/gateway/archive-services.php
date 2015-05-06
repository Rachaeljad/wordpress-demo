<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gateway
 */

get_header(); ?>
<!-- add your custom post type to you class content area -->
	<div id="primary" class="content-area">     
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header>
			<h2 class="portfolio-headline underline">Work</h2>
			</header>	


			<div class="row">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<!-- add in your home page row and images -->

			<div class="column third" style="background-image: url(<?php the_field('portfolio_feature_image'); ?>);">
    		<div class="portfolio-color-overlay"></div>
    		<h3 class="portfolio-title"><?php the_title(); ?></h3>
    			<a class="portfolio-link" href="<?php the_permalink(); ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
    		</div>

			<?php endwhile; ?>

			

		</div>

			<?php the_posts_navigation(); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>