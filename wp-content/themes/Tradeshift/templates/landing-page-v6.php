<?php
/* Template Name: Landing Pages: PPC v6
*/
get_header('lpv3'); ?>
	<main class="main-content landing-pages lpv3">
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
		<div class="hero"  style="background-image: url(<?php echo $src[0]; ?> ); max-height: 450px;" >
			<a name="fillForm" id="fillForm"> </a>
			<div class="container">
				<div class="row cta">
					<?php if (is_mobile()): ?>
						<div class="intro-text-cta">
							<h1><?php the_title(); ?></h1>
							<h3><?php echo $campaign_subtitle_hero; ?></h3>
							<!-- CTA WATCH VIDEO: Watch Video Button Shows Up if there is content on the field | TODO: Sizing of modal  -->
							<?php if ( $campaign_video_code !== '' ) { ?>
									<button onclick="ga('send', 'event', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (Video Btn)', {nonInteraction: false});" type="button" class="btn btn-video btn-secondary-cta" data-toggle="modal" data-target="#lp-video"><i class="fa fa-play"> </i> &nbsp; Watch Video</button>
									<!-- CTA PRIMARY NEXT: Show Primary CTA (CTA #1) next to Watch Video Button -->
									<?php if ( $campaign_cta_hero && $campaign_cta_url_hero !== '' ) { ?>
										<button class="btn btn-primary-cta" onclick="ga('send', 'event', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (CTA)', {nonInteraction: false});" data-toggle="modal" data-target="#mktoModal"><?php echo $campaign_cta_hero; ?></button>
										<?php } else { ?>
									<?php } ?>
									<!-- CTA PRIMARY NEXT END -->
								<?php } else { ?>
									<!-- CTA ALONE: Show this Primary CTA (CTA #1) by itself because the CTA Video field is empty -->
									<?php if ( $campaign_cta_hero && $campaign_cta_url_hero !== '' ) { ?>
										<button class="btn btn-primary-cta" onclick="ga('send', 'event', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (CTA)', {nonInteraction: false});" data-toggle="modal" data-target="#mktoModal"><?php echo $campaign_cta_hero; ?></button>
										<?php } else { ?>
									<?php } ?>
									<!-- CTA ALONE END -->
							<?php } ?>
							<!-- CTA WATCH VIDEO LOOP END -->
						</div>
					<?php elseif (is_tablet()): ?>
						<div class="intro-text-cta">
							<h1 ><?php the_title(); ?></h1>
							<h3><?php echo $campaign_subtitle_hero; ?></h3>
							<!-- CTA WATCH VIDEO: Watch Video Button Shows Up if there is content on the field | TODO: Sizing of modal  -->
							<?php if ( $campaign_video_code !== '' ) { ?>
									<button onclick="ga('send', 'event', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (Video Btn)', {nonInteraction: false});" type="button" class="btn btn-video btn-secondary-cta" data-toggle="modal" data-target="#lp-video"><i class="fa fa-play"> </i> &nbsp; Watch Video</button>
									<!-- CTA PRIMARY NEXT: Show Primary CTA (CTA #1) next to Watch Video Button -->
									<?php if ( $campaign_cta_hero && $campaign_cta_url_hero !== '' ) { ?>
										<button class="btn btn-primary-cta" onclick="ga('send', 'event', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (CTA)', {nonInteraction: false});" data-toggle="modal" data-target="#mktoModal"><?php echo $campaign_cta_hero; ?></button>
										<?php } else { ?>
									<?php } ?>
									<!-- CTA PRIMARY NEXT END -->
								<?php } else { ?>
									<!-- CTA ALONE: Show this Primary CTA (CTA #1) by itself because the CTA Video field is empty -->
									<?php if ( $campaign_cta_hero && $campaign_cta_url_hero !== '' ) { ?>
										<button class="btn btn-primary-cta" onclick="ga('send', 'event', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (CTA)', {nonInteraction: false});" data-toggle="modal" data-target="#mktoModal"><?php echo $campaign_cta_hero; ?></button>
										<?php } else { ?>
									<?php } ?>
									<!-- CTA ALONE END -->
							<?php } ?>
							<!-- CTA WATCH VIDEO LOOP END -->
						</div>
					<?php else: ?>
						<div class="intro-text-cta">
							<h1 style="font-size: 40px; line-height:44px;" ><?php the_title(); ?></h1><br/>
							<h3><?php echo $campaign_subtitle_hero; ?></h3>
							<!-- CTA WATCH VIDEO: Watch Video Button Shows Up if there is content on the field | TODO: Sizing of modal -->
							<?php if ( $campaign_video_code !== '' ) { ?>
								<button onclick="ga('send', 'event', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (Video Btn)', {nonInteraction: false});" type="button" class="btn btn-video btn-secondary-cta" data-toggle="modal" data-target="#lp-video"><i class="fa fa-play"> </i> &nbsp; Watch Video</button>
							<?php } ?>
							<!-- CTA WATCH VIDEO LOOP END -->
						</div>
						<div class="cta-form">
							<h2>
				        		<?php if ( $campaign_cta_hero !== '' ) {
									echo $campaign_cta_hero;
									} else { ?>
									Download your report today.
								<?php } ?>
							</h2>
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

		<div class="value-proposition">
			<div class="container">
				<div class="row">
					<div class="contents">
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
				<?php if (is_mobile()): ?>
					<form novalidate autocomplete="off" class="lp">
						<div class="form-group">
							<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary-cta" id="submit" onclick="sameEmail(); ga('send', 'event', 'Main CTA', 'Click', 'PPC Pages - Footer Button', {nonInteraction: false});" data-toggle="modal" data-target="#mktoModal">
							<?php if ( $campaign_cta_hero !== '' ) {
								echo $campaign_cta_hero;
							} else { ?>
								Download report
							<?php } ?></button>
						</div>
					</form>
				</div>
				<div class="row">
					<p class="sub">Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
				</div>
				<?php elseif (is_tablet()): ?>
					<form novalidate autocomplete="off" class="lp">
						<div class="form-group">
							<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary-cta" id="submit" onclick="sameEmail(); ga('send', 'event', 'Main CTA', 'Click', 'PPC Pages - Footer Button', {nonInteraction: false});" data-toggle="modal" data-target="#mktoModal">
							<?php if ( $campaign_cta_hero !== '' ) {
								echo $campaign_cta_hero;
							} else { ?>
								Download report
							<?php } ?></button>
						</div>
					</form>
				</div>
				<div class="row">
					<p class="sub">Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
				</div>
				<?php else: ?>
					<form novalidate autocomplete="off" class="lp">
						<div class="form-group">
							<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<a class="btn btn-primary-cta" href="#fillForm" onclick="sameEmail(); ga('send', 'event', 'Main CTA', 'Click', 'PPC Pages - Footer Button', {nonInteraction: false});">
							<?php if ( $campaign_cta_hero !== '' ) {
								echo $campaign_cta_hero;
							} else { ?>
								Download report
							<?php } ?></a>
						</div>
					</form>
				</div>
				<div class="row">
					<p class="sub">Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- Modal View of Marketo Form -->
	</main>
	<!-- Video Modal -->
	<div class="modal lp-video fade" id="lp-video" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<?php echo $campaign_video_code; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Video Modal -->
	<?php if (is_mobile()): ?>
	<div class="modal lp-marketo-form fade" id="mktoModal" tabindex="-1">
	 	<div class="modal-dialog">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h3 id="myModalLabel">
		        		<?php if ( $campaign_cta_hero !== '' ) {
							echo $campaign_cta_hero;
							} else { ?>
							Download your report today.
						<?php } ?>
					</h3>
		       		<p class="lead">Please tell us a little about yourself.</p>
		      	</div>
		      	<?php if ( $campaign_marketo_id !== '' ) { ?>
						<?php foreach ( $campaign_supplementary_image as $media ) {
							echo "<img src='{$media['url']}' alt='' />";
						}
					?>
		      	<div class="modal-body">
					<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
					<form id="mktoForm_<?php echo $campaign_marketo_id; ?>"></form>
					<script type="text/javascript">
						// <![CDATA[
						MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?php echo $campaign_marketo_id; ?>);
						// ]]>
					</script>
					<?php } else { ?>
					<p class="page-tagline" style="background: red;">This template REQUIRES 'Marketo ID and Image' meta-box filled!</p>
				<?php } ?>
		      	</div>
		      	<div class="modal-footer">
		      		<p class="sub">
		      		Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
		      	</div>
	    	</div>
	  	</div>
	</div>
	<?php elseif (is_tablet()): ?>
	<div class="modal lp-marketo-form fade" id="mktoModal" tabindex="-1">
	 	<div class="modal-dialog">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h3 id="myModalLabel">
		        		<?php if ( $campaign_cta_hero !== '' ) {
							echo $campaign_cta_hero;
							} else { ?>
							Download your report today.
						<?php } ?>
					</h3>
		       		<p class="lead">Please tell us a little about yourself.</p>
		      	</div>
		      	<?php if ( $campaign_marketo_id !== '' ) { ?>
						<?php foreach ( $campaign_supplementary_image as $media ) {
							echo "<img src='{$media['url']}' alt='' />";
						}
					?>
		      	<div class="modal-body">
					<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
					<form id="mktoForm_<?php echo $campaign_marketo_id; ?>"></form>
					<script type="text/javascript">
						// <![CDATA[
						MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?php echo $campaign_marketo_id; ?>);
						// ]]>
					</script>
					<?php } else { ?>
					<p class="page-tagline" style="background: red;">This template REQUIRES 'Marketo ID and Image' meta-box filled!</p>
				<?php } ?>
		      	</div>
		      	<div class="modal-footer">
		      		<p class="sub">
		      		Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
		      	</div>
	    	</div>
	  	</div>
	</div>

	<?php endif; ?>

<?php get_footer('lpv3'); ?>
