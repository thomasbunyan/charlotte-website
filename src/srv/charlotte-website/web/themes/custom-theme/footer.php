<?php wp_footer();?>

<script>AOS.init();</script>

  <footer class="noselect" data-aos="fade-up">

    <h1><?php echo get_field("footer_title", get_page_by_path('about')->ID); ?></h1>

    <p class="subtitle"><?php echo get_field("footer_subtitle", get_page_by_path('about')->ID); ?></p>

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
  
          <a href="https://www.instagram.com/charlie_portfolio/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/charlotte-bunyan-00721b210/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href=<?php echo get_permalink(get_page_by_path('contact')->ID) ?>><i class="far fa-envelope"></i></a>
  
        </div>

      </div>

    </div>

  </footer>

  </body>
</html>