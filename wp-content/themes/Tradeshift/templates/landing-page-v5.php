<?php
/* Template Name: Landing Pages: PPC v5 - No Logos
*/
get_header('lp'); ?>
	<main class="main-content landing-pages lpv2">
		<?php global $post; ?>
		<!-- Grab the featured image attached to the custom post and place as the hero background -->
		<?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
		?>
		<!-- Hero Section -->
		<div class="hero" style="background-image: url(<?php echo $src[0]; ?> );">
			<div class="container">
				<div class="row cta">
					<div class="contents">
						<!-- Title from WP Custom Post - Campaigns -->
						<h1 class="page-title"><?php the_title(); ?></h1>
						<!-- Lead paragraph from Metabox Form Field on H3 for SEO sweetness -->
						<?php $metabox = rwmb_meta( 'camp_subtitle_1' );
							if ( $metabox !== '' ) { ?>
								<h3><?php echo $metabox; ?></h3>
							<?php } else { ?>
								<p class="page-tagline" style="background: red;">This template REQUIRES 'subtitle' meta-box filled!</p>
						<?php } ?>
						<!-- CTA WATCH VIDEO Watch Video Button Shows Up if there is content on the field, and it gets inserted into the modal view block below -->
						<?php $metaVid = rwmb_meta( 'camp_vid_1' );
							if ( $metaVid !== '' ) { ?>
								<button onclick='_gaq.push(["_trackEvent", "PPC Pages", "Click", "<?php echo get_permalink(); ?> (Video Btn)" ]);' type="button" class="btn btn-video btn-secondary-cta" data-toggle="modal" data-target="#lp-video"><i class="fa fa-play"> </i> &nbsp; Watch Video</button>
								<!-- CTA PRIMARY NEXT: Show Primary CTA (CTA #1) next to Watch Video Button -->
								<?php 	$metaAnchor = rwmb_meta( 'camp_cta_1' );
										$metaUrl = rwmb_meta( 'camp_cta_url_1' );
									if ( $metaAnchor && $metaUrl !== '' ) { ?>
										<button class="btn btn-primary-cta" onclick="_gaq.push(['_trackEvent', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (CTA)' ]);" data-toggle="modal" data-target="#mktoModal"><?php echo $metaAnchor; ?></button>
									<?php } else { ?>
								<?php } ?>
								<!-- CTA PRIMARY NEXT END -->
							<?php } else { ?>
								<!-- CTA ALONE: Show this Primary CTA (CTA #1) by itself because the CTA Video field is empty -->
								<?php 	$metaAnchor = rwmb_meta( 'camp_cta_1' );
										$metaUrl = rwmb_meta( 'camp_cta_url_1' );
									if ( $metaAnchor && $metaUrl !== '' ) { ?>
										<button class="btn btn-primary-cta" onclick="_gaq.push(['_trackEvent', 'PPC Pages', 'Click', '<?php echo get_permalink(); ?> (CTA)' ]);" data-toggle="modal" data-target="#mktoModal"><?php echo $metaAnchor; ?></button>
									<?php } else { ?>
								<?php } ?>
								<!-- CTA ALONE END -->
						<?php } ?>
						<!-- CTA WATCH VIDEO LOOP END -->
					</div>
				</div>
				<!-- <div class="row customer-logos-container">
					<div class="contents hidden-xs">
					    <ul class="customer-logos hidden-xs">
						    <li class="airfrance"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/airfranceklm-hero-sm.png" alt="AirFrance KLM" /></li>
						    <li class="linked-in"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/linkedin-hero-sm.png" alt="LinkedIn" /></li>
						    <li class="dhl"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/dhl-hero-sm.png" alt="DHL" /></li>
						    <li class="cbre"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/cbre-hero-sm.png" alt="CBRE" /></li>
						    <li class="adm hidden-sm"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/adm-hero-sm.png" alt="ADM" /></li>
						    <li class="vestas hidden-sm"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/vestas-hero-sm.png" alt="Vestas" /></li>
						    <li class="nhs"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/nhs-hero-sm.png" alt="NHS" /></li>
						</ul>
					</div>
				</div> -->
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
						<?php $metaContent = rwmb_meta( 'camp_content_2' );
							if ( $metaContent !== '' ) { ?>
								<?php echo $metaContent; ?>
							<?php } else { ?>
								<p class="page-tagline" style="background: red;">This template REQUIRES 'Secondary content' meta-box filled!</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<hr  class="dash" />
		<!-- end Content area #2 -->
		<div class="fill-out-form">
			<div class="container">
				<div class="row">
					<h2><?php 	$metaAnchor = rwmb_meta( 'camp_cta_1' );
						if ( $metaAnchor !== '' ) {
							echo $metaAnchor; 
						} else { ?>
							Download your report today.
						<?php } ?></h2>
					<form novalidate autocomplete="off" class="lp">
						<div class="form-group">
							<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary-cta" id="submit" onclick="sameEmail(); _gaq.push(['_trackEvent', 'Main CTA', 'Click', 'PPC Pages - footer button' ]);" data-toggle="modal" data-target="#mktoModal">
							<?php 	$metaAnchor = rwmb_meta( 'camp_cta_1' );
							if ( $metaAnchor !== '' ) {
								echo $metaAnchor; 
							} else { ?>
								Download your report today.
							<?php } ?></button>
						</div>
					</form>
				</div>
				<div class="row">
					<p class="sub">Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
				</div>
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
					<?php $metabox = rwmb_meta( 'camp_vid_1' );
						if ( $metaAnchor !== '' ) {
							echo $metabox;
						} else { ?>
							<p class="hero-camp-btn">REQUIRES VIDEO CODE! CTA#1 Meta filled</p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal -->
	<div id="xs-cta" class="xs-cta-container">
		<a data-toggle="modal" data-target="#mktoModal" href="#" class="xs-cta"><?php $metaAnchor = rwmb_meta( 'camp_cta_1' );
				if ( $metaAnchor !== '' ) {
					echo $metaAnchor; 
				} else { ?>
					Download resource
			<?php } ?>
		</a>
	</div>
	<div class="modal lp-marketo-form fade" id="mktoModal" tabindex="-1">
	 	<div class="modal-dialog">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h3 id="myModalLabel"><?php $metaAnchor = rwmb_meta( 'camp_cta_1' );
						if ( $metaAnchor !== '' ) {
							echo $metaAnchor; 
						} else { ?>
							Download your report today.
						<?php } ?></h3>
		       		<p class="lead">Please tell us a little about yourself.</p>
		      	</div>
		      	<?php $metaMKT = rwmb_meta( 'camp_mkt_1' );
						$mediaMKT = rwmb_meta( 'camp_mkt_img_1', 'type=image&size=' , $postId );
					if ( $metaMKT !== '' ) { ?>
					<?php foreach ( $mediaMKT as $media ) {
						echo "<img src='{$media['url']}' alt='' />";
						}
					?>
		      	<div class="modal-body">
					<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
					<form id="mktoForm_<?php echo $metaMKT; ?>"></form>
					<script type="text/javascript">
						// <![CDATA[
						MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?php echo $metaMKT; ?> , function(form){
				    	form.onSubmit(function(){
				        	_gaq.push(["_trackEvent", "Main CTA", "Submit", "<?php echo get_permalink(); ?> (Form Submit)" ]);
						    });
						}); 
						// ]]>
					</script>
					<?php } else { ?>
					<p class="page-tagline" style="background: red;">This template REQUIRES 'Merkato code #1 and Image' meta-box filled!</p>
				<?php } ?>
		      	</div>
		      	<div class="modal-footer">
		      		<p class="sub">
		      		Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
		      	</div>
	    	</div>
	  	</div>
	</div>
	
<?php get_footer('lp'); ?>
