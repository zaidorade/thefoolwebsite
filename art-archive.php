<?php get_header();?>


<?php /* Template Name: Art Archive Page */ ?>

<!-- for live site -->
<?php $catquery = new WP_Query( 'cat=1363' ); ?>

<!-- for local server -->

<h2 class = "archivePosts" style="background-color: white; width: 97%;padding: 12px; border-width: 3px; margin-top: 10px; padding-top: 4px;
padding-left: 12px; border-style: solid; border-spacing: 10px; margin-left: auto; margin-right: auto;" rel="bookmark"> Art </h2>


<?php while($catquery->have_posts()) : $catquery->the_post(); ?>


  <h3 class = "archivePosts" style="background-color: #e9ab73; width: 97%;padding: 12px; border-width: 3px; margin-top: 10px; padding-top: 4px;
  padding-left: 12px; border-style: solid; border-spacing: 10px; margin-left: auto; margin-right: auto;" rel="bookmark">
  <a href= "<?php the_permalink();?>" class="archivePost">  <?php the_title();?> </a>


<?php endwhile;
    wp_reset_postdata();
?>


<?php get_footer();?>
