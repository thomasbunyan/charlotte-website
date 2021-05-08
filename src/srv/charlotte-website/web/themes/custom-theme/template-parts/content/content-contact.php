<!-- Static page -->

<?php get_header();?>

  <div class="contact-page" data-aos="zoom-in">

    <i class="far fa-envelope"></i>

    <p><?php the_field("tagline"); ?></p>

    <h1 id="email" class="noselect" title="Click to copy">
      <?php the_field("email"); ?>
    </h1>

  </div>

<?php get_footer();?>