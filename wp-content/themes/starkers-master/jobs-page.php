<?php
/*
Template Name: jobs
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="jobs">
	<div class="wrapper">
			<div class="section-intro standard-section">
				<h3>Splick.it Jobs</h3>
				<p>
					<?php
						$my_id = 135;
						$post_id_135 = get_post($my_id);
						$content = $post_id_135->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
					?>
				</p>
			</div>

			<div class="standard-section">
			<h3>Job Descriptions</h3>
			<?php
		    $args=array(
		      'category_name' => 'jobs',
		      'post_type' => 'post',
		      'post_status' => 'publish',
		      'posts_per_page' => 100,
		      'order'	=> 'ASC'
		    );

		    $my_query = null;
		    $my_query = new WP_Query($args);

		    if( $my_query->have_posts() ) {
		      while ($my_query->have_posts()) : $my_query->the_post(); ?>

				<div class="job-item" id="<?php global $post; echo $post->post_name; ?>">
					<h4><?php echo get_the_title(); ?></h4>
					<p><?php echo get_the_content(); ?></p>
				</div>

			  <?php
			  	endwhile;
			  }

				wp_reset_query();  // Restore global post data stomped by the_post().
				?>

			</div>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>