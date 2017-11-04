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


	<div class="site-info container-fluid main_width">
		<div class="footer_boxes ">


			<div class="sidebar_footer main_width borderTop col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <?php dynamic_sidebar('footer'); ?>
			</div>


		</div>
		</div><!-- .site-info -->
	<footer id="colophon" class="container-fluid  site-footer">

			<!-- <div class=""> -->
			<div class=" borderFooter container-fluid footerBox  col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'UDEB Administratiekantoor BV 2013 © Treść serwisu prawnie chroniona | Wykonanie:', 'udeb' ) );
				?>
				<!-- <span class="sep"> | </span> -->
				<a href="<?php echo esc_url( __( 'http://webdawca.pl/', 'target=_blank', 'udeb' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. Udeb. */
					printf( esc_html__( ' Webdawca', 'udeb' ) );
				?></a>

			</div>

	</footer><!-- #colophon -->
	<p class="visible-xs button_homepage. button_homepage2">
	 <a href="/wordpress/kontakt/">Skontaktuj&nbsp;się&nbsp;+&nbsp;</a>
	</p>
	  </div>
<!-- </div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
