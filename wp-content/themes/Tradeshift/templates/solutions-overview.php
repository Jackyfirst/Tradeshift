<script>
if(window.location.hash) {
	// Fragment exists. So:
	// get fragment/hashtag
	hashtag = window.location.hash;
	if(hashtag == '#sellers') {
		window.location.href = "https://tradeshift.com/roles/sb/small-business-free-invoicing/";
	}
	else if(hashtag == '#buyers') { 
		window.location.href= "https://tradeshift.com/enterprise/solutions/buy/";
	}
}
</script>
<?php
/*
Template Name: Solutions - Overview
*/
get_header(); ?>
<!-- Main Content Starts -->
<main class="main-content solutions-overview" id="app">
	<!-- Hero Section -->
	<div class="hero rethink">
		<div class="container">
			<div class="row">
				<div class="contents" style="position: relative;">
					<!-- <solution></solution> -->
					<div class="content">
						<h1 class="wow fadeInDown" style="visibility: hidden;" data-wow-delay="1s" data-wow-duration="1.8s"><?php _e("Why do 1.5 million companies rely on Tradeshift?", "Solutions Overview"); ?></h1>
						<h3 class="wow fadeInDown" style="visibility: hidden;" data-wow-delay="0s" data-wow-duration="2.5s"><?php _e("Whether you’re running a Fortune 500 company or your own business, Tradeshift offers everything you need to succeed with your trading partners.", "Solutions Overview"); ?></h3>
						<button data-toggle="modal" data-target="#mktoModal2" class="btn btn-white btn-primary-cta-ent wow zoomIn" data-wow-delay="1s" data-wow-duration="1.5s" style="visibility: hidden;"><?php _e("Talk to one of our experts", "Solutions Overview"); ?></button>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/solutions-overview-globe.jpg" class="globe hidden-sm hidden-xs" alt="<?php _e("Solutions for Buyers and Sellers | Tradeshift"); ?>" />
				</div>
			</div>
		</div>
	</div>
	<div class="solutions-list" id="buyers">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/lamp.png" class="lamp hidden-sm hidden-xs wow fadeIn" data-wow-center-offset="-100" alt="Tradeshift Buy" data-wow-duration="2s" style="visibility: hidden;" />
			<div class="wow fadeIn row buy" data-wow-delay="0s" data-wow-duration="2s" data-wow-center-offset="1" style="visibility: hidden;">
				<div class="contents">
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/solutions-buyer.png" alt="Tradeshift Solutions for Buyers" class="center hidden-xs" />
					<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/solutions-buyer_xs.png" alt="Tradeshift Solutions for Buyers" class="center visible-xs" data-wow-delay="0s" data-wow-duration="1s" data-wow-center-offset="-1000" />
					<h2><?php _e("Solutions for Buyers", "Solutions Overview"); ?></h2>
					<p><?php _e("With Tradeshift, you can buy products and services efficiently, save money, and collaborate with your suppliers through e-procurement, AP automation, and supplier management.", "Solutions Overview"); ?></p>
				</div>
			</div>
			<div class="wow fadeIn row p2p" data-wow-delay="1s" data-wow-duration="1s" data-wow-center-offset="-50">
				<div class="contents">
					<span class="topBar"></span>
					<h3><?php _e("Tradeshift<sup>&reg;</sup> Procure-to-Pay", "Solutions Overview"); ?></h3>
					<p><?php _e("Get the flexible P2P solution you need to succeed and grow.", "Solutions Overview"); ?></p>
				</div>
			</div>
			<div class="row solutions">
				<div class="contents">
					<div class="wow fadeInUp solution-buy solution-box" style="visibility: hidden;" data-wow-center-offset="-10" data-wow-delay="0s" data-wow-duration="1">
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Buy"); ?></h3>
						<p><?php _e("Help your company manage everything from strategic goods and services to long-tail spend, with a simple user experience that makes it easy for employees to use.", "Solutions Overview"); ?></p>
						<a href="/enterprise/solutions/buy/"><?php _e("Learn more &raquo;"); ?></a>
					</div>
					<div class="wow fadeInUp solution-pay solution-box" style="visibility: hidden;" data-wow-center-offset="-10" data-wow-delay="0.5s" data-wow-duration="1">
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Pay"); ?></h3>
						<p><?php _e("Automate your electronic invoicing process, and get compliant with trade regulations while making sure that only valid documents are passed from suppliers to your AP system.", "Solutions Overview"); ?></p>
						<a href="/enterprise/solutions/pay/"><?php _e("Find out how &raquo;"); ?></a>
					</div>
					<div class="wow fadeInUp solution-go solution-box" style="visibility: hidden;" data-wow-center-offset="-10" data-wow-delay="1s" data-wow-duration="1">
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Go"); ?></h3>
						<p><?php _e("For your company’s long-tail spend, get the convenience and speed of a credit card with the visibility and control of a procurement system. Tradeshift® Go offers a simple, real-time, collaborative process for buying what your employees need, on the go.", "Solutions Overview"); ?></p>
						<a href="/go/"><?php _e("Tell me how &raquo;"); ?></a>
					</div>
				</div>
			</div>
			<div class="row supplier-engagement">
				<div class="contents">
					<div class="wow fadeInUp wrapper-right" style="visibility: hidden;" data-wow-center-offset="-4" data-wow-duration="1.5s">
						<span class="topBar"></span>
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Supplier Engagement", "Solutions Overview"); ?></h3>
						<p><?php _e("Get complete visibility into your supplier information.", "Solutions Overview"); ?></p>
						<h4><?php _e("Tradeshift<sup>&reg;</sup> Connect", "Solutions Overview"); ?></h4>
						<p><?php _e("Get all your supplier data under control, track compliance and minimize your risk, and unlock hidden innovation in your supply chain. All your supplier information in one place.", "Solutions Overview"); ?></p>
						<a href="/enterprise/solutions/connect/"><?php _e("Learn more &raquo;"); ?></a>
					</div>
					<div class="outer">
						<div class="inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/laptop-coffee.png" class="wow slideInLeft laptop-coffee hidden-xs" alt="<?php _e("Tradeshift Supplier Engagement | Tradeshift Connect", "Solutions Overview"); ?>" style="visibility: hidden;" data-wow-center-offset="-10" data-wow-duration="1.5s" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/laptop-coffee_xs.png" class="wow slideInLeft laptop-coffee visible-xs" alt="<?php _e("Tradeshift Supplier Engagement | Tradeshift Connect", "Solutions Overview"); ?>" style="visibility: hidden;" data-wow-center-offset="-100" data-wow-duration="1.5s" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="solutions-financial">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="wow fadeInDown wrapper-left" style="visibility: hidden;" data-wow-center-offset="-10" data-wow-duration="1.5s">
						<span class="topBar"></span>
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Financial Solutions", "Solutions Overview"); ?></h3>
						<p><?php _e("Improve your working capital and overall supply chain health.", "Solutions Overview"); ?></p>
					</div>
					<div class="wow fadeInUp solution-supply-chain solution-box" style="visibility: hidden;" data-wow-center-offset="-10" data-wow-duration="1s">
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Supply Chain Finance", "Solutions Overview"); ?></h3>
						<p><?php _e("Optimize your working capital by extending DPO. Digitize your Accounts payable processes, strengthen your supplier relationships, and lower your supply chain risk.", "Solutions Overview"); ?></p>
						<a href="#" data-toggle="modal" data-target="#mktoModal2"><?php _e("Talk to us &raquo;"); ?></a>
					</div>
					<div class="wow fadeInUp solution-go solution-box" style="visibility: hidden;" data-wow-center-offset="-10" data-wow-duration="1.5s">
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Go"); ?></h3>
						<p><?php _e("Get a lightweight, collaborative virtual card solution for purchasing and payments. Go gives you the pre-approvals, account reconciliation, and spend visibility you wouldn’t otherwise get with a virtual or physical card program.", "Solutions Overview"); ?></p>
						<a href="/go/"><?php _e("Find out how &raquo;"); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="solutions-sellers" id="sellers">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="wow fadeIn" style="visibility: hidden;" data-wow-center-offset="-10" data-wow-duration="1s">
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/solutions-overview-sellers.png" class="center hidden-xs" alt="Solutions for Sellers | Tradeshift" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/solutions/sellers_xs.png" class="center visible-xs" alt="Solutions for Sellers | Tradeshift" />
						<h2><?php _e("Solutions for Sellers", "Solutions Overview"); ?></h2>
						<p class="lead"><?php _e("Whether you’ve been invited by your buyer or are joining on your own, Tradeshift connects buyers and sellers in one place. Market and sell your products and services to the biggest buyers in the world. Build more leads, invoice your customers more quickly and efficiently, and sign up for supply chain financing.", "Solutions Overview"); ?></p>
					</div>
					<div class="seller-opportunities">
						<span class="wow transition topBarBlue sellers" style="visibility: hidden;" data-wow-delay="0s" data-wow-duration="1s" data-wow-center-offset="-10"></span>
						<h3><?php _e("Storefront Features", "Solutions Overview"); ?></h3>
						<p><?php _e("Market and sell your products and services to the biggest buyers in the world. Build your brand presence to build more leads and increase sales. Publish your product/services, manage prices and share content with customers individually.", "Solutions Overview"); ?></p>
						<a href="#"><?php _e("Learn more &raquo;"); ?></a>
					</div>
					<div class="seller-opportunities">
						<span class="wow transition topBarBlue sellers" style="visibility: hidden;" data-wow-delay="0s" data-wow-duration="1s" data-wow-center-offset="-10"></span>
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Invoicing", "Solutions Overview"); ?></h3>
						<p><?php _e("E-invoice your customers quickly and easily, so you can focus on what matters most.", "Solutions Overview"); ?></p>
						<a href="/roles/sb/small-business-free-invoicing/"><?php _e("Show me how &raquo;"); ?></a>
					</div>
					<div class="seller-opportunities financial">
						<span class="wow transition topBarBlue sellers" style="visibility: hidden;" data-wow-delay="0s" data-wow-duration="1s" data-wow-center-offset="-10"></span></span>
						<h3><?php _e("Tradeshift<sup>&reg;</sup> Financial Solutions", "Solutions Overview"); ?></h3>
						<p><?php _e("Improve your working capital and overall supply chain health.", "Solutions Overview"); ?></p>
						<h4><?php _e("Tradeshift<sup>&reg;</sup> Supply Chain Finance"); ?></h4>
						<p class="small_text"><?php _e("Improve your company’s financial health and cash position with lower receivables & debt on your balance sheet. Get lower financing costs with a single interface for e-invoicing and financing across multiple buyers.", "Solutions Overview"); ?></p>
					</div>
					<div class="seller-opportunities">
						<div class="outer">
							<div class="inner">
								<img src="<?php  echo get_template_directory_uri() ?>/img/solutions/solutions-sellers-bg.png" class="finalScreenShot hidden-xs" alt="<?php _e("Tradeshift Supply Chain Financing"); ?>" />
								<img src="<?php  echo get_template_directory_uri() ?>/img/solutions/solutions-sellers-bg_xs.png" class="finalScreenShot visible-xs" alt="<?php _e("Tradeshift Supply Chain Financing"); ?>" />
							</div>
						</div>
					</div>
				</div>
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
				<h3 id="myModalLabel"><?php _e("Request a Demo"); ?></h3>
				<p class="lead"><?php _e("You’re seconds away from transforming your business!"); ?></p>
			</div>
			<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
				<form id="mktoForm_966"></form>
				<script type="text/javascript">// <![CDATA[
					MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 966, function(form){
						form.vals({"Marketing_Resource_Name__c":"Solutions Overview page"});
					});
					// ]]>
					</script>
				</div>
			</div>
		</div>
	</div>
	
	<script>
	
	$(function(){
		$('ul.dropdown-menu [data-toggle=dropdown] a').hover(function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().siblings().css({});
			$(this).parent().toggleClass('open');
		});
		
		
		$('.dropdown').hover(function() {
			$(this).addClass('open')
		}, function() {
			$(this).removeClass('open');
			
		});
		
		// japannese nav
		if(window.location.host == 'ja.tradeshift.com') {
			$('.sitewide-nav #solutionsNav li').css('padding-right', '20px').children().css('font-size', '13px');
		}
		
		//$(window).resize(function(){
		if ($(window).width() <= 991){  
			// do something here
			var $langSelector = $('#smt-lang-selector').detach()
			$langSelector.appendTo('#lang-selector-container');
		}
		// else if($(window).width() >= 992) {
		//     alert('>=992px')
		// }   
		//});
		
		
	}); // document ready ends
	
	$(document).ready(function(){
		// wow.js
		new WOW().init();
		wow = new WOW(
			{
				//boxClass:     'hasAnimation',
				animateClass: 'animated',
				animateClass: 'transition',
				offset:       0,
				mobile:       true,
				live:         true,
				callback:     function(box) {
					//console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
				}
			});
			// used to control offset of wow animation
			$( ".wow" ).each(function() {
				if ($(this).attr('data-wow-center-offset')) {
					offset = $(window).height() / 100 * $(this).attr('data-wow-center-offset');
				}
				else {
					offset = $(window).height() * 0.25;
				}
				offset = offset + $(this).height() / 2;
				$(this).attr( "data-wow-offset", parseInt(offset) );
			});
			
		});
	</script>
	<?php get_footer(); ?>
