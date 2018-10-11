 <?php
/*
Template Name: Resources
*/
get_header(); ?>

		<!-- Main Content Starts -->
		<main class="main-content resources-page">
			<!-- Hero Section -->
			<div class="hero learn-more">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h1>Knowledge is power.</h1>
							<h3>Go ahead. Enjoy these videos, case studies, webinars &amp; reports from industry thought leaders.</h3>
						</div>
					</div>
					<hr  class="dash" />
				</div>
			</div>
			<?php 
			$featured_resource = array(
				'post_type'=>'resource',
				'meta_key'=>'featured',
				'meta_compare'=>'=', 
				'meta_value'=>1, 
				'posts_per_page'=>1, 
				'orderby' => 'date');
			$featured_resource_query = new WP_Query( $featured_resource );
			?>
			<?php while ($featured_resource_query->have_posts()) : $featured_resource_query->the_post(); ?>
				<?php
				$featured_cta = get_post_meta(get_the_ID(),'pdf_cta',true);
				$sub_info = get_post_meta(get_the_ID(),'sub_info',true);
				$mt_categories = wp_get_object_terms(get_the_ID(), 'resource_media');
				$first_media_category = isset($mt_categories[0]) ? $mt_categories[0] : false;
				?>
				<div class="featured-resource">
					<div class="container">
						<div class="row">
							<div class="contents">
								<h2 class="visible-xs visible-sm">Featured Resource</h2>
								<div class="featured-image">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?></a>
								</div>
								<div class="featured-info">
									<h3 class="hidden-xs hidden-sm">Featured Resource</h3>
									<div class="meta">
										<?php if ($first_media_category) : ?>
											<span class="media-type"><?php echo $first_media_category->name; ?></span>
										<?php endif; ?>
										<span class="date-posted"><?php the_time('M. j, Y') ?></span>
									</div>
									<h4><?php the_title(); ?></h4>
									<p><?= $sub_info; ?></p>
									<a href="<?php the_permalink(); ?>" class="btn btn-primary-cta">Learn more</a>
								</div>
							</div>
						</div>
						<hr class="dash" />
					</div>
				</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<div class="resources">
				<div class="container">
					<div class="row resource-search-filter">
						<div class="contents">
							<div class="row">
							<h2>Start exploring.</h2>
							<!-- Search form - Check to see if you could do search for CPT -->
								<form class="search" id="search-resources" method="get" action="<?php echo home_url(); ?>">
									<input type="hidden" name="post_type" value="resource" />
									<h3 class="filter-heading">Search</h3>
									<div class="input-group">
										<input type="text" name="s" placeholder="Type a keyword">
										<span class="input-group-addon">
											<input type="submit" value="&#xf002;">
										</span>
									</div>
								</form>
								<!-- Filter: By Role -->
								<div class="filter-roles" id="roles-filter">
									<h3 class="filter-heading">Filter by role</h3>
									<select id="filter-roles" class="by-roles" multiple="multiple" placeholder="Select Roles">
										<option data-filter=".accounts-payable" value="Accounts Payable">Accounts Payable</option>
										<option data-filter=".procure-to-pay" value="Procure to Pay">Procure to Pay</option>
										<option data-filter=".finance" value="Finance">Finance</option>
										<option data-filter=".it-professionals" value="IT Professional">IT Professional</option>
										<option data-filter=".small-business" value="Small Business">Small Business</option>
										<option data-filter=".executive" value="Executive">Executive</option>
									</select>
								</div>
								<!-- Filter: By Media Type -->
								<div class="filter-media-types" id="media-types-filter">
									<h3 class="filter-heading">Filter by media type</h3>
									<select id="filter-media-types" class="by-media-type" multiple="multiple" placeholder="Select Media Types" >
										<option data-filter=".analyst-reports" value="Analyst Reports">Analyst Reports</option>
										<option data-filter=".case-study" value="Case Study">Case Study</option>
										<option data-filter=".ebook" value="eBook">eBook</option>
										<option data-filter=".infographic" value="Infographic">Infographic</option>
										<option data-filter=".partner-brief" value="Partner Brief">Partner Brief</option>
										<option data-filter=".product-brief" value="Product Brief">Product Brief</option>
										<option data-filter=".solution-overview" value="Solution Overview">Solution Overview</option>
										<option data-filter=".video" value="Video">Video</option>
										<option data-filter=".webinar" value="Webinar">Webinar</option>
										<option data-filter=".whitepapers" value="Whitepapers">Whitepapers</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row resource-listing" id="list-container" >
						<div class="contents" id="resource-container">
						<?php      
							$resources_query = new WP_Query(array(
								'post_type'=>'resource',
								'posts_per_page'=>-1,
								'orderby'=>'date',
								'order'=>'desc',
							));
						?>
						<?php while ($resources_query->have_posts()) : $resources_query->the_post(); ?>
							<?php
							$roles_categories = wp_get_object_terms(get_the_ID(), 'resource_roles');
							$mt_categories = wp_get_object_terms(get_the_ID(), 'resource_media');
							$first_roles_category = isset($roles_categories[0]) ? $roles_categories[0] : false;
							$first_media_category = isset($mt_categories[0]) ? $mt_categories[0] : false;
							?>
							<div class="resource-list <?php echo $roles_categories->slug; ?> <?php echo $first_media_category->slug; ?>">
								<div class="imagery <?php echo $first_media_category->slug; ?>">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?></a>
								</div>
								<div class="meta">
									<?php if ($first_media_category) : ?>
										<span class="media-type"><?php echo $first_media_category->name; ?></span>
									<?php endif; ?>
									<span class="date-posted"><?php the_time('M. j, Y') ?></span>
								</div>
								<h4><?php the_title(); ?> <a href="<?php the_permalink(); ?>">Learn more</a></h4>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						</div>
						<nav id="page_nav">
							<a href="#"></a>
						</nav>
					</div>
				</div>
			</div>
			<!-- <div class="load-more">
				<div class="container">
					<hr  class="dash" />
					<div class="row">
						<div class="contents">
							<div id="load-more-trigger" class="load-trigger">Load more</div>
						</div>
					</div>
				</div>
			</div> -->

			<div class="fill-out-form">
				<div class="container">
					<div class="row">
						<h2>Learn how Tradeshift can help your enterprise.</h2>
						<form novalidate autocomplete="off" class="form-step-1">
							<div class="form-group">
								<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary-cta" id="submit" onclick="sameEmail(); _gaq.push(['_trackEvent', 'Main CTA', 'Click', 'Resources - footer button' ]);" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
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
				<form id="mktoForm_702"></form>
				<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 702, function(form){
		           form.vals({"Marketing_Resource_Name__c":"Resources Page"});
		           form.onSubmit(function(){	
		              _gaq.push(["_trackEvent", "Main CTA", "Submit", "Resources Page" ]);
		           });
		    	});
				// ]]></script>
		      </div>
		    </div>
		  </div>
		</div>

<?php get_footer(); ?>
