<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package udeb_pazdziernik
 */


?>

	</div><!-- #conten t -->
<<<<<<< HEAD
	<div class="borderFooter container-fluid">


=======
	<div class="borderHeader container-fluid">
	</div>
>>>>>>> e390b1d5863b5822ebdb789a2cb47188cc10e5d5
	<footer id="colophon" class="container-fluid main_width site-footer">
		<div class="site-info">
			<div class="footer_boxes ">


				<div class="sidebar_footer borderTop col-lg-12 col-md-12 col-sm-12 col-xs-12">
				 <?php dynamic_sidebar('footer'); ?>
				</div>


			</div>

<<<<<<< HEAD
			<div class=" footerBox  col-lg-12 col-md-12 col-sm-12 col-xs-12">
=======
			<div class=" footerBox borderBottom col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
>>>>>>> e390b1d5863b5822ebdb789a2cb47188cc10e5d5

				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Copyright © 2017 UDEB   Treść serwisu prawnie chroniona ', 'udeb' ) );
				?>
				<!-- <span class="sep"> | </span> -->
				<a href="<?php echo esc_url( __( 'http://webdawca.pl/', 'udeb' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. Udeb. */
					printf( esc_html__( 'Wykonanie: Webdawca', 'udeb' ) );
				?></a>

			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	  </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
