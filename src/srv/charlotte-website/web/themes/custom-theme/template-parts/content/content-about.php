<!-- Static page -->

<?php get_header();?>

  <div class="page-about">

    <div class="top-area">
    
      <div class="image" data-aos="fade-right">
        <img src=<?php echo get_field("banner_image"); ?> />
      </div>

      <div class="right" data-aos="fade-left">
        <h1><?php echo get_field("title"); ?></h1>
  
        <p><?php echo get_field("tagline"); ?></p>
  
        <a href=<?php echo get_site_url() ?>>
          <div class="work-button">
            MY WORK 
            <i class="fas fa-arrow-right"></i>
          </div>
        </a>
      </div>

    </div>
    
    <div class="main-area">

      <?php
        $index = 1;
        while (get_field("point_$index") != null): 
          $point = get_field("point_$index");
      ?>


      <?php if ($index % 2 == 1): ?>
        <div class="point" data-aos="fade-right">

          <img src=<?php echo $point["image"]; ?> alt="pic">
          <div class="spacer"></div>
          <div>
            <h3><?php echo $point["title"]; ?></h3>
            <p><?php echo $point["message"]; ?></p>
          </div>

        </div>

      <?php else: ?>

        <div class="point" data-aos="fade-left">

              <div>
                <h3><?php echo $point["title"]; ?></h3>
                <p><?php echo $point["message"]; ?></p>
              </div>
              <div class="spacer"></div>
              <img src=<?php echo $point["image"]; ?> alt="pic">

        </div>
      <?php endif; ?>


      <?php
          $index++;
        endwhile;
      ?>

    </div>
  
  </div>

<?php get_footer();?>