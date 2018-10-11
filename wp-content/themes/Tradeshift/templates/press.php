<?php
/*
Template Name: Press
*/
get_header(); ?>
<style>
.smartling-fr button.btn.btn-transparent-white.btn-tight.btn-pr::before { content: 'Masquer les communiqués' !important; }
.smartling-fr button.btn.btn-transparent-white.btn-tight.btn-pr.collapsed::before { content: 'Tous nos communiqués' !important }</style>
<!-- Main Content Starts -->
<main class="main-content press-page">
	<!-- Hero Section -->
	<div class="hero making-headlines">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h1><?php _e("In the news", 'Tradeshift'); ?></h1>
					<h3><?php _e("Tradeshift is making headlines.", 'Tradeshift'); ?></h3>
					<a href="#press-contact" class="btn btn-primary-cta"><?php _e("Press inquiries? Contact us", 'Tradeshift'); ?></a>
				</div>
			</div>
			<div class="row">
				<div class="press-quotes">
					<div class="quote-list"><!-- use class="owl-carousel" if it's carousel UI -->
						<div class="quote-wrapper">
							<blockquote><?php _e("This Nordic venture could well end up disrupting not just the business software industry but the banking industry as well.", 'Tradeshift'); ?></blockquote>
							<img alt="Fast Company" src="<?php echo get_template_directory_uri(); ?>/img/press-ts/logo-fastcompany.svg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="press-release">
		<div class="container">
			<div class="row">
				<h2><?php _e("Press Releases", 'Tradeshift'); ?></h2>
				<!-- Let's list the first three press releases -->
				<?php
				$pressrelease_query = new WP_Query(array(
					'post_type'=>'press',
					'posts_per_page'=>3,
					'tax_query'=>array(
						array(
							'taxonomy'=>'press_type',
							'field'=>'slug',
							'terms'=>'press-release',
						)
					)
				));
				?>
				<?php while ($pressrelease_query->have_posts()) : $pressrelease_query->the_post(); ?>
					<?php
					$pr_date = get_post_meta(get_the_ID(),'pr_date',true);
					$pr_time = get_post_meta(get_the_ID(),'pr_time',true);
					$press_title = get_post_meta(get_the_ID(),'press_title',true);
					$pr_teaser = get_post_meta(get_the_ID(),'pr_teaser',true);
					?>
					<div class="pr-list">
						<div class="pr-date"><?= $pr_date; ?></div>
						<div class="pr-title"><a href="<?php the_permalink(); ?>"><?= $press_title; ?></a></div>
						<div class="pr-teaser"><?= $pr_teaser; ?> &nbsp; <a href="<?php the_permalink(); ?>"><?php _e("Read more &raquo;", 'Tradeshift'); ?></a></div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<!-- End of first three PR -->
			</div>
			<!-- Now let's provide an option to show all PRs | starting from the 4th post -->
			<div class="row collapse" id="collapsePR">
				<?php
				$pressrelease_query = new WP_Query(array(
					'post_type'=>'press',
					'posts_per_page'=>42,
					'offset'=>3,
					'tax_query'=>array(
						array(
							'taxonomy'=>'press_type',
							'field'=>'slug',
							'terms'=>'press-release',
						)
					)
				));
				?>
				<?php while ($pressrelease_query->have_posts()) : $pressrelease_query->the_post(); ?>
					<?php
					$pr_date = get_post_meta(get_the_ID(),'pr_date',true);
					$pr_time = get_post_meta(get_the_ID(),'pr_time',true);
					$press_title = get_post_meta(get_the_ID(),'press_title',true);
					$pr_teaser = get_post_meta(get_the_ID(),'pr_teaser',true);
					?>
					<div class="pr-list">
						<div class="pr-date"><?= $pr_date; ?></div>
						<div class="pr-title"><a href="<?php the_permalink(); ?>"><?= $press_title; ?></a></div>
						<div class="pr-teaser"><?= $pr_teaser; ?> &nbsp; <a href="<?php the_permalink(); ?>"><?php _e("Read more &raquo;"); ?></a></div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<button class="btn btn-transparent-white btn-tight btn-pr collapsed" type="button" data-toggle="collapse" data-target="#collapsePR" >&nbsp;</button>
		</div>
	</div>
	<div class="press-mention">
		<div class="container">
			<div class="row">
				<h2><?php _e("See what they're saying about us", 'Tradeshift'); ?></h2>
				<?php
				$pressmention_query = new WP_Query(array(
					'post_type'=>'press',
					'posts_per_page'=>10,
					'tax_query'=>array(
						array(
							'taxonomy'=>'press_type',
							'field'=>'slug',
							'terms'=>'press-mention',
						)
					)
				));
				?>
				<?php while ($pressmention_query->have_posts()) : $pressmention_query->the_post(); ?>
					<?php
					$press_title = get_post_meta(get_the_ID(),'press_title',true);
					$link_article = get_post_meta(get_the_ID(),'link_article',true);
					?>
					<div class="pm-list">
						<div class="pm-mentioned-by-logo"><?php the_post_thumbnail(); ?></div>
						<blockquote><a href="<?php echo $link_article ?>" target="_blank"><?= $press_title; ?></a></blockquote>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<div class="blog-feed">
		<div class="container">
			<div class="row">
				<h2>Feature Stories</h2>
				<?php
				$rss = new DOMDocument();
				$rss->load('https://blog.tradeshift.com/category/news/feed');
				$feed = array();
				foreach ($rss->getElementsByTagName('item') as $node) {
					$item = array (
						'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
						'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
						'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
						'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
						'creator' => $node->getElementsByTagNameNS('http://purl.org/dc/elements/1.1/', 'creator')->item(0)->nodeValue,
					);
					array_push($feed, $item);
				}
				$limit = 3;
				for($x=0;$x<$limit;$x++) {
					$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
					$link = $feed[$x]['link'];
					$description = $feed[$x]['desc'];
					$img = explode("<p>", $description);
					$date = date('F d, Y', strtotime($feed[$x]['date']));
					$creator = $feed[$x]['creator'];
					echo '<article class="blog-feed-article">';
					echo '<a href="'.$link.'">' .$img[0]. '</a>';
					echo '<h4><a href="'.$link.'" title="'.$title.'">'.$title.'</a></h4>';
					echo '<p><span class="pub-date">'.$date.'</span> <span class="author">' .$creator. '</span></p>';
					// echo '<p>'.'<a href="'.$link.'" title="'.$title.'">'.$description = substr($img[1], 0, 160)."...".'</a></p>';
					echo '</article>';
				}
				?>
			</div>
		</div>
	</div>
	<div class="video-feed">
		<div class="container">
			<div class="row">
				<h2><?php _e("TV Appearances", 'Tradeshift'); ?></h2>
				<div class="video-list">
					<div class="video-tn">
						<img class="img-responsive" src="/wp-content/themes/Tradeshift/img/press-ts/CNBC-blockchain.jpg" onclick="fn_vidyard_t67DFpwiY1Yjdqpptr8Bp1();">
						<script type="text/javascript" id="vidyard_embed_code_t67DFpwiY1Yjdqpptr8Bp1" src="//play.vidyard.com/t67DFpwiY1Yjdqpptr8Bp1.js?v=3.1.1&type=lightbox"></script>
					</div>
					<div class="meta"><span class="media-type"><?php _e("Video"); ?></span> &nbsp; | &nbsp; <span class="date"><?php _e("May 22, 2018", 'Tradeshift'); ?></span></div>
					<h4><?php _e("Tradeshift CEO:", 'Tradeshift'); ?></h4>
					<p><?php _e("50% of Trade Payments in the US are Still Check-Based", 'Tradeshift'); ?></p>
				</div>
				<div class="video-list">
					<div class="video-tn">
						<img class="img-responsive" src="/wp-content/themes/Tradeshift/img/press-ts/video-nbc-bullish-on-china.png" onclick="fn_vidyard_216Ss5hj227iHfA69unrz2();">
						<script type="text/javascript" id="vidyard_embed_code_216Ss5hj227iHfA69unrz2" src="//play.vidyard.com/216Ss5hj227iHfA69unrz2.js?v=3.1.1&type=lightbox"></script>
					</div>
					<div class="meta"><span class="media-type"><?php _e("Video"); ?></span> &nbsp; | &nbsp; <span class="date"><?php _e("August 18, 2017"); ?></span></div>
					<h4><?php _e("I’m bullish on china", 'Tradeshift'); ?></h4>
					<p><?php _e("Christian Laang says “political noise” obscures opportunity.", 'Tradeshift'); ?></p>
				</div>
				<div class="video-list">
					<div class="video-tn">
						<img class="img-responsive" src="/wp-content/uploads/2015/01/chl-new-delhi.jpg" onclick="fn_vidyard_wrWRriyNhfBJrUzy2Az4yF();">
						<script type='text/javascript' id='vidyard_embed_code_av9CNoSLhioGW1mPm3k7HA' src='//play.vidyard.com/wrWRriyNhfBJrUzy2Az4yF.js?v=3.1.1&type=lightbox'></script>
					</div>
					<div class="meta"><span class="media-type"><?php _e("Video"); ?></span> &nbsp; | &nbsp; <span class="date"><?php _e("October 7, 2016"); ?></span></div>
					<h4><?php _e("India's SMEs have serious potential", 'Tradeshift'); ?></h4>
					<p><?php _e("Christian Lanng discusses Tradeshift's potential for growth in India's small business sector on CNBC.", 'Tradeshift'); ?></p>
				</div>
				<div class="video-list">
					<div class="video-tn">
						<img class="img-responsive" src="/wp-content/uploads/2016/06/chl-cnbc.jpg" onclick="fn_vidyard_av9CNoSLhioGW1mPm3k7HA();">
						<script type='text/javascript' id='vidyard_embed_code_av9CNoSLhioGW1mPm3k7HA' src='//play.vidyard.com/av9CNoSLhioGW1mPm3k7HA.js?v=3.1.1&type=lightbox'></script>
					</div>
					<div class="meta"><span class="media-type"><?php _e("Video"); ?></span> &nbsp; | &nbsp; <span class="date"><?php _e("June 14, 2016"); ?></span></div>
					<h4><?php _e("We’ve grown rapidly in China on CNBC", 'Tradeshift'); ?></h4>
					<p><?php _e("Christian Lanng discusses the growth and expansion of Tradeshift into foreign markets.", 'Tradeshift'); ?></p>
				</div>
				<div class="video-list">
					<div class="video-tn">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/press-ts/video-lou-dobbs.jpg" onclick="fn_vidyard_v1hG5J$lNQTH$ONdKJe4Sg();">
						<script id="vidyard_embed_code_v1hG5J-lNQTH-ONdKJe4Sg" src="//play.vidyard.com/v1hG5J-lNQTH-ONdKJe4Sg.js?v=3.1.1&type=lightbox" type="text/javascript"> </script>
					</div>
					<div class="meta"><span class="media-type"><?php _e("Video"); ?></span> &nbsp; | &nbsp; <span class="date"><?php _e("June 19, 2014"); ?></span></div>
					<h4><?php _e("Christian Lanng on Lou Dobbs Tonight", 'Tradeshift'); ?></h4>
					<p><?php _e("Christian Lanng, Tradeshift CEO on how the company's platform speeds up the payment process between larger companies and the smaller suppliers in their supply chain.", 'Tradeshift'); ?></p>
				</div>
				<div class="video-list">
					<div class="video-tn">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/press-ts/video-techcrunch.jpg" onclick="fn_vidyard_WXWS5rmepCBH6YHaAoFa6Q();">
						<script id="vidyard_embed_code_WXWS5rmepCBH6YHaAoFa6Q" src="//play.vidyard.com/WXWS5rmepCBH6YHaAoFa6Q.js?v=3.1.1&type=lightbox" type="text/javascript"> </script>
					</div>
					<div class="meta"><span class="media-type"><?php _e("Video"); ?></span> &nbsp; | &nbsp; <span class="date"><?php _e("March 20, 2012"); ?></span></div>
					<h4><?php _e("Christian Lanng on “Keen On...“ TechCrunch TV", 'Tradeshift'); ?></h4>
					<p><?php _e("Christian Lanng, CEO of Tradeshift speaks about why he moved from Denmark to Silicon Valley, how Tradeshift is using distributed data to solve core problems and most importantly, why he thinks “Current Business Software is Crap”.", 'Tradeshift'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="press-award">
		<div class="container">
			<div class="row">
				<h2><?php _e("Awards", 'Tradeshift'); ?></h2>
				<?php
				$pressaward_query = new WP_Query(array(
					'post_type'=>'press',
					'posts_per_page'=>10,
					'tax_query'=>array(
						array(
							'taxonomy'=>'press_type',
							'field'=>'slug',
							'terms'=>'press-award',
						)
					)
				));
				?>
				<?php while ($pressaward_query->have_posts()) : $pressaward_query->the_post(); ?>
					<?php
					$press_title = get_post_meta(get_the_ID(),'press_title',true);
					$link_article = get_post_meta(get_the_ID(),'link_article',true);
					$awarded_mentioned_by = get_post_meta(get_the_ID(),'awarded_mentioned_by',true);
					?>
					<div class="pa-list">
						<h4><a href="<?php echo $link_article ?>" target="_blank"><?= $awarded_mentioned_by; ?></a></h4>
						<p><a href="<?php echo $link_article ?>" target="_blank"><?= $press_title; ?></a></p>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<div id="press-contact"><!-- Empty div for scroll down target of primary CTA --></div>
		</div>
	</div>
	<div class="press-contact">
		<div class="container">
			<div class="row">
				<h2><?php _e("Press questions? Contact us.", 'Tradeshift'); ?></h2>
				<div class="first-contact">
					<img src="<?php echo get_template_directory_uri(); ?>/img/press-ts/dave_pedersen.jpg" alt="Press questions headshot | Tradeshift" />
					<div class="contact-info">
						<h4><?php _e("Dave Pedersen", 'Tradeshift'); ?></h4>
						<h5><?php _e("Director of Communications", 'Tradeshift'); ?></h5>
						<p><a href="mailto:pr@tradeshift.com">pr@tradeshift.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="faq">
		<div class="row">
			<p><a href="<?php global $lang; echo "/${lang}"; ?>press-kit"><?php _e("Press Kit", 'Tradeshift'); ?> <i class="fa fa-arrow-circle-right"></i></a></p>
		</div>
	</div>
</main>
<!-- Modal View of Marketo Form - Currently Not Active -->
<div class="modal fade" id="mktoModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 id="myModalLabel"><?php _e("Request a Demo"); ?></h3>
				<p class="lead"><?php _e("Start your journey with a free demo today."); ?></p>
			</div>
			<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_837"></form>
				<script type="text/javascript">// <![CDATA[
					MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 837, function(form){
						form.vals({"Marketing_Resource_Name__c":"About page"});
					});
					// ]]></script>
				</div>
			</div>
		</div>
	</div>
	<!-- Page specific JS -->
	<!-- Let's call the Quote Carousel plugin shall we -->
	<script>
	$(document).ready(function() {
		$("#quote-carousel").owlCarousel({
			items : 3,
			autoPlay : 4000,
			stopOnHover: true,
			itemsDesktop : [2540,1],
			itemsDesktopSmall : [1199,1],
			itemsTablet: [768,1],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
			lazyLoad : false,
			lazyFollow : true,
			lazyEffect : "fade",
		});
	});
</script>
<!-- Animated scroll down on click of Primary CTA -->
<script>
$(document).ready(function(){
	$('a[href^="#press-contact"]').on('click',function (e) {
		e.preventDefault();
		
		var target = this.hash;
		var $target = $(target);
		
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 1500, 'swing', function () {
			window.location.hash = target;
		});
	});
});
</script>
<!-- Quick hack of Video Positioning for Now | TODO: Put into SASS -->
<style>
@media (min-width: 768px) {
	.press-page .video-feed .video-list {
		min-height: 330px;
	}
}
</style>
<?php get_footer(); ?>
