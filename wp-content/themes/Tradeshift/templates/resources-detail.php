 <?php
/*
Template Name: Resources - Detail Page
*/
get_header(); ?>

		<!-- Main Content Starts -->
		<main class="main-content resources-detail">
			<!-- Resource Content Section -->
			<div class="resource-content-cta-form-related">
				<div class="container">
					<div class="row">
						<div class="resource-content">
							<img src="<?php echo get_template_directory_uri(); ?>/img/resources/fpo-image.jpg" class="img-responsive" />
							<h2>Supply Chain Collaboration: A Platform Approach</h2>
							<p>Whether you are in supply chain, procurement, accounts payable or IT the concept of a platform and a network of connected businesses is likely to impact your function and most definitely will impact your company.</p>
							<ul>
							<li><strong>Supply Chain</strong>:  You know that your supply chain needs to be agile, networked, collaborative and information-driven. How does your current technology support this?</li>
							<li><strong>Procurement</strong>: You know the value you can bring to the business by managing more of your organizations spend. What if you could manage direct, indirect and services spend in one place?</li>
							<li><strong>Accounts Payable:</strong> You know that paper and manual processes slow you down. What if you could easily and quickly connect to all your suppliers and migrate them to e-invoicing? PO, non-PO, small,  large...all.</li>
							<li><strong>IT</strong>: You know the value of a single technology platform for all your supplier interactions. What if there was a platform that easily integrates to your ERP system and enables rapid deployment of new functionality via Apps.</li>
							</ul>
							<p><strong>Watch this webinar to learn more about what a network-powered platform means for your business, your supply chain and your function.</strong></p>
							<h3>Presenters:</h3>
							<img src="http://tradeshift.com/wp-content/uploads/2015/04/2ddba76-150x150.jpg" />
							<h5>Rob van Ipenburg</h5>
							<p class="title">Managing Director, Quyntess</p>
							<p class="bio">Rob is one of Quyntess' founding fathers and shapes and articulates the bottom-up and inside-out Supply Chain Collaboration mission of the company, working with customers and partners.</p>
							<img src="http://tradeshift.com/wp-content/uploads/2015/04/Logo_Quyntess_RGB-250x129.png" width="170" height="88" />
							<div class="clearfix"></div>
							<img src="http://tradeshift.com/wp-content/uploads/2015/03/mihir-150x150.jpg" />
							<h5>Mihir Nanavati</h5>
							<p class="title">SVP of Product, Tradeshift</p>
							<p class="bio">Mihir heads up product strategy, engineering, design and more at Tradeshift. His background and expertise is in freemium, cloud and mobile product management, design and development within lean startups.</p>

							<h3>Resources</h3>
							<ul>
							<li><a href="#">eServices - Online Tools for Tax Professionals</a></li>
							<li><a href="#">OFAC</a></li>
							<li><a href="#">Bureau of Industry and Security</a></li>
							</ul>
						</div>
						<div class="cta-form-related-material">
							<div class="cta-form">
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
							<div class="related-material">
								<div class="row">
									<div class="contents">
										<img src="<?php echo get_template_directory_uri(); ?>/img/resources/fpo-image.jpg" class="img-responsive" />
										<div class="meta">
											<a href="#" class="media-type">Whitepaper</a><span class="date-posted">March 19, 2015</span>
										</div>
										<h5>Good, Better, Best: Get 3 Levels of Savings From Your AP &amp; P2P Process &nbsp; <a href="#">Learn more</a></h5>
									</div>
								</div>
								<div class="row">
									<div class="contents">
										<img src="<?php echo get_template_directory_uri(); ?>/img/resources/fpo-image.jpg" class="img-responsive" />
										<div class="meta">
											<a href="#" class="media-type">Whitepaper</a><span class="date-posted">March 19, 2015</span>
										</div>
										<h5>Good, Better, Best: Get 3 Levels of Savings From Your AP &amp; P2P Process &nbsp; <a href="#">Learn more</a></h5>
									</div>
								</div>
								<div class="row">
									<div class="contents">
										<img src="<?php echo get_template_directory_uri(); ?>/img/resources/fpo-image.jpg" class="img-responsive" />
										<div class="meta">
											<a href="#" class="media-type">Whitepaper</a><span class="date-posted">March 19, 2015</span>
										</div>
										<h5>Good, Better, Best: Get 3 Levels of Savings From Your AP &amp; P2P Process &nbsp; <a href="#">Learn more</a></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fill-out-form">
				<div class="container">
					<div class="row">
						<h2>Get the facts on how Tradeshift can help your enterprise.</h2>
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
				<form id="mktoForm_702"></form>
		      </div>
		    </div>
		  </div>
		</div>

<?php get_footer(); ?>
