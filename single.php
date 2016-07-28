<?php get_header('header2'); ?>
      <div class="jumbotron">
        <div class="container">
        <h1><?php the_title(); ?></h1>
      </div>
      </div>
      <div class="content_wrap">
     <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-9">


          <div class="blog-wrap single">
          <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="carousel2">

                <?php
                 $thumbnail_id = get_post_thumbnail_id();
                 $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                 $thumbnail_meta = get_post_meta( $thumbnail_id , '_wp_attachment_image_alt', true);
                 ?>

                <p class="item"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></p>
              </div>
              <strong><em><p>
                By: <?php the_author(); ?>
                on <?php echo the_time('l, F jS, Y'); ?>
                in <?php the_category(', ');?>.
                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
              </p></em></strong>
              <?php the_content(); ?>
              <hr />
              <?php comments_template(); ?>
          <?php endwhile; else:?>

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>
            <p>Nothing is here!</p>
          <?php endif; ?>

        </div>
        </div>

        <?php get_sidebar('blog'); ?>

      </div>
<?php get_footer(); ?>
