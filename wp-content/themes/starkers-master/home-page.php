<?php
/*
Template Name: home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="main">
	<header>
		<h1>
			<a href="/">Splick-It</a>
		</h1>

		<nav class="primary-nav">
			<ul>
				<li><a href="">Merchant Services Program</a></li>
				<li><a href="">Distribution Network</a></li>
				<li><a href="">Clients</a></li>
			</ul>
		</nav>

		<nav class="secondary-nav">
			<ul>
				<li><a href="">Request Info</a></li>
			</ul>
		</nav>
	</header>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>