<!-- Static page -->

<?php get_header();?>

  <div class="page-about">

    <div class="top-area">
    
      <div class="image">
        <img src=<?php echo get_field("banner_image"); ?> />
      </div>

      <div class="right">
        <h1><?php echo get_field("title"); ?></h1>
  
        <p><?php echo get_field("tagline"); ?></p>
  
        <a href=<?php echo get_site_url() ?>>
          <div class="work-button">
            MY WORK
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

        <div class="point">

          <?php if ($index % 2 == 1): ?>

            <img src=<?php echo $point["image"]; ?> alt="pic">
            <div class="spacer"></div>
            <div>
              <h3><?php echo $point["title"]; ?></h3>
              <p><?php echo $point["message"]; ?></p>
            </div>

          <?php else: ?>

            <div>
              <h3><?php echo $point["title"]; ?></h3>
              <p><?php echo $point["message"]; ?></p>
            </div>
            <div class="spacer"></div>
            <img src=<?php echo $point["image"]; ?> alt="pic">

          <?php endif; ?>

        </div>

      <?php
          $index++;
        endwhile;
      ?>

    </div>
  
  </div>

<?php get_footer();?>