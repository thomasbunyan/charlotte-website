<!DOCTYPE html>
<html>
  
  <head>

    <?php wp_head();?>

  </head>

  <body <?php body_class();?>>

    <header>

      <h1>Charlotte Bunyan</h1>
      <h2>Artist & Illustrator</h2>
    
      <!-- Make this better -->
      <nav id="nav">
        <?php
          wp_list_pages( array(
              'title_li' => ''
          ));
        ?>
        <!-- <a href="#">GALLERY</a>
        <a href="#">ABOUT</a>
        <a href="#">CONTACT</a> -->
      </nav>

    </header>
