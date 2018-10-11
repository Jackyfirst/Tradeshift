 <?php
/*
Template Name: Landing Page - Go Test
*/
get_header('smb2'); ?>
	<!-- Main Content Starts -->
	<main class="main-content smb-page">
		<!-- Hero Section -->
		<div id="randomize-bg-hero" style="background: #F6AE00 url('<?php echo get_template_directory_uri(); ?>/img/smb/hero-bg-2-icon.jpg') no-repeat 45% top" class="hero simple-invoicing">
			<div class="container">
				<div class="row intro-text-cta-form">
					<div class="intro-text-cta">
						<h1>Simple invoicing that doesn't <em>suck</em></h1>
						<h3>If all you need is a simple invoicing solution, why rely on crappy accounting software?</h3>
						<button class="btn btn-primary-cta visible-xs" onclick="_gaq.push(['_trackEvent', 'Main CTA', 'Click', 'SMB - header button' ]);" data-toggle="modal" data-target="#regModal">Send invoices in 30 seconds</button>
					</div>
					<div class="cta-form hidden-xs">
						<h3>Create a free account now</h3>
						<p>Get started in 30 seconds</p>
						<div class="form-wrapper">
							<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
							<form id="mktoForm_1590" class="go-marketo-form"></form>
							<script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1590);</script>
						</div>
						<p class="agree-tos">By signing up, you are indicating that you have read and agree to Tradeshift's <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</p>
					</div>
					<div class="icon-smb visible-xs">
						<img src="<?php echo get_template_directory_uri(); ?>/img/smb/icon-smb.png" />
					</div>
				</div>
				<div class="row visible-xs">
					<div class="followup"><p>Use Tradeshift so you can get paid fast – and it's completely FREE.</p></div>
				</div>
			</div>
			<div class="arrow hidden-xs"></div>
		</div>
		<div class="invoicing">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Invoicing. Why's it gotta be so complicated?</h2>
						<p>Maybe you’re a building contractor, design freelancer, or business consultant. You don’t need anything fancy, just something that’s fast, free and it works.</p>
						<p>Maybe you run a small business and don't want to waste your time over-analyzing the billing process with your client. Or maybe you've tried a big, clunky accounting software and realized you didn’t need all the bells and whistles; you just wanted something simple.</p>
						<p><em>All you really want is a way to create invoices online and send them to your clients fast.</em></p>
						<p>Frankly, you’d rather spend your time doing the stuff you’re actually getting paid for.</p>
						<p>If this sounds like you, here’s where Tradeshift comes in.<p>
						<p><em>Tradeshift is a lightweight way to invoice your customers that’s completely free, no matter how many invoices you send and receive.</em></p>
					</div>
				</div>
			</div>
		</div>
		<div class="value">
			<div class="container">
				<div class="row">
					<div class="free-invoices">
						<div class="icon-clock"></div>
						<h4>Send free invoices in 2 minutes</h4>
						<p>Create invoices that are simple, professional and allow room for quotes, taxes, PO #s, and price in your local currency.</p>
					</div>
					<div class="get-paid-faster">
						<div class="icon-enter-right"></div>
						<h4>Get visibility and get paid 5x faster</h4>
						<p>See all your activity right in your dashboard. You can receive faster payments and responses to your questions about when your invoice will be paid. </p>
					</div>
					<div class="export-sales">
						<div class="icon-wallet"></div>
						<h4>Export your yearly sales</h4>
						<p>With our customized filters, you can export your yearly sales and easily calculate your income. </p>
					</div>
					<div class="find-new-clients">
						<div class="icon-binoculars"></div>
						<h4>Find new clients internationally</h4>
						<p>Connect with enterprise buyers who are already on the Tradeshift platform like ADM, KLM, LinkedIn, CBRE, and NHS.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="no-upsell">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Invoicing you don't have to think about.</h2>
						<p>With Tradeshift, there’s no up-selling you to a subscription service, and you don’t waste time trying to learn it (or teach your people). Using our software is intuitive for all of your team members.</p>
						<p>If you want to send invoices faster, track your payments, manage your cashflow, add taxes, give discounts, and export your yearly sales, you’ve found your solution.</p>
						<p>If you want to send and check in on invoices from anywhere on your mobile phone or tablet, you can.</p>
						<p>If you want a way to use Tradeshift with other payment systems like <em>Paypal, Quickbooks Online and Sage, you should try Tradeshift.</em></p>
						<p>Tradeshift makes free e-invoicing quick and easy, so you can focus on what matters most.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonials">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>See what they're saying about us</h2>
						<div class="owl-carousel" id="g2-carousel" >
							<div class="quote-wrapper">
								<blockquote>
									<p>I have recommended Tradeshift to many independent contractors who are good at what they do, but don't have strengths in keeping track of their own administration. It solves a problem for both them as the vendor,and our company as the client.</p>
									<footer><cite><a href="https://www.g2crowd.com/survey_responses/tradeshift-review-59000" target="_blank">Leslie Brown, Development Executive</a></cite></footer>
								</blockquote>
							</div>
							<div class="quote-wrapper">
								<blockquote>
									<p>The business problems I solved using Tradeshift is a digital way for creating professional invoices that could be sent via email, and also could be paid online using PayPal.</p>
									<footer><cite><a href="https://www.g2crowd.com/survey_responses/tradeshift-review-58989" target="_blank">Robert Smith, Administrator</a></cite></footer>
								</blockquote>
							</div>
							<div class="quote-wrapper">
								<blockquote>
									<p>Probably the hardest question, there is so much to like. First of all, its free - which is both surprising and fantastic in that there are no commitments when you start using it. Secondly, TradeShift works out of the box.</p>
									<footer><cite><a href="https://www.g2crowd.com/survey_responses/tradeshift-review-59144" target="_blank">Dylan Robinson, Administrator</a></cite></footer>
								</blockquote>
							</div>
						</div>
						<div class="poweredby">
							<a href="https://www.g2crowd.com/products/tradeshift/reviews" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/smb/powered-G2.png" width="172" alt="Powered by G2 Crowd" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="randomize-bg-footer" class="sign-up" style="background: #20A0E9 url('<?php echo get_template_directory_uri(); ?>/img/smb/cta-bg-2.jpg') no-repeat center bottom">
			<div class="container">
				<div class="row">
					<h2>Sign up for free, professional invoicing</h2>
					<button class="btn btn-primary-cta" onclick="_gaq.push(['_trackEvent', 'Main CTA', 'Click', 'SMB - footer button' ]);" data-toggle="modal" data-target="#regModal">Take me to my free account</button>
				</div>
			</div>
			<div class="arrow"></div>
		</div>
		<div class="what-else">
			<div class="container">
				<div class="row">
					<h2>What else can Tradeshift do for your small business?</h2>
					<div class="features">
						<ul class="features-1">
							<li>Free Cloud-Based E-invoicing</li>
							<li>Professional Invoice Templates</li>
							<li>Apps that work with Paypal, Quickbooks &amp; Others</li>
							<li>Access from Mobile and Tablet</li>
							<li>Customizable Company Profiles</li>
						</ul>
						<ul class="features-2">
							<li>Get History Reports of Your Documents</li>
							<li>Send Free Quotes, POs and Credit Notes</li>
							<li>List Your Product and Services</li>
							<li>International Business Directories</li>
						</ul>
					</div>
					<div class="screenshot" data-toggle="modal" data-target="#regModal">
						<button class="cta">Take me to my <em>free account</em></button>
					</div>
				</div>
			</div>
		</div>
		<div class="fill-out-form">
				<div class="container">
					<div class="row">
						<h2>Learn how Tradeshift can help your enterprise.</h2>
						<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
							<div class="form-group">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary-cta" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
							</div>
						</form>
					</div>
					<div class="row">
						<p class="sub">Tradeshift takes your privacy seriously.<br /> We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
					</div>
				</div>
			</div>
		</main>
		<!-- Modal View of Marketo Forms2 -->
		<!-- <div class="modal fade" id="mktoModal" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 id="myModalLabel">Request a Demo</h3>
		        <p class="lead">Start your journey with a free demo today.</p>
		      </div>
		      <div class="modal-body">
		        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_1143"></form>
				<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1143, function(form){
		           form.vals({"Marketing_Resource_Name__c":"SMB Sandbox"});
		           form.onSubmit(function(){
		              ga('send', 'event', 'Main CTA', 'Submit', 'SMB Sandbox');
		           });
		    	});
				// ]]></script>
		      </div>
		    </div>
		  </div>
		</div>
	Modal View of Registration -->
	<!-- <div class="modal modal-smb fade" id="regModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 id="myModalLabel">Create a free account now</h3>
					<p class="lead">Get started in 30 seconds.</p>
				</div>
				<div class="modal-body">
					<form id="smbFormModal" method="post">
						<input type="hidden" name="from" value="NzU4MjQ3NDg=" />
						<input type="hidden" name="s_page" id="s_page" value="" />
						<input type="hidden" class="timezone" name="timezone" value="" />
						<div class="form-group">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" required="required" tabindex="1"  placeholder="Email Address" data-default="Email"/>
						</div>
						<div class="form-group">
							<label for="companyName">Company</label>
							<input name="companyName" id="companyName" required="required" type="text" tabindex="2" placeholder="Company Name"  />
						</div>
						<div class="form-group">
							<label for="country">Country</label>
							<select name="country" tabindex="3">
							<?php get_template_part( 'components/form', 'countries-dropdown' ); ?>
							</select>
						</div>
						<div class="form-group">
							<input type="submit" disabled="disabled" tabindex="4" value="Send your first invoice" class="btn btn-primary-cta" onclick="_gaq.push(['_trackEvent', 'Main CTA', 'Click', 'SMB - header button' ]);" />
						</div>
					</form>
					<p class="agree-tos"><small>By signing up, you are indicating that you have read and agree to Tradeshift's <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</small></p>
				</div>
			</div>
		</div>
	</div> -->
	<script>
	// Grab the UTM parameters from the URL
	// stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
	function getParameterByName(name) {
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
			var results = regex.exec(location.search);
			return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	function getRegisterSubmitUrl() {
			var url = 'https://onboarding-sandbox.tradeshift.com/register/register';
			url += params.length > 0 ? '?' + params.join('&') : '';
			return url;
	}
	var params = [];
	['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'].forEach(function(param) {
			var value = getParameterByName(param);
			if (!!value) {
				params.push([param, value].join('='));
			}
	});
	var modalPopupform = document.getElementById('smbFormModal');
	analytics.trackForm(modalPopupform, 'Passed', function() {
		return {
			'First UTM Medium': utm_medium,
			'First UTM Source': utm_source,
			'First UTM Campaign': utm_campaign
		};
	});
	var heroForm = document.getElementById('smbForm');
	analytics.trackForm(heroForm, 'Passed', function() {
		return {
			'First UTM Medium': utm_medium,
			'First UTM Source': utm_source,
			'First UTM Campaign': utm_campaign
		};
	});

	$(document).ready(function() {
		// for FormValidation client side | uses the FormValidation.io library
		$('#smbForm, #smbFormModal').formValidation({
				framework: 'bootstrap',
				icon: {
						valid: 'fa fa-2x fa-check',
						invalid: 'fa fa-2x fa-times',
						validating: 'fa fa-2x fa-refresh'
				},
				fields: {
						email: {
							validators: {
									notEmpty: {
											message: 'Your email address is required'
									},
									emailAddress: {
											message: 'Please enter a valid email address'
									}
							}
					},
						companyName: {
								validators: {
										notEmpty: {
												message: 'A company name is required'
										}
								}
						}
				}
		}).on('success.field.fv', function(e, data) {
			if (!data.fv.isValid()) {
				data.fv.disableSubmitButtons(true);
			}
		}).on('success.form.fv', function(e, data) {
			e.preventDefault();
			var $form = $(e.target);
			$form.attr('action', getRegisterSubmitUrl());
			if (!analytics.initialize) {
				$form.data('formValidation').defaultSubmit();
			}
		}).on('err.form.fv', function(e, data) {
			var $form = $(e.target);
			$form.attr('action', '');
		});

		// Let's call the Quote Carousel plugin shall we
		$("#g2-carousel").owlCarousel({
			items : 3,
			autoPlay : 4000,
			stopOnHover: true,
			itemsDesktop : [2540,1],
			itemsDesktopSmall : [1199,1],
			itemsTablet: [768,1],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
			lazyLoad : false,
			lazyFollow : true,
			lazyEffect : "fade",
		});

		(function randomizeBackgroundImage() {
			var randomNumber = Math.floor((Math.random() * 1000) + 1);
			if (randomNumber % 2 == 1) {
				$('#randomize-bg-hero, #randomize-bg-footer').addClass('baker');
			} else {
				$('#randomize-bg-hero, #randomize-bg-footer').addClass('designer');
			}
		})();
	});
	</script>
<?php get_footer('smb'); ?>
