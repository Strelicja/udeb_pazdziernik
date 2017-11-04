<?php
/*
 * Single Post Template
 */

get_header();

get_template_part( 'partials/header/banner' );

global $majestic_options;

$variation = $majestic_options['majestic_recipe_single_header_var'];

?>
    <div class="wrapper-main-contents">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <!--single post-->
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            global $post;
                            global $skip_post;

                            $skip_post = $post->ID;

                            $format = get_post_format( get_the_ID() );
                            if ( false === $format ) {
                                $format = 'standard';
                            }

                            // header margin fix in case of no thumbnail for a blog post
                            $article_classes = 'post-single';
                            if ( !has_post_thumbnail() ) {
                                $article_classes .= ' no-post-thumbnail';
                            }
                            if ( $format == 'quote' ) {
                                $article_classes .= ' post-quotes';
                            }
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( $article_classes ); ?>>
                                <?php
                                // image, gallery or video based on format
                                if ( in_array( $format, array( 'standard', 'image', 'gallery', 'video' ) ) ) :
                                    get_template_part( 'partials/post/entry-format', $format );
                                endif;

                                if( $format != 'quote' ) :
                                    ?>

                                    <div class="post-contents">
                                        <div class="post-contents-inner">
                                            <?php

                                            if( $format == 'audio' ) :
                                                get_template_part( 'partials/post/entry-format', $format );
                                            endif;

                                            // title
                                            get_template_part( 'partials/post/entry-title' );

                                            // meta
                                            get_template_part( 'partials/post/entry-meta' );

                                            the_content();

                                            wp_link_pages( array(
                                                'before' => '<div class="page-links">',
                                                'after'  => '</div>',
                                                'link_before' => '<span>',
                                                'link_after' => '</span>'
                                            ) );

                                            if( majestic_get_option( 'majestic_post_bottom_tags' )
                                                && has_tag()
                                            ) {
                                                the_tags('<ul class="post-tags"><li>', ',</li> <li>', '</li></ul>');
                                            }

                                            if( majestic_get_option( 'majestic_post_next_prev_links' ) ) {
                                                ?>
                                                <div class="prev-next-links">
                                                <span class="previous-post-arrow">
                                                    <?php next_post_link( '%link', '<i class="fa fa-arrow-left"></i>' . esc_html__( 'previous post', 'majestic-recipe-press' ) ); ?>
                                                </span>
                                                <span class="next-post-arrow">
                                                    <?php next_post_link('%link', esc_html__( 'next post ', 'majestic-recipe-press' ) . '<i class="fa fa-arrow-right"></i>'); ?>
                                                </span>
                                                </div>
                                                <?php
                                            }

                                            // Including related posts section
                                            if( majestic_get_option( 'majestic_related_posts' ) == 1 ){
                                                get_template_part('partials/post/single/related-posts');
                                            }

                                            // Including post author section
                                            if( majestic_get_option( 'majestic_post_author_info' ) == 1 ){
                                                get_template_part('partials/post/single/post-author');
                                            }

                                            /* Comments */

                                            if ( majestic_get_option( 'majestic_show_post_comments' ) == 1 ) {
                                                if ( comments_open() || '0' != get_comments_number() ) :
                                                    comments_template();
                                                endif;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                else :

                                    get_template_part( 'partials/post/entry-format', $format );

                                endif;
                                ?>
                            </article>
                            <?php
                        endwhile;
                    endif;
                    ?>
                    <!--single post-->

                </div>
                <div class="col-md-4 col-lg-3">

                    <?php get_sidebar(); ?>

                </div>
            </div>

        </div>
    </div>
<?php

get_footer();
