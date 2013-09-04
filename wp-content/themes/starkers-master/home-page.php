<?php
/*
Template Name: home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<div class="main">
	<?php include("parts/shared/header.php"); ?>
	<div class="callout">
		<h2>Platform & Distribution Solutions for Merchant Orders, Payments, Loyalty, and Gifting.</h2>
		<ul class="feature-callout">
			<li>Online<br>Ordering</li>
			<li class="second-feature-callout">Tablet<br>Friendly</li>
			<li class="third-feature-callout">Optimized<br>For Delicious</li>
		</ul>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>