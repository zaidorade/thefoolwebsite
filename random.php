
<?php /* Template Name: Random  */ ?>



<?php
/*
Random Post Picker
Use on page to send viewer to random post optionally mod query
*/
// set arguments for WP_Query on published posts to get 1 at random
$args = array(
  // 1365 online
  // 3 offline
    'category__and' => '1365',
    'post_type' => 'post',
    // 'post_status' => 'publish',
    // 'showposts' => 1,
    'orderby' => 'rand'
    // 'order' => 'ASC'
);

$my_random_post = new WP_Query ( $args );

while ( $my_random_post->have_posts () ) {
  $my_random_post->the_post ();

  // redirect to the random post
  wp_redirect ( get_permalink () );
  exit;
}
?>
