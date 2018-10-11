 <?php
/*
Template Name: Solutions - Tradeshift Buy **OLD**
*/
get_header(); ?>

		<!-- Main Content Starts -->
		<main class="main-content ts-buy">
			<div class="hero">
				<div class="container">
					<div class="row rethink">
						<div class="contents">
							<h1>Tradeshift<sup>&reg;</sup> Buy ME</h1>
							<h3>Rethink eProcurement.<br />Because you don't e-procure things.<br class="visible-xs" /> You buy them.</h3>
							<button id="heroMainCtaTS_buy" class="btn btn-primary-cta btn-orange" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
						</div>
						<button id="heroVideoTS_buy" class="btn btn-play-orange" onclick="fn_vidyard_5xynnNTx0AQmKu8HYiCKrA();"> </button>
						<script type="text/javascript" id="vidyard_embed_code_5xynnNTx0AQmKu8HYiCKrA" src="//play.vidyard.com/5xynnNTx0AQmKu8HYiCKrA.js?v=3.1.1&type=lightbox"></script>
					</div>
					<div class="row freedom">
						<div class="contents">
							<h2>Freedom to <span>find & buy</span> anything you need<br /><span class="hidden-xs"><span class="text-carousel"> </span></span></h2>
							<p>Wouldn’t it be nice if your employees could easily buy every product they need from one place? A place where suppliers manage up-to-date content that’s priced for you? Where any online purchase can be within policy?</p>
							<p id="start-kill-the-catalog-vid"><strong>It’s time to rethink your eProcurement platform. Welcome to Tradeshift<sup>&reg;</sup> Buy.</strong></p>
						</div>
					</div>
				</div>
			</div>
			<div class="product-engine">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Tradeshift Product Engine</h2>
							<h3>It's time to kill the catalog.</h3>
							<?php if (is_mobile()): ?>
								<div class="kill-gif-wrapper">
									<img class="kill-gif" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/kill-the-catalog-280-3.gif" />
								</div>
							<?php elseif (is_tablet()): ?>
								<div class="kill-gif-wrapper">
									<img class="kill-gif" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/kill-the-catalog-280-3.gif" />
								</div>
							<?php else: ?>
								<video id="killCatalog" class="kill-video" autobuffer >
									<source src="<?php echo get_template_directory_uri(); ?>/videos/kill-the-catalog27.mp4" type="video/mp4" />
									<source src="<?php echo get_template_directory_uri(); ?>/videos/kill-the-catalog27.webm" type="video/webm" />
								</video>
							<?php endif; ?>
							
							<p>Product Engine is the world’s first central, searchable product database. It spans millions of products across thousands of companies. Product Engine creates a full e-commerce experience for suppliers, buyers, and everyone in between – with your contracted prices and inventory in one eProcurement platform.</p>
							<p>No more disconnected, difficult-to-maintain catalogs. With Product Engine, suppliers of every size can upload and manage their products for anyone to find. It’s easy for them, and you get fresh, living data.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="shop">
				<div class="container">
					<div class="row">
						<div id="shopSLSwap" class="contents SL_swap">
							<h2>Tradeshift Shop</h2>
							<h3>Create a buying experience that's simply awesome.</h3>
							<img class="visible-xs" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/ts-shop-xs-min.png" />
							<div class="imagery hidden-xs">
								<img class="bubble-shop" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/ts-shop-bubble.png" />
								<!-- <div class="bubble-shop">Shop's product search automatically remembers your previous searches, highlights suggestions, based on buying habits, and show you similar category items.</div> -->
							</div>
							<p>Shop is a virtual store across all your suppliers and product categories. Search, browse, compare, and check-out with all the products &amp; services available to you. Shop is powered by the Tradeshift Product Engine.</p>

							<p>Further, Shop understands what you’re trying to buy. It asks questions to clarify, suggests options to help you buy, and gives you all the tools to rapidly complete any purchase, whether it’s from the Product Engine, a service request, a free-text order, or from any online store.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="buy-anywhere">
				<div class="container">
					<div class="row">
						<div class="contents ">
							<h2>Tradeshift Buy Anywhere</h2>
							<h3>Freedom to buy from any online source. <span>And stay within policy.</span></h3>
							<img class="visible-xs" id="ts-buy-bubble-xs" width="280" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/ts-buy-xs.jpg" />
							<p>We know that not every purchase will go through your system. (We’re looking at you, maverick spenders.) Buy Anywhere turns the buying process on its head, empowering employees to buy from the whole Internet and stay within policy.</p>
							<p id="start-ts-buy-vid">Think of it as a “managed e-commerce experience”. You get full visibility and control with approval workflows, even outside the system.</p>
							<p>Tradeshift generates single-use credit cards to employees. This cutting-edge technology allows you to capture 100% of spend for the first time – even when it’s not happening through the normal channel.</p>
							<div class="video-demo hidden-xs SL_swap" id="ts-buy-bubble-swap">
								<div id="bubble-buy-sm" class="callout hidden-xs">
									<img id="ts-buy-bubble" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/ts-buy-bubble.png" />
								</div>
								<video id="ts-buy-demo" autobuffer poster="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/ts-buy-anywhere-poster-min.png">
									<source src="<?php echo get_template_directory_uri(); ?>/videos/ts-buy-demo.mp4" type="video/mp4" />
									<source src="<?php echo get_template_directory_uri(); ?>/videos/ts-buy-demo.webm" type="video/webm" />
								</video>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="collaborate" style="background: #f2f2f2 !important">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Tradeshift Collaborate</h2>
							<h3>Simplify how you work together.</h3>
							<img class="visible-xs SL_swap" id="ts-collab-xs" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/ts-collab-xs.png" />
							<img class="hidden-xs SL_swap" id="ts-collab" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/ts-collab-sm.png" />
							<div class="collab-copy">
								<p>With Tradeshift Collaborate, your eprocurement team, suppliers, managers, and employees can chat and collaborate together within Tradeshift throughout the entire buying process.</p>
								<p>Add people to your conversations, share product information, update pricing, and build purchase requests together with your suppliers. Communicating information and feedback that could easily be missed means you get the right order from the beginning – and lightning-quick processing times.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="apps">
				<div class="container">
					<div class="row apps-expand">
						<div class="contents">
							<h2 class="visible-xs visible-sm">Tradeshift Apps</h2>
							<h3 class="visible-xs visible-sm">Expand your buying experience.</h3>
							<div class="apps-copy-sm hidden-xs">
								<h2 class="hidden-xs hidden-sm">Tradeshift Apps</h2>
								<h3 class="hidden-xs hidden-sm">Expand your buying experience.</h3>
								<p>You can easily expand your buying experience with apps that connect to Amazon Business, Upwork, StockonDeals, and others. Apps mean you can onboard new suppliers quickly, get better quality purchases, and do more straight-through processing.</p>
								<p>And Tradeshift<sup>&reg;</sup> Buy doesn’t stand alone: Apps connect all your data and processes on the Tradeshift platform. Link Tradeshift Buy with Tradeshift<sup>&reg;</sup> Pay to connect your procure-to-pay process, or add in Tradeshift<sup>&reg;</sup> Risk to do real-time risk profiling. </p>
							</div>
						</div>
						<div class="arrow visible-xs"></div>
					</div>
					<div class="row apps-copy-xs visible-xs">
						<div class="contents">
							<p>You can easily expand your buying experience with apps that connect to Amazon Business, Upwork, StockonDeals, and others. Apps mean you can onboard new suppliers quickly, get better quality purchases, and do more straight-through processing.</p>
							<p>And Tradeshift<sup>&reg;</sup> Buy doesn’t stand alone: Apps connect all your data and processes on the Tradeshift platform. Link Tradeshift Buy with Tradeshift<sup>&reg;</sup> Pay to connect your procure-to-pay process, or add in Tradeshift<sup>&reg;</sup> Risk to do real-time risk profiling. </p>
						</div>
					</div>
				</div>
			</div>
			<div class="test-drive">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>See what we're talking about.<br class="visible-xs visible-sm" /> (It's pretty cool.)</h2>
							<div class="video-wrapper">
								<a class="trigger-vid-1" onclick="fn_vidyard_poCT_jsrL6r6DKvkrQ1Hpw();"><img class="video-img" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/test-drive-1.jpg" /></a>
								<script type='text/javascript' id='vidyard_embed_code_poCT_jsrL6r6DKvkrQ1Hpw' src='//play.vidyard.com/poCT_jsrL6r6DKvkrQ1Hpw.js?v=3.1.1&type=lightbox'></script>
								<p>Watch Neil, an office manager, create purchase requests. <br /><a class="trigger-vid-1" onclick="fn_vidyard_poCT_jsrL6r6DKvkrQ1Hpw();">Play video &raquo;</a></p>
							</div>
							<div class="video-wrapper">
								<a class="trigger-vid-2" onclick="fn_vidyard_XJLvEQkLL6DluskK_O_UkA();"><img class="video-img" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/test-drive-2.jpg" /></a>
								<script type='text/javascript' id='vidyard_embed_code_XJLvEQkLL6DluskK_O_UkA' src='//play.vidyard.com/XJLvEQkLL6DluskK_O_UkA.js?v=3.1.1&type=lightbox'></script>
								<p>Watch Neil browse and buy from any online store and stay within policy. <br /><a class="trigger-vid-2" onclick="fn_vidyard_XJLvEQkLL6DluskK_O_UkA();">Play video &raquo;</a></p>
							</div>
							<!-- <div class="clearfix visible-sm"> </div> -->
							<div class="video-wrapper">
								<a class="trigger-vid-3" onclick="fn_vidyard_eKzvTACrqboqvAgJ3p0HUw();"><img class="video-img" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/test-drive-3.jpg" /></a>
								<script type='text/javascript' id='vidyard_embed_code_eKzvTACrqboqvAgJ3p0HUw' src='//play.vidyard.com/eKzvTACrqboqvAgJ3p0HUw.js?v=3.1.1&type=lightbox'></script>
								<p>Watch Maya connect with a supplier and select products for employees. <br /><a class="trigger-vid-3" onclick="fn_vidyard_eKzvTACrqboqvAgJ3p0HUw();">Play video &raquo;</a></p>
							</div>
							<div class="video-wrapper">
								<a class="trigger-vid-4" onclick="fn_vidyard_UQMOhlnfBE6lOmAgHMKYnA();"><img class="video-img" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/test-drive-4.jpg" /></a>
								<script type='text/javascript' id='vidyard_embed_code_UQMOhlnfBE6lOmAgHMKYnA' src='//play.vidyard.com/UQMOhlnfBE6lOmAgHMKYnA.js?v=3.1.1&type=lightbox'></script>
								<p>Watch a CFO reject a request and see how one-time-use credit cards work. <br /><a class="trigger-vid-4" onclick="fn_vidyard_UQMOhlnfBE6lOmAgHMKYnA();">Play video &raquo;</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="strategic-leader">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>We want you to become a strategic leader.</h2>
							<h3>With Tradeshift<sup>&reg;</sup> Buy, you can:</h3>
							<div class="all-your-suppliers">
								<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/icon_innovate.png" />
								<h4>Innovate with your suppliers</h4>
								<p>Stop squeezing your sources &mdash; collaborate to save.</p>
							</div>
							<div class="direct-indirect">
								<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/icon_trusted_advisor.png" />
								<h4>Become a trusted advisor, not the spend police</h4>
								<p>Help your requisitioners get what they need, instead of feeling like the bad guy.</p>
							</div>
							<div class="networked-platform">
								<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/icon_help.png" />
								<h4>Help your users, help yourself</h4>
								<p>Make it easy for employees &amp; suppliers to do the right thing.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonials">
				<div class="container">
					<div class="row">
						<div class="contents">
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/testimonial-jason.png" alt="Jason Busch" />
							<div class="quotation">“Tradeshift is entering the eProcurement and broader source-to-pay market as an antagonist with a radical perspective on how to improve corporate buying. We welcome Tradeshift's entrance as a procurement suite vendor, which is not just taking the road less travelled but blazing a completely new trail.”</div>
							<div class="quoted-person">&#8212; Jason Busch, SpendMatters.com</div>
						</div>
					</div>
				</div>
			</div>
			<div class="resources">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Learn more about us:</h2>
							<div class="resource-wrapper">
								<a class="trigger-res-1" href="http://tradeshift.com/resources/spend-matters-pro-deep-dive-tradeshift-rethinks-eprocurement-part-one/"><img class="img-responsive" src="http://tradeshift.com/wp-content/uploads/2015/12/Spend-Matters_blog-1.png" /></a>
								<p>Rethink eProcurement <br class="visible-sm" /><a class="trigger-res-1"  href="http://tradeshift.com/resources/spend-matters-pro-deep-dive-tradeshift-rethinks-eprocurement-part-one/">Download &raquo;</a></p>
							</div>
							<div class="resource-wrapper">
								<a class="trigger-res-2" href="http://tradeshift.com/resources/tradeshift-buy-video/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/resources-demo-vid.jpg" /></a>
								<p>Tradeshift Buy Demo <br class="visible-sm" /><a class="trigger-res-2" href="http://tradeshift.com/resources/tradeshift-buy-video">Watch video &raquo;</a></p>
							</div>
							<div class="resource-wrapper">
								<a class="trigger-res-3" href="http://tradeshift.com/resources/ts-buy"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/resources-vision.jpg" /></a>
								<p>Tradeshift Buy Vision <br class="visible-sm" /><a class="trigger-res-3" href="http://tradeshift.com/resources/ts-buy">Read paper &raquo;</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="fill-out-form">
				<div class="container">
					<div class="row">
						<h2>Get the facts on how Tradeshift can help your enterprise.</h2>
						<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
							<div class="form-group">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary-cta" id="getStartedTS_buy" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
							</div>
						</form>
					</div>
					<div class="row">
						<p class="sub">Tradeshift takes your privacy seriously.<br /> We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.</p>
					</div>
				</div>
			</div>
		</main>
		<!-- Modal View of Marketo Forms2 -->
		<div class="modal fade" id="mktoModal" tabindex="-1">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 id="myModalLabel">Request a Demo</h3>
		        <p class="lead">Start your journey with a free demo today.</p>
		      </div>
		      <div class="modal-body">
		        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_951"></form>
				<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 951, function(form){
		           form.vals({"Marketing_Resource_Name__c":"Solutions - Tradeshift Buy"});
		           form.onSubmit(function(){
		              ga('send', 'event', 'Main CTA', 'Submit', 'Solutions - Tradeshift Buy');
		           });
		    	});
				// ]]></script>
		      </div>
		    </div>
		  </div>
		</div>

<?php get_footer(); ?>