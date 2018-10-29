<?php
/*
Template Name: About
*/
get_header(); ?>
<style>@media (min-width: 1200px) {.role img.img-responsive{height: 168px;}}</style>
<!-- Main Content Starts -->
<main class="main-content about-page">
	<!-- Hero Section -->
	<div class="hero story-intro">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h1><?php _e("The Tradeshift story", "Tradeshift"); ?></h1>
					<h3><?php _e("So three Danes walk into a garage...", "Tradeshift"); ?></h3>
				</div>
			</div>
		</div>
		<div class="arrow"></div>
	</div>
	<div class="story-rotating-quotes">
		<div class="container">
			<div class="row">
				<div class="story">
					<h2><?php _e("It began with a dream.", "Tradeshift"); ?></h2>
					<p>
						<?php _e('In 2005, entrepreneurs Christian, Mikkel and Gert had a vision: to connect every business in the world. So when the Danish National IT &amp; Telecom Agency asked them to create an e-invoice network, they saw an opportunity to create something bigger.', 'Tradeshift'); ?>
					</p>

					<p>
						<?php _e('First, they built EasyTrade, the world’s first open-source trade platform.* (Did they blow a few minds and break some rules along the way? You bet they did.)', 'Tradeshift'); ?>
					</p>

					<p>
						<?php _e('Then, the trio got to work again. This time, to realize their vision of an open business platform for the whole world, not just Europe. A platform that would transform the way businesses work together. From broken to efficient; from complicated to simple; from archaic to modern.', "Tradeshift"); ?>
					</p>

					<p><strong><?php _e("<em>And so</em>, Tradeshift was born.", "Tradeshift"); ?></strong></p>
					<small><?php _e("*95% of Danish businesses still use it today.", "Tradeshift"); ?></small>
				</div>
				<div id="quote-carousel" class="owl-carousel"><!-- IMPT: Don't alter owl-carousel selector -->
					<div class="quote-wrapper">
						<img class="founder" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/ChristianLanng_ellipse_small.png" />
						<div class="person-title"><?php _e("Christian Lanng<br/>Founder/CEO", 'Tradeshift'); ?></div>
						<div class="quote">
							<?php _e("The difference between having all your suppliers connected, and just a tiny part, is the difference between night and day in running your business.", "Tradeshift"); ?></div>
					</div>
					<div class="quote-wrapper">
						<img class="founder" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/quote-headshot-mikkel.jpg" />
						<div class="person-title"><?php _e('Mikkel Hippe Brun<br/>SVP of APAC &amp; Co-founder', 'Tradeshift'); ?></div>
						<div class="quote"><?php _e("If you look at your supply chain as an arena to penny-pinch, as opposed to treating your suppliers as partners, you’ll miss a competitive advantage that allows you to be better, more productive and more efficient.", "Tradeshift"); ?></div>
					</div>
					<div class="quote-wrapper">
						<img class="founder" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/quote-headshot-gert.jpg" />
						<div class="person-title"><?php _e('Gert Sylvest<br/>Co-founder, GM Tradeshift Frontiers', 'Tradeshift'); ?></div>
						<div class="quote"><?php _e("Marrying social technology with hard transactions will change the way the world thinks about business and finance, and allow us to bridge major digital divides.", 'Tradeshift'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bigger-team">
		<div class="container">
			<div class="row">
				<div class="contents">
					<img class="img-responsive visible-xs" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/biggerteam1.jpg" />
					<div class="same-vision">
						<h2><?php _e("Bigger team.<br class=\"visible-xs\"> Same vision.", "Tradeshift"); ?></h2>
						<p><?php _e('Tradeshift has grown to 650+ people with offices in 12 countries, but our focus hasn’t wavered. We believe that nothing connects a fragmented world like commerce. We digitize and connect everything that happens between a buyer and a seller, anywhere in the world.', 'Tradeshift'); ?></p>
						<h5><?php _e("We help businesses:", "Tradeshift"); ?></h5>
						<ul>
							<li><?php _e("Connect with all their suppliers digitally", "Tradeshift"); ?></li>
							<li><?php _e("Remove paper and manual processes across procure-to-pay", "Tradeshift"); ?></li>
							<li><?php _e("Seize early payment discounts to save money", "Tradeshift"); ?></li>
							<li><?php _e("Buy what they need faster and manage supplier risk", "Tradeshift"); ?></li>
						</ul>
					</div>
					<img class="img-responsive visible-xs" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/biggerteam2.jpg" />
				</div>
			</div>
		</div>
	</div>
	<div class="brief-review hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="timeline-contents">
					<h2><?php _e("A brief review.", "Tradeshift"); ?></h2>
					<p><?php _e('Take a look at our history: from late nights in a garage to winning "Digital Disruptor".', "Tradeshift"); ?></p>
					<div class="timeline-wrapper">
						<table id="timeline" class="table" summary="A timeline of Tradeshift's history">
							<thead>
							<tr>
								<th scope="col" class="y2005">2005</th>
								<th scope="col" class="y2006"></th>
								<th scope="col" class="y2007">2007</th>
								<th scope="col" class="y2008"></th>
								<th scope="col" class="y2009">2009</th>
								<th scope="col" class="y2010">2010</th>
								<th scope="col" class="y2011">2011</th>
								<th scope="col" class="y2012">2012</th>
								<th scope="col" class="y2013">2013</th>
								<th scope="col" class="y2014">2014</th>
								<th scope="col" class="y2015">2015</th>
								<th scope="col" class="y2016">2016</th>
								<th scope="col" class="y2017">2017</th>
								<th scope="col" class="y2018">2018</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td class="y2005">
									<button type="button" id="year2005" class="btn btn-timeline btn-blue" data-toggle="popover"> </button>
								</td>
								<td class="y2006"></td>
								<td class="y2007">
									<button type="button" id="year2007" class="btn btn-timeline btn-blue" data-toggle="popover"> </button>
								</td>
								<td class="y2008"></td>
								<td class="y2009">
									<button type="button" id="year2009" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
									<button type="button" id="monthyear62009" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
									<button type="button" id="monthyear92009" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
								</td>
								<td class="y2010">
									<button type="button" id="monthyear32010" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
									<button type="button" id="monthyear62010" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
									<button type="button" id="monthyear112010" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
									<button type="button" id="monthyear122010" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
								</td>
								<td class="y2011">
									<button type="button" id="year2011" class="btn btn-timeline btn-red" data-toggle="popover"> </button>
									<button type="button" id="monthyear102011" class="btn btn-timeline btn-red" data-toggle="popover"> </button>
									<button type="button" id="monthyear112011" class="btn btn-timeline btn-red" data-toggle="popover"> </button>
								</td>
								<td class="y2012">
									<button type="button" id="year2012" class="btn btn-timeline btn-red" data-toggle="popover"> </button>
								</td>
								<td class="y2013">
									<button type="button" id="monthyear52013" class="btn btn-timeline btn-orange" data-toggle="popover"> </button>
									<button type="button" id="monthyear72013" class="btn btn-timeline btn-orange" data-toggle="popover"> </button>
									<button type="button" id="monthyear82013" class="btn btn-timeline btn-orange" data-toggle="popover"> </button>
								</td>
								<td class="y2014">
									<button type="button" id="monthyear112014" class="btn btn-timeline btn-gold" data-toggle="popover"> </button>
									<button type="button" id="year2014" class="btn btn-timeline btn-gold" data-toggle="popover"> </button>
								</td>
								<td class="y2015">
									<button type="button" id="monthyear12015" class="1-2015 btn btn-timeline btn-dark-blue my12015" data-toggle="popover"> </button>
								</td>
								<td class="y2016">
									<button type="button" id="monthyear12016" class="1-2016 btn btn-timeline btn-green my12016" data-toggle="popover" data-content="<?php _e("First annual ‘Sanctuary’ event during WEF with partners CNBC and TechCrunch.", 'Tradeshift'); ?>" data-html="true"> </button>
									<button type="button" id="monthyear12016_2" class="1-2016 btn btn-timeline btn-green my12016" data-toggle="popover" data-title="<?php _e("Secures $75m", 'Tradeshift'); ?>" data-content="<?php _e("Tradeshift’s $75 Million Series D round attracts new and existing Investors to accelerate company’s global expansion and platform development.", 'Tradeshift'); ?>" data-html="true"> </button>
								</td>
								<td class="y2017">
									<button type="button" id="monthyear12017" class="1-2017 btn btn-timeline btn-go my12017" data-toggle="popover" data-content="<?php _e("Tradeshift acquires Stockholm-based IBX Business Network to create world's largest business commerce platform.", 'Tradeshift'); ?>" data-html="true"> </button>
									<button type="button" id="monthyear12017_2" class="1-2017 btn btn-timeline btn-go my12017" data-toggle="popover" data-title="<?php _e("Say Hello to Ada", 'Tradeshift'); ?>" data-content="<?php _e('Tradeshift Launches Ada, a new AI layer on platform to creating simplified commerce.', 'Tradeshift'); ?>" data-html="true"> </button>
								</td>
								<td class="y2018">
									<button type="button" id="monthyear12018" class="btn btn-timeline btn-blue my12018" data-toggle="popover" data-content="<?php _e("Tradeshift Raises $250 Million In Series E Funding Round, Bringing Company Valuation to $1.1 Billion", 'Tradeshift'); ?>" data-html="true"> </button>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="dash hidden-xs hidden-sm" />
	<div class="awards">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("We're going to need a bigger shelf.", "Tradeshift"); ?></h2>
					<dl>
						<dt><?php _e('EY Entrepreneur Of The Year US Award - 2017', 'Tradeshift'); ?></dt>
						<dd><?php _e('2017 Finalist – NorCal Program', 'Tradeshift'); ?></dd>
						<dt><?php _e('Tech Tour Growth 50', 'Tradeshift'); ?></dt>
						<dd><?php _e('"Among Europe’s fastest growing pre-exit high-tech companies"','Tradeshift'); ?></dd>
						<dt><?php _e('The Top 100 Cloud-based', 'Tradeshift'); ?></dt>
						<dd><?php _e('"Enterprise Software Startups of 2015"', 'Tradeshift'); ?></dd>
						<dt><?php _e("The Circulars' 2015", 'Tradeshift'); ?></dt>
						<dd><?php _e('Digital Disruptor Award', 'Tradeshift'); ?></dd>
						<dt><?php _e('Greatlist.com', 'Tradeshift'); ?></dt>
						<dd><?php _e('"One of the Healthiest Companies to Work For in America 2014"', 'Tradeshift'); ?></dd>
						<dt><?php _e('Best Business Start-up 2010', 'Tradeshift'); ?></dt>
						<dd><?php _e('TechCrunch Europe', 'Tradeshift'); ?></dd>
						<dt><?php _e('Sustania Top 100 - 2015', 'Tradeshift'); ?></dt>
						<dd><?php _e('We\'re part of this year\'s sustainable #100solutions', 'Tradeshift'); ?></dd>
						<dt><?php _e('Tech World - 2016', 'Tradeshift'); ?></dt>
						<dd><?php _e('Best Innovation in the Public Sector', 'Tradeshift'); ?></dd>
						<dt><?php _e('Fortune - 2016', 'Tradeshift'); ?></dt>
						<dd><?php _e('50 Highest Rated Private Cloud Companies to work for', 'Tradeshift'); ?></dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="executives">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e('Meet our leaders.', 'Tradeshift'); ?></h2>
					<div class="role ceo">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/CHL_LeadersPage.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Christian Lanng', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('Co-founder &amp; CEO', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role svp-apac">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/Mikkel_LeadersPage.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Mikkel Hippe Brun', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('Co-founder &amp; SVP of APAC', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role cto">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/headshot-cto.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Gert Sylvest', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('Co-founder &amp; SVP of Global Network Strategy', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role svp-ep">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/Headshot-Thijs-svp-global-product-18.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Thijs Stalenhoef', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('SVP Global Product', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role vp-product">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/headshot-sarika.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Sarika Garg', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('Chief Strategy Officer', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role svp-sales">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/headshot-rinus.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Rinus Strydom', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('SVP Enterprise Commercial', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role svp-enterprise">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/headshot-melissa.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Melissa Gordon', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('SVP &amp; GM of Enterprise Platform', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role svp-payments">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/headshot-maxim.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Maxim Rokhline', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('SVP of Financial Services', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role vp-engineering">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/headshot-Rolf-vp-eng-18.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Rolf Njor Jensen', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('SVP of Engineering &amp; Engineering Platform', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role cfo">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/headshot-cfo.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Peter Van Pruissen', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('CFO', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role director-spa">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/headshot-director-spa.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Anja Møller Eriksen', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('SVP Operational Strategy & Execution, Chief of Staff', 'Tradeshift'); ?></div>
						</div>
					</div>
					<div class="role vp">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-ts/Nav.jpg" />
						<div class="person" itemscope itemtype="http://schema.org/Person">
							<div itemprop="name" class="name"><span><?php _e('Nav Kalra', 'Tradeshift'); ?></span></div>
							<div itemprop="jobtitle" class="jobtitle"><?php _e('VP of Global Services &amp; Success', 'Tradeshift'); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="board">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e("Meet our board.", "Tradeshift"); ?></h2>
					<div class="board-member">
						<div itemscope itemtype="http://schema.org/Person">
							<div class="name" itemprop="name"><?php _e('Christian Lanng', 'Tradeshift'); ?></div>
							<div class="title-affiliation">
								<span itemprop="jobtitle"><?php _e('CEO'); ?></span> <span itemprop="affiliation"><?php _e('Tradeshift', 'Tradeshift'); ?></span>
							</div>
						</div>
					</div>
					<div class="board-member">
						<div itemscope itemtype="http://schema.org/Person">
							<div class="name" itemprop="name"><?php _e('Noriaki Okubo'); ?></div>
							<div class="title-affiliation">
								<?php _e('<span itemprop="jobtitle">Managing Director</span> at <span itemprop="affiliation">Scentan Ventures</span>', 'Tradeshift'); ?>
							</div>
						</div>
					</div>
					<div class="board-member">
						<div itemscope itemtype="http://schema.org/Person">
							<div class="name" itemprop="name"><?php _e('Stephen Chandler', 'Tradeshift'); ?></div>
							<div class="title-affiliation">
								<?php _e('<span itemprop="jobtitle">Managing Partner</span> at <span itemprop="affiliation">Notion Capital</span>', 'Tradeshift'); ?>
							</div>
						</div>
					</div>
					<div class="board-member">
						<div itemscope itemtype="http://schema.org/Person">
							<div class="name" itemprop="name"><?php _e('Ian Swycher', 'Tradeshift'); ?></div>
							<div class="title-affiliation">
								<span itemprop="affiliation"><?php _e('Anzen Private Equity', 'Tradeshift'); ?></span>
							</div>
						</div>
					</div>
					<div class="board-member">
						<div itemscope itemtype="http://schema.org/Person">
							<div class="name" itemprop="name"><?php _e("Edward Shenderovich", 'Tradeshift'); ?></div>
							<div class="title-affiliation">
								<?php _e('<span itemprop="jobtitle">Founding Partner</span> at <span itemprop="affiliation">Kite Ventures</span>', 'Tradeshift'); ?>
							</div>
						</div>
					</div>
					<div class="board-member">
						<div itemscope itemtype="http://schema.org/Person">
							<div class="name" itemprop="name"><?php _e("Mikkel Hippe Brun", "Tradeshift"); ?></div>
							<div class="title-affiliation">
								<?php _e('<span itemprop="jobtitle">Co-Founder &amp; SVP of APAC</span>', 'Tradeshift'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="investors">
		<div class="container">
			<div class="row">
				<div class="contents">
					<h2><?php _e('Meet our investors.', 'Tradeshift'); ?></h2>
					<div class="logo scentan">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-scentan.png" alt="<?php _e("Scentan Ventures", "Tradeshift"); ?>">
					</div>
					<div class="logo intuit">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-intuit.png" alt="<?php _e("Intuit", "Tradeshift"); ?>">
					</div>
					<div class="logo anzen">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-anzen.png" alt="<?php _e("Anzen", "Tradeshift"); ?>">
					</div>
					<div class="logo kite" style="clear: left;">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-kite2.png" alt="<?php _e("Kite Ventures", "Tradeshift"); ?>">
					</div>
					<div class="logo amexv">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-amex.png" alt="<?php _e("Amex Ventures", "Tradeshift"); ?>">
					</div>
					<div class="logo hsbc">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-hsbc.png" alt="<?php _e("HSBC", "Tradeshift"); ?>">
					</div>
					<div class="logo creditease">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-creditease.png" alt="<?php _e("Creditease", "Tradeshift"); ?>">
					</div>
					<div class="logo pavillion">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-pavillion.png" alt="<?php _e("Pavillion Capital", "Tradeshift"); ?>">
					</div>
					<div class="logo santander" style="margin-top: 11px">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/Santander-innoventures-logo2.jpg" alt="<?php _e("Pavillion Capital", "Tradeshift"); ?>">
					</div>
					<div class="logo wipro" style="clear: left;">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-wipro-ventures.png" alt="<?php _e("Wipro", "Tradeshift"); ?>">
					</div>

					<div class="logo bullhound">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/gp-bullhound.jpg" alt="<?php _e("G.P. Bullhound", "Tradeshift"); ?>">
					</div>
					<div class="logo h14">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/h14.jpg" alt="<?php _e("H14", "Tradeshift"); ?>">
					</div>
					<div class="logo goldman-sachs" style="clear: left;">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/goldman-sachs.jpg" alt="<?php _e("Goldman Sachs", "Tradeshift"); ?>">
					</div>
					<div class="logo psp">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/psp.jpg" alt="<?php _e("Investissments PS2P Investments", "Tradeshift"); ?>">
					</div>
					<div class="logo notion">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-ts/logo-notion.png" alt="<?php _e("Notion Capital", "Tradeshift"); ?>">
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="fill-out-form">
		<div class="container">
			<div class="row">
				<h2><?php _e('Learn how Tradeshift can help your enterprise.', 'Tradeshift'); ?></h2>
				<form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
					<div class="form-group">
						<input type="e-mail" class="form-control" id="e-mail" placeholder="<?php _e("Enter Your Email", "Tradeshift"); ?>">
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-primary-cta" id="getStartedTradeshift" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Let's get started", 'Tradeshift'); ?></button>
					</div>
				</form>
			</div>
			<div class="row">
				<p class="sub"><?php _e("Tradeshift takes your privacy seriously.<br /> We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.", 'Tradeshift'); ?></p>
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
				<h3 id="myModalLabel"><?php _e('Request a Demo', 'Tradeshift'); ?></h3>
				<p class="lead"><?php _e('Start your journey with a free demo today.', 'Tradeshift'); ?></p>
			</div>
			<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_4484"></form>
				<script type="text/javascript">// <![CDATA[
					MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 4484, function(form){
						form.vals({"Marketing_Resource_Name__c":"About page"});
					});
					// ]]>
				</script>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
