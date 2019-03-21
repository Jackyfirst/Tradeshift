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
						<!--<div class="back-to-resource hidden-xs">
							<a href="<?php if (ICL_LANGUAGE_CODE != 'en') echo '/' . ICL_LANGUAGE_CODE; ?>/resources">
								<?php _e("Back to resource center", 'Tradeshift'); ?>
							</a>
						</div>-->
						<?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
						<img width="650" height="350" src="https://tradeshiftchina.cn/wp-content/uploads/2019/03/game-plan-2019-topbanner.jpg" class="img-responsive wp-post-image" alt="" srcset="https://tradeshiftchina.cn/wp-content/uploads/2019/03/game-plan-2019-topbanner.jpg 650w, https://tradeshiftchina.cn/wp-content/uploads/2019/03/game-plan-2019-topbanner-250x135.jpg 250w" sizes="(max-width: 650px) 100vw, 650px" />
						<h2><?php the_title(); ?></h2>
						<p><span style="font-weight: 400;">如今，科技发展已经能够让应付账款部门成为公司的战略数字中心，但大多数公司却依然在手动接收发票。这本电子书将指导您数字化应付账款部门，让它真正成为您期望中的金融信息中心。电子书中来自应付账款专业人员的真知灼见，将帮助您摆脱疲于应付各种文件的现状，迎接一个以数字化连接的2019。</span></p>
						<p><span style="font-weight: 400;">在这本电子书中，您将获得以下专业建议：</span></p>
						<ul>
 							<li style="font-weight: 400;"><span style="font-weight: 400;">有效处理年终事务</span></li>
 							<li style="font-weight: 400;"><span style="font-weight: 400;">制定技术路线图</span></li>
 							<li style="font-weight: 400;"><span style="font-weight: 400;">化解传统财务部门的冗余工作</span></li>
 							<li style="font-weight: 400;"><span style="font-weight: 400;">让您的整个企业保持数字化同步</span></li>
 							<li style="font-weight: 400;"><span style="font-weight: 400;">使您的部门和事业与时俱进</span></li>
						</ul>
						<p><span style="font-weight: 400;">下载这本电子书，获得能够让您在2019蓬勃发展的制胜战术。</span></p>
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
							<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
							<div class="cta-form">
								<h3><?php _e("Get this resource", "Tradeshift"); ?></h3>

								<form id="mktoForm_5421"></form>
								<script type="text/javascript">
						        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 5421, function(form){
						           form.vals({"Marketing_Resource_Name__c":"Game Plan 2019"});
						    	});
								</script>
							</div>


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
						<!--<div class="related-material">
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
						</div>-->
					</div>
				</div>
			</div>
		</div>

	</main>

<?php endwhile; ?>

<?php get_footer(); ?>
