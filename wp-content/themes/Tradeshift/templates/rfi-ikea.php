 <?php
/*
Template Name: RFI - Ikea
*/
get_header('rfi-ikea'); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<main class="main-content rfi-page ikea-page">
		<?php the_content(); ?>
			<div id="reports-more" class="reports-more" data-offset="77">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Learn more about Tradeshift from the experts</h2>
							<a href="https://tradeshift.com/wp-content/uploads/2015/01/The-Rise-of-the-Agile-Networked-Platform-for-Supply-Management.pdf" target="_blank" class="contents-wrapper">
								<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/ikea/learn-chainlink-min.png" />
								<h3>Chainlink Research</h3>
								<p><strong>The Rise of the Agile Networked Platform for Supply Management</strong></p>
							</a>
							<a href="http://downloads.tradeshift.com/6000179_v5.pdf" target="_blank" class="contents-wrapper hackett">
								<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/ikea/learn-hackett.png" />
								<h3>Hackett</h3>
								<p><strong>Procurement's Role in Enabling Enterprise Agility</strong></p>
							</a>
							<a href="https://tradeshift.com/resources/supplier-onboarding-sim-world/" target="_blank" class="contents-wrapper">
								<img class="img-responsive" src="https://tradeshift.com/wp-content/themes/Tradeshift/img/rfi/ikea/learn-hackett2.png" />
								<h3>Hackett</h3>
								<p><strong>Supplier Onboarding in a SIM World</strong></p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</main>
		<script>
		// Scrollspy Bootstrap JS plugin
		// ---------------------------------------------------
		$('body').scrollspy({
		target: '#navbar',
		offset: 66
		});
		</script>

	<?php endwhile; ?>
	<?php else: ?>
		<div>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</div>
	<?php endif; ?>
<?php 
	wp_deregister_script('main', 'legacyScripts', 'contact-form-7');
	wp_deregister_style('contact-form-7');
	get_footer('rfi'); 
?>