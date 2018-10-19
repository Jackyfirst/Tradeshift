 <?php
/*
Template Name: General - Custom 404
*/
get_header('main-only-slide-out'); ?>		
	<!-- Main Content Starts -->
		<main class="main-content general custom-404">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1><?php _e("Page Not Found", "Tradeshift") ?></h1>
						<p><?php _e("Oh nuts! Somehow the page you were looking for isn’t here. Maybe it’s someplace else, maybe it moved, or maybe it never existed.<br />We’re not saying anybody made a mistake— these things just happen sometimes.", "Tradeshift") ?></p>
						<br /><br />
						<p class="white-space visible-md">&nbsp;<br />&nbsp;<br /></p>
						<p><strong><?php _e("A COUPLE OF PLACES WE CAN GO FROM HERE ARE:</strong><br />
							Back to our <a href=\"/\">Home page »</a><br />
							Webinars, industry reports, and upcoming events on the <a href=\"/resources\">Resources page »</a><br />
							Read about the latest news and updates on the <a href=\"http://blog.tradeshift.com\" target=\"_blank\">Tradeshift blog »</a>", "Tradeshift"); ?>
						</p>
					</div>
				</div>
			</div>
		</main>
<?php get_footer(); ?>