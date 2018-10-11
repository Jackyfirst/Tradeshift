<?php
/*
Template Name: Main Front Page
*/

get_header('main'); ?>

<main class="main main-content cd-main-content" template-name="main-front-page" style="position: static;">
    <svg style="display: none">
        <symbol id="play-triangle">
            <path fill-rule="evenodd"  fill="#ff5200" d="M19.974,15.997 L0.529,31.188 L0.529,0.807 L19.974,15.997 Z"/>
        </symbol>
    </svg>
    <div id="app" class="main-hero" style="position: relative;">
		<?php if( !is_mobile() ): ?>
        <video-bg :sources="['/wp-content/themes/Tradeshift/video/Pulse_Hero_Desktop_2018.mp4']" img="/wp-content/themes/Tradeshift/img/main/pulse_hero_desktop.png">
			<?php else: ?>
            <video-bg :sources="['/wp-content/themes/Tradeshift/video/Pulse_Hero_Mobile_2018.mp4']" img="/wp-content/themes/Tradeshift/img/main/pulse_hero_mobile.png">
				<?php endif; ?>
                <div class="container">
                    <div class="row">
                        <div class="contents">
                            <!-- Vue component -->
                            <hero></hero>
                        </div>
                    </div>
                </div>
            </video-bg>
    </div>
    <div class="main-featuredContent">
        <div class="row">
            <div class="contents wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1.8s" data-wow-center-offset="1" style="visibility: hidden;">

                <div class="item left_tile">
                    <a href="/events-webinars/live-demo-tradeshift-pay-platform/">
                        <div class="overlay"></div>
                        <div class="wrapper wrapper-left_tile">
                            <div class="wrapper-contents">
                                <h3>
    								<?php _e(
    									"Get a live demo of Tradeshift Pay",
    									"Tradeshift"
    								); ?>
                                </h3>
                                <p>
                                    <?php _e("Join us on September 6, 10am PT", "Tradeshift"
                                    ); ?>
                                </p>
                                <span class="read-more"><?php _e('Save your seat &raquo;', 'Tradeshift'); ?></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item middle_tile">
                    <a href="/resources/complimentary-report-gartner-magic-quadrant-for-procure-to-pay-suites/">
                        <div class="overlay"></div>
                        <div class="wrapper wrapper-middle_tile">
                            <div class="wrapper-contents">
                                <h3><?php _e("Magic Momentum", "Tradeshift"); ?></h3>
                                <p>
                                    <?php _e("Tradeshift is proud to be recognized in the Gartner Magic Quadrant for Procure-to-Pay Suites", "Tradeshift"
                                    ); ?>
                                </p>
                                <span class="read-more"><?php _e('Read the report &raquo;', 'Tradeshift'); ?></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item right_tile">
                    <a href="https://blog.tradeshift.com/6-key-takeaways-from-the-tradeshift-innovation-summit/" target="_blank">
                        <div class="overlay"></div>
                        <div class="wrapper wrapper-right_tile">
                            <div class="wrapper-contents">
                                <h3><?php _e("Innovation Summit"); ?></h3>
                                <p><?php _e("Announcing first cloud platform for end-to-end supply chain payments", "Tradeshift"); ?></p>
                                <span class="read-more"><?php _e('Read the blog &raquo;', 'Tradeshift'); ?></span>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="main-wayToSuccess">
        <div class="container">
            <div class="row">
                <div class="contents col-xs-12" style="padding: 0 33px;">
                    <span class="large topBorder"></span>
                    <h2 class="hlead"><?php _e("Buying and payments for your business, your way.", "Tradeshift"); ?></h2>
                    <div class="tradeshift_solutions">

                        <div class="solution pay wow fadeInUp" data-wow-delay="0.3s" data-wow-center-offset="1" style="visibility: hidden;">
                            <div class="wrapper_icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/main/pay-logo.png" />
                            </div>
                            <div class="wrapper_text">
                                <h3><?php _e('Tradeshift'); ?><sup>&reg;</sup> <span><?php _e("Pay", "Tradeshift"); ?></span></h3>
                                <h4><?php _e("Connect your supply chain payments.", "Tradeshift"); ?></h4>
                                <p><?php _e("Discover payments 2.0. Manage invoices, working capital, payments and all points in between. All in one place.", "Tradeshift"); ?></p>
                                <a href="/enterprise/solutions/pay/"><?php _e("How it works &raquo;", 'Tradeshift'); ?></a>
                            </div>
                        </div>

                        <div class="solution buy wow fadeInUp" data-wow-delay="0.6s" data-wow-center-offset="1" style="visibility: hidden;">
                            <div class="wrapper_icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/main/buy-logo.png" />
                            </div>
                            <div class="wrapper_text">
                                <h3>Tradeshift<sup>&reg;</sup> <span><?php _e("Buy", "Tradeshift"); ?></span></h3>
                                <h4><?php _e("Own your supply chain marketplace.", "Tradeshift"); ?></h4>
                                <p><?php _e("With private marketplaces that you own, stock, and manage, you can make procurement more like buying.", "Tradeshift"); ?></p>
                                <a href="/enterprise/solutions/buy/"><?php _e('How it works &raquo;', 'Tradeshift'); ?></a>
                            </div>
                        </div>

                        <div class="solution apps wow fadeInUp" data-wow-delay="0.9s" data-wow-center-offset="1" style="visibility: hidden;">
                            <div class="wrapper_icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/main/apps-logo.png" />
                            </div>
                            <div class="wrapper_text">
                                <h3>Tradeshift<sup>&reg;</sup> <span><?php _e("Apps", 'Tradeshift'); ?></span></h3>
                                <h4><?php _e("Accelerate your supply chain digitization.", 'Tradeshift'); ?></h4>
                                <p><?php _e("Extend, customize, or build any part of your supply chain solution with a fully stocked app store and a flexible, open platform.", "Tradeshift"); ?></p>
                                <a href="/enterprise/solutions/apps/"><?php _e('How it works &raquo;', 'Tradeshift'); ?></a>
                            </div>
                        </div>

                    </div>
                    <div class="TS-capabilities_wrapper wow fadeIn" data-wow-delay="0s" data-wow-duration="1.8s" style="padding-top: 108px;visibility:hidden">
                        <img src="/wp-content/themes/Tradeshift/img/main/desktop.png" style="width: auto;" class="hidden-sm hidden-xs lazy-img-fadein" />
                        <img src="<?php echo get_template_directory_uri() ?>/img/main/laptop-xs.png" style="width: auto;margin: auto" class="visible-sm visible-xs lazy-img-fadein" />
                    </div>

                    <div class="main-wayToSuccess__customers">
                        <div class="main-wayToSuccess__powerfulPlatform hidden-lg hidden-md">
                            <h3><?php _e("Join the club", "Tradeshift"); ?></h3>
                            <p><?php _e("See how NHS SBS, Air France, and other Tradeshift customers are reimagining business commerce", "Tradeshift"); ?></p>
                            <div><button data-toggle="modal" data-target="#mktoModal2" class="btn cta_joinTheClub"><?php _e("Talk to an expert", "Tradeshift"); ?></button></div>
                            <div class="item download_assets hidden-lg hidden-md">
                                <div class="item-container__img">
                                    <img class="img-responsive lazy-img-fadein" src="/wp-content/themes/Tradeshift/img/main/flipbook.png" alt="The Tradeshift Platform Everything You Need To Know" lazy="loaded">
                                </div>
                                <div class="item-container">
                                    <p><?php _e("[Flipbook] Pro Tips For Accounts Payable: 6 Complaints Suppliers Make About E-invoicing&mdash;and What to Do About Them.", "Tradeshift"); ?></p>
                                    <a href="/resources/flipbook-pro-tips-for-accounts-payable-6-complaints-suppliers-make-about-e-invoicing-and-what-to-do-about-them/"><?php _e('Download Now &raquo;', 'Tradeshift'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials" style="background: transparent !important;">
                            <div id="myCarousel" class="carousel slide carousel-testimonials wow fadeInLeftBig" data-ride="carousel" data-wow-delay="0s" data-wow-duration="1.5s" data-wow-center-offset="1" style="height: 100%;visibility: hidden;background: -webkit-linear-gradient(-37deg, #00b0ff 0%, #004eff 100%)">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="item1 active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class="item2"></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class="item3"></li>
                                    <li data-target="#myCarousel" data-slide-to="3" class="item4"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="testimonials_content">
                                            <div class="quotation">
												<?php _e("I definitely recommend Tradeshift, they're a very easy organization to work with and they make my life a lot easier.", "Tradeshift"); ?>
                                            </div>
                                            <div class="quoted-person"><?php _e('&mdash;Gary Connolly, e-invoicing Manager, ', "Tradeshift"); ?><span class="quoted-company"><?php _e("NHS SBS", "Tradeshift"); ?></span></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonials_content">
                                            <div class="quotation"><?php _e('"We found that it\'s much easier to ask suppliers to onboard with Tradeshift when it costs nothing for them"', "Tradeshift"); ?></div>
                                            <div class="quoted-person"><?php _e('&mdash;Mikael Darphin, Corporate Finance IMO Service Manager,', 'Tradeshift'); ?><span class="quoted-company"><?php _e("Air France | KLM", "Tradeshift"); ?></span></div>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <div class="testimonials_content">
                                            <div class="quotation"><?php _e('"Tradeshift\'s interface is intuitive, state of the art, and among the best. The increase of transparency in workflow is one of major process improvements."', "Tradeshift"); ?></div>
                                            <div class="quoted-person"><?php _e('&mdash;Dr. Thore Lindenmann, Manager of e-Solutions,', 'Tradeshift'); ?><span class="quoted-company"><?php _e('Hapag-Lloyd', 'Tradeshift'); ?></span></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonials_content">
                                            <div class="quotation"><?php _e("We chose Tradeshift because we wanted to have one place suppliers could go to do all of their business.", 'Tradeshift'); ?></div>
                                            <div class="quoted-person"><?php _e('&mdash;Chris Law, Head of Transactions,', 'Tradeshift'); ?><span class="quoted-company"><?php _e('UK Local Government Shared Services', 'Tradeshift'); ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- carousel -->

                            <!-- testimonials - videos -->
                            <div class="testimonials__extras">
                                <div id="myCarouselExtras" class="carousel slide carousel-testimonials" data-ride="carousel" >
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner wow fadeInRightBig" data-wow-delay="0s" data-wow-duration="1.8s" data-wow-center-offset="1" style="visibility: hidden;">

                                        <div class="item active">
                                            <div class="video-screenshot first-video" onclick="fn_vidyard_JYQJ1MPc13KZWrvmU4TJnL();">
                                                <button class="circle" onclick="fn_vidyard_JYQJ1MPc13KZWrvmU4TJnL();">
                                                    <svg width="20px" height="32px">
                                                        <use xlink:href="#play-triangle" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="video-screenshot second-video" onclick="fn_vidyard_X26YsBw5CwzQGriGCdShtU();">
                                                <button class="circle" onclick="fn_vidyard_X26YsBw5CwzQGriGCdShtU();">
                                                    <svg width="20px" height="32px">
                                                        <use xlink:href="#play-triangle" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="video-screenshot third-video" onclick="fn_vidyard_VoCvJSS9o5GpzRPzbFVE25();">
                                                <button class="circle" onclick="fn_vidyard_VoCvJSS9o5GpzRPzbFVE25();">
                                                    <svg width="20px" height="32px">
                                                        <use xlink:href="#play-triangle" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="item active">
                                            <div class="video-screenshot fourth-video" onclick="fn_vidyard_out72rGMse68CCSjY1viVg();">
                                                <button class="circle" onclick="fn_vidyard_out72rGMse68CCSjY1viVg();">
                                                    <svg width="20px" height="32px">
                                                        <use xlink:href="#play-triangle" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- CAROUSEL LOGOS -->
                                <div id="carousel-logos" class="carousel slide carousel-testimonials wow fadeInUp" data-ride="carousel" data-wow-delay="0s" data-wow-duration="1.8s" data-wow-center-offset="0" style="visibility: hidden;">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="testimonials__extras___logos wow fadeInUp">
                                                <img src="<?php echo get_template_directory_uri();?>/img/main/Logo-slide-1.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonials__extras___logos">
                                                <img src="<?php echo get_template_directory_uri();?>/img/main/Logo-slide-2.png" />
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonials__extras___logos">
                                                <img src="<?php echo get_template_directory_uri();?>/img/main/Logo-slide-1.png" />
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonials__extras___logos">
                                                <img src="<?php echo get_template_directory_uri();?>/img/main/Logo-slide-2.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- join the club -->
                        <div class="main-wayToSuccess__powerfulPlatform hidden-sm hidden-xs wow fadeInRightBig" data-wow-delay="0s" data-wow-duration="1.3s" data-wow-center-offset="1" style="visibility: hidden;">
                            <h3><?php _e('Join the club', 'Tradeshift'); ?></h3>
                            <p><?php _e('See how NHS SBS, Air France, and other Tradeshift customers are reimagining business commerce.', 'Tradeshift'); ?></p>
                            <div>
                                <button
                                        data-toggle="modal"
                                        data-target="#mktoModal2"
                                        class="btn cta_joinTheClub"
                                >
									<?php _e('Talk to an expert', 'Tradeshift'); ?>
                                </button>
                            </div>
                            <div class="item download_assets" style="display: flex; align-items: center;margin-top: 28px">
                                <div class="item-container__img">
                                    <img class="lazy-img-fadein" src="/wp-content/themes/Tradeshift/img/main/flipbook.png" lazy="loaded">
                                </div>
                                <div class="item-container" style="margin-top: -5px">
                                    <p style="margin-top: 0;margin-bottom: 5px">
										<?php _e(
											'[Flipbook] Pro Tips For Accounts Payable: 6 Complaints Suppliers Make '.
											'About E-invoicing&mdash;and What to Do About Them.',
											'Tradeshift'
										); ?>
                                    </p>
                                    <a href="<?php echo '/resources/flipbook-pro-tips-for-accounts-payable-6-complaints-' .
										'suppliers-make-about-e-invoicing-and-what-to-do-about-them/'; ?>">
										<?php _e('Download Now &raquo;', 'Tradeshift'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div> <!-- customers ends -->
                </div>
            </div>
        </div>
    </div>
    <div class="main-joinTheMovement">
        <div class="container">
            <div class="row">
                <div class="contents">
                    <h3
                            class="wow fadeIn"
                            data-wow-delay="0s"
                            data-wow-duration="1.8s"
                            data-wow-center-offset="1"
                            style="visibility: hidden;"
                    >
						<?php _e('Commerce for all', 'Tradeshift'); ?>
                    </h3>
                    <p
                            class="wow fadeIn"
                            data-wow-delay="0.3s"
                            data-wow-duration="1.3s"
                            data-wow-center-offset="1"
                            style="visibility: hidden;">
						<?php _e(
							'We envision a future where business commerce is a level playing field for all ' .
							'businesses, of all sizes, everywhere in the world. It’s what drives our innovation,' .
							' determination, and passion. So now you know.', 'Tradeshift'
						); ?>
                    </p>
                    <button class="btn btn-white btn-primary-cta-ent wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.8s" data-wow-center-offset="1" data-toggle="modal" data-target="#mktoModal2" style="visibility: hidden;"><?php _e("Why Tradeshift", "Tradeshift"); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="main-featuredResources">
        <div class="container">
            <div class="row">
                <div class="contents">
                    <div class="resources-wrapper wow fadeIn" data-wow-delay="0s" data-wow-duration="1.8s" data-wow-center-offset="1" style="visibility: hidden;">
                        <div class="grid-1" style="display: -ms-flexbox; display: -webkit-flex; display: -ms-flexbox; display: flex; -ms-flex: 1; -webkit-flex: 1;flex: 0 0 1;height: 100%">
                            <div class="column leading_report">
                                <div class="report-content report-content--header">
                                    <div class="report-header">
                                        <h3><?php _e("Featured Resources", "Tradeshift"); ?></h3>
                                    </div>
                                </div>
                                <div class="report-content report-content--body">
                                    <div class="report-body">
                                        <h3><?php _e('[Complimentary Report] Gartner Magic Quadrant for Procure-to-Pay Suites', 'Tradeshift'); ?></h3>
                                        <p><?php _e('Shift Happened. Tradeshift shows strong momentum debuting in the Gartner Magic Quadrant for P2P Suites.', 'Tradeshift'); ?></p>
                                        <a href="/resources/complimentary-report-gartner-magic-quadrant-for-procure-to-pay-suites/"><?php _e('Learn more &raquo;', 'Tradeshift'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-2" style="display: -ms-flexbox; display: -webkit-flex; display: flex;height: 50%;width: 68.4%;background: #f2f2f2;  -webkit-flex-wrap: wrap; flex-wrap: wrap;-ms-flex-wrap: wrap;">
                            <div class="column blank_lg"></div>
                            <div class="column most_read">
                                <span class="caption"><?php _e('Most read', 'Tradeshift'); ?></span>
                                <span class="title"><?php _e('The 9-trillion dollar question: why is so much liquidity locked up in the supply chain?', 'Tradeshift'); ?></span>
                                <a href="https://blog.tradeshift.com/the-9-trillion-dollar-question-why-is-so-much-liquidity-locked-up-in-the-supply-chain/" title="Fintech Brnk Business Commerce Revolution" class="target"><?php _e('Learn more &raquo;', 'Tradeshift'); ?></a>
                            </div>
                            <div class="column webinar hidden-xs">
                                <span class="caption"><?php _e('Webinars | Global | Nov 16, 2017', 'Tradeshift'); ?></span>
                                <span class="title"><?php _e('Artificial Intelligence in Procurement: A Tradeshift Webinar featuring Gartner Expert Magnus Berfors and Chistian Lanng', 'Tradeshift'); ?></span>
                                <a href="/resources/artificial-intelligence-procurement-demand-webinar-featuring-gartner-expert-magnus-berfors-christian-lanng/" class="target"><?php _e('Watch the webinar &raquo;', 'Tradeshift'); ?></a>
                            </div>
                            <div class="column latest_news">
                                <span class="caption"><?php _e('Latest news', 'Tradeshift'); ?></span>
                                <span class="title"><?php _e('Goldman Sachs invests in the future of supply chain payments and marketplaces', 'Tradeshift'); ?></span>
                                <a href="https://blog.tradeshift.com/goldman-sachs-invests-in-the-future-of-supply-chain-payments-and-marketplaces/" class="target" target="_blank"><?php _e('Learn more &raquo;', 'Tradeshift'); ?></a>

                            </div>
                            <div class="column blank_md"></div>
                            <div class="column webinar visible-xs">
                                <span class="caption"><?php _e("WEBINARS | GLOBAL | AUG 23, 2017", "Tradeshift"); ?>|<?php _e("WEBINARS | GLOBAL | AUG 23, 2017", "Tradeshift"); ?>|<?php _e("WEBINARS | GLOBAL | AUG 23, 2017", "Tradeshift"); ?></span>
                                <span class="title"><?php _e("A Procurement Leaders Guide to Enabling Agility", "Tradeshift"); ?></span>
                                <a href="#" class="target"><?php _e('Register today &raquo;', 'Tradeshift'); ?></a>
                            </div>
                            <div class="column video">
                                <span class="caption"><?php _e('Most read', 'Tradeshift'); ?></span>
                                <span class="title"><?php _e('Tradeshift launches first and only cloud platform for end-to-end supply…', 'Tradeshift'); ?></span>
                                <a href="https://blog.tradeshift.com/cloud-platform-for-connected-supply-chain-finance-and-blockchain-early-payments/" class="target" target="_blank"><?php _e('Learn more &raquo;', 'Tradeshift'); ?></a>
                            </div>
                            <div class="column blank_sm"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal View of Sign Up -->
<div class="modal modal-sign-up fade" id="SignUpModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 id="myModalLabel"><?php _e("Get started with a free account.", "Tradeshift"); ?></h3>
            </div>
            <div class="modal-body">
                <form id="form-sign-up">
                    <div class="sign-up-list">
                        <input type="checkbox" id="buy-sign-up" class="sign-up-checkbox" name="buy-sign-up" value="https://tradeshift.com/enterprise/solutions/buy" />
                        <label for="buy-sign-up"><span></span><b><?php _e("Enterprise", "Tradeshift"); ?></b><?php _e(" – Talk to one of our experts and get a demo.", "Tradeshift"); ?></label>
                    </div>
                    <div class="sign-up-list">
                        <input type="checkbox" id="sb-sign-up" class="sign-up-checkbox" name="sb-sign-up" value="https://go.tradeshift.com/register" />
                        <label for="sb-sign-up"><span></span><b><?php _e("Invoicing", "Tradeshift"); ?></b><?php _e(" – Send and receive invoices.", "Tradeshift"); ?></label>
                    </div>
                    <div class="sign-up-list">
                        <input type="checkbox" id="go-sign-up" class="sign-up-checkbox" name="go-sign-up" value="https://tradeshift.com/go" />
                        <label for="go-sign-up"><span></span><b><?php _e('Tradeshift'); ?><sup>&reg;</sup><?php _e(" Go", "Tradeshift"); ?></b><?php _e("– A virtual assistant for spend &amp; travel.", 'Tradeshift'); ?></label>
                    </div>
                    <button id="btn-sign-up" class="btn btn-primary-cta-ent disabled" type="submit"><?php _e("Sign up", "Tradeshift"); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bundled script -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.js"></script>
<script>
    $(window).load(function() {
        $("#Country").change(function(){
            if( $(this).val() === "US") {
                $("#State option:first-child").text("Select State...");
            }
            if( $(this).val() === "CA") {
                $("#State option:first-child").text("Select Province...");
            }
        });
    });

</script>
<script>
    $(document).ready(function() {
        // / Activate Carousel
        $('.carousel-testimonials').carousel();
        // Enable Carousel Indicators
        $(".item1").click(function(){
            $(".carousel-testimonials").carousel(0);
        });
        $(".item2").click(function(){
            $(".carousel-testimonials").carousel(1);
        });
        $(".item3").click(function(){
            $(".carousel-testimonials").carousel(2);
        });
        $(".item4").click(function(){
            $(".carousel-testimonials").carousel(3);
        });
        // Continue to next slide on both carousels upon clicking on controls
        $('.carousel-testimonials').on('click', '.carousel-control[data-slide]', function (ev) {
            ev.preventDefault();
            $('.carousel-testimonials').carousel($(this).data('slide'));
        });
        // Pause both carousels on hover
        $('.carousel-testimonials').on('mouseover', function(ev) {
            ev.preventDefault();
            $('.carousel-testimonials').carousel('pause');
        });
        $('.carousel-testimonials').on('mouseleave', function(ev) {
            ev.preventDefault();
            setTimeout(function(){
                $('.carousel-testimonials').carousel('cycle');
            }, 500)
            
        });
        //Enable swiping...
        $(".carousel-inner").swipe( {
            //Generic swipe handler for all directions
            swipeLeft:function(event, direction, distance, duration, fingerCount) {
                $(".carousel-inner").parent().carousel('next'); 
            },
            swipeRight: function() {
                $(".carousel-inner").parent().carousel('prev'); 
            },
            //Default is 15px, set to 0 so any distance triggers swipe
            threshold:15
        });
        // wow.js
        new WOW().init();
        wow = new WOW(
            {
                //boxClass:     'hasAnimation',
                animateClass: 'animated',
                animateClass: 'transition',
                offset:       0,
                mobile:       true,
                live:         true,
                callback:     function(box) {
                    //console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            });

        if ($(window).width() > 992) {
            //used to control offset of wow animation
            $( ".wow" ).each(function() {
                if ($(this).attr('data-wow-center-offset')) {
                    offset = $(window).height() / 100 * $(this).attr('data-wow-center-offset');
                }
                else {
                    offset = $(window).height() * 0.25;
                }
                offset = offset + $(this).height() / 2;
                $(this).attr( "data-wow-offset", parseInt(offset) );
            });
        }
        if ($(window).width() < 992) {
            MT = $('.first_tile').detach();
            MT.insertBefore('.commerce');

            //used to control offset of wow animation
            $( ".wow" ).each(function() {
                if ($(this).attr('data-wow-center-offset')) {
                    offset = $(window).height() / 2000 * $(this).attr('data-wow-center-offset');
                }
                else {
                    offset = $(window).height() * 0.25;
                }
                offset = offset + $(this).height() / 10;
                $(this).attr( "data-wow-offset", parseInt(offset) );
            });
        }

    });
</script>
<script>
    jQuery(document).ready(function($) {
        var changeContactUs = (function() {
            var onSuccess = function(geoipResponse) {
                var countryCode = geoipResponse.registered_country.iso_code;
                //console.log(countryCode);
                if(countryCode.toLowerCase() == "uk") {
                    $('.give-us-a-call-md, .give-us-a-call').html("<h5>Contact Us</h5><p>Message us about how Tradeshift can help your business. <span class='sales-phone'><span class='phone_us'><a href='mailto:hello@tradeshift.com' style='color: #20A0F6;font-weight: 600;text-decoration:underline;'>hello@tradeshift.com</a></span></span></p>");
                }
            };
            var onError = function(){
                // console.log('Hello Error');
            };
            return function() {
                geoip2.country( onSuccess, onError );
            };
        }());
        changeContactUs();
    });
</script>

<script type="text/javascript" id="vidyard_embed_code_JYQJ1MPc13KZWrvmU4TJnL" src="//play.vidyard.com/JYQJ1MPc13KZWrvmU4TJnL.js?v=3.1.1&type=lightbox"></script>
<script type="text/javascript" id="vidyard_embed_code_X26YsBw5CwzQGriGCdShtU" src="//play.vidyard.com/X26YsBw5CwzQGriGCdShtU.js?v=3.1.1&type=lightbox"></script>
<script type="text/javascript" id="vidyard_embed_code_VoCvJSS9o5GpzRPzbFVE25" src="//play.vidyard.com/VoCvJSS9o5GpzRPzbFVE25.js?v=3.1.1&type=lightbox"></script>
<script type="text/javascript" id="vidyard_embed_code_out72rGMse68CCSjY1viVg" src="//play.vidyard.com/out72rGMse68CCSjY1viVg.js?v=3.1.1&type=lightbox"></script>
<?php get_footer(); ?>
