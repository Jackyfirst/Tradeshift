 <?php
/*
Template Name: Sandbox All Things
*/
get_header('no-nav'); ?>
	<!-- Main Content Starts -->
	<main class="main-content" style="height: 400px; padding: 110px">
		<div class="sandbox">
			<div class="container">
				<div class="row">
					<div class="contents">
						<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_1496"></form>
						<script type="text/javascript">// <![CDATA[
					        MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1496, function(form){
					           form.vals({"Marketing_Resource_Name__c":"About page"});
					           form.onSubmit(function(){
					              var $mktoPhoneNumber = $('#Phone').val();
					              // console.log ($mktoPhoneNumber);
					              $.post('//www.usehyper.com/share_app_url', {
					              		platform: "ios",
					              		phone: '+1' + $mktoPhoneNumber
					              	}, 'json');
					              });
					           });
							// ]]>
						</script>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
