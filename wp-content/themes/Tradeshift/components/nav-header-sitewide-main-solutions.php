   <?php
/**
 * This component serves as the Sitewide Navigation for Main Home Page Ts.com
 *
 * @package wpbc_s
 */
?>

<?php if (is_mobile()): ?>
    <style type="text/css">
        .sub-menu a {
            font-weight: 300;
            margin-left: 22px;
            background: none;
            padding-top: 11px;
            padding-bottom: 0px;
        }
    </style>
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
                    <li class="nav-list"><a id="ts-trigger" href="#" class="subnav-trigger">What is Tradeshift</a>
                        <ul class="go-back"><li><a href="#0"> Go Back</a></li></ul>
                        <ul class="ts-subnav">
                            <li><a href="/enterprise/" class="main-header-nav-links">About</a></li>
                            <li><a href="/enterprise/solutions/buy/" class="main-header-nav-links">Jobs</a></li>
                            <li><a href="/enterprise/solutions/pay/" class="main-header-nav-links">Press</a></li>
                        </ul>
                    </li>                    
                    <li class="nav-list"><a id="ent-trigger" href="#" class="subnav-trigger">Solutions</a>
                        <ul class="go-back"><li><a href="#0"> Go Back</a></li></ul>
                        <ul class="ent-subnav">
                            <li><a href="/enterprise/" class="main-header-nav-links">Overview</a></li>
                            <li class="p2p">
                            <a href="#" class="main-header-nav-links p2p">P2P</a>
                                <div class="sub-menu">
                                    <a href="/enterprise/solutions/buy/">Tradeshift<sup>&reg;</sup> Buy</a>
                                    <a href="/enterprise/solutions/pay/">Tradeshift<sup>&reg;</sup> Pay</a>
                                </div>
                            </li>
                            <li><a href="/enterprise/solutions/pay/" class="main-header-nav-links">Tradeshift<sup>&reg;</sup> Risk</a></li>
                            <li><a href="/enterprise/resources/" class="main-header-nav-links">Apps</a></li>
                        </ul>
                    </li>
                    <li class="nav-list">
                        <a href="/go" class="no-subnav main-header-nav-links">For SMB</a>
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
                        <a href="/resources/" class="no-subnav main-header-nav-links">Resources</a>
                    </li>
                    <li class="nav-list">
                        <a href="/roles/sb/small-business-free-invoicing/" class="no-subnav main-header-nav-links">Free Invoicing</a>
                    </li>
                     <li class="nav-list">
                        <a href="https://support.tradeshift.com/home" class="no-subnav main-header-nav-links">Support</a>
                    </li>
                    <li id="signup" class="register SL_swap">
                        <a id="menuSignupPhoneTablet" href="#" class="signup-link no-subnav main-header-nav-links" data-target="#SignUpModal" data-direction="bottom">Sign Up</a>
                    </li>
                    <li id="login" class="log-in SL_swap">
                        <a class="no-subnav main-header-nav-links" href="https://go.tradeshift.com/login">Log In</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php else: ?>
    <style>
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {
        background: none;
    }
    .main-nav-list .dropdown-menu>li>a {
        padding-bottom: 0px;
        padding-top: 0px;
        line-height: 33px;
        font-weight: 400;
    }
    .main-nav-list .dropdown-menu>li {
        padding-bottom: 14px;
        padding-right: 0px;
        float: none;
        width: auto;
        height: auto !important;
    }
    .main-nav-list .dropdown-menu {
        padding-bottom: 0px;
        padding-top: 7px;
        margin-top: 0px;
    }
    .main-nav-list .solution .dropdown-menu {
        width: 185px;
    }
    .main-nav-list .dropdown-submenu .dropdown-menu {
        width: auto;
    }
    .main-nav-list .dropdown-menu {
        padding-bottom: 14px;
        padding-top: 3px
    }
    .dropdown-menu {
        border-radius: 0;
        padding-top: 0px;
        margin-top: 11px;
        border: none;
        margin-left: -18px;
    }

    .marginBottom-0 {margin-bottom:0;}

    .dropdown-submenu{position:relative;}
    .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;background: #f2f2f2;}
    .dropdown-submenu>.dropdown-menu>li a {
        font-weight: 400;
    }
    .dropdown-menu>.open>a {
        -webkit-transition: -webkit-transform .2s ease-in-out;
    -ms-transition: -ms-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    }
    .dropdown-menu > li:before {
        content : "";
        position: absolute;
        height  : 1px;
        width   : 80%;  /* or 100px */
        border-bottom: 1px solid #e0e0e0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
        -ms-transform: translateX(-50%) translateY(-50%);/*correction for IE9*/
    }
    .dropdown-menu > li:first-child:before {
        content: "";
        height: 0;
        width: 0;
        border: none;
    }
    .dropdown-submenu li {
        border-top: none;
    }
    .dropdown-submenu li a {
        font-weight: 300 !important;
    }
    ul.sub-menu li {
        list-style-type: none;   
        margin-top: 5px;   
        float: none !important; 
    }
    .sub-menu li:last-child {
        margin-bottom: 5px;
    }

    .open > .dropdown-menu {
      -webkit-transform: scale(1, 1);
      transform: scale(1, 1);  
      
    }
    .open > .dropdown-menu li a {
      color: #000;  
      padding-top: 14px;
    }
    .dropdown-menu li a{
      color: #fff;
    }
    .dropdown-menu {
      -webkit-transform-origin: top;
      transform-origin: top;
      -webkit-animation-fill-mode: forwards;  
      animation-fill-mode: forwards; 
      -webkit-transform: scale(1, 0);
      display: block;
      
      transition: all 0.3s ease-out;
      -webkit-transition: all 0.3s ease-out;
    }
    .dropup .dropdown-menu {
      -webkit-transform-origin: bottom;
      transform-origin: bottom;  
    }
    .dropup > .dropdown-menu:after {
      border-bottom: 0;
      border-top: 6px solid rgba(39, 45, 51, 0.9);
      top: auto;
      display: inline-block;
      bottom: -6px;
      content: '';
      position: absolute;
      left: 50%;
      border-right: 6px solid transparent;
      border-left: 6px solid transparent;
    }
    .btn-primary-cta {
        height: auto !important;
        padding: 3px 22px !important;
        font-size: 14px !important;
        background: #ff5200 !important;
        -webkit-transition: background 200ms ease-in;
        -moz-transition: background 200ms ease-in;
        transition: background 200ms ease-in;
    }
    .sitewide-nav .main-nav-list li {
        padding-right: 18px;
    }
    .sitewide-nav .main-nav-list li.dropdown {
        margin-bottom: 0px;
        height: 33px;
    }
    @media (max-width: 1200px) and (min-width: 768px) { 
        .sitewide-nav .main-nav-list li {
            padding-right: 11px;
        }
        .sitewide-nav .main-nav-list li a {
            font-size: 13px;
        }
    }
     @media (max-width: 992px) and (min-width: 768px) { 
        .sitewide-nav .main-nav-list li {
            padding-right: 10px;
        }
        .btn-primary-cta {
            padding: 3px 11px !important;
            font-size: 12px !important;
        }
        .sitewide-nav .main-nav-list li a {
            font-size: 12px;
        }
        .invoicing {
            display: none;
        }
     }
    @media (max-width: 885px) {
        .sitewide-nav .main-nav-list {
            padding-left: 0px;
        }
        .main-nav-list li.invoicing {
            display: none;
        }
        .partners ul.dropdown-menu {
            left: -100px !important;
        }
    }
