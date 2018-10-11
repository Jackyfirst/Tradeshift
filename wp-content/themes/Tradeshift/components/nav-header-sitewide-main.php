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
                        <a href="/about/" class="no-subnav main-header-nav-links">About</a>
                    </li>
                    <li class="nav-list"><a id="ent-trigger" href="#" class="subnav-trigger">Enterprise</a>
                        <ul class="go-back"><li><a href="#0"> Go Back</a></li></ul>
                        <ul class="ent-subnav">
                            <li><a href="/enterprise/" class="main-header-nav-links">Get Started</a></li>
                            <li><a href="/enterprise/solutions/buy/" class="main-header-nav-links">eProcurement</a></li>
                            <li><a href="/enterprise/solutions/pay/" class="main-header-nav-links">AP Automation</a></li>
                            <li><a href="/enterprise/solutions/risk/" class="main-header-nav-links">Supplier Management</a></li>
                            <li><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Platform &amp; Apps</a></li>
                            <li><a href="/enterprise/solutions/procure-to-pay/" class="main-header-nav-links">Procure to Pay</a></li>
                        </ul>
                    </li>
                    <li class="nav-list">
                        <a href="/go" class="no-subnav main-header-nav-links">SMB</a>
                    </li>
                    <li class="nav-list"><a id="app-trigger" href="#" class="subnav-trigger">Apps</a>
                        <ul class="go-back"><li></li></ul>
                        <ul class="app-subnav">
                            <li><a href="http://apps.tradeshift.com" class="main-header-nav-links">Get Started</a></li>
                            <li><a href="http://apps.tradeshift.com/apps/" class="main-header-nav-links">Appstore</a></li>
                            <li><a href="http://apps.tradeshift.com/partners/" class="main-header-nav-links">Partners</a></li>
                            <li><a href="http://apps.tradeshift.com/developers/" class="main-header-nav-links">Developers</a></li>
                            <li><a href="http://apps.tradeshift.com/community/" target="_blank" class="main-header-nav-links">Community</a></li>
                        </ul>
                    </li>
                    <li class="nav-list">
                        <a href="/roles/sb/small-business-free-invoicing/" class="no-subnav main-header-nav-links">Free Invoicing</a>
                    </li>
                    <li id="signup" class="register SL_swap">
                        <a id="menuSignupPhoneTablet" href="#" class="signup-link no-subnav main-header-nav-links" data-target="#SignUpModal" data-direction="bottom">Sign Up</a>
                    </li>
                    <li id="login" class="log-in SL_swap">
                        <a class="no-subnav main-header-nav-links" href="https://go.tradeshift.com/login">Log In</a>
                    </li>
                    <li class="demo">
                        <button class="no-subnav btn btn-request-demo-lg main-header-nav-links" data-toggle="modal" data-target="#mktoDemo">Request A Demo</button>
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
                <ul class="sign-up-login nav pull-right">
                    <li id="signup" class="signup SL_swap"><a href="#" class="signup-link main-header-nav-links hidden-xs" data-toggle="modal" data-target="#SignUpModal">Sign Up</a></li>
                    <!-- <li id="login" class="login SL_swap"><a id="loginDropdown" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="login-link">Log In</a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="/sb/free-invoicing">Free Invoicing</a></li>
                            <li><a href="/go">Go</a></li>
                        </ul>
                    </li> -->
                    <li id="login" class="login SL_swap hidden-xs"><a href="//go.tradeshift.com/login" class="login-link main-header-nav-links">Log In</a></li>
                    <li id="demo" class="demo-request SL_swap hidden-xs"><button id="menuRequestDemo" class="btn btn-request-demo main-header-nav-links" data-toggle="modal" data-target="#mktoDemo">Request a Demo</button></li>
                </ul>
            </div>
            <nav class="main-nav-wrapper">
                <ul class="main-nav">
                    <li class="nav-list">
                        <a href="/about/" class="no-subnav main-header-nav-links">About</a>
                    </li>
                    <li class="nav-list"><a id="ent-trigger" href="#" class="subnav-trigger">Enterprise</a>
                        <ul class="go-back"><li><a href="#0"> Go Back</a></li></ul>
                        <ul class="ent-subnav">
                            <li><a href="/enterprise/" class="main-header-nav-links">Get Started</a></li>
                            <li><a href="/enterprise/solutions/buy/" class="main-header-nav-links">eProcurement</a></li>
                            <li><a href="/enterprise/solutions/pay/" class="main-header-nav-links">AP Automation</a></li>
                            <li><a href="/enterprise/solutions/risk/" class="main-header-nav-links">Supplier Management</a></li>
                            <li><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Platform &amp; Apps</a></li>
                            <li><a href="/enterprise/solutions/procure-to-pay/" class="main-header-nav-links">Procure to Pay</a></li>
                        </ul>
                    </li>
                    <li class="nav-list">
                        <a href="/go" class="no-subnav main-header-nav-links">SMB</a>
                    </li>
                    <li class="nav-list"><a id="app-trigger" href="#" class="subnav-trigger">Apps</a>
                        <ul class="go-back"><li></li></ul>
                        <ul class="app-subnav">
                            <li><a href="http://apps.tradeshift.com" class="main-header-nav-links">Get Started</a></li>
                            <li><a href="http://apps.tradeshift.com/apps/" class="main-header-nav-links">Apps Center</a></li>
                            <li><a href="http://apps.tradeshift.com/partners/" class="main-header-nav-links">Partners</a></li>
                            <li><a href="http://apps.tradeshift.com/developers/" class="main-header-nav-links">Developers</a></li>
                            <li><a href="http://apps.tradeshift.com/community/" target="_blank" class="main-header-nav-links">Community</a></li>
                        </ul>
                    </li>
                    <li class="nav-list">
                        <a id="menuSMBPhone" href="/roles/sb/small-business-free-invoicing/" class="no-subnav main-header-nav-links">Free Invoicing</a>
                    </li>
                    <li id="signup" class="register SL_swap visible-xs">
                        <a id="menuSignupPhoneTablet" href="#" class="signup-link no-subnav" data-toggle="modal" data-target="#SignUpModal">Sign Up</a>
                    </li>
                    <li id="login" class="log-in SL_swap visible-xs">
                        <a id="menuLoginPhoneTablet" class="no-subnav" href="https://go.tradeshift.com/login">Log In</a>
                    </li>
                    <li class="demo visible-xs">
                        <button id="menuRequestDemoPhoneTablet" class="no-subnav btn btn-request-demo-lg" data-toggle="modal" data-target="#mktoDemo">Request A Demo</button>
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
                    <li id="main-nav-link-about" class="sub-nav-list"><a href="/about/" class="main-header-nav-links">About</a></li>
                    <li id="main-nav-link-ent" class="sub-nav-list sub-nav-list-trigger"><a class="main-nav-ent main-header-nav-links">Enterprise</a></li>
                    <li id="main-nav-link-go" class="sub-nav-list"><a class="main-nav-go main-header-nav-links" href="//tradeshift.com/go/">SMB</a></li>
                    <li id="main-nav-link-apps" class="sub-nav-list sub-nav-list-trigger"><a class="main-nav-apps main-header-nav-links">Apps</a></li>
                    <li id="main-nav-link-smb" class="sub-nav-list"><a href="//tradeshift.com/roles/sb/small-business-free-invoicing/" class="main-header-nav-links">Free Invoicing</a></li>
                </ul>
                <ul class="nav sign-up-login pull-right">
                    <li id="signup" class="signup SL_swap"><a href="#" class="signup-link main-header-nav-links" data-toggle="modal" data-target="#SignUpModal">Sign Up</a></li>
                    <!-- <li id="login" class="login SL_swap"><a id="loginDropdown" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="login-link">Log In</a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="/sb/free-invoicing">Free Invoicing</a></li>
                            <li><a href="/go">Go</a></li>
                        </ul>
                    </li> -->
                    <li id="login" class="login SL_swap"><a href="//go.tradeshift.com/login" class="login-link main-header-nav-links">Log In</a></li>
                    <li id="demo" class="demo-request SL_swap"><button id="menuRequestDemo" class="btn btn-request-demo main-header-nav-links" data-toggle="modal" data-target="#mktoDemo">Request a Demo</button></li>
                </ul>
                <span id="smt-lang-selector"></span>
            </nav>
        </div>
    </div>
