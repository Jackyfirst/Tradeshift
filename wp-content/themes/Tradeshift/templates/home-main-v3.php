 <?php
/*
Template Name: Home Page - Main v3
*/

get_header('main-only-v3'); ?>
<!-- <style>
span.mktoButtonWrapbutton.ja_button {
	padding: 9px 15px !important;
	font-size: 16px !important;
}
</style>
 -->	

<style>
	@media (max-width: 992px) and (min-width: 768px) {
		.fp-tableCell {
			height: auto !important
		}
		#sectionTwoPartTwo {
			height: auto !important
		}
	}
	#sectionOne .fp-tableCell {
		/*display: block !important*/
		vertical-align: top !important

	}
	.not_mobile:first-child  .video-contents {
		padding-top: 11px
	}
	@media (max-height: 800px) and (min-width: 768px) {
		.hone {
			line-height: 60px !important;
		}
		.hthree {
			margin-bottom: 11px !important;
			font-size: 24px !important;
			line-height: 33px !important;
		}
		.highlights {
			margin-top: 22px !important
		}
		#sectionOne .icon-down-arrow {
			display: none !important
		}
	}
	@media (min-height: 800px) and (min-width: 768px) {
		.headline {
			margin-bottom: 44px
		}

	}
	@media (max-width: 992px) and (min-width: 768px) {
		.headline {
			margin-top: 0px !important
		}
		.section-one {
			padding-top: 66px !important
		}
	}
	@media (max-width: 768px) {
		.headline {
			margin-top: 55px !important;
		}
	}
