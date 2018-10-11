<?php
/**
 * This component serves as the Navigation on the Footer Menu
 *
 * @package wpbc_s
 */
?>
<div class="give-us-a-call">
    <h5>Contact Sales</h5>
    <p>Talk to us about how Tradeshift can help your business. &nbsp;
        <span class="sales-phone">
            <i class="fa fa-phone"> </i> 
            <span class="phone_default">+1-800-381-3585</span>
            <span class="phone_us non-active">+1-800-381-3585</span>
            <span class="phone_uk non-active">+44-(0)20-3751-0410</span>
            <span class="phone_germany non-active">+49-0-89-97007-255</span>
            <span class="phone_france non-active">+33-(0)1-44-43-54-80</span>
        </span>
    </p>
</div>
<nav class="sitewide-footer-menu">
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
        <?php
            wp_nav_menu( array(
                'menu'              => 28,
                'menu_id'           => 'support',
                'depth'             => 1,
                'container'         => 'ul',
                'container_class'   => 'menu-support',
                'container_id'      => 'support',
                'menu_class'        => 'menu-list',
                'fallback_cb'       => false,
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
