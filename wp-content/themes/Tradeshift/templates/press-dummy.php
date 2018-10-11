 <?php
/*
Template Name: Press - D
*/
get_header(); ?>

		<!-- Main Content Starts -->
		<main class="main-content pressed">
			<div class="container">&nbsp;</div>
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
				<form id="mktoForm_837"></form>
				<script type="text/javascript">// <![CDATA[
		        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 837, function(form){
		           form.vals({"Marketing_Resource_Name__c":"About page"});
		           form.onSubmit(function(){
		              _gaq.push(["_trackEvent", "Main CTA", "Submit", "About page" ]);
		           });
		    	});
				// ]]></script>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Page specific JS -->
		<!-- Let's call the Quote Carousel plugin shall we -->

<?php get_footer(); ?>
