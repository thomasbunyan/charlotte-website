<!-- View a blog post -->

<?php get_header();?>

<div class="post-page">
  

  <div class="post-wrapper">
      <img src=<?php echo get_field("image")[sizes][large]; ?> data-aos="zoom-in">
      <div class="post-info" data-aos="fade-up">
        <h1><?php echo get_field("title"); ?></h1>
        <p><?php echo get_field("description"); ?></p>
        <small><?php echo get_field("date"); ?></small>
      </div>
  </div>
    
</div>

<?php get_footer();?>