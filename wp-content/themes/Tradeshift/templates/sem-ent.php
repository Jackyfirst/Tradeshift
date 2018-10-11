 <?php
/*
Template Name: Landing Page - SEM Enterprise
*/
get_header('sem-ent'); ?>
<style type="text/css">
	.non-active {
    		display: none;
		}
	.promo-banner {
		position: static;
	}
	form#mktoForm_2904 {
		width: 320px !important;
		margin-top: 48px !important;
  	}
	form.mktoForm, form#mktoForm_2904 {
		width: 300px !important;
		margin: auto !important;
	}
	@media (min-width: 992px) {
		.vidyard_tbox {
		width: 980px !important;
		height: 560px !important;
		}
     }
	.form-container .mktoHtmlText {
		font-size: 16px !important;
		font-weight: 400 !important;
		margin-left: 0px !important;
		color: #3c3c3c !important;
	}
	@media (max-width: 992px) {
		.form-container .mktoHtmlText  {
			width: 300px !important;
			margin-bottom: 11px;
			margin-top: 11px;
			display: inline-block;
		}
		.resource-container h3 {
			font-size: 21px;
			line-height: 30px;
			margin-bottom: 0px;
		}
		.vidyard-cta-holder .resource-container .contents {
			padding: 10px 22px !important;
			text-align: center;
		}
	}
    @media (min-width: 992px) {
        .vidyard_tbox {
           width: 980px !important;
           height: 560px !important;
        }
    }
	@media (min-width: 992px) {
		.vidyard_tinner, .vidyard_tcontent, #vidyard_span_5Y89uZo5KkBcpvVRHvf873 {
		    width: 100% !important;
		    height: 100% !important;
		}
	}
	@media (min-width: 992px) {
		.vidyard_tinner, .vidyard_tcontent, #vidyard_span_5Y89uZo5KkBcpvVRHvf873 {
			width: 100% !important;
			height: 100% !important;
		}
	}
	.resource-container h3 {
	    font-size: 34px;
	    line-height: 40px;
	    margin-bottom: 0px;
	}

/*	@media (max-width: 992px) {
           .form-container .mktoHtmlText  {
            margin-bottom: 11px !important;
            margin-top: 11px !important;
        }
        .resource-container h3 {
            font-size: 21px;
            line-height: 30px;
            margin-bottom: 0px;
        }
        .resource-container p {
          font-size: 14px;
          line-height: 22px;
      }
        .vidyard-cta-holder .resource-container .contents {
            padding: 10px 22px !important;
            text-align: center;
        }
    .vidyard-cta-holder .resource-container .contents {
      padding: 0px 22px !important;
    }
              }*/

              .modal .mktoForm input[type=text], .modal .mktoForm input[type=url], .modal .mktoForm input[type=email], .modal .mktoForm input[type=e-mail], .modal .mktoForm input[type=tel], .modal .mktoForm input[type=number], .modal .mktoForm input[type=date], .modal .mktoForm select.mktoField, .modal .mktoForm textarea.mktoField, .cta-form .mktoForm input[type=text], .cta-form .mktoForm input[type=url], .cta-form .mktoForm input[type=email], .cta-form .mktoForm input[type=e-mail], .cta-form .mktoForm input[type=tel], .cta-form .mktoForm input[type=number], .cta-form .mktoForm input[type=date], .cta-form .mktoForm select.mktoField, .cta-form .mktoForm textarea.mktoField {
              	width: 100% !important;
              }
