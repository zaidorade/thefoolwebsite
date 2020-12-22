<?php get_header();?>


<?php /* Template Name: Etc Archive Page */ ?>

<!-- for live site -->
<?php $catquery = new WP_Query( 'cat=1365' ); ?>

<body class = "etc-body">
  <div style="padding:30px; padding-top: 20px; margin-left: auto; margin-right: auto; max-width: 90%; text-align: left;">
    <!-- <h1 style="color: black; text-align: center;"> <?php the_title();?> </h1> -->

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>
</body>


<?php get_footer();?>
