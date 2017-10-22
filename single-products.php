<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bakoma
 */

get_header(); ?>

    <?php get_template_part( 'template-parts/page-head-single-product'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-products', get_post_type() );

		endwhile; // End of the loop.
		?>

    <div class="container">
        <div class="row color">
            <div>
                <!--article_border-->
                <div class="border_bottom">
                    <p class="border_text other-products">
                        Inne produkty
                    </p>
                </div>
                <!-- /article_border-->
                <!--article_box-->
                <div class=" row article_box ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php
                        $args = array(
                             'posts_per_page' => 3,
                             'offset' => 0,
                             'cat' => '7',
                             'orderby' => 'ID',
                             'order' => 'ASC',
                             'post_type' => 'products',
                             'post_status' => 'publish',
                             'suppress_filters' => true
                         );

                         $the_query = new WP_Query( $args );
                             $index = 1;
                             if ( $the_query->have_posts() ) :
                                  while ( $the_query->have_posts() ) : $the_query->the_post();
                                        $image = get_field('zdjecie_produktu');
                                        $size = 'thumbnail';
                                      $thumb = $image['sizes'][ $size ];

                                        echo   '<article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article"><div class="article_background">
                                             <div><a href="' . get_the_permalink() . '"><img src="' . $thumb . '" alt="" /></a>
                                             <div class="article_text">
                                                 <p class="article_date">AKTUALNOÅšCI | ' . get_the_date( 'd.m.Y' ) . '</p>
                                                 <h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
                                                 <p class="article_border"><a href="' . get_the_permalink() . '">' . get_post_meta(get_the_ID(), 'opis_wpisu', true) . '</a></p>
                                             </div></div>
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                 <p><a class="button" href="' . get_the_permalink() . '">WIĘCEJ &#8250;</a> </p>
                                             </div>
                                         </div>
                                     </article>';
                                     $index++;
                                   endwhile;
                                   wp_reset_postdata();
                                 endif;
                                 ?>
                               </div>
                            </div>
                            <div class=" row article_box ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="border_bottom_wiecej">
                                    <p class="border_wiecej"> </p>
                                    <p class="border_text_wiecej">
                                      <a class="button" href="' .get_the_permalink() . '">WIĘCEJ</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                         </div>
                      </div>
                      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
