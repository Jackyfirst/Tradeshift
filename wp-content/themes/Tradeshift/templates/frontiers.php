<?php
/*
Template Name: Frontiers
*/
get_header('frontiers'); ?>
<main class="main main-content cd-main-content">
	<style>
	@keyframes fadeIn {
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	}
	body {
		animation: fadeIn 1.5s ease-out;
	}
	.mCSB_container {
		display: flex;
		flex-flow: wrap;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.mCSB_scrollTools .mCSB_draggerContainer {
		left: 11px;
	}
	.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
		background-color: rgb(242, 242, 242);
		width: 10px;
	}
	.mCSB_scrollTools .mCSB_draggerRail {
		background-color: rgba(230, 231, 232, 0.2);
		width: 10px;
	}
	</style>
	<div class="has-universeBG">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h1><?php _e("Tradeshift Frontiers", 'Tradeshift'); ?></h1>
						<h2><?php _e("Creating real-world business value from new technologies that will significantly impact B2B commerce and global supply chains in the next 5 years.", 'Tradeshift'); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="ft-articles">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h3><?php _e("Pushing the frontiers of B2B commerce through emerging technology", 'Tradeshift'); ?></h3>
						<div id="technologies" class="articles">
							<div id="AI" class="article featured" aria-expanded="false">
								<div class="icon-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/AI_v2.png" class="hidden-xs" alt="<?php _e("Artificial Intelligence | Tradeshift Frontiers", 'Tradeshift'); ?>" />
									<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/AI_v2-xs.png" class="visible-xs" alt="<?php _e("Artificial Intelligence | Tradeshift Frontiers", 'Tradeshift'); ?>" />
								</div>
								<h4><?php _e("Artificial Intelligence (AI)", 'Tradeshift'); ?></h4>
								<p><?php _e("The volume of digital commerce revenue influenced by AI has shown exponential growth. With its ability to connect supply and demand, AI and machine learning (ML) are the foundations of taking B2B digitization and automation to the next level.", 'Tradeshift'); ?></p>
								<p><?php _e("With the latest data science techniques, such as ML, data mining and operational analysis, Tradeshift and our partners are adding intelligence and automation to supply chain processes. We’re committed to making the power of AI available to customers and partner ecosystem.", 'Tradeshift'); ?></p>
							</div>
							<a role="button" class="collapsePanel visible-sm visible-xs" data-toggle="collapse" aria-expanded="false" aria-controls="AI">
								<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/down-arrow.png" class="down-arrow" alt="<?php _e("Blockchain | Tradeshift Frontiers", 'Tradeshift'); ?>" />
							</a>
							<div id="blockchain" class="article featured" aria-expanded="false">
								<div class="icon-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/Blockchain_v2.png" class="hidden-xs" />
									<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/Blockchain_v2-xs.png" class="visible-xs" alt="<?php _e("Artificial Intelligence | Tradeshift Frontiers", 'Tradeshift'); ?>" />
								</div>
								<h4><?php _e("Blockchain", 'Tradeshift'); ?></h4>
								<p><?php _e("Almost every interaction between trading parties is subject to questions about trust and transparency. Blockchain enables a new, transparent way to bind together actions, terms and transactions on any kind of asset between any party in the world.", 'Tradeshift'); ?></p>
								<p><?php _e("Buyers, sellers, auditors, and logistics partners can now agree on terms, events and transactions in completely transparent ways without relying on trusted middlemen. Based on this, blockchain promises to bring liquidity to otherwise static or intangible assets, to open the digital supply chain to companies of any size, and to enable new models of inclusive trade financing.", 'Tradeshift'); ?></p>
							</div>
							<a role="button" class="collapsePanel visible-sm visible-xs" data-toggle="collapse" aria-expanded="false" aria-controls="blockchain">
								<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/down-arrow.png" class="down-arrow" alt="<?php _e("Internet of Things | Tradeshift Frontiers", "Tradeshift"); ?>" />
							</a>
							<div id="IoT" class="article featured" aria-expanded="false">
								<div class="icon-container">
									<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/IoT.png" class="hidden-xs" />
									<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/IoT-xs.png" class="visible-xs" alt="<?php _e("Artificial Intelligence | Tradeshift Frontiers", "Tradeshift"); ?>" />
								</div>
								<h4><?php _e("Internet of Things (IoT)", 'Tradeshift'); ?></h4>
								<p><?php _e("By 2025, 75.4 billion devices will be connected on the Internet. With this, IoT promises to enable full traceability to the supply chain and act as the enabler of the Industry 4.0 changes in workforce, production, sourcing and distribution.", 'Tradeshift'); ?></p>
								<p><?php _e("Today, data from IoT-enabled entities in the supply chain is either not captured at all or is isolated within individual companies. Tearing down these data silos is the key to fueling new models for transparency and inclusiveness in supply chains worldwide.", 'Tradeshift'); ?> </p>
							</div>
							<a role="button" class="collapsePanel visible-sm visible-xs" data-toggle="collapse" aria-expanded="false" aria-controls="IoT">
								<img src="<?php echo get_template_directory_uri(); ?>/img/frontiers/down-arrow.png" class="down-arrow" />
							</a>
						</div>
						<div id="articles" class="articles list-all CustomScrollbar" data-simplebar>
							<div class="article item col-1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/someone-should-fix-it.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="https://medium.com/tradeshift-frontiers/someone-should-fix-it-smooth-sailing-in-volatile-blockchain-waters-with-the-dai-stablecoin-93c70fbd74ee" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("Someone should fix it: Smooth sailing in volatile blockchain waters with the Dai stablecoin", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/Stablecoin-startup-MakerDAO.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="https://www.coindesk.com/makerdao-pilots-stablecoin-with-tradeshift-to-speed-up-payment/" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("Tradeshift Pilots Stablecoin to Speed Up Business Payments", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/frontiers-blockchain-7-myths.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="https://www.entrepreneur.com/article/309896" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("7 Myths That Fuel Blockchain Hysteria", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/gert-sylvest-tradeshift-frontiers.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="https://www.youtube.com/watch?v=52hRppBcO6M&feature=youtu.be" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("Gert Sylvest of Tradeshift on Hyperledger", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/Hyperledger-Board.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="/press/tradeshift-joins-hyperledger-board/">
									<div class="isarticle_main">
										<h4><?php _e("Tradeshift Joins the Hyperledger Board", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1 video" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/tile-3.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="https://www.youtube.com/watch?v=JvHI2hTD2m0" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("Harvard Blockchain Innovation Course interviews Gert Sylvest co-Founder of Tradeshift", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/tile-6.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="/resources/christian-lanng-discusses-tradeshift-ada-with-cnbc/">
									<div class="isarticle_main">
										<h4><?php _e("Christian Lanng discusses Tradeshift Ada with CNBC", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1" style="background-color: #159957; background-image: linear-gradient(120deg, #155799, #159957)">
								<a class="istarget" href="https://rasmusbergpalm.github.io/recurrent-relational-networks/" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("Complex relational reasoning with neural networks", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1" style="background: url('https://www.hyperledger.org/wp-content/uploads/2017/12/Hyperledger_BlogGraphic_Distributed-Ledgers-in-2018.png') no-repeat center center;background-size: cover;">
								<a class="istarget" href="https://www.hyperledger.org/blog/2017/12/20/4590" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("Distributed Ledgers in 2018? The Hyperledger Community Weighs In!", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-2" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/frontiers-on-medium.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="https://medium.com/tradeshift-frontiers" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("Tradeshift Frontiers on Medium", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
							<div class="article item col-1" style="background: url(<?php echo get_template_directory_uri(); ?>/img/frontiers/algorithms-will-predict.jpg) no-repeat center center;background-size: cover;">
								<a class="istarget" href="https://blog.tradeshift.com/how-algorithms-will-add-super-intelligence-to-the-way-your-company-spends-money/" target="_blank">
									<div class="isarticle_main">
										<h4><?php _e("How algorithms will add super-intelligence to the way your company spends money", 'Tradeshift'); ?></h4>
										<div class="isarticle_action"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="joinTheMovement">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h3 class="wow fadeIn" data-wow-delay="0s" data-wow-duration="1.8s" data-wow-center-offset="1" style="visibility: visible; animation-duration: 1.8s; animation-delay: 0s; animation-name: fadeIn;" data-wow-offset="34"><?php _e("Let’s join forces to create a new, inclusive way for commerce", 'Tradeshift'); ?></h3>
					<p class="lead wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1.3s" data-wow-center-offset="1" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s; animation-name: fadeIn;" data-wow-offset="95"><?php _e("If you are interested in exploring new models of the future together with Frontiers, let’s talk.", 'Tradeshift'); ?></p>
					<p><?php _e("We believe that by working together with partners, customers, universities and innovators, we can effect real change in supply chains and commerce. Building on the Tradeshift platform, we have a strong foundation that allows us to launch  applications and scalable blueprints into the largest supply chains in the world.", 'Tradeshift'); ?></p>
					<button class="btn btn-white btn-primary-cta-ent wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.8s" data-wow-center-offset="1" data-toggle="modal" data-target="#mktoModal2" style="visibility: visible; animation-duration: 1.8s; animation-delay: 0.5s; animation-name: zoomIn;" data-wow-offset="19"><?php _e("Partner with us", 'Tradeshift'); ?></button>
				</div>
			</div>
		</div>
	</div>
	
</main>

<?php get_footer("frontiers"); ?>
