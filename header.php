<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <!-- main navigation -->
    <nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="Chad Gordon Stewart Tattoo"><?php bloginfo('name'); ?></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-content">
        <?php
          $args = array(
            'menu' => 'main-menu',
            'container' => false,
            'menu_class'  => 'navbar-nav ml-auto'
          );

          wp_nav_menu( $args );
        ?>
      </div><!-- /.navbar-collapse -->
    </nav>
