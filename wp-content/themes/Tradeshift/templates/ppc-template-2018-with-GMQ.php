ç<?php
/*
Template Name: Campaign: PPC - 2018 WITH GMQ
*/
get_header(); ?>

<?php global $post; ?>
<!-- Assign variables from CPT fields and default WP field values |  Use MetaBox plugin rwmb_meta -->
<?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    $campaign_maintitle = rwmb_meta( 'camp_maintitle_1' );
    $campaign_subtitle = rwmb_meta( 'camp_subtitle_1' );
    $campaign_video_code = rwmb_meta( 'camp_vid_1' );
    $campaign_secondary_content = rwmb_meta( 'camp_content_2' );
    $campaign_cta_hero = rwmb_meta( 'camp_cta_1' );
    $campaign_cta_url_hero = rwmb_meta( 'camp_cta_url_1' );
    $campaign_marketo_id = rwmb_meta( 'camp_mkt_1' );
    $camp_gartner_component = rwmb_meta('camp_gartner');
    $campaign_supplementary_image = rwmb_meta( 'camp_mkt_img_1', 'type=image&size=' , $post->ID );
    $camp_img_placeholder = rwmb_meta('camp_img-placeholder');
    $camp_form_header = rwmb_meta('camp_form_header');
?>

<main class="main-content ppc-template-main">
    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="contents">
                    <div class="content-left">
                        <h1>
                            <?php
                                _e("$campaign_maintitle", "Tradeshift");
                            ?>
                        </h1>
                        <p class="lead">
                            <?php
                                _e($campaign_subtitle, "Tradeshift");
                            ?>
                        </p>
                        <?php if($src[0]): ?>
                        <img src="<?php echo $src[0]; ?>" alt="<?php echo strip_tags( get_the_title() ); ?> | Tradeshift" title="<?php echo strip_tags( get_the_title() ); ?> | Tradeshift" class="img-responsive" />
                        <?php elseif($camp_img_placeholder == true): ?>
                            <img src="http://via.placeholder.com/650x365" title="Placeholder image 650x365" class="img-responsive" />
                        <?php endif; ?>
                        <button
                            data-toggle="modal"
                            data-target="#mktoModal0"
                            class="btn btn-primary-cta-ent btn-orange visible-sm visible-xs">
                            <?php
                                _e($campaign_cta_hero, "Tradeshift");
                            ?>
                        </button>
                        <div class="the-content">
                            <!-- The value proposition contents comes from the main text-editor -->
                            <?php
                                if(have_posts()) :
                                    while(have_posts()) :
                                        the_post();
                                            the_content();
                                    endwhile;
                                endif;
                            ?>
                            <?php if($campaign_secondary_content) : ?>
                                <hr class="dash">
                                <!-- secondary content -->
                                <?php _e($campaign_secondary_content, "Tradeshift"); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="content-right cta-form has-white-fields hidden-sm hidden-xs">
                        <h2 class="form-header">
                            <?php
                                _e($camp_form_header, "Tradeshift");
                            ?>
                        </h2>
                        <div id="spinnerDiv">
                            <i
                                id="spinner"
                                class="fa fa-spinner fa-spin fader"
                            >
                            </i>
                        </div>
                        <div id="formContainer" class="fader fadedOut">
                            <script src="//app-sjo.marketo.com/js/forms2/js/forms2.min.js"></script>
                            <form id="mktoForm_<?php echo $campaign_marketo_id ?>"></form>
                            <script>MktoForms2.loadForm("//app-sjo.marketo.com", "213-SPR-003", <?php echo $campaign_marketo_id ?>);
                                MktoForms2.whenReady(function(form){
                                    var formID = form.getId()
                                    if(formID == <?php echo $campaign_marketo_id ?>){
                                        <?php if(!empty($campaign_cta_hero)): ?>
                                            document.getElementsByClassName("mktoButton")[0].innerHTML = "<?php _e($campaign_cta_hero, 'tradeshift') ?>";
                                        <?php endif; ?>
                                        var formElement = document.getElementById("formContainer");
                                        var spinner = document.getElementById("spinner");
                                        formElement.classList.add("fadedIn");
                                        spinner.classList.add("fadedOut");
                                    }

                                })
                            </script>
                        </div>
                    </div>
                    <div class="join-the-club">
                        <div class="component rectangle-purple-gradient clear"></div>
                        <div class="intro-text">
                            <h3>
                                <?php
                                    _e("Join the club", "Tradeshift");
                                ?>
                            </h3>
                            <p>
                                <?php
                                    _e("See how NHS SBS, Air France and other Tradeshift customers are reimagining business commerce", "Tradeshift");
                                ?>
                            </p>
                        </div>
                        <div class="carousel-container">
                            <div id="customerCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#customerCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#customerCarousel" data-slide-to="1"></li>
                                  <li data-target="#customerCarousel" data-slide-to="2"></li>
                                  <li data-target="#customerCarousel" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="item-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/customer-1.jpg" alt="NHS SBS - Gary Connolly | Tradeshift" class="img-carousel" onclick="fn_vidyard_JYQJ1MPc13KZWrvmU4TJnL();" />
                                            <div class="purple-rect">
                                                <?php  _e("I definitely recommend Tradeshift, they're a very easy organization to work with and they make my life a lot easier.", "Tradeshift"); ?>
                                                <div class="quoted-person">
                                                    <span class="quoted-person--title"> <?php  _e('&mdash;Gary Connolly, e-invoicing Manager', "Tradeshift"); ?></span>
                                                    <span class="quoted-person--company">
                                                        NHS SBS
                                                    </span>
                                                </div>
                                            </div> <!-- purple-rect -->
                                        </div> <!-- item-container -->
                                    </div> <!-- item -->

                                  <div class="item">
                                        <div class="item-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/customer-2.jpg" alt="Air France - KML - Mikael Darphin | Tradeshift" class="img-carousel" onclick="fn_vidyard_X26YsBw5CwzQGriGCdShtU();" />
                                            <div class="purple-rect">
                                                <?php  _e('"We found that it\'s much easier to ask suppliers to onboard with Tradeshift when it costs nothing for them"', "Tradeshift"); ?>
                                                <div class="quoted-person">
                                                    <span class="quoted-person--title"><?php _e('&mdash;Mikael Darphin, Corporate Finance IMO Service Manager', 'Tradeshift'); ?></span>
                                                    <span class="quoted-person--company">
                                                        Air France | KLM
                                                    </span>
                                                </div>
                                            </div> <!-- purple-rect -->
                                        </div> <!-- item-container -->
                                    </div> <!-- item -->

                                    <div class="item">
                                        <div class="item-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/customer-3.jpg" alt="Hapag-Lloyd - Dr. Thore Lindenmann | Tradeshift" class="img-carousel" onclick="fn_vidyard_VoCvJSS9o5GpzRPzbFVE25();" />
                                            <div class="purple-rect">
                                                <?php  _e('"Tradeshift\'s interface is intuitive, state of the art, and among the best. The increase of transparency in workflow is one of major process improvements."', "Tradeshift"); ?>
                                                <div class="quoted-person">
                                                    <span class="quoted-person--title"><?php  _e('&mdash;Dr. Thore Lindenmann, Manager of e-Solutions', 'Tradeshift'); ?></span>
                                                    <span class="quoted-person--company">
                                                        Hapag-Lloyd
                                                    </span>
                                                </div>
                                            </div> <!-- purple-rect -->
                                        </div> <!-- item-container -->
                                    </div> <!-- item -->

                                    <div class="item">
                                        <div class="item-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/customer-4.jpg" alt="UK Local Government Shared Services - Chris Law | Tradeshift" class="img-carousel" onclick="fn_vidyard_out72rGMse68CCSjY1viVg();" />
                                            <div class="purple-rect">
                                                <?php _e("We chose Tradeshift because we wanted to have one place suppliers could go to do all of their business.", 'Tradeshift'); ?>
                                                <div class="quoted-person">
                                                    <span class="quoted-person--title"><?php  _e('&mdash;Chris Law, Head of Transactions', 'Tradeshift'); ?></span>
                                                    <span class="quoted-person--company">
                                                        UK Local Government Shared Services
                                                    </span>
                                                </div>
                                            </div> <!-- purple-rect -->
                                        </div> <!-- item-container -->
                                    </div> <!-- item -->
                                </div>
                            </div>
                        </div> <!-- carousel-container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="component gmq-peer-reviews">
        <div class="container">
            <div class="row">
                <div class="contents">
                    <div class="component rectangle-md rectangle-purple-gradient clear"></div>
                    <h4><?php _e("Gartner Peer insights", 'Tradeshift'); ?></h4>
                    <div class="insight">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/GartnerPeerInsightsLogo.png" alt="Gartner Magic Quadrant Insight | Tradeshift" />
                        <div class="review">
                            <?php
                                _e("Great company to work with and an open product with lots of interfaces", "Tradeshift");
                            ?>
                        </div>
                        <div class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="persona">
                            <?php
                                _e("&mdash; Head of E-Invoicing Solutions in the Transportation Industry", "Tradeshift");
                            ?>
                        </div>
                    </div>
                    <div class="insight">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/GartnerPeerInsightsLogo.png" alt="Gartner Magic Quadrant Insight | Tradeshift" />
                        <div class="review">
                            <?php
                                _e("Passionate provider, excellent technology and business model", "Tradeshift");
                            ?>
                        </div>
                        <div class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="persona">
                            <?php
                                _e("&mdash; VP Procurement & SCM in the Manufacturing Industry", "Tradeshift");
                            ?>
                        </div>
                    </div>
                    <div class="insight">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/GartnerPeerInsightsLogo.png" alt="Gartner Magic Quadrant Insight | Tradeshift" />
                        <div class="review">
                            <?php
                                _e("Good customer centric supplier", "Tradeshift");
                            ?>
                        </div>
                        <div class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="persona">
                            <?php
                                _e("&mdash; Acting Head Procurement in the Finance Industry", "Tradeshift");
                            ?>
                        </div>
                    </div>
                    <div class="insight">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/GartnerPeerInsightsLogo.png" alt="Gartner Magic Quadrant Insight | Tradeshift" />
                        <div class="review">
                            <?php
                                _e("Competent supplier with willingness to please customer", "Tradeshift");
                            ?>
                        </div>
                        <div class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="persona">
                            <?php
                                _e("&mdash; Purchasing Manager in the Manufacturing Industry", "Tradeshift");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($camp_gartner_component): ?>
        <div class="component contact-us-form gradient-blue">
            <div class="container">
                <div class="row">
                    <div class="contents">
                        <h4><?php _e("Shift Happened.", "Supply Chain Finance"); ?></h4>
                        <p class="lead">
                            <?php
                                _e("Tradeshift shows strong momentum debuting in the Gartner Magic Quadrant for P2P Suites", 'Tradeshift');
                            ?>
                        </p>
	                       <div class="btn-cta" style="background-color: inherit !important;">
		                       <?php icl_link_to_element(6808, 'post', __("Download report now", "Tradeshift")); ?>
	                       </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ppc-template/Gartner_logo.png" alt="<?php _e("Gartner Logo", "Tradeshift") ?>" class="gartner-logo" />
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<div class="modal fade cta-form has-white-fields" id="mktoModal0" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding-bottom: 0px">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 id="myModalLabel"><?php _e($camp_form_header, "Tradeshift") ?></h3>
      </div>
      <div class="modal-body">
        <div id="FormForSmallDevices"></div>
      </div>
    </div>
  </div>
