<?php get_header('header3'); ?>
     <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-9">



          <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
              </div>
              <?php the_content(); ?>
          <?php endwhile; else:?>

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>
            <p>Nothing is here!</p>
          <?php endif; ?>

        </div>

        <?php get_sidebar(); ?>

      </div>
<?php get_footer(); ?>
