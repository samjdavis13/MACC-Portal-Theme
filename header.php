<!DOCTYPE html>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?><?php wp_title( '-', true, 'left' ); ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.png" />

    <!-- iOS Icons -->
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/ios-icons/icon1.png"/>  
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/ios-icons/icon2.png"/>  
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/ios-icons/icon3.png"/> 
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/ios-icons/icon4.png"/> 

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fonts/font-face.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/screen.css" />

    <!-- Font Awesome Icons -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body>
    <div id="googleSearchBar">
      <div class=''>
        <form id='googleSearch' method="get" action="http://www.google.com/search" target="_blank">
          <input type='search' name="q" size="25" style="color:#808080;" maxlength="255" placeholder='Google Search'>
          <!--<input type="submit"><i class='fa fa-search'></i>-->
          <button type="submit" class="fa fa-search"></button>
        </form>
      </div>
    </div><div class="spacer"></div>
    <div id='header-block' class='row'>
      <div class='large-12 column'>
        <a href="<?php bloginfo('url') ?>"><img class='large-6 medium-6 small-12 push-3 column' src="<?php bloginfo('template_directory'); ?>/img/logo.png" id='main-logo'></a>
        <h1 class='hide'><?php bloginfo('name'); ?></h1>

        <nav class='small-12 column'>
          <ul class="inline-list" id="main-nav">
            <?php
              
            	$menuParameters = array(
        			  'container'       => false,
        			  'echo'            => false,
        			  'items_wrap'      => '%3$s',
        			  'depth'           => 0,
        			);

        			echo strip_tags(wp_nav_menu($menuParameters), '<a><li>' );
              
      			?>
          </ul>
        </nav>
      </div>
    </div>