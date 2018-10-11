 <?php
/*
Template Name: Onboarding 2.0
*/
get_header(); ?>

<main class="main-content onboarding">
    <div id="app" class="story-intro">
        <div class="container">
            <div class="row">
                <div class="contents vue-partner-search">

                    <partner-search></partner-search>

                    <div class="logos">
                        <?php
                            $partners = json_decode(file_get_contents('wp-content/themes/Tradeshift/json/onboarding-partners.json'));
                            foreach ($partners as $partner):
                        ?>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                                <div class="image-tile">
                                    <a href="<?php echo $partner->link; ?>" class="partner-link">
                                        <img src="/wp-content/themes/Tradeshift/img/<?php echo $partner->image; ?>" />
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow"></div>
    </div>
</main>

<!-- Modal View of Marketo Forms2 -->
<div class="modal fade" id="mktoModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 id="myModalLabel">Ready to explore your options?</h3>
                <p class="lead">We’ll contact you to set up a time to talk.</p>
            </div>
            <div class="modal-body">
                <form id="mktoForm_2288"></form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/build/bundle-app.js?ver=20180613"></script>
<?php get_footer(); ?>
