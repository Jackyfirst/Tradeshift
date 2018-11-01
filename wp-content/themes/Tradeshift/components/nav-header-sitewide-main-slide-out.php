   <?php
/**
 * This component serves as the Sitewide Navigation for Main Home Page Ts.com
 *
 * @package wpbc_s
 */
?>
<script>
    $(function(){
        $('.dropdown').hover(function() {
            $(this).addClass('open')
        }, function() {
            $(this).removeClass('open');
        });

        // japannese nav
        if('<?php echo ICL_LANGUAGE_CODE ?>' == 'ja') {
            $('.sitewide-nav #solutionsNav li').css('padding-right', '20px').children().css('font-size', '13px');
        }

        if ($(window).width() <= 991){
            var $langSelector = $('#smt-lang-selector').detach()
            $langSelector.appendTo('#lang-selector-container');
        }
    });

</script>

<style type="text/css">
    .main-content{
        margin-top: 66px;
    }
    #MainNav .main-nav-list>li.dropdown{
        height: auto !important;
    }
    .sitewide-nav{
        height: 66px !important;
    }
    .sitewide-nav .main-nav-row{
        margin-top: 0px !important;
        float: right;
        height: 66px;
        display: flex;
        align-items: center;
    }
    .sitewide-nav .login-translate-row{
        position: static;
        display: flex;
        align-items: center;
    }
    .sitewide-nav .login-nav{
        background: #f2f2f2;
        float: right;
        height: 66px;
        display: flex;
        align-items: center;
    }
    .sitewide-nav .sign-up-login{
        display: flex;
        align-items: center;
        padding-right: 0px;
    }
    ul{
        margin-bottom: 0px !important;
    }
    #signup{
        background: #00b0ff;
        padding: 8px 22px;
        border-radius: 22px;
    }
    #signup a{
        color: white;
        font-size: 12px;
        font-weight: 700;
    }
    #login a{
        color: #00b0ff;
    }
    #solutionsNav li{
        padding-right: 22px !important;
    }
    #solutionsNav li:last-child {
        padding-right: 33px;
    }
    .whiteBg{
        height: 100%;
        float: left;
        width: 50%;
        background: #f2f2f2;
        transform: translateX(77vw);
        position: absolute;
    }
    #MainNav .main-nav-list>li.dropdown,
    li.invoicing, li.apps, li.support {
        height: 64px !important;
        display: flex !important;
        align-items: center !important
    }
    .sitewide-nav .site-navbar a.dropdown-toggle:hover, .sitewide-nav .site-navbar a.dropdown-toggle:focus {
        color: #000000;
        cursor: default;
    }
    .sitewide-nav .main-nav-list li.apps a:hover,
    .sitewide-nav .main-nav-list li.support a:hover {
        color: #20A0E9 !important;
        cursor: pointer;
    }
    #solutionsNav .open>.dropdown-menu li a {
        cursor: pointer;
    }
    #solutionsNav .dropdown-menu {
        -webkit-transition: all 0.4s ease-out !important;
    }
    .sitewide-nav .login-nav {
        width: auto;
    }
    @media (max-width: 768px){
        .sitewide-nav{
            height: 55px;
        }
        .sitewide-nav .main-nav-row{
            height: 55px;
        }
        .sitewide-nav .login-nav{
            height: 55px;
        }
        #signup{
            padding: 15px 0px;
        }
    }
   .login-nav button.btn.btn-primary.dropdown-toggle{
        background: none;
        color: #282828;
        border: none;
        font-size: 12px;
        font-weight: 600;
    }
    .login-nav .dropdown.open .dropdown-menu{
        min-width: auto !important;
   }
</style>

