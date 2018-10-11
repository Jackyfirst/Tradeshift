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
                    <li><a data-toggle="modal" data-target="#regModal"><button class="btn btn-request-demo">Contact Us</button></a></li>
                </ul>
            </div>
            <nav class="main-nav-wrapper">
                <ul class="main-nav">
                    <li class="nav-list">&nbsp;</li>

                    <li class="demo">
                        <button class="btn btn-request-demo-lg">Contact Us</button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>