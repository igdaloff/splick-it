<?php
/*
Template Name: blog
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="blog">
	<div class="wrapper">
	<?php
global $more;
$more = 0;
?>
		<?php
	    $args=array(
	      'category_name' => 'blog',
	      'post_type' => 'post',
	      'post_status' => 'publish',
	      'posts_per_page' => 100,
	      'order'	=> 'ASC'
	    );

	    $my_query = null;
	    $my_query = new WP_Query($args);

	    if( $my_query->have_posts() ) {
	      while ($my_query->have_posts()) : $my_query->the_post(); ?>

			<article class="standard-section blog-post">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time('F j, Y'); ?></time>
				<?php the_excerpt(); ?><?php array_push($words, ' ... <a href="'. get_permalink() . '">READ MORE</a>');?>
			</article>

	  <?php
	  	endwhile;
	  }

		wp_reset_query();  // Restore global post data stomped by the_post().
		?>

	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>