</style>
<script>

    (function($){
        $(document).ready(function(){
            $('ul.dropdown-menu [data-toggle=dropdown] a').hover(function(event) {
                event.preventDefault(); 
                event.stopPropagation(); 
                $(this).parent().siblings().removeClass('open');
                $(this).parent().siblings().css({});
                $(this).parent().toggleClass('open');
            });


            $('.dropdown').hover(function() {
              $(this).addClass('open');
            }, function() {
             $(this).removeClass('open');
               
            });

        });
    })(jQuery);

</script> 
<header id="header-nav" class="sitewide-nav hidden-xs section-first">
    <div class="container">
        <div class="row logo-main-nav">
            <nav class="site-navbar">
                <div class="navbar-brand">
                    <a href="/"><img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166"></a>
                </div>
                <div class="login-nav">
                    <div id="navLoginRow" class="login-translate-row">
                        <ul class="nav sign-up-login pull-left">
                            <li id="login" class="login SL_swap"><a href="//go.tradeshift.com/login" class="login-link main-header-nav-links">Log In</a></li>
                            <li id="signup" class="signup SL_swap"><a href="#" class="signup-link main-header-nav-links" data-toggle="modal" data-target="#SignUpModal">Sign Up</a></li>
                            <li id="support" class="support SL_swap"><a href="https://support.tradeshift.com/home" class="support-link main-header-nav-links">Support</a></li>
                        </ul>
                        <span id="smt-lang-selector" class="pull-right"></span>
                    </div>
                <div id="navMainRow" class="main-nav-row">
                        <ul class="main-nav-list">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">What is Tradeshift</a>
                        <ul class="dropdown-menu">
                            <!-- <li><a href="#">What we do</a></li> -->
                            <li><a href="/about/">About</a></li>
                            <!-- <li><a href="#">History</a></li> -->
                            <!-- <li><a href="#">Leadership</a></li> -->
                            <li><a href="/jobs">Jobs</a></li>
                            <li><a href="/press">Press</a></li>
                        </ul>
                    </li>
                    <li class="dropdown solution"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Solutions</a>
                        <ul class="dropdown-menu">
                            <li><a href="/enterprise/solutions/overview/" class="dropdown-header">Overview</a></li>
                            <li class="dropdown dropdown-submenu"><a href="/enterprise/solutions/procure-to-pay/" class="dropdown-toggle" data-toggle="dropdown">P2P</a>
                                <ul class="sub-menu">
                                    <li><a href="/enterprise/solutions/procure-to-pay/">P2P Solution</a></li>
                                    <li><a href="/enterprise/solutions/buy/">Tradeshift<sup>&reg;</sup> Buy</a></li>
                                    <li><a href="/enterprise/solutions/pay/">Tradeshift<sup>&reg;</sup> Pay</a></li>
                                </ul>
                            </li>
                            <!-- <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Supplier engagement</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Tradeshift<sup>&reg;</sup> Connect</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a href="#">Marketplace</a></li> -->
                            <li><a href="/enterprise/solutions/risk/">Tradeshift<sup>&reg;</sup> Risk</a></li>
                            <li><a href="/enterprise/solutions/apps/">Apps</a></li>
                        </ul>
                    </li>
                    <li class="dropdown smb"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Solutions for SMB</a>
                        <ul class="dropdown-menu">
                           <!--  <li><a href="https://tradeshift.com/getgo/go-product-page/">SMB</a></li> -->
                            <li><a href="https://tradeshift.com/getgo/go-product-page/">Tradeshift Go</a></li>
                            <li><a href="https://tradeshift.com/roles/sb/small-business-free-invoicing/">Free Invoicing</a></li>
                        </ul>
                    </li>
                    <li class="dropdown resources"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                        <ul class="dropdown-menu">
                            <li><a href="https://tradeshift.com/resources/">Resources center</a></li>
                            <li><a href="https://blog.tradeshift.com/">Blog</a></li>
                            <li><a href="https://tradeshift.com/events-and-webinars/">Events and webinars</a></li>
                            <!-- <li><a href="#">Video hub</a></li> -->
                            <!-- <li><a href="https://support.tradeshift.com/">Community</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown partners"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Partners</a>
                        <ul class="dropdown-menu">
                            <li><a href="http://apps.tradeshift.com/">Apps/Developers</a></li>
                            <li><a href="https://tradeshift.com/partners/">BPO</a></li>
                        </ul>
                    </li>
                    <li class="invoicing"><a href="https://tradeshift.com/roles/sb/small-business-free-invoicing/">Free Invoicing</a></li>
                    <li><a href="#" class="btn btn-primary-cta" data-toggle="modal" data-target="#mktoModal2">Request a Demo</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php endif; ?>

