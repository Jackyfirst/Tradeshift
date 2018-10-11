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
            </div>
            <nav class="main-nav-wrapper">
                <ul class="main-nav">
                    <li class="nav-list">
                        <a href="/" class="no-subnav main-header-nav-links">Home</a>
                    </li>
                    <li class="nav-list">
                        <a href="/about/" class="no-subnav main-header-nav-links">About</a>
                    </li>
                    <li class="nav-list"><a id="roles-trigger" href="#" class="subnav-trigger">Roles</a>
                        <ul class="go-back"><li><a href="#0"> Go Back</a></li></ul>
                        <ul class="roles-subnav">
                            <li><a href="/enterprise/roles/overview/" class="main-header-nav-links">Overview</a></li>
                            <li><a href="/enterprise/roles/executives" class="main-header-nav-links">Executives</a></li>
                            <li><a href="/enterprise/roles/procurement/" class="main-header-nav-links">Procurement</a></li>
                            <li><a href="/enterprise/roles/accounts-payable/" class="main-header-nav-links">Accounts Payable</a></li>
                            <li><a href="/enterprise/roles/procure-to-pay-process/" class="main-header-nav-links">Procure-to-pay Owner</a></li>
                            <li><a href="/enterprise/roles/finance/" class="main-header-nav-links">Finance</a></li>
                            <li><a href="/enterprise/roles/it/" class="main-header-nav-links">IT</a></li>
                            <li><a href="/roles/sb/small-business-free-invoicing/" class="main-header-nav-links">For Small Business</a></li>
                            <li><a href="/roles/invited-supplier/" class="main-header-nav-links">Invited to Tradeshift?</a></li>
                        </ul>
                    </li>
                    <li class="nav-list"><a id="solutions-trigger" href="#" class="subnav-trigger">Solutions</a>
                        <ul class="go-back"><li></li></ul>
                        <ul class="solutions-subnav">
                            <li><a href="/enterprise/solutions/overview/" class="main-header-nav-links">Overview</a></li>
                            <li><a href="/enterprise/solutions/buy/" class="main-header-nav-links">eProcurement</a></li>
                            <li><a href="/enterprise/solutions/pay/" class="main-header-nav-links">AP Automation</a></li>
                            <li><a href="/enterprise/solutions/risk/" class="main-header-nav-links">Supplier Management</a></li>
                            <li><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Platform &amp; Apps</a></li>
                            <li><a href="/enterprise/solutions/procure-to-pay/" class="main-header-nav-links">Procure to Pay</a></li>
                        </ul>
                    </li>
                    <li class="nav-list"><a id="resources-trigger" href="#" class="subnav-trigger">Resources</a>
                        <ul class="go-back"><li></li></ul>
                        <ul class="resources-subnav">
                            <li><a href="http://blog.tradeshift.com/" target="_blank" class="main-header-nav-links">Blog</a></li>
                            <li><a href="/events-webinars/" class="main-header-nav-links">Events &amp; Webinars</a></li>
                            <li><a href="/resources/" class="main-header-nav-links">Resource Center</a></li>
                            <li><a href="/solutions/delivery-services/" class="main-header-nav-links">Professional Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-list">
                        <a href="/roles/sb/small-business-free-invoicing/" class="no-subnav main-header-nav-links">Free Invoicing</a>
                    </li><!-- 
                    <li id="signup" class="register SL_swap">
                        <a id="menuSignupPhoneTablet" href="#" class="signup-link no-subnav main-header-nav-links" data-target="#SignUpModal" data-direction="bottom">Sign Up</a>
                    </li>
                    <li id="login" class="log-in SL_swap">
                        <a class="no-subnav main-header-nav-links" href="https://go.tradeshift.com/login">Log In</a>
                    </li> -->
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
                <ul class="sign-up-login nav pull-right hidden-xs">
                    <li id="signup" class="signup SL_swap"><a href="#" class="signup-link main-header-nav-links" data-toggle="modal" data-target="#SignUpModal">Sign Up</a></li>
                    <!-- <li id="login" class="login SL_swap"><a id="loginDropdown" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="login-link">Log In</a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="/sb/free-invoicing">Free Invoicing</a></li>
                            <li><a href="/go">Go</a></li>
                        </ul>
                    </li> -->
                    <li id="login" class="login SL_swap"><a href="//go.tradeshift.com/login" class="login-link main-header-nav-links">Log In</a></li>
                    <li id="demo" class="demo-request"><a href="https://itunes.apple.com/us/app/tradeshift-go-your-travel/id980446473?mt=8" target="_blank" style="padding: 10px 6px;"><img src="<?php echo get_template_directory_uri(); ?>/img/gov2/download-go-app.png" alt="Download Go App" width="110"></a></li>
                </ul>
            </div>
            <nav class="main-nav-wrapper">
                <ul class="main-nav">
                    <li class="nav-list">
                        <a href="/" class="no-subnav main-header-nav-links">Home</a>
                    </li>
                    <li class="nav-list">
                        <a href="/about/" class="no-subnav main-header-nav-links">About</a>
                    </li>
                    <li class="nav-list"><a id="roles-trigger" href="#" class="subnav-trigger">Roles</a>
                        <ul class="go-back"><li><a href="#0"> Go Back</a></li></ul>
                        <ul class="roles-subnav">
                            <li><a href="/enterprise/roles/overview/" class="main-header-nav-links">Overview</a></li>
                            <li><a href="/enterprise/roles/executives/" class="main-header-nav-links">Executives</a></li>
                            <li><a href="/enterprise/roles/procurement/" class="main-header-nav-links">Procurement</a></li>
                            <li><a href="/enterprise/roles/accounts-payable/" class="main-header-nav-links">Accounts Payable</a></li>
                            <li><a href="/enterprise/roles/procure-to-pay-process/" class="main-header-nav-links">Procure-to-pay Owner</a></li>
                            <li><a href="/enterprise/roles/finance/" class="main-header-nav-links">Finance</a></li>
                            <li><a href="/enterprise/roles/it/" class="main-header-nav-links">IT</a></li>
                            <li><a href="/roles/sb/small-business-free-invoicing/" class="main-header-nav-links">For Small Business</a></li>
                            <li><a href="/roles/invited-supplier/" class="main-header-nav-links">Invited to Tradeshift?</a></li>
                        </ul>
                    </li>
                    <li class="nav-list"><a id="solutions-trigger" href="#" class="subnav-trigger">Solutions</a>
                        <ul class="go-back"><li></li></ul>
                        <ul class="solutions-subnav">
                            <li><a href="/enterprise/solutions/overview/" class="main-header-nav-links">Overview</a></li>
                            <li><a href="/enterprise/solutions/buy/" class="main-header-nav-links">eProcurement</a></li>
                            <li><a href="/enterprise/solutions/pay/" class="main-header-nav-links">AP Automation</a></li>
                            <li><a href="/enterprise/solutions/risk/" class="main-header-nav-links">Supplier Management</a></li>
                            <li><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Platform &amp; Apps</a></li>
                            <li><a href="/enterprise/solutions/procure-to-pay/" class="main-header-nav-links">Procure to Pay</a></li>
                    </li>
                    <li class="nav-list"><a id="resources-trigger" href="#" class="subnav-trigger">Resources</a>
                        <ul class="go-back"><li></li></ul>
                        <ul class="resources-subnav">
                            <li><a href="http://blog.tradeshift.com/" target="_blank" class="main-header-nav-links">Blog</a></li>
                            <li><a href="/events-webinars/" class="main-header-nav-links">Events &amp; Webinars</a></li>
                            <li><a href="/resources/" class="main-header-nav-links">Resource Center</a></li>
                            <li><a href="/solutions/delivery-services/" class="main-header-nav-links">Professional Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-list">
                        <a href="/roles/sb/small-business-free-invoicing/" class="no-subnav main-header-nav-links">Free Invoicing</a>
                    </li>
                    <!-- <li id="signup" class="register SL_swap visible-xs">
                        <a id="menuSignupPhoneTablet" href="#" class="signup-link no-subnav" data-toggle="modal" data-target="#SignUpModal">Sign Up</a>
                    </li>
                    <li id="login" class="log-in SL_swap visible-xs">
                        <a id="menuLoginPhoneTablet" class="no-subnav" href="https://go.tradeshift.com/login">Log In</a>
                    </li> -->
                    <li id="demo" class="demo-request"><a href="https://itunes.apple.com/us/app/tradeshift-go-your-travel/id980446473?mt=8" target="_blank" style="padding: 10px 6px;"><img src="<?php echo get_template_directory_uri(); ?>/img/gov2/download-go-app.png" alt="Download Go App" width="110"></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container visible-md visible-lg">
        <div class="row logo-main-nav">
            <nav class="site-navbar">
                <a class="navbar-brand" href="/"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
                <ul class="main-nav-list">
                    <li id="main-nav-link-home" class="sub-nav-list"><a href="/" class="main-header-nav-links">Home</a></li>
                    <li id="main-nav-link-about" class="sub-nav-list"><a href="/about/" class="main-header-nav-links">About</a></li>
                    <li id="main-nav-link-roles" class="sub-nav-list sub-nav-list-trigger"><a class="main-nav-roles main-header-nav-links">Roles</a></li>
                    <li id="main-nav-link-solutions" class="sub-nav-list sub-nav-list-trigger"><a class="main-nav-solutions main-header-nav-links">Solutions</a></li>
                    <li id="main-nav-link-resources" class="sub-nav-list sub-nav-list-trigger"><a class="main-nav-resources main-header-nav-links">Resources</a></li>
                    <li id="main-nav-link-about" class="sub-nav-list"><a href="/roles/sb/small-business-free-invoicing/" class="main-header-nav-links">Free Invoicing</a></li>
                </ul>
                <ul class="nav sign-up-login pull-right">
                    <!-- <li id="signup" class="signup SL_swap"><a href="#" class="signup-link main-header-nav-links" data-toggle="modal" data-target="#SignUpModal">Sign Up</a></li> -->
                    <!-- <li id="login" class="login SL_swap"><a id="loginDropdown" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="login-link">Log In</a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="/sb/free-invoicing">Free Invoicing</a></li>
                            <li><a href="/go">Go</a></li>
                        </ul>
                    </li> -->
                    <!-- <li id="login" class="login SL_swap"><a href="//go.tradeshift.com/login" class="login-link main-header-nav-links">Log In</a></li> -->
                    <li id="demo" class="demo-request"><a href="https://itunes.apple.com/us/app/tradeshift-go-your-travel/id980446473?mt=8" target="_blank" style="padding: 10px 6px;"><img src="<?php echo get_template_directory_uri(); ?>/img/gov2/download-go-app.png" alt="Download Go App" width="110"></a></li>
                </ul>
               <!--  <span id="smt-lang-selector"></span> -->
            </nav>
        </div>
    </div>