</style>
	<main class="main-content lp-p2p">
		<div id="sectionHero" class="section-view section-hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1>The Enterprise Procurement, Payables &amp; Supplier Management Platform</h1>
						<h2>Simplify the way you buy, pay and connect</h2>
						<button type="button" class="btn btn-cta visible-xs" id="initialEmailFormField" data-toggle="modal" data-target="#mktoModal">Request a demo</button>
					</div>
					<div class="hero-form pull-right hidden-xs">
						<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_2904"></form>
						<script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2904);</script>
					</div>
				</div>
			</div>
			<a href="#sectionOne"><div class="icon-down-arrow hidden-xs">Learn more</div></a>
		</div>
		<div id="sectionOne" class="section-view section-one">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Capture more savings. Generate more value.</h2>
						<h3>Make doing businesses simple with an all-in-one flexible business commerce platform for everything from enterprise procurement, to full spectrum procure-to-pay, to supplier engagement, financial solutions, and a marketplace.</h3>
						<div class="icons-feature">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-p2p.png" class="img-responsive" />
							<h4>Procure to Pay</h4>
							<p>Simple solutions for all aspects of the procure-to-pay process—like catalogs, purchasing, logistics, document management, and payments.</p>
						</div>
						<div class="icons-feature">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-se.png" class="img-responsive" />
							<h4>Supplier Engagement</h4>
							<p>Easy management of all important supplier <br class="visible-md visible-lg">data—performance, profiles, regulatory and risk <br class="visible-md visible-lg">information—in one place.</p>
						</div>
						<div class="icons-feature">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-market.png" class="img-responsive" />
							<h4>Marketplace</h4>
							<p>A convenient place to connect and do business, featuring solutions for content management, discoverability, and information exchange.</p>
						</div>
						<div class="icons-feature">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/icon-innovation.png" class="img-responsive" />
							<h4>Business Apps</h4>
							<p>Easily expand your solution with our flexible platform. Use standard apps, or create a bespoke app for a solution that meets your specific needs.</p>
						</div>
						<button class="btn btn-cta" data-toggle="modal" data-target="#mktoModal">Let's connect</button>
					</div>
				</div>
			</div>
		</div>
		<div id="sectionTwo" class="section-two">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Tradeshift by the numbers</h2>
						<div class="analytics">
							<h3>400%+ Growth in Supplier Accounts</h3>
							<p>We’ve focused on suppliers from the start. Innovative supplier targeting + free for suppliers + modern integration = high adoption rates.</p>
						</div>
						<div class="analytics">
							<h3>800,000+ Businesses</h3>
							<p>Our worldwide network is expanding fast with buyers and suppliers from nearly every country collaborating through Tradeshift.</p>
						</div>
						<div class="analytics">
							<h3>Billions in monthly transactions</h3>
							<p>The platform handles billions of dollars in transacted value each month, with 250% year-over-year growth in 2015 alone.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="contents">
					</div>
				</div>
			</div>
		</div>
		<style type="text/css">
		</style>
		<div id="sectionThree" class="section-three">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>See how easy it can be to deliver savings, enable agility, and drive real business value</h2>
						<!-- <script type="text/javascript" id="vidyard_embed_code_MqTqvKdRAaqcH6sEGm1zXG" src="//play.vidyard.com/MqTqvKdRAaqcH6sEGm1zXG.js?v=3.1.1&type=lightbox"></script>
						<img src="<?php echo get_template_directory_uri() ?>/img/SEM/product-sc.jpg" class="img-responsive hidden-xs" onclick="fn_vidyard_MqTqvKdRAaqcH6sEGm1zXG();" />
						<img src="<?php echo get_template_directory_uri() ?>/img/SEM/product-sc-xs.jpg" class="img-responsive visible-xs" onclick="fn_vidyard_MqTqvKdRAaqcH6sEGm1zXG();" /> -->


						<script type="text/javascript" id="vidyard_embed_code_5Y89uZo5KkBcpvVRHvf873" src="//play.vidyard.com/5Y89uZo5KkBcpvVRHvf873.js?v=3.1.1&type=lightbox"></script>
						<img src="<?php echo get_template_directory_uri() ?>/img/SEM/product-sc.jpg" class="img-responsive hidden-xs" onclick="fn_vidyard_5Y89uZo5KkBcpvVRHvf873();" />
						<img src="<?php echo get_template_directory_uri() ?>/img/SEM/product-sc-xs.jpg" class="img-responsive visible-xs" onclick="fn_vidyard_5Y89uZo5KkBcpvVRHvf873();" />

					</div>
				</div>
				<div class="row">
					<div class="contents">
					</div>
				</div>
			</div>
		</div>
		<div id="sectionQuote1" class="section-q">
			<div class="container">
				<div class="row">
					<div class="contents">
						<blockquote>
							<p class="quote">Tradeshift is an e-procurement solution to watch — the only one we are aware of that uses internal platform and network capabilities, integrating them seamlessly with internal and third-party apps to enable an ever-expanding P2P vision…the most interesting P2P product launch since the days of Ariba ORMS and Commerce One...</p>
							<footer class="quote-footer">&mdash; Jason Busch, Spend Matters</footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
		<div id="sectionFour" class="section-four">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Learn how Tradeshift can help your enterprise</h2>
						<button class="btn btn-cta" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
					</div>
				</div>
			</div>
		</div>
		<div id="promoBanner" class="promo-banner animated">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="promo-location-posts" data-country="us">
							<div class="promo-wrapper report">
								<div class="listing">
									<div class="type-date">Report</div>
									<div class="title"><a class="trigger-promo-banner trigger-promo-banner-title hidden-xs" href="https://tradeshift.com/resources/guide-to-procure-to-pay/" target="_blank">eBook:<br>The Ultimate Guide to<br>Procure-to-pay Success</a></div>
									<div class="title"><a class="trigger-promo-banner trigger-promo-banner-title visible-xs" href="https://tradeshift.com/resources/guide-to-procure-to-pay/" target="_blank">Case Study:<br> A New Beginning for Enterprise eProcurement</a></div>
									<div class="cta"><a class="trigger-promo-banner trigger-promo-banner-cta" href="https://tradeshift.com/resources/guide-to-procure-to-pay/" target="_blank">Download now &raquo;</a></div>
								</div>
							</div>
							<div class="promo-wrapper report">
								<div class="listing">
									<div class="type-date">Report</div>
									<div class="title"><a class="trigger-promo-banner trigger-promo-banner-title hidden-xs" href="http://tradeshift.com/resources/case-study-adm-calls-in-digital-support/" target="_blank">eBook:<br>
									<div class="title"><a class="trigger-promo-banner trigger-promo-banner-title" href="http://tradeshift.com/resources/ts-buy/" target="_blank">A New Beginning for<br>Enterprise e-procurement</a></div>
									<div class="cta"><a class="trigge-promo-banner trigger-promo-banner-cta" href="http://tradeshift.com/resources/ts-buy/" target="_blank">Download now &raquo;</a></div>
								</div>
							</div>
						</div>
						<div class="promo-location-posts inactive" data-country="france"></div>
						<div class="promo-location-posts inactive" data-country="germany"></div>
						<div class="promo-location-posts inactive" data-country="uk"></div>
					</div>
				</div>
			</div>
		</div>

		
		<!-- Footer Area -->
		<footer id="footer-sitewide" class="section fp-auto-height footer-main-only sitewide-menu">
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
	<!-- Modal View of Marketo Forms2 -->
	<div class="modal fade" id="mktoModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel">Ready to explore your P2P options?</h3>
	        <p class="lead">We’ll contact you to set up a time to talk.</p>
	      </div>
	      <div class="modal-body">
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_2941"></form>
			<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2941);
				// ]]>
				MktoForms2.whenReady(function(form){
				 	//Add an onSuccess handler
					form.onSuccess(function(values, followUpUrl){
						// Hide the form when submitted
						//form.getFormElem().hide();
						// show thank you message and clear fields
						$('#mktoModal').modal('hide'); 
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
						analytics.track('Enterprise Procurement Platform Form Submit', {
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
	<!-- Execute this JS snippet on non-smartphone -->
	<?php if (!is_mobile()): ?>
	<script>
	jQuery(document).ready(function($){
		// Put main nav to default when on Hero Section
		new Waypoint({
			element: document.getElementById('sectionHero'),
			handler: function() {
		        $('#navLoginRow, #navMainRow, .sub-nav-main-wrapper').removeClass('nots1')
		      	$('#header-nav').removeClass('section-first');
			},
			offset: -110
		});
		new Waypoint.Inview({
		    element: document.getElementById('sectionHero'),
		    enter: function(up) {
		      $('#navLoginRow, #navMainRow, .sub-nav-main-wrapper').removeClass('nots1');
		      $('#header-nav').addClass('section-first');
		    }
		 });

		//  Revise nav height on Section One
		new Waypoint({
			element: document.getElementById('sectionOne'),
			handler: function() {
		        $('#navLoginRow, #navMainRow, .sub-nav-main-wrapper').removeClass('nots1').addClass('nots1');
		      	$('#header-nav').removeClass('section-first');
			}
		});


		$('a[href*="#"]:not([href="#"])').click(function() {
	  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	    if (target.length) {
	      $('html, body').animate({
	        scrollTop: target.offset().top
	      }, 1000);
	      return false;
	    }
	  }
	});

	});

	</script>
	<?php endif; ?>
	<!-- Waypoint library triggered for all viewports -->
<?php get_footer('lp-p2p'); ?>
