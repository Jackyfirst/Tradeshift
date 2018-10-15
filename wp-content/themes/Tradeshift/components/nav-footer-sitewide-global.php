<?php
/**
 * This component serves as the Navigation on the Footer Menu - Main Page Ts.com
 *
 * @package wpbc_s
 */
?>
<style>
	.wechat > img {
		display: none;
		position: absolute;
		left: -70px;
		top: -174px;
		width: 172px;
		height: 172px;
	}

	.wechat:hover > img {
		display: block;
	}
</style>

<div class="footer-logo-social">
    <img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" class="footer-logo" width="138">
    <div class="social">
        <div class="social-icons">
	        <?php if (ICL_LANGUAGE_CODE == 'zh-hans'): ?>
		        <a id="WeChat" style="position: relative;" class="icons icons-footer wechat univ-footer-nav-links-social">
			        <i class="fa fa-weixin"></i>
			        <img style="" src="/wp-content/themes/Tradeshift/img/wechat.png">
		        </a>
		        <a id="LinkedIn" href="http://linkedin.com/company/tradeshiftchina" target="_blank" class="icons icons-footer linkedin univ-footer-nav-links-social"><i class="fa fa-linkedin-square"> </i></a>
	        <?php else: ?>
		        <a id="Facebook" href="https://facebook.com/Tradeshift" target="_blank" class="icons icons-footer facebook univ-footer-nav-links-social"><i class="fa fa-facebook"> </i></a>
		        <a id="GooglePlus" href="http://google.com/+Tradeshift" target="_blank" class="icons icons-footer google-plus univ-footer-nav-links-social"><i class="fa fa-google-plus"> </i></a>
		        <a id="LinkedIn" href="http://linkedin.com/company/tradeshift" target="_blank" class="icons icons-footer linkedin univ-footer-nav-links-social"><i class="fa fa-linkedin-square"> </i></a>
		        <a if="Twitter" href="http://twitter.com/Tradeshift" target="_blank" class="icons icons-footer twitter univ-footer-nav-links-social"><i class="fa fa-twitter"> </i></a>
	        <?php endif; ?>
        </div>
    </div>
</div>
<div class="give-us-a-call hidden-md hidden-lg">
    <h5><?php _e("Contact Sales", "Tradeshift"); ?></h5>
    <p><?php _e("Talk to us about how Tradeshift can help your business. &nbsp;", "Tradeshift"); ?></p>
				<p>
        <span class="sales-phone">
            <i class="fa fa-phone"> </i>
            <span class="phone_default">4000-889-806</span>
            <span class="phone_us non-active">+1-800-381-3585</span>
            <span class="phone_uk non-active">+44-(0)20-3751-0410</span>
            <span class="phone_germany non-active">+49-0-89-97007-255</span>
            <span class="phone_france non-active">+33-(0)1-44-43-54-80</span>
        </span>
    </p>
</div>
<div class="feedback hidden-md hidden-lg">
    <h5><?php _e("Feedback", "Tradeshift"); ?></h5>
    <a href="mailto:marketing.cn@tradeshift.com"><?php _e("Give Us Feedback", "Tradeshift"); ?></a>
</div>
<nav class="footer-menu-links">
    <div class="company">
        <h5><?php _e("Company", "Tradeshift"); ?></h5>
        <?php
            wp_nav_menu( array(
                'menu'              => 21,
                'menu_id'           => 'company',
                'depth'             => 1,
                'container'         => 'ul',
                'container_class'   => 'menu-company',
                'container_id'      => 'company',
                'menu_class'        => 'menu-list',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
    <div class="media">
        <h5><?php _e("Media", "Tradeshift"); ?></h5>
        <?php
            wp_nav_menu( array(
                'menu'              => 23,
                'menu_id'           => 'media',
                'depth'             => 1,
                'container'         => 'ul',
                'container_class'   => 'menu-media',
                'container_id'      => 'media',
                'menu_class'        => 'menu-list',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
     <div class="connect">
        <h5><?php _e("Connect", "Tradeshift"); ?></h5>
        <?php
            wp_nav_menu( array(
                'menu'              => 22,
                'menu_id'           => 'connect',
                'depth'             => 1,
                'container'         => 'ul',
                'container_class'   => 'menu-connect',
                'container_id'      => 'connect',
                'menu_class'        => 'menu-list',
                'fallback_cb'       => false,
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
    <div class="support">
        <h5><?php _e("Support", "Tradeshift"); ?></h5>
        <p><a href="https://cn-support.tradeshift.com"><?php _e("Enterprise support", "Tradeshift"); ?></a></p>
        <p><a href="https://cn-support.tradeshift.com" class="univ-footer-nav-links"><?php _e("Seller Support", "Tradeshift"); ?></a>.</p>
    </div>
    <div class="give-us-a-call-md visible-md visible-lg">
        <h5><?php _e("Contact Sales", "Tradeshift"); ?></h5>
        <p><?php _e("Talk to us about how Tradeshift can help your business. &nbsp;", "Tradeshift"); ?></p>
								<p>
            <span class="sales-phone">
                <i class="fa fa-phone"> </i>
                <span class="phone_default">4000-889-806</span>
                <span class="phone_us non-active">+1-800-381-3585</span>
                <span class="phone_uk non-active">+44-(0)20-3751-0410</span>
                <span class="phone_germany non-active">+49-0-89-97007-255</span>
                <span class="phone_france non-active">+44-203-751-0411 </span>
            </span>
        </p>
    </div>
    <div class="feedback visible-md visible-lg">
        <h5><?php _e("Feedback", "Tradeshift"); ?></h5>
        <a href="mailto:marketing.cn@tradeshift.com"><?php _e("Give Us Feedback", "Tradeshift"); ?></a>
    </div>
</nav>
