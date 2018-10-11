 <?php
/*
Template Name: Roles - Marketplace Buyer PPC
*/
get_header('smb'); ?>
<style type="text/css">
	.main-nav-list {
		display: none;
	}
	.email-link {
		color: white;
		cursor: pointer;
	}
	.email-link:hover {
		text-decoration: underline;
	}
	@media (max-width: 767px) {
		#nav-trigger {
			display: none;
		}
		.sitewide-nav .navbar-brand {
			margin-left: 11px;
		}
	}
</style>
		<!-- Main Content Starts -->
		<main class="main-content smb-page marketplace-buyer">
			<!-- Hero Section -->
			<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			<div id="randomize-bg-hero" class="hero simple-invoicing designer" style="background: url('<?php echo $hero['0'];?>') no-repeat 45% top !important; background-size: cover !important;">
				<div class="container">
					<div class="row intro-text-cta-form">
						<div class="intro-text-cta visible-xs" style="background: url('<?php echo $hero['0'];?>') no-repeat 45% top !important; background-size: cover !important;">
							<h1><?php the_title() ?></h1>
							<h3>Shop now and save more on all your printing supplies</h3>
							<button class="btn btn-primary-cta visible-xs" data-toggle="modal" data-target="#regModal">Buy Now</button>
						</div>
						<div class="intro-text-cta hidden-xs">
							<h1><?php the_title() ?></h1>
							<h3>Shop now and save more on all your printing supplies</h3>
							<button class="btn btn-primary-cta visible-xs" data-toggle="modal" data-target="#regModal">Buy Now</button>
						</div>
						<div class="cta-form hidden-xs">
							<h3>Shop smarter and save more.</h3>
							<form id="smbForm" action="https://go.tradeshift.com/register/register" method="post">
								<input type="hidden" name="from" value="NzU4MjQ3NDg=" />
								<input type="hidden" name="s_page" id="s_page" value="" />
								<input type="hidden" class="timezone" name="timezone" value="" />
								<div class="form-group">
									<input name="email" id="email" type="text" tabindex="1"  placeholder="Email Address" data-default="Email"/>
								</div>
								<div class="form-group">
									<input name="companyName" id="companyName" type="text" tabindex="2" placeholder="Company Name"  />
								</div>
								<div class="form-group">
									<select name="country" tabindex="3">
									<?php get_template_part( 'components/form', 'countries-dropdown' ); ?>
									</select>
								</div>
								<div class="form-group">
									<input type="submit" tabindex="4" value="Buy Now" class="btn btn-primary-cta translate" />
								</div>
							</form>
							<p class="agree-tos">By signing up, you are indicating that you have read and agree to Tradeshift's <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</p>
						</div>
						<div class="icon-smb visible-xs">
							<img src="<?php echo get_template_directory_uri(); ?>/img/smb/icon-smb.png" />
						</div>
					</div>
					<div class="row visible-xs">
						<div class="followup"><p>Use Tradeshift so you can get paid fast – and it's completely FREE.</p></div>
					</div>
				</div>
				<div class="arrow hidden-xs"></div>
			</div>
			<div class="invoicing">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>The largest online marketplace</h2>
							<p>The Tradeshift Marketplace, gives you one-stop shopping with a consumer-like experience for your business buying. Product suppliers maintain their catalogs and content so you have always accurate and up-to-date pricing.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="value">
				<div class="container">
					<div class="row">
						<div class="free-invoices">
							<div class="icon-clock"></div>
							<h4>Always get the right product at the best price</h4>
							<p>Marketplace search gets you the right products you need faster. With easier price comparisons, smart product recommendations, and intelligent search you get better pricing visibility, giving you more opportunities for savings.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="no-upsell">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Streamline your buying process</h2>
							<p>A modern, real-time, chat tool allows you to collaborate with your suppliers. You improve efficiency and buy with confidence—get the right order the first time, and quickly solve disputes. </p>
						</div>
					</div>
				</div>
			</div>
			<div id="randomize-bg-footer" class="sign-up designer">
				<div class="container">
					<div class="row">
						<h2>See how Tradeshift can help you shop smarter and save more.</h2>
						<p>Marketplace makes it easy to increase savings, discover and connect with potential suppliers, collaborate, and get what you need faster.</p>
						<button class="btn btn-primary-cta" data-toggle="modal" data-target="#regModal">Start Now</button>
						<p>Email us at <a class="email-link" href="mailto:marketplaceinfo@tradeshift.com">marketplaceinfo@tradeshift.com</a></p>
					</div>
				</div>
				<div class="arrow"></div>
			</div>
			<div class="product-video" style="background: #fff;padding: 44px 0 66px 0">
				<div class="container">
					<div class="row">
						<div class="contents">
							<img src="<?php echo get_template_directory_uri(); ?>/img/smb/marketplace__gif-1.gif" class="img-responsive" />
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Modal View of Registration -->
		<div class="modal modal-smb fade" id="regModal" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 id="myModalLabel">Create a free account now</h3>
		        <p class="lead">Get started in 30 seconds.</p>
		      </div>
		      <div class="modal-body">
		      	<form id="smbFormModal" action="https://go.tradeshift.com/register/register" method="post">
					<input type="hidden" name="from" value="NzU4MjQ3NDg=" />
					<input type="hidden" name="s_page" id="s_page" value="" />
					<input type="hidden" class="timezone" name="timezone" value="" />
					<div class="form-group">
						<label for="email">Email</label>
						<input name="email" id="email" type="text" tabindex="1"  placeholder="Email Address" data-default="Email"/>
					</div>
					<div class="form-group">
						<label for="companyName">Company</label>
						<input name="companyName" id="companyName" type="text" tabindex="2" placeholder="Company Name"  />
					</div>
					<div class="form-group">
						<label for="country">Country</label>
						<select name="country" tabindex="3">
						<?php get_template_part( 'components/form', 'countries-dropdown' ); ?>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" tabindex="4" value="Send your first invoice" class="btn btn-primary-cta" />
					</div>
				</form>
				<p class="agree-tos"><small>By signing up, you are indicating that you have read and agree to Tradeshift's <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</small></p>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Grab UTM Parameters and pass it to the Form Action -->
		<script>
			// Grab the UTM parameters from the URL
			// stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
			function getParameterByName(name) {
				name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
				var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
				results = regex.exec(location.search);
				return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			}

			var params = [];
			['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'].forEach(function(param) {
			    var value = getParameterByName(param);
			    if (!!value) {
			        params.push([param, value].join('='));
			    }
			});
			$("#smbForm, #smbFormModal").attr("action", function (){
			    var url = 'https://go.tradeshift.com/register/register';
			    url += params.length > 0 ? '?' + params.join('&') : '';
			    return url;
			});

			var heroForm = document.getElementById('smbForm');
			analytics.trackForm(heroForm, 'Passed', function() {
				return {"First UTM Medium": utm_medium,
						"First UTM Source": utm_source,
						"First UTM Campaign": utm_campaign}
			});

			var modalPopupform = document.getElementById('smbFormModal');
			analytics.trackForm(modalPopupform, 'Passed', function() {
				return {"First UTM Medium": utm_medium,
						"First UTM Source": utm_source,
						"First UTM Campaign": utm_campaign}
			});
		</script>
		<!-- Script below is used for FormValidation client side | uses the FormValidation.io library -->
		<script>
		$(document).ready(function() {
		    $('#smbForm, #smbFormModal').formValidation({
		        framework: 'bootstrap',
		        icon: {
		            valid: 'fa fa-2x fa-check',
		            invalid: 'fa fa-2x fa-times',
		            validating: 'fa fa-2x fa-refresh'
		        },
		        fields: {
		            email: {
			            validators: {
			                notEmpty: {
			                    message: 'Your email address is required'
			                },
			                emailAddress: {
			                    message: 'Please enter a valid email address'
			                }
			            }
			        },
		            companyName: {
		                validators: {
		                    notEmpty: {
		                        message: 'A company name is required'
		                    }
		                }
		            }
		        }
		    });
		});
		</script>
		<!-- Let's call the Quote Carousel plugin shall we -->
		<script>
		$(document).ready(function() {
		  $("#quote-carousel").owlCarousel({
		  	items : 3,
		  	autoPlay : 4000,
		    stopOnHover: true,
		  	itemsDesktop : [2540,1],
		    itemsDesktopSmall : [1199,1],
		    itemsTablet: [768,1],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    lazyLoad : false,
		    lazyFollow : true,
		    lazyEffect : "fade",
		  });
		});
		</script>
		<!-- Let's toggleClasses on sections needing randomized background image synced on two areas -->
		<script>
		$(document).ready(function() {
			var randomNumber = Math.floor((Math.random() * 1000) + 1);
			if ( randomNumber % 2 == 1 ) {
					$('#randomize-bg-hero, #randomize-bg-footer').addClass('baker');
			} else {
				$('#randomize-bg-hero, #randomize-bg-footer').addClass('designer');
			};
		})
		</script>

<?php get_footer(); ?>