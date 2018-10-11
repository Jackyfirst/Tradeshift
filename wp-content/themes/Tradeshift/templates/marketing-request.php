<?php
/* Template Name: Marketing Request
*/
get_header(); ?>
<link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
<style type="text/css">
	#navMainRow {
		display: none !important;
	}
	.main-content {
		margin-top: 132px
	}
	.wrapper {
		max-width: 970px;
	    width: 100%;
	    margin: 0 auto;
	    position: relative;
	    padding: 0 15px;
	}
	h1 {
		font-size: 44px;
		line-height: 55px;
		font-weight: 400;
		margin-bottom: 11px
	}
	h2 {
		font-size: 20px;
		line-height: 33px;
		color: #1E1E1E;
		font-weight: 400;
	}
	p {
		line-height: 26px
	}
	.wpcf7-list-item {
		display: block;
		width: 100%;
	}
	.label {
		color: #282828;
		padding-left: 0px;
		font-weight: 600;
	}
	.wpcf7-file {
		line-height: 5px;
		padding: 11px;
		width: 395px
	}
	input, select, textarea {
	    background: white;
	    border: 1px solid black !important;
	    height: auto;
	    padding: 5px 11px 5px 11px;
	}
	textarea {
		height: 215px
	}
	.wpcf7-submit {
	    background-color: #F05522 !important;
	    border-radius: 20px;
	    font-size: 18px;
		color: #ffffff !important;
		border: none !important;
		font-size: 14px;
		font-weight: bold;
		margin-top: 22px;
		padding: 10px 20px;
		text-transform: uppercase;
		width: 180px;
	}
	#ui-datepicker-div {
		z-index: 1000 !important;
	}
	@media (max-width: 768px) {
		main {
			width: 320px;
			margin: auto;
		}
		h1 {
			font-size: 33px;
			line-height: 44px
		}
		h2 {
			font-size: 14px
			line-height: 30px
			margin-bottom: 44px
		}
		input[type="text"], input[type="email"],
		input[type="file"], textarea {
			width: 100%;
		}
		.label {
			white-space: pre-wrap !important;
		}
	}
</style>
<main class="main-content">
	<div class="wrapper">
		<div class="row">
			<div class="container">
				<?php 
				if ( have_posts() ): 
					while ( have_posts() ): the_post();
			  			the_content();
					endwhile;
				else: ?>
			  		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/date.format.js"></script>

		<script>
			$(document).ready(function () {
			    $('#Deadline').datepicker();
			});

			//add business days
			function addBusinessDays(d,n) {
			  d = new Date(d.getTime());
			  var day = d.getDay();
			  d.setDate(d.getDate() + n + (day === 6 ? 2 : +!day) + (Math.floor((n - 1 + (day % 6 || 1)) / 5) * 2));
			  return d.format("m/dd/yy")
			}


			$("#turnaround").change(function() {

			console.log("change event");

			//get selected turnaround days
			  var d = new Date();
			  // add selected date to second input field 
			  n = document.getElementById("turnaround").value;
			  if(n == "S - 5 day turnaround") {
			  	// 5 business days
			  	n=5;
			  } else if(n == "M - 6-10 day turnaround") {
			  	// 10 business days
			  	n=10;
			  } else {
			  	// 15 business days
			  	n=15;
			  }
			  n = parseInt(n);
			  
			  
			  // https://github.com/lsmith/addBusinessDays/blob/master/addBusinessDays.js
			  // add 5 business days to today's date
			  d = new Date(d.getTime());
			  var day = d.getDay();
			  d.setDate(d.getDate() + n + (day === 6 ? 2 : +!day) + (Math.floor((n - 1 + (day % 6 || 1)) / 5) * 2));
			  document.getElementById("Deadline").value = d.format("mm/dd/yyyy");
			  
			});
		</script>
<?php get_footer(); ?>