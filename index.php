<?php
  get_header();
?>

<section id="section--news" class="news">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>News &amp; Events</h1>

        <?php 
          while (have_posts()) {
            the_post(); ?>
            <div class="post-item">
              <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

              <ul class="post-meta">
                <li class="author">by <?php the_author_posts_link(); ?></li>
                <li class="cat">in <?php the_category( ', ' ); ?></li>
                <li class="date">on <?php the_time('F j, Y'); ?></li>
              </ul>

              <div class="generic-content">
                
                <?php the_excerpt(); ?>
                
                <p>
                  <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Continue reading</a>
                </p>
              </div>
            </div>
          <?php }

          echo paginate_links();
        ?>

      </div>
    </div>
  </div>
</section>


<?php
  get_footer();
?>