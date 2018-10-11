<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?> class="no-js">
<head>
	<?php get_template_part( 'components/head', 'google-tag-manager' ); ?>
	
	<script type="text/javascript" id="" src="//cdn.optimizely.com/js/8259421717.js"></script>
	<!-- Global Head HTML Markup -->
	<?php get_template_part( 'components/head', 'sitewide' ); ?>
	<?php if( is_page('Supply Chain Financing with Tradeshift Pay') ): ?>
	<img src="<?php echo get_template_directory_uri(); ?>/img/supplychainfinance/enterprise-hero-bg.jpg" class="hidden" alt="Supply Chain Financing with Tradeshift" />
	<?php endif; ?>

	<link href="//app-sjst.marketo.com/js/forms2/css/forms2.css" rel="stylesheet">

	<!-- Wordpress Generated from inc_enqueue -->
	<?php wp_head(); ?>

	<!-- Google Analytics Tracking Code | analytics.js -->
	<?php get_template_part( 'components/head', 'google-analytics' ); ?>

</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'components/body', 'google-tag-manager' ); ?>

<!-- Header incl. Brand and Sitewide Nav -->
<?php get_template_part( 'components/nav', 'header-sitewide-main-slide-out' ); ?>