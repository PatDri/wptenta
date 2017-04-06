<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php bloginfo ('name'); ?></title>

    <?php
      wp_head();
    ?>

  </head>
  <body <?php echo body_class(); ?>>
  <div class="navbar-wrapper">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <a class="navbar-brand" href="<?php echo bloginfo ('url'); ?>">Vår reseblogg</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <?php
            wp_nav_menu(array(
              'theme_location'        =>'header-menu',
              'container'             => false,
              'menu_class'            =>'navbar-nav',
              'fallback_cb'           =>'__return_false',
              'items_wrap'            =>'<ul id="%1$s" class="%2$s ml-auto mr-auto">%3$s</ul>',
              'depth'                 =>2,
              'walker'                =>new bootstrap_4_walker_nav_menu(),
            ));
          ?>
          <form class="form-inline my-2 my-lg-0" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="s" id="s">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
      </nav><!-- / .navbar navbar -->
    </div>