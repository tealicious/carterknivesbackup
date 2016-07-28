<?php get_header('header3'); ?>
     <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-9">

          <?php woocommerce_content(); ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
              </div>
              <?php the_content(); ?>

        </div>

        <?php get_sidebar(); ?>

      </div>
<?php get_footer(); ?>
