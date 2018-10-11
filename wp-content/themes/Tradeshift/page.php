<?php get_header(); ?>

<main class="container main-content">

    <h1><?php the_title(); ?></h1>

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

</main>

<?php get_footer(); ?>
