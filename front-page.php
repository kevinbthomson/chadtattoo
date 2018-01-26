<?php get_header(); ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="leader">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

          <?php endwhile; endif; ?>

        </div><!-- /.leader -->
      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>

<?php get_template_part('content', 'portfolio'); ?>

<?php get_footer(); ?>
