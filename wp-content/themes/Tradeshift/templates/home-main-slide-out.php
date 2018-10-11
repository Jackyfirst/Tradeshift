 <?php
/*
Template Name: Home Page - Slide Out
*/
get_header('main-only-slide-out'); ?>

<style>
.section-one {
	background: none !important
}
.fp-section.fp-table {
	margin-bottom: 0px !important
}
#sectionTwoPartOne .fp-tableCell {
     vertical-align: top !important;
     padding-top: 110px;
}
/*iPad 1 & 2 in portrait & landscape*/
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (-webkit-min-device-pixel-ratio: 1){

	.home-main-v2 .section-one .hone {
		font-size: 44px;
	}
	#s1Header {
		width: 100%;
	}

}
@media (max-width: 768px){
	.home-main-v2 .section-one .top-banner p.ja-top-banner {
		font-size: 14px !important;
	}
}
@media (max-width: 1200px) {
	.home-main-v2 .section-one .top-banner p.ja-top-banner {
		font-size: 13px !important;
	}
	.ja-invoicing {
		display: none !important;
	}
	li.ja-header-nav {
		padding-right: 9px !important;
	}
}
@media (min-width: 992px) {
	.smartling-fr .section-two-one h2 {
		padding: 0px !important
	}
}
</style>
<script>
	$(window).load(function() {
		$(".smartling-fr #heroForm #Email").attr("placeholder", "E-mail professionnel");
		$(".smartling-fr #heroForm #Company").attr("placeholder", "Nom de la société");
		console.log('Form translated');
		$('.smartling-fr .hapag-front').attr('src', '/wp-content/themes/Tradeshift/img/mainv2/tiles-hapag-lloyd-fr.jpg');
		$('.smartling-fr .nhs-murphy-front').attr('src', '/wp-content/themes/Tradeshift/img/mainv2/tiles-nhs-fr.jpg');
		$('.smartling-fr .thierry-bellon-back').attr('src', '/wp-content/themes/Tradeshift/img/mainv2/tiles-air-france-klm-wide-fr.jpg');
		$('.smartling-fr .nhs-sbs-back').attr('src', '/wp-content/themes/Tradeshift/img/mainv2/tiles-nhs-sbs-back-fr.jpg');
		$('.smartling-fr .UK-local-lg-back').attr('src', '/wp-content/themes/Tradeshift/img/mainv2/UK-local-Gov-back-fr.jpg');
		$('.smartling-fr .airfrance-lg-front').attr('src', '/wp-content/themes/Tradeshift/img/mainv2/tile-airfrance-quote-front-fr.jpg');
		$('.smartling-fr .testimonials-xs').attr('src', '/wp-content/themes/Tradeshift/img/mainv2/testimonials-xs-v4-fr.jpg');
		
	})
