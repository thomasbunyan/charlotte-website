<?php get_header();?>

  <?php 

    if(is_page('about')) {

      get_template_part( 'template-parts/content/content-about' );

    } elseif(is_page('contact')) {

      get_template_part( 'template-parts/content/content-contact' );

    } else {
      while ( have_posts() ) :
        the_post();
      endwhile;

    }
    
  ?>

<?php get_footer();?>