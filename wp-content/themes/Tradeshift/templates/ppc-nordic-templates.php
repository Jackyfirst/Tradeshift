<?php
/* Template Name: PPC Nordic Templates
*/
get_header('difi'); ?>
<style type="text/css">
	footer.sitewide-menu {
		height: auto !important
	}
</style>
<main class="main-content landing-pages lpv3 PeppolAcessPoint">
	<!-- Hero Section -->
	<div class="hero section-view">
		<div class="container">
			<div class="row cta">
				<div class="intro-text-cta">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
					<div id="heroForm">
						<div class="form-container buy-form">
							<form novalidate="" autocomplete="off" class="roles-pages" onsubmit="return false;" _lpchecked="1">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter email">
								<button type="button" class="btn btn-cta btn-nm" id="finalForm" onclick="sameEmail();" data-toggle="modal" data-target="#contact">Get access today</button>
							</form>
						</div>
					</div>


				</div>
					
			</div>
			<a href="#nextGenB2B-e-Commerce" class="animated zoomInDown"><div class="icon-down-arrow hidden-xs hidden-sm">Learn more</div></a>
			
		</div>
	</div>
	
	<div id="nextGenB2B-e-Commerce" class="nextGenB2B-e-Commerce">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div>
						<h2>The next generation of B2B e&#8209;commerce</h2>
						<p class="is-intro">PEPPOL stands for Pan-European Public Procurement Online. It is a single network and set of B2B e-commerce standards that make it fast and easy for organizations across Europe to do business electronically with each other. By accessing PEPPOL through Tradeshift, you can increase control and efficiency. And you can make sure your business is up to date with the rapidly increasing number of businesses that have adopted the standard.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if(get_field('show_gray_background_section') ): ?>
		<div class="getMoreOutofPeppol">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div>
							<div class="isRectangle-gradient"></div>
							<h2><?php the_field('section_header') ?></h2>
							<?php the_field('gray_section_content') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="resources section-view" style="position: relative;">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php the_field("resources_title") ?></h2>

					<script type="text/javascript" id="vidyard_embed_code_<?php the_field("vidyard_id") ?>" src="//play.vidyard.com/5Y2yuVrFMgx51hqVeGyaQR.js?v=3.1.1&type=lightbox"></script>
					<?php the_field("white_section_content") ?>


					<div class="resource-wrapper col-sm-4 col-xs-12">
						<div class="vid">
							<img class="img-responsive" src="<?php the_field('vidyard_video_preview') ?>" style="margin: auto;" onclick="fn_vidyard_<?php the_field("vidyard_id") ?>()">
							<div class="play-icon">
							    <button class="btn btn-play-white" onclick="fn_vidyard_<?php the_field("vidyard_id") ?>();"> </button>
							</div> 
						</div>
						<p><?php the_field("title_1") ?> <br class="visible-sm"><a onclick="fn_vidyard_<?php the_field("vidyard_id") ?>();"><?php the_field("video_cta_1") ?> &raquo;</a></p>
					</div>

					<div class="resource-wrapper col-sm-4 col-xs-12">
						<a class="trigger-res-2" href="<?php the_field('url_2') ?>" target="_blank"><img class="img-responsive" src="<?php the_field('thumbnail_2') ?>" style="margin: auto;"></a>
						<p><?php the_field("title_2") ?> <br /><a class="trigger-res-2" href="<?php the_field('url_2') ?>" target="_blank"><?php the_field("cta_2") ?> &raquo;</a></p>
					</div>

					<div class="resource-wrapper col-sm-4 col-xs-12">
						<a class="trigger-res-2" href="<?php the_field('url_3') ?>" target="_blank"><img class="img-responsive" src="<?php the_field('thumbnail_3') ?>" style="margin: auto;"></a>
						<p><?php the_field("title_3") ?> <br /><a class="trigger-res-2" href="<?php the_field('url_3') ?>" target="_blank"><?php the_field("cta_3") ?> &raquo;</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="resources cutomerStories">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php the_field("customer_stories_heading") ?></h2>
					<div class="resource-wrapper col-sm-4 col-xs-12">
						<div class="cutomerStories__wrapper">
							<a class="trigger-res-3" href="https://tradeshift.com/resources/helse-vest-regional-health-authority-enacts-invoice-process-savings-88/" target="_blank"><img class="img-responsive" src="/wp-content/themes/Tradeshift/img/difi/Helse.jpg" style="margin: auto;"></a>
							<p>Helse Vest Regional Health Authority enacts invoice process savings of 88%. <br class="visible-md visible-sm" /><a href="https://tradeshift.com/resources/helse-vest-regional-health-authority-enacts-invoice-process-savings-88/" target="_blank">See how &raquo;</a></p>
						</div>
					</div>
					<div class="resource-wrapper col-sm-4 col-xs-12">
						<div class="cutomerStories__wrapper">
							<a class="trigger-res-2" href="https://tradeshift.com/resources/cloud-based-eprocurement-saves-smartcity-bergen-e1-3-million-year/" target="_blank"><img class="img-responsive" src="/wp-content/themes/Tradeshift/img/difi/PEPPOL-bergen.jpg" style="margin: auto;"></a>
							<p>Cloud-based eProcurement saves the SmartCity of Bergen €1.3 million. <br /><a href="https://tradeshift.com/resources/cloud-based-eprocurement-saves-smartcity-bergen-e1-3-million-year/" target="_blank">See how &raquo;</a></p>
						</div>
					</div>
					<div class="resource-wrapper col-sm-4 col-xs-12">
						<div class="cutomerStories__wrapper">
							<a class="trigger-res-1" href="https://tradeshift.com/resources/municipality-trondheim-saves-millions-new-eprocurement-solution/" target="_blank"><img class="img-responsive" src="/wp-content/themes/Tradeshift/img/difi/PEPPOL-trondheim.jpg" style="margin: auto;"></a>
							<p>The Municipality of Trondheim saves millions with a new eProcurement solution. <br class="visible-md visible-sm" /><a href="https://tradeshift.com/resources/municipality-trondheim-saves-millions-new-eprocurement-solution/" target="_blank">See how &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cta-section">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2>Get PEPPOL access with <br />Tradeshift today!</h2>
					<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#contact">Contact us</button>
				</div>
			</div>
		</div>
	</div>
