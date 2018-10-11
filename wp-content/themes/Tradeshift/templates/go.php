 <?php
/*
Template Name: Go - Landing Page /Go
*/
get_header('go-only'); ?>
	<header class="header-go">
		<div class="container">
			<div class="row">
				<div class="go-header-content">
					<a href="/"><img class="ts-go-logo" src="<?php echo get_template_directory_uri(); ?>/img/go/ts-go-logo.png" alt="Tradeshift Go"></a>
					<a href="http://getgo.tradeshift.com/ios" class="go-app-store-link"><img class="go-app-store-img" src="<?php echo get_template_directory_uri(); ?>/img/go/go-app-store.png" alt="Tradeshift Go App"></a>
				</div>
			</div>
		</div>
	</header>
	<!-- Main Content Starts -->
	<main class="main-content ts-go">
		<div id="container1" class="container active">
			<div class="row">

				<div class="go-enhanced-fixed-container">
					<div class="go-section-content-container go-section-content-container-1">
						<div id="go-scroll-content-1" class="go-column-content">
							<h2 class="go-section-headline">
								Say hello to Go.<br />
								Your new virtual business assistant.
							</h2>
							<p class="go-section-paragraph">Managing company credit cards, travel, and expenses is complex. Go makes it surprisingly simple.</p>
							<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
							<div id="primaryEmailForm">
								<form id="mktoForm_1541" class="go-marketo-form"></form>
							</div>
							<script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1541);</script>
						</div>
					</div>
					<div class="go-section-animation-container go-section-animation-container-1 basic-fade-in-animation">
						<div class="go-column-content">

							<div class="flight-info-container">
								<div class="ts-go-text-bubble-map avatar-right-map staggered-pop-in staggered-pop-in-1">
									<div class="text-bubble-content-map">
										<p class="text-bubble-name">Thor</p>
										<p class="text-bubble-paragraph">Go, I require a second hammer.</p>
										<img class="avatar avatar-1" src="<?php echo get_template_directory_uri(); ?>/img/go/avatar1.png" alt="Avatar"/>
									</div>
								</div>
								
								<div class="staggered-pop-in staggered-pop-in-2">
									<div class="ts-go-text-bubble-map avatar-left-map">
										<div class="text-bubble-content-map">
											<img class="avatar avatar-go" src="<?php echo get_template_directory_uri(); ?>/img/go/ts-go-icon.png" alt="Avatar"/>
											<p class="text-bubble-name">GO</p>
											<p class="text-bubble-paragraph">Okay! I have messaged Odin and asked for his approval.</p>
										</div>
									</div>

									<div class="ts-go-approval-box">
										<p class="approval-message">Approved for Thor: <strong>New hammer</strong></p>
										<img class="approval-card" src="<?php echo get_template_directory_uri(); ?>/img/go/go-credit-card.png" alt="Go Card">
									</div>
								</div>

								<div class="ts-go-text-bubble-map avatar-right-map staggered-pop-in staggered-pop-in-3">
									<div class="text-bubble-content-map">
										<p class="text-bubble-name">Thor</p>
										<p class="text-bubble-paragraph">You have my thanks.</p>
										<img class="avatar avatar-1" src="<?php echo get_template_directory_uri(); ?>/img/go/avatar1.png" alt="Avatar"/>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="container2" class="container">
			<div class="row">

				<div class="go-enhanced-fixed-container">
					<div class="go-section-content-container">
						<div id="go-scroll-content-2" class="go-column-content">
							<h2 class="go-section-headline">
								Track who's spending and approving what<br>
								<strong>&mdash; in seconds.</strong>
							</h2>

							<p class="go-section-paragraph">Go helps you manage everyday company spending as it happens. With single-use virtual credit cards and in-the-moment approvals, employees can buy what they need online, when they need it.</p>
							<p class="go-section-paragraph">Get instant transparency into credit card purchases and make manual reconciliations a thing of the past.</p>

							<form id="mktoForm_1550" class="go-marketo-form"></form>
							<script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1550);</script>
						</div>
					</div>

					<div class="go-section-animation-container go-section-animation-container-2 basic-pop-in-animation">
						<div class="go-column-content">
							<figure class="browser-background"></figure>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="container3" class="container">
			<div class="row">

				<div class="go-enhanced-fixed-container">
					<div class="go-section-content-container">
						<div id="go-scroll-content-3" class="go-column-content">
							<h2 class="go-section-headline">
								Try it with travel.<br>
								Oh, the places you'll Go.
							</h2>

							<p class="go-section-paragraph">Your smart new assistant can help you do other tasks too—starting with booking your next work trip. Book your flights, hotels, rental cars and restaurants simply by saying where you're headed: Go does the rest.</p>
							<p class="go-section-paragraph">No matter what you use credit cards for (office supplies, recurring IT costs, your next trip to NYC), Go helps you get it.</p>

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
						</div>
					</div>

					<div class="go-section-animation-container go-section-animation-container-3 basic-fade-in-animation">
						<div class="go-column-content">
							<div class="flight-info-container">
								<div class="ts-go-text-bubble-map avatar-left-map staggered-pop-in staggered-pop-in-1">
									<div class="text-bubble-content-map">
										<img class="avatar avatar-go" src="<?php echo get_template_directory_uri(); ?>/img/go/ts-go-icon.png" alt="Avatar"/>
										<p class="text-bubble-name">GO</p>
										<p class="text-bubble-paragraph">Hi Freya. What can I do for you?</p>
									</div>
								</div>

								<div class="ts-go-text-bubble-map avatar-right-map staggered-pop-in staggered-pop-in-2">
									<div class="text-bubble-content-map">
										<p class="text-bubble-name">Freya</p>
										<p class="text-bubble-paragraph">I need a flight from Oslo to JFK,<br>landing tomorrow at 8pm.</p>
										<img class="avatar avatar-2" src="<?php echo get_template_directory_uri(); ?>/img/go/avatar2.png" alt="Avatar"/>
									</div>
								</div>

								<div class="staggered-pop-in staggered-pop-in-3">
									<div class="ts-go-text-bubble-map avatar-left-map">
										<div class="text-bubble-content-map">
										<img class="avatar avatar-go" src="<?php echo get_template_directory_uri(); ?>/img/go/ts-go-icon.png" alt="Avatar"/>
											<p class="text-bubble-name">GO</p>
											<p class="text-bubble-paragraph">I found this flight for you:</p>
										</div>
									</div>
									<div class="ts-go-flight-box">
										<div class="departing-info flight-info">
											<p class="flight-date">Aug 9</p>
											<p class="flight-location">Oslo</p>
											<p class="flight-airport">OSL</p>
											<p class="flight-time">12:55 PM</p>
										</div>
										<figure class="airplane-graphic"></figure>
										<div class="arriving-info flight-info">
											<p class="flight-date">KLM</p>
											<p class="flight-location">New York</p>
											<p class="flight-airport">JFK</p>
											<p class="flight-time">7:20 PM</p>
										</div>
									</div>
								</div>
							</div>
							<figure class="map-background"></figure>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="container4" class="container video-container">
			<div class="row">

				<div class="go-scroll-content-container-4 go-enhanced-fixed-container">
					<div id="go-scroll-content-4" class="go-scroll-content-4">
						<div class="video-animated-container clearfix basic-pop-in-animation">

							<h2 class="go-section-headline go-video-section-headline">
								How it works:
							</h2>
							<div class="go-section-video">
								<div class="video">
									<img class="go-video-background go-video-background-1" src="<?php echo get_template_directory_uri(); ?>/img/go/go-video-background-1.png" alt="Video">
									<div class="play-video">
										<script type='text/javascript' id='vidyard_embed_code_qWPWeKmQKXxoCPvrrYSrxP' src='//play.vidyard.com/qWPWeKmQKXxoCPvrrYSrxP.js?v=3.1.1&type=lightbox'></script><div class='outer_vidyard_wrapper'><div class='vidyard_wrapper' onclick='fn_vidyard_qWPWeKmQKXxoCPvrrYSrxP();'><img width="360" src="//play.vidyard.com/qWPWeKmQKXxoCPvrrYSrxP.jpg?" alt="1_Request-Approval_v2"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>
									</div>
								</div>
								<p class="go-section-paragraph"><strong>Super simple requests &amp; approvals </strong></p>
								<p class="go-section-paragraph">Use Go's simple chat interface to request items and get approvals. Communicate through a web browser, mobile app, email, or chat. </p>
							</div>

							<div class="go-section-video">
								<div class="video">
									<img class="go-video-background go-video-background-2" src="<?php echo get_template_directory_uri(); ?>/img/go/go-video-background-2.png" alt="Video">
									<div class="play-video">
										<script type='text/javascript' id='vidyard_embed_code_2MuGnxkAocmHoK6JGgAact' src='//play.vidyard.com/2MuGnxkAocmHoK6JGgAact.js?v=3.1.1&type=lightbox'></script><div class='outer_vidyard_wrapper'><div class='vidyard_wrapper' onclick='fn_vidyard_2MuGnxkAocmHoK6JGgAact();'><img width="360" src="//play.vidyard.com/2MuGnxkAocmHoK6JGgAact.jpg?" alt="2_Complete a Checkout"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>
									</div>
								</div>
								<p class="go-section-paragraph"><strong>Issue virtual credit cards</strong></p>
								<p class="go-section-paragraph">Once a purchase request is approved, Go issues a single-use virtual credit card from your established corporate credit card program. Employees simply drag and drop their card onto the payment page at checkout.</p>
							</div>

							<div class="go-section-video">
								<div class="video">
									<img class="go-video-background go-video-background-3" src="<?php echo get_template_directory_uri(); ?>/img/go/go-video-background-2.png" alt="Video">
									<div class="play-video">
										<script type='text/javascript' id='vidyard_embed_code_dYhtCLgoRmwggCtCFiENxf' src='//play.vidyard.com/dYhtCLgoRmwggCtCFiENxf.js?v=3.1.1&type=lightbox'></script><div class='outer_vidyard_wrapper'><div class='vidyard_wrapper' onclick='fn_vidyard_dYhtCLgoRmwggCtCFiENxf();'><img width="360" src="//play.vidyard.com/dYhtCLgoRmwggCtCFiENxf.jpg?" alt="3_Analytics_v2 (1)"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>
									</div>
								</div>
								<p class="go-section-paragraph"><strong>Instant insights on spend trends</strong></p>
								<p class="go-section-paragraph">Go’s dashboard tells you who’s spent and approved what, at a glance. Track individual transactions that include buyers, approvers, and department codes. You’ll get alerts for abnormal spikes in spend patterns and when you’ve reached budget limits.</p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

		<div id="container5" class="container">
			<div class="row">

				<div class="go-enhanced-fixed-container">
					<div class="go-section-animation-container go-section-animation-container-5 basic-fade-in-animation">
						<div class="go-column-content">
							<img class="go-card-background go-replace-graphics" src="<?php echo get_template_directory_uri(); ?>/img/go/go-card-background.png" alt="Cards"/>
							<figure class="go-floating-cards">
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-blank-card.png" class="go-floating-card go-floating-card-1" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-blank-card.png" class="go-floating-card go-floating-card-2" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-blank-card.png" class="go-floating-card go-floating-card-3" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-blank-card.png" class="go-floating-card go-floating-card-4" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-thor-card.png" class="go-floating-card go-floating-card-5 go-special-card" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-blank-card.png" class="go-floating-card go-floating-card-6" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-blank-card.png" class="go-floating-card go-floating-card-7" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-blank-card.png" class="go-floating-card go-floating-card-8" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/go/go-blank-card.png" class="go-floating-card go-floating-card-9" />
							</figure>
						</div>
					</div>

					<div class="go-section-content-container go-section-content-container-5">
						<div id="go-scroll-content-5" class="go-column-content">
							<h2 class="go-section-headline">
								Earn and share your rewards.
							</h2>

							<p class="go-section-paragraph">Go is free for users. You only pay with a portion of the credit card rewards you earn. Earn more by consolidating your rewards in one central account.</p>

							<form id="mktoForm_1551" class="go-marketo-form"></form>
							<script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1551);</script>

						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="container6" class="container container6">
			<div class="row">
				<div class="go-enhanced-fixed-container">
					<div class="go-section-animation-container go-section-animation-container-6 basic-pop-in-animation">
						<div class="go-column-content">
						<img class="go-analytical" src="<?php echo get_template_directory_uri(); ?>/img/go/go-analytical.png" alt="Analytical graphic"/>
							<figure class="go-analytical-background go-replace-graphics"></figure>
						</div>
					</div>
					<div class="go-section-content-container go-section-content-container-6">
						<div id="go-scroll-content-6" class="go-column-content">
							<h2 class="go-section-headline">
								Sign up for your<br>
								free Go account.
							</h2>
							<p class="go-section-paragraph">Evil wizardry or surprisingly simple spend management tool? You decide.</p>
							<form id="mktoForm_1552" class="go-marketo-form"></form>
							<script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1552);</script>
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
<?php get_footer('go-only'); ?>
