 <?php
/*
Template Name: Landing Page - Custom: Start 2016 Smarter
*/
get_header('lp-custom'); ?>
		<!-- Main Content Starts -->
		<main class="main-content start2016smarter" style="margin-top: 0">
			<!-- Hero Section -->
			<div class="hero">
				<div class="video-bg">
					<?php if (is_mobile()): ?>
						<ul>
							<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/hero-bg-xs.jpg" /></li>
						</ul>
					<?php elseif (is_tablet()): ?>
						<ul>
							<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/hero-bg.jpg" /></li>
						</ul>
					<?php else: ?>
						<ul id="video-wrapper">
							<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/hero-bg.jpg" /></li>
							<li><video id="trailer" autobuffer loop autoplay poster="<?php echo get_template_directory_uri(); ?>/img/misc/transparent.png">
									<source src="<?php echo get_template_directory_uri(); ?>/videos/start2016smarter.mp4" type="video/mp4" />
									<source src="<?php echo get_template_directory_uri(); ?>/videos/start2016smarter.webm" type="video/webm" />
								</video></li>
						</ul>
					<?php endif; ?>
				</div>
				<div class="container">
					<div class="row intro-text-cta-form">
						<div class="intro-text-cta">
							<h1>Start 2016 smarter.<br />Accelerate your year.</h1>
							<h3>Get the essential guide to the art of corporate buying, suppliers, and business results.</h3>
						<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
						<?php if (is_mobile()): ?>
							<button class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal">Get your copy</button>
						</div>
						<?php elseif (is_tablet()): ?>
							<button class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal">Get your copy</button>
						</div>
						<?php else: ?>
							<button class="btn btn-primary-cta hidden-md hidden-lg" data-toggle="modal" data-target="#mktoModal">Get your copy</button>
						</div>
						<div class="cta-form hidden-xs hidden-sm">
							<form id="mktoForm_1079"></form>
						</div>
						<?php endif; ?>
						<script type="text/javascript">// <![CDATA[
					        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1079, function(form){
					           form.vals({"Marketing_Resource_Name__c":"start smarter 2016"});
					           form.onSubmit(function(){
					              ga('send', 'event', 'Main CTA', 'Submit', 'Start 2016 Smarter');
					           });
					    	});
							// ]]>
						</script>
					</div>
				</div>
			</div>
			<div class="business-moves-faster">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>It’s 2016 and business has never moved faster.</h2>
							<p>Roles like procurement and risk management have moved from administrative and compliance-based to heavily strategic. The tools and processes are changing and it’s key to understand what’s happening–and why. <strong>Start 2016 Smarter</strong> dives deep into these issues, the future of business, and how to leverage the strength of open platforms for maximum results.</p>
							<!-- CTA Button -->
							<?php if (is_mobile()): ?>
								<button class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal">Don't miss out</button>
							<?php elseif (is_tablet()): ?>
								<button class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal">Don't miss out</button>
							<?php else: ?>
								<button class="btn btn-primary-cta hidden-md hidden-lg" data-toggle="modal" data-target="#mktoModal">Don't miss out</button>
								<button class="btn btn-primary-cta hidden-xs hidden-sm" onClick="gotoMktoForm();">Don't miss out</button>
							<?php endif; ?>
							<!-- Draw the book -->
							<?php if (is_mobile()): ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/book-xs-min.png" />
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/book-lg-min.png" />
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Modal View of Registration -->
		<!-- Modal View of Marketo Forms2 -->
		<div class="modal fade" id="mktoModal" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 id="myModalLabel">Start 2016 Smarter.</h3>
		        <p class="lead">Get the guide today.</p>
		      </div>
		      <div class="modal-body">
					<form id="mktoForm_1091"></form>
					<script type="text/javascript">// <![CDATA[
				        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1091, function(form){
				           form.vals({"Marketing_Resource_Name__c":"start smarter 2016"});
				           form.onSubmit(function(){
				              ga('send', 'event', 'Main CTA', 'Submit', 'Start 2016 Smarter');
				           });
				    	});
						// ]]></script>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Hero section:  show the image on first pass, then after window loads, show video -->
		<script>
			$(window).load(function(){
			    $("ul#video-wrapper li").toggleClass("active");
			 });

			// Pause the trailer HTML5 video loop on play of the main video
			function pauseOnClick() {
			  document.getElementById('trailer').pause();
			};

			function gotoMktoForm() {
			  document.getElementById('mktoForm_1079').FirstName.focus();
			}
		</script>
<?php get_footer(); ?>