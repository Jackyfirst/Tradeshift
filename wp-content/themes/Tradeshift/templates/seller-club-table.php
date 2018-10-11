<div class="section-3">
	<div class="container">
		<div class="row">
			<div class="contents">
				<div id="plansPricing" class="vue-plans-pricing plans-pricing">
					<div class="rectangle lightBlue"></div>
					<h2><?php _e("Plans and Prices", "Tradeshift"); ?></h2>
					<div class="rootTable hidden-sm hidden-xs">
						<div class="badges is-row flex">
							<div class="col-4 column no-margin no-badge"></div>
							<div class="col-2 column no-badge"></div>
							<div class="col-2 column">
								<img src="<?php echo get_template_directory_uri();?>/img/seller-club/seller-silver@2x.png" alt="<?php _e("Enterprise Silver Plan | Tradeshift", "Tradeshift"); ?>" />
							</div>
							<div class="col-2 column">
								<img src="<?php echo get_template_directory_uri();?>/img/seller-club/seller-gold@2x.png" alt="<?php _e("Enterprise Gold Plan | Tradeshift", "Tradeshift"); ?>" />
							</div>
							<div class="col-2 column">
								<img src="<?php echo get_template_directory_uri();?>/img/seller-club/seller-platinum@2x.png" alt="<?php _e("Enterprise Platinum Plan | Tradeshift", "Tradeshift"); ?>" />
							</div>
							<div class="col-2 column">
								<img src="<?php echo get_template_directory_uri();?>/img/seller-club/seller-platinum-x@2x.png" alt="<?php _e("Enterprise Platinum-x Plan | Tradeshift", "Tradeshift"); ?>" />
							</div>
						</div>
						<div class="plans is-row flex">
							<div class="col-4 column no-margin"></div>
							<div class="col-2 column plan-name free"><?php _e("Free", "Tradeshift"); ?></div>
							<div class="col-2 column plan-name silver"><?php _e("Enterprise <br />Silver", "Tradeshift"); ?></div>
							<div class="col-2 column plan-name gold"><?php _e("Enterprise <br />Gold", "Tradeshift"); ?></div>
							<div class="col-2 column plan-name platinum"><?php _e("Enterprise Platinum", "Tradeshift"); ?></div>
							<div class="col-2 column plan-name platinum-x"><?php _e("Enterprise Platinum X", "Tradeshift"); ?></div>
						</div>
						<div class="pricing is-row flex">
							<div class="col-4 column no-margin"></div>
							<div class="col-2 column col-free">
								<div><?php _e("Trendsetter", "Tradeshift"); ?></div>
								<div class="periodic"><?php _e("Quarterly", "Tradeshift"); ?></div>
								<div class="price"><div v-cloak>{{pricing.free}}</div></div>
								<div class="cta" data-toggle="modal" data-target="#mktoModal1"><?php _e("Learn more", 'Tradeshift'); ?></div>
							</div>
							<div class="col-2 column col-silver">
								<div><?php _e("Momentum maker", "Tradeshift"); ?></div>
								<div class="periodic"><?php _e("Quarterly", "Tradeshift"); ?></div>
								<div class="price"><div v-cloak>{{pricing.silver}}</div></div>
								<div class="cta" data-toggle="modal" data-target="#mktoModal1"><?php _e("Learn more", 'Tradeshift'); ?></div>
							</div>
							<div class="col-2 column col-gold">
								<div><?php _e("Pacesetter", "Tradeshift"); ?></div>
								<div class="periodic"><?php _e("Quarterly", "Tradeshift"); ?></div>
								<div class="price"><div v-cloak>{{pricing.gold}}</div></div>
								<div class="cta" data-toggle="modal" data-target="#mktoModal1"><?php _e("Learn more", 'Tradeshift'); ?></div>
							</div>
							<div class="col-2 column col-platinum">
								<div><?php _e("Spotlight grabber", "Tradeshift"); ?></div>
								<div class="periodic"><?php _e("Quarterly", "Tradeshift"); ?></div>
								<div class="price"><div v-cloak>{{pricing.platinum}}</div></div>
								<div class="cta" data-toggle="modal" data-target="#mktoModal1"><?php _e("Learn more", 'Tradeshift'); ?></div>
							</div>
							<div class="col-2 column col-platinum-x">
								<div><?php _e("Game changer", "Tradeshift"); ?></div>
								<div class="periodic"><?php _e("Quarterly", "Tradeshift"); ?></div>
								<div class="price"><div v-cloak>{{pricing.platinum_x}}</div></div>
								<div class="cta" data-toggle="modal" data-target="#mktoModal1"><?php _e("Learn more", 'Tradeshift'); ?></div>
							</div>
						</div>
						<div class="plans-invoicing is-row" style="width: 100%">
							<div class="col-12 flex">
								<div class="col-4 column no-margin text-left heading-is-blue underline"><div class="heading"><?php _e("Invoicing", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"></div>
								<div class="col-2 column col-silver"></div>
								<div class="col-2 column col-gold"></div>
								<div class="col-2 column col-platinum"></div>
								<div class="col-2 column col-platinum-x"></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left underline"><div class="heading underline" data-toggle="tooltip" data-placement="bottom" title="<?php _e("Invoices or POs using our online user interface (UI)", "Tradeshift"); ?>"><?php _e("Web Documents", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><?php _e("Unlimited", "Tradeshift"); ?></div>
								<div class="col-2 column col-silver"><?php _e("Unlimited", "Tradeshift"); ?></div>
								<div class="col-2 column col-gold"><?php _e("Unlimited", "Tradeshift"); ?></div>
								<div class="col-2 column col-platinum"><?php _e("Unlimited", "Tradeshift"); ?></div>
								<div class="col-2 column col-platinum-x"><?php _e("Unlimited", "Tradeshift"); ?></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left underline"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Tradeshift builds and manages the integration between your Tradeshift eInvoicing solution and your ERP", "Tradeshift"); ?>"><?php _e("Integration Standard <sup>1</sup>", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left underline"><div class="heading underline" data-toggle="tooltip" data-placement="bottom" title="<?php _e("Invoices or POs created through an integrated scenario between your Tradeshift solution and ERP", "Tradeshift"); ?>"><?php _e("Integration Custom (annual documents)", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><?php _e("Up to 300", "Tradeshift"); ?></div>
								<div class="col-2 column col-gold"><?php _e("301 &mdash; 3000", "Tradeshift"); ?></div>
								<div class="col-2 column col-platinum"><?php _e("Unlimited", "Tradeshift"); ?></div>
								<div class="col-2 column col-platinum-x"><?php _e("Unlimited", "Tradeshift"); ?></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left underline"><div class="heading underline" data-toggle="tooltip" data-placement="bottom" title="<?php _e("The number of branches or divisions to include within the integration set-up", "Tradeshift"); ?>"><?php _e("Integrated Branches/Formats <sup>2</sup>", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver">1</div>
								<div class="col-2 column col-gold">3</div>
								<div class="col-2 column col-platinum">5</div>
								<div class="col-2 column col-platinum-x">50</div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left underline"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("The number of customer accounts your account integrates with", "Tradeshift"); ?>"><?php _e("Integrated Buyers", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver">1</div>
								<div class="col-2 column col-gold">3</div>
								<div class="col-2 column col-platinum">5</div>
								<div class="col-2 column col-platinum-x"><?php _e("Unlimited", "Tradeshift"); ?></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left underline"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Stay informed about your integration scenario with notifications and alerts. (Alerts are only sent if integration is through Babelway)", "Tradeshift"); ?>"><?php _e("Integration Monitoring <sup>3</sup>", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Exchange standards-based electronic documents over the PEPPOL network", "Tradeshift"); ?>"><?php _e("PEPPOL Access Point <sup>4<sup>", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left">
									<div class="heading underline"><?php _e("Chorus Pro Access Point <sup>4<sup>", "Tradeshift"); ?></div>
								</div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
						</div>
						<div class="plans-support is-row" style="width: 100%">
							<div class="col-12 flex">
								<div class="col-4 column no-margin text-left heading-is-blue"><div class="heading"><?php _e("Support and Services", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"></div>
								<div class="col-2 column col-silver"></div>
								<div class="col-2 column col-gold"></div>
								<div class="col-2 column col-platinum"></div>
								<div class="col-2 column col-platinum-x"></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Get the assistance you need within a 4-hour to 16-hour window", "Tradeshift"); ?>"><?php _e("Priority Response", "Tradeshift") ?></div></div>
								<div class="col-2 column col-free"><?php _e("24 hours", "Tradeshift"); ?></div>
								<div class="col-2 column col-silver"><?php _e("16 hours", "Tradeshift"); ?></div>
								<div class="col-2 column col-gold"><?php _e("12 hours", "Tradeshift"); ?></div>
								<div class="col-2 column col-platinum"><?php _e("8 hours", "Tradeshift"); ?></div>
								<div class="col-2 column col-platinum-x"><?php _e("4 hours", "Tradeshift"); ?></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline" data-toggle="tooltip" data-placement="bottom" title="<?php _e("Get concierge-level support from a single point of contact who is an expert on your specific integration scenario", "Tradeshift"); ?>"><?php _e("Dedicated Account Manager", "Tradeshift") ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><?php _e("Concierge", "Tradeshift"); ?></div>
								<div class="col-2 column col-platinum-x"><?php _e("Concierge", "Tradeshift"); ?></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Track POs, invoices and customer connections with detailed reporting services", "Tradeshift"); ?>"><?php _e("Enhanced Reporting Service", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
						</div>
						<div class="plans-support is-row" style="width: 100%">
							<div class="col-12 flex">
								<div class="col-4 column no-margin text-left heading-is-blue"><div class="heading"><?php _e("Cheaper Capital", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"></div>
								<div class="col-2 column col-silver"></div>
								<div class="col-2 column col-gold"></div>
								<div class="col-2 column col-platinum"></div>
								<div class="col-2 column col-platinum-x"></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("Invoice Financing", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("Supplier Financing", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
						</div>
						<div class="plans-support is-row" style="width: 100%">
							<div class="col-12 flex">
								<div class="col-4 column no-margin text-left heading-is-blue"><div class="heading"><?php _e("Club Discounts", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"></div>
								<div class="col-2 column col-silver"></div>
								<div class="col-2 column col-gold"></div>
								<div class="col-2 column col-platinum"></div>
								<div class="col-2 column col-platinum-x"></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("Credit Scoring", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver col-silver">{{coface.silver}} credit</div>
								<div class="col-2 column col-gold">{{coface.gold}} credit</div>
								<div class="col-2 column col-platinum">{{coface.platinum}} credit</div>
								<div class="col-2 column col-platinum-x">{{coface.platinum_x}} credit</div>
							</div>
						</div>
						<div class="plans-support is-row" style="width: 100%">
							<div class="col-12 flex">
								<div class="col-4 column no-margin text-left heading-is-blue"><div class="heading"><?php _e("Additional Discounts Coming Soon", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"></div>
								<div class="col-2 column col-silver"></div>
								<div class="col-2 column col-gold"></div>
								<div class="col-2 column col-platinum"></div>
								<div class="col-2 column col-platinum-x"></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("Company Intelligence", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("Freight Shipment", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("Security Scoring", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("Shipping (Small Package)", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("VAT Recovery", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
						</div>
						<div class="plans-support is-row" style="width: 100%">
							<div class="col-12 flex">
								<div class="col-4 column no-margin text-left heading-is-blue">
									<div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Sell more with services designed to help your company stand out", "Tradeshift"); ?>"><?php _e("Marketing & eCommerce", "Tradeshift"); ?></div>
								</div>
								<div class="col-2 column col-free"></div>
								<div class="col-2 column col-silver"></div>
								<div class="col-2 column col-gold"></div>
								<div class="col-2 column col-platinum"></div>
								<div class="col-2 column col-platinum-x"></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading" ><?php _e("Offer Management", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading" ><?php _e("External Offer", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver "><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Boost your profile with earned badges that showcase your program level", "Tradeshift"); ?>"><?php _e("Profile - Integration Badge", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline" data-toggle="tooltip" data-placement="bottom" title="<?php _e("Boost your profile with earned badges that showcase your program level", "Tradeshift"); ?>"><?php _e("Profile - Membership Badge", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Get consulting from Tradeshift to help you reach your target audience and optimize your profile", "Tradeshift"); ?>"><?php _e("Profile - Optimization Support", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading"><?php _e("Profile - Credit Score Badge", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
						</div>
						<div class="plans-support is-row" style="width: 100%">
							<div class="col-12 flex">
								<div class="col-4 column no-margin text-left heading-is-blue"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Receive special invitations to Tradeshift events and activities so you can meet potential customers and network with your industry peers", "Tradeshift"); ?>"><?php _e("Event Invitations", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"></div>
								<div class="col-2 column col-silver"></div>
								<div class="col-2 column col-gold"></div>
								<div class="col-2 column col-platinum"></div>
								<div class="col-2 column col-platinum-x"></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Network with your peers and share best practices about AR and marketing", "Tradeshift"); ?>"><?php _e("Seller Events", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Gain exposure to buyers on the network and get more customers", "Tradeshift"); ?>"><?php _e("Buyer Events", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-check-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
							<div class="col-12 flex parent-row">
								<div class="col-4 column no-margin text-left"><div class="heading underline"  data-toggle="tooltip" data-placement="bottom" title="<?php _e("Access special events and connect with buyers from Fortune 1000 companies", "Tradeshift"); ?>"><?php _e("Exclusive Events", "Tradeshift"); ?></div></div>
								<div class="col-2 column col-free"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-silver"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-gold"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-platinum"><i class="fa fa-times-circle"></i></div>
								<div class="col-2 column col-platinum-x"><i class="fa fa-check-circle"></i></div>
							</div>
						</div>
						<div class="plans-support is-row" style="width: 100%">
							<div class="col-12 flex">
								<div class="col-6 column no-margin text-left additional-rates sm"><?php _e("<sup>1</sup> Integration is free for Sellers who can support one of Tradeshift's 25+ standardized integration offerings, unlimited documents", "Tradeshift"); ?></div>
								<div class="col-4 column additional-rates md"><?php _e("<sup>2</sup> Additional $375/quarter for 5 branches", "Tradeshift"); ?></div>
								<div class="col-4 column additional-rates lg"><?php _e("<sup>3</sup> Alerts only if integration through Babelway", "Tradeshift"); ?></div>
								<div class="col-4 column additional-rates lg"><?php _e("<sup>4</sup> Unlimited number of buyers", "Tradeshift"); ?></div>
							</div>
						</div>
					</div>
					<div class="packages-sm hidden-lg hidden-md">
						<div id="accordion" class="panel-group">
							<!-- Free -->
							<div class="panel panel-default">
								<div class="panel-heading plan-name free">
									Free
								</div>
								<div class="accordion-preview">
									<div class="name-secondary"><?php _e("Trendsetter", "Tradeshift"); ?></div>
									<div class="price">$0</div>
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="expand"><i class="fa fa-angle-down"></i></a>
								</div>
								<div id="collapseTwo" class="panel-content panel-collapse collapse">
									<div class="panel-body">
										<?php _e("Get free unlimited web invoicing, without integration to your ERP system.", "Tradeshift"); ?>
										<ul>
											<li><?php _e("Unlimited invoices or POs using our online user interface (UI)", "Tradeshift"); ?></li>
											<li><?php _e("24-hour support response time", "Tradeshift"); ?></li>
										</ul>
										<div class="cta" data-toggle="modal" data-target="#mktoModal2"><?php _e("Learn more", 'Tradeshift'); ?></div>
									</div>
								</div>
							</div>

							<!-- Enterprise Silver -->
							<div class="panel panel-default">
								<div class="panel-heading plan-name silver">
									<?php _e("Enterprise Silver", "Tradeshift"); ?>
								</div>
								<div class="accordion-preview">
									<div class="name-secondary"><?php _e("Momentum maker", "Tradeshift"); ?></div>
									<div class="price">{{pricing.silver}}</div>
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="expand"><i class="fa fa-angle-down"></i></a>
								</div>
								<div id="collapseOne" class="panel-content panel-collapse collapse">
									<div class="panel-body">
										<?php _e("Get a managed integration service to connect with your ERP system.", "Tradeshift"); ?>
										<ul>
											<li><?php _e("Supports up to 300 integrated documents per year", "Tradeshift"); ?></li>
											<li><?php _e("Faster support response time (within 16 hours)", "Tradeshift"); ?></li>
											<li><?php _e("Integration monitoring reports so you can track the health and status of your integration scenario", "Tradeshift"); ?></li>
											<li><?php _e("$150 credit towards Coface's solvency reports to assess the risk of potential trading partners", "Tradeshift"); ?></li>
											<li><?php _e("Special invitations to Tradeshift events where you can network with your industry peers", "Tradeshift"); ?></li>
											<li><?php _e("Earn digital badges for your profile to indicate your integration status and boost your profile", "Tradeshift"); ?></li>
										</ul>
										<div class="cta" data-toggle="modal" data-target="#mktoModal2"><?php _e("Learn more", 'Tradeshift'); ?></div>
									</div>
								</div>
							</div>

							<!-- Enterprise Gold -->
							<div class="panel panel-default">
								<div class="panel-heading plan-name gold">
									<?php _e("Enterprise Gold", "Tradeshift"); ?>
								</div>
								<div class="accordion-preview">
									<div class="name-secondary"><?php _e("Pacesetter", "Tradeshift"); ?></div>
									<div class="price">{{pricing.gold}}</div>
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="expand"><i class="fa fa-angle-down"></i></a>
								</div>
								<div id="collapseThree" class="panel-content panel-collapse collapse">
									<div class="panel-body">
										<?php _e("Get a managed integration service to connect with your ERP systems for up to 3 branches and 3 buyers.", "Tradeshift"); ?>
										<ul>
											<li><?php _e("Supports up to 3,000 integrated documents per year", "Tradeshift"); ?></li>
											<li><?php _e("Faster support response time (within 12 hours)", "Tradeshift"); ?></li>
											<li><?php _e("Integration monitoring reports so you can track the health and status of your integration scenario", "Tradeshift"); ?></li>
											<li><?php _e("Reporting services to help you track PO and invoice status", "Tradeshift"); ?></li>
											<li><?php _e("Support in how to optimize your profile on the Tradeshift network", "Tradeshift"); ?></li>
											<li><?php _e("$300 credit towards Coface's solvency reports to assess the risk of potential trading partners", "Tradeshift"); ?></li>
											<li><?php _e("Special invitations to Tradeshift events where you can network with your industry peers", "Tradeshift"); ?></li>
											<li><?php _e("Earn digital badges for your profile to indicate your integration status and boost your profile", "Tradeshift"); ?></li>
										</ul>
										<div class="cta" data-toggle="modal" data-target="#mktoModal2"><?php _e("Learn more", 'Tradeshift'); ?></div>
									</div>
								</div>
							</div>

							<!-- Enterprise Platinum -->
							<div class="panel panel-default">
								<div class="panel-heading plan-name platinum">
									<?php _e("Enterprise Platinum", "Tradeshift"); ?>
								</div>
								<div class="accordion-preview">
									<div class="name-secondary"><?php _e("Spotlight grabber", "Tradeshift"); ?></div>
									<div class="price">{{pricing.platinum}}</div>
									<a data-toggle="collapse" href="#collapseFour" class="expand"><i class="fa fa-angle-down"></i></a>
								</div>
								<div id="collapseFour" class="panel-content panel-collapse collapse">
									<div class="panel-body">
										<?php _e("Get a managed integration service to connect with your ERP systems for up to 5 branches and 5 buyers.", "Tradeshift"); ?>
										<ul>
											<li><?php _e("Supports unlimited integrated documents per year", "Tradeshift"); ?></li>
											<li><?php _e("Fastest support response time (within 8 hours)", "Tradeshift"); ?></li>
											<li><?php _e("Integration monitoring reports so you can track the health and status of your integration scenario", "Tradeshift"); ?></li>
											<li><?php _e("Reporting services to help you track PO and invoice status", "Tradeshift"); ?></li>
											<li><?php _e("Support in how to optimize your profile on the Tradeshift network", "Tradeshift"); ?></li>
											<li><?php _e("$900 credit towards Coface's solvency reports to assess the risk of potential trading partners and self-scoring", "Tradeshift"); ?></li>
											<li><?php _e("Special invitations to Tradeshift events where you can network with your industry peers and potential customers", "Tradeshift"); ?></li>
											<li><?php _e("Earn digital badges for your profile to indicate your integration status and boost your profile", "Tradeshift"); ?></li>
										</ul>
										<div class="cta" data-toggle="modal" data-target="#mktoModal2"><?php _e("Learn more", 'Tradeshift'); ?></div>
									</div>
								</div>
							</div>

							<!-- Enterprise Platinum X -->
							<div class="panel panel-default">
								<div class="panel-heading plan-name platinum-x">
									<?php _e("Enterprise Platinum X", "Tradeshift"); ?>
								</div>
								<div class="accordion-preview">
									<div class="name-secondary"><?php _e("Game changer", "Tradeshift"); ?></div>
									<div class="price">*</div>
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="expand"><i class="fa fa-angle-down"></i></a>
								</div>
								<div id="collapseFive" class="panel-content panel-collapse collapse">
									<div class="panel-body">
										<?php _e("Get a managed integration service to connect with your ERP systems for up to 50 branches and unlimited buyers.", "Tradeshift"); ?>
										<ul>
											<li><?php _e("Supports unlimited integrated documents per year", "Tradeshift"); ?></li>
											<li><?php _e("Fastest support response time (within 4 hours)", "Tradeshift"); ?></li>
											<li><?php _e("Integration monitoring reports so you can track the health and status of your integration scenario", "Tradeshift"); ?></li>
											<li><?php _e("Reporting services to help you track PO and invoice status", "Tradeshift"); ?></li>
											<li><?php _e("Support in how to optimize your profile on the Tradeshift network", "Tradeshift"); ?></li>
											<li><?php _e("$5,000 credit towards Coface's solvency reports to assess the risk of potential trading partners and self-scoring", "Tradeshift"); ?></li>
											<li><?php _e("Special invitations to exclusive Tradeshift events", "Tradeshift"); ?></li>
											<li><?php _e("Earn digital badges for your profile to indicate your integration status and boost your profile", "Tradeshift"); ?></li>
										</ul>
										<div class="cta" data-toggle="modal" data-target="#mktoModal2"><?php _e("Learn more", 'Tradeshift'); ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
