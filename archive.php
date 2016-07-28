<?php get_header('header2'); ?>
    <div class="page-header">
      <h1><?php wp_title(''); ?></h1>
    </div>
    <div class="content_wrap">
     <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-9">

          <div class="blog-wrap">
          <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

              <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <strong><em><p>
                  By: <?php the_author(); ?>
                  on <?php echo the_time('l, F jS, Y'); ?>
                  in <?php the_category(', ');?>.
                  <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                </p></em></strong>

                <hr/>
                <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Open Article</a>

              </article>

          <?php endwhile; else:?>


          <?php endif; ?>

        </div>
        </div>
        <?php get_sidebar('blog'); ?>

      </div>
<?php get_footer(); ?>
