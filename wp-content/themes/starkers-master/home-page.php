<?php
/*
Template Name: home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="main">
	<header>
		<div class="wrapper">
			<nav class="primary-nav">
				<h1 class="main-logo">
					<a href="/">
						<img src="<?php bloginfo('template_url'); ?>/images/main-logo.png" alt="Splick-It logo" />
					</a>
				</h1>
				<ul>
					<li class="primary-nav-item desktop-nav-item"><a href="">Merchant Services Program</a></li>
					<li class="primary-nav-item desktop-nav-item"><a href="">Distribution Network</a></li>
					<li class="primary-nav-item desktop-nav-item"><a href="">Clients</a></li>
					<li class="primary-nav-item mobile-nav-icon">
						<a href="" aria-hidden="true" data-icon="m"></a>
						<span class="screen-reader-text">Menu</span>
					</li>
					<li class="primary-nav-item request-info-nav-item"><a href="">Request Info</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="main-callout">
		<h2>Platform & Distribution Solutions for Merchant Orders, Payments, Loyalty, and Gifting.</h2>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>