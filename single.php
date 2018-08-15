<?php get_header(); ?>

        <div id="container">
            <div id="content">



              <div id="titleContent">
                <img src="<?php the_post_thumbnail_url(); ?>" class="featured" />
                <div class="leftSide">
                  <h2><?php the_title(); ?></h2>
                  <h3><?php echo(get_post_meta(get_the_ID(), 'when', true));?></h3>
                  <div class="context"><?php echo(get_post_meta(get_the_ID(), 'course', true));?></div>
                  <div class="credit"><?php echo(get_post_meta(get_the_ID(), 'team', true));?></div>
                </div>
              </div>
              <div id="main">
                <div class="text">
                  <?php the_post(); ?>

                  <?php echo(the_content()); ?>
                </div>

                <!-- <div class="youtubeEmbed">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/MaSbL68Hj4A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="youtubeEmbed">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/YTqLvEaBw_g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div> -->

              </div>





            </div><!-- #content -->
        </div><!-- #container -->

<?php get_footer(); ?>
