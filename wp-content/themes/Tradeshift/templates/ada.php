 <?php
/*
Template Name: Landing Page - Ada
*/
get_header('ada'); ?>
	<main class="main-content ada">
		<!-- hero section -->
		<div id="sectionHero" class="section-view section-hero">
			<div class="container" style="position:relative;z-index: 9999">
				<div class="row">
					<div class="contents">
						<h1><?php _e('Ada, an AI Layer on the Tradeshift platform', 'Tradeshift'); ?></h1>
						<h2><?php _e('Ada is one smart cookie, and she learns fast.', 'Tradeshift'); ?></h2>
						<button type="button" class="btn btn-cta" id="initialEmailFormField" data-toggle="modal" data-target="#mktoModal">
							<?php _e('Get Ada updates', 'Tradeshift'); ?>
						</button>
					</div>
				</div>
			</div>
			<a href="#sectionOne"><div class="icon-down-arrow hidden-xs"><?php _e('Learn more', "Tradeshift"); ?></div></a>
			<div class="clear:both"></div>
		</div>
		<!-- section one -->
		<div id="sectionOne" class="section-view section-one">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="intro-txt">
							<h3><?php _e('Ada can help you work smarter and faster', 'Tradeshift'); ?></h3>
							<h4><?php _e('See how Ada helps Bob Parker complete tasks and get what he needs at lightning speeds.', 'Tradeshift'); ?></h4>
							<img src="<?php echo get_template_directory_uri(); ?>/img/ada/ada-profiles-ada-final.png" class="ada-profile" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/ada/ada-profiles-bob-final.png" class="bob-profile" />
						</div>
						<div class="ada-helps">
							<div class="content">
								<h4><?php _e('Ada Helps', 'Tradeshift'); ?></h4>
								<p><?php _e('Bob has general questions and needs some help understanding the procurement process, clarifying budget status and searching for a specific item. <br class="hidden-sm">Bob simply asks Ada questions within the chat interface.', 'Tradeshift'); ?> </p>
								<p><?php _e('Ada, having knowledge about Bob, his company and their preferences, provides him with instant information.', 'Tradeshift'); ?></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/img/ada/ada-screenshot-purchase.png" />
						</div>
						<div class="ada-suggests">
							<div class="content">
								<h4><?php _e('Ada Suggests', 'Tradeshift'); ?></h4>
								<p class="hidden-xs"><?php _e('Bob has been asked to approve a purchase. However, he recalls a similar request from the same employee. Bob simply asks Ada to verify this.', 'Tradeshift'); ?></p>
								<p class="hidden-xs"><?php _e('After the employee clarifies the item never arrived, Ada suggests an app on the Tradeshift platform to help make refunds seamless.', 'Tradeshift'); ?></p>
								<p class="visible-xs"><?php _e('Bob has been asked to approve a purchase. However, he recalls a similar request from the same employee. Bob simply asks Ada to verify<br>this.', 'Tradeshift'); ?></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/img/ada/ada-product-screenshot-receipt.png" />
						</div>
						<div class="ada-facilitates">
							<div class="content">
								<h4><?php _e('Ada Facilitates', 'Tradeshift'); ?></h4>
								<p><?php _e('Bob loves using the collaboration tool, Slack. Fortunately, so does Ada. Bob needs approval for a virtual card so that he can buy pizzas for his team meeting.', 'Tradeshift'); ?></p>
								<p class="hidden-xs"><?php _e('Ada facilitates this request by getting approval from his manager and requesting the virtual card.', 'Tradeshift'); ?></p>
								<p class="visible-xs"><?php _e('Ada facilitates this request by getting<br> approval from his manager and requesting the virtual card.', 'Tradeshift'); ?></p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/img/ada/ada-screenshot-slack.png" />
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- section two -->
		<div id="sectionTwo" class="section-view section-two">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h3><?php _e('Ada transforms all your decisions into the best decisions', 'Tradeshift'); ?></h3>
						<p><?php _e('Guided buying, quick access to data with effortless reporting, and smart recommendations to work smarter, faster, and save more money.', 'Tradeshift'); ?></p>
						
						<script type="text/javascript" id="vidyard_embed_code_AgSodiaJJZNPXPQACJgXBk" src="//play.vidyard.com/AgSodiaJJZNPXPQACJgXBk.js?v=3.1.1&type=lightbox"></script><div class="outer_vidyard_wrapper"><div class="vidyard_wrapper" onclick="fn_vidyard_AgSodiaJJZNPXPQACJgXBk();"><img width="100%" src="//play.vidyard.com/AgSodiaJJZNPXPQACJgXBk.jpg?" alt="Introducing, Tradeshift Ada."><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>


						<p style="clear: both;margin-bottom: 0px;padding-bottom: 0px;padding-top: 45px;margin-bottom: -5px;">
							<?php _e('Tradeshift CEO Christian Lanng on CNBC discussing AI and Banking Fintech', 'Tradeshift'); ?>
						</p>
						<script type="text/javascript" id="vidyard_embed_code_QX3FgBTToFyER23w4wY1Kr" src="//play.vidyard.com/QX3FgBTToFyER23w4wY1Kr.js?v=3.1.1&type=lightbox"></script><div class="outer_vidyard_wrapper"><div class="vidyard_wrapper" onclick="fn_vidyard_QX3FgBTToFyER23w4wY1Kr();"><img width="100%" src="//play.vidyard.com/QX3FgBTToFyER23w4wY1Kr.jpg?" alt="ada-video-uk" style="margin-top: 22px"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>
					</div>
				</div>
			</div>			
		</div>
		<div id="sectionThree" class="section-view section-three">
			<div class="container">
				<div class="row">
					<div class="contents">	
						<h3><?php _e('Make commerce simpler, faster, and smarter.', 'Tradeshift'); ?></h3>
						<p><?php _e('Be in-the-know for everything Ada.', 'Tradeshift'); ?></p>
						<button type="button" class="btn btn-cta" id="initialEmailFormField" data-toggle="modal" data-target="#mktoModal">
							<?php _e('Get Ada updates', 'Tradeshift'); ?>
						</button>
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
							<li id="menu-item-1358" class="SL_swap">
								<a title="Privacy Policy" href="/privacy-policy/" class="univ-footer-nav-links">
									<?php _e('Privacy', 'Tradeshift'); ?>
								</a>
							</li>
							<li id="menu-item-1360" class="SL_swap">
								<a title="Terms of Service" href="/terms-of-service/" class="univ-footer-nav-links">Terms of Service</a>
							</li>
							<li id="menu-item-1359" class="SL_swap"><?php _e('&copy;Tradeshift', 'Tradeshift'); echo date( 'Y' ); ?></li>
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
	        <h3 id="myModalLabel"><?php _e('Get started with a free account.', 'Tradeshift'); ?></h3>
	      </div>
	      <div class="modal-body">
	      <form id="form-sign-up">
	      	<div class="sign-up-list">
				<input type="checkbox" id="sb-sign-up" class="sign-up-checkbox" name="sb-sign-up" value="https://go.tradeshift.com/register" />
				<label for="sb-sign-up"><span></span><?php _e('Free Invoicing – Send and receive invoices for free.', 'Tradeshift'); ?></label>
			</div>
			<div class="sign-up-list">
				<input type="checkbox" id="go-sign-up" class="sign-up-checkbox" name="go-sign-up" value="/go" />
				<label for="go-sign-up"><?php _e('Tradeshift<sup>&reg;</sup> Go – A virtual assistant for spend &amp; travel.', 'Tradeshift'); ?></label>
			</div>
	      		<button id="btn-sign-up" class="btn btn-primary-cta-ent disabled" type="submit">
				      <?php _e('Sign up', 'Tradeshift'); ?>
			      </button>
	      		<p class="sub-enterprise">
				      <?php _e('Looking for enterprise procure-to-pay?', 'Tradeshift'); ?>
				      <a href="/enterprise/solutions/buy" onclick="ga('send', 'event', 'Main Home Page Menu', 'Sign Up - Modal View', 'Enterprise Link - https://tradeshift.com/enterprise/solutions/buy')"><?php _e('Click here', 'Tradeshift'); ?></a>.</p>
	      	</form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal View of Marketo Forms2 -->
	<div class="modal fade" id="mktoModal" tabindex="-1" translate="no">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel"><?php _e('Sign up to receive exclusive updates on everything Ada.', 'Tradeshift'); ?></h3>
	      </div>
	      <div class="modal-body sl_opaque">
	      	<h3 id="thankYouHeader" class="hide"><?php _e("Thank you!", "Tradeshift"); ?></h3>
	      	<div class="sl_opaque">
	        	<script class="opaque" src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
	        </div>
			<form id="mktoForm_2462"></form>
			<script type="text/javascript">
				MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2462);
				MktoForms2.whenReady(function(form){
				 	//Add an onSuccess handler
					form.onSuccess(function(values, followUpUrl){
						// Hide the form when submitted
						//form.getFormElem().hide();
						// Uncomment if a message should be shown when form is hidden; append message to div below
						// document.getElementById('confirmSubmit').style.display = 'block';
						// When form gets submitted, show Intercom by adding a class to display block (Intercom defaults not being displayed)
						//document.getElementById('intercom-container').className = 'show-intercom';
						document.getElementById("mktoForm_2462").className = "hide";
						document.getElementById("thankYouHeader").className = "show";
						// Show the Intercom message/chat interface
						//Intercom('show');
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
						analytics.track('Ada Landing Page Form Submit', {
							formName: 'Email Field',
							email: $emailMkto,
							companyName: $companyMkto,
							annualRevenue: $companyRFAnnualRev
							});
						// Send a click event to Google Analytics
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
<?php get_footer('p2p-ent'); ?>
