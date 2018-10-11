 <?php
/*
Template Name: Landing Page - P2P Enterprise
*/
get_header('p2p-ent'); ?>
	<main class="main-content p2p-ent">
		<div id="sectionHero" class="section-view section-hero">
			<div class="container" style="position:relative;z-index: 9999">
				<div class="row">
					<div class="contents">
						<h1>Tradeshift Procure-to-Pay.</h1>
						<h2>The flexible P2P solution you need to succeed and grow</h2>
					</div>
				</div>
				<div class="row">
					<div id="heroForm">
						<div class="form-container buy-form">
							<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
								<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">See it in action</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/heroimg.jpg" width="100%" class="hidden-sm hidden-xs" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/herobg-screen.jpg" class="show_400" width="100%" style=""/>
      <img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/plants.png" class="hidden-lg hidden-md hidden-sm hide_400" style="position: absolute;bottom: 0px;left: 0px"/>
      <img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/pens.png" class="hidden-lg hidden-md hidden-sm hide_400" style="position: absolute;bottom: 0px;right: 0px"/>
			<a href="#sectionOne"><div class="icon-down-arrow hidden-xs">Learn more</div></a>
			<div class="clear:both"></div>
		</div>
		<div id="sectionOne" class="section-view section-one">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="product-screenshot hidden-sm hidden-xs">
							<img class="pull-right" src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/browser-section-1.jpg">
						</div>
						<div class="text-intro">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/border-green.jpg" class="img-responsive border-img" style="margin-bottom: 10px">	
							<h2>A procure-to-pay solution that doesn’t box you in</h2>
							<p class="hidden-xs">Collaboration drives agile, effective procure-to-pay. Manage all of your <a href="https://blog.tradeshift.com/the-pillars-of-p2p-part-1-spend-under-management/" target="_blank">spend</a>, get <a href="https://blog.tradeshift.com/the-pillars-of-p2p-part-2-global-compliance/" target="_blank">total global compliance</a>, and realize industry-leading user and <a href="https://tradeshift.com/resources/tradeshifts-insider-tips-for-successful-supplier-onboarding/" target="_blank">supplier adoption</a> rates. Tradeshift is your partner, the modern choice to enable end-to-end business commerce between you and your entire supply chain.</p>
							<p class="hidden-lg hidden-md hidden-sm">Tradeshift’s Procure-to-Pay solution brings all your spend under management, gives you total global compliance, and offers a superior supplier onboarding experience—all on a flexible platform, built with the needs of buyers, AP professionals, employees, and suppliers in mind.</p>
						<div class="form-container pay-form">
							<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
								<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Chat now</button>
							</form>
						</div>
						</div>
					</div>

				</div>
			</div>
      <img class="hidden-lg hidden-md hidden-sm" src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/browser-section-1.jpg" width="100%" style="padding-left: 25px" />
		</div>
		<div id="sectionTwo" class="section-view section-two">
			<div class="container">
				<div class="row">
					<div class="contents">
						<!-- phone only-->
						<div class="panel-group items-solution hidden-lg hidden-md hidden-sm" id="accordion">
							<!-- block one -->
						    <div class="panel item-solution">
						     	<div class="panel-heading active" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">
				        			<div class="content">
										<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-spend-management.png" />
										<p>Comprehensive Spend Management</p>	
										<span class="toggle">X Close</span>
									</div>
						      	</div>
							      <div id="collapse1" class="panel-collapse collapse in">
							    	<div class="panel-body">Tradeshift is the only solution that gives you control and visibility of all your spend, which means better strategic decision-making, capturing real cost savings, and unmatched efficiency. Tradeshift captures spend from all your suppliers in one system, from strategic contracted suppliers to long tail ad hoc purchases.</div>
							      </div>
						    </div>
						    <!-- block two -->
						    <div class="panel item-solution">
						     	<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
				        			<div class="content">
										<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-collaboration.png" />
										<p>Collaboration <br>Made Easy</p>	
										<span class="toggle">Press to explore</span>
									</div>
						      	</div>
							      <div id="collapse2" class="panel-collapse collapse">
							    	<div class="panel-body">We’ve made it possible for users to easily engage in discussion across the business and with suppliers. AP and Procurement can work together or with suppliers on documents. Employees shopping for goods or services can collaborate with buyers, or directly with suppliers, to obtain information or resolve questions.</div>
							      </div>
						    </div>
						    <!-- block Three -->
						    <div class="panel item-solution">
						     	<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
				        			<div class="content">
										<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-onboarding.png" />
										<p>Supplier Onboarding<br>&amp; Experience</p>	
										<span class="toggle">Press to explore</span>
									</div>
						      	</div>
							      <div id="collapse3" class="panel-collapse collapse">
							    	<div class="panel-body">Tradeshift is the only solution that solves supplier onboarding and adoption by providing real value for both the buyer and the supplier, removing the supplier adoption thorn from your side. Suppliers can find new customers, manage their products, and invoice all their customers from one account.</div>
							      </div>
						    </div>
						    <!-- block Four -->
						    <div class="panel item-solution">
						     	<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
				        			<div class="content">
										<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-platform.png" />
										<p>Flexible<br>Platform</p>	
										<span class="toggle">Press to explore</span>
									</div>
						      	</div>
							      <div id="collapse4" class="panel-collapse collapse">
							    	<div class="panel-body">Tradeshift is the only flexible platform that streamlines and simplifies your P2P processes, enabling company-wide agility and helping you respond quickly to the ever-changing market. As a solution that grows with you, your business growth will never be limited by your technology solutions. With Tradeshift, you have a solution that meets your needs now, and in the future as your business changes.</div>
							      </div>
						    </div>
						</div> 
            <!-- desktop and ipad -->
              <div id="carousel" class="carousel slide carousel-fade items-solution hidden-xs">
              
                <ul class="nav nav-pills">
                  <li data-target="#carousel" data-slide-to="0" class="active col-xs-3">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-spend-management.png" />
                      <p>Comprehensive Spend Management</p>
                    </a>
                  </li>
                  <li data-target="#carousel" data-slide-to="1" class="col-xs-3">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-collaboration.png" />
                      <p>Collaboration <br>Made Easy</p>
                    </a>
                  </li>
                  <li data-target="#carousel" data-slide-to="2" class="col-xs-3">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-onboarding.png" />
                      <p>Supplier Onboarding<br>&amp; Experience</p>    
                    </a>
                  </li>
                  <li data-target="#carousel" data-slide-to="3" class="col-xs-3">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-platform.png" />
                      <p>Flexible<br>Platform</p>
                    </a>
                  </li>
                </ul>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                     <div class="slide-content">
                      <p>Tradeshift is the only solution that gives you control and visibility of all your spend, which means better strategic decision-making, capturing real cost savings, and unmatched efficiency. Tradeshift captures spend from all your suppliers in one system, from strategic contracted suppliers to long tail ad hoc purchases.</p>
                    </div>
                  </div><!-- End Item -->
                  <div class="item">
                     <div class="slide-content">
                      <p>We’ve made it possible for users to easily engage in discussion across the business and with suppliers. AP and Procurement can work together or with suppliers on documents. Employees shopping for goods or services can collaborate with buyers, or directly with suppliers, to obtain information or resolve questions.</p>
                    </div>
                  </div><!-- End Item -->
                  <div class="item">
                    <div class="slide-content">
                      <p>Tradeshift is the only solution that solves supplier onboarding and adoption by providing real value for both the buyer and the supplier, removing the supplier adoption thorn from your side. Suppliers can find new customers, manage their products, and invoice all their customers from one account.</p>
                    </div>
                  </div><!-- End Item -->
                  <div class="item">
                    <div class="slide-content">
                      <p>Tradeshift is the only flexible platform that streamlines and simplifies your P2P processes, enabling company-wide agility and helping you respond quickly to the ever-changing market. As a solution that grows with you, your business growth will never be limited by your technology solutions. With Tradeshift, you have a solution that meets your needs now, and in the future as your business changes.</p>
                    </div>
                  </div><!-- End Item -->
                </div><!-- End Carousel Inner -->
              </div>
						<div class="form-container pay-form hidden-xs">
							<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
								<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Chat now</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<div id="sectionThree" class="section-view section-three">
			<div class="container">
				<div class="row">
					<div class="contents buy-contents">
						<h2>Procure-to-Pay That's Simple,<br>Collaborative and Effective</h2>
						<h3>Tradeshift’s modern approach to procure-to-pay simplifies your day-to-day processes with our products, <span>Tradeshift Buy</span> and <span>Tradeshift Pay</span>.</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/border-green.jpg" class="img-responsive border-img">	
						
						<p class="buy-intro"><span class="buy">Tradeshift Buy</span> helps you procure the things your business needs. Our marketplace enables employees to buy contracted goods and services, and virtual cards help control long tail spend.</p>

							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/supplier-chat-xs.jpg" width="100%" class="supplier-chat hidden-lg hidden-md hidden-sm" />

							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/supplier-chat.jpg" width="100%" class="supplier-chat hidden-xs" />

						<div class="tradeshift-buy-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-marketplace-management.png" />
							<p>Marketplace management</p>
							<p>Manage your own private marketplace of goods and services for employees to shop and buy through.</p>
						</div>
						<div class="tradeshift-buy-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-marketplace-search.png" />
							<p>Marketplace search</p>
							<p>Search private and public marketplaces with a search tool that gets smarter as you use it—empower users to get what they need faster.</p>
						</div>
						<div class="tradeshift-buy-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-modern-shopping.png" />
							<p>Modern shopping experience</p>
							<p>Employees can easily shop for goods and services in a private marketplace based on negotiated prices.</p>
						</div>
						<div class="tradeshift-buy-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-services-procurement.png" />
							<p>Services procurement</p> 
							<p>Manage your service contract spend using blanket orders with less overhead and fully compliant rate matching on invoices.</p>
						</div>
						<div class="tradeshift-buy-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-collaboration-10.png" />
							<p>Collaboration</p>
							<p>Modern, real-time, across-document chat system that leads to faster PO processing and increased adoption.</p>
						</div>
						<div class="tradeshift-buy-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-workflow.png" />
							<p>Workflow</p>
							<p>Efficient, controlled document routing gives your business the flexible compliance it needs.</p>
						</div>
						<div class="tradeshift-buy-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-virtual-card.png" />
							<p>Virtual cards</p>
							<p>Control employee spending for non-contracted items by approving and generating dynamic credit cards.</p>
						</div>
						<div class="tradeshift-buy-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-one-to-many.png" />
							<p>“One-to-many” supplier marketplace management</p>
							<p>Suppliers can easily publish and manage their goods and services across Tradeshift’s marketplace by loading their content once, then configuring to their customers individually</p>
						</div>
					</div>
					<div class="contents pay-contents">	
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/border-orange.jpg" class="img-responsive border-img">					
						<p class="pay-intro"><span class="pay">Tradeshift Pay</span> enables electronic invoicing, helps ensure you’re compliant with global trade regulations, and prevents invalid invoices from reaching your company.</p>		

						<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/supplier-applications.jpg" width="100%" class="supplier-app hidden-xs" />

						<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/supplier-applications-xs.jpg" width="100%" class="supplier-app hidden-lg hidden-md hidden-sm" />

						<div class="tradeshift-pay-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-electronic-invoicing.png" />
							<p>Electronic invoicing</p>
							<p>Receive, approve, and pay invoices through a modern user experience—no need for overly complex systems that slow you down.</p>
						</div>
						<div class="tradeshift-pay-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-workflow-orange.png" />
							<p>Workflow </p>
							<p>Smart invoice processing with reduced exceptions, so you can capture more discounts and pay on time.</p>
						</div> 
						<div class="tradeshift-pay-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-matching.png" />
							<p>Matching</p>
							<p>7-way matching possibilities let you match invoices against everything from purchase orders to ASNs to contracts.</p>
						</div>
						<div class="tradeshift-pay-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-firewall.png" />
							<p>Document firewall</p> 
							<p>Real compliant AP automation makes sure invoices received comply with your business rules and improve touchless processing.</p>
						</div>
						<div class="tradeshift-pay-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-legal.png" />
							<p>Legal Country Compliance </p>
							<p>Country legal compliance across the globe, including China and India.</p>
						</div>
						<div class="tradeshift-pay-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-collaboration-orange.png" />
							<p>Collaboration</p>
							<p>Modern, real-time, across-document communication and chat leads to faster PO processing and increased adoption.</p>
						</div>
						<div class="tradeshift-pay-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-financing.png" />
							<p>Financing</p>
							<p>Capture discounts dynamically from more than just strategic suppliers, saving more money and improving cash management.</p>
						</div>
						<div class="tradeshift-pay-item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2p-ent/icon-intelligent-invoice-.png" />
							<p>Intelligent invoice scanning</p>
							<p>Facilitate supplier onboarding using automatic classification and verification of an invoice from supplier-driven or buyer-driven workflows.</p>
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
		<div id="sectionFour" class="section-view section-four">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1>Benefits of our modern approach to P2P:</h1>
						<div class="benefits-list">
							<ul>
								<li>Extend or connect any system to Tradeshift-developed capabilities using our <span>open platform</span></li>
								<li>Use <span>modern collaboration</span>, embedded everywhere, to engage with employees and suppliers, facilitate the purchasing process, and resolve disputes</li>
								<li>Shop in a <span>public marketplace</span> of goods &amp; services, or create your own private marketplace for a streamlined sourcing and shopping experience</li>
								<li><span>Intelligent search</span> improves as you use the system, making it even more robust for users</li>
								<li>Capture and <span>control long tail spend</span>, and earn rebates</li>
							</ul>
							<ul>
								<li><span>Onboard your whole supply chain</span> quickly and effectively for total spend management</li>
								<li><span>Get total global compliance</span> in the countries you operate, including China, even with changing regulations</li>
								<li><span>Ensure consistency</span> throughout the complete documentation lifecycle</li>
								<li>Get shorter cycle times through <span>efficient routing</span> for all documents</li>
								<li>Set up an automatic <span>dynamic discounting</span> program that captures discounts from a larger selection of suppliers and ensures a healthy supply chain</li>
							</ul>
						</div>
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
				<input type="checkbox" id="buy-sign-up" class="sign-up-checkbox" name="buy-sign-up" value="https://go.tradeshift.com/register" />
				<label for="buy-sign-up"><span></span><b>Enterprise</b> – Talk to one of our experts and get a demo.</label>
			</div>
	      	<div class="sign-up-list">
				<input type="checkbox" id="sb-sign-up" class="sign-up-checkbox" name="sb-sign-up" value="https://go.tradeshift.com/register" />
				<label for="sb-sign-up"><span></span><b>Invoicing</b> – Send and receive invoices.</label>
			</div>
			<div class="sign-up-list">
				<input type="checkbox" id="go-sign-up" class="sign-up-checkbox" name="go-sign-up" value="https://go.tradeshift.com/register" />
				<label for="go-sign-up"><span></span><b>Tradeshift<sup>&reg;</sup> Go</b> – A virtual assistant for spend &amp; travel.</label>
			</div>
	      		<button id="btn-sign-up" class="btn btn-primary-cta-ent disabled" type="submit">Sign up</button>
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
			<form id="mktoForm_2462"></form>
			<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2462);
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
<?php get_footer('p2p-ent'); ?>
