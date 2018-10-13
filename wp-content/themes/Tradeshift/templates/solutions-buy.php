<?php
/*
Template Name: Solutions - Tradeshift Buy
*/
get_header(); ?>
		<!-- Main Content Starts -->
		<main class="main-content ts-buy">
			<div id="sectionHero" class="section-view section-hero">
				<div class="container" style="position:relative;z-index: 9999">
					<div class="row">
						<div class="contents">
							<h1><?php _e("Tradeshift<sup>&reg;</sup> Buy", 'Tradeshift'); ?></h1>
							<h2><?php _e("Own your supply chain marketplace.", 'Tradeshift'); ?></h2>
							<div id="heroForm">
								<div class="form-container buy-form">
									<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
										<input type="e-mail" class="form-control" id="e-mail" placeholder="<?php _e("Enter Email", "Tradeshift"); ?>">
										<button type="button" class="btn btn-cta btn-nm" id="finalForm" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Get a demo", 'Tradeshift'); ?></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="#sectionOne"><div class="icon-down-arrow hidden-xs hidden-sm"><?php _e("Learn more", 'Tradeshift'); ?></div></a>
				<div class="clear:both"></div>
			</div>
			<div class="hero-footer" id="sectionOne">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2><?php _e("Can procurement be more like the way we buy everyday?", 'Tradeshift'); ?></h2>
							<p>
								<?php _e('And can the way we buy everyday provide more control and compliance?', 'Tradeshift'); ?>
								<span><?php _e("Make procurement more like buying with your own private marketplaces.", 'Tradeshift'); ?></span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="ts-buy-section">
				<div class="container">
					<div class="row">
						<div class="contents">
							<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-orange-border-sm.jpg" class="visible-xs divider" />
							<h2><?php _e("Discover Tradeshift<sup>&reg;</sup> Buy", 'Tradeshift'); ?></h2>
							<h3><?php _e("Bring procurement out of the dark ages and into the marketplace age.", 'Tradeshift'); ?></h3>
							<div class="ts-buy-features">
								<div class="img_wrapper">
									<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/credit-card.png" alt="<?php _e("Intuitive shopping experience for employees to buy from approved sources and stay in policy | Tradeshift Buy", "Tradeshift"); ?>">
								</div>
								<h4><?php _e("Befriend tail spend.", 'Tradeshift'); ?></h4>
								<p><?php _e("Request, approve, and make purchases on the go with Tradeshift Go, a virtual credit card for mobile purchases.", 'Tradeshift'); ?></p>
							</div>
							<div class="ts-buy-features">
								<div class="img_wrapper"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/timer.png" alt="<?php _e("Get complete spend under management for total visibility and control | Tradeshift Buy", "Tradeshift"); ?>"></div>
								<h4><?php _e("Start today.", 'Tradeshift'); ?></h4>
								<p><?php _e("Bring a modern, managed buying experience right into your existing e-procurement tool, no integration needed.", 'Tradeshift'); ?></p>
							</div>
							<div class="ts-buy-features">
								<div class="img_wrapper"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/cloud.png" alt="<?php _e("Lightweight, flexible, and extensible platform makes managing change and growth easy | Tradeshift Buy", "Tradeshift"); ?>"></div>
								<h4><?php _e("Your business, your way.", 'Tradeshift'); ?></h4>
								<p><?php _e("Get a full end-to-end cloud solution for your company buying, no on-premise or legacy software needed.", 'Tradeshift'); ?></p>
							</div>
							<style>@media (min-width:767px) {.smartling-fr .ts-buy-section form {width: 570px !important;}}</style>
							<div class="form-container buy-form">
								<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
									<input type="e-mail" class="form-control" id="e-mail" placeholder="<?php _e('Enter Email', 'Tradeshift'); ?>">
									<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Find out how", 'Tradeshift'); ?></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="marketplace-mngr">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="product-screenshot hidden-sm hidden-xs">
								<img class="pull-right" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-screenshot-marketplace-mngr.jpg">
							</div>
							<div class="text-intro">
								<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-orange-border-sm.jpg" class="visible-xs divider" />
								<h2><?php _e("Marketplace Manager", 'Tradeshift'); ?></h2>
								<h3 class="hidden-xs"><?php _e("<span>Simplify management of all your products and services,</span> and create a marketplace for employees to shop.", 'Tradeshift'); ?></h3>
								<h3 class="visible-xs"><?php _e("<span>Simplify management of all your products and services</span> and create a marketplace for employees to shop.", 'Tradeshift'); ?></h3>
								<p><?php _e("Access with all your suppliers’ content, including punchouts and supplier-managed content, to create your own private marketplace of goods and services. Guide employees to the right products and services from contracted and approved suppliers with your pricing and discounts. You can also offer access to a public spot market to discover potential new suppliers, collaborate, and qualify sources of supply.", 'Tradeshift'); ?></p>
								<p class="hidden-xs">
									<?php _e("No more disconnected, difficult-to-maintain content. Tradeshift<sup>&reg;</sup> Buy is easy for suppliers, and you get up-to-date, structured data that reduces free-form requests, reduces downstream processing, and delivers better real-time spend visibility.", 'Tradeshift'); ?>
								</p>
								<div class="form-container pay-form">
									<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
										<input type="e-mail" class="form-control" id="e-mail" placeholder="<?php _e('Enter Your Email', 'Tradeshift'); ?>">
										<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Find out how", 'Tradeshift'); ?></button>
									</form>
								</div>
							</div>
							<img class="screenshot visible-sm" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-screenshot-marketplace-mngr.jpg">
						</div>
					</div>
				</div>
				<div style="width: 90%;margin: auto">
					<img class="screenshot visible-xs" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-screenshot-marketplace-mngr.jpg">
				</div>
			</div>
			<div class="shop">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="shop-description">
								<h2><?php _e("Shop", 'Tradeshift'); ?></h2>
								<h3><?php _e("<span>Intuitive shopping</span> expands company-wide adoption.", 'Tradeshift'); ?></h3>
								<p><?php _e("A familiar search experience guides users to the right products and services that drive company spend objectives. Employees have better pricing visibility to determine the right price based on requirements, and to achieve compliance with negotiated pricing.", 'Tradeshift'); ?></p>
								<p><?php _e("With approved, compliant requests for any spend category, you can. Reduce downstream work and boost your process efficiency.", 'Tradeshift'); ?></p>
							</div>
						</div>
						<div class="screenshot-sm hidden-xs"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-shop-bg-xs.jpg" class="img-responsive" /></div>
					</div>
					<div class="row apps-copy-xs visible-xs">
						<div class="contents">

						</div>
					</div>
				</div>
			</div>



			<script>
			    function isElementInViewport (el) {
			      if (typeof jQuery === "function" && el instanceof jQuery) {
			          el = el[0];
			      }

			      var rect = el.getBoundingClientRect();

			      return (
			        rect.top >= 0 &&
			        rect.left >= 0 &&
			        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
			        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
			      );
			    }
			</script>


			<div class="collaboration">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="text-intro">
								<h2><?php _e("Modern, <br class=\"visible-lg\">In-App Chat", 'Tradeshift'); ?></h2>
								<h3 class="hidden-xs"><span><?php _e("Easy collaboration</span> that records conversations and doc exchanges.", 'Tradeshift'); ?></h3>
								<h3 class="visible-xs"><span><?php _e("Easy collaboration</span> that records conversations and doc exchanges.", 'Tradeshift'); ?></h3>
								<p><?php _e("With Buy, your procurement team, managers, and employees can chat and collaborate in real-time throughout the entire buying process. Add people to your conversations, share product and service information, and collaborate with sourcing experts for the right source of supply, right price, and compliance. Collaborators can access all communication centrally and reference any related documents or content.", 'Tradeshift'); ?></p>
							</div>
							<?php if( !is_mobile() ): ?>
							<div class="vidyard-outer hidden-xs">
								<div class="vidyard-inner" id="video_container">
						        	<script type="text/javascript" id="vidyard_embed_code_1vyCso2gb8gyX3w4usCzt6" src="//play.vidyard.com/1vyCso2gb8gyX3w4usCzt6.js?v=3.1.1&type=inline"></script>
						        </div>
						    </div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php if( is_mobile() ): ?>
				<div class="vidyard-outer">
					<div class="vidyard-inner" id="video_container">
			        	<script type="text/javascript" id="vidyard_embed_code_1vyCso2gb8gyX3w4usCzt6" src="//play.vidyard.com/1vyCso2gb8gyX3w4usCzt6.js?v=3.1.1&type=inline"></script>
			        </div>
			    </div>
			   	<?php endif; ?>
			</div>


		<style type="text/css">
			@-webkit-keyframes pop-in {
				0% { opacity: 0; -webkit-transform: scale(0.5); }
				100% { opacity: 1; -webkit-transform: scale(1); }
				}
			@-moz-keyframes pop-in {
				0% { opacity: 0; -moz-transform: scale(0.5); }
				100% { opacity: 1; -moz-transform: scale(1); }
			}
			@keyframes pop-in {
				0% { opacity: 0; transform: scale(0.5); }
				100% { opacity: 1; transform: scale(1); }
			}

			.message-pop-in {
				visibility: visible !important;
				-webkit-animation:pop-in 1s;
				-moz-animation:pop-in 1s;
				-ms-animation:pop-in 1s;
			}
			.message-container {
				visibility: hidden;
			}
		</style>


		<script>
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				var inview = new Waypoint.Inview({
			    	element: document.getElementById('collaboration'),
			    	enter: function(down) {


			        	$('.update-request').addClass('message-pop-in');

						setTimeout(function () {
						    $('.request-answer').addClass('message-pop-in');
						}, 2000);

						setTimeout(function () {
						    $('.help-me').addClass('message-pop-in');
						}, 3500);
			      	}
			    });
			});

		</script>
			<div class="collaboration-suppliers">
				<div class="container">
				<div class="row">
					<div class="contents" id="collaboration">
						<div class="message-container update-request" id="update-request">
							<div class="contents">
								<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-headshot-peter.png" class="visible-sm visible-xs" />
								<div class="message-text">
									<span><?php _e("Peter Hansen", 'Tradeshift'); ?></span>
									<p><?php _e("I know we have suppliers for this motor, but we need a part today. Is there a local company where we can get it?", 'Tradeshift'); ?></p>
								</div>
								<div class="message-img hidden-xs hidden-sm
								"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-headshot-peter.png" /></div>
							</div>
						</div>
						<div class="message-container request-answer" id="request-answer">
							<div class="contents">
								<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-headshot-john.png" class="visible-sm visible-xs" />
								<div class="message-img visible-lg visible-md"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-headshot-john.png" /></div>
								<div class="message-text">
									<span><?php _e("Anthony Miller", 'Tradeshift'); ?></span>
									<p><?php _e('Sure thing. I updated the purchase request with American Motors, about 8 miles from you. The price is $499.', 'Tradeshift'); ?></p>
								</div>
							</div>
						</div>
						<style>@media (min-width:992px) {.smartling-fr .ts-buy .collaboration-suppliers .help-me {margin-top: 22px !important}}</style>
						<div class="message-container help-me" id="help-me">
							<div class="contents">
								<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-headshot-peter.png" class="visible-sm visible-xs" />
								<div class="message-text">
									<span><?php _e("Peter Hansen", 'Tradeshift'); ?></span>
									<p><?php _e("Great, thanks!", 'Tradeshift'); ?></p>
								</div>
								<div class="message-img visible-lg visible-md"><img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-headshot-peter.png" /></div>
							</div>
						</div>
						<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-orange-border-sm.jpg" class="visible-xs divider" />
						<h2><?php _e("Order Collaboration with Suppliers", 'Tradeshift'); ?></h2>
						<h3><?php _e("<span>Reduce process cycle times</span> and errors for<br class=\"hidden-xs\">direct and indirect materials.", 'Tradeshift'); ?></h3>
						<p><?php _e("Be proactive when orders or deliveries change. Collaboration and validation, including custom validations, ensure the multiple purchasing documents that support your change order, 2- and 3-way match, and contract compliance processes are based on up-to-date and accurate order and delivery information. Upstream collaboration and downstream invoice accuracy means a larger window to manage cash and capture discounts.", 'Tradeshift'); ?></p>
					</div>
				</div>
			</div>
			</div>
			<div class="supplier-adoption">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="supplier-graph">
								<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-supplier-graph.jpg" class="img-responsive hidden-sm hidden-xs" />
							</div>
							<div class="supplier-details">
								<h2 class="hidden-xs"><?php _e("Supplier Adoption", 'Tradeshift'); ?></h2>
								<h3 class="hidden-xs"><?php _e("Work with all your suppliers in one place.", 'Tradeshift'); ?></h3>
								<h2 class="visible-xs">Complete <?php _e("Supplier Adoption", 'Tradeshift'); ?></h2>
								<h3 class="visible-xs"><?php _e("<span>The Key</span> to your competitive edge.", 'Tradeshift'); ?></h3>
								<p><?php _e("The value you get from procurement best practices will only scale if your suppliers adopt. Tradeshift provides global supplier onboarding programs, as well as a portfolio of value-add technology, financial services and third party business applications for suppliers that have led to industry-leading supplier adoption and engagement rates.", 'Tradeshift'); ?></p>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-supplier-graph.jpg" class="img-responsive visible-sm visible-xs" />
						</div>
					</div>
				</div>
			</div>
			<div class="flexible-platform">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2><?php _e("Do more with Tradeshift Apps", 'Tradeshift'); ?></h2>
							<p><?php _e("Tradeshift is the only flexible platform that streamlines and simplifies your P2P processes, enabling company-wide agility so you can respond quickly to the ever-changing market.", 'Tradeshift'); ?></p>
							<p><?php _e("As a solution that grows with you, your business growth will never be limited by your technology. Extend Tradeshift apps, build your own business apps, or subscribe to third-party apps on the platform to make procurement as unique as your company. Get faster change at a lower cost and a solution that meets your needs, now and in the future.", 'Tradeshift'); ?></p>
						<?php if( !is_mobile() ): ?>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-netsuite.png" /><?php _e("Netsuite", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-quyntess.png" /><?php _e("Quyntess", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-paypal.png" /><?php _e("Paypal<br>Payments", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-riskmethods.png" /><?php _e("Riskmethods", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-quickbooks.png" /><?php _e("Quickbooks", 'Tradeshift'); ?></div>

							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-biz2credit.png" /><?php _e("Biz2Credit", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-timestarter.png" /><?php _e("TimeStarter", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-openpeppol.png" /><?php _e("OpenPEPPOL", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-xero.png" /><?php _e("Xero", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-ecovadis.png" /><?php _e("Ecovadis", 'Tradeshift'); ?></div>

							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-transfermate.png" /><?php _e("TransferMate", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-supplyshift.png" /><?php _e("SupplyShift", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-salesforce.png" /><?php _e("Salesforce<br>Connector", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-freightos.png" /><?php _e("Freightos", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-c2fo.png" /><?php _e("C2FO", 'Tradeshift'); ?></div>
						<?php else: ?>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-netsuite.png" /><?php _e("Netsuite", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-paypal.png" /><?php _e("Paypal Payments", 'Tradeshift'); ?></div>

							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-biz2credit.png" /><?php _e("Biz2Credit", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-xero.png" /><?php _e("Xero", 'Tradeshift'); ?></div>

							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-quyntess.png" /><?php _e("Quyntess", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-riskmethods.png" /><?php _e("Riskmethods", 'Tradeshift'); ?></div>

							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-salesforce.png" /><?php _e("Salesforce<br>Connector", 'Tradeshift'); ?></div>
							<div class="flexible-platform-apps"><img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-logo-quickbooks.png" /><?php _e("Quickbooks", 'Tradeshift'); ?></div>

						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="buy-tradeshift-go">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2><?php _e("Tradeshift Go<sup>&trade;</sup>", 'Tradeshift'); ?></h2>
							<h3><?php _e("<span>Expand Procurement’s reach</span> with lightweight, collaborative purchasing and payments using virtual credit cards.", 'Tradeshift'); ?></h3>
							<p><?php _e("Tradeshift Go is an add-on to Tradeshift Buy that enables simple requests and approvals for visibility into long-tail spend. Tradeshift Go delivers the convenience of a card and the control of a purchasing system. Employees are given a virtual card number to complete approved transactions. No need to force long-tail spend into an inefficient PO process or create master data for one-time suppliers.", 'Tradeshift'); ?></p>
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-virtual-cc-bg-sm.jpg" class="visible-sm virtual-cc-sm" />
							<div class="virtual-cc hidden-xs">
								<div class="virtual-cc-item approved-funding hidden-xs"><p><?php _e("You get full visibility and control<br>with approved funding", 'Tradeshift'); ?></p></div>
								<div class="virtual-cc-item employee-spending hidden-xs"><p><?php _e("Control employee spending<br>for non-contracted items and<br>long-tail suppliers", 'Tradeshift'); ?></p></div>

								<div class="virtual-cc-item employee-access hidden-xs"><p><?php _e("Employees quickly access the<br>products and services they need", 'Tradeshift'); ?></p></div>
								<div class="virtual-cc-item card-usage hidden-xs"><p><?php _e("Realize large-dollar rebates<br class=\"hidden-lg\"> from card<br class=\"visible-lg\">companies based <br class=\"hidden-lg\">on card usage", 'Tradeshift'); ?></p></div>
							</div>
							<div class="virtual-cc visible-xs">
								<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-virtual-cc-show-more.png" class="show-more" data-toggle="tooltip" data-placement="top" title="<?php _e("You get full visibility and control with approved funding", 'Tradeshift'); ?>" />
								<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-virtual-cc-show-more.png" class="show-more" data-toggle="tooltip" data-placement="top" title="<?php _e("Employees quickly access the products and services they need", 'Tradeshift'); ?>" />
								<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-virtual-cc-show-more.png" class="show-more" data-toggle="tooltip" data-placement="top" title="<?php _e("Control employee spending for non-contracted items and long-tail suppliers", 'Tradeshift'); ?>" />
								<img src="<?php echo get_template_directory_uri() ?>/img/solutions/buyv2/ts-buy-virtual-cc-show-more.png" class="show-more" data-toggle="tooltip" data-placement="top" title="<?php _e("Realize large-dollar rebates from card companies based on card usage", 'Tradeshift'); ?>" />

								<div class="virtual-cc-item approved-funding hidden-xs"><p><?php _e("You get full visibility and control<br>with approved funding", 'Tradeshift'); ?></p></div>
								<div class="virtual-cc-item employee-spending hidden-xs"><p><?php _e("Control employee spending<br>for non-contracted items and<br>long-tail suppliers", 'Tradeshift'); ?></p></div>

								<div class="virtual-cc-item employee-access hidden-xs"><p><?php _e("Employees quickly access the<br>products and services they need", 'Tradeshift'); ?></p></div>
								<div class="virtual-cc-item card-usage hidden-xs"><p><?php _e("Realize large-dollar rebates<br class=\"hidden-lg\"> from card<br class=\"visible-lg\">companies based <br class=\"hidden-lg\">on card usage", 'Tradeshift'); ?></p></div>
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
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/testimonial-jason.png" alt="Jason Busch" class="headshot-person" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buyv2/ts-buy-icon-quote-separator-xs.png" class="img-responsive visible-xs" />
							<div class="quotation"><?php _e("“Tradeshift is entering the eProcurement and broader source-to-pay market as an antagonist with a radical perspective on how to improve corporate buying. We welcome Tradeshift's entrance as a procurement suite vendor, which is not just taking the road less travelled but blazing a completely new trail.”", 'Tradeshift'); ?></div>
							<div class="quoted-person hidden-xs"><?php _e("<span>&#8212; Jason Busch</span>, SpendMatters.com", 'Tradeshift'); ?></div>
							<div class="quoted-person visible-xs"><?php _e("<span>&dash; Jason Busch</span>, SpendMatters.com", 'Tradeshift'); ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="resources">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2><?php _e("Find out more about our procurement solutions.", 'Tradeshift'); ?></h2>
							<div class="resource-wrapper">
								<a class="trigger-res-1" href="https://tradeshift.com/resources/spend-matters-pro-deep-dive-tradeshift-rethinks-eprocurement-part-one/"><img class="img-responsive" src="/wp-content/uploads/2015/12/Spend-Matters_blog-1.png" /></a>
								<p><?php _e("Rethink eProcurement ", 'Tradeshift'); ?><br class="visible-sm" /><a class="trigger-res-1"  href="/resources/spend-matters-pro-deep-dive-tradeshift-rethinks-eprocurement-part-one/"><?php _e('Download &raquo;', 'Tradeshift'); ?></a></p>
							</div>
							<div class="resource-wrapper">
								<a class="trigger-res-2" href="/resources/tradeshift-buy-video/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/resources-demo-vid.jpg" /></a>
								<p><?php _e("Tradeshift Buy Demo", 'Tradeshift'); ?> <br class="visible-sm" /><a class="trigger-res-2" href="https://tradeshift.com/resources/tradeshift-buy-video"><?php _e('Watch video &raquo;', 'Tradeshift'); ?></a></p>
							</div>
							<div class="resource-wrapper">
								<a class="trigger-res-3" href="/resources/ts-buy"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/resources-vision.jpg" /></a>
								<p><?php _e("Tradeshift Buy Vision", 'Tradeshift'); ?> <br class="visible-sm" /><a class="trigger-res-3" href="https://tradeshift.com/resources/ts-buy/"><?php _e('Read paper &raquo;', 'Tradeshift'); ?></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="component contact-us-form gradient-orange">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h4 class="hidden-xs"><?php _e("See how Tradeshift can help<br>your enterprise.", 'Tradeshift'); ?></h4>
							<h4 class="visible-xs"><?php _e("See how Tradeshift can help you.", 'Tradeshift'); ?></h4>
							<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal" style="color: #ff5200 !important;margin-top: 22px !important;"><?php _e("Contact us", 'Tradeshift'); ?></button>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Modal View of Marketo Forms2 -->
		<div class="modal fade" id="mktoModal" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 id="myModalLabel"><?php _e("Request a Demo", 'Tradeshift'); ?></h3>
		        <p class="lead"><?php _e("Start your journey with a free demo today.", 'Tradeshift'); ?></p>
		      </div>
		      <div class="modal-body">
		        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_951"></form>
				<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 951, function(form){
		           form.vals({"Marketing_Resource_Name__c":"Solutions - Tradeshift Buy"});
		    	});
				// ]]></script>
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
		<?php if(!is_mobile() ): ?>
		<script src="//play.vidyard.com/v0/api.js"></script>
		<script type="text/javascript">
		  var videos = new Vidyard.players();
		  var playing=0;
		  $(window).on('scroll', function() {
		    if(isElementInViewport($("#video_container")) && (playing==0)) {
		      videos["1vyCso2gb8gyX3w4usCzt6"].play();
		      playing=1;
		    } else if (!isElementInViewport($("#video_container")) && (playing==1)) {
		      videos["1vyCso2gb8gyX3w4usCzt6"].pause();
		      playing=0;
		    }
		  });
		</script>
		<?php endif; ?>
		<?php if (is_ios() && is_mobile() ): ?>
		<!-- Dismiss tooltip bug fix on IOS-->
		<script type="text/javascript">
			;(function ($) {
			  var wasTapped = function wasTapped (element) {
			    var touchStart = element.data('lastTouchStart')
			    var touchEnd = element.data('lastTouchEnd')
			    return (
			      touchStart && touchEnd &&
			      touchEnd.timeStamp - touchStart.timeStamp <= 500 &&   // duration
			      Math.abs(touchEnd.pageX - touchStart.pageX) <= 10 &&  // deltaX
			      Math.abs(touchEnd.pageY - touchStart.pageY) <= 10     // deltaY
			    )
			  }

			  var initTooltip = function initTooltip () {
			    $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'})
			    .on('show.bs.tooltip', function () {
			      $(this).data('tooltipShown', true)
			    })
			    .on('hide.bs.tooltip', function () {
			      $(this).data('tooltipShown', false)
			    })
			    .on('touchstart', function (e) {
			      var $this = $(this)
			      $this.data({
			        lastTouchStart: e.originalEvent,
			        wasTouchedRecently: true
			      })
			      setTimeout(function () {
			        $this.data('wasTouchedRecently', false)
			      }, 300)
			    })
			    .on('touchend', function (e) {
			      e.preventDefault()
			      var $this = $(this)
			      $this.data({
			        lastTouchEnd: e.originalEvent,
			        wasTouchedRecently: true
			      })
			      setTimeout(function () {
			        $this.data('wasTouchedRecently', false)
			      }, 300)

			      if (wasTapped($this))
			        $this.tooltip('toggle')
			    })
			    .on('mouseenter', function () {
			      var $this = $(this)
			      if (!$this.data('wasTouchedRecently'))
			        $this.tooltip('show')
			    })
			    .on('mouseleave', function () {
			      var $this = $(this)
			      if (!$this.data('wasTouchedRecently'))
			        $this.tooltip('hide')
			    })

			    $('body')
			    .on('touchstart', function (e) {
			      $(this).data('lastTouchStart', e.originalEvent)
			    })
			    .on('touchend', function (e) {
			      var $body = $(this)
			      $body.data('lastTouchEnd', e.originalEvent)

			      $('[data-toggle="tooltip"]').each(function () {
			        var $tooltip = $(this)
			        var target = $tooltip.closest('[data-toggle="tooltip"]').get(0)

			        if ($tooltip.data('tooltipShown')
			          && e.target !== target && wasTapped($body)) {
			          e.preventDefault()
			          $tooltip.tooltip('hide')
			        }
			      })
			    })
			  }

			  $(initTooltip)
			})(jQuery);
		</script>
		<?php endif; ?>
<?php get_footer(); ?>
