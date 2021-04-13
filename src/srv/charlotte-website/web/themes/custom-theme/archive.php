<?php get_header();?>

	<h1>
		<?php single_cat_title();?>
  </h1>
  
  <p>
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <?php the_title();?>
      <?php the_excerpt();?>
    <?php endwhile; endif;?>
  </p>

<?php get_footer();?>