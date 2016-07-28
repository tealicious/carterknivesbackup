<?php
/* Template Name: Full Width Template */
?>
<?php get_header(); ?>
<div class="jumbotron">
  <div class="container">
  <h1><?php the_title(); ?></h1>
  <a href="#down"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
  </div>
</div>
<div class="content_wrap" id="down">
     <div class="container">
       <div class="map-wrap">
        <div class="row">

        <div class="col-md-12">

          <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

              <?php the_content(); ?>
          <?php endwhile; else:?>

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>
            <p>Nothing is here!</p>
          <?php endif; ?>

        </div>
      </div>
    </div>
<?php get_footer(); ?>
