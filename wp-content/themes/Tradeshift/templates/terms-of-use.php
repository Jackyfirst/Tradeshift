 <?php
/*
Template Name: General - Terms of Use
*/
get_header(); ?>
		<!-- Main Content Starts -->
		<main class="main-content general tou-page">
			<div class="container">
				<div class="row">
					<div class="contents">
						<article>
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</article>
					</div>
				</div>
			</div>
		</main>
<?php get_footer(); ?>