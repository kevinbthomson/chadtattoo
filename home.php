<?php get_header(); ?>

<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Chad Gordon Stewart</h1>
      </div>
      <div class="col-md-6">
        <img src="./img/profile-pic.jpg" alt="Chad Stewart profile picture" class="img-fluid rounded-circle" id="profile-pic">
        <p>Chad Gordon Stewart began his career at Ace Custom Tattoo in Charlotte, North Carolina in 1995.</p>
      </div>
      <div class="col-md-6">
        <p>Chad moved to Denver, Colorado and worked at Alternative Arts Tattoo. He is currently working at Mammoth American Tattoo with a great crew.</p>
      </div>
    </div>
  </div>
</div>

<section>
  <div class="row">
    <div class="col-md-12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article <?php post_class('post'); ?>>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
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
                <?php the_post_thumbnail('large'); ?>
              </div>
              <?php endif; ?>
            </article>

  	    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

			<?php endwhile; else : ?>

			  <p><?php _e( 'Sorry, no pages found.' ); ?></p>

			<?php endif; ?>
	  </div>

  </div>
</section>





<?php get_footer(); ?>
