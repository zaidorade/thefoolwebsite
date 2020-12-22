<?php get_header();?>

<?php /* Template Name: Front Page */ ?>



<div>
  <!-- <h1> <?php the_title();?> </h1>

  <?php if (have_posts()) : while(have_posts()) : the_post();?>


      <?php the_content();?>

  <?php endwhile; endif;?> -->


  <!-- <article>
    <section1> <p style = "display: block; justify-content: left; align-items: left;"> Prose </p> <?php get_template_part('includes/prose', 'content');?> </section1>
    <section2> <p style = "width: 200px; word-break: break-word;"> Poetry </p> <?php get_template_part('includes/poetry', 'content');?> </section2>
    <section3> <p style = "width: 200px; word-break: break-word;"> Art </p> <?php get_template_part('includes/art', 'content');?> </section3>
    <section4> <p style = "width: 200px; word-break: break-word;"> etc. </p> <?php get_template_part('includes/etc', 'content');?> </section4>

  </article> -->



  <div class="grid-container">
<div class="grid-item2">  <h3> <a href="https://thefoolxyz2.wpcomstaging.com/poetry-archive/"> Poetry  </a> </h3> <h3 style = "text-align:center; font-size: 20px; margin:0 auto; max-width: 370px;"> <br>  <br> <br> <?php get_template_part('includes/poetry', 'content');?> </h3> </div>
	  <div class="grid-item4"> <h3> <a href="https://thefoolxyz2.wpcomstaging.com/art-archive/"> Art  </a> </h3> <h3 style = "text-align:center; font-size: 20px; margin:0 auto; max-width: 370px;">   <br>  <br> <br> <?php get_template_part('includes/art', 'content');?> </h3>  </div>
</div>

<div class="grid-container">
	<div class="grid-item">  <h3> <a href="https://thefoolxyz2.wpcomstaging.com/prose-archive/"> Prose  </a> </h3> <h3 style = "text-align:center; font-size: 20px; margin:0 auto; max-width: 370px;"> <br>  <br> <br> <?php get_template_part('includes/prose', 'content');?> </h3> </div>
	<div class="grid-item3">  <h3>
     <a href="https://thefoolpress.xyz/random-page/"> Etc.  </a>
		</h3> <p >  <a href="https://thefoolpress.xyz/random-page/"> <img src="<?php echo get_template_directory_uri();?>/imgs/spiral2.png"  style = " font-size: 20px; display: block; margin-left: auto; margin-right: auto; margin-top: -55px; max-width: 300px;" /> </a>

 </p> </div>
</div>


<?php get_footer();?>
