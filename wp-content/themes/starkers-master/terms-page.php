<?php
/*
Template Name: terms
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<?php include("parts/shared/header.php"); ?>

<div class="wrapper">
	<div class="terms standard-section">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>