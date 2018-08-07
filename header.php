<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <head profile="http://gmpg.org/xfn/11">

      <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,400,400i" rel="stylesheet">


      <link rel="stylesheet" type="text/css" href="style.css" />

      <script src="jquery.min.js"></script>


        <title><?php
            if ( is_single() ) { single_post_title(); }
            elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
            elseif ( is_page() ) { single_post_title(''); }
            elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
            elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
            else { bloginfo('name'); wp_title('|'); get_page_number(); }
        ?></title>

        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <?php wp_head(); ?>

         <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    </head>


    <div id="wrapper">

      <div id="header">

        <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>

        <ul id="nav">
          <li><a href="about.html">About</a></li>
          <li><a href="">Resume</a></li>
          <li><a href="">Work</a></li>
        </ul>
        <h1><?php bloginfo('name'); ?></h1>
        <!-- <div class="clear"></div> -->
      </div>


    <body>
        <div id="column">
            <h1 class="blog-title"><a href="/"></a></h1>

        <div id="masthead">

            <div id="access">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
            </div><!-- #access -->

        </div><!-- #masthead -->
