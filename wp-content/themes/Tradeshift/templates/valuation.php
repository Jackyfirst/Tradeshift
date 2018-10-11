<?php
/*
Template Name: Valuation landing page
*/
get_header('valuation'); ?>
	<!-- Main Content Starts -->
	<main class="main-content valuation">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="contents">
						<div class="left-box">
							<h1>Tradeshift Valuation</h1>
							<p>Tradeshift makes shift happen with $1.1 Billion valuation</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="brief-review hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="timeline-contents">
                        <h2>It’s been quite a journey</h2>
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
                                            <script>
                                                $('#year2005').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    viewport: '.timeline-wrapper',
                                                    // <sl:translate>
                                                    title: 'Meet the Founders',
                                                    // </sl:translate>
                                                    viewport: '.timeline-contents',
                                                    // <sl:translate>
                                                    content: 'Christian Lanng, Mikkel Hippe Brun and Gert Sylvest came from different backgrounds, but they\’re all entrepreneurs at heart. Lanng sold his first company for $1m at the tender age of 19; At first year of University Mikkel co-founded one of the first Product Information Management and publishing companies leveraging XML-technologies; and Gert consulted for Accenture before joining the 7-man team kicking off Avanade in Denmark, a joint venture between Accenture and Microsoft. The dotcom bubble burst and then they meet each other in Danish Government.',
                                                    // </sl:translate>
                                                    template: '<div class="popover blue"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                                $('#year2005').popover('show');
                                            </script>

                                        </td>
                                        <td class="y2006"></td>
                                        <td class="y2007">
                                            <button type="button" id="year2007" class="btn btn-timeline btn-blue" data-toggle="popover"> </button>
                                            <script>
                                                $('#year2007').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'The EasyTrade Days',
                                                    content: 'Initially contracting for the Danish National IT and Telecom Agency on e-invoicing implementation, Lanng, Brun & Sylvest envision, develop and launch EasyTrade, a next generation e-invoicing platform that was adopted by 95% of Danish businesses and is still used today.',
                                                    // </sl:translate>
                                                    template: '<div class="popover blue"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                        </td>
                                        <td class="y2008"></td>
                                        <td class="y2009">
                                            <button type="button" id="year2009" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
                                            <script>
                                                $('#year2009').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'PEPPOL',
                                                    content: 'Lanng, Brun & Sylvest were key in founding the visionary project PEPPOL (Pan-European Public Procurement Online) which was launched to address procurement barriers across European countries within the EU. It offers all European businesses the ability to conduct business electronically when selling goods and services across the EU.',
                                                    // </sl:translate>
                                                    template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear62009" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear62009').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'A Tweet That Launches 1,000 Ideas',
                                                    content: 'Responding to a tweet sent out by early Skype investor Morten Lund, Lanng, Brun & Sylvest and Lund start collaborating. Lund becomes a key advisor, investor and, for a time, Tradeshift’s chairman.',
                                                    // </sl:translate>
                                                    template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear92009" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear92009').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'From a Copenhagen Garage to Wired',
                                                    content: 'Working out of a garage by night, the founders start developing a business collaboration platform tailored for the private sector, earning an encouraging nod from Wired Magazine. We win the award for best business startup in Techcrunch Europas.',
                                                    // </sl:translate>
                                                    template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                        </td>
                                        <td class="y2010">
                                            <button type="button" id="monthyear32010" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear32010').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Tradeshift Launches',
                                                    content: 'After 6 months in 24-hour crunch mode with teams on 3 different continents, the first version of Tradeshift is released. Built from the start as a highly scalable platform with a global market in mind. We get our first real office in the heart of Copenhagen.',
                                                    // </sl:translate>
                                                    template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear62010" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear62010').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Paypal invests in Tradeshift',
                                                    content: 'Paypal sees the potential in Tradeshift after a keynote by Christian Lanng titled “Why banks will fail (With electronic invoicing)”. The investment allows the team to move out of the garage at Morten Lunds house and into a real office in central Copenhagen.',
                                                    // </sl:translate>
                                                    template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear112010" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear112010').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Europa Award: Best Business Startup',
                                                    content: 'Tradeshift is honored to win The Europas award for “Best Business or Enterprise Startup” across all of Europe. Guerilla marketing techniques and provoking keynotes attract more attention.',
                                                    // </sl:translate>
                                                    template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear122010" class="btn btn-timeline btn-green" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear122010').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'From Europe to Six Continents',
                                                    content: 'By the end of 2010, Tradeshift has spread globally and is localized into five languages. The team is proudly supporting users in North & South America, Africa, Asia, and Australia. (No users in Antarctica...yet.) ',
                                                    template: '<div class="popover green"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                        </td>
                                        <td class="y2011">
                                            <button type="button" id="year2011" class="btn btn-timeline btn-red" data-toggle="popover"> </button>
                                            <script>
                                                $('#year2011').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Big Dreams, Big Growth',
                                                    content: 'Tradeshift secures first-round funding and continues to grow quickly, with active users in 190 countries. March 2011 also marks the first release of the Tradeshift app marketplace that includes 3rd party apps, and our first financial services.',
                                                    // </sl:translate>
                                                    template: '<div class="popover red"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear102011" class="btn btn-timeline btn-red" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear102011').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Kicking Butt, Taking Names',
                                                    content: 'TechCrunch recognizes Tradeshift for “Kicking Ass Globally” with The Europas\’ “Highly Commended” Award.',
                                                    // </sl:translate>
                                                    template: '<div class="popover red"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear112011" class="btn btn-timeline btn-red" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear112011').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Bound for the Bay',
                                                    content: 'Tradeshift relocates HQ from Copenhagen to San Francisco, the heart of Silicon Valley.',
                                                    // </sl:translate>
                                                    template: '<div class="popover red"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                        </td>
                                        <td class="y2012">
                                            <button type="button" id="year2012" class="btn btn-timeline btn-red" data-toggle="popover"> </button>
                                            <script>
                                                $('#year2012').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Big Launches, Big Wins',
                                                    content: 'Tradeshift launches significant new products and partners with some of the world’s biggest businesses. Cloudscan, the first machine learning backed invoice capture and workflow solution in the market, was launched in march 2012. Our commitment to open networks and standards is highlighted as we connect the french government with the PEPPOL network through Tradeshift.',
                                                    // </sl:translate>
                                                        template: '<div class="popover red"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                        </td>
                                        <td class="y2013">
                                            <button type="button" id="monthyear52013" class="btn btn-timeline btn-orange" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear52013').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Heading East and West',
                                                    content: 'Tradeshift opens a research & development center in Suzhou, China, the world’s largest exporter and a critical link for many global supply chains. Later in 2013 Tradeshift announces its expansion into the Latin American e-invoicing infrastructures.',
                                                    // </sl:translate>
                                                    template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear72013" class="btn btn-timeline btn-orange" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear72013').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'A Royal Welcome',
                                                    content: 'Tradeshift continues to grow, and expands with a local office in London (Notting Hill, to be exact).',
                                                    // </sl:translate>
                                                    template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="monthyear82013" class="btn btn-timeline btn-orange" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear82013').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Portal, Shmortal',
                                                    content: 'Tradeshift launches Collaborative Workflow, allowing employees and companies to collaborate across company boundaries and making us the first cross-company employee-to-employee network. Tradeshift wins the PayStream Innovate “AP Innovative Technology of the Year Award” for collaborative workflow later this year.',
                                                    // </sl:translate>
                                                    template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });

                                            </script>
                                        </td>
                                        <td class="y2014">
                                            <button type="button" id="monthyear112014" class="btn btn-timeline btn-gold" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear112014').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Standardizing the Eurozone',
                                                    content: 'The European Commission approves Tradeshift’s UBL data format for government purchasing, enabling better connectivity between government organizations and their suppliers.',
                                                    // </sl:translate>
                                                    template: '<div class="popover gold"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            <button type="button" id="year2014" class="btn btn-timeline btn-gold" data-toggle="popover"> </button>
                                            <script>
                                                $('#year2014').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Offices in France, Germany and Japan',
                                                    content: 'With a broader customer base, Tradeshift expands to offices in Paris, Munich, and Tokyo. In San Francisco, we outgrow our office and move to new headquarters at 612 Howard.',
                                                    // </sl:translate>
                                                    template: '<div class="popover gold"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });

                                            </script>
                                        </td>
                                        <td class="y2015">
                                            <button type="button" id="monthyear12015" class="1-2015 btn btn-timeline btn-dark-blue my12015" data-toggle="popover"> </button>
                                            <script>
                                                $('#monthyear12015').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Disruption Recognition',
                                                    content: 'Tradeshift is honored and humbled to receive The Circulars’ prestigious “Digital Disruptor” Award at the World Economic Forum in Davos, Switzerland.',
                                                    // </sl:translate>
                                                    template: '<div class="popover gold"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                            
                                        </td>
                                        <td class="y2016">
                                            <button type="button" id="monthyear12016" class="1-2016 btn btn-timeline btn-green my12016" data-toggle="popover" data-content="First annual ‘Sanctuary’ event during WEF with partners CNBC and TechCrunch." data-html="true"> </button>
                                            <button type="button" id="monthyear12016_2" class="1-2016 btn btn-timeline btn-green my12016" data-toggle="popover" data-title="Secures $75m" data-content="Tradeshift’s $75 Million Series D round attracts new and existing Investors to accelerate company’s global expansion and platform development." data-html="true"> </button>
                                            <script>
                                                $('#monthyear12016').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    // <sl:translate>
                                                    title: 'Tradeshift Heats Up Davos',
                                                    // </sl:translate>
                                                    template: '<div class="popover orange"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                        </td>
                                        <td class="y2017">
                                            <button type="button" id="monthyear12017" class="1-2017 btn btn-timeline btn-go my12017" data-toggle="popover" data-content="Tradeshift acquires Stockholm-based IBX Business Network to create world's largest business commerce platform." data-html="true"> </button>
                                            <button type="button" id="monthyear12017_2" class="1-2017 btn btn-timeline btn-go my12017" data-toggle="popover" data-title="Say Hello to Ada" data-content="Tradeshift Launches Ada, a new AI layer on platform to creating simplified commerce." data-html="true"> </button>
                                            <script>
                                                $('#monthyear12017').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    title: 'Acquisition #3',
                                                    // </sl:translate>
                                                    template: '<div class="popover black"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                                $('#monthyear12017_2').popover({
                                                    placement: 'bottom',
                                                    trigger: 'hover',
                                                    // </sl:translate>
                                                    template: '<div class="popover black"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                        </td>
                                        <td class="y2018">
                                            <button type="button" id="monthyear12018" class="btn btn-timeline btn-blue my12018" data-toggle="popover" data-content="Tradeshift Raises $250 Million In Series E Funding Round, Bringing Company Valuation to $1.1 Billion" data-html="true"> </button>
                                            <script>
                                                $('#monthyear12018').popover({
                                                    placement: 'top',
                                                    trigger: 'hover',
                                                    title: 'Tradeshift Raises $250 Million',
                                                    // </sl:translate>
                                                    template: '<div class="popover blue 2018"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content sl_translate"></div></div>'
                                                });
                                            </script>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="resources">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2 class="hidden-xs">Resources for you</h2>
						<h2 class="visible-xs">Find out more about our procurement solutions.</h2>
						<div class="resource-wrapper">
							<a class="trigger-res-1" href="https://tradeshift.com/resources/dhl-customer-video/" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/solutions/pay/resource-dhl.jpg" /></a>
							<p>How DHL uses Tradeshift for AP Automation success <br class="visible-sm" /><a class="trigger-res-1" href="https://tradeshift.com/resources/dhl-customer-video/" target="_blank">Watch now &raquo;</a></p>
						</div>
						<div class="resource-wrapper">
							<a class="trigger-res-2" href="https://tradeshift.com/resources/outsmarting-automation-a-guide-for-accounts-payable/" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/solutions/pay/resource-automation.jpg" /></a>
							<p>Outsmarting Automation: A Guide for Accounts Payable <br class="visible-sm" /><a class="trigger-res-2" href="https://tradeshift.com/resources/outsmarting-automation-a-guide-for-accounts-payable/" target="_blank">Read more &raquo;</a></p>
						</div>
						<div class="resource-wrapper">
							<a class="trigger-res-3" href="https://tradeshift.com/resources/outsmarting-automation-a-guide-for-accounts-payable/" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/solutions/pay/resource-flibook.jpg" /></a>
							<p>[Flipbook] Pro Tips For Accounts Payable: 6 Complaints Suppliers Make About E-invoicing <br class="hidden-xs" /><a class="trigger-res-3" href="https://tradeshift.com/resources/outsmarting-automation-a-guide-for-accounts-payable/" target="_blank">Read more &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fill-out-form-orange">
			<div class="container">
				<div class="row">
					<h2>Never miss an update</h2>
					<button id="heroMainCtaTS_pay" class="btn btn-primary-cta" data-toggle="modal" data-target="#subscribeUpdates">Subscribe to blog</button>
				</div>
			</div>
		</div>
	</main>

    <div class="modal fade" id="subscribeUpdates" tabindex="-1" aria-hidden="true" >
	<div class='modal-close-overlay'></div>
	<div class="modal-dialog">
		<div class="modal-content">
	  		<div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h3 class="myModalLabel">Subscribe to Tradeshift Blog</h3>
		        <p class="lead">Get every new post delivered to your Inbox. Join thousands of others who receives our updates.</p>
	  		</div>
	  		<div class="modal-body">
				<script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
                <form id="mktoForm_1762"></form>
                <script>
	                MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1762);
                </script>
			</div>
		</div>
	</div>
</div>




	<?php $form=true; ?>
    <script>
        $('[data-toggle="popover"]').popover();
        $('.btn-timeline').on('mouseover', function (e) {
            $('[data-toggle="popover"]').each(function () {
                //the 'is' for buttons that trigger popups
                //the 'has' for icons within a button that triggers a popup
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                    $(this).popover('hide');
                }
            });
        });
    </script>

<?php get_footer(); ?>
