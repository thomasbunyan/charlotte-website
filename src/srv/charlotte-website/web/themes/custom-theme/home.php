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
          
          // Testing
          // $posts = array_fill(0, 10, "");

          if(!empty($posts)) {

            echo '<div class="gallery-wrapper">';

            foreach($posts as $index=>$post) {
              $img_src = 'https://picsum.photos/500/' . rand(200, 1000);
              $img_alt = "post_image_$index";
              $post_url = get_permalink($post->ID);

              echo "
                <a href='$post_url'>
                  <div class='gallery-post'>
                    <img src='$img_src' alt='$img_alt'/>
                  </div>
                </a>
              ";

            }

            echo '</div>';

          } else {
            get_template_part('template-parts/gallery/gallery-empty');
          }
        } elseif ($cat_id == 0) {
          get_template_part('template-parts/gallery/gallery-empty');
        }

      ?>

    </div>

  </div>
	
</div>

<?php get_footer();?>