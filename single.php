
<?php get_header();?>

<?php /* Template Name: Single Post */ ?>


<div style="padding:30px; padding-top: 20px; margin-left: auto; margin-right: auto; max-width: 60%; text-align: justify;">

  <?php if (have_posts()) : while(have_posts()) : the_post();?>

      <?php the_content();?>

  <?php endwhile; endif;?>



<?php get_footer();?>
