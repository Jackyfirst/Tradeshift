 <?php
/*
Template Name: General - Thank You CN
*/
get_header(); ?>
		<!-- Main Content Starts -->
		<main class="main-content general thank-you">
			<!-- Hero Section -->
			<div class="hero interest">
				<div class="container">
					<div class="row">
						<div class="contents">
							<!-- Grab the contents from the WP Admin CMS Page content field -->
							<?php
								if (have_posts()) :
								   while (have_posts()) :
								      the_post();
								         the_content();
								   endwhile;
								endif;
							?>
						</div>
					</div>
				</div>
			</div>
			</div>
      <!--
			<div class="explore-resources">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Explore more resources.</h2>
							<p>Check out our most popular webinars, videos, white papers, articles, and blog posts to help you learn more about the future of e-business.</p>
							<div class="blog">
                                <img src="/wp-content/uploads/2018/05/Gartner-MQ-resource-image.jpg" alt="Gartner Magic Quadrant for Procure-to-Pay Suites" />
                                <h4><a href="/resources/complimentary-report-gartner-magic-quadrant-for-procure-to-pay-suites/?utm_source=thank_you_page&utm_medium=landing_page&utm_campaign=read_more_resources">[Complimentary Report] Gartner Magic Quadrant for Procure-to-Pay Suites</a></h4>
                                <div class="intro-text">Here at Tradeshift, we think we’re building strong momentum in Procure-to-Pay, and in light of that, we’re thrilled to share that we’ve been positioned in the Gartner Magic Quadrant for Procure-to-Pay Suites.</div>
							</div>
							<div class="blog">
                                <img src="/wp-content/uploads/2017/08/VE-webinar-image.jpg" alt="Unlocking the Value of your Procure-to-Pay Process" />
                                <h4><a href="/resources/unlocking-the-value-of-your-procure-to-pay-process-webinar/?utm_source=thank_you_page&utm_medium=landing_page&utm_campaign=read_more_resources">Unlocking the Value of your Procure-to-Pay Process</a></h4>
                                <div class="intro-text">How to Build Your P2P Business Case Quickly and Easily: Procure-to-Pay is one of those areas that can continue generating value for your business, if done right!</div>
							</div>
                            <div class="blog">
                                <img src="/wp-content/uploads/2018/06/ardent_landing_page_actual_size.png" alt="The State of ePayables 2018: The Future of AP is Now" />
                                <h4><a href="/resources/the-state-of-epayables-2018-the-future-of-ap-is-now/?utm_source=thank_you_page&utm_medium=landing_page&utm_campaign=read_more_resources">The State of ePayables 2018: The Future of AP is Now</a></h4>
                                <div class="intro-text">The debate is over: digitization and automation should be the default of every finance department. Yet while the majority of organizations view Accounts Payable as a strategic business unit, a large number of AP departments are still stuck in the past</div>
                            </div>
                            <div class="blog">
                                <img src="/wp-content/uploads/2017/09/resource-pay-datasheet.png" alt="Tradeshift Pay Datasheet" />
                                <h4><a href="/resources/tradeshift-pay-datasheet/?utm_source=thank_you_page&utm_medium=landing_page&utm_campaign=read_more_resources">Tradeshift Pay Datasheet</a></h4>
                                <div class="intro-text">Accounts Payable is a key player in your company’s operations, and in maintaining supplier relationships. AP has a short window to process invoices to make sure they are compliant, accurate, and paid on time.</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="stay-know">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Stay in the know.</h2>
							<p> Follow us on social media to stay up to date on product developments, industry news, and exciting announcements.</p>
							<div class="social-triggers">
								<a href="https://facebook.com/Tradeshift" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-facebook.png" alt="Facebook" /></a>
								<a href="http://twitter.com/Tradeshift" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-twitter.png" alt="Twitter" /></a>
								<a href="http://google.com/+Tradeshift" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-gplus.png" alt="Google Plus" /></a>
								<a href="http://linkedin.com/company/tradeshift" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-linkedin.png" alt="LinkedIn" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="take-our-word-for-it">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Don't just take our word for it.</h2>
							<p>"Tradeshift’s platform ensures that something as simple as an invoice doesn’t slow down our 24/7 business, benefiting both our company and our suppliers."</p>
							 <img src="<?php echo get_template_directory_uri(); ?>/img/general/tnw.png" />
							<p style="margin: 11px auto">- Thierry Bellon, CPO, Air France-KLM</p>
						</div>
					</div>
				</div>
			</div>
			<div class="component contact-us-form gradient-blue">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h4 class="hidden-xs"><?php _e("Subscribe to Tradeshift Blog", 'Tradeshift'); ?></h4>
							<p class="lead">
								<?php
									_e("Join thousands of others who receives our updates.", "Tradeshift");
								?>
							</p>
							<button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#subscribeUpdates"><?php _e("Subscribe to our blog", 'Tradeshift'); ?></button>
						</div>
					</div>
				</div>
			</div>
    -->
		</main>
    <!--
		<div class="modal fade" id="subscribeUpdates" tabindex="-1" aria-hidden="true" >
			<div class='modal-close-overlay'></div>
			<div class="modal-dialog">
				<div class="modal-content">
			  		<div class="modal-header">
			    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				        <h3 class="myModalLabel">
				        	<?php
				        		_e("Subscribe to Tradeshift Blog", "Tradeshift");
				        	?>
				        </h3>
				        <p class="lead">
				        	<?php
				        		_e("Get every new post delivered to your Inbox.", "Tradeshift");
				        	?>
				        </p>
			  		</div>
			  		<div class="modal-body">
			  			<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
						<form id="mktoForm_1762"></form>
						<script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1762);</script>
						<script>
						MktoForms2.whenReady(function (form){
						 //Add an onSuccess handler
						  form.onSuccess(function(values, followUpUrl){
						   //get the form's jQuery element and hide it
						   form.getFormElem().hide();
						   document.getElementById('confirmSubmit').style.visibility = 'visible';
						   //return false to prevent the submission handler from taking the lead to the follow up url.
						   return false;
						 });
						});
						</script>
						<div id="confirmSubmit" style="visibility:hidden;">
							<p>
								<strong>
								<?php
									_e("Thank you for subscribing to the Tradeshift Blog, look forward to new content in your inbox soon.", "Tradeshift");
								?>
								</strong>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		 Twitter JS
		<script>
			window.twttr = (function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0],
			t = window.twttr || {};
			if (d.getElementById(id)) return t;
			js = d.createElement(s);
			js.id = id;
			js.src = "https://platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js, fjs);

			t._e = [];
			t.ready = function(f) {
			t._e.push(f);
			};

			return t;
			}(document, "script", "twitter-wjs"));
		</script>
  -->
<?php get_footer(); ?>
