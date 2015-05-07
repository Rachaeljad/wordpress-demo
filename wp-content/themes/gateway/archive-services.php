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
	<div id="primary" class="content-area services">     
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		
			<h2 class="services-headline underline">Services</h2>
				


			<!-- Begin Services -->
    	<div class="row">

    		<?php
       			 $args = array( 
            'post_type' => 'services',
            'posts_per_page' => 3
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
    ?>

        <div class="column third">
            <img class="service-icon" src="<?php the_field('services_icon'); ?>">
            <h3 class="service-title"><?php the_title(); ?></h3>
            <p class="service-description"><?php the_field('service_text'); ?></p>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  </div>


    


<?php endif; ?>

<!-- End Services -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>