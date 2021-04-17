<!DOCTYPE html>
<html>
  
  <head>

    <?php wp_head();?>

  </head>

  <body <?php body_class();?>>

    <header class="noselect">

      <a href=<?php echo get_site_url() ?> >
        <h1>Charlotte Bunyan</h1>
        <h2>Artist & Illustrator</h2>
      </a>
    
      <nav id="nav">
        <?php
          $pages = get_pages(array(
            'sort_order' => 'DESC',
          ));

          echo "<a href=" . get_site_url() . ">HOME</a>";

          foreach($pages as $page) {
            echo '<a href=' . get_page_link(($page->ID)) . '>' . strtoupper($page->post_title) . '</a>';
          }
        ?>
      </nav>

    </header>
