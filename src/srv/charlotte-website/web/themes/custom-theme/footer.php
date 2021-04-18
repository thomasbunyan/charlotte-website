<?php wp_footer();?>

  <footer class="noselect">

    <h1><?php echo get_field("footer_title", 10); ?></h1>

    <p class="subtitle"><?php echo get_field("footer_subtitle", 10); ?></p>

    <div class="contact-button">
      <a href=<?php echo get_permalink(get_page_by_path('contact')->ID) ?>>Contact</a>
    </div>

    <div class="h-bline"></div>

    <div class="lower-area">

      <div class="container left">
        <h2>
          <a href=<?php echo get_site_url() ?>>Charlotte Bunyan</a>
        </h2>
      </div>

      <div class="container center"><p>© <?php echo date("Y"); ?>. All rights reserved.</p></div>

      <div class="container right">

        <div class="socials">
  
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href=<?php echo get_permalink(get_page_by_path('contact')->ID) ?>><i class="far fa-envelope"></i></a>
  
        </div>

      </div>

    </div>

  </footer>

  </body>
</html>