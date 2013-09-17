<?php
/*
Template Name: media
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="wrapper media">
	<section class="standard-section">
		<h3>Media Contact</h3>
		<ul>
			<li>Anke Corbin</li>
			<li><a href="mailto:acorbin@splickit.com">acorbin@splickit.com</a></li>
			<li>760-707-8202</li>
			<li><a href="//twitter.com/ankec">@ankec</a></li>
		</ul>
	</section>
	<section class="standard-section">
		<h3>Brand Assets</h3>
		<?php
	    $args=array(
	      'category_name' => 'media-asset',
	      'post_type' => 'post',
	      'post_status' => 'publish',
	      'posts_per_page' => 100,
	      'order'	=> 'ASC'
	    );

	    $my_query = null;
	    $my_query = new WP_Query($args);

	    if( $my_query->have_posts() ) {
	      while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="media-item">
				<h4><?php echo get_the_title(); ?></h4>
				<p><?php echo get_the_content(); ?></p>
			</div>
	  <?php
	  	endwhile;
	  }

		wp_reset_query();  // Restore global post data stomped by the_post().
		?>
	</section>

	<section class="standard-section press">
		<h3>Recent Press Coverage</h3>
		<?php
	    $args=array(
	      'category_name' => 'media-press',
	      'post_type' => 'post',
	      'post_status' => 'publish',
	      'posts_per_page' => 100,
	      'order'	=> 'ASC'
	    );

	    $my_query = null;
	    $my_query = new WP_Query($args);

	    if( $my_query->have_posts() ) {
	      while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="media-item press-item">
				<a href="<?php the_permalink(); ?>">
					<div class="press-item-logo">
						<img src="<?php the_field('press_item_logo'); ?>" alt="Press item logo" />
					</div>
					<h4><?php echo get_the_title(); ?></h4>
				</a>
			</div>
	  <?php
	  	endwhile;
	  }

		wp_reset_query();  // Restore global post data stomped by the_post().
		?>
	</section>

</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>