</style>

 		<main id="fullpage" class="main-content home-main-v2">
 		<!-- Tradeshift live section one -->
		<div id="sectionOne" class="section section-view section-one">
			<div class="headline hidden-xs">
				<div class="container">
					<p><img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/ibx-logo.jpg" />Tradeshift acquires IBX Business Network <span>|</span> <span>Blog post headline/link</span></p>
				</div>
			</div>
			<div class="headline visible-xs">
			    <div class="container">
			        <div class="ibm-content">
			            <img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/ibx-logo.jpg" />
			            <p>Tradeshift acquires IBX<br>Business Network </p>
			            <div style="clear: both"></div>
			        </div>
			    </div>
			</div>
			<div id="s1Header" class="container" style="padding-top: 0px">
				<div class="row">
					<div class="contents">
						<p class="hone">Tradeshift live from the World Economic Forum in Davos</p>
						<p class="hthree">Stay up to date on the latest news and happenings</p>
						<a href="/davos" class="btn btn-primary-cta">Take me there</a>
						<p class="highlights">Today's highlights and livestreams</p>



						<div class="container-live-videos hidden-xs">
						<?php 

							$davos_event = array(
									'post_type'=>'resource',
									'meta_key'=>'davos_event',
									'meta_compare'=>'=',
								'meta_value'=>1,
								'posts_per_page'=>3,
								'orderby' => 'date');
							$davos_event_query = new WP_Query( $davos_event );
							?>
							<?php while ($davos_event_query->have_posts()) : $davos_event_query->the_post(); ?>
							<?php
							$roles_categories = wp_get_object_terms(get_the_ID(), 'resource_roles');
							$mt_categories = wp_get_object_terms(get_the_ID(), 'resource_media');

							$filter_classes = array();
							foreach ($roles_categories as $term) {
								$filter_classes[] = 'filter-role-' . $term->term_id;
							}
							foreach ($mt_categories as $term) {
								$filter_classes[] = 'filter-media-' . $term->term_id;
							}
							$first_media_category = isset($mt_categories[0]) ? $mt_categories[0] : false;
						?>
							<div class="live-video not_mobile">
								<div class="contents-video">
									<a href="<?php the_permalink(); ?>"><div class="live-img"><?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?></div></a>
									<div>
										<p class="video-date"><span>VIDEO</span> | <?php the_time('F j, Y') ?> | DAVOS</p>
										<p class="video-title"><?php echo mb_strimwidth(get_the_title(), 0, 40, "..."); ?></p>
										<p class="watch-now"><a href="<?php the_permalink(); ?>">Watch now &raquo;</a></p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						</div>

						<style>
							.carousel-control.right, .carousel-control.left {
								background-image: none !important;
							}
							.carousel-indicators {
						  		bottom:-50px;
							}
						</style>
						<div class="visible-xs">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  
								<!-- Indicators -->
								<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								</ol>
								  
								<!-- Wrapper for slides -->
								<div class="carousel-inner container-live-videos">

								<?php 

									$active ='active';
									$davos_event = array(
											'post_type'=>'resource',
											'meta_key'=>'davos_event',
											'meta_compare'=>'=',
										'meta_value'=>1,
										'posts_per_page'=>3,
										'orderby' => 'date');
									$davos_event_query = new WP_Query( $davos_event );
									?>
									<?php while ($davos_event_query->have_posts()) : $davos_event_query->the_post(); ?>
									<?php
									$roles_categories = wp_get_object_terms(get_the_ID(), 'resource_roles');
									$mt_categories = wp_get_object_terms(get_the_ID(), 'resource_media');

									$filter_classes = array();
									foreach ($roles_categories as $term) {
										$filter_classes[] = 'filter-role-' . $term->term_id;
									}
									foreach ($mt_categories as $term) {
										$filter_classes[] = 'filter-media-' . $term->term_id;
									}
									$first_media_category = isset($mt_categories[0]) ? $mt_categories[0] : false;
								?>
							<div class="item <?php echo $active ?>">
										<div class="live-video">
											<div class="contents-video">
												<a href="<?php the_permalink(); ?>"><div class="live-img"><?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?></div></a>
												<p class="video-date"><span>VIDEO</span> | <?php the_time('F j, Y') ?> | DAVOS</p>
												<p class="video-title"><?php the_title(); ?></p>
												<p class="watch-now"><a href="<?php the_permalink(); ?>">Watch now &raquo;</a></p>
											</div>
										</div>
									</div>

									<?php $active = ''; ?>
						<?php endwhile; ?>

								</div>
								  
								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							  
							</div>
						</div><!--//container -->
						<div class="row">
					<div id="heroForm" class="form-container" style="display: none;">
						<div id="formWrapper" class="form-wrapper">
							<form id="mktoForm_1773"></form>
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
				</div>
				
			</div>
			<div class="icon-down-arrow hidden-xs">Learn more</div>
		</div>

		<div id="sectionTwoPartOne" class="section section-view section-two section-two-one">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="copy-cta-wrapper">
							<p class="hone">Agile companies use Tradeshift to buy and sell more effectively</p>
							<h1 class="hthree">From enterprise procure-to-pay and supplier engagement to solutions for sellers and SMBs,</h1> <span class="hthree">we help companies tailor solutions that can quickly adapt to their changing needs.</span>
						</div>
					</div>
				</div>
				<div class="row row-form hidden-sm">
					<div class="contents">
						<div id="agileCompanies" class="form-container"> </div>
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

		<div id="sectionThree" class="section section-view section-three">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div id="copyForm3" class="copy-form-wrapper">
							<h2>800,000 companies use Tradeshift's marketplace to buy and sell</h2>
						</div>
						<div class="testimonials-wrapper visible-xs">
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/testimonials-xs.png" class="visible-xs testimonials-xs" />
						</div>




						<div class="testimonials-wrapper visible-sm">
							<div class="row">
								<div class="tiles tiles-wide tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs.png" alt="Tradeshift gives us a brilliant platform for better collaboration, and will allow us to scale up and evolve with suppliers, as well as introduce innovative solutions. – Simon Murphy, Director of Finance & Accounting, NHS Shared Business Services" class="murphy" />
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-air-france-klm-wide.png" alt="Tradeshift’s platform ensures that something as simple as an invoice doesn’t slow down our 24/7 business, benefiting both our company and our suppliers. - Thierry Bellon, CPO, Air France-KLM" class="klm" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-linkedin.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-starbucks.png" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-dhl.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-airfrance-klm.png" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-zurich.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-sbs.png" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-adm.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-citi.png" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-theguardian-yellow.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-hsbc.png" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-wide tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-hapag-lloyd.png" alt="Tradeshift’s interface is intuitive, state of the art, and among the best. The increase of transparency in workflows is one of major process improvements. - Dr. Thore Lindemann, Manager of e-Solutions, Hapag-Lloyd" class="hapag"/>
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-supplier.png" alt="Definitely recommended for NHS invoicing. I found it easy peasy to input my invoices, but the best thing was the speed of the approval process! - NHS supplier"  class="nhs-supplier"/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonials-wrapper visible-md visible-lg">
							<div class="row">
								<div class="tiles tiles-wide tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs.png" alt="Tradeshift gives us a brilliant platform for better collaboration, and will allow us to scale up and evolve with suppliers, as well as introduce innovative solutions. – Simon Murphy, Director of Finance & Accounting, NHS Shared Business Services" class="murphy" />
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-air-france-klm-wide.png" alt="Tradeshift’s platform ensures that something as simple as an invoice doesn’t slow down our 24/7 business, benefiting both our company and our suppliers. - Thierry Bellon, CPO, Air France-KLM" class="klm" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-linkedin.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-starbucks.png" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-dhl.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-sbs.png" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip visible-lg" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-adm.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-citi.png" />
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-theguardian-yellow.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-hsbc.png" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-airfrance-klm.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-dhl2.jpg" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-wide tiles-flip" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front front-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-hapag-lloyd.png" alt="Tradeshift’s interface is intuitive, state of the art, and among the best. The increase of transparency in workflows is one of major process improvements. - Dr. Thore Lindemann, Manager of e-Solutions, Hapag-Lloyd" class="hapag" />
										</div>
										<div class="back back-wide">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-supplier.png" alt="Definitely recommended for NHS invoicing. I found it easy peasy to input my invoices, but the best thing was the speed of the approval process! - NHS supplier" class="nhs-supplier" />
										</div>
									</div>
								</div>
								<div class="tiles tiles-sq tiles-flip visible-lg" ontouchstart="this.classList.toggle('hover');">
									<div class="tiles-wrapper">
										<div class="front">
											<img src="https://comweb.staging.wpengine.com/wp-content/themes/Tradeshift/img/mainv2/tiles-zurich.png" />
										</div>
										<div class="back">
											<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/tiles-nhs-sbs.png" />
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
						<div class="news news-cnbc2">
							<div class="headline">
								How an e-invoicing company could disrupt the banking industry
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/mainv2/logo-cnbc.png" />
						</div>
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
						<h2>Think outside the cubicle</h2>
						<h3>Now you can grow your company and become more agile than ever.</h3>
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
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_2288"></form>
			<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2288);
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
						analytics.track('Drones RTP Form Submit', {
							formName: 'Email Field',
							email: $emailMkto,
							companyName: $companyMkto,
							annualRevenue: $companyRFAnnualRev
							});
						// Send a click event to Google Analytics
						ga('send', 'event', 'marketo', 'form submit');
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


<?php get_footer('main-only-v3'); ?>
