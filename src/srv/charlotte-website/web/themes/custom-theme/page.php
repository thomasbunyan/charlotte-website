<!-- Static page -->

<?php get_header();?>

	<div class="page-body">

    <div class="break-line"></div>

    <h1>
      <?php the_title();?>
    </h1>

    <div class="break-line"></div>

    <?php if (get_field('email') != null): ?>
      
      <div class="contact-details">

        <h2>
          <?php the_field('email'); ?>
        </h2>
  
        <img src=<?php the_field('picture'); ?> />
      
      </div>

    <?php endif;?>
    
    <div>
      <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
      <?php endwhile; endif;?>
    </div>


  </div>

<?php get_footer();?>