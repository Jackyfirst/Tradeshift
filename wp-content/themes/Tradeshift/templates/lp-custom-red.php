 <?php
/*
Template Name: Landing Page - Custom: Tradeshift Red
*/
get_header('lp-custom'); ?>
		<!-- Main Content Starts -->
		<main class="main-content ts-red">
			<!-- Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row">
						<div class="contents">
						<?php if (is_mobile()): ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/red/hero-tsred-xs.jpg" width="280" alt="Tradeshift and Red Partnership" />
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/red/hero-tsred.jpg" alt="Tradeshift and Red Partnership" />
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="do-good">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Do good while doing business.</h2>
							<p>When you buy through (TRADESHIFT)RED, you can join the fight for an AIDS-free generation. Showcase your corporate responsibility and help eliminate mother-to-child transmission of HIV.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="fill-out-form">
				<div class="container">
					<div class="row">
						<h2>Being in the <strong>(RED)</strong> can be a good thing.</h2>
							<p id="inst" class="lead">Submit your email address to find out how you can join the fight against AIDS with (RED).</p>
						<div class="contents">
							<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
							<form id="mktoForm_1044"></form>
							<script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1044, function(form) {
									// if (form.submittable()) {
								 //        // Set it to be non submittable
								 //        form.submittable(false);
								 //    };
								    // Add an onSuccess handler
								    form.onSuccess(function(values, followUpUrl) {
								        // Get the form's jQuery element and hide it
								        form.getFormElem().hide();
								        $('#thank-you-confirm').fadeIn('slow');
								        $('#thank-you-confirm').addClass('active');
								        $('#thank-you-confirm').html('Thank you for your interest in Tradeshift(RED). We will be in touch soon.');
								        // $('#opt-in').hide();
								        $('#opt-in').fadeOut('slow');
								        // $('#inst').hide();
								        // $('#inst').fadeOut('slow');
								        // Return false to prevent the submission handler from taking the lead to the follow up url
								        return false;
								    });
								});
							</script>
							<h4 id="thank-you-confirm"></h4>
						</div>
					</div>
					<div id="opt-in" class="row">
						<div class="contents">
							<div class="opt-in-checkbox">
								<input type="checkbox" value="None" id="opt-in-checker" name="opt-in-checker" checked />
								<label for="opt-in-checker"></label>
							</div>
							<div class="opt-in-text">Yes, I'd like to hear from (TRADESHIFT)RED about how I can join the fight against AIDS</div>
						</div>
					</div>
				</div>
			</div>
		</main>
<?php get_footer(); ?>
