<?php
/*
Template Name: merchant solutions
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="merchant-solutions">
	<div class="wrapper">
		<?php
	    $args=array(
	      'category__in' => array(4,5),
	      'post_type' => 'post',
	      'post_status' => 'publish',
	      'posts_per_page' => 100,
	      'order'	=> 'ASC'
	    );

	    $my_query = null;
	    $my_query = new WP_Query($args);

	    if( $my_query->have_posts() ) {
	      while ($my_query->have_posts()) : $my_query->the_post(); ?>

			<section id="<?php global $post; echo $post->post_name; ?>" class="standard-section <?php the_category_unlinked(' '); ?>">
				<h3><?php echo get_the_title(); ?></h3>
				<p><?php echo get_the_content(); ?></p>
				<img src="<?php the_field('section_image'); ?>" alt="Merhant solution section image" />
			</section>

	  <?php
	  	endwhile;
	  }

		wp_reset_query();  // Restore global post data stomped by the_post().
		?>

	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>