<?php get_header(); ?>

        <div id="container">
            <div id="content">

              <?php the_post(); ?>


                <div class="narrow">
                  <img class="headerImage" src="<?php the_post_thumbnail_url() ?>" />
                  <h2 class="pageHeader"><?php the_title() ?></h2>

                  <div class="blurb">
                    <?php the_content(); ?>
                  </div>

                  <!-- <div class="blurb">
                    I’m a senior at the <a href="www.upenn.edu">University of Pennsylvania</a> in Philadelphia
                    studying Mechanical Engineering, with minors in Computer Science and French.
                  </div>
                  <div class="blurb">
                    My academic interests lie in aerial robotics with specific enthusiasm for planning
                    around interaction with the environment.
                  </div>
                  <div class="blurb">
                    I'm passionate about conservation, theatre, vegan cooking, and making beautiful things.

                  </div> -->



                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--                     <h1 class="entry-title"><?php the_title(); ?></h1> -->
                    <div class="entry-content">
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
<?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>

            </div><!-- #content -->
			<?php get_sidebar(); ?>
        </div><!-- #container -->

<?php get_footer(); ?>
