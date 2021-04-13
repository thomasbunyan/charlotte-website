<!-- View a blog post -->

<?php get_header();?>

  <div class="break-line"></div>

  <div class="post-page">
    <h1><?php the_field("title"); ?></h1>
    <small><?php the_field("date"); ?></small>
    <p><?php the_field("description"); ?></p>
    <img src=<?php the_field("image"); ?> >
  </div>

<?php get_footer();?>