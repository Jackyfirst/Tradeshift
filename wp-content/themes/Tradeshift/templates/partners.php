<?php
/*
Template Name: Partners
*/
get_header(); ?>

<!-- Main Content Starts -->
<main class="main-content partners-overview">
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="contents">
                    <h1><?php _e("Let's innovate together", 'Tradeshift'); ?></h1>
                    <h3><?php _e("Partner with Tradeshift and let's do great things.", 'Tradeshift'); ?></h3>
                    <a href="#join-us" id="heroMainCtaPartners" class="btn btn-primary-cta" ><?php _e("Join Us!", 'Tradeshift'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="connected">
        <div class="container">
            <div class="row">
                <div class="contents">
                    <h2><?php _e("Connected to the Core", 'Tradeshift'); ?></h2>
					<?php if (is_mobile()): ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/connected-min.png" />
                        <p><?php _e("Collaboration is at the core of everything we do at Tradeshift. We partner with like-minded companies that share our vision of connecting businesses to digitize processes and interactions.", 'Tradeshift'); ?></p>
                        <p><?php _e("Our goal is to collaborate and innovate with our partners to transform and digitize all supply chain-related interactions and business processes while delivering tangible results to end customers.", 'Tradeshift'); ?></p>
					<?php elseif (is_tablet()): ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/connected-min.png" />
                        <p><?php _e("Collaboration is at the core of everything we do at Tradeshift. We partner with like-minded companies that share our vision of connecting businesses to digitize processes and interactions.", 'Tradeshift'); ?></p>
                        <p><?php _e("Our goal is to collaborate and innovate with our partners to transform and digitize all supply chain-related interactions and business processes while delivering tangible results to end customers.", 'Tradeshift'); ?></p>
					<?php else: ?>
                        <div class="wrapper-left">
                            <p><?php _e("Collaboration is at the core of everything we do at Tradeshift. We partner with like-minded companies that share our vision of connecting businesses to digitize processes and interactions.", 'Tradeshift'); ?></p>
                        </div>
                        <div class="wrapper-right">
                            <p><?php _e("Our goal is to collaborate and innovate with our partners to transform and digitize all supply chain-related interactions and business processes while delivering tangible results to end customers.", 'Tradeshift'); ?></p>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="partner-program">
        <div class="container">
            <div class="row overview">
                <div class="contents">
                    <h2><?php _e("Tradeshift Partner Program", 'Tradeshift'); ?></h2>
                    <p><?php _e("Our partner program consists of two main categories: Distribution Partners and App Partners. Some partners are both! Within each category, we offer three tiers of partnership. Based on the tier, Tradeshift offers sales enablement training, training on Tradeshift solutions, and support from our marketing team on joint activities.", 'Tradeshift'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/partner-program-xs.png" />
                </div>
            </div>
            <div class="row distribution">
                <div class="contents">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/icon-dist.png" />
                    <h3><?php _e("Distribution Partner", 'Tradeshift'); ?></h3>
					<?php if (is_mobile()): ?>
                    <p><?php _e("Distribution partners are companies and individuals with whom Tradeshift collaborates to drive joint sales opportunities and joint revenue. These partners include business process outsourcing (BPO) providers, consulting firms, complementary solutions, and referral relationships.", 'Tradeshift'); ?></p>
                    <h4><?php _e("Tradeshift for BPO Providers", 'Tradeshift'); ?></h4>
                    <p><?php _e("You know that the dynamics of the BPO industry are changing quickly. The labor arbitrage model is no longer enough, BPO providers must deliver real value, innovation and modern technology tools to clients.", 'Tradeshift'); ?></p>
                    <p><?php _e("This is what we do best. Our platform helps to increase margins and add revenue streams year over year with your clients. Our technology helps you deliver innovative, differentiated, higher-value services while decreasing operating costs per client and forming long-term, sustainable relationships.", 'Tradeshift'); ?></p>
                    <blockquote>
                        <img class="partner-xerox" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-xerox.png" />
                        <p><?php _e("\"Tradeshift is a strategic global technology partner and is a core platform for our digital transformation strategy in our clients’ Source-to-Pay business processes.\"", 'Tradeshift'); ?></p>
                        <footer><?php _e("John Gentry, President - Finance, Accounting, and Payment, Xerox", 'Tradeshift'); ?></footer>
                    </blockquote>
                </div>
            </div>
			<?php elseif (is_tablet()): ?>
            <p><?php _e("Distribution partners are companies and individuals with whom Tradeshift collaborates to drive joint sales opportunities and joint revenue. These partners include ", 'Tradeshift'); ?><a data-toggle="collapse" data-target="#showBPO">business process outsourcing (BPO)</a><?php _e(" providers, consulting firms, complementary solutions, and referral relationships.", 'Tradeshift'); ?></p>
            <div id="showBPO" class="collapse">
                <h4><?php _e("Tradeshift for BPO Providers", 'Tradeshift'); ?></h4>
                <p><?php _e("You know that the dynamics of the BPO industry are changing quickly. The labor arbitrage model is no longer enough, BPO providers must deliver real value, innovation and modern technology tools to clients.", 'Tradeshift'); ?></p>
                <p><?php _e("This is what we do best. Our platform helps to increase margins and add revenue streams year over year with your clients. Our technology helps you deliver innovative, differentiated, higher-value services while decreasing operating costs per client and forming long-term, sustainable relationships.", 'Tradeshift'); ?></p>
                <div class="testimonial-partners">
                    <blockquote>
                        <img class="partner-xerox" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-xerox.png" />
                        <p><?php _e("\"Tradeshift is a strategic global technology partner and is a core platform for our digital transformation strategy in our clients’ Source-to-Pay business processes.\"", 'Tradeshift'); ?></p>
                        <footer><?php _e("John Gentry, President - Finance, Accounting, and Payment, Xerox", 'Tradeshift'); ?></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
	<?php else: ?>
        <p><?php _e("Distribution partners are companies and individuals with whom Tradeshift collaborates to drive joint sales opportunities and joint revenue. These partners include <a data-toggle=\"collapse\" data-target=\"#showBPO\">business process outsourcing (BPO)</a> providers, consulting firms, complementary solutions, and referral relationships.", 'Tradeshift'); ?></p>
        <div id="showBPO" class="collapse">
            <h4><?php _e("Tradeshift for BPO Providers", 'Tradeshift'); ?></h4>
            <p><?php _e("You know that the dynamics of the BPO industry are changing quickly. The labor arbitrage model is no longer enough, BPO providers must deliver real value, innovation and modern technology tools to clients.", 'Tradeshift'); ?></p>
            <p><?php _e("This is what we do best. Our platform helps to increase margins and add revenue streams year over year with your clients. Our technology helps you deliver innovative, differentiated, higher-value services while decreasing operating costs per client and forming long-term, sustainable relationships.", 'Tradeshift'); ?></p>
            <blockquote class="testimonial-xerox">
                <img class="partner-xerox" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-xerox.png" />
                <p><?php _e("\"Tradeshift is a strategic global technology partner and is a core platform for our digital transformation strategy in our clients’ Source-to-Pay business processes.\"", 'Tradeshift'); ?></p>
                <footer><?php _e("John Gentry, President - Finance, Accounting, and Payment, Xerox", 'Tradeshift'); ?></footer>
            </blockquote>
        </div>
        </div>
        </div>
	<?php endif; ?>

    <div class="row app">
        <div class="contents">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/icon-app.png" />
            <h3><?php _e("App Partner", 'Tradeshift'); ?></h3>
            <p><?php _e("Tradeshift’s open platform enables technology providers and developers to build apps that add value to the buyer-supplier relationship.", 'Tradeshift'); ?></p>
            <p><?php _e("The Tradeshift App Engine is the power source for all Tradeshift apps. We provide an open, secure platform. Our partners bring best-in-class solutions that run on the App Engine and provide all the functionality you’ll need.", 'Tradeshift'); ?></p>
            <p><a href="http://developer.tradeshift.com" target="_blank"><?php _e('Learn more about developing apps on Tradeshift &raquo;', 'Tradeshift'); ?></a></p>
            <p><a href="/solutions/apps"><?php _e('Learn more about Tradeshift Apps &raquo;', 'Tradeshift'); ?></a></p>
        </div>
    </div>
    <div class="row testimonial-partners">
        <blockquote>
            <img class="partner-quyntess" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-quyntess.png" />
            <p><?php _e("\"Our partnership with Tradeshift enabled us to use their platform to build our Supply Chain Management apps in less than five weeks.\"", 'Tradeshift'); ?></p>
            <footer><?php _e("Rob van Ipenburg, CEO, Quyntess", 'Tradeshift'); ?></footer>
        </blockquote>
    </div>
    </div>
    </div>
    <div class="partner-tiers">
        <div class="container">
            <div class="row overview">
                <div class="contents">
                    <h2><?php _e("Partner Tiers", 'Tradeshift'); ?></h2>
                    <p><?php _e("Tradeshift’s Partner Program offers three tiers of partnership - Bronze, Silver and Gold. Each tier looks to create additional value in terms of sales, marketing, training and product offerings for the partner as well as for Tradeshift. Our partnership tiers include the following:", 'Tradeshift'); ?></p>
                </div>
            </div>
			<?php if (is_mobile()): ?>
                <div class="row gold">
                    <div class="contents">
                        <img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-gold.png" alt="Tradeshift <?php _e("Gold", 'Tradeshift'); ?> Partner" />
                        <img class="tier-value" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/gold-partnership-xs.png" />
                    </div>
                </div>
                <div class="row silver">
                    <div class="contents">
                        <img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-silver.png" alt="Tradeshift <?php _e("Silver", 'Tradeshift'); ?> Partner" />
                        <img class="tier-value" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/silver-partnership-xs.png" />
                    </div>
                </div>
                <div class="row bronze">
                    <div class="contents">
                        <img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-bronze.png" alt="Tradeshift <?php _e("Bronze", 'Tradeshift'); ?> Partner" />
                        <img class="tier-value" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/bronze-partnership-xs.png" />
                    </div>
                </div>
			<?php elseif (is_tablet()): ?>
                <div class="row tier-matrix">
                    <div class="contents">
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th>&nbsp;</th>
                                <th class="gold-tier"><img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-gold.png" alt="Tradeshift Gold Partner"/><br /><?php _e("Gold", 'Tradeshift'); ?></th>
                                <th class="silver-tier"><img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-silver.png" alt="Tradeshift Silver Partner" /><br /><?php _e("Silver", 'Tradeshift'); ?></th>
                                <th class="bronze-tier"><img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-bronze.png" alt="Tradeshift Bronze Partner" /><br /><?php _e("Bronze", 'Tradeshift'); ?></th>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Partnership Criteria", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("High Joint Customer Volume", 'Tradeshift'); ?></li>
                                        <li><?php _e("High App Usage Volume", 'Tradeshift'); ?></li>
                                        <li><?php _e("Large Tradeshift Practice", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Medium Joint Customer Volume", 'Tradeshift'); ?></li>
                                        <li><?php _e("Medium App Usage Volume", 'Tradeshift'); ?></li>
                                        <li><?php _e("Tradeshift Practice ", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Teaming Agreement In Place", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Sales Support Included ", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("Gold", 'Tradeshift'); ?> Sales Enablement Package</li>
                                        <li><?php _e("Gold", 'Tradeshift'); ?> Transfer Pricing</li>
                                        <li><?php _e("Demo license", 'Tradeshift'); ?></li>
                                        <li><?php _e("Partner Portal", 'Tradeshift'); ?></li>
                                        <li><?php _e("Dedicated Channel Manager ", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Silver", 'Tradeshift'); ?> Sales Enablement Package</li>
                                        <li><?php _e("Silver", 'Tradeshift'); ?> Transfer Pricing</li>
                                        <li><?php _e("Demo license", 'Tradeshift'); ?></li>
                                        <li><?php _e("Partner Portal", 'Tradeshift'); ?></li>
                                        <li><?php _e("Channel Manager Assigned", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Bronze", 'Tradeshift'); ?> Sales Enablement Package</li>
                                        <li><?php _e("Bronze", 'Tradeshift'); ?> Transfer Pricing</li>
                                        <li><?php _e("Partner Portal", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Marketing Support Included ", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("Gold", 'Tradeshift'); ?> Marketing Package</li>
                                        <li><?php _e("Joint Press Release", 'Tradeshift'); ?></li>
                                        <li><?php _e("Joint marketing collateral", 'Tradeshift'); ?></li>
                                        <li><?php _e("Gold", 'Tradeshift'); ?> Partner logo usage</li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Silver", 'Tradeshift'); ?> Marketing Package</li>
                                        <li><?php _e("Joint Press Release", 'Tradeshift'); ?></li>
                                        <li><?php _e("Silver", 'Tradeshift'); ?> Partner logo usage</li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Tradeshift quote for your PR", 'Tradeshift'); ?></li>
                                        <li><?php _e("Logo on Tradeshift partner website", 'Tradeshift'); ?></li>
                                        <li><?php _e("Bronze", 'Tradeshift'); ?> Partner logo usage </li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Technology Support Included ", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("Gold", 'Tradeshift'); ?> app design/guidance package</li>
                                        <li><?php _e("Gold", 'Tradeshift'); ?> solution training package</li>
                                        <li><?php _e("Discounted internal use license", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Silver", 'Tradeshift'); ?> app design/guidance package</li>
                                        <li><?php _e("Silver", 'Tradeshift'); ?> solution training package</li>
                                        <li><?php _e("Discounted internal use license", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Bronze", 'Tradeshift'); ?> app design/guidance package</li>
                                        <li><?php _e("Bronze", 'Tradeshift'); ?> solution training package</li>
                                        <li><?php _e("Discounted internal use license", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Customer Support", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("Email and phone support", 'Tradeshift'); ?></li>
                                        <li><?php _e("Named support manager ", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Email and phone support", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Email based support", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			<?php else: ?>
                <div class="row tier-matrix">
                    <div class="contents">
                        <table width="100%">
                            <tbody>
                            <tr>
                                <th>&nbsp;</th>
                                <th class="gold-tier"><img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-gold.png" alt="Tradeshift <?php _e("Gold", 'Tradeshift'); ?> Partner" /><br /><?php _e("Gold", 'Tradeshift'); ?></th>
                                <th class="silver-tier"><img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-silver.png" alt="Tradeshift <?php _e("Silver", 'Tradeshift'); ?> Partner" /><br /><?php _e("Silver", 'Tradeshift'); ?></th>
                                <th class="bronze-tier"><img class="seal" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/badge-bronze.png" alt="Tradeshift <?php _e("Bronze", 'Tradeshift'); ?> Partner" /><br /><?php _e("Bronze", 'Tradeshift'); ?></th>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Partnership Criteria", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("High Joint Customer Volume", 'Tradeshift'); ?></li>
                                        <li><?php _e("High App Usage Volume", 'Tradeshift'); ?></li>
                                        <li><?php _e("Large Tradeshift Practice", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Medium Joint Customer Volume", 'Tradeshift'); ?></li>
                                        <li><?php _e("Medium App Usage Volume", 'Tradeshift'); ?></li>
                                        <li><?php _e("Tradeshift Practice", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Teaming Agreement In Place", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Sales Support Included", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("Gold Sales Enablement Package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Gold Transfer Pricing", 'Tradeshift'); ?></li>
                                        <li><?php _e("Demo license", 'Tradeshift'); ?></li>
                                        <li><?php _e("Partner Portal", 'Tradeshift'); ?></li>
                                        <li><?php _e("Dedicated Channel Manager", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Silver Sales Enablement Package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Silver Transfer Pricing", 'Tradeshift'); ?></li>
                                        <li><?php _e("Demo license", 'Tradeshift'); ?></li>
                                        <li><?php _e("Partner Portal", 'Tradeshift'); ?></li>
                                        <li><?php _e("Channel Manager Assigned", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Bronze Sales Enablement Package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Bronze Transfer Pricing", 'Tradeshift'); ?></li>
                                        <li><?php _e("Partner Portal", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Marketing Support Included", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("Gold Marketing Package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Joint Press Release", 'Tradeshift'); ?></li>
                                        <li><?php _e("Joint marketing collateral", 'Tradeshift'); ?></li>
                                        <li><?php _e("Gold Partner logo usage", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Silver Marketing Package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Joint Press Release", 'Tradeshift'); ?></li>
                                        <li><?php _e("Silver Partner logo usage", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Tradeshift quote for your PR", 'Tradeshift'); ?></li>
                                        <li><?php _e("Logo on Tradeshift partner website", 'Tradeshift'); ?></li>
                                        <li><?php _e("Bronze Partner logo usage", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Technology Support Included ", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("Gold app design/guidance package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Gold solution training package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Discounted internal use license", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Silver app design/guidance package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Silver solution training package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Discounted internal use license", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Bronze app design/guidance package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Bronze solution training package", 'Tradeshift'); ?></li>
                                        <li><?php _e("Discounted internal use license", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td class="row-title"><?php _e("Customer Support", 'Tradeshift'); ?></td>
                                <td class="gold-tier"><ul>
                                        <li><?php _e("Email and phone support", 'Tradeshift'); ?></li>
                                        <li><?php _e("Named support manager", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="silver-tier"><ul>
                                        <li><?php _e("Email and phone support", 'Tradeshift'); ?></li>
                                    </ul></td>
                                <td class="bronze-tier"><ul>
                                        <li><?php _e("Email based support", 'Tradeshift'); ?></li>
                                    </ul></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			<?php endif; ?>
        </div>
    </div>
    <div class="partner-logos">
        <div class="container">
            <div class="row case-studies">
                <h2><?php _e("Tradeshift Partners", 'Tradeshift'); ?></h2>
                <div class="contents">
                    <div class="logo-wrapper">
                        <div class="logo-ecovadis">
                            <a href="/partners/ecovadis/"><img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-ecovadis-v2.png" alt="Ecovadis" /></a>
                        </div>
                        <div class="logo-wipro visible-xs">
                            <a href="http://wipro.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-wipro.png" alt="Wipro" /></a>
                        </div>
                        <div class="logo-c2fo">
                            <a href="/partners/c2fo/"><img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-c2fo.png" alt="C2FO" /></a>
                        </div>
                        <div class="logo-wipro hidden-xs">
                            <a href="http://wipro.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-wipro.png" alt="Wipro" /></a>
                        </div>
                        <div class="logo-quyntess">
                            <a href="/partners/quyntess/"><img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-quyntess.png" alt="Quyntess" /></a>
                        </div>
                        <div class="logo-determine">
                            <a href="/partners/determine"><img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/logo-determine.png" alt="Determine" /></a>
                        </div>
                    </div>
                </div>
            </div>
			<?php if (is_mobile()): ?>
                <div class="row show-initial">
                    <div class="contents">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/partner-logos-xs.jpg" />
                    </div>
                </div>
                <button class="show-more-trigger" data-toggle="collapse" data-target="#showMore"><?php _e("Show More", 'Tradeshift'); ?></button>
                <div id="showMore" class="row collapse show-more">
                    <div class="contents">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/partner-logos-more-xs-min-v3.png" />
                    </div>
                </div>
			<?php elseif (is_tablet()): ?>
                <img class="logos-sm" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/partner-logos-min-v3.png" alt="<?php _e("Tradeshift Partners", 'Tradeshift'); ?>" />
			<?php else: ?>
                <img class="logos-rest logos-sm hidden-md hidden-lg" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/partner-logos-min-v3.png" alt="<?php _e("Tradeshift Partners", 'Tradeshift'); ?>" />
                <img class="logos-rest logos-md hidden-sm" src="<?php echo get_template_directory_uri(); ?>/img/partnersv2/partner-logos-min-v3.png" alt="<?php _e("Tradeshift Partners", 'Tradeshift'); ?>" />
			<?php endif; ?>
        </div>
    </div>
    <div id="join-us" class="partners-form">
        <div class="container">
            <div class="row">
                <div class="contents">
                    <h2><?php _e("Let's Connect", 'Tradeshift'); ?></h2>
                    <p><?php _e("Whether you're a well-established firm or a start-up, if you have an established market presence – or just a good idea! – we want to speak with you. Fill out the information below and our Alliance team will be in touch with you shortly.", 'Tradeshift'); ?></p>
                    <script src="//app-sjo.marketo.com/js/forms2/js/forms2.js"></script>
                    <div class="partner-cta-form">
                        <form id="mktoForm_302"></form>
                        <script type="text/javascript">
                            MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 302, function(form){
                                form.vals({"Marketing_Resource_Name__c":"Partner page"});
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
