<?php
/*
Template Name: about
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<div class="about">
	<?php include("parts/shared/header.php"); ?>

	<div class="wrapper">
<!--
		<header class="sub-nav">
			<nav>
				<ul>
					<li><a class="button" href="/about/">About</a></li>
					<li><a class="button" href="/media/">Media</a></li>
					<li><a class="button" href="/jobs/">Jobs</a></li>
					<li><a class="button" href="/blog/">Blog</a></li>
				</ul>
			</nav>
		</header>
-->

		<div class="about-intro standard-section">
			<h3>The Splick.it Story</h3>
			<p>
				<?php
					$my_id = 32;
					$post_id_32 = get_post($my_id);
					$content = $post_id_32->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
				?>
			</p>
		</div>

		<ul class="grid-item-list">

		<?php
	    $args=array(
	      'category_name' => 'team',
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
					<h4><?php the_field('team_member_title'); ?></h4>
					<img class="grid-item-image" src="<?php the_field('team_member_photo'); ?>" alt="Team member image" />
					<ul class="grid-item-links">
						<li><a href="<?php the_field('linkedin_url'); ?>" class="button">LinkedIn</a></li>
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