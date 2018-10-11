<?php
/*
Template Name: Cash landing page
*/
get_header(); ?>
	<!-- Main Content Starts -->
	<main class="main-content supplychainfinancing cash">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="left-box">
							<h1><?php _e("Tradeshift<sup>&reg;</sup> <span>Cash</span>", 'Tradeshift'); ?></h1>
							<h3><?php _e("Get your invoices paid early", 'Tradeshift'); ?></h3>
							<p><?php _e("Get fast and affordable working capital on your invoices and improve your cash flow on the Tradeshift platform.", 'Tradeshift'); ?></p>
							<button data-toggle="modal" data-target="#mktoModal2" class="btn btn-primary-cta-ent default_btn"><?php _e("Tell me more", 'Tradeshift'); ?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="arrow hidden-xs"></div>
		</div>
		<div class="paymentPrograms">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2 class="fullWidth hasPadding"><?php _e("Introducing an instant invoice financing solution for micro, small and mid-sized businesses", 'Tradeshift'); ?></h2>
						<h3><?php _e("With Tradeshift Cash, you can capitalize on your unpaid invoices by selling them at a discount to a community of investors. You decide how much capital and when you need it by, we use state-of-the-art technology to provide you with it.", 'Tradeshift'); ?></h3>
						<h4><?php _e("How it works"); ?></h4>
						<div class="howItWorks-wrapper">
							<div class="howItWorks-header">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cash/icon-invoicing-cash.png" />
							</div>
							<div class="howItWorks-body">
								<h5><?php _e("Financing for invoices of all amounts", 'Tradeshift'); ?></h5>
								<p><?php _e("Tradeshift Cash uses your invoice - and business history on Tradeshift to match your needs with offers from our investor community.", 'Tradeshift'); ?></p>
							</div>
						</div>
						<div class="howItWorks-wrapper">
							<div class="howItWorks-header">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cash/icon-blockchain-cash.png" />
							</div>
							<div class="howItWorks-body">
								<h5><?php _e("Using Blockchain for positive change", 'Tradeshift'); ?></h5>
								<p><?php _e("We’re using blockchain technology to remove barriers of entry both for investors and small business participants, so that we can ensure the best possible early payment offers on an open and competitive market.", 'Tradeshift'); ?></p>
							</div>
						</div>
						<div class="howItWorks-wrapper">
							<div class="howItWorks-header">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cash/icon-factory-cash.png" />
							</div>
							<div class="howItWorks-body">
								<h5><?php _e("Say goodbye to factoring", 'Tradeshift'); ?></h5>
								<p><?php _e("Your history and relationships are valuable but dormant assets. Tradeshift Cash utilizes the knowledge and data in the Tradeshift network to provide tailored and optimized offers for your business.", 'Tradeshift'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonials">
				<div class="container">
					<div class="row">
						<div class="contents">
							<img src="<?php echo get_template_directory_uri(); ?>/img/cash/oden-makiwa.png" alt="Oden Makiwa" class="headshot-person" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-icon-quote-separator-xs.png" class="img-responsive visible-xs" />
							<div class="quotation"><?php _e("“The most important thing for me is to be able to meet my obligations. An improved cash flow via Tradeshift Cash helps me do this”", 'Tradeshift'); ?></div>
							<div class="quoted-person hidden-xs"><span><?php _e("&#8212; Oden Makiwa</span>, CEO and Partner Ellie Sunrise Healthcare, UK.", 'Tradeshift'); ?></div>
							<div class="quoted-person visible-xs"><span><?php _e("&dash; Oden Makiwa</span>, CEO and Partner Ellie Sunrise Healthcare, UK.", 'Tradeshift'); ?></div>
						</div>
					</div>
				</div>
			</div>
		<div class="component contact-us-form gradient-orange">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h4><?php _e("Want more information?", 'Tradeshift'); ?></h4>
						<p class="lead"><?php _e("Download the brochure to see how Tradeshift<sup>&reg;</sup> Cash can help you grow your business.", 'Tradeshift'); ?></p>
						<a href="<?php echo get_template_directory_uri(); ?>/pdf/Tradeshift-CASH-3-pager.pdf" class="btn-cta btn btn-white"><?php _e("Download the brochure here", 'Tradeshift'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</main>

	<div class="modal fade" id="mktoModal2" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel"><?php _e("Ready to explore your options?", 'Tradeshift'); ?></h3>
	        <p class="lead"><?php _e("We’ll contact you to set up a time to talk.", 'Tradeshift'); ?></p>
	      </div>
	      <div class="modal-body">
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_3484"></form>
			<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 3484);
				// ]]>
				MktoForms2.whenReady(function(form){
				 	//Add an onSuccess handler
				 	if(typeof formSubmitted === 'undefined') {
						form.onSuccess(function(values, followUpUrl){

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
							return true;
						 });
					}
				});
			</script>
			<div class="confirm-wrapper" id="confirmSubmit" style="display: none;"><p></p></div>
	      </div>
	    </div>
	  </div>
	</div>
	<?php $form=true; ?>


<?php get_footer(); ?>
