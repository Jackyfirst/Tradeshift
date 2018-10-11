<?php
/**
 * This component serves as the Navigation on the Footer Menu - Main Page Ts.com
 *
 * @package wpbc_s
 */
?>
<div class="footer-logo-social">
    <img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" class="footer-logo" width="138">
    <div class="social">
        <div class="social-icons">
            <a id="Facebook" href="https://facebook.com/Tradeshift" target="_blank" class="icons icons-footer facebook univ-footer-nav-links-social"><i class="fa fa-facebook"> </i></a>
            <a id="GooglePlus" href="http://google.com/+Tradeshift" target="_blank" class="icons icons-footer google-plus univ-footer-nav-links-social"><i class="fa fa-google-plus"> </i></a>
            <a id="LinkedIn" href="http://linkedin.com/company/tradeshift" target="_blank" class="icons icons-footer linkedin univ-footer-nav-links-social"><i class="fa fa-linkedin-square"> </i></a>
            <a if="Twitter" href="http://twitter.com/Tradeshift" target="_blank" class="icons icons-footer twitter univ-footer-nav-links-social"><i class="fa fa-twitter"> </i></a>
        </div>
    </div>
</div>
<div class="give-us-a-call hidden-md hidden-lg">
    <h5>Contact Sales</h5>
    <p>Talk to us about how Tradeshift can help your business. &nbsp;
        <span class="sales-phone">
            <i class="fa fa-phone"> </i> 
            <span class="phone_default">+1-800-381-3585</span>
            <span class="phone_us non-active">Toll Free +1-800-381-3585</span>
            <span class="phone_uk non-active">+44-(0)20-3751-0410</span>
            <span class="phone_germany non-active">+49-0-89-97007-255</span>
            <span class="phone_france non-active">+33-(0)1-44-43-54-80</span>
        </span>
    </p>
</div>
<nav class="footer-menu-links">
    <div class="company">
        <h5>Company</h5>
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
        <h5>Media</h5>
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
        <h5>Connect</h5>
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
        <h5>Support</h5>
        <p><a href="https://support.tradeshift.com/home">Enterprise support</a></p>
        <p><a href="https://support.tradeshift.com/home" class="univ-footer-nav-links">Seller Support</a>.</p>
    </div>
    <div class="give-us-a-call-md visible-md visible-lg">
        <h5>Contact Sales</h5>
        <p>Talk to us about how Tradeshift can help your business. &nbsp;
            <span class="sales-phone">
                <i class="fa fa-phone"> </i>
                <span class="phone_default">+1-800-381-3585</span>
                <span class="phone_us non-active">Toll Free +1-800-381-3585</span>
                <span class="phone_uk non-active">+44-(0)20-3751-0410</span>
                <span class="phone_germany non-active">+49-0-89-97007-255</span>
                <span class="phone_france non-active">+33-(0)1-44-43-54-80</span>
            </span>
        </p>
    </div>
</nav>
