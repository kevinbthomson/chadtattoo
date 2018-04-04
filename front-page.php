<?php get_header(); ?>

<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <img src="<?php echo get_theme_file_uri('/img/profile-pic.jpg') ?>" alt="Chad Stewart profile picture" class="img-fluid profile-pic">
      </div>
      <div class="col-sm">
        <p>Chad Gordon Stewart began his career at Ace Custom Tattoo in Charlotte, North Carolina in 1995.</p>
        <p>Chad moved to Denver, Colorado and worked at Alternative Arts Tattoo. He is currently working at Mammoth American Tattoo with a great crew.</p>
        <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/126656ae5c845ac0a3eebf07b6a15fa3.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
      </div>
    </div>
  </div>
</div>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h3>Recent Portfolio Photos</h3>
        <div class="portfolio__thumbnails homepage-portfolio clearfix">
          <?php
            $homepagePhotos = new WP_Query(array(
              'posts_per_page' => '6',
              'post_type' => 'portfolio-photo'
            ));

            while ($homepagePhotos->have_posts()) {
              $homepagePhotos->the_post(); ?>

                <a data-lightbox="portfolio" title="<?php the_title(); ?>" href="<?php the_post_thumbnail_url('large'); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                
            <?php } wp_reset_postdata();
          ?>
        </div><!-- /.homepage-portfolio -->
        
        <div class="mt-2">
          <a href="<?php echo get_post_type_archive_link('portfolio-photo'); ?>"><i class="far fa-images"></i> View Full Portfolio</a>
        </div>
      </div><!-- /.col-sm -->

      <div class="col-sm">
        <h3>Recent News &amp; Events</h3>
        
        <ul class="homepage-posts">
        <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
         
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <li>
            <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(__('(more…)')); ?>
            <hr>
          </li>
        <?php 
        endwhile;
        wp_reset_postdata();
        ?>
        </ul>
      </div><!-- /.col-sm -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>

<?php get_footer(); ?>
