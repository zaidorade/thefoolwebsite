<?php

// add_filter('get_search_form', 'my_search_form');
//
// function my_search_form($text) {
//      $text = str_replace('value="Search"', 'value=" " ', $text);
//      return $text;
// }

function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');

  wp_register_style("custom", get_template_directory_uri() . "/custom.css", '', '1.0.0');
  wp_enqueue_style('custom');

}


add_action('wp_enqueue_scripts', 'load_stylesheets');


function my_search_form( $form ) {
$form = '

<form id="search" action="' . home_url( '/' ) . '" method="get">
<input id="s" name="s" type="text" value="' . get_search_query() . '" />
<input type="submit" alt="Search" value="Search" />
</form>';

return $form;
}

add_filter( 'get_search_form', 'my_search_form' );







function include_jquery()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jqeury', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, true);

  add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs()
{
  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

register_nav_menus(
  array(
      'top-menu' => __('Top Menu', 'theme'),
      'footer-menu' => __('Footer Menu', 'theme'),
  )
);

function my_first_post_type()
{

  $args = array(
      'labels' => array(
        'name' => 'Articles',
        'singular_name' => 'Article'
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'page-attributes',  'custom-fields'),
      'taxonomies'  => array( 'category' ),
      //'rewrite' => array('slug' => 'article'),
  );


  add_action('init', 'my_first_taxonomy');

  register_post_type('article', $args);

}

add_action('init', 'my_first_post_type');

function my_first_taxonomy()
{
    $args = array(
      'labels' => array(
        'name' => 'Types',
        'singular_name' => 'Type',
      ),

      'public' => true,
      'hierarchical' => false,

    );
    register_taxonomy('types', array('article'), $args);
}

add_action('init', 'my_first_taxonomy');

 ?>
