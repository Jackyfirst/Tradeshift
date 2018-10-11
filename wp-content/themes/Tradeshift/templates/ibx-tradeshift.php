 <?php
/*
Template Name: Landing Page - IBX
*/
get_header('ibx-tradeshift'); ?>
	<main class="main-content ibx-tradeshift">
		<!-- hero section -->
		<div id="sectionHero" class="section-view section-hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<img src="<?php echo get_template_directory_uri(); ?>/img/IBX/tradeshift-hearts-ibx.png" alt="Tradeshift Loves IBX" class="img-responsive" />
						<h1>Tradeshift Closes on IBX Deal, Is Now the World's Largest Business Commerce Platform</h1>
						<p>We are thrilled to announce that IBX Business Network is now formally part of Tradeshift. The acquisition has officially closed!</p>
						<p>Together, our combined network totals 1.5 million suppliers, and we’ve added the rich content of 27 million SKUs that IBX has amassed over the last 10 years, which tremendously boosts our marketplace. With the acquisition closed, we are now the largest business commerce platform in the world.</p>
						<p>We’re proud to welcome a whole new generation of Tradeshifters aboard, continuing to scale Tradeshift even further and build on our mission to enable <br class="visible-xs">commerce for all.</p>
					</div>
				</div>
			</div>
			<a href="#sectionOne"><div class="icon-down-arrow hidden-xs hidden-sm">Learn more</div></a>
			<div class="clear:both"></div>
		</div>
		<!-- section one -->
		<div id="sectionOne" class="section-view section-one">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Christian Lanng,<br>Tradeshift CEO &amp; <br class="visible-xs">Co-founder,<br>welcomes IBX</h2>
						<script type="text/javascript" id="vidyard_embed_code_Jk9JPaj9LZwQdBCjB8C5tp" src="//play.vidyard.com/Jk9JPaj9LZwQdBCjB8C5tp.js?v=3.1.1&type=lightbox"></script>
						<img src="<?php echo get_template_directory_uri() ?>/img/IBX/ibx-icon-play-orange.png" onclick="fn_vidyard_Jk9JPaj9LZwQdBCjB8C5tp();" class="play-btn" />
						<button onclick="fn_vidyard_Jk9JPaj9LZwQdBCjB8C5tp();">Watch now</button>
					</div>

				</div>
			</div>
		</div>
		<!-- section two -->
		<div id="sectionTwo" class="section-view section-two">
			<div class="container">
				<div class="row">
					<div class="contents">						
						<div class="read-more">
							<a href="https://blog.tradeshift.com/weve-acquired-ibx-business-network-and-are-now-the-largest-business-commerce-platform-in-the-world/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/IBX/ibx-icon-read-more.png" class="hidden-xs" /></a>
							<a href="https://blog.tradeshift.com/weve-acquired-ibx-business-network-and-are-now-the-largest-business-commerce-platform-in-the-world/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/IBX/ibx-icon-read-more-xs.png" class="visible-xs" /></a>
							<h2><a href="https://blog.tradeshift.com/weve-acquired-ibx-business-network-and-are-now-the-largest-business-commerce-platform-in-the-world/" target="_blank">Read more on<br>our blog &raquo;</a></h2>
						</div>
						<!-- <div class="discover-more">
							<a href="https://www.capgemini.com/business-services/ibx-business-network" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/IBX/ibx-icon-discover.png" class="hidden-xs" /></a>
							<a href="https://www.capgemini.com/business-services/ibx-business-network" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/IBX/ibx-icon-discover-more-xs.png" class="visible-xs" /></a>
							<h2><a href="javascript:void(0)" style="cursor: default;text-decoration: none !important" onMouseOver="this.style.color='#FFF'" onMouseOver="this.style.border='none'" >Discover more<br>about IBX &raquo;</a></h2>
						</div> -->
						<p>If you have questions, please email us directly: <a href="mailto:ibx@tradeshift.com" class="mailto">ibx@tradeshift.com &raquo;</a>.</p>
					</div>
				</div>
			</div>			
		</div>
		<!-- Footer Area -->
		<footer id="footer-sitewide" class="section fp-auto-height footer-main-only sitewide-menu">
			<div class="container">
				<div class="row brand-footer-nav">
					<div class="footer-nav">
						<!-- To edit this snippet, go to the file on /components -->
						<?php get_template_part( 'components/nav', 'footer-sitewide-main' ); ?>
					</div>
				</div>
				<div class="row privacy-terms-copyright SL_swap" id="privacy_footer">
					<?php if (is_mobile()): ?>
					<div class="privacy-terms">
						<ul id="privacy" class="menu-list">
							<li id="menu-item-1358" class="SL_swap"><a title="Privacy Policy" href="/privacy-policy/" class="univ-footer-nav-links">Privacy</a></li>
							<li id="menu-item-1360" class="SL_swap"><a title="Terms of Service" href="/terms-of-service/" class="univ-footer-nav-links">Terms of Service</a></li>
							<li id="menu-item-1359" class="SL_swap">&copy;Tradeshift <?php echo date( 'Y' ); ?></li>
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
						<!-- <span class="copyright">
							Copyright Tradeshift <sup class="reg-mark">&reg;</sup> <?php echo date( 'Y' ); ?>
						</span> -->
					</div>
					<?php endif; ?>
				</div>
			</div>
		</footer>
	</main>