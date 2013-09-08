<?php
/*
Template Name: home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>
<div class="main">
	<?php include ('parts/shared/header.php'); ?>
	<div class="callout">
		<h2>Merchant Solutions Platform For Mobile/Online Ordering, Payment, Loyalty & Marketing<span>+ A Large Distribution Network</span></h2>
		<ul class="feature-callout">
			<li data-icon="p">Online<br>Ordering</li>
			<li data-icon="i" class="second-feature-callout">Tablet<br>Friendly</li>
			<li data-icon="f" class="third-feature-callout">Optimized<br>For Delicious</li>
		</ul>
	</div>
</div>
<section class="sub-section first-sub-section">
	<div class="sub-section-header">
		<div class="wrapper">
			<h2><?php the_field('sub-section1_header'); ?></h2>
			<a class="learn-more-button-desktop button" href="">Learn More</a>
			<a class="learn-more-button-mobile button" data-icon="+"></a>
			<span class="screen-reader-text">Learn More</span>
		</div>
	</div>
	<div class="sub-section-body">
		<div class="wrapper">
			<ul>
				<li class="sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section1_icon1'); ?>" alt="TV icon" />
					<h3><?php the_field('sub-section1_subhead1'); ?></h3>
					<p><?php the_field('sub-section1_body1'); ?></p>
				</li>
				<li class="sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section1_icon2'); ?>" alt="Computer icon" />
					<h3><?php the_field('sub-section1_subhead2'); ?></h3>
					<p><?php the_field('sub-section1_body2'); ?></p>
				</li>
				<li class="sub-section-item last-sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section1_icon3'); ?>" alt="Box icon" />
					<h3><?php the_field('sub-section1_subhead3'); ?></h3>
					<p><?php the_field('sub-section1_body3'); ?></p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="sub-section second-sub-section">
	<div class="sub-section-header">
		<div class="wrapper">
			<h2><?php the_field('sub-section2_header'); ?></h2>
			<a class="learn-more-button-desktop button" href="/merchant-solutions#<?php the_field('sub-section2_learn_more_link'); ?>">Learn More</a>
			<a class="learn-more-button-mobile button" data-icon="+" href=""></a>
			<span class="screen-reader-text">Learn More</span>
		</div>
	</div>
	<div class="sub-section-body">
		<div class="wrapper">
			<ul>
				<li class="sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section2_icon1'); ?>" alt="Ticket icon" />
					<h3><?php the_field('sub-section2_subhead1'); ?></h3>
					<p><?php the_field('sub-section2_body1'); ?></p>
				</li>
				<li class="sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section2_icon2'); ?>" alt="Headphones icon" />
					<h3><?php the_field('sub-section2_subhead2'); ?></h3>
					<p><?php the_field('sub-section2_body2'); ?></p>
				</li>
				<li class="sub-section-item last-sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section2_icon3'); ?>" alt="Smiley icon" />
					<h3><?php the_field('sub-section2_subhead3'); ?></h3>
					<p><?php the_field('sub-section2_body3'); ?></p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="sub-section third-sub-section">
	<div class="sub-section-header">
		<div class="wrapper">
			<h2><?php the_field('sub-section3_header'); ?></h2>
			<a class="learn-more-button-desktop button" href="">Learn More</a>
			<a class="learn-more-button-mobile button" data-icon="+"></a>
			<span class="screen-reader-text">Learn More</span>
		</div>
	</div>
	<div class="sub-section-body">
		<div class="wrapper">
			<ul>
				<li class="sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section3_icon1'); ?>" alt="Network icon" />
					<h3><?php the_field('sub-section3_subhead1'); ?></h3>
					<p><?php the_field('sub-section3_body1'); ?></p>
				</li>
				<li class="sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section3_icon2'); ?>" alt="Briefcase icon" />
					<h3><?php the_field('sub-section3_subhead2'); ?></h3>
					<p><?php the_field('sub-section3_body2'); ?></p>
				</li>
				<li class="sub-section-item last-sub-section-item">
					<img class="sub-section-icon" src="<?php the_field('sub-section3_icon3'); ?>" alt="Calendar icon" />
					<h3><?php the_field('sub-section3_subhead3'); ?></h3>
					<p><?php the_field('sub-section3_body3'); ?></p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="newsletter">
	<div id="mc_embed_signup" class="wrapper">
		<form action="http://splickit.us4.list-manage.com/subscribe/post?u=77f62922fe0fb7183173bf5f0&amp;id=7d14cb500c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div class="mc-field-group">
				<label for="mce-EMAIL">Sign up to receive our weekly newsletter on mobile&nbsp;commerce:</label>
				<div class="email-input">
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					<input type="submit" value="Go" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>
			</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>
		</form>
	</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>