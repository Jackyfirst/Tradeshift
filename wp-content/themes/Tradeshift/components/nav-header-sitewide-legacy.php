<?php
/**
 * This component serves as the Sitewide Navigation - Legacy
 *
 * @package wpbc_s
 */
?>
<?php if( is_page("Design Request" ) || is_page("Design Request - TEST") ): ?>
        <style>.sign-up-login,
            #smt-lang-selector {
                display: none;
            }
        </style>
<?php endif; ?>
<style>
    .sitewide-nav {
        background: #f2f2f2 !important;
        box-shadow: 0px 1px 6px 3px rgba(0,0,0,0.15) !important;
    }
    #smt-lang-selector .smt-menu .smt-trigger .smt-lang {
        color: #282828 !important;
    }
    .sitewide-nav .sign-up-login li a {
        color: #3c3c3c !important;
    }
    .btn-request-demo {
        background: #00b0ff !important;
        color: #ffffff !important;
        font-weight: 700;
    }
    #smt-lang-selector .smt-menu .smt-trigger .smt-trigger-link {
        display: none;
    }
</style> 
<header class="sitewide-nav">
    <div class="container-wrapper">
        <div class="row-wrapper">
            <div class="site-navbar">
                <a href="#" id="nav-trigger" class="trigger main-nav-trigger"><span></span></a>
                <a class="navbar-brand" href="/">
                <?php if( !is_page("Design Request" ) || !is_page("Design Request - TEST") ): ?>
                <img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/TS-Brand/logo-black.png">
                <?php else: ?>
                <img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166">
                <?php endif; ?>
                </a>
                <ul class="sign-up-login nav pull-right hidden-xs">
                    <li id="signup" class="SL_swap"><a id="menuSignUp" href="https://go.tradeshift.com/register">Sign Up</a></li>
                    <li id="login" class="SL_swap"><a id="menuLogin" href="https://go.tradeshift.com/login">Log In</a></li>
                    <li><a href="http://tradeshift.com/start/demo/"><button id="menuRequestDemo" class="btn btn-request-demo">Request Demo</button></a></li>
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
                    <li class="nav-list SL_swap" id="learn-nav"><a id="learn-trigger" href="#" class="subnav-trigger">Learn</a>
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
                    <li class="register">
                        <a id="menuSignUpPhoneTablet" class="no-subnav" href="https://go.tradeshift.com/register">Sign Up</a>
                    </li>
                    <li class="log-in">
                        <a id="menuLoginPhoneTablet" class="no-subnav" href="https://go.tradeshift.com/login">Log In</a>
                    </li>
                    <li class="demo">
                        <a class="no-subnav" href="http://tradeshift.com/start/demo/"><button id="menuRequestDemoPhoneTablet" class="btn btn-request-demo-lg">Request Demo</button></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>