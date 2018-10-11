 <?php
/*
Template Name: Contact Page v2
*/
get_header(); ?>
	<style>
		@media (min-width: 992px) {
			.contact-us-pagev2 .contact-form .wpcf7-form .wpcf7-list-item {
	    		width: 14.2% !important;
	    	}
    	}
	</style>
	<main class="main-content contact-us-pagev2">
		<!-- Hero Section -->
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1><?php _e("Contact us", 'Tradeshift'); ?></h1>
						<h3><?php _e("Don't hesitate to reach out.", 'Tradeshift'); ?></h3>
					</div>
				</div>
			</div>
			<div class="arrow"></div>
		</div>
		<div class="contact-form">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Drop us a line", 'Tradeshift'); ?></h2>
						<h4><?php _e("My reasons for contacting you:", 'Tradeshift'); ?></h4>
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php else: ?>
						<div>
							<h2><?php _e( 'Sorry, nothing to display.', 'Tradeshift'); ?></h2>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="offices">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2><?php _e("Global offices, open doors", 'Tradeshift'); ?></h2>
						<h3><?php _e("With offices around the world, we make it a priority to be close to our users.", 'Tradeshift'); ?></h3>
					<?php if (is_mobile()): ?>
						<div id="sf-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses sf">
							<h4><?php _e("San Francisco", 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/bN0Dq" target="_blank" itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">612 Howard Street, Suite 100</span><br />
									<span itemprop="addressLocality">San Francisco</span>, <span itemprop="addressRegion">CA</span> <span itemprop="postalCode">94105</span>, <span itemprop="addressCountry">USA</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="ny-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses ny">
							<h4><?php _e("New York", 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/jWiTQhHZvXN2" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">1 Little West 12th Street</span><br />
									<span itemprop="addressLocality">New York</span>, <span itemprop="addressRegion">NY</span> <span itemprop="postalCode">10014</span>, <span itemprop="addressCountry">USA</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="cph-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses cph">
							<h4><?php _e('Copenhagen', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/ayzJh" target="_blank" itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">Landemærket 10, 1st Floor</span><br />
									<span itemprop="postalCode">1119</span> <span itemprop="addressLocality">Copenhagen</span>, <span itemprop="addressCountry">Denmark</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="london-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses london">
							<h4><?php _e('London', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/yyXamcjG3pJ2" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a><br />
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">Irongate House<br>22-30 Dukes Place</span><br />
									<span itemprop="addressLocality">London</span> <span itemprop="postalCode">EC3A 7LP</span>, <span itemprop="addressCountry">United Kingdom</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="paris-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses paris">
							<h4><?php _e('Paris', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/NWdC2q21hwj" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">54-56 avenue Hoche</span><br />
									<span itemprop="postalCode">75008</span> <span itemprop="addressLocality">Paris</span>, <span itemprop="addressCountry">France</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="suzhou-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses suzhou">
							<h4><?php _e('Suzhou', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/HCSsR" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">4-A5F SIS Park, <br class="hidden-xs" />No.328 Xinghu Street,</span> <br />
									<span itemprop="addressLocality">SIP, Suzhou</span> <span itemprop="postalCode">215000</span>, <span itemprop="addressCountry">China</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="tokyo-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses tokyo">
							<h4><?php _e('Tokyo', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/otsRynwe8YD2" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">3 Chome−22−14 渋谷松原ビル Shibuya-ku,</span> <br /> Higashi, <span itemprop="addressLocality">Tokyo</span> <span itemprop="postalCode">150-0011</span>, <span itemprop="addressCountry">Japan</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="munich-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses munich">
							<h4><?php _e('Munich', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/0c5Oe" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">Terminalstraße Mitte 18</span>  <br />
									<span itemprop="addressLocality">München-Flughafen</span>  <br class="hidden-xs" />
									<span itemprop="postalCode">85356</span>, <span itemprop="addressCountry">Germany</span><br>
								</div>
							', 'Tradeshift'); ?>
						</div>

						<div id="sydney-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses sydney">
							<h4><?php _e('Sydney', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/ZhxPpReqm8w" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">3 Spring Street</span><br />
									<span itemprop="addressLocality">Sydney</span>, <span itemprop="addressRegion">NSW</span> <span itemprop="postalCode">2000</span>, <span itemprop="addressCountry">Australia</span><br />
									<span itemprop="telephone">Tel: (02) 8249 4797</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="romania-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses romania">
							<h4><?php _e('Bucharest', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/pwXz1WrAKV82" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">Building C, 3rd floor<br>Green Court, 4 Gara Herastrau Street,</span><br />
									<span itemprop="addressLocality">Sector 2</span>, <span itemprop="addressRegion"></span> <span itemprop="postalCode">020334</span>, <span itemprop="addressCountry">Bucharest, Romania</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="sweden-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses sweden">
							<h4><?php _e('Stockholm', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/NnFzoNJgrUN2" target="_blank" itemprop="name"><?php _e("Tradeshift", "Tradeshift"); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">Drottninggatan 78 3 tr<br>111 36 Stockholm</span>,
									<span itemprop="addressCountry">Sweden</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="oslo-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses oslo">
							<h4><?php _e('Oslo', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/sURrxdQSBAy" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">Henrik Ibsens gate 90<br>0255 Oslo</span>,
									<span itemprop="addressCountry">Norway</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="frankfurt-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses frankfurt">
							<h4><?php _e("Frankfurt"); ?></h4>
							<a href="https://goo.gl/maps/uT67rzwGeFS2" target="_blank" itemprop="name"><?php _e('Tradeshift'); ?></a>
							<?php _e('
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">FinTech Community Frankfurt GmbH<br>Platz der Einheit 2, 60327 Frankfurt am Main</span>,
									<span itemprop="addressCountry">Germany</span>
								</div>
							', 'Tradeshift'); ?>
						</div>
						<div id="shanghai-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses shanghai">
							<h4><?php _e('Shanghai', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/noz3QWeQL552" target="_blank" itemprop="name"><?php _e('Tradeshift'); ?></a>
							<?php _e("
							<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
								<span itemprop=\"streetAddress\">Room 808, International Trade Center<br>2201 Yan'an West Road, 200336</span><br>
								<span itemprop=\"addressCountry\">China</span>
							</div>
						 ", 'Tradeshift'); ?>
						</div>
						<div id="malaysia-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses malaysia">
							<h4><?php _e('Malaysia', 'Tradeshift'); ?></h4>
							<a href="https://goo.gl/maps/G5h3diNtw9L2" target="_blank" itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></a>
							<?php _e("
								<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
									<span itemprop=\"streetAddress\">Menara Binjai, Level 8<br>No.2 Jalan Binjai, Kuala Lumpur, 50450,</span><br>
									<span itemprop=\"addressCountry\">China</span>
								</div>
						 ", 'Tradeshift'); ?>
						</div>

					<?php else: ?>
						<div id="sf-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses sf" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("San Francisco", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/bN0Dq" target="_blank"><?php _e("San Francisco", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
									<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
										<span itemprop=\"streetAddress\">612 Howard Street,<br /> Suite 100</span><br />
										<span itemprop=\"addressLocality\">San Francisco</span>, <span itemprop=\"addressRegion\">CA</span> <span itemprop=\"postalCode\">94105</span>, <span itemprop=\"addressCountry\">USA</span>
									</div>
						   ", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="ny-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses ny" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e('New York', 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/jWiTQhHZvXN2" target="_blank"><?php _e('New York', 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">1 Little West 12th Street,<br />
											<span itemprop=\"addressLocality\">New York</span>, <span itemprop=\"addressRegion\">NY</span> <span itemprop=\"postalCode\">10014</span>, <br /><span itemprop=\"addressCountry\">USA</span>
									</div>
						   ", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="cph-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses cph" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Copenhagen", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/ayzJh" target="_blank"><?php _e('Copenhagen', 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></div>
									<?php _e("
									<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
										<span itemprop=\"streetAddress\">Landemærket 10,<br /> 1st Floor</span><br />
										<span itemprop=\"postalCode\">1119</span> <span itemprop=\"addressLocality\">Copenhagen</span>, <span itemprop=\"addressCountry\">Denmark</span>
									</div>
						   ", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="london-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses london" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("London", 'Tradeshift'); ?></div>
								<div class="office-address">
								<h4><a href="https://goo.gl/maps/yyXamcjG3pJ2" target="_blank"><?php _e('London', 'Tradeshift'); ?></a></h4>
								<div itemprop="name"><?php _e('Tradeshift', 'Tradeshift'); ?></div>
								<?php _e("
									<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
										<span itemprop=\"streetAddress\">Irongate House<br>22-30 Dukes Place</span><br />
										<span itemprop=\"addressLocality\">London</span> <span itemprop=\"postalCode\">EC3A 7LP</span>,<br /> <span itemprop=\"addressCountry\">United Kingdom</span>
									</div>
						 	", 'Tradeshift'); ?>
							</div>
						</div>
						</div>
						<div id="paris-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses paris" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Paris", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/NWdC2q21hwj" target="_blank"><?php _e("Paris", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">54-56 avenue Hoche</span><br />
											<span itemprop=\"postalCode\">75008</span> <span itemprop=\"addressLocality\">Paris</span>, <span itemprop=\"addressCountry\">France</span>
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="suzhou-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses suzhou" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Suzhou", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/HCSsR" target="_blank"><?php _e("Suzhou", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e('Tradeshift<br> Software Ltd.', 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">4-A5F SIS Park, <br class=\"hidden-xs\" />No.328 Xinghu Street,</span> <br />
											<span itemprop=\"addressLocality\">SIP, Suzhou</span> <span itemprop=\"postalCode\">215000</span>, <span itemprop=\"addressCountry\">China</span>
										</div>
						 		", 'Tradeshift'); ?>
							</div>
						</div>
						</div>
						<div id="tokyo-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses tokyo" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Tokyo", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/otsRynwe8YD2" target="_blank"><?php _e("Tokyo", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">3 Chome−22−14 渋谷松原ビル<br />  Shibuya-ku, Higashi,</span><br /> <span itemprop=\"addressLocality\">Tokyo</span> <span itemprop=\"postalCode\">150-0011</span>, <span itemprop=\"addressCountry\">Japan</span>
										</div>
						 		", 'Tradeshift'); ?>
							</div>
						</div>
						</div>
						<div id="munich-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses munich" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Munich", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/0c5Oe" target="_blank"><?php _e("Munich", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">Terminalstraße Mitte 18</span>  <br />
											<span itemprop=\"addressLocality\">München-Flughafen</span>  <br />
											<span itemprop=\"postalCode\">85356</span>, <span itemprop=\"addressCountry\">Germany</span><br>
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="sydney-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses sydney" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Sydney", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/ZhxPpReqm8w" target="_blank"><?php _e("Sydney"); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">3 Spring Street</span>  <br />
											<span itemprop=\"addressLocality\">NSW</span>  <br />
											<span itemprop=\"postalCode\">2000</span>, <span itemprop=\"addressCountry\">Australia</span><br />
											<span itemprop=\"telephone\">Tel: (02) 8249 4797</span>
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="romania-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses romania" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Bucharest", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/pwXz1WrAKV82" target="_blank"><?php _e("Bucharest", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">Building C, 3rd floor.<br />Green Court,<br>4 Gara Herastrau Street,</span><br />
											<span itemprop=\"addressLocality\">Sector 2</span>, <span itemprop=\"addressRegion\"></span> <span itemprop=\"postalCode\">020334</span>, <span itemprop=\"addressCountry\">Romania</s````pan>
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="sweden-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses sweden" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Stockholm", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/NnFzoNJgrUN2" target="_blank"><?php _e("Stockholm", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">Drottninggatan 78 3 tr</span><br />
											<span itemprop=\"addressLocality\">111 36 Stockholm</span><br />
											<span itemprop=\"addressCountry\">Sweden</span><br />
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="romania-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses oslo" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Oslo"); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/sURrxdQSBAy" target="_blank"><?php _e("Oslo"); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">Henrik Ibsens gate 90</span><br />
											<span itemprop=\"addressLocality\">0255 Oslo</span>  <br />
											<span itemprop=\"addressCountry\">Norway</span><br />
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="frankfurt-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses frankfurt" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Frankfurt", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/uT67rzwGeFS2" target="_blank"><?php _e("Frankfurt", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">Platz der Einheit 2</span><br>
											<span itemprop=\"postalCode\">60327 Frankfurt am Main</span>, <span itemprop=\"addressCountry\">Germany</span><br />
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="shanghai-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses shanghai" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Shanghai", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/noz3QWeQL552" target="_blank"><?php _e("Shanghai"); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift", 'Tradeshift'); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">Room 808, <br>International Trade Center</span><br />
											<span itemprop=\"postalCode\">2201 Yan'an West Road, 200336</span>, <span itemprop=\"addressCountry\">China</span><br />
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>
						<div id="malaysia-address" itemscope itemtype="http://schema.org/Organization" class="office-addresses malaysia" ontouchstart="this.classList.toggle('hover');">
							<div class="office-cards">
								<div class="office-photo"><?php _e("Malaysia", 'Tradeshift'); ?></div>
								<div class="office-address">
									<h4><a href="https://goo.gl/maps/G5h3diNtw9L2" target="_blank"><?php _e("Malaysia", 'Tradeshift'); ?></a></h4>
									<div itemprop="name"><?php _e("Tradeshift"); ?></div>
									<?php _e("
										<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
											<span itemprop=\"streetAddress\">Menara Binjai, Level 8<br>No.2 Jalan Binjai</span><br />
											<span itemprop=\"postalCode\">Kuala Lumpur, 50450</span>, <span itemprop=\"addressCountry\">Malaysia</span><br />
										</div>
						 		", 'Tradeshift'); ?>
								</div>
							</div>
						</div>

					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
