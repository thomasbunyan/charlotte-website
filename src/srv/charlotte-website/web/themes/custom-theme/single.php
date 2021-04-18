<!-- View a blog post -->

<?php get_header();?>

<div class="post-page">
  
  <div class="post-wrapper">
      <img src=<?php the_field("image"); ?> >
      <h1><?php get_field("title"); ?></h1>
      <p><?php get_field("description"); ?></p>
      <small><?php get_field("date"); ?></small>
    </div>
    
  </div>

<?php get_footer();?>