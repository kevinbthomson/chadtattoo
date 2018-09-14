<?php
  get_header();
?>

<section id="section--portfolio" class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Portfolio</h1>

        <div class="portfolio__thumbnails">

        <?php 
          while (have_posts()) {
            the_post(); ?>
            
            <a data-lightbox="portfolio" title="<?php the_title(); ?>" href="<?php the_post_thumbnail_url('large'); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            
          <?php } ?>

        </div><!-- /.portfolio__thumbnails -->

        <div class="pagination">
          <?php echo paginate_links(); ?>
        </div>
        
      </div>
    </div>
  </div>
</section>


<?php
  get_footer();
?>