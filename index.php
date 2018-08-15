<?php get_header(); ?>

<div id="container">

    <div id="content">

     <?php
      $args = array( 'post_type' => 'portfolio' );
      $query = new WP_Query( $args );
      ?>

     <div id="myMosaic">

  		<?php while ( $query->have_posts() ) : $query->the_post() ?>

      <div class="item withImage" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
        <div class="shader"></div>
        <div class="linkWrap">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      </div>

		<?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  </div>





</div><!-- #container -->

<script>

  const duration = 200;
  const modifier = 100;
  $('.withImage').hover(function(){
    $(this).children('.shader').stop().animate({
      opacity: .4
    }, duration);
    $(this).children('.linkWrap').stop().animate({
      opacity: 1
    }, duration+modifier);
  },function(){
    $(this).children('.shader').stop().animate({
      opacity: 0
    }, duration);
    $(this).children('.linkWrap').stop().animate({
      opacity: 0
    }, duration-modifier);
  });

</script>

<?php get_footer(); ?>
