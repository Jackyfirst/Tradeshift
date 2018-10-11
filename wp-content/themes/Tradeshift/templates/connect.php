<?php
/*
Template Name: Tradeshift Connect
*/
get_header('connect'); ?>
<style>
@media (min-width: 992px) {
 .smartling-fr .shop .supplier-surveys {
  width: 45% !important;
 }
 .smartling-fr .resources p {
  font-size: 17px !important;
 }
}
@media (min-width: 1200px) {
}
</style>
<!-- Main Content Starts -->
<main class="main-content ts-connect">
 
 <div id="sectionHero" class="section-view section-hero">
  <div class="container" style="position:relative;z-index: 9999">
   <div class="row">
    <div class="contents">
     <h1><?php _e("Tradeshift<sup>&reg;</sup> Connect", 'Tradeshift'); ?></h1>
     <h2><?php _e("Complete visibility into all your suppliers.", 'Tradeshift'); ?></h2>
     
     <div id="heroForm">
      <div class="form-container buy-form">
       <form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
        <input type="e-mail" class="form-control" id="e-mail" placeholder="<?php _e("Enter Email", "Tradeshift"); ?>">
        <button type="button" class="btn btn-cta btn-nm" id="finalForm" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Let's get started", 'Tradeshift'); ?></button>
       </form>
      </div>
     </div>
    </div>	
    <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-macBook-sm.png" class="macbook visible-sm">	
    <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-macBook.png" class="macbook hidden-sm hidden-xs">					
   </div>
  </div>
  <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-plant-sm.png" class="visible-sm" style="position: absolute;bottom:-81px" />
 </div>
 <div class="hero-footer" id="sectionOne">
  <div class="container">
   <div class="row">
    <div class="contents">
     <h2><?php _e("Complete visibility into your suppliers so you can <span class=\"text-carousel\"></span>", 'Tradeshift'); ?></h2>
    </div>
   </div>
  </div>
 </div>
 <div class="ts-buy-section">
  <div class="container">
   <div class="row">
    <div class="contents">
     <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-top-bar-xs.png" class="visible-xs divider" />
     <h2><?php _e("Welcome to Tradeshift<sup>&reg;</sup> Connect<br class=\"hidden-xs\"><span class=\"hidden-xs\">One stop for managing all of your suppliers.", 'Tradeshift'); ?></span></h2>
     <!-- ts connect features -->
     <div class="ts-connect-container">
      <div class="ts-connect-features">
       <div class="image">
        <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-icon-folder.png" alt="<?php _e("Get all your supplier data under control | Tradeshift Buy", 'Tradeshift'); ?>">
       </div>
       <div class="description">
        <p class="header"><?php _e("Get all your supplier data under control", 'Tradeshift'); ?></p>
        <p><?php _e("Organize your disconnected data to get a complete picture of your suppliers", 'Tradeshift'); ?></p>
       </div>
      </div> <!-- column 1 -->
      <div class="ts-connect-features">
       <div class="image top">
        <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-icon-chart.png" alt="<?php _e("Track compliance and minimize your risk | Tradeshift Connect", 'Tradeshift'); ?>">
       </div>
       <div class="description">
        <p class="header"><?php _e("Track compliance and minimize your risk", 'Tradeshift'); ?></p>
        <p><?php _e("Protect your brand with a holistic, real-time view of all your suppliers", 'Tradeshift'); ?></p>
       </div>
      </div> <!-- column 2 -->
      <div class="ts-connect-features">
       <div class="image top">
        <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-icon-bulb.png" alt="<?php _e("Unlock hidden innovation in your supply chain | Tradeshift Connect", 'Tradeshift'); ?>">
       </div>
       <div class="description">
        <p class="header"><?php _e("Unlock hidden innovation in your supply chain", 'Tradeshift'); ?></p>
        <p><?php _e("Build stronger, more innovative partnerships with suppliers to get a competitive edge", 'Tradeshift'); ?></p>
       </div>
      </div> <!-- column 2 -->
     </div>
    </div>
   </div>
  </div>
 </div>
 
 <div class="marketplace-mngr">
  <div class="container">
   <div class="row">
    <div class="contents">
     <div class="text-intro">
      <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-top-bar-xs.png" class="visible-xs divider" />
      <h2><?php _e("Supplier Profiles", 'Tradeshift'); ?></h2>
      <h3><?php _e("Customize profiles to gather all of your supplier-related data.", 'Tradeshift'); ?></h3>
      <p><?php _e("With Tradeshift Supplier Profiles, you can easily create custom profiles to gather and track any information on your suppliers. Profiles are able to capture data beyond basic company data to gather compliance documentation, certifications, and product capabilities.", 'Tradeshift'); ?></p>
     </div>
     <img src="<?php echo get_template_directory_uri() ?>/img/connect/connect-ipad-mini.png" class="hidden-xs" />
    </div>
   </div>
  </div>
  <div style="width: 100%;margin-top: -22px">
   <img class="screenshot visible-xs" src="<?php echo get_template_directory_uri(); ?>//img/connect/connect-ipad-mini.png" style="display: block;margin: auto;width: 565px;margin-left: -22px" />
  </div>
 </div>
 
 <style type="text/css">
 .bounceInLeft,
 .bounceInRight {
  visibility: visible !important;
  
 }
 </style>
 <script type="text/javascript">
 $(document).ready(function() {
  $('.slideFromLeft, .slideFromRight').css('visibility', 'hidden');
  
  $("#validation").waypoint(function(down){
   $('.validation-gif').attr('src', '/wp-content/themes/Tradeshift/img/connect/Validation_v2.gif');    
  },{offset:'40%'});
  $("#slides").waypoint(function(down){
   $('.slideFromLeft').addClass('animated bounceInLeft');
   $('.slideFromRight').addClass('animated bounceInRight');      
  },{offset:'40%'});
  
 });
 </script>
 <div class="shop">
  <div class="container">
   <div class="row">
    <div class="contents">
     <div class="shop-description visible-md visible-sm visible-xs">
      <h2><?php _e("Supplier Self-Service", 'Tradeshift'); ?></h2>
      <h3><?php _e("Empower your suppliers to update and maintain their own profiles.", 'Tradeshift'); ?></h3>
      <p><?php _e("Supplier Self-Service capabilities empower suppliers to update their information on their own terms, while built-in workflows allow buyers to approve any changes made to the supplier’s profile before it appears on their vendor master.", 'Tradeshift'); ?></p>
     </div>
     <div class="screenshots hidden-xs" id="slides">
      <img src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-screenshot-nav.png" class="img-responsive slideFromLeft" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-screenshot-profile.png" class="img-responsive slideFromRight" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-screeshot-company.png" class="img-responsive slideFromRight" />
     </div>
     <div class="shop-description visible-lg">
      <h2><?php _e("Supplier Self-Service", 'Tradeshift'); ?></h2>
      <h3><?php _e("Empower your suppliers to update and maintain their own profiles.", 'Tradeshift'); ?></h3>
      <p><?php _e("Supplier Self-Service capabilities empower suppliers to update their information on their own terms, while built-in workflows allow buyers to approve any changes made to the supplier’s profile before it appears on their vendor master.", 'Tradeshift'); ?></p>
     </div> <!-- shop-description -->
    </div> <!-- contents -->
   </div> <!-- row -->
   <div class="screenshots visible-xs" id="slides">
    <img src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-screenshot-company-xs.jpg" class="bounceInRight" width="100%" />
    
    
   </div>
   <div class="row">
    <div class="contents">
     <div class="supplier-surveys">
      <h2><?php _e("Supplier Surveys", 'Tradeshift'); ?></h2>
      <h3><?php _e("Get to know your suppliers.", 'Tradeshift'); ?></h3>
      <p><?php _e("With Tradeshift Surveys you can create ad-hoc questionnaires to send to groups of suppliers, or even single suppliers, to better understand their current or potential capabilities or to track compliance data.", 'Tradeshift'); ?></p>
     </div>
     <div class="screenshot-surveys">
      <img src="<?php echo get_template_directory_uri(); ?>/img/connect/Questionnaires_v2.gif" class="img-responsive survey-img" />
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="validation" id="validation">
  <div class="container">
   <div class="row">
    <div class="contents">
     <div class="text-intro">
      <h2><?php _e("Supplier Validation", 'Tradeshift'); ?></h2>
      <h3><?php _e("Trust your supplier data.", 'Tradeshift'); ?></h3>
      <p><?php _e("Validating supplier data can be <br class=\"visible-xs\">time-consuming and often gets overlooked. With Supplier Validation, you can ensure profiles are filled out properly and in the correct format. We also work with third-party services to verify the data suppliers provide is accurate.", 'Tradeshift'); ?></p>
     </div>
     <img src="<?php echo get_template_directory_uri() ?>/img/connect/Validation_v2.jpg" class="img-responsive validation-gif" alt="<?php _e("Supplier Validation | Tradeshift Connect", 'Tradeshift'); ?>" />
    </div>
   </div>
  </div>
 </div>
 
