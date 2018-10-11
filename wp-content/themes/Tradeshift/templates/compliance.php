 <?php
/*
Template Name: Compliance
*/
get_header(); ?>

		<!-- Main Content Starts -->
		<main class="main-content compliance-page">
			<!-- Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row">
						<div class="contents">
							<h1><?php _e("The Tradeshift Compliance Program", 'Tradeshift'); ?></h1>
							<h3><?php _e("The Tradeshift Compliance Program enables customers to evaluate and understand the robust controls in place at Tradeshift to maintain security and data protection in the cloud.", 'Tradeshift'); ?></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="standard">
				<div class="container">
					<div class="row">
						<div class="contents">
							<p><?php _e("Our systems and process are run in accordance with, and audited against, stringent industry standards for ensuring the security, availability, confidentiality and integrity of data entrusted to our platform. Tradeshift is built from the ground up as a security focused, cloud first solution.  Our platform allows you to rest easy, knowing your data resides with a safe, secure and compliant solution.", 'Tradeshift'); ?></p>
						</div>
					</div>
				</div>
				<div class="arrow"></div>
			</div>
			<div class="assurance-intro">
				<div class="container">
					<div class="row">
						<div class="contents">
							<p><?php _e("Below are the assurance programs we adhere to, and the validated accountability reports we provide our third parties:", 'Tradeshift'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="assurance-list soc1">
				<div class="container">
					<div class="row">
						<h2 class="visible-xs"><?php _e("SOC 1 / ISAE 3402", 'Tradeshift'); ?></h2>
						<div class="imagery"><img src="<?php echo get_template_directory_uri(); ?>/img/compliance/icon-soc.png" /></div>
						<div class="copy">
							<h2 class="hidden-xs"><?php _e("SOC 1 / ISAE 3402", 'Tradeshift'); ?></h2>
							<p><?php _e("The audit for this report is conducted in accordance with AICPA: AT 801 (formerly SSAE 16) and the International Standards for Assurance Engagements No. 3402 (ISAE 3402).", 'Compliance'); ?></p>
							<p><?php _e("This audit is the replacement of the Statement on Auditing Standards No. 70 (SAS 70) Type II report. This dual-standard report can meet a broad range of auditing requirements for U.S. and international auditing bodies.", 'Compliance'); ?></p>
							<p><?php _e("The SOC 1 report audit attests that Tradeshift’s control objectives are appropriately designed, and that the controls safeguarding customer data are operating effectively. It provides information to customers about Tradeshift’s control environment that may be relevant to their internal controls over financial reporting.", 'Tradeshift'); ?></p>
							<p><?php _e("To provide information to customers and their auditors for their assessment and opinion of the effectiveness of internal controls over financial reporting (ICOFR).", 'Compliance'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="assurance-list soc2">
				<div class="container">
					<div class="row">
						<h2 class="visible-xs"><?php _e("SOC 2", 'Tradeshift'); ?></h2>
						<div class="imagery"><img src="<?php echo get_template_directory_uri(); ?>/img/compliance/icon-soc2.png" /></div>
						<div class="copy">
							<h2 class="hidden-xs"><?php _e("SOC 2", 'Tradeshift'); ?></h2>
							<p><?php _e("In addition to the SOC 1 report, Tradeshift also has a <a href=\"http://www.aicpa.org/InterestAreas/FRC/AssuranceAdvisoryServices/Pages/AICPASOC2Report.aspx\" target=\"_blank\">Service Organization Controls 2 (SOC 2), Type II report</a> available. Similar to the SOC 1 in the evaluation of controls, the SOC 2 report is an attestation report that expands the evaluation of controls to the criteria set forth by the <a href=\"https://cert.webtrust.org/pdfs/Trust_Services_PC_latest.pdf\" target=\"_blank\">American Institute of Certified Public Accountants (AICPA) Trust Services Principles</a>. These principles define leading practice controls relevant to security, availability and processing integrity applicable to service organizations, such as Tradeshift.", 'Tradeshift'); ?></p>
							<p><?php _e("The Tradeshift SOC 2 is an evaluation of the design and operating effectiveness of controls that meet the criteria for the security and availability principles set forth in the AICPA's Trust Services Principles criteria. This report provides additional transparency into our security and availability based on a defined industry standard and further demonstrates our commitment to protecting customer data.", 'Tradeshift'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="assurance-list iso">
				<div class="container">
					<div class="row">
						<h2 class="visible-xs"><?php _e("ISO 27001", 'Tradeshift'); ?></h2>
						<div class="imagery"><img src="<?php echo get_template_directory_uri(); ?>/img/compliance/icon-iso.png?ver=20180124" /></div>
						<div class="copy">
							<h2 class="hidden-xs"><?php _e("ISO 27001", 'Tradeshift'); ?></h2>
							<p><?php _e("Tradeshift is also audited against the ISO 27001:2013 standard. ISO 27001:2013 is a widely-adopted global security standard that outlines the requirements for information security management systems. It provides a systematic approach to managing company and customer information that’s based on periodic risk assessments. In order to achieve the certification, a company must show it has a systematic and ongoing approach to managing information security risks that affect the confidentiality, integrity, and availability of company and customer information.", 'Tradeshift'); ?></p>
						</div>
					</div>

				</div>
			</div>
		</main>

<?php get_footer(); ?>
