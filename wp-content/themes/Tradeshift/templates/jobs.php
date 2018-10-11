<?php
/*
Template Name: Jobs
*/
get_header(); ?>
<!-- Main Content Starts -->
<main class="main-content jobs-page">
	<!-- Hero Section -->
	<div id="app" class="hero">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active" style="background: url(<?php echo get_template_directory_uri(); ?>/img/jobsv2/Job_full_spread_1.jpg) no-repeat center center;">
			    </div>

			    <div class="item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/jobsv2/Job_full_spread_2.jpg) no-repeat center center;">
			    </div>

			    <div class="item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/jobsv2/Job_full_spread_3.jpg) no-repeat center center;">
			    </div>

			    <div class="item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/jobsv2/Job_full_spread_4.jpg) no-repeat center center;">
			    </div>

			    <div class="item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/jobsv2/Job_full_spread_5.jpg) no-repeat center center;">
			    </div>

			    <div class="item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/jobsv2/Job_full_spread_6.jpg) no-repeat center center;">
			    </div>

			    <div class="item" style="background: url(<?php echo get_template_directory_uri(); ?>/img/jobsv2/Job_full_spread_7.jpg) no-repeat center center;">
			    </div>
			</div>
		</div>
		<div class="overlay-black"></div>
        <div class="container">
            <div class="row">
                <div class="contents">
                	<h1><?php _e("Love a challenge? <br />So do we.", "Tradeshift") ?></h1>
					<h3><?php _e("A collaborative culture. A disruptive vision. A better way. It's how we live and what we strive for.", 'Tradeshift'); ?></h3>
					<div class="open-positions">
						<a id="nav-notxs-open-positions-button" href="#open-positions" name="#open-positions" class="btn btn-primary-cta btn-small"><?php _e("Open positions", 'Tradeshift'); ?></a>
					</div>
                </div>
            </div>
        </div>
    </div>

	<div class="section-menu">
		<div class="container">
			<div class="row">
				<?php if (is_mobile()): ?>
					<div class="section-nav dropdown">
						<a data-target="#" href="#" data-toggle="dropdown" role="button"><?php _e("Why Work Here?", 'Tradeshift'); ?>?</a>
						<ul class="dropdown-menu">
							<li><a href="#culture" name="#culture"><?php _e("Culture", 'Tradeshift'); ?></a></li>
							<li><a href="#teams" name="#teams"><?php _e("Teams", 'Tradeshift'); ?></a></li>
							<li><a href="#perks-benefits" name="#perks-benefits"><?php _e("Perks &amp; Benefits", 'Tradeshift'); ?></a></li>
							<li><a href="#day-in-the-life" name="#day-in-the-life"><?php _e("A Day in the Life", 'Tradeshift'); ?></a></li>
						</ul>
					</div>
				<?php else: ?>
					<div class="section-nav">
						<ul>
							<li><a href="#culture" name="#culture"><?php _e("Culture", 'Tradeshift'); ?></a></li>
							<li><a href="#teams" name="#teams"><?php _e("Teams", 'Tradeshift'); ?></a></li>
							<li><a href="#perks-benefits" name="#perks-benefits"><?php _e("Perks &amp; Benefits", 'Tradeshift'); ?></a></li>
							<li><a href="#day-in-the-life" name="#day-in-the-life"><?php _e("A Day in the Life", 'Tradeshift'); ?></a></li>
						</ul>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="build-amazing">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Let's build something amazing", 'Tradeshift'); ?></h2>
					<p><?php _e("We’re challenging the status quo of boring, bureaucratic software that was built on the belief that silos and control are the best way to get ahead. We’re fighting for an open, connected way of doing business; our method of choice is a platform that empowers everyone in the trade process, not just the top players.", 'Tradeshift'); ?></p>
					<p><a href="javascript:void(0)" onclick="fn_vidyard_6BaCGbuZHUAgkxjqcJQTDe();"><?php _e("See how we work", 'Tradeshift'); ?></a></p>
					<script id="vidyard_embed_code_6BaCGbuZHUAgkxjqcJQTDe" src="//play.vidyard.com/6BaCGbuZHUAgkxjqcJQTDe.js?v=3.1.1&type=lightbox"></script>
				</div>
			</div>
		</div>
	</div>
	<div id="culture" class="culture-thing">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div id="culture-carousel" class="owl-carousel">
						<?php if (is_mobile()): ?>
						<div id="item1" class="item">
							<h2>It's a You Thing</h2>
							<p><strong>You matter</strong>. It’s a regular occurrence to see the CEO around the office. And it’s encouraged that you stop and chat, or sit with him at lunch to share thoughts and ideas. We’re big on <strong>communication</strong>. It’s refreshing.</p>
							<blockquote>Clear and consistent communication – The Big Sync and OKR's are incredibly important to get aligned with the company strategies and goals and have a recurring format that is <strong>engaging</strong> and easy to understand is actually pretty unique based on my work experience.</blockquote>
						</div>
						<div id="item2" class="item">
							<h2>It's a People Thing</h2>
							<p>The company <strong>ethos — inclusion, collaboration, meritocracy —</strong> aren’t just words, they’re really what drives the company. Regular company-wide check-ins and team-building are just part of the culture. </p>
							<blockquote><strong>Disruptive vision</strong>...was the #1 driver for joining Tradeshift. This wasn't a company that wanted to sell software, it wanted to make a difference in how companies interact... There was huge drive and camaraderie, heated whiteboard discussions where everybody was heard.</blockquote>
						</div>
						<div id="item3" class="item">
							<h2>It's a Culture Thing</h2>
							<p>With 15 global offices and employees from 43+ countries, Tradeshift is incredibly <strong>diverse</strong>. Nowhere else will you get so many opportunities to learn something new and different every day.</p>
							<blockquote>It is really nice to have a company that is truly global at such a young stage, you get exposed to and are interacting with much more diverse challenges and people...with Tradeshift, global was early and often - with people and companies we support on the platform from all over Europe, North America, and Asia.</blockquote>
						</div>
						<div id="item4" class="item">
							<h2>It's a Unity Thing</h2>
							<p>We don’t say <strong>work/life balance/integration</strong> just because we like the sound of our own voice. We’ve been voted one of <a href="http://greatist.com/health/healthiest-companies" target="_blank">America’s Healthiest Companies to Work For</a>...twice.</p>
							<blockquote>The ‘I'll do whatever it takes’ attitude is pervasive across all of Tradeshift and it inspires me to work even harder. Then we do things like global team camp in Barcelona, have in office 'health days' with massages, etc. &mdash; it’s pretty awesome.</blockquote>
						</div>
					<?php else: ?>
						<div class="item">
							<div class="imagery">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/culture-1-sm.jpg" />
							</div>
							<div class="description"><h2>It's a You Thing</h2>
							<p><strong>You matter</strong>. It’s a regular occurrence to see the CEO around the office. And it’s encouraged that you stop and chat, or sit with him at lunch to share thoughts and ideas. We’re big on <strong>communication</strong>. It’s refreshing.</p>
							<blockquote>Clear and consistent communication – The Big Sync is incredibly important to get aligned with the company strategies and goals and have a recurring format that is <strong>engaging</strong> and easy to understand is actually pretty unique based on my work experience.</blockquote></div>
						</div>
						<div class="item">
							<div class="imagery">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/culture-2-sm.jpg" />
							</div>
							<div class="description"><h2>It's a People Thing</h2>
							<p>The company <strong>ethos — inclusion, collaboration, meritocracy —</strong> aren’t just words, they’re really what drives the company. Regular company-wide check-ins and team-building are just part of the culture. </p>
							<blockquote><strong>Disruptive vision</strong>...was the #1 driver for joining Tradeshift. This wasn't a company that wanted to sell software, it wanted to make a difference in how companies interact... There was huge drive and camaraderie, heated whiteboard discussions where everybody was heard.</blockquote></div>
						</div>
						<div class="item">
							<div class="imagery">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/culture-3-sm.jpg" />
							</div>
							<div class="description"><h2>It's a Culture Thing</h2>
							<p>With 9 global offices and employees from 43+ countries, Tradeshift is incredibly <strong>diverse</strong>. Nowhere else will you get so many opportunities to learn something new and different every day.</p>
							<blockquote>It is really nice to have a company that is truly global at such a young stage, you get exposed to and are interacting with much more diverse challenges and people...with Tradeshift, global was early and often - with people and companies we support on the platform from all over Europe, North America, and Asia.</blockquote></div>
						</div>
						<div class="item">
							<div class="imagery">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/culture-4-sm.jpg" />
							</div>
							<div class="description"><h2>It's a Unity Thing</h2>
							<p>We don’t say <strong>work/life balance/integration</strong> just because we like the sound of our own voice. We’ve been voted one of <a href="http://greatist.com/health/healthiest-companies" target="_blank">America’s Healthiest Companies to Work For</a>...twice.</p>
							<blockquote>The ‘I'll do whatever it takes’ attitude is pervasive across all of Tradeshift and it inspires me to work even harder. Then we do things like global team camp in Barcelona, have in office 'health days' with massages, etc. &mdash; it’s pretty awesome.</blockquote></div>
						</div>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="teams" class="hey-gang">
		<div class="container">
			<h2><?php _e("Say hey to the gang", 'Tradeshift'); ?></h2>
			<div class="row tech-gcs">
				<div class="contents">
					<div class="tech">
						<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-tech.png" />
						<h3><?php _e("Tech", 'Tradeshift'); ?></h3>
						<h4><?php _e('Engineering &bull; Product', 'Tradeshift'); ?></h4>
						<p><?php _e("We’re changing the ways things have been done for years—building software that influence people’s lives. Read our <a href=\"http://blog.tradeshift.com/what-to-do/\" target=\"_blank\">Engineering &amp; Product Principles manifesto here</a>. #passion"); ?><a href="#" onclick="fn_vidyard_OYnR8RlhE5ED9JE8vHGU5A();"><?php _e("Watch to learn more &raquo;"); ?></a>
							<script id="vidyard_embed_code_OYnR8RlhE5ED9JE8vHGU5A-g" src="//play.vidyard.com/OYnR8RlhE5ED9JE8vHGU5A.js?v=3.1.1&type=lightbox"></script></p>
					</div>
					<div class="gcs">
						<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-gcs.png" />
						<h3><?php _e("Global Customer Services", 'Tradeshift'); ?></h3>
						<h4>Service Sales &bull; Professional Services <br>&bull; Customer Success &bull; Support</h4>
						<p><?php _e("Represent. We’re the team that’s on the ground, making sure our customers are getting everything they can out of the Tradeshift platform. We build relationships, becoming a partner in our customer’s road to success. #partnership", 'Tradeshift'); ?></p>
					</div>
				</div>
			</div>
			<div class="row sales-people-ops">
				<div class="contents">
					<div class="sales">
						<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-sales.png" />
						<h3><?php _e("Sales/Business Development", 'Tradeshift'); ?></h3>
						<h4>Sales &bull; Marketing &bull; Product Marketing</h4>
						<p><?php _e("It takes an army — an army of one. Combining marketing and sales to develop a partnership approach we’re growing Tradeshift through information sharing and collaborative efforts. #getsh*tdone", 'Tradeshift'); ?></p>
					</div>
					<div class="people-ops">
						<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-peopleops.png" />
						<h3><?php _e("PeopleOps", 'Tradeshift'); ?></h3>
						<h4>HR &bull; Recruiting &bull; Finance</h4>
						<p><?php _e("A company is only as awesome as the people within it. That’s why we strive to bring onboard passionate people with amazing talent, and we work hard to support them in both professional and personal health and development. #exceptional", 'Tradeshift'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="perks-benefits" class="perks-benefits">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Perks and Benefits", 'Tradeshift'); ?></h2>
					<p><?php _e("We're pretty perky.  It could be the coffee...or it might be the benefits. ", 'Tradeshift'); ?><span class="hidden-xs"><br /><?php _e("Click over the icons to find out.", 'Tradeshift'); ?></span></p>
					<?php if (is_mobile()): ?>
						<div id="us-xs" class="us-xs-perks">
							<div class="grow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-grow-blue.png" />
								<h3><?php _e("Eat, play, grow", 'Tradeshift'); ?></h3>
								<p><?php _e("Full 100% health coverage, unlimited vacation and sick time, and perks like in-office yoga, bootcamp, and gym memberships? Check. We also keep a fully stocked kitchen with healthy snacks, and delicious lunches are catered daily (we had to do something to balance out the cake). We offer commuter benefits, a bikeshare...oh, and feel free to bring your pup to work.", 'Tradeshift'); ?></p>
							</div>
							<div class="team">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-team-blue.png" />
								<h3><?php _e("No \"I\" in T-E-A-M", 'Tradeshift'); ?></h3>
								<p><?php _e("We’ve got big dreams and understand how important building a strong team is to achieving them. The team that plays together stays together—which means bubble soccer games, global team camps, company field trips, holiday parties, and happy hours.", 'Tradeshift'); ?></p>
							</div>
							<div class="future">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-future-blue.png" />
								<h3><?php _e("We plan for your future", 'Tradeshift'); ?></h3>
								<p><?php _e("As a full-time employee you get a 401(k) savings plan. But it doesn’t stop there. We take your professional development seriously. Every Shifter is paired with a mentor and takes part in regular check-ins, with the ability to attend seminars, webinars, etc. to fuel your growth and feed your brain. Plus we offer maternity, paternity, and adoption leave to help you out with some of your big life changes."); ?></p>
							</div>
							<div class="give-back">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-heart-blue.png" />
								<h3><?php _e("Giving back", 'Tradeshift'); ?></h3>
								<p><?php _e("At the heart of Tradeshift is connection, and that feeling extends beyond our four walls and into the community. That’s why we have monthly opportunities for you to volunteer in the community, and create  meaningful partnerships with organizations like (RED).", 'Tradeshift'); ?></p>
							</div>
						</div>
						<div id="eu-xs" class="eu-xs-perks">
							<div class="grow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-grow-blue.png" />
								<h3><?php _e("Eat, play, grow", 'Tradeshift'); ?></h3>
								<p><?php _e("Healthy and fun? Yep! We offer in office homemade daily lunches and keep a pantry filled with snacks, so whenever hunger strikes you’re ready. Can’t make it to the gym? No problem—take a weekly group fitness class like yoga or join the run club.", 'Tradeshift'); ?></p>
							</div>
							<div class="team">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-team-blue.png" />
								<h3><?php _e("No \"I\" in T-E-A-M", 'Tradeshift'); ?></h3>
								<p><?php _e("All work and no play makes for dull shifters. And the team that plays together stays together. So hang out with in-office events like movie nights, hackathons, and happy hours. Or take a break for a friendly (read super competitive) game of Foosball or Darts.", 'Tradeshift'); ?></p>
							</div>
							<div class="future">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-future-blue.png" />
								<h3><?php _e("We've got you covered", 'Tradeshift'); ?></h3>
								<p><?php _e("The struggle is real...sometimes. So when you work at Tradeshift you get flexible hours and covered home internet and mobile phone costs. And to show you’re really part of the team you also get your own stake in the company: equity.", 'Tradeshift'); ?></p>
							</div>
							<div class="give-back">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-heart-blue.png" />
								<h3><?php _e("Giving back", 'Tradeshift'); ?></h3>
								<p><?php _e("At Tradeshift we ask: How do you want to give back today? To stay true to our promise we have a volunteer program so you can get and stay active in your community.", 'Tradeshift'); ?></p>
							</div>
						</div>
						<div id="cn-xs" class="cn-xs-perks">
							<div class="grow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-grow-blue.png" />
								<h3><?php _e("Eat, play, grow", 'Tradeshift'); ?></h3>
								<p><?php _e("Daily snacks and lunch allowance", 'Tradeshift'); ?></p>
							</div>
							<div class="team">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-team-blue.png" />
								<h3><?php _e("We value you", 'Tradeshift'); ?></h3>
								<p><?php _e("Competitive compensation package, including 15 days of annual leave", 'Tradeshift'); ?></p>
							</div>
							<div class="future">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-future-blue.png" />
								<h3><?php _e("We plan for your future", "Jobs"); ?></h3>
								<p><?php _e("Trips to design-camps in United States and Denmark working with and learning from professionals in other countries.", "Jobs"); ?></p>
							</div>
							<div class="give-back">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/icon-heart-blue.png" />
								<h3><?php _e("We've got you covered", "Jobs"); ?></h3>
								<p><?php _e("Medical benefits plan", "Jobs"); ?></p>
							</div>
						</div>

					<?php else: ?>
						<div id="us-sm" class="us-sm-perks">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="grow-tab active">
									<a href="#us-grow" aria-controls="grow" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("Eat, play, grow", "Jobs"); ?><br /><br /> </div></a>
								</li>
								<li role="presentation" class="team-tab">
									<a href="#us-team" aria-controls="team" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("No \"I\" in T-E-A-M", "Jobs"); ?><br /><br />  </div></a>
								</li>
								<li role="presentation" class="future-tab">
									<a href="#us-future" aria-controls="future" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("We plan for your future", "Jobs"); ?></div></a>
								</li>
								<li role="presentation" class="heart-tab">
									<a href="#us-give" aria-controls="give" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("Giving back", "Jobs"); ?><br /><br />  </div></a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="us-grow">
									<p><?php _e("Full 100% health coverage, unlimited vacation and sick time, and perks like in-office yoga, bootcamp, and gym memberships? Check. We also keep a fully stocked kitchen with healthy snacks, and delicious lunches are catered daily (we had to do something to balance out the cake). We offer commuter benefits, a bikeshare...oh, and feel free to bring your pup to work.", 'Tradeshift'); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="us-team">
									<p><?php _e("We’ve got big dreams and understand how important building a strong team is to achieving them. The team that plays together stays together—which means bubble soccer games, global team camps, company field trips, holiday parties, and happy hours.", "Jobs"); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="us-future">
									<p><?php _e("As a full-time employee you get a 401(k) savings plan. But it doesn’t stop there. We take your professional development seriously. Every Shifter is paired with a mentor and takes part in regular check-ins, with the ability to attend seminars, webinars, etc. to fuel your growth and feed your brain. Plus we offer maternity, paternity, and adoption leave to help you out with some of your big life changes.", 'Tradeshift'); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="us-give">
									<p><?php _e("At the heart of Tradeshift is connection, and that feeling extends beyond our four walls and into the community. That’s why we have monthly opportunities for you to volunteer in the community, and create  meaningful partnerships with organizations like (RED).", 'Tradeshift'); ?></p>
								</div>
							</div>
						</div>
						<div id="eu-sm" class="eu-sm-perks">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="grow-tab active">
									<a href="#eu-grow" aria-controls="grow" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("Eat, play, grow", "Jobs"); ?><br /><br /> </div></a>
								</li>
								<li role="presentation" class="team-tab">
									<a href="#eu-team" aria-controls="team" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("No \"I\" in T-E-A-M", "Jobs"); ?><br /><br />  </div></a>
								</li>
								<li role="presentation" class="future-tab">
									<a href="#eu-future" aria-controls="future" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("We've got you covered", "Jobs"); ?></div></a>
								</li>
								<li role="presentation" class="heart-tab">
									<a href="#eu-give" aria-controls="give" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("Giving back", "Jobs"); ?><br /><br />  </div></a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="eu-grow">
									<p><?php _e("Healthy and fun? Yep! We offer in office homemade daily lunches and keep a pantry filled with snacks, so whenever hunger strikes you’re ready. Can’t make it to the gym? No problem—take a weekly group fitness class like yoga or join the run club.", 'Tradeshift'); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="eu-team">
									<p><?php _e("All work and no play makes for dull shifters. And the team that plays together stays together. So hang out with in-office events like movie nights, hackathons, and happy hours. Or take a break for a friendly (read super competitive) game of Foosball or Darts.", 'Tradeshift'); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="eu-future">
									<p><?php _e("The struggle is real...sometimes. So when you work at Tradeshift you get flexible hours and covered home internet and mobile phone costs. And to show you’re really part of the team you also get your own stake in the company: equity.", "Jobs"); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="eu-give">
									<p><?php _e("At Tradeshift we ask: How do you want to give back today? To stay true to our promise we have a volunteer program so you can get and stay active in your community.", 'Tradeshift'); ?></p>
								</div>
							</div>
						</div>
						<div id="cn-sm" class="cn-sm-perks">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="grow-tab active">
									<a href="#cn-grow" aria-controls="grow" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("Eat, play, grow", "Jobs"); ?><br /><br /> </div></a>
								</li>
								<li role="presentation" class="team-tab">
									<a href="#cn-team" aria-controls="team" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("We value you", "Jobs"); ?><br /><br />  </div></a>
								</li>
								<li role="presentation" class="future-tab">
									<a href="#cn-future" aria-controls="future" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("We plan for your future", "Jobs"); ?></div></a>
								</li>
								<li role="presentation" class="heart-tab">
									<a href="#cn-give" aria-controls="give" role="tab" data-toggle="tab"><div class="img-title"> </div>
										<div class="title"><?php _e("We've got you covered", "Jobs"); ?></div></a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="cn-grow">
									<p><?php _e("Daily snacks and lunch allowance", "Jobs"); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="cn-team">
									<p><?php _e("Competitive compensation package, including 15 days of annual leave", "Jobs"); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="cn-future">
									<p><?php _e("Trips to design-camps in United States and Denmark working with and learning from professionals in other countries.", "Jobs"); ?></p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="cn-give">
									<p><?php _e("Medical benefits plan", "Jobs"); ?> </p>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="day-in-the-life" class="day-in-the-life">
		<div class="container">
			<div class="row">
				<div class="contents">
					<div class="story">
						<h2><?php _e("A day in the life: making shift happen", "Jobs"); ?></h2>
						<p><?php _e("Working at Tradeshift is like working with a bunch of your friends who also like to get sh*t done. Coming into the office, detour to one of two cafe stations to craft your favorite coffee or tea before settling in at either your desk or one of the cozy nooks around the office. Break when you need to for some friendly banter, lunch (catered daily), or an impromptu Nerf gun war.", 'Tradeshift'); ?></p>
					</div>
					<div id="dayinthelife-carousel" class="owl-carousel"><!-- IMPT: Don't alter owl-carousel selector -->
					<?php if (is_mobile()): ?>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-1-xs.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-2-xs.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-3-xs.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-4-xs.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-5-xs.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-6-xs.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-7-xs.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-8-xs.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-9-xs.jpg" />
						</div>
					<?php else: ?>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-1-sm.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-2-sm.jpg" />
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/day-in-the-life-3-sm.jpg" />
						</div>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="open-positions" class="footer-open-positions">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Open Positions", "Jobs"); ?></h2>
					<h3><?php _e("We are filling these roles at Tradeshift.", "Jobs"); ?></h3>
					<div class="filter-review-wrapper">
						<div class="filter-wrapper">
							<h5><?php _e("Filter by:", "Jobs"); ?></h5>
							<?php if (is_mobile()): ?>
								<a href="" class="btn btn-secondary-cta btn-small jobs_location_link"><?php _e("Location", "Jobs"); ?></a>
								<a href="" class="btn btn-secondary-cta btn-small jobs_team_link jobs_active"><?php _e("Department", "Jobs"); ?></a>
							<?php elseif (is_tablet()): ?>
								<a href="" class="btn btn-secondary-cta btn-small jobs_location_link"><?php _e("Location", "Jobs"); ?></a>
								<a href="" class="btn btn-secondary-cta btn-small jobs_team_link jobs_active"><?php _e("Department", "Jobs"); ?></a>
							<?php else: ?>
								<a href="" class="btn btn-secondary-cta jobs_location_link"><?php _e("Location", "Jobs"); ?></a>
								<a href="" class="btn btn-secondary-cta jobs_team_link jobs_active"><?php _e("Department", "Jobs"); ?></a>
							<?php endif; ?>
						</div>
						<div class="review-wrapper">
							<h5><?php _e("Reviews:", "Jobs"); ?></h5>
							<a href="http://www.glassdoor.com/Overview/Working-at-Tradeshift-EI_IE676670.11,21.htm" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/jobsv2/btn-glassdoor.png" />
							</a>
						</div>
					</div>
					<div class="jobs_container"> </div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
