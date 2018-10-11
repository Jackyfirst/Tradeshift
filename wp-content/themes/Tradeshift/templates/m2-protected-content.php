 <?php
/*
Template Name: WEC 2016 - Login Page
*/
get_header('wec2016'); ?>

		<!-- Main Content Starts -->
		<main class="main-content wec2016-login">
			<!-- Hero Section -->
			<div class="hero intro">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h1>Tradeshift Sactuary at Davos</h1>
							<?php if (have_posts()) : 
								while (have_posts()) : 
									the_post();
										the_content();
   								endwhile;
							endif; ?>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php get_footer('wec2016'); ?>