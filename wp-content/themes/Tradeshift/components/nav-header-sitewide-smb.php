
<?php
/**
 * This component serves as the Sitewide Navigation for Main Home Page Ts.com
 *
 * @package wpbc_s
 */
?>
<?php if (is_mobile()): ?>
<header class="sitewide-nav">
    <div class="container">
        <div class="row">
            <div class="site-navbar">
                <a href="#" id="nav-trigger" class="trigger main-nav-trigger"><span></span></a>
                <a class="navbar-brand" href="/"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
                <span id="smt-lang-selector"></span>
            </div>
            <nav class="main-nav-wrapper">
                <ul class="main-nav">
                    <li class="nav-list">
                        <a href="/about" class="no-subnav main-header-nav-links">What is Tradeshift?</a>
                    </li>
                    <li class="nav-list">
                        <a href="http://blog.tradeshift.com/smb" target="_blank" class="no-subnav main-header-nav-links">Small Business Blog</a>
                    </li>
                    <li id="login" class="log-in SL_swap">
                        <a class="no-subnav main-header-nav-links" href="https://go.tradeshift.com/login">Log In</a>
                    </li>
                    <li class="demo">
                        <button class="no-subnav btn btn-request-demo-lg main-header-nav-links" data-toggle="modal" data-target="#regModal">Sign Up</button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php else: ?>
<header class="sitewide-nav">
    <div class="container visible-xs visible-sm">
        <div class="row">
            <div class="site-navbar">
                <a href="#" id="nav-trigger" class="trigger main-nav-trigger"><span></span></a>
                <a class="navbar-brand" href="/"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
                <ul class="nav sign-up-login pull-right">
                    <li id="login" class="login SL_swap hidden-xs"><a href="//go.tradeshift.com/login" class="login-link main-header-nav-links">Log In</a></li>
                    <li id="demo" class="demo-request SL_swap"><button class="no-subnav btn btn-request-demo-ent main-header-nav-links" data-toggle="modal" data-target="#regModal">Sign Up</button></li>
                </ul>
            </div>
            <nav class="main-nav-wrapper">
                <ul class="main-nav">
                    <li class="nav-list">
                        <a href="/about" class="no-subnav main-header-nav-links">What is Tradeshift?</a>
                    </li>
                    <li class="nav-list">
                        <a href="http://blog.tradeshift.com/smb" target="_blank" class="no-subnav main-header-nav-links">Small Business Blog</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container visible-md visible-lg">
        <div class="row logo-main-nav">
            <nav class="site-navbar">
                <a class="navbar-brand" href="/"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
                <ul class="main-nav-list">
                    <li id="main-nav-link-home" class="sub-nav-list"><a href="/about" class="main-header-nav-links">What is Tradeshift?</a></li>
                    <li id="main-nav-link-about" class="sub-nav-list"><a href="http://blog.tradeshift.com/smb" target="_blank" class="main-header-nav-links">Small Business Blog</a></li>
                </ul>
                <ul class="nav sign-up-login pull-right">
                    <li id="login" class="login SL_swap"><a href="//go.tradeshift.com/login" class="login-link main-header-nav-links">Log In</a></li>
                    <li id="demo" class="demo-request SL_swap"><button class="no-subnav btn btn-request-demo-ent main-header-nav-links" data-toggle="modal" data-target="#regModal">Sign Up</button></li>
                </ul>
                <span id="smt-lang-selector"></span>
            </nav>
        </div>
    </div>
</header>
<?php endif; ?>

