 <?php
/*
Template Name: Go - E-mail Submit Confirmation
*/
get_header('go-only-conf'); ?>
	<header class="header-go">
		<div class="container">
			<div class="row">
				<div class="go-header-content">
					<a href="/go"><img class="ts-go-logo" src="<?php echo get_template_directory_uri(); ?>/img/go/ts-go-logo.png" alt="Tradeshift Go"></a>
					<a href="http://getgo.tradeshift.com/ios" class="go-app-store-link"><img class="go-app-store-img" src="<?php echo get_template_directory_uri(); ?>/img/go/go-app-store.png" alt="Tradeshift Go App"></a>
				</div>
			</div>
		</div>
	</header>
	<!-- Main Content Starts -->
	<main class="main-content ts-go">
		<div class="container sharing-container">
			<div class="row" style="padding: 0 0 110px">
				<div class="go-enhanced-fixed-container ts-go-confirm">
					<div class="go-section-content-container">
						<div id="go-scroll-content-2" class="go-column-content ts-go">
							<h2 class="go-section-headline">Thank you!<br>You're awesome.</h2>
							<img class="sharing-mobile-hammer" src="<?php echo get_template_directory_uri(); ?>/img/go/go-hammer.jpg" alt="Hammer">
							<p class="go-section-paragraph">We’ll email you soon about that demo. For now, download the Go app and start booking your next work trip.</p>
							<br />
							<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
							<form id="mktoForm_1496" class="go-marketo-form"></form>
							<script type="text/javascript">// <![CDATA[
						        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1496, function(form){
						           form.vals({"Marketing_Resource_Name__c":"Go Page"});
						           form.onSubmit(function(){
						              ga('send', 'event', 'Main CTA', 'Submit', 'Phone to Go App');
						              var $mktoPhoneNumber = $('#Phone').val();
						              // console.log ($mktoPhoneNumber);
						              $.post('//www.usehyper.com/share_app_url', {
						              		platform: "ios",
						              		phone: '+1' + $mktoPhoneNumber
						              	}, 'json');
						              });
						           });
								// ]]>
							</script>
							<h3 class="sharing-headline">Sharing is caring...</h3>
							<p class="sharing">Since you’re awesome, there’s an 82% chance your friends are also awesome. Tell a friend or coworker about us so they can get Go, too!</p>
							<div class="social-icons">
								<!-- Go to www.addthis.com/dashboard to customize your tools -->
								<div class="addthis_custom_sharing" data-url="https://tradeshift.com/go" data-title="Tradeshift Go - your virtual business assistant."></div>
							</div>
						</div>
					</div>
					<div class="go-section-animation-container go-sharing-graphic-container">
						<div class="go-column-content">
							<figure class="browser-background"></figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer class="go-footer">
		<div class="go-primary-footer">
			<div class="container">
				<div class="row">
					<img class="footer-tradeshift-logo" src="<?php echo get_template_directory_uri(); ?>/img/go/footer-logo.png" alt="Tradeshift">
					<ul class="footer-items">
						<li class="footer-item"><a class="footer-link" href="https://tradeshift.com/about">About</a></li>
						<li class="footer-item"><a class="footer-link" href="https://tradeshift.com/press">Press</a></li>
						<li class="footer-item"><a class="footer-link" href="https://tradeshift.com/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="go-secondary-footer">
			<div class="container">
				<div class="row">
					<ul class="footer-items">
						<li class="footer-item"><a class="footer-link" title="Privacy Policy" href="https://tradeshift.com/privacy-policy/">Privacy Policy</a></li>
						<li class="footer-item"><a class="footer-link" title="Terms of Service" href="https://tradeshift.com/terms-of-service/">Terms of Service</a></li>
						<li class="footer-item"><a class="footer-link" title="Terms of Use" href="https://tradeshift.com/terms-of-use/">Terms of Use</a></li>
						<li class="footer-item"><a class="footer-link" title="Tradeshift 2016" href="https://tradeshift.com/">&copy; Tradeshift 2016</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- <script type="text/javascript">
	var addthis_share = addthis_share || {}
	addthis_share = {
		passthrough : {
			twitter: {
				via: "@tradeshift",
				text: "Check out Tradeshift Go, a new virtual business assistant.",
				url: "https://tradeshift.com/go"
			}
		}
	}
	</script> -->
<?php get_footer('go-only'); ?>
