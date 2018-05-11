<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="post">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h2><?php the_title(); ?></h2>

        <ul class="post-meta">
          <li class="author">by <?php the_author_posts_link(); ?></li>
          <li class="cat">in <?php the_category( ', ' ); ?></li>
          <li class="date">on <?php the_time('F j, Y'); ?></li>
        </ul>

        <?php if( get_the_post_thumbnail() ) : ?>
        <div class="img-container">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <?php endif; ?>

        <?php the_content(); ?>

        <?php endwhile; else : ?>

          <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>

        <?php endif; ?>

      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</article>

<?php get_footer(); ?>
