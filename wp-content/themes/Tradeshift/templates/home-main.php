 <?php
/*
Template Name: Home Page - Main Ts.com
*/
get_header('main-only'); ?>
	<main class="main-content home-main-only">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="i-am">I am looking for</div>
						<div class="select select--white">
							<span class="placeholder hidden-xs hidden-sm">click to see options</span>
							<span class="placeholder visible-xs visible-sm">press to see options</span>
							<ul>
								<li><a href="/roles/sb/small-business-free-invoicing/" class="select-links">free invoicing for small business</a></li>
								<li><a href="/go" class="select-links">spend management for SMBs</a></li>
								<li><a href="/enterprise/solutions/buy/" class="select-links">e-procurement for my enterprise</a></li>
								<li><a href="/enterprise/solutions/pay/" class="select-links">AP automation for my enterprise</a></li>
								<li><a href="/enterprise/solutions/risk/" class="select-links">supplier management for my enterprise</a></li>
								<li><a href="/enterprise/roles/invited-supplier/" class="select-links">invoicing (I was invited by my customer)</a></li>
								<li><a href="/partners" class="select-links">how to become a partner</a></li>
								<li><a href="http://apps.tradeshift.com" class="select-links">how to build an app</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="markets">
			<div class="container">
				<div class="row">
					<div class="contents">
						<a id="ts-enterprise" class="contents-wrapper enterprise">
							<h2>Enterprise</h2>
							<p>Innovate the way you buy, pay, and collaborate with your suppliers. </p>
							<button id="ts-enterprise-button" class="btn btn-primary-cta-ent">Get Started</button>
						</a>
						<a id="ts-go" class="contents-wrapper go">
							<h2>Tradeshift Go</h2>
							<p>Get spend visibility and control for your growing business.</p>
							<button id="ts-go-button" class="btn btn-primary-cta-go">Learn More</button>
						</a>
						<a id="ts-apps" class="contents-wrapper apps">
							<h2>Apps</h2>
							<p>Unleash the power of Tradeshift Apps. Plug and play, or create your own.</p>
							<button id="ts-apps-button" class="btn btn-primary-cta-apps">Check it out</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Modal View of Sign Up -->
	<div class="modal modal-sign-up fade" id="SignUpModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel">Get started with a free account.</h3>
	      </div>
	      <div class="modal-body">
	      <form id="form-sign-up">
	      	<div class="sign-up-list">
				<input type="checkbox" id="sb-sign-up" class="sign-up-checkbox" name="sb-sign-up" value="https://go.tradeshift.com/register" />
				<label for="sb-sign-up"><span></span>Free Invoicing – Send and receive invoices for free.</label>
			</div>
			<div class="sign-up-list">
				<input type="checkbox" id="go-sign-up" class="sign-up-checkbox" name="go-sign-up" value="https://tradeshift.com/go" />
				<label for="go-sign-up"><span></span>Tradeshift<sup>&reg;</sup> Go – A virtual assistant for spend &amp; travel.</label>
			</div>
	      		<button id="btn-sign-up" class="btn btn-primary-cta-ent disabled" type="submit">Sign up</button>
	      		<p class="sub-enterprise">Looking for enterprise procure-to-pay? <a href="https://tradeshift.com/enterprise/" onclick="ga('send', 'event', 'Main Home Page Menu', 'Sign Up - Modal View', 'Enterprise Link - https://tradeshift.com/enterprise/')">Click here</a>.</p>
	      	</form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- JS to customize select options -->
	<script>
		$('.select').on('click','.placeholder',function() {
			var parent = $(this).closest('.select');
			if ( ! parent.hasClass('is-open')){
				parent.addClass('is-open');
				$('.select.is-open').not(parent).removeClass('is-open');
				} else {
					parent.removeClass('is-open');
				}
			}).on('click','ul>li',function() {
				var parent = $(this).closest('.select');
				// parent.removeClass('is-open').find('.placeholder').text( $(this).text() );
			});
		$('.select--white').on('mouseleave', function() {
			$('.select--white').removeClass('is-open');
		});
	</script>
<?php get_footer('main-only'); ?>