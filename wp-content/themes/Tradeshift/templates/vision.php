 <?php
/*
Template Name: Vision
*/
get_header(); ?>
	<!-- Main Content Starts -->
	<main class="main-content vision-page">
		<!-- Hero Section -->
		<div class="hero software">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1>Software built for change.</h1>
						<h3>Tradeshift is a cloud platform that connects buyers, suppliers, and all their processes in one place. Our vision is to connect every business in the world with one solution that evolves as you do.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="digital-new-imperative">
			<div class="container">
				<div class="row">
					<div class="contents">
						<img src="<?php echo get_template_directory_uri(); ?>/img/vision/digital-800.png" class="visible-xs" width="175" />
						<h2>Digital is the new imperative.</h2>
						<p>Most enterprise software is built for where businesses were 10 years ago, not where they’ll be in 10 years.</p>
						<p>Created before the Internet, ERPs were built to centralize financial data and accounting. They weren’t built for interactions between buyers and suppliers, or for the digital world we now live in.</p>
						<p>Enterprises need a modern way to work with all their suppliers: one place that’s connected, collaborative, agile and data-driven. A networked platform that’s built with suppliers at its core.</p>
						<p class="that-platform">Tradeshift is that platform.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="differentiator-intro">
			<div id="stars"></div>
			<div id="stars2"></div>
			<div id="stars3"></div>
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Keep ERP for what it does best. <br class="hidden-xs" />
						Use Tradeshift for the rest.</h2>
						<p>Tradeshift integrates ERP’s strong suit – financial data – with the rest of your supply chain processes. We’re transforming buyer-supplier relationships through our:</p>
						<ul>
							<li>Extensible platform &amp; apps</li>
							<li>Supplier network &amp; onboarding methods</li>
							<li>Broad scope of spend management (direct, indirect &amp; services)</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="differentiator-list">
			<div class="container">
				<div class="row modern-apps">
					<div class="modern">
						<img src="<?php echo get_template_directory_uri(); ?>/img/vision/icon-modern-business.png" />
						<h4>A modern business platform.</h4>
						<p>Tradeshift’s platform works as a single hub of collaboration for buyers and suppliers.</p>
						<p>Whether you have SAP, Oracle, or other back-end systems, Tradeshift integrates with the software you already use. We help you break down business silos and combine supply chain workstreams into one place.</p>
						<!-- <p><a href="#">Learn more &raquo;</a></p> -->
					</div>
					<div class="apps">
						<img src="<?php echo get_template_directory_uri(); ?>/img/vision/icon-apps.png" />
						<h4>Apps. So you can sleep at night.</h4>
						<p>You can’t always predict the future. Tradeshift’s business apps save you from needing to "rip and replace" our solution as your requirements change.</p>
						<p>Activate business apps that already exist on our open platform, or build custom apps yourself or with any of our partners. Tradeshift reduces your need to handle multiple disconnected systems for business processes – just add a new app.</p>
						<!-- <p><a href="#">Learn more &raquo;</a></p> -->
					</div>
				</div>
				<div class="row supplier-network-spend">
					<div class="supplier-network">
						<img src="<?php echo get_template_directory_uri(); ?>/img/vision/icon-supplier-network.png" />
						<h4>A supplier network that really works.</h4>
						<p>Getting all your suppliers connected and participating is critical to your supply chain’s success. We have a proven track record of onboarding suppliers up to 75 times faster than our competitors. <!-- Read more about our groundbreaking onboarding methods here.--></p>
						<p>With Tradeshift, suppliers only have to onboard once, whether they start with AP automation, working capital optimization, or supplier management.</p>
						<p>Engage with your suppliers who are already on our network, discover and select new suppliers based on ratings from other buyers, and leverage network data to detect and analyze trends.</p>
						<!-- <p><a href="#">Learn more &raquo;</a></p> -->
					</div>
					<div class="spend">
						<img src="<?php echo get_template_directory_uri(); ?>/img/vision/icon-spend.png" />
						<h4>Direct &amp; indirect spend in one place.</h4>
						<p>Tradeshift helps you manage more of your spend – direct, indirect and services spend – all in one place.</p>
						<p>Increase your spend under management, boost process efficiencies and capture savings. All while enjoying better collaboration and trusted relationships with suppliers from all parts of your supply chain.</p>
						<!-- <p><a href="#">Learn more &raquo;</a></p> -->
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
							<button type="button" class="btn btn-primary-cta" id="getStartedVision" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
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
	<div class="modal fade" id="mktoModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel">Request a Demo</h3>
	        <p class="lead">Start your journey with a free demo today.</p>
	      </div>
	      <div class="modal-body">
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_702"></form>
			<script type="text/javascript">// <![CDATA[
	        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 702, function(form){
	           form.vals({"Marketing_Resource_Name__c":"Vision Page"});
	    	});
			// ]]></script>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Scripts and CSS for this template only -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/vision-stars.css" rel="stylesheet">


<?php get_footer(); ?>
