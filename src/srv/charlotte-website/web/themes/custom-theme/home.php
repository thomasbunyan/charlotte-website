<?php
  $cat = get_query_var('category');
?>

<?php get_header();?>

<div class="front-page">

  <div class="gallery">

    <div class="header hide-scroll noselect">

      <a href=<?php echo get_site_url() . "?category=all"?>>
        <div class="header-item" <?php echo $cat == 'all' ? 'active' : ''; ?>>
          All
        </div>
      </a>

      <a href=<?php echo get_site_url()?> >
        <div class="header-item" <?php echo $cat == '' ? 'active' : ''; ?>>
          Featured
        </div>
      </a>
      

      <?php
        $categories = get_categories(array(
          'orderby'=>'name',
          'order'=>'ASC',
          'exclude'=>array(get_cat_ID('featured'))
        ));
        foreach($categories as $category):
          $cat_name = $category->name;
          $cat_slug = $category->slug;
          $url = get_site_url() . '?category=' . strtolower($cat_slug);
          $active = $cat == $cat_slug ? 'active' : '';
      ?>

          <a href=<?php echo $url ?>>
            <div class="header-item" <?php echo $active ?>>
              <?php echo $cat_name ?>
            </div>
          </a>

      <?php endforeach; ?>

    </div>

    <div class="body">

      <?php
        $cat = $cat == "" ? "featured" : $cat;
        $cat_obj = get_category_by_slug($cat);
        $cat_id = $cat_obj->cat_ID;
        if($cat == 'all' || $cat_id != 0) {
          $posts = get_posts(array(
            'numberposts' => -1,
            'category' => $cat_id
          ));

          if(!empty($posts)) {

            echo '<div class="gallery-wrapper">';

            foreach($posts as $index=>$post) {
              $img_src = get_field("image");
              $img_alt = "post_image_$index";
              $post_url = get_permalink($post->ID);

              echo "
                <div class='gallery-post'>
                  <a href='$post_url'>
                    <img src='$img_src' alt='$img_alt' loading=lazy />
                  </a>
                </div>
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