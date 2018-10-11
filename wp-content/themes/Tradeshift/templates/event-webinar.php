 <?php
/*
Template Name: Events/Webinars
*/

$all_locations = get_terms('events-webinars-location', 'hide_empty=0');
$all_types = get_terms('events-webinars-type', 'hide_empty=0');

get_header();
?>
		<!-- Main Content Starts -->
		<main class="main-content events-webinars-page">
			<!-- Hero Section -->
			<div class="hero ts-live">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h1><?php _e("<span>Tradeshift</span> Webinars &amp; Events", 'Tradeshift'); ?></h1>
							<h3><?php _e("Meet the brightest influencers, discuss buzzworthy trends, and uncover current best practices. Our webinars and events are hosted around the world. Stop by – we’d love to meet you.", 'Tradeshift'); ?></h3>
						</div>
					</div>
					<hr  class="dash" />
				</div>
			</div>
			<?php 
			$featured_event = array(
				'post_type'=>'event-webinar',
				'meta_key'=>'featured',
				'meta_compare'=>'=',
				'meta_value'=>1,
				'posts_per_page'=>1,
				'orderby' => 'date');
			$featured_event_query = new WP_Query( $featured_event );
			?>
			<?php while ($featured_event_query->have_posts()) : $featured_event_query->the_post(); ?>
				<?php
				$featured_cta = get_post_meta(get_the_ID(),'pdf_cta',true);
				$featured_leading = get_post_meta(get_the_ID(),'featured_leading',true);
				$type_categories = wp_get_object_terms(get_the_ID(), 'events-webinars-type');
				$first_type_category = isset($type_categories[0]) ? $type_categories[0] : false;
				$locations_categories = wp_get_object_terms(get_the_ID(), 'events-webinars-location');
				$first_location_category = isset($locations_categories[0]) ? $locations_categories[0] : false;
				$event_date = get_post_meta(get_the_ID(),'event_date',true);
				$reg_link = get_post_meta(get_the_ID(),'reg_link',true);
				$reg_cta = get_post_meta(get_the_ID(),'reg_cta',true);
				?>
				<div class="featured-event">
					<div class="container">
						<div class="row">
							<div class="contents">
								<h2 class="visible-xs visible-sm"><?php _e("Featured Event", 'Tradeshift'); ?></h2>
								<div class="featured-image <?php echo $first_type_category->slug; ?>">
									<?php if ($reg_link) : ?>
										<a href="<?= $reg_link; ?>" target="_blank"><?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?></a>
									<?php else: ?>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?></a>
									<?php endif; ?>
								</div>
								<div class="featured-info">
									<h3 class="hidden-xs hidden-sm"><?php _e("Highlight of the Month", 'Tradeshift'); ?></h3>
									<div class="meta">
										<?php if ($first_type_category) : ?>
											<span class="type <?php echo $first_type_category->slug; ?>"><?php echo $first_type_category->name; ?></span>
										<?php endif; ?>
										<?php if ($first_location_category) : ?>
											<span class="event-location"><?php echo $first_location_category->name; ?></span>
										<?php endif; ?>
											<span class="date-posted"><?= $event_date; ?></span>
									</div>
									<h4><?php the_title(); ?></h4>
									<p><?= $featured_leading; ?></p>
									<?php if ($reg_link) : ?>
										<a href="<?= $reg_link; ?>" class="btn btn-primary-cta" target="_blank"><?= $reg_cta; ?></a>
									<?php else: ?>
										<a href="<?php the_permalink(); ?>" class="btn btn-primary-cta"><?php _e("Learn more"); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<hr  class="dash visible-xs" />
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<div class="events-intro hidden-xs">
				<div class="container">
					<div class="row">
					&nbsp;
					</div>
				</div>
			</div>

			<div class="events-filters-listings">
				<div class="container">
					<div class="row events-search-filter">
						<div class="contents">
							<div class="row">
							<h2><?php _e("Start exploring.", 'Tradeshift'); ?></h2>
								<!-- Search form - uses IsotopeJS RT Filter by title -->
								<!-- <div class="search">
									<h3 class="filter-heading">Search</h3>
									<div class="input-group">
										<span class="input-group-addon"> </span>
										<input type="text" id="search-events" placeholder="Search Event Title">
									</div>
								</div -->
								<!-- Filter: By Locations and Type -->
								<div class="filter">
									<div class="row" id="options">
										<div class="option-set by-locations" data-group="location">
											<h3 class="filter-heading"><?php _e("Filter by location", 'Tradeshift'); ?></h3>
											<div class="checkbox-dropdown"><?php _e("Select Location(s)", 'Tradeshift'); ?>
												<ul class="checkbox-dropdown-list">
													<?php foreach ($all_locations as $term) : ?>
														<li>
															<input type="checkbox" value=".filter-location-<?php echo $term->term_id; ?>" id="location-filter-option-<?php echo $term->term_id; ?>" />
															<label for="location-filter-option-<?php echo $term->term_id; ?>">
																<?php echo $term->name; ?>
															</label>
														</li>
													<?php endforeach; ?>
												</ul>
											</div>
										</div>

										<div class="option-set by-types" data-group="type">
											<h3 class="filter-heading"><?php _e("Filter by type", 'Tradeshift'); ?></h3>
											<div class="checkbox-dropdown"><?php _e("Select Type(s)", 'Tradeshift'); ?>
												<ul class="checkbox-dropdown-list">
													<?php foreach ($all_types as $term) : ?>
														<li>
															<input type="checkbox" value=".filter-type-<?php echo $term->term_id; ?>" id="type-filter-option-<?php echo $term->term_id; ?>" />
															<label for="type-filter-option-<?php echo $term->term_id; ?>">
																<?php echo $term->name; ?>
															</label>
														</li>
													<?php endforeach; ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row events-listing" id="list-container" >
						<div class="contents" id="events-container">
							<div class="row">
							<?php
								$events_query = new WP_Query(array(
									'post_type'=>'event-webinar',
									// 'meta_key'=>'event_active',
									// 'meta_compare'=>'=',
									// 'meta_value'=>1,
									'posts_per_page'=>-1,
									'orderby'=>'meta_value_num',
									'order'=>'asc',
									'meta_key'=>'event_date_number',
									'meta_query' => array(
										array(
											'key'     => 'event_active',
											'value'   => 1,
											'compare' => '=',
										),
									),
								));
							?>
							<?php while ($events_query->have_posts()) : $events_query->the_post(); ?>
								<?php
								$locations_categories = wp_get_object_terms(get_the_ID(), 'events-webinars-location');
								$types_categories = wp_get_object_terms(get_the_ID(), 'events-webinars-type');
								$reg_link = get_post_meta(get_the_ID(),'reg_link',true);
								$reg_cta = get_post_meta(get_the_ID(),'reg_cta',true);
								$event_date = get_post_meta(get_the_ID(),'event_date',true);
								$event_date_number = get_post_meta(get_the_ID(),'event_date_number',true);

								$filter_classes = array();
								foreach ($locations_categories as $term) {
									$filter_classes[] = 'filter-location-' . $term->term_id;
								}
								foreach ($types_categories as $term) {
									$filter_classes[] = 'filter-type-' . $term->term_id;
								}
								$first_type_category = isset($types_categories[0]) ? $types_categories[0] : false;
								$first_location_category = isset($locations_categories[0]) ? $locations_categories[0] : false;
								?>
								<div class="events-list <?php echo implode(' ', $filter_classes); ?>">
									<div class="imagery <?php echo $first_type_category->slug; ?>">
									<?php if ($reg_link) : ?>
										<a href="<?= $reg_link; ?>" target="_blank"><?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?></a>
									<?php else: ?>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?></a>
									<?php endif; ?>
									</div>
									<div class="meta">
										<?php if ($first_type_category) : ?>
											<span class="type <?php echo $first_type_category->slug; ?>"><?php echo $first_type_category->name; ?></span>
										<?php endif; ?>
										<?php if ($first_location_category) : ?>
											<span class="event-location"><?php echo $first_location_category->name; ?></span>
										<?php endif; ?>
											<span class="date-posted"><?= $event_date; ?></span>
									</div>
									<?php if ($reg_link) : ?>
										<h4><?php the_title(); ?> <a href="<?= $reg_link; ?>" target="_blank"><?= $reg_cta; ?></a></h4>
									<?php else: ?>
										<h4><?php the_title(); ?> <a href="<?php the_permalink(); ?>"><?php _e("Learn more"); ?></a></h4>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="past-webinars">
				<div class="container">
					<div class="row">
						<div class="contents">
						<?php 
						$past_webinars = array(
							'post_type'=>'resource',
							'resource_media'=>'webinar',
							'posts_per_page'=>3,
							'orderby' => 'date',
							'order' => 'DESC');
						$past_webinars_query = new WP_Query( $past_webinars );
						?>
							<div class="webinar-list">
								<h2>Past Webinars</h2>
								<table class="webinars">
								<?php while ($past_webinars_query->have_posts()) : $past_webinars_query->the_post(); ?>
									<tr>
										<td><?php the_time('M. j, Y') ?></td>
										<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
									</tr>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="past-events">
				<div class="container">
					<div class="row">
						<div class="contents">
						<?php
							$past_events = array(
								'post_type'=>'event-webinar',
								'posts_per_page'=>-1,
								'orderby'=>'meta_value_num',
								'order'=>'desc',
								'meta_key'=>'event_date_number',
								'meta_query' => array(
									array(
										'key'     => 'event_active',
										'value'   => 1,
										'compare' => '!=',
									),
								),
							);
						$past_events_query = new WP_Query( $past_events );
						?>
							<div class="event-list">
								<h2>Past Events</h2>
								<table class="events">
								<?php while ($past_events_query->have_posts()) : $past_events_query->the_post(); ?>
									<?php
										$event_date = get_post_meta(get_the_ID(),'event_date',true);
									?>
									<tr>
										<td><?= $event_date; ?></td>
										<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
									</tr>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="resources-cta">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h3><?php _e("Knowledge is power. <a href=\"/resources\">Check out our resources &raquo;</a>", 'Tradeshift'); ?></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="component contact-us-form gradient-orange">
				<div class="container">
					<div class="row">
						<h4><?php _e("See how Tradeshift can help your enterprise.", 'Tradeshift'); ?></h2>
						<button type="button" class="btn btn-cta btn-nm" data-toggle="modal" data-target="#signUpMonthlyEmail"><?php _e("Contact us"); ?></button>
					</div>
				</div>
			</div>
		</main>
		<div class="modal fade" id="signUpMonthlyEmail" tabindex="-1" aria-hidden="true" >
			<div class='modal-close-overlay'></div>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h3 class="myModalLabel"><?php _e("Sign up now", 'Tradeshift'); ?></h3>
						<p class="lead"><?php _e("Sign up for our monthly newsletter. We won't send spam – just pure, unadulterated news, industry insights and event updates.", 'Tradeshift'); ?></p>
					</div>
					<div class="modal-body">
						<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_833" class="newsletter-subscription"></form>
						<script type="text/javascript">// <![CDATA[
				        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 833, function(form){
				           form.vals({"Marketing_Resource_Name__c":"Events Webinar Landing Page"});
				    	});
						// ]]></script>
					</div>
				</div>
			</div>
		</div>
		<!-- JS calls for isotopeJS filtering feature -->
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
<?php get_footer(); ?>
