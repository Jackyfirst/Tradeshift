<?php
/*
Template Name: Supply Chain Finance
*/
get_header(); ?>
<!-- Main Content Starts -->
<main class="main-content supplychainfinancing">
	<div class="hero">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="left-box">
						<h1><?php _e("Tradeshift<sup>&reg;</sup> <span class=\"isBlueText\">Pay</span> Integrated Financial Services", 'Tradeshift'); ?></h1>
						<p><?php _e("Pay suppliers on time while keeping your cash on hand longer. Find out how supply chain finance, dynamic discounting, flexible finance and virtual credit cards can help your business optimize working capital.", 'Tradeshift'); ?></p>
						<button data-toggle="modal" data-target="#mktoModal2" class="btn btn-primary-cta-ent default_btn"><?php _e("Schedule a demo", 'Tradeshift'); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="paymentPrograms background-gradient">

		<div class="container">
			<h2><?php _e("Take command and control of your working capital.", 'Tradeshift'); ?></h2>
		</div>

		<div class="container paymentPrograms">
			<div class="row">
				<div class="contents">

					<div class="howItWorks-wrapper">
						<div class="howItWorks-topSeparator"></div>
						<div class="howItWorks-body">
							<?php _e("<h5>Manage all your banks</h5><p>and their early payment programs on a single platform. Tradeshift connects to multiple banks and leverages their existing systems.</p>", 'Tradeshift'); ?>
						</div>
					</div>

					<div class="howItWorks-wrapper">
						<div class="howItWorks-topSeparator"></div>
						<div class="howItWorks-body">
							<h5><?php _e("Connect to all your suppliers", 'Tradeshift'); ?></h5>
							<p><?php _e("Get the most from your early payment programs with superior supplier segmentation, onboarding and early discount capture — all in one place.", 'Tradeshift'); ?></p>
						</div>
					</div>

					<div class="howItWorks-wrapper">
						<div class="howItWorks-topSeparator"></div>
						<div class="howItWorks-body">
							<h5><?php _e("Tailor your working capital strategies to your needs. ", 'Tradeshift'); ?></h5>
							<p><?php _e("Switch between self-funded and bank-funded solutions to optimize your working capital and company margins.", 'Tradeshift'); ?></p>
						</div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="contents">

					<h3><?php _e("How it works", 'Tradeshift'); ?></h3>

					<div class="howItWorks-wrapper">
						<div class="howItWorks-header">
							<img src="<?php echo get_template_directory_uri(); ?>/img/supplychainfinance/howitworks-one-wallet-for-everything.svg" />
						</div>
						<div class="howItWorks-body">
							<h5><?php _e("One wallet for everything", 'Tradeshift'); ?></h5>
							<p><?php _e("Access all your early payment options in one place, including virtual cards, dynamic discounting, supply chain finance and <a href=\"/frontiers/cash/\" title=\"Tradeshift Cash\">blockchain-based payments.</a> Easily switch between self-funded and bank-funded solutions.", 'Tradeshift'); ?></p>
						</div>
					</div>

					<div class="howItWorks-wrapper">
						<div class="howItWorks-header">
							<img src="<?php echo get_template_directory_uri(); ?>/img/supplychainfinance/howitworks-quick-secure-implementation.svg" />
						</div>
						<div class="howItWorks-body">
							<h5><?php _e("Work with any bank", 'Tradeshift'); ?></h5>
							<p><?php _e("Tradeshift connects to multiple banks and leverages their existing systems. Bring your own bank to the solution, or work with our bank partners.", 'Tradeshift'); ?></p>
						</div>
					</div>
					<div class="howItWorks-wrapper">
						<div class="howItWorks-header">
							<img src="<?php echo get_template_directory_uri(); ?>/img/supplychainfinance/howitworks-unified-experience.svg" />
						</div>
						<div class="howItWorks-body">
							<h5><?php _e("Unified experience", 'Tradeshift'); ?></h5>
							<p><?php _e("Automate payables and manage payments in one solution. With Tradeshift, you only need one place to access all your supply chain finance options from all your banks.", 'Tradeshift'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="component contact-us-form gradient-blue">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h4><?php _e("Seeing is believing.", 'Tradeshift'); ?></h4>
					<p class="lead">
						<?php _e("Contact us to see what Tradeshift<sup>&reg;</sup> Pay can do for your enterprise.", 'Tradeshift'); ?>
					</p>
					<button data-toggle="modal" data-target="#mktoModal2" class="btn btn-white btn btn-cta btn-nm"><?php _e("Schedule a demo", 'Tradeshift'); ?></button>
				</div>
			</div>
		</div>
	</div>
</main>

<?php $form=true; ?>

<?php get_footer(); ?>
