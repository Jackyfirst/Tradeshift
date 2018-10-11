<?php
/*
Template Name: Partner
*/
get_header(); ?>

<?php $formId = marketo_form(2288); ?>

<main class="main-content bg-brand-accent-p">
 <div class="container-fluid img-partner">
  <div class="container">
   
   <div class="row">
    <div class="contents panel text-center">
     <h2><?php _e("Find a Tradeshift partner", "Tradeshift"); ?></h2>
     <p>
      <?php _e("Tap into the Tradeshift partner community to get the most value from your Tradeshift solution and achieve tangible, transformational results for your business.", "Tradeshift"); ?>
     </p>
     
     <div class="text-center">
      <a class="btn btn-primary-cta" data-toggle="modal" data-target="#<?php echo $formId;?>" >
       <?php _e("Talk to a partner expert", "Tradeshift"); ?>
      </a>
     </div>
    </div>
   </div>
   
  </div>
 </div>
 
 <div class="container">
  
  <div class="row">
   <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
    <div class="panel-fixed-width-sm">
     <hr class="brand-p-go"/>
     
     <h1 class="partner-title text-center"><?php _e("Make sure nothing is standing between you and your business goals", "Tradeshift"); ?></h1>
     
     <p class="text-center">
      <?php _e("Whatever it takes to make sure you succeed, the Tradeshift partner community has you covered. Tap into broad ecosystem of leading subject matter experts, technology providers, outsourcing firms, change management consultants and innovators.", "Tradeshift"); ?>
      <span class="text-bold hidden-md-lg"><?php _e("Explore below to learn more.", "Tradeshift"); ?></span>
      &nbsp;
      <span class="text-center text-bold hidden-xs-sm"><?php _e("Explore below to learn more.", "Tradeshift"); ?></span>
     </p>
     
    </div>
   </div>
  </div>
  
  <div class="row equal-height-row-md">
   
   <div class="col-md-3 col-xs-12">
    <div class="partner-panel bg-white">
     <div class="partner-panel-body">
      <img
       alt="Invoice"
       class="icon"
       src="/wp-content/themes/Tradeshift/img/supplychainfinance/howitworks-unified-experience.svg"
      >
      <h3><?php _e("Consulting Service", "Tradeshift"); ?></h3>
      <p>
       <?php _e("Choose a consulting, implementation or advisory partner with deep subject matter knowledge, and technical skills. These partners can help you define your goals and make sure you meet them.", "Tradeshift"); ?>
      </p>
      <a class="btn btn-primary-cta" data-toggle="modal" data-target="#<?php echo $formId;?>" >
       <?php _e("Find a partner", "Tradeshift"); ?>
      </a>
     </div>
     
    </div>
    <img
     class="partner-logo-block hidden-md-lg"
     alt="Deloitte, BearingPoint, Atos, Tech Mahindra, Optis, Viseo, The Shelby Group"
     src="/wp-content/themes/Tradeshift/img/partner/consulting-logos-sm.png"
    >
   </div>
   
   <div class="col-md-3 col-xs-12">
    <div class="partner-panel bg-white">
     <div class="partner-panel-body">
      <img alt="Globe" class="icon" src="/wp-content/themes/Tradeshift/img/globe.svg">
      <h3><?php _e("Business Process Outsourcing", "Tradeshift"); ?></h3>
      <p>
       <?php _e("Discover a partner that can marry functional and process excellence with Tradeshift’s modern platform to deliver greater efficiency, effectiveness and cost savings.", "Tradeshift"); ?>
      </p>
      <a class="btn btn-primary-cta" data-toggle="modal" data-target="#<?php echo $formId;?>" >
       <?php _e("Find a partner", "Tradeshift"); ?>
      </a>
     </div>
    </div>
    <div class="partner-logo-block hidden-md-lg">
     <?php echo file_get_contents('./wp-content/themes/Tradeshift/img/partner/process-logos-sm.svg'); ?>
    </div>
   </div>
   
   <div class="col-md-3 col-xs-12">
    <div class="partner-panel bg-white">
     <div class="partner-panel-body">
      <img class="icon" alt="Microchip" src="/wp-content/themes/Tradeshift/img/cog-chip.svg">
      <h3><?php _e("Technology", "Tradeshift"); ?></h3>
      <p>
       <?php _e("Explore ways to tailor your solution. Our best-of-breed technology partners integrate with or build upon the Tradeshift open platform, making it easy for you to get an exact fit for your business.", "Tradeshift"); ?>
      </p>
      <p>
       <?php _e("Are you a developer?", "Tradeshift"); ?>
       <a title="Developers" href="https://developers.tradeshift.com">
        <?php _e("Learn more about developing apps on the Tradeshift platform »", "Tradeshift"); ?>
       </a>
      </p>
      <a class="btn btn-primary-cta" data-toggle="modal" data-target="#<?php echo $formId;?>" >
       <?php _e("Find a partner", "Tradeshift"); ?>
      </a>
     </div>
    </div>
    <div class="partner-logo-block hidden-md-lg">
     <?php echo file_get_contents('./wp-content/themes/Tradeshift/img/partner/tech-logos-sm.svg'); ?>
    </div>
   </div>
   
   <div class="col-md-3 col-xs-12">
    <div class="partner-panel bg-white">
     <div class="partner-panel-body">
      <img
      class="icon"
      alt="Wallet"
      src="/wp-content/themes/Tradeshift/img/supplychainfinance/howitworks-one-wallet-for-everything.svg"
      >
      <h3><?php _e("Financial Services", "Tradeshift"); ?></h3>
      <p>
       <?php _e("Find banks offering financial services on the Tradeshift platform. Optimize working capital with supply
       chain finance, commercial card programs, credit lines and more.", "Tradeshift"); ?>
      </p>
      <a class="btn btn-primary-cta" data-toggle="modal" data-target="#<?php echo $formId;?>" >
       <?php _e("Find a partner", "Tradeshift"); ?>
      </a>
     </div>
    </div>
    <img
    class="partner-logo-block hidden-md-lg"
    alt="American Express, HSBC, Santander"
    src="/wp-content/themes/Tradeshift/img/partner/services-logos-sm.png"
    >
   </div>
   
  </div>
  
  <div class="row equal-height-row hidden-xs-sm">
   <div class="col-md-3">
    <img
    class="partner-logo-block"
    alt="Deloitte, BearingPoint, Atos, Tech Mahindra, Optis, Viseo, The Shelby Group"
    src="/wp-content/themes/Tradeshift/img/partner/consulting-logos.png"
    >
   </div>
   
   <div class="col-md-3">
    <div class="partner-logo-block">
     <?php echo file_get_contents('./wp-content/themes/Tradeshift/img/partner/process-logos.svg'); ?>
    </div>
   </div>
   
   <div class="col-md-3">
    <div class="partner-logo-block">
     <?php echo file_get_contents('./wp-content/themes/Tradeshift/img/partner/tech-logos.svg'); ?>
    </div>
   </div>
   
   <div class="col-md-3">
    <img
    class="partner-logo-block"
    alt="American Express, HSBC, Santander"
    src="/wp-content/themes/Tradeshift/img/partner/services-logos.png"
    >
   </div>
  </div>
 </div>
 
 <div class="prefooter container-fluid gradient-orange">
  <div class="row">
   <img
   alt="Conference Badge"
   class="partner-badge img hidden-xs-sm"
   src="/wp-content/themes/Tradeshift/img/partner/badge.png"
   >
   <div class="col-xs-12 hidden-md-lg badge-container text-center">
    <img
    alt="Conference Badge"
    class="img"
    src="/wp-content/themes/Tradeshift/img/partner/badge-full.png"
    >
   </div>
   <div class="col-md-5 col-md-offset-2 hidden-xs-sm">
    <h3>Join our Partner Community</h3>
    <button
    class="extra-wide-btn btn btn-white btn-primary-cta"
    data-toggle="modal"
    data-target="#<?php echo $formId;?>"
    >
    <?php _e("Click here", "Tradeshift"); ?>
   </button>
  </div>
  
  <div class="col-xs-12 hidden-md-lg text-center">
   <h3 class="text-center"><?php _e("Join our Partner Community", "Tradeshift"); ?></h3>
   <button
   class="extra-wide-btn btn btn-white btn-primary-cta"
   data-toggle="modal"
   data-target="#<?php echo $formId;?>"
   >
    <?php _e("Click here", "Tradeshift"); ?>
  </button>
 </div>
</div>
</div>

</main>

<?php get_footer(); ?>
