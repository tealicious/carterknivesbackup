<?php get_header('header2'); ?>
      <div class="jumbotron">
        <div class="container">
          <h1><?php wp_title(''); ?></h1>
        <a href="#down"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </div>
      </div>
      <div class="content_wrap" id="down">
     <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-9">

          <?php

            $args=array(
              'post_tpe' => 'post',
              'category_name' => 'featured'
            );
            $the_query = new WP_Query($args);

          ?>


                    <div class="blog-wrap">
                    <div id="carousel-example-generic" class="carousel slide" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">

              <?php if (have_posts()) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>

               <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if($the_query->current_post == 0): ?>active<?php endif; ?>"></li>

              <?php endwhile; endif; ?>

            </ol>

            <?php rewind_posts(); ?>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <?php if (have_posts()) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>

              <div class="item <?php if($the_query->current_post == 0): ?>active<?php endif; ?>">

                <?php
                 $thumbnail_id = get_post_thumbnail_id();
                 $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                 $thumbnail_meta = get_post_meta( $thumbnail_id , '_wp_attachment_image_alt', true);
                 ?>

                <a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
                <div class="carousel-caption">
                <?php the_title(); ?>
                </div>
              </div>

              <?php endwhile; endif; ?>

              </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

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
                <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Open Article</a>

              </article>

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