</main>

<!-- Modal Thank You Message After Form Submit -->
<div class="modal fade" id="mkSuccessMsg" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="myModalLabel">Thank you!</h3>
      </div>
      <div class="modal-body" style="padding: 0 30px !important">
      	<p class="lead">We’ll contact you to set up a time to talk.</p>
      </div>
    </div>
  </div>
</div>
<!-- Modal View of Marketo Contact -->
<div class="modal fade" id="contact" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="myModalLabel">Ready to explore your options?</h3>
        <p class="lead">We’ll contact you to set up a time to talk.</p>
      </div>
      <div class="modal-body">
		<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
		<form id="mktoForm_3023"></form>
		<script type="text/javascript">// <![CDATA[
	        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 3023);
			// ]]>
			MktoForms2.whenReady(function(form){
			 	//Add an onSuccess handler
				form.onSuccess(function(values, followUpUrl){
					// Hide the form when submitted
					//form.getFormElem().hide();
					// show thank you message and clear fields
					$('#contact').modal('hide'); 
					$('#mkSuccessMsg').modal({ show: 'true' }); 
					$('.mktoField').val('');
					// Uncomment if a message should be shown when form is hidden; append message to div below
					// document.getElementById('confirmSubmit').style.display = 'block';

					// Start Segment API tracking | Get email value entered in Marketo and pass it to segment
					var $emailMkto = form.vals().Email;
					var $companyMkto = form.vals().Company;
					var $companyRFAnnualRev = form.vals().RF_SITE_AnnualRev__c;
					var $segmentAnonID = analytics.user().anonymousId();
					analytics.alias(analytics.user().anonymousId());
					analytics.identify (analytics.user().anonymousId(), {
					    email: $emailMkto,
					 	company: {
							id: $segmentAnonID,
							name: $companyMkto,
							annual_revenue: $companyRFAnnualRev
							},
						companyName: $companyMkto
					     });
					analytics.track('PEPPOL Submit', {
						formName: 'Email Field',
						email: $emailMkto,
						companyName: $companyMkto,
						annualRevenue: $companyRFAnnualRev
						});
					//return false to prevent the submission handler from taking the lead to the follow up url.
					return false;
				 });
			});
		</script>
		<div class="confirm-wrapper" id="confirmSubmit" style="display: none;"><p></p></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal View of CTA in nav bar -->
<div class="modal fade" id="mktoModal2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="myModalLabel">Ready to explore your options?</h3>
        <p class="lead">We’ll contact you to set up a time to talk.</p>
      </div>
      <div class="modal-body">
        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
		<form id="mktoForm_<?php the_field('form_id') ?>"></form>
		<script type="text/javascript">// <![CDATA[
	        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?php the_field('form_id') ?>);
			// ]]>
			MktoForms2.whenReady(function(form){
			 	//Add an onSuccess handler
				form.onSuccess(function(values, followUpUrl){
					// Hide the form when submitted
					//form.getFormElem().hide();
					// Uncomment if a message should be shown when form is hidden; append message to div below
					// document.getElementById('confirmSubmit').style.display = 'block';
					// When form gets submitted, show Intercom by adding a class to display block (Intercom defaults not being displayed)
					document.getElementById('intercom-container').className = 'show-intercom';
					// Show the Intercom message/chat interface
					Intercom('show');
					// Start Segment API tracking | Get email value entered in Marketo and pass it to segment
					var $emailMkto = form.vals().Email;
					var $companyMkto = form.vals().Company;
					var $companyRFAnnualRev = form.vals().RF_SITE_AnnualRev__c;
					var $segmentAnonID = analytics.user().anonymousId();
					analytics.alias(analytics.user().anonymousId());
					analytics.identify (analytics.user().anonymousId(), {
					    email: $emailMkto,
					 	company: {
							id: $segmentAnonID,
							name: $companyMkto,
							annual_revenue: $companyRFAnnualRev
							},
						companyName: $companyMkto
					     });
					analytics.track('Drones RTP Form Submit', {
						formName: 'Email Field',
						email: $emailMkto,
						companyName: $companyMkto,
						annualRevenue: $companyRFAnnualRev
						});
					//return false to prevent the submission handler from taking the lead to the follow up url.
					return false;
				 });
			});
		</script>
		<div class="confirm-wrapper" id="confirmSubmit" style="display: none;"><p></p></div>
      </div>
    </div>
  </div>
</div>
<?php get_footer('difi'); ?>
