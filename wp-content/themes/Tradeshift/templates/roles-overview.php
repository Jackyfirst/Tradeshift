<?php
/*
Template Name: Roles - Overview
*/
get_header(); ?>

<!-- Main Content Starts -->
<main class="main-content roles roles-overview">
	<!-- Hero Section -->
	<div class="hero we-understand">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h1><?php _e("You know your job better than anyone.", 'Tradeshift'); ?></h1>
					<h3><?php _e("We get it. To do your job well, you need a solution that meets your specific requirements. Tradeshift can help you get your business where it needs to go.", 'Tradeshift'); ?></h3>
				</div>
			</div>
		</div>
	</div>
	<div class="role-list">
		<div class="container">
			<div class="executives">
				<div id="executives" class="imagery">
					<div class="title-role"><?php _e("Executives", 'Tradeshift'); ?></div>
					<div class="intro-text">
						<h2><a href="/enterprise/roles/executives"><?php _e("Executives", 'Tradeshift'); ?></a></h2>
						<p><?php _e("You’re the boss. Use Tradeshift’s digital platform to connect &amp; optimize your complex supply chain and related B2B processes.", 'Tradeshift'); ?></p>
						<a href="/enterprise/roles/executives"><?php _e("Read more &raquo;", 'Tradeshift'); ?></a>
					</div>
				</div>
			</div>
			<div class="procure-to-pay">
				<div id="p2p" class="imagery">
					<div class="title-role"><?php _e("Procure to Pay", 'Tradeshift'); ?></div>
					<div class="intro-text">
						<h2><a href="/enterprise/roles/procure-to-pay-process"><?php _e("Procure to Pay", 'Tradeshift'); ?></a></h2>
						<p><?php _e("You create order from chaos. Streamline your end-to-end process, ease change management &amp; quickly onboard suppliers with a single point of collaboration.", 'Tradeshift'); ?> </p>
						<a href="/enterprise/roles/procure-to-pay-process"><?php _e("Read more &raquo;", 'Tradeshift'); ?></a>
					</div>
				</div>
			</div>
			<div class="accounts-payable">
				<div id="ap" class="imagery">
					<div class="title-role"><?php _e("Accounts Payable", 'Tradeshift'); ?></div>
					<div class="intro-text">
						<h2><a href="/enterprise/roles/accounts-payable"><?php _e("Accounts Payable", 'Tradeshift'); ?></a></h2>
						<p><?php _e("Managing your transactions manually can be inefficient and slow. Simplify &amp; accelerate your entire AP process by automating it on our cloud-based platform.", 'Tradeshift'); ?></p>
						<a href="/enterprise/roles/accounts-payable"><?php _e("Read more &raquo;", 'Tradeshift'); ?></a>
					</div>
				</div>
			</div>
			<div class="finance">
				<div id="finance" class="imagery">
					<div class="title-role"><?php _e("Finance", 'Tradeshift'); ?></div>
					<div class="intro-text">
						<h2><a href="/enterprise/roles/finance"><?php _e("Finance", 'Tradeshift'); ?></a></h2>
						<p><?php _e("You’re more than just the money. Transform finance into a cost-effective, value-adding function. All while maintaining control, compliance &amp; reducing risk.", 'Tradeshift'); ?></p>
						<a href="/enterprise/roles/finance"><?php _e("Read more &raquo;", 'Tradeshift'); ?></a>
					</div>
				</div>
			</div>
			<div class="information-technology">
				<div id="it" class="imagery">
					<div class="title-role"><?php _e("IT", "Tradeshift"); ?></div>
					<div class="intro-text">
						<h2><a href="/enterprise/roles/it"><?php _e("Information Technology", 'Tradeshift'); ?></a></h2>
						<p><?php _e("You know your systems better than anyone. Reap the benefits of our efficient, cloud-based platform for years to come.", 'Tradeshift'); ?></p>
						<a href="/enterprise/roles/it"><?php _e("Read more &raquo;", 'Tradeshift'); ?></a>
					</div>
				</div>
			</div>
			<div class="knowledge-is-power">
				<div class="imagery">
					<div class="intro-text">
						<h2><a href="/enterprise/roles/it"><?php _e("Knowledge is power.", 'Tradeshift'); ?></a></h2>
						<p><?php _e("See Tradeshift in action to get a clearer picture of how our platform can help your business.", 'Tradeshift'); ?></p>
						<button type="button" class="btn btn-primary-cta" id="getStartedRolesOverview" data-toggle="modal" data-target="#mktoModal"><?php _e("Request a demo", 'Tradeshift'); ?></button>
					</div>
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
				<p class="lead"><?php _e("You’re seconds away from transforming your business!", 'Tradeshift'); ?></p>
			</div>
			<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
				<form id="mktoForm_604"></form>
				<script type="text/javascript">// <![CDATA[
					MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 604, function(form){
						form.vals({"Marketing_Resource_Name__c":"Overview page"});
					});
					// ]]>
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- Page specific JS -->
	<script>
	
		$('#executives').click(function() {
			window.location.href = '/enterprise/roles/executives';
			ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Executives');
		});
		$('#procurement').click(function() {
			window.location.href = '/enterprise/roles/procurement';
			ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Procurement');
		});
		$('#p2p').click(function() {
			window.location.href = '/enterprise/roles/procure-to-pay-process/';
			ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Procure-to-Pay');
		});
		$('#finance').click(function() {
			window.location.href = '/enterprise/roles/finance';
			ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Finance');
		});
		$('#ap').click(function() {
			window.location.href = '/enterprise/roles/accounts-payable';
			ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'Accounts Payable');
		});
		$('#it').click(function() {
			window.location.href = '/enterprise/roles/it';
			ga('send', 'event', 'Enterprise - Home Page', 'Roles List Circle Click', 'IT');
		});
	</script>
<?php get_footer(); ?>
