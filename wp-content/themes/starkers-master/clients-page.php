<?php
/*
Template Name: clients
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<div class="clients">
	<?php include("parts/shared/header.php"); ?>

	<div class="wrapper">
		<ul id="client-list" class="grid-item-list">

		<?php
	    $args=array(
	      'category_name' => 'clients',
	      'post_type' => 'post',
	      'post_status' => 'publish',
	      'posts_per_page' => 100,
	      'order'	=> 'ASC'
	    );

	    $my_query = null;
	    $my_query = new WP_Query($args);

	    if( $my_query->have_posts() ) {
	      while ($my_query->have_posts()) : $my_query->the_post(); ?>


			<li class="grid-item">
				<div class="grid-item-inner">
					<h3><?php echo get_the_title(); ?></h3>
					<img class="grid-item-image" src="<?php the_field('client_icon_image'); ?>" alt="Client icon" />
					<ul class="grid-item-links">
						<li><a href="<?php the_field('apple_app_store_link'); ?>" class="button"><img src="<?php bloginfo('template_url'); ?>/images/apple-download.png" alt="Apple Download Icon" /></a></li>
						<li><a href="<?php the_field('google_play_link'); ?>" class="button"><img src="<?php bloginfo('template_url'); ?>/images/android-download.png" alt="Android Download Icon" /></a></li>
						<li><a href="<?php the_field('ssplick-it_link'); ?>" class="button order-button">Order Online</a></li>
					</ul>
					<p><?php echo get_the_content(); ?></p>
				</div>
			</li>

	  <?php
	  	endwhile;
	  }

		wp_reset_query();  // Restore global post data stomped by the_post().
		?>

		</ul>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>