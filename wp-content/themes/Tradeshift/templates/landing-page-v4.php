<?php
/* Template Name: Landing Pages: PPC - Coupa Only
*/
get_header('lpv4'); ?>
	<main class="main-content landing-pages lpv4">
		<?php global $post; ?>
		<!-- Assign variables from CPT fields and default WP field values |  Use MetaBox plugin rwmb_meta -->
		<?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			$campaign_subtitle_hero = rwmb_meta( 'camp_subtitle_1' );
			$campaign_video_code = rwmb_meta( 'camp_vid_1' );
			$campaign_secondary_content = rwmb_meta( 'camp_content_2' );
			$campaign_cta_hero = rwmb_meta( 'camp_cta_1' );
			$campaign_cta_url_hero = rwmb_meta( 'camp_cta_url_1' );
			$campaign_marketo_id = rwmb_meta( 'camp_mkt_1' );
			$campaign_supplementary_image = rwmb_meta( 'camp_mkt_img_1', 'type=image&size=' , $postId );
		?>
		<!-- Hero Section -->
		<div class="hero"  style="background-image: url(<?php echo $src[0]; ?> ); background-position: center bottom" >
			<a name="fillForm" id="fillForm"> </a>
			<div class="container">
				<div class="row cta">
					<?php if (is_mobile()): ?>
						<div class="intro-text-cta">
							<h1><?php the_title(); ?></h1>
							<h3><?php echo $campaign_subtitle_hero; ?></h3>
						</div>
					<?php elseif (is_tablet()): ?>
						<div class="intro-text-cta">
							<h1><?php the_title(); ?></h1>
							<h3><?php echo $campaign_subtitle_hero; ?></h3>
						</div>
					<?php else: ?>
						<div class="intro-text-cta">
							<h1><?php the_title(); ?></h1>
							<h3><?php echo $campaign_subtitle_hero; ?></h3>
						</div>
					<?php endif; ?>
				</div>
				
			</div>
		</div>

		<div class="value-proposition">
			<div class="container">
				<div class="row">
					<div class="contents">
						<?php if (is_mobile()): ?>
						<img style="padding: 22px 0" src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/counter.gif" />
						<?php else: ?>
						<center><video style="padding: 22px 0" class="counter-video" id="counterVideo" autobuffer autoplay loop poster="http://tradeshift.com/wp-content/themes/Tradeshift/img/misc/transparent.png">
						<source src="http://tradeshift.com/wp-content/themes/Tradeshift/videos/counter_256.mp4" type="video/mp4" />
						<source src="http://tradeshift.com/wp-content/themes/Tradeshift/counter_256.webm" type="video/webm" />
						</video></center>
						<?php endif; ?>	
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<!-- <?php edit_post_link(); ?> -->
						<?php endwhile; ?>
						<?php else: ?>
								<h3><?php _e( 'Sorry, nothing to display.', 'Tradeshift-lang' ); ?></h3>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<hr  class="dash" />
		<a id="download-resource" name="download-resource"> </a>
		<div class="testimonials">
			<div class="container">
				<div class="row">
					<div class="contents">
						<?php echo $campaign_secondary_content; ?>
					</div>
				</div>
			</div>
		</div>
		<hr  class="dash" />
		<!-- end Content area #2 -->
		<div class="fill-out-form">
			<div class="container">
				<div class="row">
					<h2><?php if ( $campaign_cta_hero !== '' ) {
							echo $campaign_cta_hero;
						} else { ?>
							Download your report today.
						<?php } ?></h2>
						<p class="lead" style="text-align: center; padding: 0 30px;">Sign up for a demo and ask as many questions as you want.</p>
				</div>
				<?php if (is_mobile()): ?>
				<div class="cta-form">
					<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
					<form id="mktoForm_<?php echo $campaign_marketo_id; ?>"></form>
					<script type="text/javascript">
						// <![CDATA[
						MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?php echo $campaign_marketo_id; ?>);
						// ]]>
					</script>
				</div>
				<?php else: ?>
				<div class="cta-form">
					<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
					<form id="mktoForm_<?php echo $campaign_marketo_id; ?>"></form>
					<script type="text/javascript">
						// <![CDATA[
						MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?php echo $campaign_marketo_id; ?>);
						// ]]>
					</script>
				</div>
				
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- Modal View of Marketo Form -->
	</main>


<?php get_footer('lpv4'); ?>
