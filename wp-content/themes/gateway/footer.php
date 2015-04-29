<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Gateway
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
    <div class="column half">
            <img id="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt="Your Image Description Here" />
    </div>

    <div class="column half">
    	<!-- / Footer Navigation -->
   <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

		<!-- / Social Navigation -->
   <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
	</div>
    
    </div>

		<div class="site-info">
			<p>Copyright  <?php echo date("Y"); ?> <?php bloginfo('url'); ?> All Rights Reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
