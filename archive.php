<!--
for single blog posts -->
<?php get_header();?>

<?php /* Template Name: Blog Post */ ?>


<div >
  <!-- <h1 style="background-color: #b5651d; width: 100%"> <?php single_cat_title();?> </h1> -->


  <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <h3 class = "archivePosts" style="background-color: #e9ab73; width: 97%;padding: 12px; border-width: 3px; margin-top: 10px; padding-top: 4px;
      padding-left: 12px; border-style: solid; border-spacing: 10px; margin-left: auto; margin-right: auto;">
      <a href= "<?php the_permalink();?>" class="archivePost">  <?php the_title();?> </a>
      <!-- <p class="icon-date"><?php echo get_the_date( 'Y-m-d' ); ?></p> -->
      <!-- <p class="icon-time"><?php the_time( 'H:i:s' ); ?></p> -->
      </h3>
      <!-- <?php the_excerpt();?> -->
      <!-- <a href= "<?php the_permalink();?>" class="btn btn-success"> Read more </a> -->

  <?php endwhile; endif;?>



<?php get_footer();?>
