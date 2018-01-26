<?php
/*
  Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>

<section>

    <div class="leader">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

  	<?php endwhile; endif; ?>

    </div>
  
</section>


<?php get_template_part('content', 'portfolio'); ?>


<?php get_footer(); ?>
