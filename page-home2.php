<?php
/* Template Name: Secret Home */
?>
<?php get_header('header4'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <?php the_content();?>

      <?php endwhile; endif;?>
      <a href="#down"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
      </div>
    </div>

    <div class="container" id="down">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-left')); ?>
        </div>
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-center')); ?>
       </div>
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-right')); ?>
        </div>
      </div>
    </div>

      <div class="jumbotron index-jumbo-second">
        <div class="container">

        </div>
      </div>
      <div class="container">
<?php get_footer(); ?>