<div class="integration">
 <div class="container">
  <div class="row">
   <div class="contents">
    <div class="description">
     <h2><?php _e("Integration", 'Tradeshift'); ?></h2>
     <h3><?php _e("Keep supplier data in sync across all of your systems.", 'Tradeshift'); ?></h3>
     <p><?php _e("Don’t waste time updating multiple systems or worse, wondering if you’re looking at current data. With Integration, updated supplier data is reflected on your vendor master, ensuring that everyone in your organization is viewing the most current supplier data.", 'Tradeshift'); ?></p>
    </div>
    <div class="matrix">
     <img src="<?php echo get_template_directory_uri(); ?>/img/connect/integration_v2.gif" class="" />
     <img src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-green-circle.png" class="circle-component visible-sm" />
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-circles-array.jpg" class="circle-component visible-lg visible-md" />
   </div>
  </div>
 </div>
 <img src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-integration-circle.png" class="circle-component visible-xs" />
</div>


<div class="resources">
 <div class="container">
  <div class="row">
   <div class="contents">
    <h2><?php _e("Find out more about our supplier management solutions.", 'Tradeshift'); ?></h2>
    <div class="resource-wrapper">
     <a class="trigger-res-1" href="/resources/essential-guide-to-supplier-management/">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-blog-1.jpg" />
     </a>
     <p><?php _e("Essential Guide to Supplier Management.", 'Tradeshift'); ?><br class="visible-sm"><a class="trigger-res-1"  href="/resources/essential-guide-to-supplier-management/"><?php _e("Learn more &raquo;"); ?></a></p>
    </div>
    <div class="resource-wrapper">
     <a class="trigger-res-2" href="/resources/supplier-management-checklist/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-blog-2.jpg" /></a>
     <p><?php _e("Supplier Management Checklist.", 'Tradeshift'); ?><br class="visible-sm visible-xs"><a class="trigger-res-2" href="/resources/supplier-management-checklist/"><?php _e("Read more &raquo;"); ?></a></p>
    </div>
    <div class="resource-wrapper">
     <a class="trigger-res-3" href="/resources/supplier-participation-101-how-to-get-your-suppliers-onboard/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/connect/connect-blog-3.jpg" /></a>
     <p><?php _e("Supplier Participation 101: How to Get <br class=\"visible-xs\">your Suppliers Onboard.", 'Tradeshift'); ?> <br class="visible-sm visible-xs"><a class="trigger-res-3" href="/resources/supplier-participation-101-how-to-get-your-suppliers-onboard/"><?php _e("Read more &raquo;"); ?></a></p>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="cta-section">
 <div class="container">
  <div class="row">
   <div class="contents">
    <h2 class="hidden-xs"><?php _e("See how Tradeshift can help your enterprise<br class=\"hidden-sm\">make connections that matter.", 'Tradeshift'); ?></h2>
    <h2 class="visible-xs"><?php _e("See how Tradeshift can help your enterprise make connections that matter.", 'Tradeshift'); ?></h2>
    <button type="button" class="btn btn-cta btn-nm" id="initialEmailFormField" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Contact us"); ?></button>
   </div>
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
    <h3 id="myModalLabel"><?php _e("Request a Demo"); ?></h3>
    <p class="lead"><?php _e("Start your journey with a free demo today."); ?></p>
   </div>
   <div class="modal-body">
    <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
    <form id="mktoForm_951"></form>
    <script type="text/javascript">// <![CDATA[
     MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 951, function(form){
      form.vals({"Marketing_Resource_Name__c":"Solutions - Tradeshift Buy"});
     });
     // ]]>
    </script>
   </div>
  </div>
 </div>
</div>
 
<?php get_footer(); ?>
