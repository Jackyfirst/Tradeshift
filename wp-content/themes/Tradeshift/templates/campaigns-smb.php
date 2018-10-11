 <?php
/*
Template Name: Campaigns - SMB
*/
get_header('campaigns-smb'); ?>
	<!-- Main Content Starts -->
	<main class="main-content campaigns-smb">
		<!-- Hero Section -->
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class=" intro-text-cta">
							<?php
								if (have_posts()) : 
									while (have_posts()) : the_post();
								         the_content();
								   endwhile;
								endif;
								?>
							<button class="btn btn-primary-cta visible-xs" data-toggle="modal" data-target="#regModal">Notify and sign me up</button>
						</div>
						<div class="cta-form hidden-xs">
							<h3>Sign up to get notified when we launch</h3>
							<p>And get a free account now!</p>
							<form id="smbForm" method="post">
								<input type="hidden" name="from" value="NzU4MjQ3NDg=" />
								<input type="hidden" name="s_page" id="s_page" value="" />
								<input type="hidden" class="timezone" name="timezone" value="" />
								<div class="form-group">
									<input name="email" id="email" type="email" tabindex="1" required="required" placeholder="Email Address" data-default="Email"/>
								</div>
								<div class="form-group">
									<input name="companyName" id="companyName" type="text" tabindex="2" required="required" placeholder="Company Name"  />
								</div>
								<div class="form-group select-container">
									<select name="country" tabindex="3">
									<?php get_template_part( 'components/form', 'countries-dropdown' ); ?>
									</select>
								</div>
								<div class="form-group">
									<input type="submit" tabindex="4" disabled="disabled" value="Notify & sign me up" class="btn btn-primary-cta translate" />
								</div>
							</form>
							<p class="agree-tos">By signing up, you are indicating that you have read and agree to Tradeshift's <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="follow-up visible-xs">
			<div class="container">
				<div class="row">
					<div class="contents"><p>Use Tradeshift so you can get paid fast – and it's completely FREE.</p></div>
				</div>
			</div>
		</div>
		<div class="land-new-customers">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>It shouldn’t be so hard to land new customers. Right?</h2>
						<p>Marketing, if you’re a freelancer or small business, is costing you valuable time and money, both things you don’t have. So many sites to post to, blogs to write, calls to make. Meh. Somebody save you. Oh, that’s why we’re here. More than free, simple invoicing, Tradeshift for Small Business puts you on the fast-track to more sales and that freedom you’ve been craving. </p>
					</div>
				</div>
			</div>
		</div>
		<div class="right-place">
			<div class="container">
				<div class="row">
					<h2>Right place, right time marketing.</h2>
					<div class="contents">
						<div class="friend-request">
							<img src="<?php echo get_template_directory_uri(); ?>/img/campaigns/smb/icon-lead.png" />
							<p>Getting new leads is as easy as a friend request.</p>
						</div>
						<div class="build-brand">
							<img src="<?php echo get_template_directory_uri(); ?>/img/campaigns/smb/icon-shop.png" />
							<p>Build your brand with the power of a network and access to millions of people already looking for you.</p>
						</div>
						<div class="increase-sales">
							<img src="<?php echo get_template_directory_uri(); ?>/img/campaigns/smb/icon-chart.png" />
							<p>Increase sales with a powerful marketing platform and an online “storefront”.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="one-click">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>One click of a button...</h2>
						<p>Now, for you small business owners and freelancers, landing customers and building your business is easy—all done with a tap or click.</p>
						<?php if (is_mobile()): ?>
							<video id="videoDemoSMB" autobuffer loop autoplay poster="<?php echo get_template_directory_uri(); ?>/img/campaigns/smb/smb-video-poster-xs.jpg">
								<source src="<?php echo get_template_directory_uri(); ?>/videos/smb-products-demo.mp4" type="video/mp4" />
								<source src="<?php echo get_template_directory_uri(); ?>/videos/smb-products-demo.webm" type="video/webm" />
							</video>
						<?php else: ?>
							<video id="videoDemoSMB" autobuffer loop autoplay poster="<?php echo get_template_directory_uri(); ?>/img/campaigns/smb/smb-video-poster.jpg">
								<source src="<?php echo get_template_directory_uri(); ?>/videos/smb-products-demo.mp4" type="video/mp4" />
								<source src="<?php echo get_template_directory_uri(); ?>/videos/smb-products-demo.webm" type="video/webm" />
							</video>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
		<div class="sign-up-cta">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Try it, you’ll like it.</h2>
						<h3>Plus it’s free if you try it now, so where’s the risk? <br class="hidden-xs" />(Hint: there isn’t any.)</h3>
						<button class="btn btn-primary-cta" data-toggle="modal" data-target="#regModal">Start now for free</button>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Modal View of Registration -->
	<div class="modal modal-campaign-smb fade" id="regModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 id="myModalLabel">Sign up to get notified when we launch</h3>
					<p class="lead">And get a free account now!</p>
				</div>
				<div class="modal-body">
					<form id="smbFormModal" method="post">
						<input type="hidden" name="from" value="NzU4MjQ3NDg=" />
						<input type="hidden" name="s_page" id="s_page" value="" />
						<input type="hidden" class="timezone" name="timezone" value="" />
						<div class="form-group">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" required="required" tabindex="11"  placeholder="Email Address" data-default="Email"/>
						</div>
						<div class="form-group">
							<label for="companyName">Company</label>
							<input name="companyName" id="companyName" required="required" type="text" tabindex="12" placeholder="Company Name"  />
						</div>
						<div class="form-group">
							<label for="country">Country</label>
							<select name="country" tabindex="13">
							<?php get_template_part( 'components/form', 'countries-dropdown' ); ?>
							</select>
						</div>
						<div class="form-group">
							<input type="submit" disabled="disabled" tabindex="14" value="Notify & sign me up" class="btn btn-primary-cta" />
						</div>
					</form>
					<p class="agree-tos"><small>By signing up, you are indicating that you have read and agree to Tradeshift's <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</small></p>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function() {
		// for FormValidation client side | uses the FormValidation.io library
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
							},
							regexp: {
	                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
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
		}).on('success.field.fv', function(e, data) {
			if (!data.fv.isValid()) {
				data.fv.disableSubmitButtons(true);
			}
		}).on('success.form.fv', function(e, data) {
			e.preventDefault();
			var $form = $(e.target);
			$form.attr('action', getRegisterSubmitUrl());
			if (!analytics.initialize) {
				$form.data('formValidation').defaultSubmit();
			}
		}).on('err.form.fv', function(e, data) {
			var $form = $(e.target);
			$form.attr('action', '');
		});

		// Drip
		var _dcq = _dcq || [];
		var _dcs = _dcs || {};
		_dcs.account = '9746599';
		(function() {
			var dc = document.createElement('script');
			dc.type = 'text/javascript'; dc.async = true;
			dc.src = '//tag.getdrip.com/9746599.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(dc, s);
		})();
	});

	// IE9 Placeholder: https://github.com/mathiasbynens/jquery-placeholder
	// $('input').placeholder();

	// Grab the UTM parameters from the URL
	// stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
		var results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	function getRegisterSubmitUrl() {
		var url = 'https://go.tradeshift.com/register/register';
		url += params.length > 0 ? '?' + params.join('&') : '';
		return url;
	}
	var params = [];
	['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'].forEach(function(param) {
		var value = getParameterByName(param);
		if (!!value) {
			params.push([param, value].join('='));
		}
	});
	var modalPopupform = document.getElementById('smbFormModal');
	analytics.trackForm(modalPopupform, 'Passed', function() {
		return {
			'First UTM Medium': utm_medium,
			'First UTM Source': utm_source,
			'First UTM Campaign': utm_campaign
		};
	});
	var heroForm = document.getElementById('smbForm');
	analytics.trackForm(heroForm, 'Passed', function() {
		return {
			'First UTM Medium': utm_medium,
			'First UTM Source': utm_source,
			'First UTM Campaign': utm_campaign
		};
	});
	</script>
<?php get_footer(); ?>
