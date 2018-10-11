 <?php
/*
Template Name: Go v2 - Landing Page
*/
get_header('gov2-only'); ?>
	<header id="headerGo" class="header-go">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="brand">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-logo.png" alt="Tradeshift Go"></a>
					</div>
					<div class="download hidden-xs">
						<a href="https://itunes.apple.com/us/app/tradeshift-go-your-travel/id980446473?mt=8" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/gov2/download-go-app.png" alt="Download Go App"></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main id="fullpage" class="main-content ts-go-v2">
	<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
		<div id="sectionOne" class="section section-view section-one">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div id="copyFormHeader" class="copy-form-wrapper">
							<h2>The easiest way to get spend visibility &amp; control</h2>
							<p>Company credit cards, expenses and managing spend is complex. Make life easier with Tradeshift Go.</p>
							<?php if (!is_mobile()): ?>
							<div id="mktoFormSectionOne" class="section-form-wrapper">
								<div id="formWrapper" class="form-wrapper">
									<form id="mktoForm_2294" class="go-marketo-form"></form>
									<script type="text/javascript">// <![CDATA[
								        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2294, function(form){
								           form.vals({"Marketing_Resource_Name__c":"Go Website Email Field"});
								           form.onSubmit(function(){
								              var $emailMkto = form.vals().Email;
								              analytics.alias(analytics.user().anonymousId());
								              analytics.identify (analytics.user().anonymousId(), {
										         email: $emailMkto
										      });
								              analytics.track('Go Website Form Submit', {
								                formName: 'Email Field',
								                email: $emailMkto
								              });
								           });
								        });
										// ]]>
									</script>
								</div>
							</div>
							<?php endif; ?>
						</div>
						<div class="go-concierge-chat">
							<div id="chatOne" class="chat chat-persona chat-one">
								<img id="s1" class="avatar-image avatar-persona" src="<?php echo get_template_directory_uri(); ?>/img/gov2/avatar1.png" alt="Thor"/>
								<div class="chat-wrapper">
									<div id="chatLoader1" class="spinner spinner--go hidden-xs">
									  <div class="spinner__item1"></div>
									  <div class="spinner__item2"></div>
									  <div class="spinner__item3"></div>
									  <div class="spinner__item4"></div>
									</div>
									<div id="s2" class="chat-container">
										<div class="chat-transcript">
											<p class="persona-name">Thor</p>
											<p class="chat-text">Go, I require a second hammer.</p>
										</div>
									</div>
								</div>
							</div>
							<div id="chatTwo" class="chat chat-go chat-two">
								<img id="s3" class="avatar-image avatar-go" src="<?php echo get_template_directory_uri(); ?>/img/gov2/ts-go-icon.png" alt="Go"/>
								<div class="chat-wrapper">
									<div id="chatLoader2" class="spinner spinner--go hidden-xs">
									  <div class="spinner__item1"></div>
									  <div class="spinner__item2"></div>
									  <div class="spinner__item3"></div>
									  <div class="spinner__item4"></div>
									</div>
									<div id="s4" class="chat-container">
										<div class="chat-transcript">
											<p class="go-name">GO</p>
											<p class="chat-text">Okay! I have messaged Odin and asked for his approval.</p>
										</div>
										<div class="ts-go-approval-box">
											<p class="approval-message">Approved for Thor: <strong>New hammer</strong></p>
											<img class="approval-card" src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-credit-card.png" alt="Go Card">
										</div>
									</div>
								</div>
							</div>
							<div id="chatThree" class="chat chat-persona chat-three">
								<img id="s5" class="avatar-image avatar-persona" src="<?php echo get_template_directory_uri(); ?>/img/gov2/avatar1.png" alt="Thor"/>
								<div class="chat-wrapper">
									<div id="chatLoader3" class="spinner spinner--go hidden-xs">
									  <div class="spinner__item1"></div>
									  <div class="spinner__item2"></div>
									  <div class="spinner__item3"></div>
									  <div class="spinner__item4"></div>
									</div>
									<div id="s6" class="chat-container">
										<div class="chat-transcript">
											<p class="persona-name">Thor</p>
											<p class="chat-text">You have my thanks.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php if (is_mobile()): ?>
						<div id="mktoFormSectionOneMobile" class="section-form-wrapper">
							<div id="formWrapper" class="form-wrapper">
								<form id="mktoForm_2294" class="go-marketo-form"></form>
								<script type="text/javascript">// <![CDATA[
							        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2294, function(form){
							           form.vals({"Marketing_Resource_Name__c":"Go Website Email Field"});
							           form.onSubmit(function(){
							              var $mktoTSEmail = $('#Email').val();
							              analytics.alias(analytics.user().anonymousId());
							              analytics.identify (analytics.user().anonymousId(), {
									         email: $mktoTSEmail
									      });
							              analytics.track('Go Website Form Submit', {
							              	formName: 'Email Field Smartphone',
								            email: $emailMkto
							              });
							           });
							        });
									// ]]>
								</script>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs"><i class="fa fa-angle-down"></i></div>
		</div>

		<div id="sectionTwo" class="section section-view section-two">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="copy-form-wrapper">
							<h2>Track who's spending and approving what<br><strong>&mdash; in seconds.</strong></h2>
							<p>Go helps you manage everyday company spending as it happens. With single-use virtual credit cards and in-the-moment approvals, employees can buy what they need online, when they need it.</p>
							<p>Get instant transparency into credit card purchases and make manual reconciliations a thing of the past.</p>
							<?php if (!is_mobile()): ?>
							<div id="mktoFormSectionTwo" class="section-form-wrapper"> </div>
							<?php endif; ?>
						</div>
						<div class="screenshot">
							<?php if (is_mobile()): ?>
							<img class="go-product-ss" src="<?php echo get_template_directory_uri(); ?>/img/gov2/ts-go-screen.png" />
							<?php else: ?>
							<img class="go-product-ss" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/ts-go-screen.png" />
							<?php endif; ?>
						</div>
						<?php if (is_mobile()): ?>
						<div id="mktoFormSectionTwoMobile" class="section-form-wrapper"> </div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs"><i class="fa fa-angle-down"></i></div>
		</div>

		<div id="sectionThree" class="section section-view section-three">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div id="copyForm3" class="copy-form-wrapper">
							<h2>Try it with travel.<br>Oh, the places you'll Go.</h2>
							<p>Your smart new virtual travel agent can help you do other tasks too—starting with booking your next work trip. Book your flights, hotels, rental cars and restaurants simply by saying where you're headed: Go does the rest.</p>
							<p>No matter what you use credit cards for (office supplies, recurring IT costs, your next trip to NYC), Go helps you get it.</p>
							<p style="font-size: 14px; line-height: 22px; font-weight: 600;">Enter your mobile # below to receive a text with a link to download the app. Be one step closer to meeting your new virtual travel agent!</p>
							<div id="mktoFormMarker"> </div>
							<?php if (!is_mobile()): ?>
							<div class="form-wrapper">
								<form id="mktoForm_1803" class="go-marketo-form"></form>
								<script type="text/javascript">// <![CDATA[
							        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1803, function(form){
							           form.vals({"Marketing_Resource_Name__c":"Go Website Phone Field"});
							           form.onSubmit(function(){;
							              var $mktoPhoneCountryCode = $('#phoneCountryCode');
							              var $mktoPhoneNumber = $('#Phone').val();
							              // console.log ($mktoPhoneCountryCode);
							              $.post('//www.usehyper.com/share_app_url', {
							              		platform: "ios",
							              		phone: '+1' + $mktoPhoneNumber
							              	}, 'json');
							              analytics.alias(analytics.user().anonymousId());
							              analytics.identify (analytics.user().anonymousId(), {
									         phone: $mktoPhoneNumber
									      });
							              analytics.track('Go Website Form Submit', {
							              	phone: $mktoPhoneNumber,
							                formName: 'Phone Field'
							              });
							            });
							           });
									// ]]>
								</script>
							</div>
							<?php endif; ?>
						</div>
						<div class="go-concierge-chat">
							<div id="chatFour" class="chat chat-go chat-four">
								<img id="s31" class="avatar-image avatar-go" src="<?php echo get_template_directory_uri(); ?>/img/gov2/ts-go-icon.png" alt="Go"/>
								<div class="chat-wrapper">
									<div id="chatLoader4" class="spinner spinner--go hidden-xs">
									  <div class="spinner__item1"></div>
									  <div class="spinner__item2"></div>
									  <div class="spinner__item3"></div>
									  <div class="spinner__item4"></div>
									</div>
									<div id="s32" class="chat-container">
										<div class="chat-transcript">
											<p class="go-name">GO</p>
											<p class="chat-text">Hi Freya, what can I do for you?</p>
										</div>
									</div>
								</div>
							</div>
							<div id="chatFive" class="chat chat-persona chat-five">
								<img id="s33" class="avatar-image avatar-persona" src="<?php echo get_template_directory_uri(); ?>/img/gov2/avatar2.png" alt="Freya"/>
								<div class="chat-wrapper">
									<div id="chatLoader5" class="spinner spinner--go hidden-xs">
									  <div class="spinner__item1"></div>
									  <div class="spinner__item2"></div>
									  <div class="spinner__item3"></div>
									  <div class="spinner__item4"></div>
									</div>
									<div id="s34" class="chat-container">
										<div class="chat-transcript">
											<p class="persona-name">Freya</p>
											<p class="chat-text">I need a flight from Oslo to JFK, landing tomorrow at 8pm.</p>
										</div>
									</div>
								</div>
							</div>
							<div id="chatSix" class="chat chat-go chat-six">
								<img id="s35" class="avatar-image avatar-go" src="<?php echo get_template_directory_uri(); ?>/img/gov2/ts-go-icon.png" alt="Go"/>
								<div class="chat-wrapper">
									<div id="chatLoader6" class="spinner spinner--go hidden-xs">
									  <div class="spinner__item1"></div>
									  <div class="spinner__item2"></div>
									  <div class="spinner__item3"></div>
									  <div class="spinner__item4"></div>
									</div>
									<div id="s36" class="chat-container">
										<div class="chat-transcript">
											<p class="go-name">GO</p>
											<p class="chat-text">I found this flight for you:</p>
										</div>
										<div class="ts-go-approval-box">
											<img class="approval-card" src="<?php echo get_template_directory_uri(); ?>/img/gov2/flight.png" alt="Flight">
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php if (is_mobile()): ?>
						<div class="form-wrapper">
							<form id="mktoForm_1803" class="go-marketo-form"></form>
							<script type="text/javascript">// <![CDATA[
						        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1803, function(form){
						           form.vals({"Marketing_Resource_Name__c":"Go Website Phone Field"});
						           form.onSubmit(function(){
						              var $mktoPhoneCountryCode = $('#phoneCountryCode');
						              var $mktoPhoneNumber = $('#Phone').val();
						              // console.log ($mktoPhoneCountryCode);
						              $.post('//www.usehyper.com/share_app_url', {
						              		platform: "ios",
						              		phone: '+1' + $mktoPhoneNumber
						              	}, 'json');
						              analytics.alias(analytics.user().anonymousId());
						              analytics.identify (analytics.user().anonymousId(), {
								         phone: $mktoPhoneNumber
								      });
						              analytics.track('Go Website Form Submit', {
						              	phone: $mktoPhoneNumber,
						                formName: 'Phone Field'
						              });
						            });
						           });
								// ]]>
							</script>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs"><i class="fa fa-angle-down"></i></div>
		</div>

		<div id="sectionFour" class="section section-view section-four">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>How it works:</h2>
						<div class="go-section-video">
							<div class="video-wrapper">
								<script type="text/javascript" id="vidyard_embed_code_qWPWeKmQKXxoCPvrrYSrxP" src="//play.vidyard.com/qWPWeKmQKXxoCPvrrYSrxP.js?v=3.1.1&type=lightbox"></script><div class="outer_vidyard_wrapper"><div class="vidyard_wrapper" onclick="fn_vidyard_qWPWeKmQKXxoCPvrrYSrxP(); ga('send', 'event', 'Go - Landing Page', 'Play Video', 'Super simple requests and approvals');"><img width="360" src="//play.vidyard.com/qWPWeKmQKXxoCPvrrYSrxP.jpg?"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>
							</div>
							<h4>Super simple requests &amp; approvals</h4>
							<p>Use Go's simple chat interface to request items and get approvals. Communicate through a web browser, mobile app, email, or chat. </p>
						</div>

						<div class="go-section-video">
							<div class="video-wrapper">
								<script type="text/javascript" id="vidyard_embed_code_2MuGnxkAocmHoK6JGgAact" src="//play.vidyard.com/2MuGnxkAocmHoK6JGgAact.js?v=3.1.1&type=lightbox"></script><div class="outer_vidyard_wrapper"><div class="vidyard_wrapper" onclick="fn_vidyard_2MuGnxkAocmHoK6JGgAact(); ga('send', 'event', 'Go - Landing Page', 'Play Video', 'Issue virtual credit cards');"><img width="360" src="//play.vidyard.com/2MuGnxkAocmHoK6JGgAact.jpg?"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>
							</div>
							<h4>Issue virtual credit cards</h4>
							<p>Once a purchase request is approved, Go issues a single-use virtual credit card from your established corporate credit card program. Employees simply drag and drop their card onto the payment page at checkout.</p>
						</div>

						<div class="go-section-video">
							<div class="video-wrapper">
								<script type="text/javascript" id="vidyard_embed_code_dYhtCLgoRmwggCtCFiENxf" src="//play.vidyard.com/dYhtCLgoRmwggCtCFiENxf.js?v=3.1.1&type=lightbox"></script><div class="outer_vidyard_wrapper"><div class="vidyard_wrapper" onclick="fn_vidyard_dYhtCLgoRmwggCtCFiENxf(); ga('send', 'event', 'Go - Landing Page', 'Play Video', 'Instant insights on spend trends');"><img width="360" src="//play.vidyard.com/dYhtCLgoRmwggCtCFiENxf.jpg?"><div class="vidyard_play_button"><a href="javascript:void(0);"></a></div></div></div>
							</div>
							<h4>Instant insights on spend trends</h4>
							<p>Go’s dashboard tells you who’s spent and approved what, at a glance. Track individual transactions that include buyers, approvers, and department codes. You’ll get alerts for abnormal spikes in spend patterns and when you’ve reached budget limits.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs"><i class="fa fa-angle-down"></i></div>
		</div>

		<div id="sectionFive" class="section section-view section-five">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div id="copyForm5" class="copy-form-wrapper">
							<h2>Earn and share your rewards.</h2>
							<p>Go is free for users. You only pay with a portion of the credit card rewards you earn. Earn more by consolidating your rewards in one central account.</p>
							<?php if (!is_mobile()): ?>
							<div id="mktoFormSectionFive" class="section-form-wrapper"> </div>
							<?php endif; ?>
							<?php if (is_mobile()): ?>
							<div id="mktoFormSectionFiveMobile" class="section-form-wrapper"> </div>
							<?php endif; ?>
						</div>
						<div class="go-cards">
							<figure id="goCards" class="go-floating-cards">
								<img id="s51" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="go-floating-card go-floating-card-1" />
								<img id="s52" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="go-floating-card go-floating-card-2" />
								<img id="s53" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="go-floating-card go-floating-card-3" />
								<img id="s54" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="hidden-sm go-floating-card go-floating-card-4" />
								<img id="s55" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-thor-card.png" class="hidden-sm go-floating-card go-floating-card-5 go-special-card" />

								<img id="s511" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-thor-card.png" class="visible-sm go-floating-card go-floating-card-4" />
								<img id="s510" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="visible-sm go-floating-card go-floating-card-5 go-special-card" />

								<img id="s56" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="go-floating-card go-floating-card-6" />
								<img id="s57" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="go-floating-card go-floating-card-7" />
								<img id="s58" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="go-floating-card go-floating-card-8" />
								<img id="s59" data-src="<?php echo get_template_directory_uri(); ?>/img/gov2/go-blank-card.png" class="go-floating-card go-floating-card-9" />
							</figure>
						</div>
					</div>
				</div>
			</div>
			<div class="icon-down-arrow hidden-xs"><i class="fa fa-angle-down"></i></div>
		</div>

		<div id="sectionSix" class="section section-view section-six">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="copy-form-wrapper">
							<h2>Sign up for your<br> free Go account.</h2>
							<p>Evil wizardry or surprisingly simple spend management tool? You decide.</p>
							<?php if (!is_mobile()): ?>
							<div id="mktoFormSectionSix" class="section-form-wrapper"> </div>
							<?php endif; ?>
							<?php if (is_mobile()): ?>
							<div id="mktoFormSectionSixMobile" class="section-form-wrapper"> </div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-go">
				<div class="footer-primary">
					<div class="container">
						<div class="row">
							<div class="contents">
								<div class="brand">
									<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/gov2/footer-logo.png" alt="Tradeshift"></a>
								</div>
								<div class="footer-primary-nav">
									<ul>
										<li><a href="https://tradeshift.com/about">About</a></li>
										<li><a href="https://tradeshift.com/press">Press</a></li>
										<li><a href="https://tradeshift.com/contact">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-secondary">
					<div class="container">
						<div class="row">
							<div class="contents">
								<div class="footer-secondary-nav">
									<ul>
										<li><a title="Privacy Policy" href="https://tradeshift.com/privacy-policy/">Privacy Policy</a></li>
										<li><a title="Terms of Service" href="https://tradeshift.com/terms-of-service/">Terms of Service</a></li>
										<li><a title="Terms of Use" href="https://tradeshift.com/terms-of-use/">Terms of Use</a></li>
										<li><a title="Tradeshift 2016" href="https://tradeshift.com/">&copy; Tradeshift 2016</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Validation: Prevents Marketo Form to submit a non-business e-mail -->
	<script>
	(function (){
	  // Please include the email domains you would like to block in this list
	  var invalidDomains = ["@gmail.","@yahoo.","@hotmail.","@live.","@aol.","@outlook.","@msn."];

	  MktoForms2.whenReady(function (form){
	    form.onValidate(function(){
	      var email = form.vals().Email.toLowerCase();
	      console.log(email);
	      if(email){
	        if(!isEmailGood(email)) {
	          form.submittable(false);
	          var emailElem = form.getFormElem().find("#Email");
	          form.showErrorMessage("Must be business email", emailElem);
	        }else{
	          form.submittable(true);
	        }
	      }
	    });
	  });
	  function isEmailGood(email) {
	    for(var i=0; i < invalidDomains.length; i++) {
	      var domain = invalidDomains[i];
	      if (email.indexOf(domain) != -1) {
	        return false;
	      }
	    }
	    return true;
	  }
	})();
	</script>
	<!-- For Mobile, Use WaypointJS to move Marketo around -->
	<?php if (is_mobile()): ?>
	<script>
	var $formBlock = $('#formWrapper');

	// Detach/Append when entering Section One
	new Waypoint({
	    element: document.getElementById('sectionOne'),
	    handler: function() {
	      $formBlock.detach()
          $formBlock.appendTo('#mktoFormSectionOneMobile');
	    },
	    offset: -288
	 });
	new Waypoint.Inview({
	    element: document.getElementById('sectionOne'),
	    enter: function(down) {
	      $formBlock.detach()
          $formBlock.appendTo('#mktoFormSectionOneMobile');
	    }
	  });
	// Detach/Append when entering Section Two
	new Waypoint({
		element: document.getElementById('sectionTwo'),
		handler: function() {
	        $formBlock.detach();
	        $formBlock.appendTo('#mktoFormSectionTwoMobile');
		}
	});
	// Detach/Append when exiting Section Three
	new Waypoint.Inview({
	    element: document.getElementById('sectionThree'),
	    exit: function(up) {
	      $formBlock.detach()
          $formBlock.appendTo('#mktoFormSectionTwoMobile');
	    }
	  });
	// Detach/Append when entering Section Five
	new Waypoint({
		element: document.getElementById('sectionFive'),
		handler: function() {
	        $formBlock.detach();
	        $formBlock.appendTo('#mktoFormSectionFiveMobile');
		},
		offset: 55
	});
	// Detach/Append when entering Section Five
	new Waypoint({
		element: document.getElementById('sectionSix'),
		handler: function() {
	        $formBlock.detach();
	        $formBlock.appendTo('#mktoFormSectionSixMobile');
		},
		offset: 55
	});
	</script>
	<?php endif; ?>

<?php
	get_footer('gov2-only');
?>
