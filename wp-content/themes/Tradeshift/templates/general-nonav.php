<?php
/*
* Template Name: General No Nav No Footer
*/
get_header('no-nav'); ?>

	<main class="main-content general-nonav">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php the_content(); ?>
									<br class="clear">
								</div>
							<?php endwhile; ?>
							<?php else: ?>
								<div>
									<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
								</div>
							<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</main>

<!-- /wrapper -->
<?php get_footer('no-nav'); ?>