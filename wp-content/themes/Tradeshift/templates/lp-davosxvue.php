 <?php
/*
Template Name: Landing Page - DavosX Vue
*/
get_header('lp-davosxvue'); ?>
<main class="main-content lp-davosx">
	<div id="davosApp" class="section-hero">
		<div class="container">
			<div class="row row-codeform hidden">
				<div class="contents">
					<h1>DavosX <br class="visible-xs" />awaits you.</h1>
					<h3>Enter the secret code from your letter:</h3>
					<input type="text" class="invite-code form-control" placeholder="Enter Invitation Code" v-model="inviteCode">
					<p id="statusCode" class="status-code animated infinite pulse" v-cloak>{{statusCode}}</p>
				</div>
			</div>
			<div class="row row-contactform hidden">
				<div class="contents">
					<h2>Hello {{firstName}},</h2>
					<h3>We’re looking forward to speaking with you about your DavosX experience.</h3>
					<p class="lead">If you are able to join us, please fill out the form below. Or contact Travis Bickham: <a href="mailto:trb@tradeshift.com" target="_blank">trb@tradeshift.com</a> / <a href="tel:1-650-346-6584" target="_blank">+1 650 346 6584</a>. We’ll be in touch in the next few business days to tell you more about it.</p>
                  <div role="form" id="wpcf7-f5003-p5002-o1" lang="en-US" dir="ltr" class="wpcf7">
                    <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
                    <form id="mktoForm_2445"></form>
                    <script type="text/javascript">// <![CDATA[
                        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2445, function(form){
                           form.vals({"Marketing_Resource_Name__c":"Davos invite"});
                           form.onSubmit(function(){
                                var $emailMkto = form.vals().Email;
                           });
                        });
                        // ]]>
                        </script>
                      <!-- <form action="/davosx-invite/#wpcf7-f5003-p5002-o1" method="post" novalidate="novalidate" class="wpcf7-form">
                          <div style="display: none;">
                              <input type="hidden" name="_wpcf7" value="5003">
                              <input type="hidden" name="_wpcf7_version" value="4.3.1">
                              <input type="hidden" name="_wpcf7_locale" value="en_US">
                              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5003-p5002-o1">
                              <input type="hidden" name="_wpnonce" value="c6b18a22b6">
                          </div>
                          <div class="wpcf7-main-form-wrapper">
                              <span class="wpcf7-form-control-wrap davosx-email">
                                  <input type="email" name="davosx-email" value="" size="40" id="davosxEmail" aria-invalid="false" placeholder="Enter email address" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email davosx-email">
                              </span><br />
                              <span class="wpcf7-form-control-wrap davosx-phone">
                                  <input type="text" name="davosx-phone" value="" size="40" id="davosxPhone" aria-invalid="false" placeholder="Enter phone number" class="wpcf7-form-control wpcf7-text davosx-phone">
                              </span><br />
                              <span class="wpcf7-form-control-wrap davosx-time">
                                  <input type="text" name="davosx-time" value="" size="40" id="davosxTime" aria-invalid="false" placeholder="Best time to reach you..." class="wpcf7-form-control wpcf7-text davosx-time">
                              </span>
                          </div>
                          <h4>Thanks for starting the discussion. Claim your Apple Watch as a token of good things to come.</h4>
                          <h5>Select your model:</h5>
                          <div class="wpcf7-main-form-wrapper">
                              <div class="wpcf7-form-control-wrap davosx-watch-radio">
                                    <div id="davosxWatch" class="wpcf7-form-control wpcf7-radio davosx-watch-radio-list">
                                        <h4 class="option-heading"><strong>Option 1.</strong> Series 2 - Gold Aluminum Case with Cocoa Sport Band</h4>
                                        <span class="wpcf7-list-item first"><label><input type="radio" name="davosx-watch" value="Option 1 42mm Case" checked="checked">&nbsp;<span class="wpcf7-list-item-label">42mm Case</span></label><a href="http://apple.com" target="_blank">Details</a></span>
                                        
                                        <h4 class="option-heading"><strong>Option 2.</strong> Series 2 - Space Gray Aluminum Case with Black Sport Band</h4>
                                        <span class="wpcf7-list-item"><label><input type="radio" name="davosx-watch" value="Option 2 38mm Case">&nbsp;<span class="wpcf7-list-item-label"><a href="http://apple.com" target="_blank">38mm Case</a></span></label></span>
                                        <span class="wpcf7-list-item"><label><input type="radio" name="davosx-watch" value="Option 2 42mm Case">&nbsp;<span class="wpcf7-list-item-label"><a href="http://apple.com" target="_blank">42mm Case</a></span></label></span>
                                        
                                        <h4 class="option-heading"><strong>Option 3.</strong> Series 2 - Rose Gold Aluminum Case with Pink Sand Sport Band</h4>
                                        <span class="wpcf7-list-item last"><label><input type="radio" name="davosx-watch" value="Option 3 38mm Case">&nbsp;<span class="wpcf7-list-item-label"><a href="http://apple.com" target="_blank">38mm Case</a></span></label></span>
                                  </div>
                              </div>
                              <br />
                              <input type="submit" value="Let's get started" id="submitButton" class="wpcf7-form-control wpcf7-submit btn btn-cta">
                          </div>
                      </form> -->
                      <h5>Fine Print:</h5>
                      <p class="fineprint">By accepting this Apple Watch, you certify that you are able to do so in compliance with applicable laws and the internal gifts and ethics rules of your organization. The value of this device is $269 - $399. Acceptance of this device in no way obligates you to purchase any Tradeshift or Apple products or services. Limit one Apple Watch per company.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Let's animate visibility of the invite code -->
