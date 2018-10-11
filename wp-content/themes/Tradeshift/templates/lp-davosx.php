 <?php
/*
Template Name: Landing Page - Davos X
*/
get_header('lp-davosx'); ?>
<script>

jQuery(document).ready(function($) { 
	$('#getInvitationCode').on('submit', function(e) {
	  e.preventDefault();
	  $.ajax({
	    type: 'post',

	    url: '/wp-admin/includes/getInvite_code.php',
	    dataType: 'json',
	    data: $('form').serialize(),
	    success: function (data) {
	    	if(data.success){
	    		$("#display_error").css('display', 'none');
	    		jQuery("#data").html(data.first_name);
	    	} else { 
	    		$("#display_error").css("display", "block");
	    		jQuery("#display_error").html(data.err_message);
	    	}
	    },
	  });

	});
})
</script>
	<main class="main-content lp-davosx">
		<div id="sectionHero" class="section-view section-hero">
			<div class="container">
				<div class="row row">
					<div id="davosInvite" class="contents">
						<h2>A Special Invitation Just For You</h2>
						<!-- <h3 v-bind:title="message">Hello there</h3>
						<form action="">
								<label for="inviteCode"></label>
								<input type="text" id="inviteCode" name="inviteCode">
						</form> -->
						<form id="getInvitationCode">
							<input type="text" name="invite_code" />
							<input type="submit" value="Go" />
						</form>
						<div id="contentsCF7" class="contents-cf7">
							<span id="display_error" style='color: red;''></span>
							<h2>Hello <span id="data"></span></h2>
							<h3>Sub</h3>
							<!-- CF7 form below -->
						</div>
						
<script>
	var davosX= new Vue({
		  el: '#davosInvite',
		  data: {
		  	message: 'This is the title'
		    // invites: [
		    //   { code: 'SNOWBOOTS', firstName: 'Michael', lastName: 'Scott' },
		    //   { code: 'WINTERLAND', firstName: 'Dwight', lastName: 'Schrute'},
		    // ]
		  }
		});

	console.log(davosX.message)// -> 1
</script>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- <footer class="footer-lp-dial brand-copyright-whitebg">
		<div class="container">
			<div class="row">
				<div class="brand">
					<a href="https://tradeshift.com" target="_blank"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
				</div>
				<div class="privacy-terms">
					<ul>
						<li><a href="https://tradeshift.com/privacy-policy/" target="_blank">Privacy policy</a></li>
						<li><a href="https://tradeshift.com/terms-of-service/" target="_blank">Terms of service</a></li>
						<li><a href="https://tradeshift.com/terms-of-use/" target="_blank">Terms of use</a></li>
						<li><a href="https://tradeshift.com/" target="_blank">&copy; Tradeshift 2016</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer> -->
	<script>
	// Let's internationalize phone numbers
	// -------------------------------------
	jQuery(document).ready(function($){
	    var changePhone = (function() {
	        var onSuccess = function(geoipResponse) {
	            var countryCode = geoipResponse.country.iso_code.toUpperCase();
	            if (countryCode === "FR") { // Show TS France Number
	                $('.phone_default').addClass('non-active');
	                $('.phone_france').removeClass('non-active');
	            } else if (countryCode === "DE") {  // Show TS Germany Number
	                $('.phone_default').addClass('non-active');
	                $('.phone_germany').removeClass('non-active');
	            } else if (countryCode === "GB") {  // Show TS UK Number if not France nor Germany
	                $('.phone_default').addClass('non-active');
	                $('.phone_uk').removeClass('non-active');
	            } else {  // Show US for everything else
	                $('.phone_default').addClass('non-active');
	                $('.phone_us').removeClass('non-active');
	            };
	        };
	        var onError = function(){
	            // console.log('Hello Error');
	        };
	        return function() {
	            geoip2.country( onSuccess, onError );
	        };
	    }());
	    changePhone();
	});
	</script>
<?php 
	get_footer('lp-davosx'); 
?>