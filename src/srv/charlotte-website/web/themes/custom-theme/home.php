<!-- Posts page -->

<?php
  function cat_list($categories){
    $val=array_map(function($x) { 
      return $x->slug;
    }, $categories);
    return implode(',', $val);
  }
?>

<?php get_header();?>

  <div class="break-line"></div>

	<div class='gallery-page'>

	  <div class="title">
      <h1>
        Gallery
      </h1>
    </div>

    <div class="break-line"></div>
    
    <div class='gallery'>
  
      <div class='gallery-nav-wrapper'>
        <div class='gallery-nav hide-scroll'>
        
          <?php
            $categories = get_categories();
            echo '<div class=gallery-cat-button data-category=all active>All</div>';
            foreach($categories as $category) {
              echo '<div class=gallery-cat-button data-category=' . $category->slug . '>'
                . $category->name
                . '</div>';
              
            }
          ?>
  
    
        </div>
        
        <div class="more-arrow">
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </div>
  
      <div class='gallery-body'>
        
        <?php if (have_posts()) : while ( have_posts() ) : the_post();  ?>
  
          <div class='post' categories=<?php echo cat_list(get_the_category()); ?>>
            
            <a href=<?php the_permalink(); ?> >
            
              <img src=<?php the_field('image'); ?> />
          
            </a>
  
          </div>

          <!-- Can remove the below -->
          <div class='post' categories=<?php echo cat_list(get_the_category()); ?>>
            <a href=<?php the_permalink(); ?> >
              <img src=<?php the_field('image'); ?> />
            </a>
          </div>
          <div class='post' categories=<?php echo cat_list(get_the_category()); ?>>
            <a href=<?php the_permalink(); ?> >
              <img src=<?php the_field('image'); ?> />
            </a>
          </div>
          <div class='post' categories=<?php echo cat_list(get_the_category()); ?>>
            <a href=<?php the_permalink(); ?> >
              <img src=<?php the_field('image'); ?> />
            </a>
          </div>
          <!--  -->
  
        <?php endwhile; endif;?>
      
      </div>

    </div>

	</div>

<?php get_footer();?>