</div>
<script>
    var form = document.getElementById("formContainer");
    var divTo = document.getElementById("FormForSmallDevices");

    if(matchMedia){
        var mq = window.matchMedia("(max-width: 992px)");
        mq.addListener(WidthChange);
        WidthChange(mq);
    }
    // media query change
    function WidthChange(mq){
        if(mq.matches){
            var elemntCloned = form.cloneNode(true);
            divTo.appendChild(form)
        }
    }
</script>
<!-- Vidyard videos -->
<script type="text/javascript" id="vidyard_embed_code_JYQJ1MPc13KZWrvmU4TJnL" src="//play.vidyard.com/JYQJ1MPc13KZWrvmU4TJnL.js?v=3.1.1&type=lightbox"></script>
<script type="text/javascript" id="vidyard_embed_code_X26YsBw5CwzQGriGCdShtU" src="//play.vidyard.com/X26YsBw5CwzQGriGCdShtU.js?v=3.1.1&type=lightbox"></script>
<script type="text/javascript" id="vidyard_embed_code_VoCvJSS9o5GpzRPzbFVE25" src="//play.vidyard.com/VoCvJSS9o5GpzRPzbFVE25.js?v=3.1.1&type=lightbox"></script>
<script type="text/javascript" id="vidyard_embed_code_out72rGMse68CCSjY1viVg" src="//play.vidyard.com/out72rGMse68CCSjY1viVg.js?v=3.1.1&type=lightbox"></script>
<?php get_footer(); ?>
