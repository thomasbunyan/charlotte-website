<!DOCTYPE html>
<html>
  
  <head>

    <?php wp_head();?>

  </head>

  <body <?php body_class();?>>

    <header>
      <nav id="nav">
        <?php
          wp_list_pages( array(
              'title_li' => ''
          ));
        ?>
      </nav>

    </header>
