
<?php get_header(); ?>
    <div class="page-header">
    <h1><?php the_title(); ?></h1>
    </div>
    <div class="content_wrap">
     <div class="container">
       <div class="row">
            <div class="col-md-12 prev-next">
              <?php next_post_link('%link', '<span class="glyphicon glyphicon-triangle-left"></span>'); ?>

              <a href="<?php bloginfo('url')?>/?p=65"><span class="glyphicon glyphicon-th"></span></a>

              <?php previous_post_link('%link', '<span class="glyphicon glyphicon-triangle-right"></span>'); ?>
            </div>
       </div>


      <div class="row">

          <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="blog-wrap col-lg-8 col-lg-push-2 portfolio-image">
              <?php
               $thumbnail_id = get_post_thumbnail_id();
               $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
               ?>
              <p><a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo the_title(); ?>"></a></p>
            </div>

            </div>


          <?php endwhile; else:?>

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>
            <p>Nothing is here!</p>
          <?php endif; ?>


<?php get_footer(); ?>
