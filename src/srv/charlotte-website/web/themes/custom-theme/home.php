<?php
  $cat = get_query_var('category');
?>

<?php get_header();?>

<div class="front-page">

  <div class="gallery">

    <div class="header hide-scroll">

      <a href=<?php echo get_site_url() . "?category=all"?>>
        <div class="header-item noselect" <?php echo $cat == 'all' ? 'active' : ''; ?>>
          All
        </div>
      </a>

      <a href=<?php echo get_site_url()?> >
        <div class="header-item noselect" <?php echo $cat == '' ? 'active' : ''; ?>>
          Featured
        </div>
      </a>

      <?php
        $categories = get_categories();
        foreach($categories as $category) {
          echo 
          '<a href=\'' . get_site_url() . '?category=' . strtolower($category->name) . '\'>
            <div class="header-item noselect" '. ($cat == strtolower($category->name) ? 'active' : '') . '>'
              . $category->name .
            '</div>
          </a>';
        }
        
      ?>

    </div>

    <div class="body">

      <?php
        $cat_id = get_cat_ID($cat);
        if($cat == 'all' || $cat_id != 0) {
          $posts = get_posts(array(
            'category' => $cat_id
          ));
          foreach($posts as $post) {
            echo $post->post_title;
          }
        } elseif ($cat_id == 0) {
          // Redirect to home.
        }
      ?>

    </div>

  </div>
	
</div>

<?php get_footer();?>