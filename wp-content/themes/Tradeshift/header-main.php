<?php
/**
 * Header for main home page only
 * This header is exact duplicate to header.php except for IE9 and css references
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php get_template_part('components/head', 'google-tag-manager'); ?>
	<?php
	if($_SERVER['SERVER_NAME'] == "tradeshift.com"): ?>
		<script src="https://cdn.optimizely.com/js/8259421717.js"></script>
	<?php else: ?>
		<script src="https://cdn.optimizely.com/js/9738173424.js"></script>
	<?php endif; ?>

	<!-- Global Head HTML Markup -->
	<?php get_template_part( 'components/head', 'sitewide-main' ); ?>

	<link href="<?php echo get_template_directory_uri(); ?>/css/campaigns-gov3.css?ver=20180525.4" rel="stylesheet">

	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	
	<!-- Main CSS Compiled from SASS folder | Production -->
	<link href="<?php echo get_template_directory_uri() . '/css/style.css?v=' . filemtime(get_template_directory() . '/css/style.css' );?>" rel="stylesheet">

	<!-- Wordpress Generated from inc_enqueue -->
	<?php wp_head(); ?>

	<!-- Google Analytics Tracking Code | analytics.js -->
	<?php get_template_part( 'components/head', 'google-analytics' ); ?>

	<meta name="google-site-verification" content="CIk8bGSQZ606YaoEugH2DZEiLZPrv253vy6Y_aeFooo" />

	<!-- Load Marketo Form JS -->
	<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
</head>


<body <?php body_class(); ?>>
<?php get_template_part('components/foot', 'google-tag-manager'); ?>
<div class="content">

<!-- Header incl. Brand and Sitewide Nav -->
<?php get_template_part( 'components/nav', 'header-sitewide-main-slide-out' ); ?>
