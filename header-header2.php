<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700|Ubuntu+Condensed|Montserrat:400,700|Cabin:400,700|Cabin+Condensed:400,700|Oswald:400,700|Lora:400,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <title>
      <?php bloginfo('name'); ?>
      <?php wp_title('|', true, 'left'); ?>
    </title>
    <meta name="Description" content="I'm Matthew Carter, and I hand craft custom made knives for sale online and in Bend, Oregon.">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
<?php wp_head(); ?>
  </head>

  <body id="up" <?php body_class(); ?>>

    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <button type="button" id="off-canvas-btn" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <?php
            $args = array (
              'menu'            => 'header-menu',
              'theme_location'  => 'header-menu',
              'depth'             => 2,
              'menu_class'      => 'nav navbar-nav navbar-right',
              'container'       => 'false',
              'walker'          => new wp_bootstrap_navwalker()
            );
            wp_nav_menu( $args );
           ?>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>
