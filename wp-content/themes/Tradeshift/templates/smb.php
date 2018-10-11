<?php
/*
Template Name: Roles - Small Business Main
*/
get_header(); ?>
<style>
.smartling-de .smb-page .hero.simple-invoicing input[type=submit] {
 font-size: 15px !important;
}
</style>
<!-- Main Content Starts -->
<main class="main-content smb-page">
 <!-- Hero Section -->
 <div id="randomize-bg-hero" class="hero simple-invoicing">
  <div class="container">
   <div class="row intro-text-cta-form">
    <div class="intro-text-cta">
     <h1><?php _e("Simple invoicing that doesn't <em>suck</em>", 'Tradeshift'); ?></h1>
     <h3><?php _e("If all you need is a simple invoicing solution, why rely on crappy accounting software?", 'Tradeshift'); ?></h3>
     <a href="https://go.tradeshift.com/register" target="_blank">
     	<button class="btn btn-primary-cta visible-xs"><?php _e("Send invoices in 30 seconds", 'Tradeshift'); ?></button>
					</a>
    </div>
    <div class="cta-form hidden-xs" style="margin-top: 100px">
     <h3><?php _e("Create a free account now"); ?></h3>
     <p><?php _e("Get started in 30 seconds"); ?></p>
     
      <div class="form-group">
       <a href="https://go.tradeshift.com/register" target="_blank">
        <input type="submit" value="<?php _e("Send your first invoice", 'Tradeshift'); ?>" class="btn btn-primary-cta translate" />
       </a>
       </a>
      </div>
    </div>
    <div class="icon-smb visible-xs">
     <img src="<?php echo get_template_directory_uri(); ?>/img/smb/icon-smb.png" />
    </div>
   </div>
   <div class="row visible-xs">
    <div class="followup"><p><?php _e("Use Tradeshift so you can get paid fast – and it's completely FREE.", 'Tradeshift'); ?></p></div>
   </div>
  </div>
  <div class="arrow hidden-xs"></div>
 </div>
 <div class="invoicing">
  <div class="container">
   <div class="row">
    <div class="contents">
     <h2><?php _e("Invoicing. Why's it gotta be so complicated?", 'Tradeshift'); ?></h2>
     <p><?php _e("Maybe you’re a building contractor, design freelancer, or business consultant. You don’t need anything fancy, just something that’s fast, free and it works.", 'Tradeshift'); ?></p>
     <p><?php _e("Maybe you run a small business and don't want to waste your time over-analyzing the billing process with your client. Or maybe you've tried a big, clunky accounting software and realized you didn’t need all the bells and whistles; you just wanted something simple.", 'Tradeshift'); ?></p>
     <p><em><?php _e("All you really want is a way to create invoices online and send them to your clients fast.", 'Tradeshift'); ?></em></p>
     <p><?php _e("Frankly, you’d rather spend your time doing the stuff you’re actually getting paid for.", 'Tradeshift'); ?></p>
     <p><?php _e("If this sounds like you, here’s where Tradeshift comes in.", 'Tradeshift'); ?><p>
      <p><em><?php _e("Tradeshift is a lightweight way to invoice your customers that’s completely free, no matter how many invoices you send and receive.", 'Tradeshift'); ?></em></p>
     </div>
    </div>
   </div>
  </div>
  <div class="value">
   <div class="container">
    <div class="row">
     <div class="free-invoices">
      <div class="icon-clock"></div>
      <h4><?php _e("Send free invoices in 2 minutes", 'Tradeshift'); ?></h4>
      <p><?php _e("Create invoices that are simple, professional and allow room for quotes, taxes, PO #s, and price in your local currency.", 'Tradeshift'); ?></p>
     </div>
     <div class="get-paid-faster">
      <div class="icon-enter-right"></div>
      <h4><?php _e("Get visibility and get paid 5x faster", 'Tradeshift'); ?></h4>
      <p><?php _e("See all your activity right in your dashboard. You can receive faster payments and responses to your questions about when your invoice will be paid.", 'Tradeshift'); ?></p>
     </div>
     <div class="export-sales">
      <div class="icon-wallet"></div>
      <h4><?php _e("View your yearly sales", 'Tradeshift'); ?></h4>
      <p><?php _e("With our customized filters, you can view your yearly sales and easily calculate your income.", 'Tradeshift'); ?></p>
     </div>
     <div class="find-new-clients">
      <div class="icon-binoculars"></div>
      <h4><?php _e("Find new clients internationally", 'Tradeshift'); ?></h4>
      <p><?php _e("Connect with enterprise buyers who are already on the Tradeshift platform like ADM, KLM, LinkedIn, CBRE, and NHS.", 'Tradeshift'); ?></p>
     </div>
    </div>
   </div>
  </div>
  <div class="no-upsell">
   <div class="container">
    <div class="row">
     <div class="contents">
      <h2><?php _e("Invoicing you don't have to think about.", 'Tradeshift'); ?></h2>
      <p><?php _e("With Tradeshift, there’s no up-selling you to a subscription service, and you don’t waste time trying to learn it (or teach your people). Using our software is intuitive for all of your team members.", 'Tradeshift'); ?></p>
      <p><?php _e("If you want to send invoices faster, track your payments, manage your cashflow, add taxes, give discounts, and export your yearly sales, you’ve found your solution.", 'Tradeshift'); ?></p>
      <p><?php _e("If you want to send and check in on invoices from anywhere on your mobile phone or tablet, you can.", 'Tradeshift'); ?></p>
      <p><?php _e("If you want a way to use Tradeshift with other payment systems like <em>Paypal, Quickbooks Online and Sage, you should try Tradeshift.", 'Tradeshift'); ?></em></p>
      <p><?php _e("Tradeshift makes free e-invoicing quick and easy, so you can focus on what matters most.", 'Tradeshift'); ?></p>
     </div>
    </div>
   </div>
  </div>
  <div class="testimonials">
   <div class="container">
    <div class="row">
     <div class="contents">
      <h2><?php _e("See what they're saying about us", 'Tradeshift'); ?></h2>
      <div class="owl-carousel" id="quote-carousel" >
       <div class="quote-wrapper">
        <blockquote>
         <p><?php _e("I have recommended Tradeshift to many independent contractors who are good at what they do, but don't have strengths in keeping track of their own administration. It solves a problem for both them as the vendor,and our company as the client.", 'Tradeshift'); ?></p>
         <footer><cite><a rel="noopener" href="https://www.g2crowd.com/survey_responses/tradeshift-review-59000" target="_blank"><?php _e("Leslie Brown, Development Executive", 'Tradeshift'); ?></a></cite></footer>
        </blockquote>
       </div>
       <div class="quote-wrapper">
        <blockquote>
         <p><?php _e("The business problems I solved using Tradeshift is a digital way for creating professional invoices that could be sent via email, and also could be paid online using PayPal.", 'Tradeshift'); ?></p>
         <footer><cite><a rel="noopener" href="https://www.g2crowd.com/survey_responses/tradeshift-review-58989" target="_blank"><?php _e("Robert Smith, Administrator", 'Tradeshift'); ?></a></cite></footer>
        </blockquote>
       </div>
       <div class="quote-wrapper">
        <blockquote>
         <p><?php _e("Probably the hardest question, there is so much to like. First of all, its free - which is both surprising and fantastic in that there are no commitments when you start using it. Secondly, TradeShift works out of the box.", 'Tradeshift'); ?></p>
         <footer><cite><a rel="noopener" href="https://www.g2crowd.com/survey_responses/tradeshift-review-59144" target="_blank"><?php _e("Dylan Robinson, Administrator", 'Tradeshift'); ?></a></cite></footer>
        </blockquote>
       </div>
      </div>
      <div class="poweredby">
       <a rel="noopener" href="https://www.g2crowd.com/products/tradeshift/reviews" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/smb/powered-G2.png" width="172" alt="<?php _e("Powered by G2 Crowd", 'Tradeshift'); ?>" /></a>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div id="randomize-bg-footer" class="sign-up">
   <div class="container">
    <div class="row">
     <h2><?php _e("Sign up for free, professional invoicing"); ?></h2>
     <a href="https://go.tradeshift.com/register" target="_blank">
     	<button class="btn btn-primary-cta" data-toggle="modal" data-target="#regModal"><?php _e("Take me to my free account", 'Tradeshift'); ?></button>
					</a>
    </div>
   </div>
   <div class="arrow"></div>
  </div>
  <div class="what-else">
   <div class="container">
    <div class="row">
     <h2><?php _e("What else can Tradeshift do for your small business?", 'Tradeshift'); ?></h2>
     <div class="features">
      <ul class="features-1">
       <li><?php _e("Free Cloud-Based E-invoicing", 'Tradeshift'); ?></li>
       <li><?php _e("Professional Invoice Templates", 'Tradeshift'); ?></li>
       <li><?php _e("Apps that work with Paypal, Quickbooks &amp; Others", 'Tradeshift'); ?></li>
       <li><?php _e("Access from Mobile and Tablet", 'Tradeshift'); ?></li>
       <li><?php _e("Customizable Company Profiles", 'Tradeshift'); ?></li>
      </ul>
      <ul class="features-2">
       <li><?php _e("Get History Reports of Your Documents", 'Tradeshift'); ?></li>
       <li><?php _e("Send Free Quotes, POs and Credit Notes", 'Tradeshift'); ?></li>
       <li><?php _e("List Your Product and Services", 'Tradeshift'); ?></li>
       <li><?php _e("International Business Directories", 'Tradeshift'); ?></li>
      </ul>
     </div>
     <div class="screenshot">
      <button class="cta"><?php _e("Take me to my <em>free account</em>", 'Tradeshift'); ?></button>
     </div>
    </div>
   </div>
  </div>
 </main>
 
 <script>
 // Grab the UTM parameters from the URL
 // stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
 function getParameterByName(name) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
  var results = regex.exec(location.search);
  return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
 }
 function getRegisterSubmitUrl() {
  var url = 'https://go.tradeshift.com/register/register';
  url += params.length > 0 ? '?' + params.join('&') : '';
  return url;
 }
 var params = [];
 ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'].forEach(function(param) {
  var value = getParameterByName(param);
  if (!!value) {
   params.push([param, value].join('='));
  }
 });
 var modalPopupform = document.getElementById('smbFormModal');
 analytics.trackForm(modalPopupform, 'Passed', function() {
  return {
   'First UTM Medium': utm_medium,
   'First UTM Source': utm_source,
   'First UTM Campaign': utm_campaign
  };
 });
 var heroForm = document.getElementById('smbForm');
 analytics.trackForm(heroForm, 'Passed', function() {
  return {
   'First UTM Medium': utm_medium,
   'First UTM Source': utm_source,
   'First UTM Campaign': utm_campaign
  };
 });
 
 $(document).ready(function() {
  // Let's call the Quote Carousel plugin shall we
  $("#quote-carousel").owlCarousel({
   items : 3,
   autoPlay : 4000,
   stopOnHover: true,
   itemsDesktop : [2540,1],
   itemsDesktopSmall : [1199,1],
   itemsTablet: [768,1],
   itemsTabletSmall: false,
   itemsMobile : [479,1],
   lazyLoad : false,
   lazyFollow : true,
   lazyEffect : "fade",
  });
  
  (function randomizeBackgroundImage() {
   var randomNumber = Math.floor((Math.random() * 1000) + 1);
   if (randomNumber % 2 == 1) {
    $('#randomize-bg-hero, #randomize-bg-footer').addClass('baker');
   } else {
    $('#randomize-bg-hero, #randomize-bg-footer').addClass('designer');
   }
  })();
  
 });
 </script>
 <?php get_footer(); ?>
