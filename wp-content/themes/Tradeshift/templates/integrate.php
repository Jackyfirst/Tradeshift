<?php
/*
Template Name: Integrate
Integrating and using Tradeshift
*/
get_header(); ?>

<style>
	.tab-content > .tab-pane {
		display: none !important;
	}

	.tab-content > .active {
		display: block !important;
		visibility: visible !important;
	}
</style>

<?php the_content(); ?>

<?php get_footer(); ?>

<script>
	$(function() {
		$(window.location.hash).tab('show');
	});
</script>
