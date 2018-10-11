<?php
/*
Template Name: Resources
*/

$all_roles = get_terms('resource_roles', 'hide_empty=0');
$all_media_types = get_terms('resource_media', 'hide_empty=0');

get_header();
?>
<!-- Main Content Starts -->
<main class="main-content resources-page">
 <?php 
 $featured_resource = array(
  'post_type'=>'resource',
  'meta_key'=>'featured',
  'meta_compare'=>'=',
  'meta_value'=>1,
  'posts_per_page'=>1,
  'orderby' => 'date');
  $featured_resource_query = new WP_Query( $featured_resource );
  ?>
  <?php while ($featured_resource_query->have_posts()) : $featured_resource_query->the_post(); ?>
   <?php
   $featured_cta = get_post_meta(get_the_ID(),'pdf_cta',true);
   $sub_info = get_post_meta(get_the_ID(),'sub_info',true);
   $mt_categories = wp_get_object_terms(get_the_ID(), 'resource_media');
   $first_media_category = isset($mt_categories[0]) ? $mt_categories[0] : false;
   ?>
   <div class="featured-resource" style="padding-top: 66px">
    <div class="container">
     <div class="row">
      <div class="contents" id="featured_resource">
       <h2 class="visible-xs visible-sm"><?php _e("Featured Resource", "Tradeshift"); ?></h2>
       <div class="featured-image <?php echo $first_media_category->slug; ?>">
        <a href="<?php the_permalink(); ?>">
         <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?></a>
        </div>
        <div class="featured-info">
         <h3 class="hidden-xs hidden-sm"><?php _e("Featured Resource", "Tradeshift"); ?></h3>
         <div class="meta">
          <?php if ($first_media_category) : ?>
           <span class="media-type"><?php echo $first_media_category->name; ?></span>
          <?php endif; ?>
          <span class="date-posted"><?php the_time('M. j, Y') ?></span>
         </div>
         <h4><?php the_title(); ?></h4>
         <p><?= $sub_info; ?></p>
         <a href="<?php the_permalink(); ?>" class="btn btn-primary-cta">
          <?php echo $featured_cta;?>
         </a>
        </div>
       </div>
      </div>
      <hr class="dash" />
     </div>
    </div>
   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
   <div class="resources">
    <div class="container">
     <div class="row resource-search-filter">
      <div class="contents">
       <div class="row">
        <h2><?php _e("Start exploring.", "Tradeshift"); ?></h2>
        <!-- Search form - Results grab the search-resource.php template -->
        <form class="search" id="search-resources" method="get" action="<?php echo site_url(); ?>">
         <input type="hidden" name="post_type" value="resource" />
         <h3 class="filter-heading"><?php _e("Search", "Tradeshift"); ?></h3>
         <div class="input-group">
          <input type="text" name="s" placeholder="Type a keyword">
          <span class="input-group-addon">
           <input type="submit" value="&#xf002;">
          </span>
         </div>
        </form>
        <!-- Filter: By Role and Media Type -->
        <div class="filter">
         <div class="row" id="options">
          <div class="option-set by-roles" data-group="role">
           <h3 class="filter-heading"><?php _e("Filter by role", "Tradeshift"); ?></h3>
           <div class="checkbox-dropdown">
            <?php _e("Select Role(s)", "Tradeshift"); ?>
            <ul class="checkbox-dropdown-list">
             <?php foreach ($all_roles as $term) : ?>
              <li>
               <input type="checkbox" value=".filter-role-<?php echo $term->term_id; ?>" id="role-filter-option-<?php echo $term->term_id; ?>" />
               <label for="role-filter-option-<?php echo $term->term_id; ?>">
                <?php echo $term->name; ?>
               </label>
              </li>
             <?php endforeach; ?>
            </ul>
           </div>
          </div>
          
          <div class="option-set by-media-type" data-group="type">
           <h3 class="filter-heading"><?php _e("Filter by media type", 'Tradeshift'); ?></h3>
           <div class="checkbox-dropdown"><?php _e("Select Media Type(s)", 'Tradeshift'); ?>
            <ul class="checkbox-dropdown-list">
             <?php foreach ($all_media_types as $term) : ?>
              <li>
               <input type="checkbox" value=".filter-media-<?php echo $term->term_id; ?>" id="media-filter-option-<?php echo $term->term_id; ?>" />
               <label for="media-filter-option-<?php echo $term->term_id; ?>">
                <?php echo $term->name; ?>
               </label>
              </li>
             <?php endforeach; ?>
            </ul>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- <p style="visibility: hidden;"><?php echo $_SERVER['HTTP_HOST'] ?></p> -->
     <div class="row resource-listing" id="list-container" >
      <div class="contents" id="resource-container">
       <div class="row">
        <?php
        $resources_query = new WP_Query(array(
         'post_type'=>'resource',
         'posts_per_page'=>-1,
         'orderby'=>'date',
         'order'=>'desc',
        ));
        ?>
        <?php while ($resources_query->have_posts()) : $resources_query->the_post(); ?>
         <?php
         $roles_categories = wp_get_object_terms(get_the_ID(), 'resource_roles');
         $mt_categories = wp_get_object_terms(get_the_ID(), 'resource_media');
         
         $filter_classes = array();
         foreach ($roles_categories as $term) {
          $filter_classes[] = 'filter-role-' . $term->term_id;
         }
         foreach ($mt_categories as $term) {
          $filter_classes[] = 'filter-media-' . $term->term_id;
         }
         $first_media_category = isset($mt_categories[0]) ? $mt_categories[0] : false;
         ?>
         
         
         <div class="resource-list <?php echo implode(' ', $filter_classes); ?>">
          <div class="imagery <?php echo $first_media_category->slug; ?>">
           <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?></a>
           </div>
           <div class="meta">
            <?php if ($first_media_category) : ?>
             <span class="media-type"><?php echo $first_media_category->name; ?></span>
            <?php endif; ?>
            <span class="date-posted"><?php the_time('M. j, Y') ?></span>
           </div>
           <h4><?php the_title(); ?> 
            <a href="<?php the_permalink(); ?>"><?php _e("Learn more"); ?></a></h4>
           </div>
           
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
         </div>
        </div>
       </div>
      </div>
     </div>
     
     <div class="fill-out-form">
      <div class="container">
       <div class="row">
        <h2><?php _e("Learn how Tradeshift can help your enterprise."); ?></h2>
        <form novalidate autocomplete="off" class="form-step-1" onsubmit="return false;">
         <div class="form-group">
          <input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your Email">
         </div>
         <div class="form-group">
          <button type="button" class="btn btn-primary-cta" id="getStartedResources" onclick="sameEmail();" data-toggle="modal" data-target="#mktoModal">Let's get started</button>
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
        <h3 id="myModalLabel"><?php _e("Request a Demo", 'Tradeshift'); ?></h3>
        <p class="lead"><?php _e("Start your journey with a free demo today.", 'Tradeshift'); ?></p>
       </div>
       <div class="modal-body">
        <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
        <form id="mktoForm_759"></form>
        <script type="text/javascript">// <![CDATA[
         MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", 759, function(form){
          form.vals({"Marketing_Resource_Name__c":"Resource Center Footer"});
         });
         // ]]></script>
        </div>
       </div>
      </div>
     </div>
     <script>
     $('.checkbox-dropdown').click(function () {
      $(this).toggleClass('is-active');
     });
     $('.checkbox-dropdown-list').on('click', function(event){
      if($('.checkbox-dropdown').hasClass('is-active')) $('.checkbox-dropdown').removeClass('is-active');
     });
     
     $('body').click(function(e){
      var $target = $(e.target);
      
      var closeDropdowns = $('.checkbox-dropdown');
      if ($target.is('.checkbox-dropdown, .checkbox-dropdown *')) {
       var $dropdown = $target.hasClass('checkbox-dropdown') ? $target : $target.closest('.checkbox-dropdown');
       closeDropdowns = closeDropdowns.not($dropdown);
      }
      closeDropdowns.removeClass('is-active');
     });
     
     $(".checkbox-dropdown ul").click(function(e) {
      e.stopPropagation();
     });
     
     </script>
     <?php get_footer(); ?>