<style type="text/css">
    .sub-menu a {
        font-weight: 300;
        margin-left: 22px;
        background: none;
        padding-top: 11px;
        padding-bottom: 0px;
    }
    .hide-nav {
        display: none !important;
    }
    @media (min-width: 992px) {
        .sitewide-nav .navbar-brand {
            padding: 0px;
            display: flex;
            align-items: center;
            height: 66px !important;
        }
    }
    .sitewide-nav {
        -webkit-box-shadow: 0px 1px 6px 3px rgba(0,0,0,0.15);
        box-shadow: 0px 1px 6px 3px rgba(0,0,0,0.15);
    }
    #MainNav {
        border-bottom: none !important
    }
    #solutionsNav .dropdown-menu {
        -moz-transform: scale(1, 0);
    }
    #solutionsNav .solution .dropdown-menu {
        width: 235px;
        line-height: 22px;
    }
    #solutionsNav li .dropdown-menu a.dropdown-toggle {
        height: 35px
    }
    #solutionsNav .btn-primary-cta {
        background-color: #ff9000 !important;
    }
    .subnav-level-4 {
        padding-left: 11px ;
    }
    .subnav-level-4 a {
        font-size: 12px !important;
    }
    @media (min-width: 1200px) {
        .smartling-fr #solutionsNav li {
            padding-right: 13px !important;
        }
    }
    @media (max-width: 1200px) and (min-width: 992px) {
        ul#solutionsNav {
            padding-left: 0px
        }
        #solutionsNav li {
            padding-right: 18px !important;
        }
        .smartling-fr #solutionsNav li a {
            font-size: 11px !important;
        }
        .smartling-fr #solutionsNav li {
            padding-right: 11px !important;
        }
        .smartling-ja #solutionsNav .btn-primary-cta {
            font-size: 13px !important;
            padding: 3px 15px !important;
        }
        .smartling-ja #solutionsNav li:last-child {
            padding-right: 0px !important;
        }
        .smartling-ja #solutionsNav li {
            padding-right: 12px !important;
        }
        .smartling-de #solutionsNav .btn-primary-cta {
            padding: 3px 16px !important;
            font-size: 12px !important;
        }
        .smartling-de #solutionsNav li a {
            font-size: 11px !important;
        }
    }

    @media (max-width: 992px){
        #requestDemoPhoneTablet{
            color: #00b0ff !important;
        }
        #signup {
            padding-left: 0px;
            margin-left: 0px;
        }
    }

    /* if admin bar is active */
    .admin-bar header {
        margin-top: 33px;
    }
</style>

<?php
global $lang;
$lang = ICL_LANGUAGE_CODE == 'en' || ICL_LANGUAGE_CODE == 'zh-hans' ? '' : ICL_LANGUAGE_CODE . '/';

$urls = [
	'landing' => '/' . $lang,
	'login' => "//cn-go.tradeshift.com/${lang}login",
	'pay' => "/${lang}enterprise/solutions/pay/",
	'scf' => "/${lang}supply-chain-finance",
	'buy' => "/${lang}enterprise/solutions/buy",
	'go' => "/${lang}go",
	'apps' => "/${lang}enterprise/solutions/apps",
	'seller' => "/${lang}seller-club",
	'invoice' => "/${lang}roles/sb/small-business-free-invoicing/",
	'partner' => "/${lang}partner",
	'become_a_partner' => "/${lang}become-a-partner",
	'resources' => "/${lang}resources",
	'blog' => "//blog.tradeshift.com",
	'events' => "/${lang}events-and-webinars",
	'estimator' => "/${lang}shift-your-value",
	'frontiers' => "/${lang}frontiers",
	'about' => "/${lang}about",
	'jobs' => "/${lang}jobs",
	'press' => "/${lang}press",
];

$url = get_the_permalink();

switch (ICL_LANGUAGE_CODE) {
	case 'fr':
		$urlpath = explode(site_url() . "/fr/", $url);
		break;
	case 'de':
		$urlpath = explode(site_url() . "/de/", $url);
		break;
	case 'ja':
		$urlpath = explode(site_url() . "/ja/", $url);
		break;
	default:
		$urlpath = explode(site_url() . "/", $url);
		break;
}

if (!isset($urlpath[1])) {
	$urlpath[1]	= '';
}

$wpml_permalink = [
	'fr' => "/fr/$urlpath[1]",
	'de' => "/de/$urlpath[1]",
	'ja' => "/ja/$urlpath[1]",
	'en' => "/$urlpath[1]"
];

?>

