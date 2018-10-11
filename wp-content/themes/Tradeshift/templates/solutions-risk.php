 <?php
/*
Template Name: Solutions - Tradeshift Risk New
*/
get_header(); ?>

	<!-- Main Content Starts -->
	<main class="main-content ts-risk2">
		<div class="hero">
			<div class="container">
				<div class="row cta">
					<div class="contents">
						<?php if ( ! is_mobile()): ?>
						<div class="button-wrapper">
							<button id="heroVideoTS_risk" class="btn btn-play-blue" onclick="fn_vidyard_7xlR8KV3_doFFTkZ5RMK3A();"></button>
							<script type="text/javascript" id="vidyard_embed_code_7xlR8KV3_doFFTkZ5RMK3A" src="//play.vidyard.com/7xlR8KV3_doFFTkZ5RMK3A.js?v=3.1.1&type=lightbox"></script>
						</div>
						<?php endif; ?>
						<div class="content-wrapper">
							<h1><?php _e("Tradeshift<sup>&reg;</sup> <br class=\"hidden-xs\" />Risk", 'Tradeshift'); ?></h1>
							<h3><?php _e("Stop playing with fire.<br />Control your supplier management.", 'Tradeshift'); ?></h3>
							<button id="heroMainCtaTS_risk" class="btn btn-primary-cta btn-orange" data-toggle="modal" data-target="#mktoModal"><?php _e("Let's get started", 'Tradeshift'); ?></button>
						</div>
					</div>
				</div>
				<?php if (is_mobile()): ?>
				<div class="row">
					<div class="contents">
						<button class="btn btn-play-blue" onclick="fn_vidyard_7xlR8KV3_doFFTkZ5RMK3A()"><script type="text/javascript" id="vidyard_embed_code_7xlR8KV3_doFFTkZ5RMK3A" src="//play.vidyard.com/7xlR8KV3_doFFTkZ5RMK3A.js?v=3.1.1&type=lightbox"></script></button>
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
		<div class="biggest-risks" id="loadProfileGIF">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("The biggest risks are the ones you don’t see coming.", 'Tradeshift'); ?></h2>
						<h3><?php _e("Are you good at predicting disaster?<br class=\"hidden-md hidden-lg\"> If you’re human, probably not.", 'Tradeshift'); ?></h3>
						<p><?php _e("In a world where risk moves in real time, how can you manage the chaos of supplier data, control your supplier management, and unlock the hidden value in your supply chain?", 'Tradeshift'); ?></p>
						<p><?php _e("Don’t risk missing your biggest opportunities, or losing to your biggest threats.", 'Tradeshift'); ?></p>
						<p><?php _e("It’s time to rethink supplier management. <br class=\"visible-sm\">Welcome to Tradeshift Risk.", 'Tradeshift'); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="profiles" id="startOfProfiles">
			<div class="container">
				<div class="row heading">
					<div class="contents">
						<h2><?php _e("Tradeshift Profiles", 'Tradeshift'); ?></h2>
						<h3><?php _e("Connect with all your suppliers.", 'Tradeshift'); ?></h3>
					</div>
				</div>
				<div class="row screenshot">
					<div id="triggerPinOne"></div>
					<div class="contents">
					<?php if (is_mobile()): ?>
						<div class="contents-callout contents-callout1">
							<img class="screencallout callout1" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout1-xs.jpg" />
							<p><?php _e("Tradeshift Profiles give every buyer and supplier an online identity, which they own and maintain themselves. You can easily connect to your suppliers, who provide all the information you need.", 'Tradeshift'); ?></p>
						</div>
						<div class="contents-callout contents-callout2">
							<img class="screencallout callout2" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout2-xs.jpg" />
							<p><?php _e("Get clean, real-time master data straight from your suppliers. We validate every piece of information with third-party sources, so you can trust that the data is verified, current and correct.", 'Tradeshift'); ?></p>
						</div>
						<div class="contents-callout contents-callout3">
							<img class="screencallout callout3" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout3-xs.jpg" />
							<p><?php _e("Suppliers can choose what data to keep private, and what data to share with specific buyers or make public.", 'Tradeshift'); ?></p>
						</div>
						<div class="contents-callout contents-callout4">
							<img class="screencallout callout4" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout4-xs.jpg" />
							<p><?php _e("New supplier data and updates go through an approval workflow with all your relevant departments – Finance, Legal, and Procurement, for example – before flowing directly into your ERP.", 'Tradeshift'); ?></p>
						</div>
						<div class="contents-callout contents-callout5">
							<img class="screencallout callout5" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout5-xs.jpg" />
							<p><?php _e("Enrich your supplier profiles and create real value with third-party apps like EcoVadis.", 'Tradeshift'); ?></p>
						</div>
						<div class="contents-callout contents-callout6">
							<img class="screencallout callout6" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout6-xs.png" />
						</div>
					<?php elseif (is_tablet()): ?>
						<div id="profilesDemo" class="content-wrapper">
							<img id="profileGIF" class="profile-gif" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/profiles-animation.gif" />
						</div>
					<?php else: ?>
						<div class="SL_swap content-wrapper" id="profilesDemo" >
							<div id="stepOnetoSix" class="steps">
								<div id="triggerStepOneTwoThree"></div>
								<img id="step123" class="step-screenshot step123" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/profiles-step1-3-6.png" />
								<div id="triggerCalloutOne"></div>
								<img id="co1" class="screencallout callout1" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout1.png" />
								<div id="triggerCalloutTwo"></div>
								<img id="co2" class="screencallout callout2" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout2.png" />
								<div id="triggerCalloutThree"></div>
								<img id="co3" class="screencallout callout3" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout3.png" />
								<div id="triggerStepFour"></div>
								<img id="step4" class="step-screenshot step4" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/profiles-step4.png" />
								<div id="triggerCalloutFour"></div>
								<img id="co4" class="screencallout callout4" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout4.png" />
								<div id="triggerStepFive"></div>
								<img id="step5" class="step-screenshot step5" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/profiles-step5.png" />
								<div id="triggerCalloutFive"></div>
								<img id="co5" class="screencallout callout5" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout5.png" />
								<div id="triggerStepSix"></div>
								<img id="step6" class="step-screenshot step6" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/profiles-step6.png" />
								<div id="triggerCalloutSix"></div>
								<img id="co6" class="screencallout callout6" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/callout6.png" />
							</div>
						</div>
					<?php endif; ?>
					</div>
				</div>
				<!-- <div class="row copy">
					<div class="contents">
						<p>Other supplier management tools give you outdated views of some of your suppliers. Tradeshift gives you a complete, real-time view of all your suppliers. Tradeshift Risk extends the decisions you make beyond supplier management and protects your Buy and Pay processes with fresh, living data.</p>
						<p><strong>One company profile... for every process.</strong></p>
					</div>
				</div> -->
			</div>
		</div>
		<div class="risk-engine">
			<div class="arrow"></div>
			<div class="container">
				<div class="row heading">
					<div class="contents">
					<?php if (is_mobile()): ?>
						<h2><?php _e("Tradeshift Risk Engine", 'Tradeshift'); ?></h2>
						<h3><?php _e("All your risk data in one place.", 'Tradeshift'); ?></h3>
						<div class="gif-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/app-engine.gif" />
						</div>
					<?php elseif (is_tablet()): ?>
						<h2><?php _e("Tradeshift Risk Engine", 'Tradeshift'); ?></h2>
						<h3><?php _e("All your risk data in one place.", 'Tradeshift'); ?></h3>
						<div class="gif-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/app-engine.gif" />
						</div>
					<?php else: ?>
						<div class="content-wrapper">
							<h2><?php _e("Tradeshift Risk Engine", 'Tradeshift'); ?></h2>
							<span class="gif-wrapper">
								<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/app-engine.gif" />
							</span>
							<h3><?php _e("All your risk data in one place.", 'Tradeshift'); ?></h3>
						</div>
					<?php endif; ?>
					</div>
				</div>
				<div class="row copy">
					<div class="contents">
						<p><?php _e("Tradeshift Risk Engine collects all the risk data you need and stores it in one place – whether it’s profile data from Tradeshift, your custom survey and regulatory data, or risk data from thousands of third-party sources.", 'Tradeshift'); ?></p>
						<p><?php _e("The Risk Engine analyzes your data and provides guidance on what to do next. You can configure your own risk scoring, assign scores to suppliers, and see the big picture in an instant. When you have the right data, you can make fully informed decisions.", 'Tradeshift'); ?></p>
						<p><?php _e("Protect yourself as needed – send flagged data to your legal team or others, or automatically pause transactions if a supplier has a high risk score. With constantly up-to-date supplier data, you’re safe.", 'Tradeshift'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="surveys" id="playSurveyDemo">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Tradeshift Surveys", 'Tradeshift'); ?></h2>
						<h3><?php _e("Learn anything about your suppliers, any time.", 'Tradeshift'); ?></h3>
						<p><?php _e("With Tradeshift Surveys, you can assess supplier management when you’re onboarding and automate ongoing risk checks. No more manual checks: Tradeshift helps you run frequent, automated checks on your suppliers when you need them.", 'Tradeshift'); ?></p>
						<p><?php _e("Once you get responses from your surveys, you can unlock the value that’s hidden in your supply chain.", 'Tradeshift'); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="imagery">
					<?php if (is_mobile()): ?>
						<img class="survey-screenshot" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/survey-xs.jpg" />
					<?php elseif (is_tablet()): ?>
						<video id="surveyDemo" class="survey-demo" autobuffer controls poster="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/survey-poster-min.png">
							<source src="<?php echo get_template_directory_uri(); ?>/videos/ts-survey-960.mp4" type="video/mp4" />
							<source src="<?php echo get_template_directory_uri(); ?>/videos/ts-survey-960.webm" type="video/webm" />
						</video>
					<?php else: ?>
						<video id="surveyDemo" class="survey-demo" autobuffer loop poster="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/survey-poster-min.png">
							<source src="<?php echo get_template_directory_uri(); ?>/videos/ts-survey-960.mp4" type="video/mp4" />
							<source src="<?php echo get_template_directory_uri(); ?>/videos/ts-survey-960.webm" type="video/webm" />
						</video>
					<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
		<div class="apps">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Tradeshift Apps"); ?></h2>
						<p><?php _e("You can easily expand your Tradeshift experience with third-party apps that connect to <a href=\"/partners/ecovadis/\">EcoVadis</a>, riskmethods, and others. Apps mean you can add value like sustainability and diversity ratings, or get more data sources – and that’s just the beginning.", 'Tradeshift'); ?></p>
						<p><?php _e("For example, with the riskmethods app, you get real-time risk intelligence, with 5,000+ data sources which analyze your business risk in real time and rank them according to exposure.", 'Tradeshift'); ?></p>
						<p><?php _e("Tradeshift<sup>&reg;</sup> Risk doesn’t stand alone: it works together with Tradeshift<sup>&reg;</sup> Buy and Tradeshift<sup>&reg;</sup> Pay. Link Tradeshift<sup>&reg;</sup> Risk with Tradeshift<sup>&reg;</sup> Buy to onboard your suppliers quickly, or add in Tradeshift<sup>&reg;</sup> Pay to protect your procure-to-pay process.", 'Tradeshift'); ?></p>
					</div>
				</div>
				<?php if (is_mobile()): ?>
					<div class="row imagery">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/ts-apps-bg-xs.jpg" alt="Tradeshift Apps" />
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="see">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2><?php _e("See what we’re talking about.<br class=\"visible-xs visible-sm\" /> (It’s pretty cool.)", 'Tradeshift'); ?></h2>
							<div class="content-wrapper video-content">
								<img class="video-img" onclick="fn_vidyard_7xlR8KV3_doFFTkZ5RMK3A();" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/watch-risk-demo.jpg" />
								<!-- Vidyard script already embedded on the hero section -->
								<p><?php _e("Tradeshift<sup>&reg;</sup> Risk<br class=\"visible-sm visible-md\" /> Demo<br /><span class=\"trigger-vid-1-risk\" onclick=\"fn_vidyard_7xlR8KV3_doFFTkZ5RMK3A();\">Play video &raquo;</span>", 'Tradeshift'); ?></p>
							</div>
							<div class="content-wrapper">
								<a class="trigger-vid-2-risk" href="/resources/essential-guide-to-supplier-management/"><img class="video-img" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/read-guide.jpg" /></a>
								<p><?php _e("Essential Guide to Supplier Management", 'Tradeshift'); ?><br /><a class="trigger-vid-2-risk" href="/resources/essential-guide-to-supplier-management/"><?php _e("Read more &raquo;"); ?></a></p>
							</div>
							<div class="content-wrapper">
								<a class="trigger-vid-3-risk" href="/resources/supplier-management-checklist/"><img class="video-img" src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/checklist.jpg" /></a>
								<p><?php _e("Supplier Management Checklist", 'Tradeshift'); ?><br><a class="trigger-vid-3-risk" href="/resources/supplier-management-checklist/"><?php _e("Check it out &raquo;"); ?></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="you-can">
			<div class="container">
				<div class="row">
					<h2><?php _e("With Tradeshift Risk, you can:", 'Tradeshift'); ?></h2>
					<div class="manage">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/icon-manage.png" />
						<h4><?php _e("Manage all your suppliers without friction", 'Tradeshift'); ?></h4>
						<p><?php _e("Organize the chaos of disconnected, outdated supplier data.", 'Tradeshift'); ?></p>
					</div>
					<div class="control">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/icon-control.png" />
						<h4><?php _e("Control your risk and prevent disaster", 'Tradeshift'); ?></h4>
						<p><?php _e("Protect your brand with a holistic, real-time view of all your suppliers.", 'Tradeshift'); ?></p>
					</div>
					<div class="unlock">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/risk/icon-unlock.png" />
						<h4><?php _e("Unlock hidden value in your supply chain", 'Tradeshift'); ?></h4>
						<p><?php _e("Build value with all your supplier data - it's not just about savings.", 'Tradeshift'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="fill-out-form">
			<div class="container">
				<div class="row">
					<h2><?php _e("Get the facts on how Tradeshift can help your enterprise.", 'Tradeshift'); ?></h2>
					<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
						<div class="form-group">
							<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary-cta" id="getStartedTS_risk" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Let's get started", 'Tradeshift'); ?></button>
						</div>
					</form>
				</div>
				<div class="row">
					<p class="sub"><?php _e("Tradeshift takes your privacy seriously.<br /> We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.", 'Tradeshift'); ?></p>
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
	        <h3 id="myModalLabel"><?php _e("Request a Demo"); ?></h3>
	        <p class="lead"><?php _e("Start your journey with a free demo today."); ?></p>
	      </div>
	      <div class="modal-body">
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_877"></form>
			<script type="text/javascript">// <![CDATA[
	        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 877, function(form){
	           form.vals({"Marketing_Resource_Name__c":"Solutions - Tradeshift Risk"});
	    	});
			// ]]></script>
	      </div>
	    </div>
	  </div>
	</div>

<?php get_footer(); ?>
