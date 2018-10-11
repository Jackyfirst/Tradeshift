 <?php
/*
Template Name: Landing Page - Day in a Life
*/
get_header('lp-dial'); ?>

<body id="dialVideo" <?php body_class(); ?>>
	<?php get_template_part( 'components/body', 'google-tag-manager' ); ?>
	<header class="header-sitewide-lp">
		<div class="container">
			<div class="row">
				<div class="contents">
					<a href="https://tradeshift.com" class="navbar-logo"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
					<span class="navbar-tel hidden-xs">Let's connect: 
			            <span class="phone_default">+1-800-381-3585</span>
			            <span class="phone_us non-active">+1-800-381-3585</span>
			            <span class="phone_uk non-active">+44-(0)20-3751-0410</span>
			            <span class="phone_germany non-active">+49-0-89-97007-255</span>
			            <span class="phone_france non-active">+33-(0)1-44-43-54-80</span>
					</span>
				</div>
			</div>
		</div>
	</header>
	<main class="main-content lp-dial">
		<div id="sectionHero" class="section-view section-hero">
			<div class="container">
				<div class="row row-video">
					<div class="contents">
						<h1 id="videoHeadline">You know when you have "one of those days"...</h1>
						<script>
							// RegEx for URL Parameter
							function getParameterByName(name) {
							    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
							    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
							        results = regex.exec(location.search);
							    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
							};

							// Vidyard: Read the custom ID that was merged into the campaign email as a query string parameter
						    // Parameter should be "custom_id" e.g. http://www.landingpage.com?custom_id={merge field value}
						    var videoID = getParameterByName('custom_id');
						    if (videoID[videoID.length-1] == "/") {
						      videoID = videoID.substring(0,videoID.length-1);
						    }

						    // Vidyard: Create a script tag with dynamic attributes based on the Custom ID of video
							var embedScript=document.createElement('script');
							embedScript.type='text/javascript';
							embedScript.id='vidyard_embed_code_BRJbMSZWjddKNRxV2oVw1c';
							embedScript.src='//play.vidyard.com/BRJbMSZWjddKNRxV2oVw1c.js?v=3.1.1&type=inline&custom_id='+videoID;

							// Append script to element
							$(embedScript).insertAfter("#videoHeadline");

						</script>
					</div>
				</div>
				<div class="row row-learnmore hidden-xs hidden-sm">
					<div class="icon-down-arrow">Learn more</div>
				</div>
				<div id="rowSchedule" class="row row-schedule">
					<div class="contents">
						<h2>If your days look like this...</h2>
						<?php if (is_mobile()): ?>
						<div class="todos">
							<h4>9AM:</h4>
							<p>Big meeting&mdash;CPO and CFO re: procurement KPIs and direction of company</p>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/mbp.png" />
						</div>
						<div class="todos">
							<h4>10AM:</h4>
							<p>Inventory (supplier qualifications, delivery times, development, products)</p>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/paperstack.png" />
						</div>
						<div class="todos">
							<h4>12PM:</h4>
							<p>Planning and budget 2017</p>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/calendar.png" />
						</div>
						<div class="todos">
							<h4>2PM:</h4>
							<p>Meet with XYZ supplier re: contracts &amp; current product delay</p>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/cup.png" />
						</div>
						<div class="todos">
							<h4>4PM:</h4>
							<p>Negotiation with ABC company on build contract (<sup>*</sup>Use as relationship building opp)</p>
							<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/pills.png" />
						</div>
					</div>
						<?php else: ?>
						<div class="todos todos-md active">
							<h4>9AM:</h4>
							<p>Big meeting&mdash;CPO and CFO re: procurement KPIs and direction of company</p>
						</div>
						<div class="todos todos-md">
							<h4>10AM:</h4>
							<p>Inventory (supplier qualifications, delivery times, development, products)</p>
						</div>
						<div class="todos todos-md">
							<h4>12PM:</h4>
							<p>Planning and budget 2017</p>
						</div>
						<div class="todos todos-md">
							<h4>2PM:</h4>
							<p>Meet with XYZ supplier re: contracts &amp; current product delay</p>
						</div>
						<div class="todos todos-md">
							<h4>4PM:</h4>
							<p>Negotiation with ABC company on build contract<br />(<sup>*</sup>Use as relationship building opp)</p>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/mbp.png" class="todo-image todo-mbp active" />
					<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/paperstack.png" class="todo-image todo-paperstack" />
					<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/calendar.png" class="todo-image todo-calendar" />
					<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/cup.png" class="todo-image todo-cup" />
					<img src="<?php echo get_template_directory_uri(); ?>/img/lp-custom/dial/pills.png" class="todo-image todo-pills" />
						<?php endif; ?>
				</div>
				<div class="row row-talk">
					<div class="contents">
						<h2>We should talk.</h2>
						<p>Drive growth, get 100% compliant, increase cost savings, and <br />drastically reduce your overall procure-to-pay cycle time.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="prefooter-cta">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Get what you and your <br />company need to succeed.</h2>
						<button class="btn btn-primary-cta btn-white" data-toggle="modal" data-target="#mktoModal">Start the conversation</button>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer-lp-dial brand-copyright-whitebg">
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
	</footer>
	<!-- Modal View of Marketo Forms2 -->
	<div class="modal fade" id="mktoModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel">Start the conversation</h3>
	        <p class="lead">We promise! Work life is about to get better.</p>
	      </div>
	      <div class="modal-body">
	        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_2345"></form>
			<script type="text/javascript">// <![CDATA[
	        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 2345, function(form){
	           form.vals({"Marketing_Resource_Name__c":"Day in a Life Page"});
	    	});
			// ]]>
			</script>
	      </div>
	    </div>
	  </div>
	</div>
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

	// Prevents Marketo Form to submit a non-business e-mail
	// ------------------------------------------------------

	(function (){
	  // Please include the email domains you would like to block in this list
	  var invalidDomains = ["@gmail.","@yahoo.","@hotmail.","@live.","@aol.","@outlook.","@msn."];

	  MktoForms2.whenReady(function (form){
	    form.onValidate(function(){
	      var email = form.vals().Email.toLowerCase();
	      if(email){
	        if(!isEmailGood(email)) {
	          form.submitable(false);
	          var emailElem = form.getFormElem().find("#Email");
	          form.showErrorMessage("Must be business email", emailElem);
	        }else{
	          form.submitable(true);
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
	<script>
		// Show the TODOs piling up when it hits the viewport on non-smartphone
		<?php if (!is_mobile()): ?>
			jQuery(document).ready(function($){
				new Waypoint({
				    element: document.getElementById('rowSchedule'),
				    handler: function(down) { 
				      var $todo = $('#rowSchedule'),
					      $todoScheds = $todo.find('.todos-md'),
					      $todoImages = $todo.find('.todo-image'),
					      showTodo = function(num) {
					        var $todoSched = $todoScheds.eq(num);
					        var $todoImage = $todoImages.eq(num);
					        $todoScheds.not($todoSched).removeClass('active');
					        $todoSched.addClass('active');
					        $todoImage.addClass('active');
					      };

					  // Auto reveal of steps
					  var todoIndex = 1,
					      endPoint = $todoScheds.length - 1,
					      todoAnimation = setInterval(function(){
					        if(todoIndex <= endPoint) {
					          showTodo( todoIndex );
					          todoIndex++;
					        } else {
					          todoIndex = 0;
					          clearInterval(todoAnimation);
					        }
					      },2000);
				    },
				    offset: 220
				 });
			});
			<?php endif; ?> 
	</script>
<?php 
	get_footer('lp-dial'); 
?>
