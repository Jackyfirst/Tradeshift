<?php
/*
Template Name: Single Resources
*/
get_header();
?>

<?php while (have_posts()) : the_post(); ?>
	<?php
	$video_link = get_post_meta(get_the_ID(),'video_link',true);
	$slides_link = get_post_meta(get_the_ID(),'slides_link',true);
	$mkto_id = get_post_meta(get_the_ID(),'mkt_form',true);
	$main_post_categories = wp_get_object_terms(get_the_ID(), 'resource_media');
	$main_post_category_ids = wp_list_pluck($main_post_categories, 'term_id');
	?>

	<!-- Main Content Starts -->
	<style type="text/css">
	.main-content.resources-detail .cta-form .mktoLogicalField {
		width: 100% !important;
	}
	.mktoForm .mktoCheckboxList > label {
		line-height: 1.5em;
	}
	</style>

	<main class="main-content resources-detail single-resource_template">

		<div class="resource-content-cta-form-related">
			<div class="container">
				<div class="row">

					<div class="resource-content">
						<div class="back-to-resource hidden-xs">
							<a href="<?php if (ICL_LANGUAGE_CODE != 'en') echo '/' . ICL_LANGUAGE_CODE; ?>/resources">
								<?php _e("Back to resource center", 'Tradeshift'); ?>
							</a>
						</div>
						<?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>

						<?php if ($video_link) : ?>
							<h3><?php _e("Video", "Go"); ?></h3>
							<div class="video embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item" src="//play.vidyard.com/<?php echo $video_link; ?>.html?v=3.1.1&amp;type=inline" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
							</div>
						<?php endif; ?>
						<?php if ($slides_link) : ?>
							<h3><?php _e("Slides", "Go"); ?></h3>
							<div class="slideshow embed-responsive embed-responsive-4by3">
								<iframe src="http://www.slideshare.net/slideshow/embed_code/<?php echo $slides_link; ?>?rel=0" scrolling="no"  allowfullscreen webkitallowfullscreen mozallowfullscreen ></iframe>
							</div>
						<?php endif; ?>
					</div>
					<!-- Start right column contents - lead gen form and related materials -->
					<div class="cta-form-related-material">
						<!-- Lead Gen Form -->
						<?php if ($mkto_id) : ?>
							<div class="cta-form">
								<h3><?php _e("Get this resource", "Tradeshift"); ?></h3>
								<form id="mktoForm_<?php echo $mkto_id;?>"></form>
							</div>
						<?php endif; ?>

						<!-- Related Materials -->
						<?php
						$related_resources_query = new WP_Query(array(
							'post_type'			=>	'resource',
							'posts_per_page'	=>	'3',
							'orderby'			=>	'rand',
							'post__not_in'		=>	array(get_the_ID()),
							'tax_query' 		=> array(
								array(
									'taxonomy' => 'resource_media',
									'terms'    => $main_post_category_ids,
								),
							),
						));
						?>
						<div class="related-material">
							<h3><?php _e("Related Materials", "Tradeshift"); ?></h3>
							<?php while ($related_resources_query->have_posts()) : $related_resources_query->the_post(); ?>
								<?php
								$categories = wp_get_object_terms(get_the_ID(), 'resource_media');
								$first_category = isset($categories[0]) ? $categories[0] : false;
								?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?></a>
								<div class="meta">
									<?php if ($first_category) : ?>
										<span class="media-type"><?php echo $first_category->name; ?></span>
									<?php endif; ?>
									<span class="date-posted"><?php the_time('M. j, Y') ?></span>
								</div>
								<h4><?php the_title(); ?> <a href="<?php the_permalink(); ?>"><?php _e("Learn more", 'Tradeshift'); ?></a></h4>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>

<?php endwhile; ?>

<?php get_footer(); ?>
