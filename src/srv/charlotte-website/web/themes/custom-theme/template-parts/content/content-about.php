<!-- Static page -->

<?php get_header();?>

  <div class="page-about">

    <div class="top-area">
    
      <div class="image">
        <img src="https://i.picsum.photos/id/912/800/530.jpg?hmac=hMlnsZ9BV3tLtQj2PbqjledK9NaN6w3nMIxpxH9XYbQ" />
      </div>

      <div class="right">
        <h1><?php the_field("title"); ?></h1>
  
        <p><?php the_field("tagline"); ?></p>
  
        <a href=<?php echo get_site_url() ?>>
          <div class="work-button">
            MY WORK
          </div>
        </a>
      </div>

    </div>

    <div class="main-area">
      
    </div>
  
  </div>

<?php get_footer();?>