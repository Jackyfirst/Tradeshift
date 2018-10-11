<?php
/*
* We use this file as default template for posts
* Currently not used by any CPT
*/
get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php
		$hero_title = get_post_meta(get_the_ID(),'hero_title',true);
		$lead_tagline = get_post_meta(get_the_ID(),'lead_tagline',true);
		$partner_hero_bg_image = get_post_meta(get_the_ID(),'partner_hero_bg_image',true);
		$partner_logo_image = get_post_meta(get_the_ID(),'partner_logo_image',true);
		$mkt_form_id = get_post_meta(get_the_ID(),'mkt_form_id',true);
		$btn_cta = get_post_meta(get_the_ID(),'btn_cta',true);
		$partner_apps_title = get_post_meta(get_the_ID(),'partner_apps_title',true);
		$partner_apps_content = get_post_meta(get_the_ID(),'partner_apps_content',true);
		$partner_apps_imagery = get_post_meta(get_the_ID(),'partner_apps_imagery',true);
		$about_partner_title = get_post_meta(get_the_ID(),'about_partner_title',true);
		$about_partner_content = get_post_meta(get_the_ID(),'about_partner_content',true);
		$about_partner_imagery = get_post_meta(get_the_ID(),'about_partner_imagery',true);
		?>
		<!-- Main Content Starts -->
		<main class="main-content partners partners-default">
			<!-- Hero Section (this uses the mobble plugin via user agent to determine browser size -->
		<?php 
			if (is_mobile()) : ?>
			<div class="hero default" style="background: url('<?= $partner_hero_bg_image; ?>') no-repeat center top">
		<?php else: ?>
			<div class="hero default" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>') no-repeat center top">
		<?php endif; ?>
				<div class="container">
					<div class="row">
						<div  class="intro-text-cta">
							<h1><?= $hero_title; ?></h1>
							<h3><?= $lead_tagline; ?></h3>
							<button class="btn btn-primary-cta" onclick="_gaq.push(['_trackEvent', 'Main CTA', 'Click', 'Partners - header button' ]);" data-toggle="modal" data-target="#mktoModal"><?= $btn_cta; ?></button>
						</div>
					</div>
					<div class="row">
						<div class="powered">
							<div class="powered-wrapper">
								<span class="small">Powered by</span><img src="<?= $partner_logo_image; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="value">
				<div class="container">
					<div class="row">
						<div class="contents">
							<?php the_content(); // Content from Partners Primary Text Editor ?>
						</div>
					</div>
				</div>
			</div>
			<hr class="dash" />
			<div class="features">
				<div class="container">
					<div class="row">
						<h2><?= $partner_apps_title; ?></h2>
						<div class="features-list">
							<?= $partner_apps_content; ?>
						</div>
						<div class="imagery"  style="background: url('<?= $partner_apps_imagery; ?>') no-repeat">
							&nbsp;
						</div>
					</div>
				</div>
			</div>
			<div class="about-partner">
				<div class="container">
					<div class="row">
						<div class="about-partner-copy">
							<h2><?= $about_partner_title; ?></h2>
							    <?= $about_partner_content; ?>
						</div>
						<div class="imagery"  style="background: url('<?= $about_partner_imagery; ?>') no-repeat center top">
							&nbsp;
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part( 'components/partners', 'footer-cta' ); ?>
			
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
				<form id="mktoForm_<?= $mkt_form_id; ?>"></form>
			      <script type="text/javascript">// <![CDATA[
				      MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?= $mkt_form_id; ?>, function(form){
					      form.vals({"Marketing_Resource_Name__c":"Partners - page"});
					      form.onSubmit(function(){
						      _gaq.push(["_trackEvent", "Learn more", "Submit", "Partners page" ]);
					      });
				      });
				      // ]]></script>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>	
<?php get_footer(); ?>
