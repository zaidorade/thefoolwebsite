<?php get_header();?>

<?php /* Template Name: About Page */ ?>



<div style="padding:30px;">
<div class ="blogPost">

  <!-- <h1> <?php the_title();?> </h1> -->

  <?php if (have_posts()) : while(have_posts()) : the_post();?>

      <?php the_content();?>

  <?php endwhile; endif;?>
</div>
</div>



<?php get_footer();?>
