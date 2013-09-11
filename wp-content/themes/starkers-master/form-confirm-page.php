<?php
/*
Template Name: form confirm
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="form-confirm">
	<div class="wrapper">
		<div class="standard-section">
			<p>
				<?php
					$my_id = 195;
					$post_id_195 = get_post($my_id);
					$content = $post_id_195->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
				?>
			</p>
		</div>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>