<?php get_header();?>

<div class="error-page">

  <h1>Sorry, that page doesn’t exist!</h1>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/public/images/puzzle.svg" alt="404-image">

  <a href=<?php echo get_site_url() ?>>
    <div class="back-homepage">
      <i class="fas fa-arrow-left"></i>
      Back to homepage
    </div>
  </a>

</div>

<?php get_footer();?>