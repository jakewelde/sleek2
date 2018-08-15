<?php get_header(); ?>

        <div id="container">
            <div id="content">

                <?php the_post(); ?>

				<h2 class="page-title"><span><?php single_cat_title() ?></span></span></h2>
				<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<h3 class="archive-meta category-description">' . $categorydesc . '</h3>' ); ?>

				<?php rewind_posts(); ?>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-above" class="navigation">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-above -->
				<?php } ?>

				<?php while ( have_posts() ) : the_post(); ?>

				                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				                    <div class="entry-meta">
				                        <span class="meta-prep meta-prep-entry-date"><?php _e('posted', 'hbd-theme'); ?></span>
				                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				                        <?php if ( $cats_meow = cats_meow(' &#8226; ') ) : // Returns categories other than the one queried ?>
                        				                        <span class="meta-sep"> &#8226; </span>
										                        <span class="cat-links entry-category"><?php printf( __( '%s', 'hbd-theme' ), $cats_meow ) ?></span>
										<?php endif ?>
				                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'hbd-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>

				                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\"> &#8226; </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
				                    </div><!-- .entry-meta -->

				                    <div class="entry-summary">
				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
				                    </div><!-- .entry-summary -->

				                </div><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; ?>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-below" class="navigation">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-below -->
				<?php } ?>

                <div class="back-to"><a href="/">home</a></div>

            </div><!-- #content -->
        </div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
