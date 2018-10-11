 <?php
/*
Template Name: Solutions - eProcurement
*/
get_header(); ?>

		<!-- Main Content Starts -->
		<main class="main-content eprocurement-page">
			<!-- Image path-like that overlays each section all the way to the footer -->
			<!-- <div id="path-white" class="path-white"> </div> -->
			<div id="path-orange" class="path-orange"> </div>
			<!-- Hero Section -->
			<div class="hero video">
				<div class="container">
					<div class="row">
						<div class="video-bg">
							<ul id="video-wrapper" class="hidden-xs">
								<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/eprocurement/video-poster.jpg" /></li>
								<li><video id="trailer" autobuffer loop autoplay poster="<?php echo get_template_directory_uri(); ?>/img/misc/transparent.png">
										<source src="<?php echo get_template_directory_uri(); ?>/videos/eprocurement-trailer-final-cut.mp4" type="video/mp4" />
										<source src="<?php echo get_template_directory_uri(); ?>/videos/eprocurement-trailer-final-cut.webm" type="video/webm" />
									</video></li>
							</ul>
							<!-- TODO: optimize: server-side sniff to detect mobile viewport to render image below -->
							<ul class="visible-xs">
								<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/eprocurement/video-poster-xs.jpg" /></li>
							</ul>
						</div>
						<div class="contents" id="heroStart">
							<h1>Hey Procurement, we need to talk.</h1>
							<h3>We interviewed procurement professionals about what’s wrong. <br class="visible-xs" />And we listened.</h3>
							<button class="btn btn-play-bordered" onclick="fn_vidyard_I0y0a4btV6EAjXQTG$lQGw(); pauseOnClick();">
							<script type="text/javascript" id="vidyard_embed_code_I0y0a4btV6EAjXQTG-lQGw" src="//play.vidyard.com/I0y0a4btV6EAjXQTG-lQGw.js?v=3.1.1&type=lightbox"></script></button>
						</div>
					</div>
				</div>
			</div>
			<div class="step-1">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h3>Let’s get <em>real</em> about <br class="visible-xs" />what’s not working.</h3>
							<p>You’ve heard it’s impossible to get control over 100% of your spend.</p>
							<p>Your employees are still going rogue, and they’re STILL not happy with the processes you try to enforce.</p>
							<p>You’re saving some money, but your buying tools aren’t <em>creating value</em> for your company.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="step-2">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h3>It’s time to <em>rethink</em> eProcurement.</h3>
							<p>For the last 15 years, eProcurement software has done the same things...but promised different results.</p>
							<p>Companies are spending their resources trying (and failing) to enforce top-down processes. They’re investing millions in a philosophy that doesn’t work.</p>
							<p>The eProcurement tools you use are about limitations. We think it’s time to change that.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="step-3">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h3>We need to <em>start over</em>.</h3>
							<p>Why assume that it’s impossible to manage 100% of your spend?</p>
							<p>What about including all your suppliers? What about the lack of control you battle every day?</p>
							<p><strong>There's a better way.</strong>
						</div>
					</div>
				</div>
			</div>
			<div class="procurecon">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="tweet-for-trip visible-xs">
								<div class="tweet-for-trip-wrapper">
									<h3>Master your spend. <em>Get this free whitepaper.</em></h3>
									<p>Do you control your spend, or does it control you? Download your <strong>FREE</strong> copy of <strong>"A New Beginning for Enterprise eProcurement."</strong> You can end rogue spend. You can end your tortured love affair with outdated, clunky, and inefficient legacy systems that keep breaking their promises.</p>
									<p>Uncover the one simple tool that will keep you in control and ahead of the game. Say no to missed opportunities and say yes to success.</p>
									<a class="btn btn-primary-cta btn-orange" href="http://tradeshift.com/resources/ts-buy/">Download Now</a>
								</div>
							</div>
							<div class="twitter-feed">
								<div id="twStream" class="tweets-container">
									<!-- Tweets about @Tradeshift AND #procurement | Use twFetcher.js plugin to show tweets | Call to plugin on eprocurement.js -->
								</div>
							</div>
							<!-- TODO: server-side sniff on mobile device to rid of duplicate content -->
							<div class="tweet-for-trip hidden-xs">
								<div class="tweet-for-trip-wrapper">
									<h3>Master your spend. <em>Get this free whitepaper.</em></h3>
									<p>Do you control your spend, or does it control you? Download your <strong>FREE</strong> copy of <strong>"A New Beginning for Enterprise eProcurement."</strong> You can end rogue spend. You can end your tortured love affair with outdated, clunky, and inefficient legacy systems that keep breaking their promises.</p>
									<p>Uncover the one simple tool that will keep you in control and ahead of the game. Say no to missed opportunities and say yes to success.</p>
									<a class="btn btn-primary-cta btn-orange" href="http://tradeshift.com/resources/ts-buy/">Download Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fill-out-form">
				<div class="container">
					<div class="row">
						<div class="form-subscribe">
							<h2>Be the first to know.</h2>
							<p>Find out what we’ve got in store for eProcurement before anyone else. <br class="visible-lg" />(Our email updates are delightfully rare.) </p>
							<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
							<form class="form-inline newsletter-subscription" id="mktoForm_864"></form>
							<script type="text/javascript">// <![CDATA[
					        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 864, function(form){
					           form.vals({"Marketing_Resource_Name__c":"eProcurement Landing Page"});
					    	});
							// ]]></script>
						</div>
					</div>
					<div class="row">
						<p class="sub">We guarantee 100% privacy. Your information will not be shared.</p>
					</div>
				</div>
			</div>
		</main>

		<!-- Page specific JS -->
		<!-- Hero Section - image/video load sequence -->
		<script>
			// Hero section:  show the image on first pass, then after window loads, show video
			$(window).load(function(){
                $("ul#video-wrapper li").toggleClass("active");
             });

			// Pause the trailer HTML5 video loop on play of the main video
			function pauseOnClick() {
				document.getElementById('trailer').pause();
			}
		</script>


<?php get_footer(); ?>