</header>
<nav class="sub-nav-main-wrapper hidden-xs hidden-sm">
    <div id="subNavRoles" class="sub-nav-wrapper sub-nav-wrapper-roles">
        <div class="container">
            <div class="sub-nav-roles">
                <div class="row">
                    <div class="roles-nav-wrapper">
                        <h2><a href="/enterprise/roles/overview/" class="main-header-nav-links">Overview</a></h2>
                        <h3><a href="/enterprise/roles/overview/" class="main-header-nav-links">You make things happen. See how Tradeshift helps gets you, and your business, where you want to be.</a></h3>
                    </div>
                    <div class="roles-nav-wrapper">
                        <h2><a href="/enterprise/roles/accounts-payable/" class="main-header-nav-links">Accounts Payable</a></h2>
                        <h3><a href="/enterprise/roles/accounts-payable/" class="main-header-nav-links">You keep the AP engine running smoothly. Turn manual, disconnected transactions into automated processes.</a></h3>
                    </div>
                    <div class="roles-nav-wrapper">
                        <h2><a href="/enterprise/roles/it/" class="main-header-nav-links">IT</a></h2>
                        <h3><a href="/enterprise/roles/it/" class="main-header-nav-links">You know your systems better than anyone. Reap the benefits of our cloud-based platform for years to come.</a></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="roles-nav-wrapper">
                        <h2><a href="/enterprise/roles/procurement/" class="main-header-nav-links">Procurement</a></h2>
                        <h3><a href="/enterprise/roles/procurement/" class="main-header-nav-links">You collaborate across teams and suppliers. Reach your savings goals and help your business become more agile.</a></h3>
                    </div>
                    <div class="roles-nav-wrapper">
                        <h2><a href="/enterprise/roles/procure-to-pay-process/" class="main-header-nav-links">Procure-to-Pay Owner</a></h2>
                        <h3><a href="/enterprise/roles/procure-to-pay-process/" class="main-header-nav-links">You create order from chaos. Streamline your processes with a single point of collaboration.</a></h3>
                    </div>
                    <div class="roles-nav-wrapper">
                        <h2><a href="/roles/sb/small-business-free-invoicing/" class="main-header-nav-links">For Small Business</a></h2>
                        <h3><a href="/roles/sb/small-business-free-invoicing/" class="main-header-nav-links">Simple, powerful invoicing and a way to do business that doesn’t suck. Create your free Tradeshift account.</a></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="roles-nav-wrapper">
                        <h2><a href="/enterprise/roles/finance/" class="main-header-nav-links">Finance</a></h2>
                        <h3><a href="/enterprise/roles/finance/" class="main-header-nav-links">You’re more than just the money. Make finance cost-effective while maintaining compliance &amp; reducing risk.</a></h3>
                    </div>
                    <div class="roles-nav-wrapper">
                        <h2><a href="/enterprise/roles/executives/" class="main-header-nav-links">Executives</a></h2>
                        <h3><a href="/enterprise/roles/executives/" class="main-header-nav-links">You’re the boss. Use Tradeshift’s digital platform to optimize your complex supply chain processes.</a></h3>
                    </div>
                    <div class="roles-nav-wrapper">
                        <h2><a href="/roles/invited-supplier/" class="main-header-nav-links">Invited Suppliers</a></h2>
                        <h3><a href="/roles/invited-supplier/" class="main-header-nav-links">Doing business with your customer just got easier. Welcome to Tradeshift.</a></h3>
                    </div>
                </div>
            </div>
            <a id="sub-nav-trigger-desktop-roles" class="trigger main-nav-trigger"><span></span></a>
        </div>
    </div>
    <div id="subNavSolutions" class="sub-nav-wrapper sub-nav-wrapper-solutions">
        <div class="container">
            <div class="sub-nav-solutions">
                <div class="row">
                    <div class="solutions-nav-wrapper">
                        <h2><a href="/enterprise/solutions/overview/" class="main-header-nav-links">Overview</a></h2>
                        <h3><a href="/enterprise/solutions/overview/" class="main-header-nav-links">Learn why Tradeshift is the platform of choice for innovative procure-to-pay leaders.</a></h3>
                    </div>
                    <div class="solutions-nav-wrapper">
                        <h2><a href="/enterprise/solutions/pay/" class="main-header-nav-links">AP Automation</a></h2>
                        <h3><a href="/enterprise/solutions/pay/" class="main-header-nav-links">With Tradeshift&reg; Pay, stay on top of your payables, simply and digitally, with every supplier.</a></h3>
                    </div>
                    <div class="solutions-nav-wrapper">
                        <h2><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Apps &amp; Platform</a></h2>
                        <h3><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Find a supply chain app or build your own. The easiest, most flexible way to do business.</a></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="solutions-nav-wrapper">
                        <h2><a href="/enterprise/solutions/buy/" class="main-header-nav-links">eProcurement</a></h2>
                        <h3><a href="/enterprise/solutions/buy/" class="main-header-nav-links">With Tradeshift&reg; Buy, get everything you need: any online purchase can be within policy. </a></h3>
                    </div>
                    <div class="solutions-nav-wrapper">
                        <h2><a href="/enterprise/solutions/risk/" class="main-header-nav-links">Supplier Management</a></h2>
                        <h3><a href="/enterprise/solutions/risk/" class="main-header-nav-links">With Tradeshift&reg; Risk, manage all your supplier master data, compliance, and risk in one place.</a></h3>
                    </div>
                    <div class="solutions-nav-wrapper">
                        <h2><a href="/enterprise/solutions/procure-to-pay/" class="main-header-nav-links">Procure to Pay</a></h2>
                        <h3><a href="/enterprise/solutions/apps/" class="main-header-nav-links">Manage all aspects of your procure-to-pay process through simplified solutions.</a></h3>
                    </div>
                </div>
            </div>
            <a id="sub-nav-trigger-desktop-solutions" class="trigger main-nav-trigger"><span></span></a>
        </div>
    </div>
    <div id="subNavResources" class="sub-nav-wrapper sub-nav-wrapper-resources">
        <div class="container">
            <div class="sub-nav-resources">
                <div class="row">
                    <div class="resources-nav-wrapper">
                        <h2><a href="http://blog.tradeshift.com/" target="_blank" class="main-header-nav-links">Blog</a></h2>
                        <h3><a href="http://blog.tradeshift.com/" target="_blank" class="main-header-nav-links">Read on our latest insights for procure-to-pay and finance leaders.</a></h3>
                    </div>
                    <div class="resources-nav-wrapper">
                        <h2><a href="/events-webinars/" class="main-header-nav-links">Events &amp; Webinars</a></h2>
                        <h3><a href="/events-webinars/" class="main-header-nav-links">Attend our webinars and events, hosted around the world.</a></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="resources-nav-wrapper">
                        <h2><a href="/resources/" class="main-header-nav-links">Resource Center</a></h2>
                        <h3><a href="/resources/" class="main-header-nav-links">Browse our videos, case studies, webinars &amp; industry reports.</a></h3>
                    </div>
                    <div class="resources-nav-wrapper">
                        <h2><a href="/solutions/delivery-services/" class="main-header-nav-links">Professional Services</a></h2>
                        <h3><a href="/solutions/delivery-services/" class="main-header-nav-links">See for yourself how our implementation methods deliver value quickly.</a></h3>
                    </div>
                </div>
            </div>
            <a id="sub-nav-trigger-desktop-resources" class="trigger main-nav-trigger"><span></span></a>
        </div>
    </div>
</nav>
<?php endif; ?>

