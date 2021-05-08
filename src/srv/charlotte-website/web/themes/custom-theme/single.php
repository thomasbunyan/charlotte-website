<!-- View a blog post -->

<?php get_header();?>

<div class="post-page">
  

  <div class="post-wrapper">
      <img src=<?php echo get_field("image")[sizes][large]; ?> data-aos="zoom-in">
      <h1 data-aos="fade-up"><?php echo get_field("title"); ?></h1>
      <p data-aos="fade-up"><?php echo get_field("description"); ?></p>
      <small data-aos="fade-up"><?php echo get_field("date"); ?></small>
  </div>
    
</div>

<?php get_footer();?>