</script>
<main id="fullpage" class="main-content home-main-v2">
  <?php if (is_mobile()): ?>
     <div id="sectionOne" class="section section-view section-one" data-vide-bg="jpg: /wp-content/themes/Tradeshift/img/mainv2/hero-video-bg.jpg, poster: /wp-content/themes/Tradeshift/img/mainv2/hero-video-bg.jpg" data-vide-options="posterType: jpg, position: 55% 35px">
  <?php else: ?>
    <div id="sectionOne" class="section section-view section-one" data-vide-bg="mp4: /wp-content/themes/Tradeshift/video/commerce-hero-bg-3.mp4, poster: /wp-content/themes/Tradeshift/img/mainv2/hero-video-bg.jpg">
  <?php endif; ?>
  			<script type="text/javascript">
				$(document).ready(function() { 
					// $(window).resize(function(){
					// 	if ($(window).width() <= 800){	
					// 		// do something here
					// 	}	
					// });
					
				    // japannese nav
            		if(window.location.host == 'ja.tradeshift.com') {

            			checkSize();

            			 // run test on resize of the window
					    $(window).resize(checkSize);

						//Function to the css rule
						function checkSize(){
						    if ($(".home-main-v2 .section-one .top-banner p").css("font-size") == "22px" ){
						        // add class that updates ibx banner ja version in mobile 
						        $('.home-main-v2 .section-one .top-banner p').addClass('ja-top-banner');
						    }
						    $('.sitewide-nav .main-nav-list li.invoicing').addClass('ja-invoicing');
						    $('.sitewide-nav .main-nav-list li').addClass('ja-header-nav');
						}
					}
				});
			</script>
			<div id="sync1" class="owl-carousel owl-theme">
			<div class="item">
			    <div class="top-banner hidden-xs calculator">
					<div class="container">
						<img src="<?php echo get_template_directory_uri(); ?>/img/front-value-estimator-banner.png" alt="Tradeshift | Value Estimator" />
						<!-- <p>Shift Your Value. <span><a href="/shift-your-value">Build your P2P Business Case with just a few clicks &raquo;</a></span></p> -->
						<p>Webinar, watch today! <span><a href="https://tradeshift.com/resources/unlocking-the-value-of-your-procure-to-pay-process-webinar/?utm_source=home_page&utm_medium=banner&utm_campaign=value_estimator_webinar_resource">Unlocking the Value of your Procure-to-Pay Process. &raquo;</a></span></p>
					</div>
				</div>
				<div class="top-banner calculator visible-xs">
					<div class="container">
							<a href="https://blog.tradeshift.com/weve-acquired-ibx-business-network-and-will-be-the-largest-business-commerce-platform-in-the-world"></a>
							<!-- <p>Shift Your Value. <span><a href="/shift-your-value">Build your P2P Business Case &raquo;</a></p> -->
							<p>Webinar, watch today!<br /><span><a href="https://tradeshift.com/resources/unlocking-the-value-of-your-procure-to-pay-process-webinar/?utm_source=home_page&utm_medium=banner&utm_campaign=value_estimator_webinar_resource">&nbsp;Unlocking the Value of your Procure-to-Pay Process. &raquo;</a></p>
							<div style="clear: both;"></div>
					</div>
				</div>
			  </div>
			  <div class="item">
			    <div class="top-banner forrester hidden-xs">
					<div class="container">
						<p>Tradeshift cited for "its innovation record and ambition" as <strong>'strong performer'</strong> in <br class="visible-sm"><a href="https://blog.tradeshift.com/tradeshift-cited-innovation-record-ambition-strong-performer-forresters-wave-eprocurement/" target="_blank">Forrester’s Wave for eProcurement</a></p>
						<div class="logo-banner"><img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/Forrester_logo-white.png"></div>
					</div>
				</div>
				<div class="top-banner forrester visible-xs">
					<div class="container">
						<div class="ibx-container">
							<p>Tradeshift a <strong>'strong performer'</strong> in <br class="visible-sm"><a href="https://blog.tradeshift.com/tradeshift-cited-innovation-record-ambition-strong-performer-forresters-wave-eprocurement/" target="_blank">Forrester’s Wave for eProcurement</a></p>
							<div style="clear: both;"></div>
						</div>
					</div>
				</div>
			  </div>
			</div>
			<div id="s1Header" class="container">
				<div class="row">
					<div class="contents">
						<p class="hone">Grow your company with Tradeshift's flexible business commerce platform</p>
			          <script type="text/javascript" id="vidyard_embed_code_yLuLipN8zzvwaLn4w3TUg9" src="//play.vidyard.com/yLuLipN8zzvwaLn4w3TUg9.js?v=3.1.1&type=lightbox"></script>
			          <p class="p-play">Play the full video</p>
			          <button id="heroVideoTS_buy" class="btn btn-play-white" onclick="fn_vidyard_yLuLipN8zzvwaLn4w3TUg9();"> </button>
					</div>
				</div>
				<div class="row notranslate no">
					<div id="heroForm" class="form-container notranslate no">
						<div id="formWrapper" class="form-wrapper notranslate no" style="margin: auto;width: 100%;float: none;text-align: center;">
							<form id="mktoForm_1773" style="display: inline-block;" class="notranslate no"></form>
							<script type="text/javascript">// <![CDATA[
						        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1773);
								// ]]>
								MktoForms2.whenReady(function(form){
								 	//Add an onSuccess handler
									form.onSuccess(function(values, followUpUrl){
										// Hide the form when submitted
										form.getFormElem().hide();
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
										analytics.track('Homepage Website Form Submit', {
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
    	<div class="icon-down-arrow hidden-xs hidden-sm">See more</div>
		</div>

		<div id="sectionAda" class="section ts-slide section-view section-ada">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="copy-cta-wrapper">
							<h2>Say hello to <strong>Tradeshift Ada</strong>, an AI layer on our business commerce platform</h2>
							<a href="/ada" class="btn btn-primary-cta" style="background: #ff9000 !important">Learn more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">There's more</div>
		</div>
		<div id="sectionTwoPartOne" class="section section-view section-ada section-two-one">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="copy-cta-wrapper">
							<h2>Agile companies use Tradeshift to buy and sell more effectively</h2>
							<h3 style="font-weight: 200 !important">From procure-to-pay and supplier engagement to solutions for sellers and SMBs, we help companies tailor solutions that can quickly adapt to their changing needs.</h3>
						</div>
					</div>
				</div>
				<div class="row row-form">
					<div class="contents">
						<div id="agileCompanies" class="form-container"></div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">There's more</div>
		</div>
		<div id="sectionTwoPartTwo" class="section section-view section-two section-two-two">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Flexible solutions to help you succeed</h2>
						<div class="platform-wrapper">
							<div class="platform-list procure">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-p2p.png" />
								<h4>Procure to Pay</h4>
								<p>Manage all aspects of your procure-to-pay process through simplified solutions for catalogs, shopping, purchasing, invoicing, and payments. <a href="/enterprise/solutions/procure-to-pay/">Learn more &raquo;</a></p>
							</div>
							<div class="platform-list supplier">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-se.png" />
								<h4>Supplier Engagement</h4>
								<p>Manage all your important supplier information—including profiles, regulatory and risk information, and performance survey results—in a single place. </p>
							</div>
							<div class="platform-list seller">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-seller.png" />
								<h4>Seller Space</h4>
								<p>Create, manage and maintain a store for your business in the Tradeshift marketplace. Collaborate with customers, fulfill orders, and invoice for free.</p>
							</div>
							<div class="platform-list smb">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-smb.png" />
								<h4>Solutions for SMB</h4>
								<p>Manage everyday company spending, such as travel & expense, as it happens with virtual credit cards and a smart travel assistant service.</p>
							</div>
							<div class="platform-list build">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-build.png" />
								<h4>Build Your Own Solution</h4>
								<p>Why stop with the enterprise solutions we offer? Create your own solutions to meet your specific needs with our flexible platform.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">Keep going</div>
		</div>

		<div id="sectionThree" class="section ts-slide section-view section-three">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div id="copyForm3" class="copy-form-wrapper">
							<h2>1.5 million companies use Tradeshift's marketplace to buy and sell</h2>

						</div>
						<!-- ################### Tiles XS ################### -->
						<div class="testimonials-wrapper visible-xs">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/testimonials-xs-v4.jpg" class="visible-xs testimonials-xs" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/airfrance-xs.jpg" onclick="fn_vidyard_X26YsBw5CwzQGriGCdShtU();" />
						</div>
						<!-- ################### Tiles SM ################### -->
						<div class="testimonials-wrapper visible-sm">
							<div class="row">
								<div class="tiles tiles-wide tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs.png" alt="Tradeshift gives us a brilliant platform for better collaboration, and will allow us to scale up and evolve with suppliers, as well as introduce innovative solutions. – Simon Murphy, Director of Finance & Accounting, NHS Shared Business Services" class="murphy nhs-murphy-front" />
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-air-france-klm-wide.png" alt="Tradeshift’s platform ensures that something as simple as an invoice doesn’t slow down our 24/7 business, benefiting both our company and our suppliers. - Thierry Bellon, CPO, Air France-KLM" class="klm thierry-bellon-back" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-volvo.jpg" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-siemens.jpg" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="tiles tiles-sq" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-dhl.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tile-rwe-front.jpg" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-unilever.jpg" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/kuehne-nagel.jpg" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-adm.jpg" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-ericsson.jpg" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tile-rwe-front.jpg" onclick="fn_vidyard_VoCvJSS9o5GpzRPzbFVE25();" style="cursor: pointer;" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-back.jpg" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-wide tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-hapag-lloyd.png" alt="Tradeshift’s interface is intuitive, state of the art, and among the best. The increase of transparency in workflows is one of major process improvements. - Dr. Thore Lindemann, Manager of e-Solutions, Hapag-Lloyd" class="hapag hapag-front"/>
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-sbs-back.jpg" alt="Definitely recommended for NHS invoicing. I found it easy peasy to input my invoices, but the best thing was the speed of the approval process! - NHS supplier"  class="nhs-supplier nhs-sbs-back"/>
										</div>
									</div>
								</div>
							</div>
						</div>















						<!-- ################### Tiles LG/MD ################### -->
						<div class="testimonials-wrapper visible-md visible-lg">
							<div class="row">
								<div class="tiles tiles-wide tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs.png" alt="Tradeshift gives us a brilliant platform for better collaboration, and will allow us to scale up and evolve with suppliers, as well as introduce innovative solutions. – Simon Murphy, Director of Finance & Accounting, NHS Shared Business Services" class="murphy nhs-murphy-front" />
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-air-france-klm-wide.png" alt="Tradeshift’s platform ensures that something as simple as an invoice doesn’t slow down our 24/7 business, benefiting both our company and our suppliers. - Thierry Bellon, CPO, Air France-KLM" class="klm thierry-bellon-back" /> 
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-siemens.jpg" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-volvo.jpg" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip hidden-md" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-dhl.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-sbs.png" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip adm" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-adm.jpg" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-ericsson.jpg" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-hsbc-v2-front.jpg" style="width: 100%" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-theguardian-yellow.png" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip rwe" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper" style="transition: 2.5s;-webkit-transition: 2.5s;-moz-transition: 2.5s;">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tile-rwe-front.jpg" onclick="fn_vidyard_VoCvJSS9o5GpzRPzbFVE25();" style="cursor: pointer;" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-back.jpg" onclick="fn_vidyard_JYQJ1MPc13KZWrvmU4TJnL();"" />
										</div>
									</div>
								</div>

								<div id="hapag-lloyd-lg" class="tiles tiles-wide tiles-flip hapag-lloyd" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-hapag-lloyd.png" alt="Tradeshift’s interface is intuitive, state of the art, and among the best. The increase of transparency in workflows is one of major process improvements. - Dr. Thore Lindemann, Manager of e-Solutions, Hapag-Lloyd" class="hapag hapag-front" />
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-sbs-back.jpg" alt="Definitely recommended for NHS invoicing. I found it easy peasy to input my invoices, but the best thing was the speed of the approval process! - NHS supplier" class="nhs-supplier nhs-sbs-back" />
										</div>
									</div>

								</div>
								<div class="tiles tiles-sq tiles-flip visible-lg" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-unilever.jpg" style="width: 100%;height: 100%" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/kuehne-nagel.jpg" />
										</div>
									</div>
								</div>
							</div>
							<!-- SECOND ROW ENDS -->
							<!-- THIRD ROW -->
							<div class="row lt-900">
								<div class="tiles tiles-sq tiles-flip hidden-md" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-citi-black.jpg" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-eastman.jpg" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-wide tiles-flip air-france" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tile-airfrance-quote-front.jpg" alt="Tradeshift’s interface is intuitive, state of the art, and among the best. The increase of transparency in workflows is one of major process improvements. - Dr. Thore Lindemann, Manager of e-Solutions, Hapag-Lloyd" class="airfrance airfrance-lg-front" />
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/UK-local-Gov-back.jpg" alt="Definitely recommended for NHS invoicing. I found it easy peasy to input my invoices, but the best thing was the speed of the approval process! - NHS supplier" class="nhs-supplier UK-local-lg-back" />
										</div>
									</div>
								</div>

								<div class="tiles tiles-wide tiles-flip air-france-video" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper" style="transition: 2.5s;-webkit-transition: 2.5s;-moz-transition: 2.5s;">
										<div class="front front-wide" style="background: black">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tile-airfrance-front.jpg" alt="Tradeshift’s interface is intuitive, state of the art, and among the best. The increase of transparency in workflows is one of major process improvements. - Dr. Thore Lindemann, Manager of e-Solutions, Hapag-Lloyd" class="hapag" onclick="fn_vidyard_X26YsBw5CwzQGriGCdShtU();" style="cursor: pointer;"/>
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-lgss.jpg" alt="" onclick="fn_vidyard_out72rGMse68CCSjY1viVg();" style="cursor: pointer;" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">Keep going</div>
		</div>

		<div id="sectionFour" class="section section-view section-four">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Be better than the rest</h2>
						<h3>Tradeshift stands out from the pack and helps your business be more successful, whether you're a buyer, seller, or both.</h3>
						<div class="icons-feature">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-market.png" class="img-responsive" />
							<p>A truly open<br />marketplace</p>
						</div>
						<div class="icons-feature">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-collab.png" class="img-responsive" />
							<p>Collaboration<br />made easy</p>
						</div>
						<div class="icons-feature">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-extensible.png" class="img-responsive" />
							<p>Flexible<br />platform</p>
						</div>
						<div class="icons-feature">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-innovation.png" class="img-responsive" />
							<p>Innovation<br />leader</p>
						</div>
					</div>
				</div>
				<div class="row row-form">
					<div class="contents">
						<div id="modernSolution" class="form-container"> </div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">People are talking</div>
		</div>
		<div id="sectionFive" class="section section-view section-five">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>In the news</h2>
						<a href="http://www.pressheretv.com/tradeshift-ceo-im-bullish-on-china/" target="_blank" style="color:#333"><div class="news news-cnbc1">
							<div class="headline">
								Tradeshift CEO: I’m bullish on China. Christian Laang says “political noise” obscures opportunity.
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/press-here-nbc-v2.png" />
						</div></a>
						<div class="news news-cnbc1">
							<div class="headline">
								Tradeshift, a 'social network' for invoices raises $75M, valued at $600M
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-cnbc.png" />
						</div>
						<div class="news news-tc1 hidden-xs">
							<div class="headline">
								Tradeshift raises $75M Series D to expand its invoicing platform to new verticals
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-tc.png" />
						</div>
						<div class="news news-wsj1 hidden-sm hidden-md">
							<div class="headline">
								Companies use Tradeshift to connect their businesses &amp; manage their supply chains
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-wsj.png" />
						</div>
						<div class="news news news-tg hidden-xs">
							<div class="headline">
								Business network Tradeshift gains an ally
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-ft.png" />
						</div>
						<div class="news news news-sm">
							<div class="headline">
								The Future of Money
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-wired.png" />
						</div>
						<!-- <div class="news news-cnbc2">
							<div class="headline">
								How an e-invoicing company could disrupt the banking industry
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-cnbc.png" />
						</div> -->
						<div class="news news-tc2 hidden-xs" >
							<div class="headline">
								Tradeshift launches to disrupt an entire financial system
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-tc.png" />
						</div>
						<div class="news news-wsj2 hidden-xs hidden-sm hidden-md" >
							<div class="headline">
								Tradeshift raises $75 million to connect global supply chains
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-wsj.png" />
						</div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">Some resources</div>
		</div>

		<div id="sectionSix" class="section section-view section-six">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Grow your mind,<br />grow your business</h2>
						<div class="ts-books"> 
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/book-overview.png" />
							<h3>Tradeshift Overview</h3>
							<p>Everything you need to know about what we do. <a href="https://tradeshift.com/resources/the-tradeshift-platform-everything-you-need-to-know?utm_source=website&utm_medium=resources&utm_campaign=TSoverview" target="_blank">Learn more </a></p>
						</div>
						<div class="ts-books"> 
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/book-diff.png" />
							<h3>Why We're Different</h3>
							<p>"You call that an open network? Seriously..." <a href="https://blog.tradeshift.com/you-call-that-an-open-network-coupa-seriously?utm_source=website&utm_medium=resources&utm_campaign=whyarewedifferent" target="_blank">Read me </a></p>
						</div>
						<div class="ts-books"> 
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/book-spend.png" />
							<h3>Spend Matters Review</h3>
							<p>Jason Busch examines our e-procurement tool. <a href="https://tradeshift.com/resources/tradeshift-buy-a-deep-dive-into-tradeshifts-eprocurement-offering?utm_source=website&utm_medium=resources&utm_campaign=spendmatters" target="_blank">Download </a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">Almost there</div>
		</div>

		

		<div id="sectionSeven" class="section section-view section-seven">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Commerce doesn't have to be so complicated</h2>
						<h3>Now you can simplify your B2B processes and be more agile than ever.</h3>
					</div>
				</div>
				<div class="row row-form">
					<div class="contents">
						<div id="getStartedFooter" class="form-container"> </div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">Learn more</div>
		</div>
		<!-- Footer Area -->
		<footer id="footer-sitewide" class="section fp-auto-height footer-main-only sitewide-menu" style="height: 440px">
			<div class="container">
				<div class="row brand-footer-nav">
					<div class="footer-nav">
						<!-- To edit this snippet, go to the file on /components -->
						<?php get_template_part( 'components/nav', 'footer-sitewide-main' ); ?>
					</div>
				</div>
				<div class="row privacy-terms-copyright SL_swap" id="privacy_footer">
					<?php if (is_mobile()): ?>
					<div class="privacy-terms">
						<ul id="privacy" class="menu-list">
							<li id="menu-item-1358" class="SL_swap"><a title="Privacy Policy" href="/privacy-policy/" class="univ-footer-nav-links">Privacy</a></li>
							<li id="menu-item-1360" class="SL_swap"><a title="Terms of Service" href="/terms-of-service/" class="univ-footer-nav-links">Terms of Service</a></li>
							<li id="menu-item-1359" class="SL_swap">&copy;Tradeshift <?php echo date( 'Y' ); ?></li>
						</ul>
					</div>
					<?php else: ?>
					<div class="privacy-terms hidden-xs">
						<?php
						    wp_nav_menu( array(
						        'menu'              => 20,
						        'menu_id'           => 'privacy',
						        'depth'             => 1,
						        'container'         => 'ul',
						        'container_class'   => 'menu-privacy',
						        'container_id'      => 'privacy',
						        'menu_class'        => 'menu-list',
						        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						        'walker'            => new wp_bootstrap_navwalker())
						    );
						?>
						<!-- <span class="copyright">
							Copyright Tradeshift <sup class="reg-mark">&reg;</sup> <?php echo date( 'Y' ); ?>
						</span> -->
					</div>
					<?php endif; ?>
				</div>
			</div>
		</footer>
	</main>
	<!-- Modal View of Marketo Form -->
	<div class="modal fade" id="mktoModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel">Ready to explore your options?</h3>
	        <p class="lead">We’ll contact you to set up a time to talk.</p>
	      </div>
	      <div class="modal-body">
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js" class="mktoForms2JS"></script>
			<form id="mktoForm_2288"></form>
			<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2288);
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
						// Send a click event to Google Analytics
						ga('send', 'event', 'Drones RTP Page', 'Submit', 'Marketo Form Submit');
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
	<!-- Modal View of Calendly-->
	<!-- <div class="modal modal-sign-up fade" id="seeDemoModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel"><strong>Can't talk now?</strong> Let's chat next week.</h3>
	      </div>
	      <div class="modal-body">
	      	<iframe id="calendlyFrame" class="calendly-frame" src="https://calendly.com/tradeshift-demo/30min" frameBorder="0" scrolling="yes"></iframe>
	      </div>
	    </div>
	  </div>
	</div> -->
	<!-- Modal View of Sign Up -->
	<div class="modal modal-sign-up fade" id="SignUpModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel">Get started with a free account.</h3>
	      </div>
	      <div class="modal-body">
	      <form id="form-sign-up">
	      	<div class="sign-up-list">
				<input type="checkbox" id="sb-sign-up" class="sign-up-checkbox" name="sb-sign-up" value="https://go.tradeshift.com/register" />
				<label for="sb-sign-up"><span></span>Free Invoicing – Send and receive invoices for free.</label>
			</div>
			<div class="sign-up-list">
				<input type="checkbox" id="go-sign-up" class="sign-up-checkbox" name="go-sign-up" value="https://tradeshift.com/go" />
				<label for="go-sign-up"><span></span>Tradeshift<sup>&reg;</sup> Go – A virtual assistant for spend &amp; travel.</label>
			</div>
	      		<button id="btn-sign-up" class="btn btn-primary-cta-ent disabled" type="submit">Sign up</button>
	      		<p class="sub-enterprise">Looking for enterprise procure-to-pay? <a href="https://tradeshift.com/enterprise/solutions/buy" onclick="ga('send', 'event', 'Main Home Page Menu', 'Sign Up - Modal View', 'Enterprise Link - https://tradeshift.com/enterprise/solutions/buy')">Click here</a>.</p>
	      	</form>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal View of Marketo Forms2 -->
	<div class="modal fade" id="mktoModal2" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel">Ready to explore your options?</h3>
	        <p class="lead">We’ll contact you to set up a time to talk.</p>
	      </div>
	      <div class="modal-body">
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js" class="mktoForms2JS"></script>
			<form id="mktoForm_2288"></form>
			<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjst.marketo.com", "785-UHP-775", 2288, function(form) {
				    // Add an onSuccess handler
				    form.onSuccess(function(values, followUpUrl) {
				        // Get the form's jQuery element and hide it
				        form.getFormElem().hide();
				        // Return false to prevent the submission handler from taking the lead to the follow up url
					    ga('send', 'event', 'marketo', 'form submit');
				        return false;
				    });
				});
			</script>
			<div class="confirm-wrapper" id="confirmSubmit" style="display: none;"><p></p></div>
	      </div>
	    </div>
	  </div>
	</div>

<?php get_footer('main-only-v2'); ?>
