<?php
/* Template Name: Seller Club
*/
get_header(); ?>
<main class="seller-club">
	<div class="hero">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="white-card">
						<h1><?php _e("Join Seller Club", "Tradeshift"); ?></h1>
						<p class="lead"><?php _e("Get paid faster, sell more and get stuff done.", "Tradeshift"); ?></p>
						<p><?php _e("What if you could get paid in two days&mdash;instead of 30? <i>And</i> market your business to Fortune 500 buyers? <i>And</i> get smart about paying less for critical services like shipping? Successful sellers do all these things to grow their business, and more. With Seller Club, you can too.", "Tradeshift"); ?></p>
						<a href="#plansPricing" class="btn"><?php _e("See plans and prices", "Tradeshift"); ?></a>
					</div>
				</div>
			</div>
		</div>
		<a href="#section-2"><div class="icon-down-arrow hidden-xs"><?php _e("Learn more", 'Tradeshift'); ?></div></a>
	</div>
	<div id="section-2" class="section-2">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="invoicing">
						<div class="rectangle green"></div>
						<h2><?php _e("Seller Club, powered by 1.5 million companies", "Tradeshift"); ?></h2>
						<p class="lead"><?php _e("Seller Club leverages the scale of the Tradeshift network to help sellers optimize cash flow, market their business and get more done. With the power of the network, you can get access to offers &mdash; like cheaper capital &mdash; that put more cash in the bank. You can market and sell to a global arena of big buyers. And you can invoice all your buyers on one system.", "Tradeshift"); ?></p>
						<div class="center-image-fixed">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seller-club/screenshot-v2.png" alt="Seller Club product screeenshot | Tradeshift" class="hidden-xs" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/seller-club/screenshot-xs.png" alt="Seller Club product screeenshot | Tradeshift" class="visible-xs" style="margin-left: 30%">
						</div>
						<h3><?php _e("With Seller Club exclusive services, you can:", "Tradeshift"); ?></h3>
						<div class="sellers-benefits">
							<div class="benefit-item">
								<p class="benefit"><?php _e("Relax with seamless Integration", "Tradeshift"); ?></p>
								<p class="description"><?php _e("Save time on accounts receivable processes to get paid faster. Integration services ensure Tradeshift invoices are automatically in sync with your own accounting system.", "Tradeshift"); ?></p>
							</div>
							<div class="benefit-item">
								<p class="benefit"><?php _e("Get priority support", "Tradeshift"); ?></p>
								<p class="description"><?php _e("Take pressure off IT with dedicated support that understands AR and understands you. Contact us by phone, email or chat&mdash;we’re ready to help.", "Tradeshift"); ?></p>
							</div>
							<div class="benefit-item">
								<p class="benefit"><?php _e("Access cheaper capital", "Tradeshift"); ?></p>
								<p class="description"><?php _e("Improve your cash flow with exclusive discounts on financial services, including supplier and invoice financing.", "Tradeshift"); ?></p>
							</div>
							<div class="benefit-item">
								<p class="benefit"><?php _e("Save with exclusive club discounts", "Tradeshift"); ?></p>
								<p class="description"><?php _e("Take advantage of the buying power of the Tradeshift network. Lower your costs with exclusive club discounts that include shipping, credit services and more.", "Tradeshift"); ?></p>
							</div>
							<div class="benefit-item">
								<p class="benefit"><?php _e("Build your market presence", "Tradeshift"); ?></p>
								<p class="description"><?php _e("Sell more with exclusive opportunities to market your business, including profile badges, buyer events and special offers.", "Tradeshift"); ?></p>
							</div>
							<div class="benefit-item">
								<p class="benefit"><?php _e("Start free", "Tradeshift"); ?></p>
								<p class="description"><?php _e("Send an unlimited number of invoices through our online user interface free of charge. Then simply upgrade when you are ready to access everything that the Seller Club has to offer.", "Tradeshift"); ?></p>
							</div>
						</div>
					</div>
					<div class="electronic-invoicing">
						<div class="rectangle purple"></div>
						<h2><?php _e("Connect to any ERP solution", "Tradeshift"); ?></h2>
						<p class="lead"><?php _e("Deliver electronic invoices and other business documents to your business partners no matter what accounting or ERP system you use. Simply upload your invoices, connect to your accounting package and transfer your files via <a href=\"http://integrate.tradeshift.com/\" target=\"_blank\" title=\"Integrating with Tradeshift as a supplier\">SFTP or our API</a>!", "Tradeshift"); ?></p>
						<!-- SVG ANIMATION -->
						<?php get_template_part( 'includes/svg', 'integration' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		if (ICL_LANGUAGE_CODE == 'zh-hans') {
			require('./wp-content/themes/Tradeshift/templates/seller-club-table-zh-hans.php');
		} else {
			require('./wp-content/themes/Tradeshift/templates/seller-club-table.php');
		}
	?>

	<div class="prefooter">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h4><?php _e("Talk to one of our experts today."); ?></h4>
					<button type="button" class="btn btn-cta" id="initialEmailFormField" class="cta" data-toggle="modal" data-target="#mktoModal1"><?php _e("Contact us", 'Tradeshift'); ?></button>
				</div>
			</div>
		</div>
	</div>
	<div class="faq">
		<div class="row">
			<p><?php _e("For more information, check out our <a href=\"/seller-club-faq/\">FAQ site <i class=\"fa fa-arrow-circle-right\"></i></a>", "Tradeshift"); ?></p>
		</div>
	</div>
</main>
<!-- Modal View of Marketo Forms2 -->
<div class="modal fade" id="mktoModal1" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 id="myModalLabel"><?php _e("Ready to explore your options?", "Tradeshift"); ?></h3>
				<p class="lead"><?php _e("We’ll contact you to set up a time to talk.", "Tradeshift"); ?></p>
			</div>
			<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_3696"></form>
				<script type="text/javascript">// <![CDATA[
					MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 3696);
					// ]]>
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
	</div>
	<script type="text/javascript">
	var vm = new Vue({
		el: '.vue-plans-pricing',
		data() {
			return {
				pricing: {
					free: '$0',
					silver: '$249',
					gold: '$699',
					platinum: '$2499',
					platinum_x: '*',
					
				},
				coface: {
					silver: '$150',
					gold: '$300',
					platinum: '$900',
					platinum_x: '$5,000',
					
				}
			};
		},
	})
	var updatePrincing = (function() {
		var onSuccess = function(geoipResponse) {
			var continentCode = geoipResponse.continent.code.toUpperCase();
			var countryCode = geoipResponse.registered_country.iso_code;
			if (countryCode == "GB") {
				vm.pricing.free = "£0";
				vm.pricing.silver = "£179";
				vm.pricing.gold = "£499";
				vm.pricing.platinum = "£1,799";
				vm.coface.gold = "£220";
				vm.coface.silver = "£110";
				vm.coface.platinum = "£660";
				vm.coface.platinum_x = "£3,550";

			} else if(countryCode == "NOR") {
				vm.pricing.free = "0 kr";
				vm.pricing.silver = "1,999 kr";
				vm.pricing.gold = "5,699 kr";
				vm.pricing.platinum = "19,999 kr";
				vm.coface.silver = "Nok 1200";
				vm.coface.gold = "Nok 2400";
				vm.coface.platinum = "Nok 7200";
				vm.coface.platinum_x = "Nok 40000";	

			} else if(continentCode == "EU" || "<?php echo ICL_LANGUAGE_CODE; ?>" == "fr" || "<?php echo ICL_LANGUAGE_CODE; ?>" == "de") {
				vm.pricing.free = "€0";
				vm.pricing.silver = "€199";
				vm.pricing.gold = "€569";
				vm.pricing.platinum = "€1,999";
				vm.coface.silver = "€125";
				vm.coface.gold = "€250";
				vm.coface.platinum = "€750";
				vm.coface.platinum_x = "€4,000";
			}
		};
		return function(){geoip2.country( onSuccess);};
	}());
	updatePrincing();
	
	new Vue({
		el: '#app',
		data() {
			return {
				dashOffset: '20',
				speed: 50, // unit is px/s
				lastFrame: 0
			};
		},
		methods: {
			update(time) {
				const elapsed = (time - this.lastFrame) / 1000; // elapsed in seconds
				this.lastFrame = time;
				const advance = this.speed * elapsed;
				if ($(window).width() < 992) {
					this.dashOffset = String((Number(this.dashOffset) + advance) % 20);
				} else {
					this.dashOffset = String((Number(this.dashOffset) - advance) % 20);
				}
				window.requestAnimationFrame(this.update.bind(this));
			}
		},
		
		created() {
			window.requestAnimationFrame(this.update.bind(this));
		}
	});
	
	$(document).ready(function(){
		$('.hero a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
<?php get_footer(); ?>
