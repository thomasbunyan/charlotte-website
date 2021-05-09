<?php get_header();?>

  <div class="contact-page" data-aos="zoom-in">

    <i class="far fa-envelope"></i>

    <p><?php the_field("tagline"); ?></p>

    <h1 id="email" class="noselect" title="Click to copy">
      <?php the_field("email"); ?>
      <i class="far fa-clipboard"></i>
    </h1>
    
    <div class="socials">
      <p>You can also find me on...</p>

      <a href="https://www.instagram.com/charlie_portfolio/" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>  
      
      <a href="https://www.linkedin.com/in/charlotte-bunyan-00721b210/" target="_blank">
        <i class="fab fa-linkedin-in"></i>
      </a>

    </div>

  </div>

<?php get_footer();?>