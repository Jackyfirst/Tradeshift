 <?php
/*
Template Name: Landing Page - DavosX Vue Confirmation Page
*/
get_header('lp-davosxvue'); ?>
<main class="main-content lp-davosx">
	<div id="davosApp" class="section-hero">
		<div class="container">
			<div class="row row-codeform">
				<div class="contents">
					<h1>Thank you.</h1>
					<h3>We will be in touch shortly.</h3>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
	// Deregister globally loaded plugin scripts/styles not needed on this page
	wp_deregister_script( 'contact-form-7' );
	wp_deregister_script( 'main' );
	wp_deregister_script( 'legacyScript' );
	wp_deregister_style( 'contact-form-7' );
	get_footer('lp-davosx'); 
?>