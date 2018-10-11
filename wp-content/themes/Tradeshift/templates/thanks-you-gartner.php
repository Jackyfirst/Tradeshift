 <?php
/*
Template Name: Thank You (Gartner)
*/
get_header(); ?>
<style type="text/css">
	h2{
		color: #1E1E1E !important;
		font-weight: 400 !important;
	}
	li {
		font-size: 18px;
	}
	main {
		min-height: 80vh;
		padding: 44px 22px 0;
	}
	.social-triggers img {
		width: 60px;
	}
	.stay-know {
		padding: 66px 0 44px;
	}
	#kaltura_player_1512159359 {
		padding-top: 33px;
	}
	.thank-you .stay-know h2{
		color: #20a0e9 !important;
	}
	@media (min-width: 768px) {
		p{
			line-height: 26px !important;
		}
		.main-content{
			margin-top: 20px;
			padding-left: 0;
			padding-right: 0;
		}
		.vidyard_player>span{
			display: inline-block !important;
		}
	}
	@media (max-width: 767px) {
		#kaltura_player_1512159359 {
			width: 100% !important;
    		height: 236px !important;
		}
	}
</style>
<!-- Main Content Starts -->
<main class="main-content general thank-you">
	<!-- Hero Section -->
	<div class="hero interest">
		<div class="container">
			<div class="row">
				<div class="contents">
					<!-- Grab the contents from the WP Admin CMS Page content field -->
					<?php
						if (have_posts()) :
						   while (have_posts()) :
						      the_post();
						         the_content();
						   endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="stay-know">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2>Stay in the know.</h2>
					<p> Follow us on social media to stay up to date on product developments, industry news, and exciting announcements.</p>
					<div class="social-triggers">
						<a href="https://facebook.com/Tradeshift" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-facebook.png" alt="Facebook" /></a>
						<a href="http://twitter.com/Tradeshift" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-twitter.png" alt="Twitter" /></a>
						<a href="http://google.com/+Tradeshift" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-gplus.png" alt="Google Plus" /></a>
						<a href="http://linkedin.com/company/tradeshift" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-linkedin.png" alt="LinkedIn" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- Twitter JS -->

<script>
	window.twttr = (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0],
	t = window.twttr || {};
	if (d.getElementById(id)) return t;
	js = d.createElement(s);
	js.id = id;
	js.src = "https://platform.twitter.com/widgets.js";
	fjs.parentNode.insertBefore(js, fjs);

	t._e = [];
	t.ready = function(f) {
	t._e.push(f);
	};

	return t;
	}(document, "script", "twitter-wjs"));
</script>
<?php get_footer(); ?>