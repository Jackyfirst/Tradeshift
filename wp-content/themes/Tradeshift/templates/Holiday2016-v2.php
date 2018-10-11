 <?php
/*
Template Name: Christmas Holiday 2016

## This is not the official template used for the 
## Holiday 2016 landing page. Instead it is for 
## adding the landing page via iframe.
*/
?>
<!doctype html>	
<html <?php language_attributes(); ?> class="no-js">
<head>
	<script src="//cdn.optimizely.com/js/8259421717.js"></script>
	<!-- meta -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	<meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1'>
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>	

	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<!-- Fonts and CSS Libraries -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet">
	<link href="https://3ggqje2jhgjp45f9yd48ay211i1-wpengine.netdna-ssl.com/wp-content/themes/Tradeshift/fonts/font-awesome-4.3.0/css/font-awesome.min.css"
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/cubes-advent-calendar/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/cubes-advent-calendar/css/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/cubes-advent-calendar/css/style3.css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/xmas-page.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/holiday2016-ie.css" rel="stylesheet">

	<!--[if IE]>
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-bourbon.css" rel="stylesheet">
	<![endif]-->
	<?php wp_head(); ?>

	<style>
		body {
		    background: url('/wp-content/themes/Tradeshift/img/holiday-2016/holiday2016-background-red_v2.jpg') no-repeat center center fixed;
		    transition: background-color 1s ease;
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    background-size: cover;
		}
		.js .calendar {
			padding: 0px !important;
			margin: 0 auto;
		}
		.js .content {
			background: none;
		}
		.js .content__block {
		    width: 100% !important;
		    padding: 0px !important!;
		    margin: auto !important;;
		    left: 0;
		    right: 0;
		    bottom: 0;
		    margin: 0 auto;
		}
		.cubes {
			/*width: 840px !important;*/
			/*width: 65% !important;*/
	    	margin: auto !important;
		}
		p.sub_heading {
			color: #fff;
			text-align: center;
			font-weight: 300;
			margin-bottom: 1.4vw;
			font-size: 2vw;
			line-height: 40px;
		}
		.non-active {
    		display: none;
		}
		.content__description {
		    margin-bottom: 0px !important;
		    margin-top: 40px !important;
		}
		.content__block img.imageclass_16 {
		    width: 29%;
		}
		.content__meta {
		    width: 70vw !important;
		    font-size: 2.1vw !important;
		}
		.content__block img {
		    display: block;
		    margin: auto;
		    margin-bottom: 0px;
		    width: 30%;
		}
		.imageclass_21 {
			width: 22% !important;
		}
		@media only screen and (max-device-width: 768px) {
	    	/* For mobile phones: */
		    p.sub_heading {
			    margin-top: -6vw !important;
			    font-size: 4vw !important;
			    line-height: 40px !important;
			}
			.content__block img.imageclass_16 {
		    	width: 100%;
			}
		}

	
	</style>

</head>

