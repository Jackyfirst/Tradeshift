<?php
/*
* Template Name: Go v3 - Landing Page
* Do not write over this file
* If you end up using custom Partners page, save this file as another template first
* then rename it
*/
get_header('main'); ?>
<!-- Main Content Starts -->
<main class="main cd-main-content main-content campaigns-go">
	<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
	<div id="heroTrigger" class="hero section-view">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div id="heroFormBlock" class="contents-copy">
						<h2><?php _e("Tradeshift<sup>&reg;</sup> Go", 'Tradeshift'); ?></h2>
						<p><?php _e("Procure-to-Pay on the go for all your long-tail spend.", 'Tradeshift'); ?></p>

						<div class="hero-videoWrapper" style="width: 260px;height: 160px;background: url(<?php echo get_template_directory_uri() ?>/img/gov3/go-hero-video.jpg) no-repeat center center; background-size: cover;position: relative;">
							<script type="text/javascript" id="vidyard_embed_code_RrT8UzSBNj9KTCwNzDNhB5" src="//play.vidyard.com/RrT8UzSBNj9KTCwNzDNhB5.js?v=3.1.1&type=lightbox"></script>
							<div style="position: absolute;top: 50%;width:100%;transform: translateY(-50%);-ms-transform: translateY(-50%);"><button class="btn btn-play-white" style="display: block;margin: auto"  onclick="fn_vidyard_RrT8UzSBNj9KTCwNzDNhB5();"> </button></div>
						</div>

						<button style="margin-top: 20px; text-align: center;" type="button" class="btn btn-secondary-cta" data-toggle="modal" data-target="#mktoModal2">
							<div style="text-align: center;"><?php _e("Get Started"); ?></div>
						</button>
					</div>
					<div class="contents-image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-device-image-cc.png" />
					</div>
				</div>
			</div>
		</div>
		<a href="#valueProp"><div class="icon-down-arrow hidden-xs"><?php _e("Learn more"); ?></div></a>
	</div>
	<div id="valueProp" class="value-proposition">
		<a name="get-full-report"></a>
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Get the convenience and speed of a credit card <span>with the visibility and control of a procurement system.</span>", 'Tradeshift'); ?></h2>
					<div class="go-benefits visibility">
						<div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-icon-visibility-into-spend.png" class="img-responsive" /></div>
						<p><?php _e("Capture, manage, and gain visibility into spend not managed <br class=\"hidden-xs hidden-sm\">by procurement", 'Tradeshift'); ?></p>
					</div>
					<div class="go-benefits approvals">
						<div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-icon-msg-ellipses.png" class="img-responsive" /></div>
						<p><?php _e("Get a simple, real-time, collaborative process that makes it easy for users to get <br class=\"hidden-xs hidden-sm\">pre-approvals", 'Tradeshift'); ?></p>
					</div>
					<div class="go-benefits processes">
						<div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-icon-raquo.png" class="img-responsive" /></div>
						<p><?php _e("Complement your existing procurement and accounts payable systems and processes", 'Tradeshift'); ?></p>
					</div>
					<div class="go-benefits invoices">
						<div class="img-container"><img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-icon-invoices.png" class="img-responsive" /></div>
						<p><?php _e("Shrink number of invoices processed and master data maintenance with a single credit card statement", 'Tradeshift'); ?></p>
					</div>
					<div class="slide-text">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-top-bar.jpg" alt="" class="topBar img-responsive" />
						<h2><?php _e("How much does it cost <br class=\"visible-lg\">you to process a<br class=\"visible-lg\">low-dollar invoice?", 'Tradeshift'); ?></h2>
						<h3><?php _e("How quickly can you bring in “emergency” products and services or fulfill expedited requests?", 'Tradeshift'); ?></h3>
						<p><?php _e("Tradeshift Go is a lightweight, collaborative virtual credit card solution for purchasing and payments. Go is great for all your long-tail purchases that are too small to be managed by procurement or too infrequent to be efficiently processed in a catalog system.", 'Tradeshift'); ?></p>
					</div>
					<div class="slider">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-slider-chair.png" alt="">
								</div>
								<div class="item">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-slider-laptop.png" alt="">
								</div>
								<div class="item">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-slider-headphones-no-shadow.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="how-it-works">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2 class="hidden-xs"><?php _e("Here’s how it works—it’s easy", 'Tradeshift'); ?></h2>
					<h2 class="visible-xs"><?php _e("How much does it cost you to process a low-dollar invoice?", 'Tradeshift'); ?></h2>
					<p class="intro hidden-xs"><?php _e("Tradeshift Go works with issuing banks to offer your employees the ability to make spot buys, emergency purchases, invoice payments, or other allowed credit card purchases.", 'Tradeshift'); ?></p>
					<p class="intro visible-xs"><?php _e("How quickly can you bring in “emergency” products and services or fulfill expedited requests?", 'Tradeshift'); ?>?</p>
					<p class="visible-xs intro-secondary"><?php _e("Tradeshift Go is a lightweight, collaborative virtual credit card solution for purchasing and payments. Go is great for all your long-tail purchases that are too small to be managed by procurement or too infrequent to be efficiently processed in a catalog system.", 'Tradeshift'); ?></p>
					<div class="product-screenshot hidden-xs">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-simple-requests-screenshot-v4.png" class="img-responsive" />
					</div>
					<div class="go-abilities">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-top-bar.jpg" alt="" class="topBar img-responsive" />
						<h3><?php _e("Simple requests", 'Tradeshift'); ?></h3>
						<p><?php _e("An employee creates a request from any device to make a purchase or pay an invoice. Fields are customizable so you can collect as little or as much information as you need.", 'Tradeshift'); ?></p>
						<h3><?php _e("Collaborate on approvals", 'Tradeshift'); ?></h3>
						<p><?php _e("Employees and approvers can quickly communicate in real-time about the request.", 'Tradeshift'); ?></p>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-simple-requests-screenshot.png" class="img-responsive visible-xs" style="margin-bottom: 22px" />
					<div class="product-screenshot hidden-xs" style="clear: both;">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-cc-approved.png" class="img-responsive pull-right" />
					</div>
					<div class="go-abilities">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-top-bar.jpg" alt="" class="topBar img-responsive" />
						<h3><?php _e("Convenience of a card", 'Tradeshift'); ?></h3>
						<p><?php _e("Once a request is approved, an encrypted virtual card number is sent to the employee with a spend limit. The employee uses the card to make the purchase or pay the invoice.", 'Tradeshift'); ?></p>
						<h3><?php _e("Track your spend", 'Tradeshift'); ?></h3>
						<p><?php _e("The purchase request has the information you need to identify the spend and tie it to the right accounting code.", 'Tradeshift'); ?></p>
						<h3><?php _e("Earn rebates", 'Tradeshift'); ?></h3>
						<p><?php _e("Your company receives rebates from the card company, based on a percentage of spend.", 'Tradeshift'); ?></p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-cc-approved.png" class="img-responsive pull-right visible-xs" style="margin-bottom: 22px" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		.blink {
			background: #a60261;
			/*transform: scale(1);*/
			animation: circleScale 2.5s infinite;
			z-index: 10;
			-webkit-box-shadow: 0px 0px 0px 11px rgba(246,229,239,1);
			-moz-box-shadow: 0px 0px 0px 11px rgba(246,229,239,1);
			box-shadow: 0px 0px 0px 11px rgba(246,229,239,1);
		}
		@keyframes circleScale {
			0% {transform: scale(0)  }
			50% { transform: scale(1) }
			100% { transform: scale(0) }
		}
	</style>
	<div class="benefits" id="benefits">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("More Benefits", 'Tradeshift'); ?></h2>
					<h3><?php _e("With Tradeshift Go, you can also:", 'Tradeshift'); ?></h3>
					<?php if( is_tablet() ): ?>
						<div style="height: 26px;margin: 22px 0 11px;"><span class="circle roi-circle visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
						<div class="benefits-container">
							<div class="benefits-item roi"><?php _e("<span>Get immediate ROI</span> with rebates from issuing banks and extend DPO on payments, but not at the expense of suppliers", 'Tradeshift'); ?></div>
							<div style="height: 26px;margin: 22px 0 11px;"><span class="circle manage-circle visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
							<div class="benefits-item works"><?php _e("<span>Go works on mobile</span><br>— employees can make purchase requests from any device, anywhere", 'Tradeshift'); ?></div>
							<div style="height: 26px;margin: 22px 0 11px;"><span class="circle process-circle  visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
							<div class="benefits-item manage"><?php _e("<span>Manage</span> against a budget or project and track spend", 'Tradeshift'); ?></div>
							<div style="height: 26px;margin: 22px 0 11px;"><span class="circle procurement-circle  purple visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
							<div class="benefits-item reduce"><?php _e("<span>Reduce process overhead</span><br>— no need to create master records in purchasing systems", 'Tradeshift'); ?></div>
							<div style="height: 26px;margin: 22px 0 11px;"><span class="circle works-circle purple visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
							<div class="benefits-item procurement"><?php _e("<span>Turn procurement</span> from a cost center to a profit generator with rebates", 'Tradeshift'); ?></div>

							<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-cc-circle-OK.png" class="cc-circle" />
							<img src="<?php echo get_template_directory_uri() ?>/img/gov3/go-cc-big.png" class="cc visible-xs visible-sm img-responsive" style="margin-top: 22px;display: block;margin: auto" /> <!--  ###### MOBILE ###### -->
						</div>
					<?php elseif( is_mobile() ): ?>
						<div style="height: 26px;margin: 22px 0 11px;"><span class="circle roi-circle visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
						<div class="benefits-container">
							<div class="benefits-item roi"><?php _e("<span>Get immediate ROI</span> with rebates from issuing banks and extend DPO on payments, but not at the expense of suppliers", 'Tradeshift'); ?></div>
							<div style="height: 26px;margin: 22px 0 11px;"><span class="circle manage-circle visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
							<div class="benefits-item works"><?php _e("<span>Go works on mobile</span><br>— employees can make purchase requests from any device, anywhere", 'Tradeshift'); ?></div>
							<div style="height: 26px;margin: 22px 0 11px;"><span class="circle process-circle  visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
							<div class="benefits-item manage"><?php _e("<span>Manage</span> against a budget or project and track spend", 'Tradeshift'); ?></div>
							<div style="height: 26px;margin: 22px 0 11px;"><span class="circle procurement-circle  purple visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
							<div class="benefits-item reduce"><?php _e("<span>Reduce process overhead</span><br>— no need to create master records in purchasing systems", 'Tradeshift'); ?></div>
							<div style="height: 26px;margin: 22px 0 11px;"><span class="circle works-circle purple visible-xs visible-sm"></span></div> <!--  ###### MOBILE ###### -->
							<div class="benefits-item procurement"><?php _e("<span>Turn procurement</span> from a cost center to a profit generator with rebates", 'Tradeshift'); ?></div>

							<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-cc-circle-OK.png" class="cc-circle" />
							<img src="<?php echo get_template_directory_uri() ?>/img/gov3/go-cc-big.png" class="cc visible-xs visible-sm img-responsive" style="margin-top: 22px;display: block;margin: auto" /> <!--  ###### MOBILE ###### -->
						</div>
					<?php else: ?>

						<div class="benefits-container">
							<div class="benefits-item roi"><?php _e("<span>Get immediate ROI</span> with rebates from issuing banks and extend DPO on payments, but not at the expense of suppliers", 'Tradeshift'); ?></div>
							<div class="benefits-item works"><?php _e("<span>Go works on mobile</span><br>— employees can make purchase requests from any device, anywhere", 'Tradeshift'); ?></div>
							<div class="benefits-item manage"><?php _e("<span>Manage</span> against a budget or project and track spend ", 'Tradeshift'); ?></div>
							<div class="benefits-item reduce"><?php _e("<span>Reduce process overhead</span><br>— no need to create master records in purchasing systems", 'Tradeshift'); ?></div>
							<div class="benefits-item procurement"><?php _e("<span>Turn procurement</span> from a cost center to a profit generator with rebates", 'Tradeshift'); ?></div>
							<span class="circle roi-circle visible-lg visible-md"></span>
							<span class="circle works-circle purple visible-lg visible-md"></span>
							<span class="circle manage-circle visible-lg visible-md"></span>
							<span class="circle process-circle purple visible-lg visible-md"></span>
							<span class="circle procurement-circle purple visible-lg visible-md"></span>
							<img src="<?php echo get_template_directory_uri(); ?>/img/gov3/go-cc-circle-OK.png" class="cc-circle" />
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="footerCta" class="footer-cta">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Go is fast and easy to implement: just set up users, coding, and cards to get started.", 'Tradeshift'); ?></h2>
					<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal2"><?php _e("Try Go today", 'Tradeshift'); ?></button>
				</div>
			</div>
		</div>
	</div>
