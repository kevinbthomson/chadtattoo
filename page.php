<?php
  get_header();
?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="the-title"><?php the_title(); ?></h1>
        
        <?php the_content(); ?>

      	<?php endwhile; else : ?>

      	  <p>Sorry, page not found</p>

      	<?php endif; ?>

      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>

<?php get_footer(); ?>
