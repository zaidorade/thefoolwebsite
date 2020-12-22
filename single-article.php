
<?php get_header();?>

<?php /* Template Name: Single Post */ ?>


<div style="padding:30px; padding-top: 20px; margin-left: 10px; max-width: 65%; text-align: justify;">
  <h1 style="color: black; text-align: center;"> <?php the_title();?> </h1>

  <?php if (have_posts()) : while(have_posts()) : the_post();?>

      <?php the_content();?>

  <?php endwhile; endif;?>



<?php get_footer();?>
