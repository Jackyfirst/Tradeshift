<?php
/*
Template Name: WEF2016 - Davos
*/

$all_locations = get_terms('events-webinars-location', 'hide_empty=0');
$all_types = get_terms('events-webinars-type', 'hide_empty=0');
$all_roles = get_terms('resource_roles', 'hide_empty=0');
$all_media_types = get_terms('resource_media', 'hide_empty=0');

get_header();
?>
<style>
	.tweets-container {
		overflow: auto !important;
	}
</style>
<!-- Main Content Starts -->
<main class="main-content wef2016-davos">
	<!-- Hero Section -->
	<div class="hero intro">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h1><?php _e("Tradeshift at Davos", 'Tradeshift'); ?></h1>
					<h3><?php _e("Get the latest updates, interviews and panels from Davos 2018 here.", 'Tradeshift'); ?></h3>
					<a href="https://itunes.apple.com/us/app/davosx-2017/id1187277815" target="_blank" title="DavosX App | Tradeshift" class="app"><?php _e("Download the DavosX app to stay up to date.", 'Tradeshift'); ?></a>
				</div>
			</div>
		</div>
		<div class="row video-of-the-day">
			<div class="container">
				<div class="row" style="display: flex;">
					<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/Tradeshift/youtube-live-embed-master/demo.php'; ?>
				</div>
			</div>
		</div>
		<a href="#list-container"><div class="icon-down-arrow hidden-sm hidden-xs"><?php _e("Learn more", 'Tradeshift'); ?></div></a>
		<div class="arrow"></div>
	</div>
	<div class="blog-feed" id="list-container">
		<div class="container">
			<div class="row">
				<h2><?php _e("Tradeshift at Davos", 'Tradeshift'); ?> 2018</h2>
				<div class="contents">
					<?php
					$rss = new DOMDocument();
					$rss->load('https://blog.tradeshift.com/category/davos/feed');
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
					$limit = 4;
					for($x=0;$x<$limit;$x++) {
						$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
						$link = $feed[$x]['link'];
						$description = $feed[$x]['desc'];
						$img = explode("<p>", $description);
						$date = date('F d, Y', strtotime($feed[$x]['date']));
						$creator = $feed[$x]['creator'];
						echo '<article class="blog-feed-article">';
						echo '<a href="'.$link.'">' .$img[0]. '</a>';
						echo '<p><span class="pub-date">'.$date.'</span> <span class="author">' .$creator. '</span></p>';
						echo '<h4><a href="'.$link.'" title="'.$title.'">'.$title.'</a></h4>';
						echo '</article>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<hr class="visible-xs" />
	<div class="tweets-davos hidden-xs" style="-ms-overflow-style:none !important">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><i class="fa fa-twitter"> </i> &nbsp; <?php _e('what people are saying', 'Davos'); ?></h2>
					<div class="twitter-feed">
						<div id="twStream" class="tweets-container">
							<!-- Tweets about @Tradeshift AND #davos | Use twFetcher-davos.js plugin to show tweets -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row resource-listing" >
		<div class="container" id="resource-container">
			<div class="row">
				<h2><?php _e("Tradeshift at Davos", 'Tradeshift'); ?> 2017</h2>
				<div class="contents">
					<?php
					$davos_event = array(
						'post_type'=>'resource',
						'meta_key'=>'davos_event',
						'meta_compare'=>'.',
					'meta_value'=>1,
					'posts_per_page'=>10,
					'orderby' => 'date');
					$davos_event_query = new WP_Query( $davos_event );
					?>
					<?php while ($davos_event_query->have_posts()) : $davos_event_query->the_post(); ?>
						<?php
						$roles_categories = wp_get_object_terms(get_the_ID(), 'resource_roles');
						$mt_categories = wp_get_object_terms(get_the_ID(), 'resource_media');

						$filter_classes = array();
						foreach ($roles_categories as $term) {
							$filter_classes[] = 'filter-role-' . $term->term_id;
						}
						foreach ($mt_categories as $term) {
							$filter_classes[] = 'filter-media-' . $term->term_id;
						}
						$first_media_category = isset($mt_categories[0]) ? $mt_categories[0] : false;
						?>
						<div class="resource-list <?php echo implode('.', $filter_classes); ?>">
							<div class="imagery <?php echo $first_media_category->slug; ?>">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?></a>
							</div>
							<div class="meta">
								<?php if ($first_media_category) : ?>
									<span class="media-type"><?php echo $first_media_category->name; ?></span>
								<?php endif; ?>
								<span class="date-posted"><?php the_time('M. j, Y') ?></span>
							</div>
							<h4><?php the_title(); ?> <a href="<?php the_permalink(); ?>"><?php _e("Learn more", 'Tradeshift'); ?></a></h4>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="start-exploring">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Start Exploring", 'Tradeshift'); ?></h2>
					<div class="resource-wrapper">
						<a class="trigger-res-2" href="http://tradeshift.com/resources/tradeshift-buy-video/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/resources-demo-vid.jpg" /></a>
						<p><?php _e("Tradeshift Buy Demo ", 'Tradeshift'); ?><br class="visible-sm" /><a class="trigger-res-2" href="http://tradeshift.com/resources/tradeshift-buy-video">Watch video &raquo;</a></p>
					</div>
					<div class="resource-wrapper">
						<a class="trigger-res-2" href="http://tradeshift.com/resources/essential-guide-to-supplier-management/" ><img class="img-responsive" src="http://3ggqje2jhgjp45f9yd48ay211i1.wpengine.netdna-cdn.com/wp-content/uploads/2015/09/suppliermgmt_ebook_rescenter.jpg" /></a>
						<p><?php _e(" Essential Guide to ", 'Tradeshift'); ?><br/><?php _e("Supplier Management", 'Tradeshift'); ?><a class="trigger-res-2" href="http://tradeshift.com/resources/essential-guide-to-supplier-management/"> Read paper &raquo;</a></p>
					</div>
					<div class="resource-wrapper">
						<a class="trigger-res-3" href="http://tradeshift.com/resources/ts-buy"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/solutions/buy/resources-vision.jpg" /></a>
						<p><?php _e("Tradeshift Buy Vision ", 'Tradeshift'); ?><br class="visible-sm" /><a class="trigger-res-3" href="http://tradeshift.com/resources/ts-buy">Read paper &raquo;</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fill-out-form">
		<div class="container">
			<div class="row">
				<h2><?php _e("Learn how Tradeshift can help your enterprise.", 'Tradeshift'); ?></h2>
				<form novalidate autocomplete="off" class="form-step-1" onsubmit="return false;">
					<div class="form-group">
						<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-primary-cta" id="getStartedResources" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Let's get started", 'Tradeshift'); ?></button>
					</div>
				</form>
			</div>
			<div class="row">
				<p class="sub"><?php _e("Tradeshift takes your privacy seriously.", 'Tradeshift'); ?><br /><?php _e(" We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.", 'Tradeshift'); ?></p>
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
				<p class="lead"><?php _e("Start your journey with a free demo today."); ?></p>
			</div>
			<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_759"></form>
				<script type="text/javascript">// <![CDATA[
					MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 759, function(form){
						form.vals({"Marketing_Resource_Name__c":"Resource Center Footer"});
					});
					// ]]></script>
			</div>
		</div>
	</div>
</div>
<script>
	$('.checkbox-dropdown').click(function () {
		$(this).toggleClass('is-active');
	});
	$('.checkbox-dropdown-list').on('click', function(event){
		if($('.checkbox-dropdown').hasClass('is-active')) $('.checkbox-dropdown').removeClass('is-active');
	});

	$('body').click(function(e){
		var $target = $(e.target);

		var closeDropdowns = $('.checkbox-dropdown');
		if ($target.is('.checkbox-dropdown, .checkbox-dropdown *')) {
			var $dropdown = $target.hasClass('checkbox-dropdown') ? $target : $target.closest('.checkbox-dropdown');
			closeDropdowns = closeDropdowns.not($dropdown);
		}
		closeDropdowns.removeClass('is-active');
	});

	$(".checkbox-dropdown ul").click(function(e) {
		e.stopPropagation();
	});
</script>

<script>
	$(document).ready(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + '.');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	}); // jquery ends
</script>
<?php get_footer(); ?>
