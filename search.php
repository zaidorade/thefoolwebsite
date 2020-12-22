<!--
for searches  -->
<?php get_header();?>

<?php /* Template Name: Archive */ ?>


<div >
  <!-- <h1 style="background-color: #b5651d; width: 100%"> <?php single_cat_title();?> </h1> -->

  <h1 style="padding-left: 25px; padding-top: 10px;"> Search Results for '<?php echo get_search_query();?>' </h1>

  <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <h3 class = "archivePosts" style="background-color: #e9ab73; width: 97%;padding: 5px; border-width: 3px; margin-top: 12px; padding-top: 1.5px;
      padding-left: 12px; border-style: solid; border-spacing: 10px; margin-left: auto; margin-right: auto;">
      <a href= "<?php the_permalink();?>" class="archivePost">  <?php the_title();?> </a>
      </h3>
      <!-- <?php the_excerpt();?> -->
      <!-- <a href= "<?php the_permalink();?>" class="btn btn-success"> Read more </a> -->

  <?php endwhile; endif;?>



<?php get_footer();?>