<body <?php body_class();?> >
		<main class="main-content xmas-page">
		<div class="container" style="width: 100%;padding-left: 0px">
			<div class="calendar-wrap">
				<div class="calendar">
					<p class="main_heading">More Jingle in Your Pockets in 12 Days</p>
					<p class="sub_heading">Click each box to unwrap some holiday cheer!</p>
					<div class="cube" data-title="Rein in rogue spend"></div>
					<div class="cube" data-title="Santa-like Visibility"></div>
					<div class="cube" data-title="A Black Holiday"></div>
					<div class="cube" data-title="A Beautiful Sight"></div>
					<div class="cube" data-title="Value for All"></div>
					<div class="cube" data-title='Strategic “Little Helpers”'></div>
					<div class="cube" data-title="All Aboard!"></div>
					<div class="cube" data-title="Data Clean as Driven Snow"></div>
					<div class="cube" data-title="Scrooged?"></div>
					<div class="cube" data-title="All You Want"></div>
					<div class="cube" data-title="Don’t Elf Yourself"></div>
					<div class="cube" data-title="A Procurement Miracle"></div>
					<div class="cube" data-title="Walking in a P2P Wonderland"></div>
				</div>

				<div class="content">
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-reindeer.png" class="imageclass_13" /></p>
						<h3 class="content__title">Rein in rogue spend</h3>
						<p class="content__meta">Empower your people with virtual credit cards and a pre-approval process that brings 90% more <a href="https://blog.tradeshift.com/the-pillars-of-p2p-part-1-spend-under-management/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=pillar_spend" target="_blank">spend under management &raquo;</a>, and gives your finance department control they can brag about.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-drone.png" /></p>
						<h3 class="content__title">Santa-like Visibility</h3>
						<p class="content__meta">Kill the catalog and feed it to the reindeer. Search products and services online from all your suppliers, manage all your data <a href="https://tradeshift.com/resources/fact-or-fiction-you-can-manage-all-your-supplier-information-transactions-and-risk-in-one-place/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=fact_fiction" target="_blank">in one place &raquo;</a>. You always get the best price and powerful insights into your supply chain and spend</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-credit-card.png" /></p>
						<h3 class="content__title">A Black Holiday</h3>
						<p class="content__meta">Reduce cycle times to improve service levels, boost supplier and user satisfaction, and drive efficiency across all financial operations to bring <a href="https://tradeshift.com/resources/p2p-check-list/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=p2pchecklist" target="_blank">joy and savings &raquo;</a> to your world.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-watch.png" class="imageclass_16" /></p>
						<h3 class="content__title">A Beautiful Sight</h3>
						<p class="content__meta">AP enables procurement, risk management, and helps achieves business-wide objectives. You’re automated. Invoice processing costs, and cycle times are down—sweet! Not there yet? <a href="https://tradeshift.com/resources/spend-matters-maturity-models-procurement-supplier-management-and-ap/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=ind_maturity" target="_blank">See how mature your AP, Procurement, and Supplier Management are &raquo;</a>.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-cups.png" class="imageclass_17" /></p>
						<h3 class="content__title">Value for All</h3>
						<p class="content__meta">Fast payments with e-invoicing, no fees, and the ability to collaborate from PO to payment—means more value for your suppliers, more accurate orders for you, and you <a href="https://tradeshift.com/resources/artofonboarding/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=art_onboarding" target="_blank">become customer #1 &raquo;</a>.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-dog.png" /></p>
						<h3 class="content__title">Strategic “Little Helpers”</h3>
						<p class="content__meta">Supplier capability is company capability. Form strategic relationships with your suppliers to <a href="https://blog.tradeshift.com/christian-lanng-dishes-on-the-future-of-procurement/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=art_procurement" target="_blank">enable agility and reap rewards &raquo;</a> like reduced costs and preferred access to goods and services in a crisis.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-train.png" /></p>
						<h3 class="content__title">All Aboard!</h3>
						<p class="content__meta">Free for supplier invoicing that’s simple to use and fast to implement makes doing business with you more attractive to suppliers. <a href="https://blog.tradeshift.com/the-pillars-of-p2p-part-3-supplier-adoption/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=Pillar_3" target="_blank">Get a (Polar) express ticket to world-class onboarding rates &raquo;</a>. </p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-snowboard.png" /></p>
						<h3 class="content__title">Data Clean as Driven Snow</h3>
						<p class="content__meta">Create one master list you don’t have to check twice. Is all your supplier data in one place, easily searchable and with automatic updates that continuously enrich and keep you 100% compliant? <a href="https://tradeshift.com/resources/supplier-management-checklist/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=sm_checklist" target="_blank">Better check &raquo;</a>.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-leapfrog.png" class="imageclass_21"/></p>
						<h3 class="content__title">Scrooged?</h3>
						<p class="content__meta">The Ghost of procurement future says innovation needs to be part of your growth strategy. Easiest way to innovate? <a href="https://blog.tradeshift.com/the-pillars-of-procure-to-pay-part-4-fuel-business-agility-and-growth/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=pillar_4" target="_blank">Get strategic &raquo;</a>. Use your “think tank”—suppliers and internal users. Innovate and go-to-market faster.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-beanie.png" class="imageclass_22"/></p>
						<h3 class="content__title">All You Want</h3>
						<p class="content__meta">Quick approvals, short cycle times, visibility and control. Make 1:1 interactions in real time and in context of a document’s history. Hark, the Herald Angels are singing your praises. <a href="https://tradeshift.com/resources/cpo-100-days-infographic/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=infographic" target="_blank">New or aspiring CPO start here &raquo;</a>.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-elfmug.png" /></p>
						<h3 class="content__title">Don’t Elf Yourself</h3>
						<p class="content__meta">With agile procurement you’re able to handle changes in market conditions, new competition, or disaster like any other day that ends in “Y.” Grab some eggnog and watch this <a href="https://tradeshift.com/resources/enabling-agility-hackett-webinar/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=hacket_webinar" target="_blank">procurement agility webinar &raquo;</a>.</p>
					</div>
					<div class="content__block">
						<p class="content__description"><img src="<?php echo get_template_directory_uri(); ?>/img/holiday-2016/holiday2016-chocolate.png" class="imageclass_24" /></p>
						<h3 class="content__title">A Procurement Miracle</h3>
						<p class="content__meta">Use modern collaboration, embedded everywhere, to engage with employees and suppliers, facilitate the purchasing process, and resolve disputes. <a href="https://tradeshift.com/resources/building-procurement-agility-with-collaborative-p2p/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=ardent" target="_blank">It’s the easiest, most cost-effective tool in your shed &raquo;</a>.</p>
					</div>
					<div class="content__block">
						<p class="content__description"></p>
						<h3 class="content__title">Walking in a P2P Wonderland</h3>
						<p class="content__meta">Gone away are your blue days, filled with old, painful processes. Here to stay is a <a href="https://tradeshift.com/procure-to-pay/?utm_source=email&utm_medium=email&utm_campaign=holiday_2016&utm_content=p2p_page" target="_blank">modern solution for simple, effective procure-to-pay &raquo;</a> that drives growth and enables organization-wide agility. Merry holiday to you.</p>
					</div>
					<div class="content__number">0</div>
					<button class="btn-back" aria-label="Back to the grid view">&crarr;</button>
				</div><!-- /content -->
			</div>
		</main>

		<!-- </main> -->

		<!-- Load WP Enqueued Scripts -->
		<?php wp_footer(); ?>

		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/cubes-advent-calendar/js/charming.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/cubes-advent-calendar/js/anime.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/cubes-advent-calendar/js/textfx.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/cubes-advent-calendar/js/main4.js"></script>

	</body>
</html>





