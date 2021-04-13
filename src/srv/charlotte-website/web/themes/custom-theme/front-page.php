<?php get_header();?>

<div class="break-line"></div>

<div class="front-page">

	<div class="title">
		<h1>Charlotte<h1>
		<h1>Bunyan<h1>
	</div>

	<div class="pictures">
		<div class="main-pic one"></div>
		<div class="break-line"></div>
		<div class="main-pic two"></div>
	</div>

	<div class="break-line"></div>

	<div class="subtext">
		<h3>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</h3>
	</div>

	<div class="break-line"></div>

	<div>
		<?php if (have_posts()) : while(have_posts()) : the_post();?>
			<?php the_content();?>
		<?php endwhile; endif;?>
	</div>

	<div class="break-line"></div>

	<div class="pictures">
		<div class="main-pic three"></div>
	</div>

</div>

<div class="static-wrapper">

	<div class="static-images">
	
			<?php 
				$fields = get_fields();
				if( $fields ): 
			?>
	
					<?php foreach( $fields as $name => $value ): ?>
	
							<!-- <img id=<?php echo $name; ?> src=<?php echo $value; ?> alt=<?php echo $name; ?> /> -->
							<div class="static-image one"></div>
							<div class="static-image two"></div>
							<div class="static-image three"></div>
							<div class="static-image four"></div>
							<div class="static-image five"></div>
							<div class="static-image six"></div>
							<div class="static-image seven"></div>
							<div class="static-image eight"></div>
	
					<?php endforeach; ?>
	
			<?php endif; ?>
	
		</div>
</div>

<?php get_footer();?>