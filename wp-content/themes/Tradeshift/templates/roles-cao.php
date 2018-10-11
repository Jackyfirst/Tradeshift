<?php
/*
Template Name: Roles - Procurement / CAO
*/
get_header(); ?>

<!-- Main Content Starts -->
<main class="main-content roles-procurement">
 <div class="hero">
  <?php if (is_mobile()): ?>
   <div class="container">
    <div class="row">
     <div class="contents">
      <h1><?php _e("<em>Procurement:</em> don't wait 'til it's too late.", 'Tradeshift'); ?></h1>
      <h3><?php _e("Volatility, disruptive innovation, and extreme competition, mean that unpredictability is “the new normal”, making agility the future. Don’t think you need agility to survive? Neither did these companies.", 'Tradeshift'); ?></h3>
      <button id="heroMainCtaRolesCAO" class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal"><?php _e("Request a demo"); ?></button>
     </div>
    </div>
   </div>
  <?php else: ?>
   <div class="container headline-cta hidden-xs">
    <div class="row">
     <div class="contents">
      <h1><?php _e("<em>Procurement:</em> don't wait 'til it's too late.", 'Tradeshift'); ?></h1>
      <h3><?php _e("Volatility, disruptive innovation, and extreme competition, mean that unpredictability is “the new normal”, making agility the future. Don’t think you need agility to survive? Neither did these companies.", 'Tradeshift'); ?></h3>
      <button id="heroMainCtaRolesCAO" class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal"><?php _e("Request a demo"); ?></button>
     </div>
    </div>
   </div>
   <div class="case-studies hidden-sm">
    <div  id="hero-case-study" class="contents owl-carousel">
     <!-- Component: Roles CAO Case Studies -->
     <?php get_template_part( 'components/roles', 'cao-case-studies' ); ?>
    </div>
   </div>
  <?php endif; ?>
 </div>
 <?php if (is_mobile()): ?>
  <div class="case-study-xs">
   <div class="container">
    <div class="row">
     <div  id="hero-case-study" class="contents owl-carousel">
      <!-- Component: Roles CAO Case Studies -->
      <?php get_template_part( 'components/roles', 'cao-case-studies' ); ?>
     </div>
    </div>
   </div>
   <div class="arrow"> </div>
  </div>
 <?php else: ?>
  <div class="case-study-xs visible-sm">
   <div class="container">
    <div class="row">
     <div id="hero-case-study-sm" class="contents owl-carousel">
      <!-- Component: Roles CAO Case Studies -->
      <?php get_template_part( 'components/roles', 'cao-case-studies' ); ?>
     </div>
    </div>
   </div>
   <div class="arrow"> </div>
  </div>
 <?php endif; ?>
 <div class="new-normal">
  <div class="container">
   <div class="row">
    <div class="contents">
     <p><?php _e("The new normal is affecting every part of every business &mdash; even procurement.<br /><br class=\"visible-xs\" />So how can you prepare? <em>How can you react?</em>", 'Tradeshift'); ?></p>
     <?php if (is_mobile()): ?>
      
     <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/roles/procurement/step1.png" />
     <?php endif; ?>
    </div>
   </div>
  </div>
 </div>
 <div class="step1">
  <div class="container">
   <div class="row intro-text">
    <div class="contents">
     <h2><?php _e("<em>Step 1:</em> Move beyond savings.", 'Tradeshift'); ?></h2>
     <p><?php _e("Yes, savings is key. But you’re selling yourself short by focusing merely on cutting costs. Procurement can play a strategic role in your company’s future. How? Instead of beating your suppliers down on price, develop more collaborative relationships with them that result in business agility and innovation, for you and them. You can reach your savings goals, spend less time doing it, and start driving real business value.", 'Tradeshift'); ?></p>
    </div>
   </div>
   <?php if (is_mobile()): ?>
    <div class="row imagery">
     <div class="contents">
      <img src="<?php echo get_template_directory_uri(); ?>/img/roles/procurement/step1-1-bg-xs.png" /><br /><br />
      <img src="<?php echo get_template_directory_uri(); ?>/img/roles/procurement/step1-2-bg-xs.png" />
     </div>
    </div>
   <?php endif; ?>
   <hr class="dots" />
  </div>
 </div>
 <div class="step2">
  <div class="container">
   <div class="row">
    <div class="contents">
     <h2><?php _e("<em>Step 2:</em> Use your supply chain to become more agile.", 'Tradeshift'); ?></h2>
     <p><?php _e("The future of procurement is about relationships. The more connected you are to your users and supply chain, the faster your company can adapt and respond to unpredictable market changes. Modern, easy-to-use tools connect your team, suppliers, and employees, fostering collaboration throughout the entire buying process, enabling your company to respond in months or weeks...not years.", 'Tradeshift'); ?></p>
    </div>
   </div>
  </div>
 </div>
 <div class="step3">
  <div class="container">
   <div class="row">
    <div class="contents">
     <h2><?php _e("<em>Step 3:</em> Empower your people.", 'Tradeshift'); ?></h2>
     <p><?php _e("Eliminate the tactical so you can enable your supply chain and your staff to act as collaborative partners to the business. Innovate with teams like marketing, legal, finance, sales, engineering, and others. By connecting digitally and working as a team with all your suppliers, you can act as a disruptor instead of a disruptee, and drive business-wide results.", 'Tradeshift'); ?></p>
    </div>
   </div>
  </div>
 </div>
 <div class="step4">
  <div class="container">
   <div class="row intro-text">
    <div class="contents">
     <h2><?php _e("<em>Step 4:</em> Connect to 100% of your suppliers digitally.", 'Tradeshift'); ?></h2>
     <p><?php _e("Help your company react to challenges and opportunities by having all of your supplier interactions and information in one network. With accurate, real-time data to make quick decisions, you can easily assess risk and react proactively in real-time and make your entire organization more agile.", 'Tradeshift'); ?></p>
    </div>
   </div>
   <div class="row case-study">
    <div class="contents">
     <h3><?php _e("Honda", 'Tradeshift'); ?></h3>
     <p><?php _e("While the carmaker’s weighted raw-material index increased by more than 200 percent between 2009 and 2012, the average prices for its cars remained stable. Volatility doesn’t only come from new competition, but another source of unpredictable disruption: mother nature. A flood in Thailand alone cost the carmaker sales to the tune of 260,000 vehicles and a 59% reduction in net profit.", 'Tradeshift'); ?></p>
    </div>
   </div>
  </div>
 </div>
 <div class="product-intro">
  <div class="container">
   <div class="row">
    <h2><?php _e("Tradeshift can help you take your procurement from savings to agility, and beyond.", 'Tradeshift'); ?> </h2>
    <h3><?php _e("Here's how:", 'Tradeshift'); ?></h3>
    <div class="contents">
     <a class="rolescao-product-intro-buy" href="/solutions/buy"><img src="<?php echo get_template_directory_uri(); ?>/img/roles/procurement/step5-tsbuy.png" alt="<?php _e("Tradeshift Buy", 'Tradeshift'); ?>" /></a>
     <p><?php _e("Enable your users to find and buy whatever they need from anywhere &mdash; while staying within policy. Tradeshift Buy is not just like an easy consumer experience....it IS an easy consumer experience. Modern technology, like single-use credit cards, browser plug-ins, and procurement apps, make it easy to collaborate with all your suppliers and end users.", 'Tradeshift'); ?><br />
      <a class="rolescao-product-intro-buy" href="/solutions/buy"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></a>
     </p>
    </div>
    <div class="contents">
     <a class="rolescao-product-intro-pay" href="/solutions/pay"><img src="<?php echo get_template_directory_uri(); ?>/img/roles/procurement/step5-tspay.png" alt="<?php _e("Tradeshift Pay", 'Tradeshift'); ?>" /></a>
     <p><?php _e("Simplify your entire AP process with Tradeshift Pay &mdash; eInvoicing, collaborative workflow, and Tradeshift CloudScan™ for invoice capture. Connect with every supplier, track every transaction, and achieve ROI faster with every supplier onboard. And suppliers get it for free.", 'Tradeshift'); ?><br />
      <a class="rolescao-product-intro-pay" href="/solutions/pay"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></a>
     </p>
    </div>
    <div class="contents">
     <a class="rolescao-product-intro-risk" href="/solutions/risk"><img src="<?php echo get_template_directory_uri(); ?>/img/roles/procurement/step5-tsrisk.png" alt="<?php _e("Tradeshift Risk", 'Tradeshift'); ?>" /></a>
     <p><?php _e("Tradeshift Risk is a smart supplier lifecycle management solution. With Tradeshift Risk, you can manage your supplier data, compliance, and risk in one place. A network of trusted suppliers makes it easier – and safer – to do business.", 'Tradeshift'); ?><br />
      <a class="rolescao-product-intro-risk" href="/solutions/risk"><?php _e("Learn more &raquo;", 'Tradeshift'); ?></a>
     </p>
    </div>
   </div>
  </div>
 </div>
 
 <div class="resources">
  <div class="container">
   <div class="row">
    <div class="contents">
     <h2><?php _e("Learn more about us:", 'Tradeshift'); ?></h2>
     <div class="resource-wrapper">
      <a class="rolescao-resources-1" href="/resources/spend-matters-maturity-models-procurement-supplier-management-and-ap/"><img class="img-responsive" src="/wp-content/uploads/2016/03/MaturitySketchesResImage650x350-1.png" /></a>
      <p><?php _e("Spend Matters Maturity Models – Procurement, Supplier Management and AP", 'Tradeshift'); ?>
       <a class="rolescao-resources-1"  href="/resources/spend-matters-maturity-models-procurement-supplier-management-and-ap/"><?php _e("Download &raquo;", 'Tradeshift'); ?></a>
      </p>
     </div>
     <div class="resource-wrapper">
      <a class="rolescao-resources-2" href="/resources/tradeshift-buy-a-deep-dive-into-tradeshifts-eprocurement-offering/"><img class="img-responsive" src="/wp-content/uploads/2015/12/Spend-Matters_resource-1.png" /></a>
      <p><?php _e("Tradeshift Buy: A Deep Dive into Tradeshift’s eProcurement Offering", 'Tradeshift'); ?> <a class="rolescao-resources-2" href="/resources/tradeshift-buy-a-deep-dive-into-tradeshifts-eprocurement-offering/"><?php _e("Download &raquo;", 'Tradeshift'); ?></a></p>
     </div>
     <div class="resource-wrapper">
      <a class="rolescao-resources-3" href="/resources/ts-buy/"><img class="img-responsive" src="/wp-content/uploads/2015/09/Cover_New-Begin.png" /></a>
      <p><?php _e("A New Beginning for Enterprise eProcurement", 'Tradeshift'); ?> <a class="rolescao-resources-3" href="/resources/ts-buy/"><?php _e("Download &raquo;", 'Tradeshift'); ?></a></p>
     </div>
    </div>
   </div>
  </div>
 </div>
 
 <div class="fill-out-form">
  <div class="container">
   <div class="row">
    <h2><?php _e("Get the facts on how Tradeshift can help your enterprise.", 'Tradeshift'); ?></h2>
    <form novalidate autocomplete="off" class="roles-pages" onsubmit="return false;">
     <div class="form-group">
      <input type="e-mail" class="form-control" id="e-mail" placeholder="<?php _e("Enter Your Email", "Tradeshift"); ?>">
     </div>
     <div class="form-group">
      <button type="button" class="btn btn-primary-cta" id="getStartedRolesCAO" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal"><?php _e("Let's get started", 'Tradeshift'); ?></button>
     </div>
    </form>
   </div>
   <div class="row">
    <p class="sub"><?php _e("Tradeshift takes your privacy seriously.<br> We encrypt all personal information when sent over the Internet, so that it cannot be read in transit by a third party.", 'Tradeshift'); ?></p>
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
    <h3 id="myModalLabel"><?php _e("Request a Demo", 'Tradeshift'); ?></h3>
    <p class="lead"><?php _e("Start your journey with a free demo today.", 'Tradeshift'); ?></p>
   </div>
   <div class="modal-body">
    <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
    <form id="mktoForm_1243"></form>
    <script type="text/javascript">// <![CDATA[
     MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 1243, function(form){
      form.vals({"Marketing_Resource_Name__c":"CIO role page"});
     });
     // ]]>
     </script>
    </div>
   </div>
  </div>
 </div>
</div>
 
<!-- Page specific JS -->
<script>
$(document).ready(function() {
 $('#hero-case-study-sm, #hero-case-study').owlCarousel({
  items : 3,
  autoPlay : 9000,
  stopOnHover: true,
  itemsDesktop : [4000,1],
  itemsDesktopSmall : [1199,1],
  itemsTablet: [768,1],
  itemsTabletSmall: false,
  itemsMobile : [320,1],
  lazyLoad : false,
  lazyFollow : true,
  lazyEffect : "fade",
 });
});
</script>

<?php get_footer(); ?>
