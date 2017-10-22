<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bakoma
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
		if ( have_posts() ) : ?>
                <!--searchBox-->
                <div class="container-fluid backgroundColor">
                    <div class="container">
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12  searchBox ">
                            <div class="searchBoxTitle">
                                <p>Wyszukiwarka informacji </p>
                                <p class="icon_img_title"></p>
                            </div>
                            <div class="row">
                                <div class="searchBubble visible-lg">

                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="input-group searchInput ">
                                        <?php echo do_shortcode( '[searchandfilter fields="search,post_date" post_types="post" types=",daterange" headings="" submit_label="Znajdź" search_placeholder="Wpisz szukane słowo"]' ); ?>
                                    </div>
                                    <?php
					                       /* translators: %s: search query. */
					                       //printf( esc_html__( 'Search Results for: %s', 'bakoma' ), '<span>' . get_search_query() . '</span>' );
				                        ?>
                                </div>
                                <!-- /searchBubble -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /searchBox-->

                <div class="container">
                    <div class="row color">
                        <div>
                            <!--article_border-->
                            <div class="border_bottom">
                                <p class="border"> </p>
                                <p class="border_text">
                                    AKTUALNOŚCI
                                </p>
                            </div>
                            <!-- /article_border-->
                            <!--article_box-->
                            <div class=" row article_box ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <!-- #main -->
    </section>
    <!-- #primary -->

    <?php get_footer();
