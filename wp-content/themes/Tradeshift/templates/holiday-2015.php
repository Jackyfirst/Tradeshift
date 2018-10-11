 <?php
/*
Template Name: Holiday Campaign 2015
*/
get_header('holiday2015'); ?>

<body id="holiday2015" <?php body_class(); ?>>
<?php get_template_part( 'components/body', 'google-tag-manager' ); ?>

<!-- Header incl. Brand and Sitewide Nav -->
<?php get_template_part( 'components/nav', 'header-sitewide' ); ?>

		<!-- Main Content Starts -->
		<main class="main-content holiday-lp-2015">
			<!-- Hero Section -->
			<div id="snowfall" class="hero">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h1><span class="first-name"></span><br />Happy Holidays!</h1>
							<h3>Did your name make the nice list?</h3>
							<button id="play-video-holiday-2015" class="btn btn-play-mandarin" > &nbsp;</button>
							<script>
								// RegEx for URL Parameter
								function getParameterByName(name) {
								    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
								    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
								        results = regex.exec(location.search);
								    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
								};

								// Grab the First Name from URL Parameter, then append to element
								var firstName = getParameterByName('firstName');
								$('.first-name').append(firstName);

								// Vidyard: Read the custom ID that was merged into the campaign email as a query string parameter
							    // Parameter should be "custom_id" e.g. http://www.landingpage.com?custom_id={merge field value}
							    var videoID = getParameterByName('custom_id');
							    if (videoID[videoID.length-1] == "/") {
							      videoID = videoID.substring(0,videoID.length-1);
							    }

							    // Vidyard: Create a script tag with dynamic attributes based on the Custom ID of video
								var embedScript=document.createElement('script');
								embedScript.type='text/javascript';
								embedScript.id='vidyard_embed_code_vO4XEEKxfeHJRwBfkqD8jA';
								embedScript.src='//play.vidyard.com/vO4XEEKxfeHJRwBfkqD8jA.js?v=3.1.1&type=lightbox&autoplay=1&html5_first=1&custom_id='+videoID;

								// Insert the script inside element
								$("#play-video-holiday-2015").attr('onclick', 'fn_vidyard_vO4XEEKxfeHJRwBfkqD8jA();');
								$("#play-video-holiday-2015").append(embedScript);

								// Check for custom_id URL Parameter; if present, trigger the video onLoad
								var field = 'custom_id';
								var url = window.location.href;
								var urlParameterQuestionMark = url.indexOf('?' + field + '=');
								var urlParameterAmpersand = url.indexOf('&' + field + '=');
								if(urlParameterQuestionMark != -1 || urlParameterAmpersand != -1) {
									// Insert the script inside body element
									$('#holiday2015') .attr('onload', 'fn_vidyard_vO4XEEKxfeHJRwBfkqD8jA();');
								};
							</script>
							<p>Watch to find out</p>
						</div>
						<object class="santa" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/holiday2015/santa.svg"></object>
					</div>
				</div>
			</div>
			<div class="bonus">
				<div class="container">
					<div class="row">
						<div class="contents">
							<div class="contents-wrapper">
								<h2>Your Christmas bonus!</h2>
								<p>To reward you for your hard work all year, Santa and Tradeshift have come together to create a special present for you — insider tips on how Santa, the original procurement expert, continues to have the best procurement practices of all time.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="book">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Play it, download it, keep it</h2>
							<?php if (is_mobile()): ?>
							<div id="zoom-viewport">
								<div id="flipbook-xs" class="flipbook-xs">
									<div><img src="<?php echo get_template_directory_uri(); ?>/img/holiday2015/book-xs/Flipbook-cover-min.png" class="flipbook-cover" /></div>
									<?php
										for ($x = 3; $x <= 34; $x++) {
											echo '<div><img src="'.get_template_directory_uri().'/img/holiday2015/book-xs/Flipbook'.$x.'-min.png" /></div>';
										}
									?>
								</div>
							</div>
							<script>
								$("#flipbook-xs").turn({
									width: 250,
									height: 246,
									// autoCenter: true,
									// turnCorners: 'tr, br',
									display: 'single'
								});
								$("#zoom-viewport").zoom({
									flipbook: $("#flipbook-xs")
								});
								$("#zoom-viewport").bind("zoom.swipeRight", function(event) {
									$("#flipbook-xs").turn("previous");
								});
								$("#zoom-viewport").bind("zoom.swipeLeft", function(event) {
									$("#flipbook-xs").turn("next");
								});
							</script>
							<?php elseif (is_tablet()): ?>
								<div id="flipbook-tablet" class="flipbook-tablet">
								<div>Tradeshift How Santa Procures Things</div>
								<div><img src="<?php echo get_template_directory_uri(); ?>/img/holiday2015/book-sm/Flipbook1-min.png" /></div>
								<div><img src="<?php echo get_template_directory_uri(); ?>/img/holiday2015/book-sm/Flipbook2-min.png" class="flipbook-cover" /></div>
								<?php
									for ($x = 3; $x <= 36; $x++) {
										echo '<div><img src="'.get_template_directory_uri().'/img/holiday2015/book-sm/Flipbook'.$x.'-min.png" /></div>';
									}
								?>
							</div>
							<script>
								$("#flipbook-tablet").bind("turning", function(event, page) {
								    if (page==1)
								      event.preventDefault();
								});
								$("#flipbook-tablet").turn({
									page: 2,
									when: {
										start: function(event, pageObject, corner) {
										   if (pageObject.next==1) 
										     event.preventDefault();
										}, 
										turning: function(event, page, view) {
										   if (page==1)
										      event.preventDefault();
										}
									},
									width: 682,
									height: 342,
									// autoCenter: true,
									turnCorners: 'tr, br',
									display: 'double'
								});
							</script>
							<?php else: ?>
							<div id="flipbook-desktop" class="flipbook-desktop">
								<div>Tradeshift How Santa Procures Things</div>
								<div><img src="<?php echo get_template_directory_uri(); ?>/img/holiday2015/book-md/Flipbook1-min.png" /></div>
								<div><img src="<?php echo get_template_directory_uri(); ?>/img/holiday2015/book-md/Flipbook2-min.png" class="flipbook-cover" /></div>
								<?php
									for ($x = 3; $x <= 36; $x++) {
										echo '<div><img src="'.get_template_directory_uri().'/img/holiday2015/book-md/Flipbook'.$x.'-min.png" /></div>';
									}
								?>
							</div>
							<script>
								$("#flipbook-desktop").bind("turning", function(event, page) {
								    if (page==1)
								      event.preventDefault();
								});
								$("#flipbook-desktop").turn({
									page: 2,
									when: {
										start: function(event, pageObject, corner) {
										   if (pageObject.next==1) 
										     event.preventDefault();
										}, 
										turning: function(event, page, view) {
										   if (page==1)
										      event.preventDefault();
										}
									},
									width: 864,
									height: 432,
									// autoCenter: true,
									turnCorners: 'tr, br',
									display: 'double'
								});
							</script>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="share">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h2>Spread the holiday cheer<br class="hidden-xs" />to your friends and colleagues.</h2>
							<div class="social-sharing-wrapper">
								<div class="addthis_toolbox addthis_default_style "><a id="share-with-friends" class="btn btn-secondary-cta btn-orange addthis_button_expanded">Share with friends</a></div>
								<div class="social-icons">
									<a id="share-facebook" class="social-icon"
										href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"
										onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=250,width=600');return false;"><i class="fa fa-facebook fa-2x"></i></a> &nbsp;
									<a id="share-twitter" class="social-icon" 
										href="http://twitter.com/share?text=Did your name make the nice list?&amp;url=<?php the_permalink(); ?>&amp;via=Tradeshift" 
										onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=240,width=600');return false;"><i class="fa fa-twitter fa-2x"></i></a> &nbsp;
									<a id="share-gplus" class="social-icon"
										href="https://plus.google.com/share?url=<?php the_permalink(); ?>"
										onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=360,width=550');return false;"><i class="fa fa-google-plus fa-2x"></i></a> &nbsp;
									<a id="share-linkedin" class="social-icon" 
										href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=Did your name make the nice list?&amp;summary=<?php echo $excerpt;?>&amp;source=Tradeshift Holiday Page"
										onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=240,width=600');return false;"><i class="fa fa-linkedin fa-2x"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- JS Page Specific -->
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-566b4a375d3d5c38" async="async"></script>
		<style>
			.aticon-expanded {
				display: none !important;
			}
		</style>


<?php get_footer(); ?>