<?php
/*
  Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>

<section id="section--portfolio" class="portfolio">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php the_title(); ?></h1>
        <div class="portfolio__thumbnails">
          <?php the_content(); ?>  
        </div>
      </div>
    </div>
  </div>
	
  <?php endwhile; endif; ?>
  
</section>

<?php get_footer(); ?>
