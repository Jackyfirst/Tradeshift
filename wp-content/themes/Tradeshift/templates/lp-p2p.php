 <?php
/*
Template Name: Landing Page - P2P
*/
get_header('lp-p2p'); ?>
	<main class="main-content lp-p2p">
		<div id="sectionHero" class="section-view section-hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1>Procure smarter.<br />Process faster.</h1>
						<h2>Collaborative, agile procure&#8209;to&#8209;pay gets you there.</h2>
					</div>
				</div>
				<div class="row">
					<div id="heroForm" class="form-container">
						<div id="formWrapper" class="form-wrapper">
						<?php if (is_page('4725')): ?>
							<style>
								@media (min-width: 992px) {
								  button[type="button"].btn-cta {
								    margin: 0 0 0 -30px !important;
								  }
								}
							</style>
							<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
								<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">See it in action</button>
							</form>
						<?php else: ?>
							<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
								<button type="button" class="btn btn-cta" id="initialEmailFormField" data-toggle="modal" data-target="#mktoModal">See it in action</button>
							</form>
						 <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs hidden-sm">Learn more</div>
		</div>
		<div id="sectionOne" class="section-view section-one">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Connected, innovative, modern procure-to-pay</h2>
						<p>Collaboration drives agile, effective procure-to-pay. Manage all of your spend, get total global compliance, and realize industry-leading user and supplier adoption rates. Tradeshift is your partner, the modern choice to enable end-to-end business commerce between you and your entire supply chain.</p>
					</div>
				</div>
				<div class="row">
					<div id="s1Form" class="form-container"> </div>
				</div>
			</div>
		</div>
		<div id="sectionTwo" class="section-view section-two">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>High-performing procure-to-pay realized through collaboration</h2>
						<div class="platform-list">
							<div class="icon-stat">74%</div>
							<h4>Compliant transactions</h4>
							<p>Capture more savings—a must when shaping your P2P strategy. Only an end-to-end approach can get you where you need to be.</p>
						</div>
						<div class="platform-list">
							<div class="icon-stat">90%</div>
							<h4>Spend under management</h4>
							<p>Influence 90% of total spend—a clear testament of high-performing, best-in-class procurement organizations.</p>
						</div>
						<div class="platform-list">
							<div class="icon-stat">53%</div>
							<h4>Reduction in P2P cycle time</h4>
							<p>Reduce cycle times to improve service levels, boost supplier and user satisfaction, and drive efficiency across all financial operations.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="contents">
						<small>Source: Ardent Partners &amp; The Hackett Group *Results achieved by best-in-class procurement leaders</small>
					</div>
				</div>
			</div>
		</div>
		<div id="sectionQuote1" class="section-view section-q">
			<div class="container">
				<div class="row">
					<div class="contents">
						<blockquote>
							<p class="quote">Tradeshift is an e-procurement solution to watch — the only one we are aware of that uses internal platform and network capabilities, integrating them seamlessly with internal and third-party apps to enable an ever-expanding P2P vision….the most interesting P2P product launch since the days of Ariba ORMS and Commerce One...</p>
							<footer class="quote-footer">&mdash; Jason Busch, Spend Matters</footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
		<div id="sectionThree" class="section-view section-three">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>We understand your P2P priorities</h2>
						<h3>How are you achieving the goals that matter to you?</h3>
						<div class="icons-feature cost">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p/icon-cost.png" />
							<p>Manage costs &amp; compliance</p>
						</div>
						<div class="icons-feature hands">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p/icon-hands.png" />
							<p>Improve efficiency</p>
						</div>
						<div class="icons-feature graph">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p/icon-graph.png" />
							<p>Build healthy relationships</p>
						</div>
						<div class="icons-feature bulb">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p/icon-bulb.png" />
							<p>Facilitate innovation</p>
						</div>
						<div class="icons-feature arrow">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p/icon-arrow.png" />
							<p>Enable agility</p>
						</div>
					</div>
				</div>
				<div class="row row-form">
					<div class="contents">
						<div id="modernSolution" class="form-container"> </div>
					</div>
				</div>
			</div>
		</div>
		<div id="sectionQuote2" class="section-view section-q">
			<div class="container">
				<div class="row">
					<div class="contents">
						<blockquote>
							<p class="quote">One reason Tradeshift has grown is because of the way...companies can use [Tradeshift] to connect their businesses, manage their supply chains, and get the tools to manage complicated issues such as tax compliance... </p>
							<footer class="quote-footer"><img src="<?php echo get_template_directory_uri(); ?>/img/p2p/logo-wsj.png" /></footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
		<div id="sectionFour" class="section-view section-four">
			<div class="container">
				<div class="row">
					<div class="contents-cta">
						<h2>P2P as it should be, simple &amp; collaborative</h2>
						<p>When procure-to-pay is collaborative, connecting all your people, processes, and suppliers in one place, you drive greater business value and enterprise-wide agility.</p>
						<p><strong>See how Tradeshift can help</strong></p>
						<div id="s4Form" class="form-container"> </div>
					</div>
					<div class="contents-boxgrid">
						<div class="boxgrid grid-purple"><strong>Gain control of your spend</strong> &mdash; better strategic decision-making and capturing real cost savings.
						</div>
						<div class="boxgrid grid-green"><strong>Barrier-free business</strong> &mdash; no fees for your suppliers, no limits to your growth.
						</div>
						<div class="boxgrid grid-yellow"><strong>Total global compliance</strong> &mdash; for total confidence</div>
						<div class="boxgrid grid-blue"><strong>Fuel your growth</strong> &mdash; facilitate innovation through communication and supplier engagement.</div>
						<div class="boxgrid grid-black"><strong>Enable agility</strong> &mdash; flexible solutions streamline and simplify your P2P processes, so you can respond quickly to changes.</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sectionFive" class="section-view section-five">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Do today what will produce profits tomorrow</h2>
						<p>Start driving results now with the most powerful, cost-effective, accessible tool in your shed. <a href="https://tradeshift.com/resources/building-procurement-agility-with-collaborative-p2p/" target="_blank">Download Now</a></p>
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
			<form id="mktoForm_1858"></form>
			<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1858);
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
						analytics.track('Procure to pay Form Submit', {
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
	});
	</script>
	<?php endif; ?>
	<!-- Waypoint library triggered for all viewports -->
	<script>
	jQuery(document).ready(function($){
		var $formBlock = $('#formWrapper');

		// Detach/Append when entering Hero Section
		new Waypoint({
		    element: document.getElementById('sectionHero'),
		    handler: function(down) {
		      $formBlock.detach()
	          $formBlock.appendTo('#heroForm');
	          $('#initialEmailFormField').text('See it in action');
	          $('.mktoButton').text('See it in action');
		    },
		    offset: -110
		 });
		new Waypoint.Inview({
		    element: document.getElementById('sectionHero'),
		    enter: function(down) {
		      $formBlock.detach()
	          $formBlock.appendTo('#heroForm');
		    }
		  });
		// Detach/Append when entering Section One
		new Waypoint({
			element: document.getElementById('sectionOne'),
			handler: function() {
		        $formBlock.detach();
		        $formBlock.appendTo('#s1Form');
		        $('#initialEmailFormField').text('Let\'s connect');
		        $('.mktoButton').text('Let\'s connect');
		        $('#navLoginRow, #navMainRow, .sub-nav-main-wrapper').removeClass('nots1').addClass('nots1');
		      	$('#header-nav').removeClass('section-first');
			},
			offset: 110
		});
		// Detach/Append form on Section Four when entering Section Three
		new Waypoint({
			element: document.getElementById('sectionThree'),
			handler: function() {
		        $formBlock.detach();
		        $formBlock.appendTo('#s4Form');
		        $('#initialEmailFormField').text('Show me');
		        $('.mktoButton').text('Show me');
			}
		});

	});
	</script>
<?php get_footer('lp-p2p'); ?>