<!-- Large and Medium -->
<header id="MainNav" class="sitewide-nav hidden-sm hidden-xs">
    <div class="whiteBg"></div>
    <div class="container hidden-xs hidden-sm">
        <div class="row logo-main-nav">
            <nav class="site-navbar">
                <!-- Logo -->
                <!-- ######################################## -->
                <div class="navbar-brand">
                    <a href="<?php echo $urls['landing'] ?>"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
                </div>

                <!-- Login section -->
                <!-- ######################################## -->
                <div class="login-nav">
                    <div id="navLoginRow" class="login-translate-row">
                        <ul class="nav sign-up-login pull-left">
                            <li id="signup" class="signup SL_swap"><a href="#javascript:void(0)" class="signup-link main-header-nav-links" data-toggle="modal" data-target="#mktoModal2"><?php _e("Request demo", "Tradeshift"); ?></a></li>
                            <li id="login" class="login SL_swap"><a href="<?php echo $urls['login']; ?>" class="login-link main-header-nav-links"><?php _e("Log In", "Tradeshift"); ?></a></li>
                        </ul>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                Language
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $wpml_permalink['en']; ?>">English</a></li>
                                <li><a href="<?php echo $wpml_permalink['de']; ?>">Deutsch</a></li>
                                <li><a href="<?php echo $wpml_permalink['ja']; ?>">日本語</a></li>
                                <li><a href="<?php echo $wpml_permalink['fr']; ?>">Français</a></li>
                                <li><a href="https://cn.tradeshift.com/">中文</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="navMainRow" class="main-nav-row <?php if(!is_front_page()) { echo 'nav-global'; } ?>">
                    <ul id="solutionsNav" class="main-nav-list">
                        <!-- Solutions -->
                        <!-- ######################################## -->
                        <li class="dropdown solution"><a href="#javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php _e("Enterprise Solutions", "Tradeshift"); ?></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu p2p-solution">
                                    <a href="<?php echo $urls['pay']; ?>" id="ts-pay"><?php _e("Tradeshift<sup>&reg;</sup> Pay", "Tradeshift"); ?></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="<?php echo $urls['scf']; ?>" id="ts-scf"><?php _e("Supply Chain Finance and Dynamic Discounting", "Tradeshift"); ?></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/buy" id="ts-buy"><?php _e("Tradeshift<sup>&reg;</sup> Buy", "Tradeshift"); ?></a>
                                </li>

                                <li><a href="/apps"><?php _e("Apps", "Tradeshift"); ?></a></li>

                            </ul>
                        </li>

                        <!-- Seller Solutions -->
                        <!-- ######################################## -->
                        <li class="dropdown solution"><a href="#javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php _e("Seller Solutions", "Tradeshift"); ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $urls['seller']; ?>"><?php _e("Seller Club", "Tradeshift"); ?></a></li>
                            </ul>
                        </li>

                        <!-- Partners -->
                        <!-- ######################################## -->
                        <li class="dropdown solution"><a href="#javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php _e("Partners", "Tradeshift"); ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $urls['partner']; ?>"><?php _e("Find a Partner", "Tradeshift"); ?></a></li>
                                <li><a href="<?php echo $urls['become_a_partner']; ?>"><?php _e("Become a Partner", "Tradeshift"); ?></a></li>
                            </ul>
                        </li>

                        <!-- Resources -->
                        <!-- ######################################## -->
                        <li class="dropdown resources">
                            <a href="#javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php _e("Resources", "Tradeshift"); ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://tradeshift.com/resources"><?php _e("Resource center", "Tradeshift"); ?></a></li>
                                <li><a href="<?php echo $urls['blog']; ?>"><?php _e("Blog", "Tradeshift"); ?></a></li>
                                <li><a href="https://tradeshift.com/events-and-webinars/"><?php _e("Events and webinars", "Tradeshift"); ?></a></li>
                                <li><a href="<?php echo $urls['frontiers']; ?>"><?php _e("Frontiers", "Tradeshift"); ?></a></li>
                            </ul>
                        </li>

                        <!-- About -->
                        <!-- ######################################## -->
                        <li class="dropdown">
                            <a href="#javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php _e("About", "Tradeshift"); ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $urls['about']; ?>"><?php _e("About", "Tradeshift"); ?></a></li>
                                <li><a href="https://tradeshift.com/press"><?php _e("Press", "Tradeshift"); ?></a></li>
                            </ul>
                        </li>

                    </ul>
                </div> <!-- navMainRow -->
            </nav>
        </div> <!-- /logo-main-nav -->
    </div> <!-- /container -->
</header>

