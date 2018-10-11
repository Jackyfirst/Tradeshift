 <?
/*
Template Name: Tradeshift Pro - AP
*/
get_header('ts-pro-ap'); ?>

		<!-- Main Content Starts -->
		<main class="main-content roles ts-pro-ap">
			<!-- Hero Section -->
			<div class="hero go-paperless">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h1>Rethink AP Automation.</h1>
							<h3>Go paperless &amp; get efficient processes...and happier suppliers.</h3>
							<!-- <button class="btn btn-primary-cta" onclick="_gaq.push(['_trackEvent', 'Main CTA', 'Click', 'AP - header button' ]);" data-toggle="modal" data-target="#mktoModal">Request a demo</button> -->
						</div>
					</div>
					<div class="customer-logos"><!-- we use background image here so it scales with device viewport --></div>
				</div>
			</div>
			<div class="get-more-done">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="product-screenshot">
								<img class="laptop" src="<?php echo get_template_directory_uri(); ?>/img/roles/ap/get-more-done-desktop.png" alt="Get More Done" />
							</div>
							<div class="text-intro">
								<h2>Get more done.</h2>
								<p>Shuffling paper slows everything down. Tradeshift is the only AP automation platform that actually gets rid of your paper over time. Electronically manage and collaborate on all your business documents like invoices and purchase orders.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="simplify-your-entire-process">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="simplify">
								<h2>Simplify your entire process.</h2>
								<p>Efficient AP automation starts with automating invoice processing, data entry, matching &amp; validation, and approvals. Speed up your processes with E-invoicing, CloudScan&#8482; data capture, and automated business rules.</p>
							</div>
							<div class="process">
								<h3>Process 30% more invoices</h3>
								<hr />
								<p class="sub">With Tradeshift, a global transportation &amp; logistics company went from handling 4,000 to 6,000 invoices/FTE/month.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="track-every-transaction">
				<div class="bg-treatment"></div>
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Track every transaction.</h2>
							<p>You can’t stay on top of things if you don’t know what’s going on. Get full visibility into AP operations by having all of your invoices in one place.</p>
							<img class="laptop hidden-xs" src="<?php echo get_template_directory_uri(); ?>/img/roles/ap/track-every-transaction-laptop.png" alt="Track Every Transaction" />
						</div>
					</div>
				</div>
			</div>
			<div class="one-place-to-communicate">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>One place to communicate.</h2>
							<p>Communicate effectively across departments and with suppliers on POs, invoices, resolving disputes, and more. Live chat, within-document commenting and complete audit trails of all interactions are just a few examples.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonials hidden-xs">
				<div class="container">
					<div class="row">
						<div class="contents">
							<img src="<?php echo get_template_directory_uri(); ?>/img/roles/ap/sharon-headshot@2x.png" alt="Sharon Davidson, NHS SBS Supplier" />
							<div class="quotation">“I find Tradeshift easy, simple, very quick, and I actually get paid. I find it seamless and effective.”</div>
							<div class="quoted-person">&#8212; Sharon Davidson, NHS SBS Supplier</div>
						</div>
					</div>
				</div>
			</div>
			<div class="no-more-phone-calls">
				<div class="bg-treatment"></div>
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="text-intro">
								<h2>No more phone calls.</h2>
								<p>Reduce supplier inquiries with Tradeshift’s self-service model, which allows suppliers to easily track and receive invoice status updates. Bring suppliers into your workflow and communicate directly with them and other colleagues.</p>
							</div>
							<div class="happy-supplier">
								<img class="hidden-xs" src="<?php echo get_template_directory_uri(); ?>/img/roles/ap/no-more-phone-calls-headshot-desktop.png" alt="No More Phone Calls" />
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="achieve-faster-roi">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Achieve faster ROI with every supplier on board.</h2>
							<p>Suppliers shouldn’t have to pay to invoice you. Tradeshift is free for suppliers and easy to use, and we have high, fast adoption rates because of it. Full supplier participation brings you faster return on investment and real business case results.</p>
							<hr />
							<h3>12x faster onboarding</h3>
							<p class="sub">In just 6 months, Tradeshift onboarded more suppliers for the world's most recognized athletic apparel, footwear and equipment brand than our competitor did in 4 years. </p>
						</div>
					</div>
				</div>
			</div>
			<a id="request-demo" name="request-demo"> </a>
			<div class="fill-out-form">
				<div class="container">
					<div class="row">
						<h2>Learn how Tradeshift can help you.</h2>
						<form novalidate autocomplete="off" class="roles-pages" id="getStarted">
							<div class="form-group">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary-cta" id="submit" onclick="sameEmail(); ga('send', 'event', 'Black widow', 'Click', 'Tradeshift Pro - footer button');" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
							</div>
						</form>
					</div>
					<div class="row">
						<p class="sub">Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
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
		        <p class="lead">You’re seconds away from transforming your business!</p>
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
