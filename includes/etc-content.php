

<?php $catquery = new WP_Query( 'cat=1365&posts_per_page=1' ); ?>


<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

<a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?> </a>
<?php endwhile;
    wp_reset_postdata();
?>
