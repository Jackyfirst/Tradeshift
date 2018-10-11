<?php
/**
 * This component serves as the Sitewide Navigation
 *
 * @package wpbc_s
 */
?>
<header class="sitewide-nav">
    <div class="container">
        <div class="row">
            <div class="site-navbar">
                <a href="#" id="nav-trigger" class="trigger main-nav-trigger"><span></span></a>
                <a class="navbar-brand" href="/"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/TS-Brand/logo-header-retina.png"></a>
                <ul class="sign-up-login nav pull-right hidden-xs">
                    <li id="signup" class="SL_swap"><a id="menuSignUp" href="https://go.tradeshift.com/register">Sign Up</a></li>
                    <li id="login" class="SL_swap"><a id="menuLogin" href="https://go.tradeshift.com/login">Log In</a></li>
                    <li><a href="#" class="request-demo" data-toggle="modal" data-target="#mktoDemo"><button id="menuRequestDemo" class="btn btn-request-demo">Request Demo</button></a></li>
                </ul>
                <span id="smt-lang-selector"></span>
            </div>
            <nav class="main-nav-wrapper">
                <ul class="main-nav">
                    <li class="nav-list"><a id="what-is-tradeshift-trigger" href="#" class="subnav-trigger">What is Tradeshift?</a>
                        <ul class="go-back"><li><a href="#0"> Go Back</a></li></ul>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 25,
                                'menu_id'           => 'what-is-tradeshift-menu',
                                'depth'             => 1,
                                'container'         => 'ul',
                                'menu_class'        => 'what-is-tradeshift-subnav',
                                'fallback_cb'       => false,
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </li>

                    <li class="nav-list"><a id="solutions-trigger" href="#" class="subnav-trigger">Solutions</a>
                        <ul class="go-back"><li>&nbsp;</li></ul>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 27,
                                'menu_id'           => 'solutions-menu',
                                'depth'             => 1,
                                'container'         => 'ul',
                                'menu_class'        => 'solutions-subnav',
                                'fallback_cb'       => false,
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </li>
                    <li class="nav-list"><a id="roles-trigger" href="#" class="subnav-trigger">By Roles</a>
                        <ul class="go-back"><li>&nbsp;</li></ul>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 26,
                                'menu_id'           => 'roles-menu',
                                'depth'             => 1,
                                'container'         => 'ul',
                                'menu_class'        => 'roles-subnav',
                                'fallback_cb'       => false,
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </li>
                    <li class="nav-list SL_swap" id="learn-nav"><a id="learn-trigger" href="#" class="subnav-trigger">Resources</a>
                        <ul class="go-back"><li>&nbsp;</li></ul>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 24,
                                'menu_id'           => 'learn-menu',
                                'depth'             => 1,
                                'container'         => 'ul',
                                'menu_class'        => 'learn-subnav',
                                'fallback_cb'       => false,
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </li>
                    <li class="nav-list">
                    <?php if (is_mobile()): ?>
                        <a id="menuSMBPhone" href="/roles/sb/small-business-free-invoicing/" style="position: relative">Free Invoicing</a>
                    <?php elseif (is_tablet()): ?>
                        <a id="menuSMBTablet" href="/roles/sb/small-business-free-invoicing/" >For SMB</a>
                    <?php else: ?>
                        <a id="menuSMBDesktop-Large" href="/roles/sb/small-business-free-invoicing/" class="hidden-xs hidden-sm hidden-md" >Free Invoicing</a>
                        <a id="menuSMBDesktop-Medium" href="/roles/sb/small-business-free-invoicing/" class="visible-sm visible-md" >For SMB</a>
                    <?php endif; ?>
                    </li>
                    <li id="signup" class="register SL_swap">
                        <a id="menuSignUpPhoneTablet" class="no-subnav" href="https://go.tradeshift.com/register">Sign Up</a>
                    </li>
                    <li id="login" class="log-in SL_swap">
                        <a id="menuLoginPhoneTablet" class="no-subnav" href="https://go.tradeshift.com/login">Log In</a>
                    </li>
                    <li class="demo">
                        <a class="no-subnav" href="#" data-toggle="modal" data-target="#mktoDemo"><button id="menuRequestDemoPhoneTablet" class="btn btn-request-demo-lg">Request Demo</button></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>