</header>
<nav class="sub-nav-main-wrapper hidden-xs">
    <div id="subNavEnt" class="sub-nav-wrapper-ent">
        <div class="container">
            <div class="row sub-nav-enterprise">
                <div class="ent-nav-wrapper">
                <h2><a href="/enterprise/" class="main-header-nav-links">Get Started</a></h2>
                    <h3><a href="/enterprise/" class="main-header-nav-links">Learn why Tradeshift is the platform of choice for innovative procure-to-pay leaders.</a></h3>
                </div>
                <div class="ent-nav-wrapper">
                    <h2><a href="/enterprise/solutions/pay/" class="main-header-nav-links">AP Automation</a></h2>
                    <h3><a href="/enterprise/solutions/pay/" class="main-header-nav-links">With Tradeshift<sup>&reg;</sup> Pay, stay on top of your payables, simply and digitally, with every supplier.</a></h3>
                </div>
                <div class="ent-nav-wrapper">
                    <h2><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Platform &amp; Apps</a></h2>
                    <h3><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Find a supply chain app or build your own. The easiest, most flexible way to do business.</a></h3>
                </div>
                <div class="ent-nav-wrapper">
                    <h2><a href="/enterprise/solutions/buy/" class="main-header-nav-links">eProcurement</a></h2>
                    <h3><a href="/enterprise/solutions/buy/" class="main-header-nav-links">With Tradeshift<sup>&reg;</sup> Buy, get everything you need: any online purchase can be within policy.</a></h3>
                </div>
                <div class="ent-nav-wrapper">
                    <h2><a href="/enterprise/solutions/risk/" class="main-header-nav-links">Supplier Management</a></h2>
                    <h3><a href="/enterprise/solutions/risk/" class="main-header-nav-links">With Tradeshift<sup>&reg;</sup> Risk, manage all your supplier master data, compliance, and risk in one place.</a></h3>
                </div>
                <div class="ent-nav-wrapper">
                    <h2><a href="/resources/" class="main-header-nav-links">Resource Center</a></h2>
                    <h3><a href="/resources/" class="main-header-nav-links">Check out these videos, case studies, webinars & reports from industry thought leaders.</a></h3>
                </div>
            </div>
            <a id="sub-nav-trigger-desktop-ent" class="trigger main-nav-trigger"><span></span></a>
        </div>
    </div>
    <div id="subNavApps" class="sub-nav-wrapper-apps">
        <div class="container">
            <div class="row sub-nav-apps">
                <div class="apps-nav-wrapper">
                    <h2><a href="http://apps.tradeshift.com" class="main-header-nav-links">Get Started</a></h2>
                    <h3><a href="http://apps.tradeshift.com" class="main-header-nav-links">See why innovation is easier with Tradeshift<sup>&reg;</sup> Apps.</a></h3>
                </div>
                <div class="apps-nav-wrapper">
                    <h2><a href="http://apps.tradeshift.com/apps/" class="main-header-nav-links">Appstore</a></h2>
                    <h3><a href="http://apps.tradeshift.com/apps/" class="main-header-nav-links">Browse all the apps on Tradeshift.</a></h3>
                </div>
                <div class="apps-nav-wrapper">
                    <h2><a href="http://apps.tradeshift.com/community/" target="_blank" class="main-header-nav-links">Community</a></h2>
                    <h3><a href="http://apps.tradeshift.com/community/" target="_blank" class="main-header-nav-links">Visit our developer forum for questions, advice, and feedback.</a></h3>
                </div>
                <div class="apps-nav-wrapper">
                    <h2><a href="http://apps.tradeshift.com/partners/" class="main-header-nav-links">Partners</a></h2>
                    <h3><a href="http://apps.tradeshift.com/partners/" class="main-header-nav-links">Become an app development partner.</a></h3>
                </div>
                <div class="apps-nav-wrapper">
                    <h2><a href="http://apps.tradeshift.com/developers/" class="main-header-nav-links">Developers</a></h2>
                    <h3><a href="http://apps.tradeshift.com/developers/" class="main-header-nav-links">Find out how you can build an app.</a></h3>
                </div>
            </div>
            <a id="sub-nav-trigger-desktop-apps" class="trigger main-nav-trigger"><span></span></a>
        </div>
    </div>
</nav>
<?php endif; ?>

