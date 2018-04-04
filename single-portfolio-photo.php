<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="post">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h1>photo: 
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>

        <ul class="post-meta no-bullet">
          <li class="author">
            <span class="wpt-avatar small">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
            </span>
            by <?php the_author_posts_link(); ?>
          </li>
          <li class="cat">in <?php the_category( ', ' ); ?></li>
          <li class="date">on <?php the_time('F j, Y'); ?></li>
        </ul>

        <?php if( get_the_post_thumbnail() ) : ?>
        <div class="img-container">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>

        <?php the_content(); ?>
        <?php comments_template(); ?>

        <?php endwhile; else : ?>

          <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>

        <?php endif; ?>

      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</article>

<?php get_footer(); ?>
