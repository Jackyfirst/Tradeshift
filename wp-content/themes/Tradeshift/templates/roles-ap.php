<?php
/*
Template Name: Roles - AP
	*/
get_header(); ?>

		<!-- Main Content Starts -->
		<main class="main-content roles ap">
			<!-- Hero Section -->
			<div class="hero go-paperless">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h1><?php _e("Rethink AP Automation.", 'Tradeshift'); ?></h1>
							<h3><?php _e("Go paperless &amp; get efficient processes...and happier suppliers.", 'Tradeshift'); ?></h3>
							<button id="heroMainCtaRolesAP" class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal">
								<?php _e("Let's get started"); ?>
							</button>
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
								<p>
									<?php _e("Shuffling paper slows everything down.
										Tradeshift is the only AP automation platform that actually gets rid of your paper over time.
										Electronically manage and collaborate on all your business documents, including invoices,
										purchase orders, credit notes, and W9 forms.
									", 'Tradeshift'); ?>
							</p>
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
							<h2><?php _e("Simplify your entire process.", 'Tradeshift'); ?></h2>
							<p><?php _e("Efficient AP automation starts with automating invoice processing, data entry, matching &amp; validation, and approvals. Speed up your processes with E-invoicing, CloudScan&#8482; data capture, and automated business rules.", 'Tradeshift'); ?></p>
							</div>
							<div class="process">
							<h3><?php _e("Process 50% more invoices", 'Tradeshift'); ?></h3>
								<hr />
								<p class="sub"><?php _e("With Tradeshift, a global transportation &amp; logistics company went from handling 4,000 to 6,000 invoices/FTE/month.", 'Tradeshift'); ?></p>
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
						<h2><?php _e("Track every transaction", 'Tradeshift'); ?>.</h2>
						<p><?php _e("You can’t stay on top of things if you don’t know what’s going on. Get full visibility into AP operations. Our easy-to-use dashboard gives you quick, accurate insights into your invoice statuses, supplier data, and key performance metrics.", 'Tradeshift'); ?></p>
							<img class="laptop hidden-xs" src="<?php echo get_template_directory_uri(); ?>/img/roles/ap/track-every-transaction-laptop.png" alt="<?php _e("Track Every Transaction", "Tradeshift"); ?>" />
						</div>
					</div>
				</div>
			</div>
			<div class="one-place-to-communicate">
				<div class="container">
					<div class="row">
						<div class="contents">
						<h2><?php _e("One place to communicate.", 'Tradeshift'); ?></h2>
						<p><?php _e("Communicate effectively across departments and with suppliers on POs, invoices, resolving disputes, and more. Live chat, within-document commenting and complete audit trails of all interactions are just a few examples.", 'Tradeshift'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonials hidden-xs">
				<div class="container">
					<div class="row">
						<div class="contents">
							<img src="<?php echo get_template_directory_uri(); ?>/img/roles/ap/sharon-headshot@2x.png" alt="<?php _e("Sharon Davidson, NHS SBS Supplier", "Tradeshift"); ?>" />
							<div class="quotation"><?php _e("“I find Tradeshift easy, simple, very quick, and I actually get paid. I find it seamless and effective.”", 'Tradeshift'); ?></div>
							<div class="quoted-person"><?php _e("&#8212; Sharon Davidson, NHS SBS Supplier", 'Tradeshift'); ?></div>
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
							<h2><?php _e("No more phone calls.", 'Tradeshift'); ?></h2>
							<p><?php _e("Reduce supplier inquiries with Tradeshift’s self-service model, which allows suppliers to easily track and receive invoice status updates. Bring suppliers into your workflow and communicate directly with them and other colleagues.", 'Tradeshift'); ?></p>
							</div>
							<div class="happy-supplier">
								<img class="hidden-xs" src="<?php echo get_template_directory_uri(); ?>/img/roles/ap/no-more-phone-calls-headshot-desktop.png" alt="<?php _e("No More Phone Calls", "Tradeshift"); ?>" />
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="achieve-faster-roi">
				<div class="container">
					<div class="row">
						<div class="contents">
						<h2><?php _e("Achieve faster ROI with every supplier on board.", 'Tradeshift'); ?></h2>
						<p><?php _e("Suppliers shouldn’t have to pay to invoice you. Tradeshift is free for suppliers and easy to use, and we have high, fast adoption rates because of it. Full supplier participation brings you faster return on investment and real business case results.", 'Tradeshift'); ?></p>
							<hr />
							<h3><?php _e("12x faster onboarding", 'Tradeshift'); ?></h3>
							<p class="sub"><?php _e("In just 6 months, Tradeshift onboarded more suppliers for the world's most recognized athletic apparel, footwear and equipment brand than our competitor did in 4 years.", 'Tradeshift'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="resources">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Learn more about us:</h2>
							<div class="resource-wrapper">
								<a class="trigger-res-1" href="/resources/supplier-management-checklist/"><img class="img-responsive" src="/wp-content/uploads/2015/07/supplier_checklist1.jpg" /></a>
								<p><?php _e("Supplier Management Checklist", 'Tradeshift'); ?> <br class="visible-sm" /><a class="trigger-res-1"  href="/resources/supplier-management-checklist/"><?php _e("Download &raquo;"); ?></a></p>
							</div>
							<div class="resource-wrapper">
								<a class="trigger-res-2" href="/resources/procure-pay-transformation-inevitable-modern-enterprise/"><img class="img-responsive" src="/wp-content/uploads/2015/01/p2p_v01.jpg" /></a>
								<p>
									<?php _e("Procure-to-Pay Transformation: Inevitable for the Modern Enterprise?", 'Tradeshift'); ?> <br class="visible-sm" />
									<a class="trigger-res-2" href="/resources/procure-pay-transformation-inevitable-modern-enterprise/"><?php _e("Download &raquo;"); ?></a>
							</p>
							</div>
							<div class="resource-wrapper">
								<a class="trigger-res-3" href="http://blog.tradeshift.com/how-dhl-uses-tradeshift-for-ap-automation-success-video/">
									<img class="img-responsive" src="http://blog.tradeshift.com/wp-content/uploads/2015/08/dhl_blog_headerimage-650x350.png" />
								</a>
								<p><?php _e("How DHL Uses Tradeshift for AP Automation Success", 'Tradeshift'); ?><br class="visible-sm" />
								<a class="trigger-res-3" href="http://blog.tradeshift.com/how-dhl-uses-tradeshift-for-ap-automation-success-video/"><?php _e("Watch &raquo;"); ?></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a id="request-demo" name="request-demo"> </a>
			<div class="fill-out-form">
				<div class="container">
					<div class="row">
					<h2><?php _e("Learn how Tradeshift can help your enterprise.", 'Tradeshift'); ?></h2>
						<form novalidate autocomplete="off" class="roles-pages" id="getStarted" onsubmit="return false;">
							<div class="form-group">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
							</div>
							<div class="form-group">
								<button id="getStartedRolesAP" type="button" class="btn btn-primary-cta" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
							</div>
						</form>
					</div>
					<div class="row">
					<p class="sub"><?php _e("Tradeshift takes your privacy seriously. We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.", 'Tradeshift'); ?></p>
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
										<p class="lead"><?php _e("You’re seconds away from transforming your business!", 'Tradeshift'); ?></p>
								</div>
								<div class="modal-body">
										<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
				<form id="mktoForm_552"></form>
<script type="text/javascript">// <![CDATA[
MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 552, function(form){
	form.vals({"Marketing_Resource_Name__c":"AP page"});
});

// ]]></script>
</div>
	</div>
	</div>
	</div>

	<?php get_footer(); ?>
