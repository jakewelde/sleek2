<?php get_header(); ?>
 
        <div id="container">
            <div id="content">

				<?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h2 class="entry-title"><?php the_title(); ?></h2>
					

					<div class="entry-utility">
				                        <span class="meta-prep meta-prep-entry-date"><?php _e('posted', 'hbd-theme'); ?></span>
				                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
					   <span class="entry-category">
    	                    <?php printf( __( 'in %1$s', 'hbd-theme' ),
			                        get_the_category_list(' &#8226; ')
			                        ) ?>
					   </span>
                    </div><!-- #post-<?php the_ID(); ?> -->           

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
					</div><!-- .entry-utility -->
                    
                    <div class="back-to">
                        <span class="entry-category">
                            <?php printf( __( 'back to %1$s', 'hbd-theme' ),
                                    get_the_category_list(' &#8226; ')
                                    ) ?>
                        </span>
                    </div>
					<?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<div class=\"edit-link\">", "</div>" ) ?>
    
					 
            </div><!-- #content -->
        </div><!-- #container -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>