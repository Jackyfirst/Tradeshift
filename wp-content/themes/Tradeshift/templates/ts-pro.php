 <?php
/*
Template Name: Tradeshift Pro
*/
get_header('ts-pro'); ?>

		<!-- Main Content Starts -->
		<main class="main-content-lp ts-pro">
			<!-- Hero Section -->
			<div class="hero hello-ts-pro">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h1>Say hello to <em>Tradeshift Pro</em></h1>
							<h3 class="hidden-xs">Simplify your AP process &amp; manage all your invoices in one place.</h3>
							<button class="btn btn-play-ts-pro" onclick="fn_vidyard_e2NSsT37DplhdZqVALiy2w();ga('send', 'event', 'Black widow', 'play', 'Tradeshift Pro - Video', {nonInteraction: true}); ">
								<script type="text/javascript" id="vidyard_embed_code_e2NSsT37DplhdZqVALiy2w" src="//play.vidyard.com/e2NSsT37DplhdZqVALiy2w.js?v=3.1&type=lightbox"></script></button>
							<p class="hero-lead">Tradeshift Pro is designed to get you started fast. Free yourself from manual, inefficient processes – once and for all.</p>
							<button class="btn btn-primary-cta" onclick="ga('send', 'event', 'Black widow', 'Play', 'Tradeshift Pro - header button', {nonInteraction: true});" data-toggle="modal" data-target="#mktoModal">Get started <span class="hidden-xs">with Tradeshift Pro</span></button>
						</div>
					</div>
				</div>
			</div>
			<div class="value">
				<div class="container">
					<div class="row">
						<div class="get-rid-paper">
							<h4>Touchless invoice processing</h4>
							<p>Reduce your manual work and save time and money.</p>
						</div>
						<div class="process-faster">
							<h4>Get started right away</h4>
							<p>Turn all your invoices into a digital format from day one.</p>
						</div>
						<div class="easy-use">
							<h4>Easy to use for you &amp; suppliers</h4>
							<p>Simple software means no training required.</p>
						</div>
					</div>
				</div>
			</div>
			<hr class="dash" />
			<div class="key-features">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Tradeshift Pro - <em>Key Features</em></h2>
							<div class="pricing-wrapper">
								<div class="pricing">
									<p class="intro">Recommended for companies with up to <em>500 employees</em>.</p>
									<h4>Tradeshift Pro</h4>
									<!-- <p class="starting">starting at</p>
									<div class="price">$30k</div>
									<p class="yearly">yearly</p> -->
									<br /><br /><br />
									<button class="btn btn-primary-cta" onclick="ga('send', 'event', 'Black widow', 'Click', 'Tradeshift Pro - pricing button');" data-toggle="modal" data-target="#mktoModal">Get started</button>
								</div>
							</div>
							<div class="feature-list-wrapper">
								<div class="feature-list">
									<ul class="visible-xs">
										<li>AP Automation</li>
										<li>Built-in Business Rules</li>
										<li>Approval Workflow</li>
										<li>Out-of-the-box ERP Integration</li>
										<li>Supplier Onboarding</li>
										<li>Mobile Capabilities</li>
									</ul>
									<dl class="hidden-xs">
										<dt class="trigger shown" data-target="#ap-automation">AP Automation</dt>
										<dd id="ap-automation" class="feature-listing shown">Cut out manual work – process all your invoices in one place, digitally, from day one.</dd>

										<dt class="trigger shown" data-target="#business-rules">Built-in Business Rules</a></dt>
										<dd id="business-rules" class="feature-listing shown">Minimize exceptions by catching invoice errors with Tradeshift Business Firewall before invoices are approved.</dd>

										<dt class="trigger shown" data-target="#workflow">Approval Workflow</a></dt>
										<dd id="workflow" class="feature-listing shown">Set approval hierarchies to route invoices to specific users and collaborate with your colleagues with Tradeshift Collaborative Workflow.</dd>

										<dt class="trigger shown" data-target="#erp-integration">Out-of-the-box ERP Integration</a></dt>
										<dd id="erp-integration" class="feature-listing shown">ERP integration available for NetSuite, Microsoft Dynamics, and QuickBooks Online. Other systems also supported.</dd>

										<dt class="trigger shown" data-target="#supplier-onboarding">Supplier Onboarding</a></dt>
										<dd id="supplier-onboarding" class="feature-listing shown">Suppliers get on board easily using Tradeshift CloudScan™ and our innovative marketing automation methods.</dd>

										<dt class="trigger shown" data-target="#mobile">Mobile Capabilities</a></dt>
										<dd id="mobile" class="feature-listing shown">Buyers and suppliers can view, create, collaborate, and approve on-the-go.</dd>

									</dl>
								</div>
								<div class="download-data-sheet"><a href="http://downloads.tradeshift.com/TradeshiftPro.pdf" target="_blank" onclick="ga('send', 'event', 'Main CTA', 'Click', 'Tradeshift Pro - download onepager');"><em>Download</em> the full data sheet to view all features </a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cta-sales">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Looking for a custom plan?</h2>
							<p>Speak with a sales consultant.<br /> Call <a href="tel://1-800-381-3585">1-800-381-3585</a> or email <a href="mailto:sales@tradeshift.com">sales@tradeshift.com</a>.</p>
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
		        <h3 id="myModalLabel">Get started with Tradeshift Pro</h3>
		        <p class="lead">Say hello to AP automation and so long to your paper problem.</p>
		      </div>
		      <div class="modal-body">
		        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_848"></form>
				<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 848, function(form){
		           form.vals({"Marketing_Resource_Name__c":"Tradeshift Pro page"});
		    	});
				// ]]></script>
		      </div>
		    </div>
		  </div>
		</div>
		

<?php get_footer(); ?>
