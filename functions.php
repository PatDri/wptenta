<?php

  require_once("inc/wp-bootstrap-navwalker.php");
  
  function wptenta_setup() {

    // Lägg till storlekar
    add_image_size('page-featured-image', 2580, 450, array('center', 'center'));
    add_image_size('post-featured-image', 760, 9999, false);
    // Lägg stöd för featured img
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150, false);

    
    // Registrerar huvudmenyn
    register_nav_menu ('header-menu', __('Header menu', 'wptenta'));
}
add_action('after_setup_theme', 'wptenta_setup');

function wptenta_sidebars (){

  // registrera sidebar
  register_sidebar(array(
      'name'          =>  'Blog sidebar',
      'id'            =>  'blog-sidebar',
      'before_widget' =>  '<li class="widget">',
      'after_widget'  =>  '</li>',
      'before_title'  =>  '<h2>',
      'after_title'  =>  '</h2>'

    ));

}
add_action('widgets_init', 'wptenta_sidebars');

function wptenta_excerpt_more($more) {
  return sprintf('<br/><a class="Read more btn btn-primary"href="%1$s">%2$s</a>',
      get_permalink( get_the_ID()),
      __('Läs mer', 'wptenta')
    );
}
add_filter('excerpt_more', 'wptenta_excerpt_more');

function wptenta_styles (){

  // Laddar Bootstrap 4

  wp_enqueue_style('bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css',
    array(),'4.0.0-alpha.6', 'all');

  // Laddar våra styles

    wp_enqueue_style('wptenta-site', get_template_directory_uri() . '/inc/css/site.css',
    array('bootstrap4'),'2017040501', 'all');

  // Laddar in jQuery och tar bort den gamla inbyggda.

    wp_deregister_script ('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js',
    array (), '3.1.1', true);

    // Laddar Tether

    wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js',
    array ('jquery'), '1.4.0', true);

  // Laddar in Bootstrap javascript

    wp_enqueue_script('bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array ( 'jquery', 'tether' ), '4.0.0.-alpha.6', true);
}
add_action ('wp_enqueue_scripts', 'wptenta_styles');