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

<section class="sub-section first-sub-section">
	<div class="sub-section-header">
		<div class="wrapper">
			<h2>Custom Apps</h2>
			<a class="learn-more-button" href="">Learn More</a>
		</div>
	</div>
	<div class="sub-section-body">
		<ul>
			<li>
				<img src="" alt="" />
				<h3>Easy To Setup Your Brand</h3>
				<p>Our robust & scalable platform makes it fast & easy to set up your branded app whether you have 1 store or 1000’s. It’s all about you!</p>
			</li>
			<li>
				<img src="" alt="" />
				<h3>Industry Leading Technology</h3>
				<p>Your website and apps are designed and built by award-winning team of technologists and will always be fresh, updated and mobile compatible.</p>
			</li>
			<li>
				<img src="" alt="" />
				<h3>Multiple Delivery Options</h3>
				<p>One size does not fit all. Splick-it lets you receive orders and data the way that works best for you business via POS, Fax, Printer, Tablet, Phone.</p>
			</li>
		</ul>
	</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>