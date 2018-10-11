 <?php
/*
Template Name: Roles - Small Business Main Refined v2
*/
get_header('smb'); ?>
		<!-- Main Content Starts -->
		<main class="main-content smb-r">
			<!-- Hero Section -->
			<div class="hero free-invoice-template">
				<div class="container">
					<div class="row">
						<div class="intro-text-cta">
							<h1>The <em>free</em> online invoice template</h1>
							<h3>Start invoicing your clients in seconds.</h3>
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
									<input type="submit" tabindex="4" value="Sign Up Now!" class="btn btn-primary-cta translate" onclick="_gaq.push(['_trackEvent', 'Main CTA', 'Click', 'SMB - header button' ]);" />
								</div>
							</form>
							<p class="agree-tos">By signing up, you are indicating that you have read and agree to Tradeshift's <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="value">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="professional">
								<h4>Professional</h4>
								<ul><li>Choose from preffered payment methods like Paypal or bank deposit</li>
									<li>Access the online invoice template from any location &amp; any device</li>
									<li>Automatic calculations of sums and tax amounts</li>
								</ul>
							</div>
							<div class="easy">
								<h4>Easy</h4>
								<ul><li>Easily create professional PDF invoices</li>
									<li>Print your invoice template or send it directly online</li>
									<li>It's free! No fees or hidden costs</li>
								</ul>
							</div>
							<div class="free">
								<h4>100% Free</h4>
								<ul><li>Freelancers &amp; small businesses take advantage of free, unlimited creation &amp; sending of invoices</li>
									<li>Free invoice history reports to track your sales and income</li>
									<li>In addition, you can send quotes in your professional invoice template</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="good-for-business">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Why using Tradeshift as your online invoice template is good for your business</h2>
							<p>Simply, because it saves you time &amp; money! Sending invoices with Tradeshift will be faster than standard processes and much easier. Tradeshift works as a smart invoice template that can be used regardless of your industry or company size. Tradeshift is online and can be accessed from everywhere. It is available in various languages and is built to make invoicing as easy and professional as possible.</p>
							<p>All invoices you send with Tradeshift will be stored on our secure servers and can be exported to your computer any time. The invoice form remembers invoice lines, which saves you time if you ever invoice a service or product more than once.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="looking">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h3>Looking for a different plan?</h3>
							<p>Speak with a sales consultant.<br />Call 1-800-381-3585 or email <a href="mailto: sales@tradeshift.com">sales@tradeshift.com</a>.</p>
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
						<input type="submit" tabindex="4" value="Send your first invoice" class="btn btn-primary-cta" onclick="_gaq.push(['_trackEvent', 'Main CTA', 'Click', 'SMB - header button' ]);" />
					</div>
				</form>
				<p class="agree-tos"><small>By signing up, you are indicating that you have read and agree to Tradeshift's <a href="/terms-of-service" target="_blank">Terms of Service</a> and <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</small></p>
		      </div>
		    </div>
		  </div>
		</div>
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
			$("#smbForm").attr("action", function (){
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
		</script>

		
		<!-- Drip -->
		<script type="text/javascript">
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
		</script>

<?php get_footer(); ?>