<!-- Small and Extra Small -->
<header class="sitewide-nav slide-out-nav visible-sm visible-xs">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <!-- ######################################## -->
            <div class="site-navbar">
                <a href="#javascript:void(0)" id="nav-trigger" class="trigger main-nav-trigger"><span></span></a>
                <a class="navbar-brand" href="<?php echo $urls['landing']; ?>"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
                <div id="lang-selector-container"></div>
            </div>

            <nav class="main-nav-wrapper">
                <ul class="main-nav">

                    <!-- Enterprise Solutions -->
                    <!-- ######################################## -->
                    <li class="nav-list"><a id="slide-ent-trigger" href="javascript:void(0)" class="subnav-trigger"><?php _e("Enterprise Solutions", "Tradeshift"); ?></a>
                        <ul class="subnav">
                            <li>
                                <a href="<?php echo $urls['pay']; ?>" class="header-link main-header-nav-links" id="ts-pay"><?php _e("Tradeshift<sup>&reg;</sup> Pay", "Tradeshift"); ?></a>
                                <div class="subnav-level-4">
                                    <a href="<?php echo $urls['scf']; ?>" id="ts-scf"><?php _e("Supply Chain Finance and Dynamic Discounting", "Tradeshift"); ?></a>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo $urls['buy']; ?>" class="main-header-nav-links" id="ts-buy"><?php _e("Tradeshift<sup>&reg;</sup> Buy", "Tradeshift"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo $urls['go']; ?>" class="main-header-nav-links"><?php _e("Tradeshift<sup>&reg;</sup> Go", "Tradeshift"); ?></a>
                            </li>

                            <li><a href="<?php echo $urls['pay']; ?>" class="main-header-nav-links"><?php _e("Apps", "Tradeshift"); ?></a></li>

                        </ul>
                    </li>

                    <!-- Seller Solutions -->
                    <!-- ######################################## -->
                    <li class="nav-list"><a id="slide-seller-trigger" href="javascript:void(0)" class="subnav-trigger"><?php _e("Seller Solutions", "Tradeshift"); ?></a>
                        <ul class="subnav">
                            <li>
                                <a href="<?php echo $urls['seller']; ?>" class="main-header-nav-links"><?php _e("Seller Club", "Tradeshift"); ?></a>
                            </li>
                            <li><a href="<?php echo $urls['invoice']; ?>"><?php _e("Free Invoicing", "Tradeshift"); ?></a></li>
                        </ul>
                    </li>

                    <!-- Partners -->
                    <!-- ######################################## -->
                    <li class="nav-list"><a id="slide-partner-trigger" href="javascript:void(0)" class="subnav-trigger"><?php _e("Partners", "Tradeshift"); ?></a>
                        <ul class="subnav">
                            <li>
                                <a href="<?php echo $urls['partner']; ?>" class="main-header-nav-links"><?php _e("Find a partner", "Tradeshift"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo $urls['become_a_partner']; ?>" class="main-header-nav-links"><?php _e("Become a partner", "Tradeshift"); ?></a>
                            </li>
                        </ul>
                    </li>

                    <!-- Resources -->
                    <!-- ######################################## -->
                    <li class="nav-list"><a id="slide-resources-trigger" href="javascript:void(0)" class="no-subnav main-header-nav-links subnav-trigger"><?php _e("Resources", "Tradeshift"); ?></a>
                        <ul class="subnav">
                            <li><a href="<?php echo $urls['resources']; ?>" class="main-header-nav-links"><?php _e("Resource center", "Tradeshift"); ?></a></li>
                            <li><a href="<?php echo $urls['blog']; ?>" class="main-header-nav-links"><?php _e("Blog", "Tradeshift"); ?></a></li>
                            <li><a href="<?php echo $urls['events']; ?>" class="main-header-nav-links"><?php _e("Events and webinars", "Tradeshift"); ?></a></li>
                            <li><a href="<?php echo $urls['estimator']; ?>"><?php _e("Value Estimator", "Tradeshift"); ?></a></li>
                            <li><a href="<?php echo $urls['frontiers']; ?>"><?php _e("Frontiers", "Tradeshift"); ?></a></li>
                        </ul>
                    </li>

                    <!-- About -->
                    <!-- ######################################## -->
                    <li class="nav-list"><a id="slide-ts-trigger" href="javascript:void(0)" class="subnav-trigger"><?php _e("About", "Tradeshift"); ?></a>
                        <ul class="subnav">
                            <li><a href="<?php echo $urls['about']; ?>" class="main-header-nav-links"><?php _e("About", "Tradeshift"); ?></a></li>
                            <li><a href="<?php echo $urls['jobs']; ?>" class="main-header-nav-links"><?php _e("Jobs", "Tradeshift"); ?></a></li>
                            <li><a href="<?php echo $urls['press']; ?>" class="main-header-nav-links"><?php _e("Press", "Tradeshift"); ?></a></li>
                        </ul>
                    </li>

                    <!-- Request Demo -->
                    <!-- ######################################## -->
                    <li id="signup" class="register SL_swap">
                        <a id="requestDemoPhoneTablet" href="javascript:void(0)" class="no-subnav main-header-nav-links" data-toggle="modal" data-target="#mktoModal2"><?php _e("Request Demo", "Tradeshift"); ?></a>
                    </li>

                    <!-- Log in -->
                    <!-- ######################################## -->
                    <li id="login" class="log-in SL_swap">
                        <a class="no-subnav main-header-nav-links" href="<?php echo $urls['login']; ?>"><?php _e("Log In", "Tradeshift"); ?></a>
                    </li>

                </ul>

            </nav>
        </div>
    </div>
</header>
