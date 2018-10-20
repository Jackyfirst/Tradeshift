	<style>.smartling-de .sales-phone {display: none}</style>
	<!-- Footer Area -->
		<footer class="footer-main-only sitewide-menu">
			<div class="container">
				<div class="row brand-footer-nav">
					<div class="footer-nav">
						<!-- To edit this snippet, go to the file on /components -->
						<?php get_template_part( 'components/nav', 'footer-sitewide-global' ); ?>
					</div>
				</div>
				<div class="row privacy-terms-copyright" id="privacy_footer">
					<?php if (is_mobile()): ?>
					<div class="privacy-terms">
						<ul id="privacy" class="menu-list">
							<li id="menu-item-1358"><a title="Privacy Policy" href="/privacy-policy/" class="univ-footer-nav-links"><?php _e("0", "Tradeshift"); ?></a></li>
							<li id="menu-item-1360"><a title="Terms of Service" href="/terms-of-service/" class="univ-footer-nav-links"><?php _e("Terms of Service", "Tradeshift"); ?></a></li>
							<li id="menu-item-1359">&copy;Tradeshift <?php echo date( 'Y' ); ?></li>
						</ul>
					</div>
					<?php else: ?>
					<div class="privacy-terms hidden-xs">
						<?php
						    wp_nav_menu( array(
						        'menu'              => 20,
						        'menu_id'           => 'privacy',
						        'depth'             => 1,
						        'container'         => 'ul',
						        'container_class'   => 'menu-privacy',
						        'container_id'      => 'privacy',
						        'menu_class'        => 'menu-list',
						        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						        'walker'            => new wp_bootstrap_navwalker())
						    );
						?>
						<span class="copyright">
							<?php echo sprintf(__("Copyright Tradeshift <sup class=\"reg-mark\">&reg;</sup> %s", "Tradeshift"), date( 'Y' )); ?>
						</span>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</footer>
		<!-- Modal view: Global lead generation form when Request Demo button is clicked on nav area -->
		<div class="modal fade" id="mktoDemo" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 id="myModalLabel"><?php _e("Request a Demo", "Tradeshift"); ?></h3>
		        <p class="lead"><?php _e("Start your journey with a free demo today.", "Tradeshift"); ?></p>
		      </div>
		      <div class="modal-body">
		        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_964"></form>
				<script type="text/javascript">
					MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 964, function(form){
						form.vals({"Marketing_Resource_Name__c":"Request Demo"});
						translateForm('#mktoForm_964');
					});
				</script>
		      </div>
		    </div>
		  </div>
		</div>
	<!-- Modal View of Sign Up -->
	<div class="modal modal-sign-up fade" id="SignUpModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel"><?php _e("Get started with a free account.", "Tradeshift"); ?></h3>
	      </div>
	      <div class="modal-body">
	      <form id="form-sign-up">
	      	<div class="sign-up-list">
				<input type="checkbox" id="buy-sign-up" class="sign-up-checkbox" name="buy-sign-up" value="https://go.tradeshift.com/register" />
				<label for="buy-sign-up"><span></span><?php _e("<b>Enterprise</b> – Talk to one of our experts and get a demo.", "Tradeshift"); ?></label>
			</div>
	      	<div class="sign-up-list">
				<input type="checkbox" id="sb-sign-up" class="sign-up-checkbox" name="sb-sign-up" value="https://go.tradeshift.com/register" />
				<label for="sb-sign-up"><span></span><?php _e("<b>Invoicing</b> – Send and receive invoices.", "Tradeshift"); ?></label>
			</div>
			<div class="sign-up-list">
				<input type="checkbox" id="go-sign-up" class="sign-up-checkbox" name="go-sign-up" value="https://go.tradeshift.com/register" />
				<label for="go-sign-up"><span></span><?php _e("<b>Tradeshift<sup>&reg;</sup> Go</b> – A virtual assistant for spend &amp; travel.", "Tradeshift"); ?></label>
			</div>
	      		<button id="btn-sign-up" class="btn btn-primary-cta-ent disabled" type="submit"><?php _e("Sign up", "Tradeshift"); ?></button>
	      	</form>
	      </div>
	    </div>
	  </div>
	</div>

	<?php if(!isset($form)): ?>
		<!-- Modal View of Marketo Forms2 -->
		<div class="modal fade" id="mktoModal2" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <script>
		        	MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 4476, function (form) {
						translateForm('#mktoForm_4476');
						// Returns true if all the fields in the form have non-blank values set.
						if(form.allFieldsFilled()) {
							var element = document.getElementById("mktoUserFirstName");
							if(element) {
								var name = element.dataset.mktouserfirstname;
							} else {
								name = "";
							}
							var text = t9n["Thanks $name, a team member will be in touch about setting up a demo."];
							text = text.replace("$name", name);
							$("#knownVisitor").addClass('mktoKnownVisitor').text(text);
							$("#mktoModal2").addClass("mktoKnownVisitor");
							$(".modal-header p.lead").hide();
						}
					});
		        </script>
		        <h3 id="knownVisitor"><?php _e("Great! We’ll contact you to schedule a demo.", "Tradeshift"); ?></h3>
		        <p class="lead"><?php _e("Please tell us about yourself.", "Tradeshift"); ?></p>
		      </div>
		      <div class="modal-body">

		        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form data-should-watch-and-translate id="mktoForm_4476"></form>
				<script type="text/javascript">


					MktoForms2.whenReady(function(form){

						//Add an onSuccess handler
						if(typeof formSubmitted === 'undefined') {
							form.onSuccess(function(values, followUpUrl){

								var $emailMkto = form.vals().Email;
								var $companyMkto = form.vals().Company;
								var $companyRFAnnualRev = form.vals().RF_SITE_AnnualRev__c;
								var $segmentAnonID = analytics.user().anonymousId();
								analytics.alias(analytics.user().anonymousId());
								analytics.identify (analytics.user().anonymousId(), {
									email: $emailMkto,
									company: {
										id: $segmentAnonID,
										name: $companyMkto,
										annual_revenue: $companyRFAnnualRev
									},
									companyName: $companyMkto
								});
								analytics.track('Drones RTP Form Submit', {
									formName: 'Email Field',
									email: $emailMkto,
									companyName: $companyMkto,
									annualRevenue: $companyRFAnnualRev
								});

								//return false to prevent the submission handler from taking the lead to the follow up url.
								return true;
							});
						}
					});
				</script>
				<div class="confirm-wrapper" id="confirmSubmit" style="display: none;"><p></p></div>
		      </div>
		    </div>
		  </div>
		<?php endif; ?>
	</div>

	<div class="modal fade" id="mkSuccessMsg" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header" style="padding-bottom: 0px">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel"><?php _e("Thank you!", "Tradeshift"); ?></h3>
	      </div>
	      <div class="modal-body" style="padding: 0 30px !important">
	      	<p class="lead"><?php _e("We’ll contact you to set up a time to talk.", "Tradeshift"); ?></p>
	      </div>
	    </div>
	  </div>
	</div>
		<?php wp_footer(); ?>

		<!--  -->

		<!-- Consolidate all tracking scripts | Loaded via inc-enqueue globally | Including GeoIP redirect -->
		<?php get_template_part( 'components/footer', 'tracking' ); ?>

		<?php get_template_part( 'components/footer', 'reachforce' ); ?>
	</body>
</html>
