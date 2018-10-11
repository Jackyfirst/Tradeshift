 <?php
/*
Template Name: General - Terms of Service - Naked
*/
get_header('no-headerbar'); ?>
		<!-- Main Content Starts -->
		<main class="main-content general tos-page" style="margin-top: 0">
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
<?php get_footer('no-footerbar'); ?>