<script>
  jQuery(document).ready(function($){
    $('.row-codeform').removeClass('hidden').addClass('animated zoomIn');
  })
</script>

<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

<script>
    var app = new Vue({
      el: '#davosApp',
      data: {
        inviteCode: '',
        statusCode: '',
        firstName: '',
        lastName: ''
      },
      watch: {
        inviteCode: function() {
          if (this.inviteCode.length === 0) {  // Show this message when user deletes code and input goes empty
         	this.statusCode = "Please enter an invite code."
          } else if (this.inviteCode.length >= 2) { // Perform lookup on data only on fourth character typed
          	this.lookupCode()
          } else {
          	this.statusCode = "Please enter a valid invite code."
          }
      	}
      },
      methods: {
        lookupCode: _.debounce(function() {
          var app = this
          app.statusCode = "Checking your code..."
          app.inviteCodeUpperCase = app.inviteCode.toUpperCase()
          axios.get('https://davosx-9d0e3.firebaseio.com/invites/' + app.inviteCodeUpperCase + '.json')
            .then(function (response) {
              app.statusCode = "Great. There's a match!";
              // Send an event track to Google Analytics
              ga( 'send', 'event', 'DavosX', 'Code Submission Match', app.inviteCodeUpperCase );
              // Pass the name from JSON to container span
              app.firstName = response.data.fn;
			 // Transition from code form to the message
              var transitionToForm = _.debounce(function() {
              	$('.row-codeform').addClass('animated zoomOut');
              	$('.row-contactform').removeClass('hidden').addClass('animated zoomIn');
              }, 1200);
              transitionToForm();
              // Hide the keyboard on smartphone when code is found
              var hideKeyboard = function() {
               document.activeElement.blur();
               $("input").blur();
              };
              hideKeyboard();
              // Scroll the page to the top --- especially useful for smartphones
              window.scrollTo(0,0);
            })
            .catch(function (error) {
              app.statusCode = "Checking your code..."
            })
        }, 3000)
      }
    })
  </script>
<?php
	// Deregister globally loaded plugin scripts/styles not needed on this page
	wp_deregister_script( 'main' );
    wp_deregister_script( 'contact-form-7' );
	wp_deregister_script( 'legacyScript' );
	wp_deregister_style( 'contact-form-7' );
	get_footer('lp-davosx'); 
?>
