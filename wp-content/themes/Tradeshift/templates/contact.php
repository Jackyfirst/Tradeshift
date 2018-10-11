<?php
/*
Template Name: Contact Page
*/
get_header(); ?>
	<!-- Main Content Starts -->
	<main class="main-content contact-us-page">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1>Welcome To Our Home</h1>
						<h3>Questions or comments?<br />
						Don't hesitate to reach out.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-form">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Drop us a line</h2>
						<?php  echo do_shortcode('[contact-form-7 id="84" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="offices-maps-photos">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Global Offices, Open Doors</h2>
						<p>With offices around the world, we make it a priority to be close to our users.</p>
						<div class="offices-wrapper">
							<div class="offices-cities">
								<a href="#" class="offices-city sfo active">San Francisco</a>
								<a href="#" class="offices-city offices-ny">New York</a>
								<a href="#" class="offices-city offices-cph">Copenhagen</a>
								<a href="#" class="offices-city offices-ldn">London</a>
								<a href="#" class="offices-city offices-par">Paris</a>
								<a href="#" class="offices-city offices-chi">Suzhou</a>
								<a href="#" class="offices-city offices-jap">Tokyo</a>
								<a href="#" class="offices-city offices-mun">Munich</a>
							</div>
							<div class="offices_maps offices_sfo">
								<div class="col-xs-12 col-sm-6" >
									<a href="https://goo.gl/maps/bN0Dq" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=612+Howard+St+%23400,+San+Francisco,+CA+94105&zoom=15&size=457x286&markers=blue%7Clabel:S%7C37.786624,-122.398883" /></a>
								</div>
								<div class="col-xs-12 col-sm-6" >
									<img src="<?php echo get_template_directory_uri(); ?>/img/contact/sfo.png" />
								</div>
							</div>
							<div class="offices_maps offices_ny non-active">
								<div class="col-xs-12 col-sm-6" >
									<a href="https://goo.gl/maps/EhBf8Jg3y4B2" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=21+West+46th+Street,+New+York,+NY+10036&zoom=15&size=457x286&markers=blue%7Clabel:S%7C40.7566858,-73.9822061" /></a>
								</div>
								<div class="col-xs-12 col-sm-6" >
									<img src="<?php echo get_template_directory_uri(); ?>/img/contact/ny.jpg" />
								</div>
							</div>
							<div class="offices_maps offices_cph non-active">
								<div class="col-xs-12 col-sm-6" >
									<a href="https://goo.gl/maps/ayzJh" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=Landemærket+10,+1119+København+K,+Denmark&zoom=15&size=457x286&markers=blue%7Clabel:S%7C55.68236,12.57735" /></a>
								</div>
								<div class="col-xs-12 col-sm-6" >
									<img src="<?php echo get_template_directory_uri(); ?>/img/contact/CPH2.JPG" />
								</div>
							</div>
							<div class="offices_maps offices_ldn non-active">
								<div class="col-xs-12 col-sm-6" >
									<a href="https://goo.gl/maps/dB3KtcResEu" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=113+Shoreditch+High+St,+London+E1+6JN,+UK/@51.5263059,-0.0780326,17z/&zoom=15&size=457x286&maptype=roadmap&format=png&visual_refresh=true&markers=blue%7Clabel:1%7C113+Shoreditch+High+St,+London+E1+6JE,+UK/@51.5263059,-0.0780326,17z/" /></a>
								</div>
								<div class="col-xs-12 col-sm-6" >
									<img src="<?php echo get_template_directory_uri(); ?>/img/contact/London.JPG" />
								</div>
							</div>
							<div class="offices_maps offices_par non-active">
								<div class="col-xs-12 col-sm-6" >
									<a href="https://goo.gl/maps/JqUuN" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=33+Rue+Galilée,+75116+Paris,+France&zoom=15&size=456x286&markers=blue%7Clabel:S%7C48.869465,2.295504" /></a>
								</div>
								<div class="col-xs-12 col-sm-6" >
									<img src="<?php echo get_template_directory_uri(); ?>/img/contact/paris.jpg" />
								</div>
							</div>
							<div class="offices_maps offices_chi non-active">
								<div class="col-xs-12 col-sm-6" >
									<a href="https://goo.gl/maps/HCSsR" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=Chong+Wen+Lu,+Wuzhong+Qu,+Suzhou+Shi,+Jiangsu+Sheng,+China,+215123&zoom=15&size=456x286&markers=blue%7Clabel:S%7C31.265816,120.732753" /></a>
								</div>
								<div class="col-xs-12 col-sm-6" >
									<img src="<?php echo get_template_directory_uri(); ?>/img/contact/China.JPG" />
								</div>
							</div>
							<div class="offices_maps offices_jap non-active">
								<div class="col-xs-12 col-sm-6" >
									<a href="https://goo.gl/maps/otsRynwe8YD2" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=Japan,+〒150-0011+Tōkyō-to,+Shibuya-ku,+Higashi,+3+Chome−22−14+渋谷松原ビル&zoom=13&scale=false&size=600x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:1%7CJapan,+〒150-0011+Tōkyō-to,+Shibuya-ku,+Higashi,+3+Chome−22−14+渋谷松原ビル" /></a>
								</div>
								<div class="col-xs-12 col-sm-6" >
									<img src="<?php echo get_template_directory_uri(); ?>/img/contact/japa.jpg" />
								</div>
							</div>
							<div class="offices_maps offices_mun non-active">
								<div class="col-xs-12 col-sm-6" >
									<a href="https://goo.gl/maps/GZVXy" target="_blank"><img src="https://maps.googleapis.com/maps/api/staticmap?center=Terminalstraße+Mitte+18,+Munich+International+Airport+(MUC),+85445+Oberding,+Germany&zoom=13&size=456x286&markers=blue%7Clabel:S%7C48.3539343,11.7872616,17" /></a>
								</div>
								<div class="col-xs-12 col-sm-6" >
									<img src="<?php echo get_template_directory_uri(); ?>/img/contact/munich.jpg" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="offices-locations">
			<div class="container">
				<div class="row">
					<div itemscope itemtype=”http://schema.org/Organization” class="contents">
						<h2>Global Offices,<br class="visible-xs" /> Open Doors</h2>
						<p>With offices around the world, we make it a priority to be close to our users.</p>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="office-addresses">
							<h3>San Francisco</h3>
							<p><span itemprop=”name”>Tradeshift Inc.</span><br/>
								<span itemprop=”streetAddress”>612 Howard Street, Suite 100</span><br/>
								<span itemprop=”addressLocality”>San Francisco</span>, <span itemprop=”addressRegion”>CA</span> <span itemprop=”postalCode”>94105</span><br/>
								<span itemprop=”addressCountry”>USA</span>  <br />
								<a href="https://goo.gl/maps/bN0Dq" target="_blank">View on Google Maps</a></p>
						</div>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="office-addresses">
							<h3>New York</h3>
							<p><span itemprop=”name”>Tradeshift Inc.</span><br/>
								<span itemprop=”streetAddress”>21 West 46th Street, Suite 1004</span><br/>
								<span itemprop=”addressLocality”>New York</span>, <span itemprop=”addressRegion”>NY</span> <span itemprop=”postalCode”>10036</span><br/>
								<span itemprop=”addressCountry”>USA</span>  <br />
								<a href="https://goo.gl/maps/fUyUP5j5xWF2" target="_blank">View on Google Maps</a></p>
						</div>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="office-addresses">
							<h3>Copenhagen</h3>
							<p><span itemprop=”name”>Tradeshift ApS</span><br/>
								<span itemprop=”streetAddress”>Landemærket 10, 1st Floor</span><br/>
								<span itemprop=”postalCode”>1119</span> <span itemprop=”addressLocality”>Copenhagen</span><br/>
								<span itemprop=”addressCountry”>Denmark</span><br />
								<a href="https://goo.gl/maps/ayzJh" target="_blank">View on Google Maps</a></p>
						</div>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="office-addresses">
							<h3>London</h3>
							<p><span itemprop=”name”>Tradeshift</span><br />
								<span itemprop=”streetAddress”>113 Shoreditch High Street</span><br />
								<span itemprop=”addressLocality”>London</span> <span itemprop=”postalCode”>E1 6JN</span><br />
								<span itemprop=”addressCountry”>United Kingdom</span><br />
								<a href="https://goo.gl/maps/dB3KtcResEu" target="_blank">View on Google Maps</a></p>
						</div>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="office-addresses">
							<h3>Paris</h3>
							<p><span itemprop=”name”>Tradeshift SAS</span><br/>
								<span itemprop=”streetAddress”>33 Rue Galilée</span><br/>
								<span itemprop=”postalCode”>75116</span> <span itemprop=”addressLocality”>Paris</span><br/>
								<span itemprop=”addressCountry”>France</span><br />
								<a href="https://goo.gl/maps/JqUuN" target="_blank">View on Google Maps</a></p>
						</div>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="office-addresses">
							<h3>Suzhou</h3>
							<p><span itemprop=”name”>Tradeshift (Suzhou) Software Ltd.</span><br/>
							<span itemprop=”streetAddress”>4-A5F SIS Park   <br/>
								No.328 Xinghu Street, SIP,  </span><br/>
								<span itemprop=”addressLocality”>Suzhou</span> <span itemprop=”postalCode”>215000</span><br/>
								<span itemprop=”addressCountry”>China</span><br />
								<a href="https://goo.gl/maps/HCSsR" target="_blank">View on Google Maps</a></p>
						</div>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="office-addresses">
							<h3>Tokyo</h3>
							<p><span itemprop=”name”>Tradeshift Japan, Inc</span><br/>
								<span itemprop=”streetAddress”>3 Chome−22−14 渋谷松原ビル <br/>
							Shibuya-ku, Higashi  </span> <br/>
							<span itemprop=”addressLocality”>Tokyo</span> <span itemprop=”postalCode”>150-0011</span><br/>
							<span itemprop=”addressCountry”>Japan</span><br />
							<a href="https://goo.gl/maps/otsRynwe8YD2" target="_blank">View on Google Maps</a></p>
						</div>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="office-addresses">
							<h3>Munich</h3>
							<p><span itemprop=”name”>Tradeshift Network Ltd</span><br/>
								<span itemprop=”streetAddress”>Terminalstraße Mitte 18</span>  <br/>
								<span itemprop=”addressLocality”>München-Flughafen</span>  <br/>
								<span itemprop=”postalCode”>85356</span><br/>
							<span itemprop=”addressCountry”>Germany</span><br />
							<a href="https://goo.gl/maps/0c5Oe" target="_blank">View on Google Maps</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>