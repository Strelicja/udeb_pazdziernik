
                        <?php /* Template Name: Produkty */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container-fluid overflow  main_width colorWhite">
            <!--actual-->

            <div class="row">
                <p class="article_title_main ">
                    <?php echo the_title(); ?>
                </p>
                <div class="article_imgs ">

                  <?php
                      if(is_active_sidebar('social-sidebar-front')){
                          dynamic_sidebar('social-sidebar-front');
                      }
                  ?>
                  <!-- </span> -->
                    <!-- <a class="article_img_main" href="https://www.facebook.com/sharer/sharer.php?u=<?php get_the_permalink() ?>" target="_blank"></a>
                    <a class="article_img_main_2" href="https://twitter.com/home?status=<?php get_the_permalink() ?>" target="_blank"></a> -->
                </div>
            </div>

            <?php
                $query = new WP_Query( array('post_type' => 'products', 'posts_per_page' => 4, 'order' => 'ASC' ) );
                    while ( $query->have_posts() ) : $query->the_post();
                        get_template_part( 'template-parts/content', 'products' );
                        wp_reset_postdata();
            endwhile; ?>
        </div>
        <!--article-->
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
                                 'posts_per_page' => 99,
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
                                                 <div class="noPadding col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                 <a href="' . get_the_permalink() . '"><img src="' . $thumb . '" alt="" /></a>

                                                 <div class="article_text">
                                                     <p class="article_date">AKTUALNOŚCI | ' . get_the_date( 'd.m.Y' ) . '</p>
                                                     <h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
                                                     <p class="article_border"><a href="' . get_the_permalink() . '">' . get_post_meta(get_the_ID(), 'opis_wpisu', true) . '</a></p>
                                                 </div>
                                                 </div>
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
                                          <span class="button button2">WIĘCEJ</span>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                             </div>
                          </div>
                          </div>

                        </main>
                        <!-- .content-area -->
                        <?php get_footer(); ?>
