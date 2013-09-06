<?php
/*
Template Name: about
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<div class="about">
	<?php include("parts/shared/header.php"); ?>

	<div class="wrapper">
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
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>