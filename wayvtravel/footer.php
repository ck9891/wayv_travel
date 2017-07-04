<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WAYVTravel
 */
?>

<?php wp_footer(); ?>

<!-- FOOTER
================================================== -->
<footer>
	<div class="container">
		<div class="col-sm-3">
			<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="WAYV Travel"></a></p>
		</div><!-- end col -->
		<div class="col-sm-6">
			<?php
				wp_nav_menu( array(
					
					'theme_location'	=> 'footer',
					'container'			=> 'nav',
					'menu_class'		=> 'list-unstyled list-inline'
					
				) );
			?>
		</div><!-- end col -->
		<div class="col-sm-3">
			<p class="pull-right"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
		</div><!-- end col -->
	</div><!-- container -->
</footer>


<!-- BOOTSTRAP CORE JAVASCRIPT
	 Placed at the end of the document so the pages
	 load faster!
================================================== -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
