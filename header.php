<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <!-- main navigation -->
    <nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="Chad Stewart Tattoo"><?php bloginfo('name'); ?></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if (get_post_type() == 'portfolio-photo' OR is_page('portfolio')) echo 'current-menu-item' ?>">
            <a class="nav-link" href="<?php echo get_post_type_archive_link('portfolio-photo'); ?>" title="Tattoo Portfolio Photos"><i class="far fa-images"></i> <span class="d-md-none d-lg-inline">Portfolio</span></a>
          </li>
          <li class="nav-item <?php if (!is_front_page() && is_home() OR is_single()) echo 'current-menu-item' ?>">
            <a class="nav-link" href="<?php echo site_url('/news') ?>"><i class="far fa-newspaper" title="News &amp; Events"></i> <span class="d-md-none d-lg-inline">News &amp; Events</span></a>
          </li>
          <li class="nav-item <?php if (is_page('contact') OR wp_get_post_parent_id(0) == 2) echo 'current-menu-item' ?>"><a class="nav-link" href="<?php echo site_url('/contact') ?>" title="Contact"><i class="far fa-envelope"></i> <span class="d-md-none d-lg-inline">Contact</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" id="nav-icon--instagram" title="Instagram/theevilseed" href="https://www.instagram.com/theevilseed/"><i class="fab fa-instagram" title="Instagram"></i> <span class="d-md-none d-lg-inline">Instagram</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="tel:+13034552855" id="nav-icon--phone" title="Call the shop! 303-455-2855"><i class="fas fa-phone"></i> <span class="d-md-none d-lg-inline">303-455-2855</span></a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