</main>
<div id="ctaBar" class="cta-bar" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
	<div class="container">
		<div class="row">
			<div id="ctaBottomBar" class="contents">
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
				<h3 id="myModalLabel"><?php _e("Ready to explore your options?", 'Tradeshift'); ?></h3>
				<p class="lead"><?php _e("We’ll contact you to set up a time to talk.", 'Tradeshift'); ?></p>
			</div>
			<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_2288" class="campaign-go-form"></form>
				<script type="text/javascript">
					MktoForms2.whenReady(function(form){
						//Add an onSuccess handler
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
					});
				</script>
				<div class="confirm-wrapper" id="confirmSubmit" style="display: none;"><p></p></div>
			</div>
		</div>
	</div>
</div>
<div class="modal modal-sign-up fade" id="SignUpModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 id="myModalLabel"><?php _e("Get started with a free account.", 'Tradeshift'); ?></h3>
			</div>
			<div class="modal-body">
				<form id="form-sign-up">
					<div class="sign-up-list">
						<input type="checkbox" id="buy-sign-up" class="sign-up-checkbox" name="buy-sign-up" value="https://go.tradeshift.com/register" />
						<label for="buy-sign-up"><span></span><?php _e("<b>Enterprise</b> – Talk to one of our experts and get a demo.", 'Tradeshift'); ?></label>
					</div>
					<div class="sign-up-list">
						<input type="checkbox" id="sb-sign-up" class="sign-up-checkbox" name="sb-sign-up" value="https://go.tradeshift.com/register" />
						<label for="sb-sign-up"><span></span><?php _e("<b>Invoicing</b> – Send and receive invoices.", 'Tradeshift'); ?></label>
					</div>
					<div class="sign-up-list">
						<input type="checkbox" id="go-sign-up" class="sign-up-checkbox" name="go-sign-up" value="https://go.tradeshift.com/register" />
						<label for="go-sign-up"><span></span><?php _e("<b>Tradeshift<sup>&reg;</sup> Go</b> – A virtual assistant for spend &amp; travel.", 'Tradeshift'); ?></label>
					</div>
					<button id="btn-sign-up" class="btn btn-primary-cta-ent disabled" type="submit"><?php _e("Sign up"); ?></button>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
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
</script>
<?php
wp_deregister_script('main', 'legacyScripts', 'contact-form-7');
wp_deregister_style('contact-form-7');
get_footer();
?>
