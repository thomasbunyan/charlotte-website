<?php wp_footer();?>

  <footer class="noselect">

    <h1>These. Are. Words.</h1>

    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae lacinia ante. Donec eget interdum nulla, id rutrum lectus.</p>

    <div class="contact-button">
      <a href=<?php echo get_permalink(get_page_by_path('contact')->ID) ?>>Contact</a>
    </div>

    <div class="h-bline"></div>

    <div class="lower-area">

      <div class="container left">
        <h2>
          <a href=<?php echo get_permalink(get_page_by_path('home')->ID) ?>>Charlotte Bunyan</a>
        </h2>
      </div>

      <div class="container center"><p>© 2021. All rights reserved.</p></div>

      <div class="container right">

        <div class="socials">
  
          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" target="_blank"><i class="far fa-envelope"></i></a>
  
        </div>

      </div>

    </div>

  </footer>

  </body>
</html>