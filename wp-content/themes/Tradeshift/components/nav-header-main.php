<?php
// This navigation is in progress and is to used in V2 of front page of website
?>
<style>
    @media (max-width: 992px) {
        .navbar-nav>li {
            float: left;
            width: 100%;
            clear: both;
        }
    }
</style>
<style>
    
@media (max-width: 1025px) {
#solutionsNav {
    background: #ffffff;
}
.main-nav-list .subnav-trigger::before {
    -webkit-transform: rotate(135deg);
    -moz-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    -o-transform: rotate(135deg);
    transform: rotate(135deg);
}
.main-nav-list .subnav-trigger::after {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}
.main-nav-list .subnav-trigger::before, .main-nav-list .subnav-trigger::after {
    content: "";
    position: absolute;
    top: 50%;
    right: 15px;
    margin-top: -1px;
    display: inline-block;
    height: 2px;
    width: 10px;
    background: #6c6c6c;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform-origin: 9px 50%;
    -moz-transform-origin: 9px 50%;
    -ms-transform-origin: 9px 50%;
    -o-transform-origin: 9px 50%;
    transform-origin: 9px 50%;
}
.main-nav-list a {
    display: block;
    margin: 0;
    padding: 15px 21px 15px 30px !important;
    z-index: 15;
    font-family: "Open Sans",Helvetica,Arial,sans-serif;
    font-weight: 600;
    color: #282828;
    background: url('http://comweb.staging.wpengine.com/wp-content/themes/Tradeshift/img/home/main-nav-bg.png') no-repeat bottom left 30px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition: -webkit-transform 0.6s,opacity 0.6s;
    -moz-transition: -moz-transform 0.6s,opacity 0.6s;
    transition: transform 0.6s,opacity 0.6s;
}
.main-nav-list .subnav-trigger {
    position: relative;
}
.main-nav-list.nav-is-visible {
    opacity: 1;
    -webkit-box-shadow: 2px 0px 4px 1px rgba(0,0,0,0.25);
    box-shadow: 2px 0px 4px 1px rgba(0,0,0,0.25);
}
.nav-list {
    width: 100%;
}
.subnav-trigger {
    width: 100%;
}
#MainNav .main-nav-list>li.dropdown {
    padding-right: 0px !important;
}
.main-nav-list li ul {
    -webkit-transition: -webkit-transform 0.6s;
    -moz-transition: -moz-transform 0.6s;
    transition: transform 0.6s;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    position: relative;
    z-index: 99999;
    list-style-type: none;
    background: #f2f2f2;
}

.hide-1024-below {
    display: none;
}
/*
.cd-main-nav {
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    width: 260px;
    height: 100vh;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    visibility: hidden;
    background: #1e262c;
    -webkit-transition: visibility 0s 0.3s;
    -moz-transition: visibility 0s 0.3s;
    transition: visibility 0s 0.3s;
    }
    .cd-main-nav a {
    display: block;
    font-size: 1.8rem;
    padding: .9em 2em .9em 1em;
    border-bottom: 1px solid #33414a;
    color: #ffffff;
    -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
    -moz-transition: -moz-transform 0.3s, opacity 0.3s;
    transition: transform 0.3s, opacity 0.3s;
    }
    .cd-main-nav li ul {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s;
    -webkit-transform: translateX(260px);
    -moz-transform: translateX(260px);
    -ms-transform: translateX(260px);
    -o-transform: translateX(260px);
    transform: translateX(260px);
    }
    .cd-main-nav.nav-is-visible {
    visibility: visible;
    -webkit-transition: visibility 0s 0s;
    -moz-transition: visibility 0s 0s;
    transition: visibility 0s 0s;
    }
    .cd-main-nav .cd-subnav-trigger::before, .cd-main-nav .cd-subnav-trigger::after, .cd-main-nav .go-back a::before, .cd-main-nav .go-back a::after {
    content: '';
    position: absolute;
    top: 50%;
    margin-top: -1px;
    display: inline-block;
    height: 2px;
    width: 10px;
    background: #485c68;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    }
} */
}
@media (min-width: 1023px) {
    .hide-1024-above {
        display: none;
    }
}
</style>
<style>
		/* My Styles */
		.cd-main-nav {
		margin-top: 0px !important;
		}
		/* -------------------------------- 

		Main Components 

		-------------------------------- */
		/* header {
			position: fixed;
			z-index: 3;
			height: 50px;
			width: 100%;
			top: 0;
			left: 0;
			background-color: #33414a;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		
			-webkit-transform: translateZ(0);
			-moz-transform: translateZ(0);
			-ms-transform: translateZ(0);
			-o-transform: translateZ(0);
			transform: translateZ(0);
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
			-webkit-transition: -webkit-transform 0.6s;
			-moz-transition: -moz-transform 0.6s;
			transition: transform 0.6s;
		} */
		header.nav-is-visible {
			-webkit-transform: translateX(260px);
			-moz-transform: translateX(260px);
			-ms-transform: translateX(260px);
			-o-transform: translateX(260px);
			transform: translateX(260px);
		}
		header::before {
			/* never visible - this is used in jQuery to check the current MQ */
			display: none;
			content: 'mobile';
		}
		@media only screen and (min-width: 1025px) {
		header {
			height: 66px;
		}
		header.nav-is-visible {
			-webkit-transform: translateX(0);
			-moz-transform: translateX(0);
			-ms-transform: translateX(0);
			-o-transform: translateX(0);
			transform: translateX(0);
		}
		header::before {
			content: 'desktop';
		}
		.navbar>.container .navbar-brand {
			margin-left: 0px !important;
		}
		.logo-sm {
			display: none;
		}
		}

		.cd-logo {
			/* display: block;
			height: 100%;
			width: 200px;
			margin: auto;
			border: 1px solid red; */
			/* remove jump on iOS devices - when we fire the navigation */
			-webkit-transform: translateZ(0);
			-moz-transform: translateZ(0);
			-ms-transform: translateZ(0);
			-o-transform: translateZ(0);
			transform: translateZ(0);
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
		}
		/* .cd-logo img {
			display: block;
			max-width: 100%;
			margin-top: 14px;
		} */
		@media only screen and (min-width: 1025px) {
		
.cd-logo {
	position: absolute;
	z-index: 2;
	margin-left: 5%;
}
.cd-logo img {
	margin-top: 29px;
}
		}

.cd-nav-trigger {
display: block;
position: absolute;
left: 0;
top: 0;
height: 100%;
width: 50px;
/* hide text */
overflow: hidden;
white-space: nowrap;
color: transparent;
}
.cd-nav-trigger span {
/* hamburger icon created in CSS */
position: absolute;
height: 2px;
width: 20px;
top: 50%;
margin-top: -1px;
left: 50%;
margin-left: -10px;
-webkit-transition: background-color 0.3s 0.6s;
-moz-transition: background-color 0.3s 0.6s;
transition: background-color 0.3s 0.6s;
background-color: #333;
}
.cd-nav-trigger span::before, .cd-nav-trigger span::after {
/* upper and lower lines of the menu icon */
/* let's create the hamburger icon */
content: '';
position: absolute;
width: 100%;
height: 100%;
background-color: #333;
/* Force Hardware Acceleration */
-webkit-transform: translateZ(0);
-moz-transform: translateZ(0);
-ms-transform: translateZ(0);
-o-transform: translateZ(0);
transform: translateZ(0);
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transition: -webkit-transform 0.3s 0.6s;
-moz-transition: -moz-transform 0.3s 0.6s;
transition: transform 0.3s 0.6s;
}
.cd-nav-trigger span::before {
-webkit-transform: translateY(-6px);
-moz-transform: translateY(-6px);
-ms-transform: translateY(-6px);
-o-transform: translateY(-6px);
transform: translateY(-6px);
}
.cd-nav-trigger span::after {
-webkit-transform: translateY(6px);
-moz-transform: translateY(6px);
-ms-transform: translateY(6px);
-o-transform: translateY(6px);
transform: translateY(6px);
}
.nav-is-visible .cd-nav-trigger span {
background-color: rgba(255, 255, 255, 0);
}
.nav-is-visible .cd-nav-trigger span::before {
-webkit-transform: translateY(0) rotate(-45deg);
-moz-transform: translateY(0) rotate(-45deg);
-ms-transform: translateY(0) rotate(-45deg);
-o-transform: translateY(0) rotate(-45deg);
transform: translateY(0) rotate(-45deg);
}
.nav-is-visible .cd-nav-trigger span::after {
-webkit-transform: translateY(0) rotate(45deg);
-moz-transform: translateY(0) rotate(45deg);
-ms-transform: translateY(0) rotate(45deg);
-o-transform: translateY(0) rotate(45deg);
transform: translateY(0) rotate(45deg);
}
@media only screen and (min-width: 1025px) {
.cd-nav-trigger {
	display: none;
}
}

@media (min-width: 992px) and (max-width: 1025px) {
	.sitewide-nav.nav-is-visible {
		transform: translateX(260px);
		-moz-transition: -moz-transform 0.6s;
		transition: transform 0.6s;
	}
	.cd-main-nav { 
		transform: translateX(-260px);
		-moz-transition: -moz-transform 0.6s;
		transition: transform 0.6s;
	}
	#MainNav .main-nav-list>li.dropdown {
		width: 100%;
	}
	
}

.cd-main-nav {
position: fixed;
z-index: 1;
top: 0;
left: 0;
width: 260px;
height: 100vh;
/* overflow: auto; */
-webkit-overflow-scrolling: touch;
visibility: hidden;
background: #1e262c;
-webkit-transition: visibility 0s 0.6s;
-moz-transition: visibility 0s 0.6s;
transition: visibility 0s 0.6s;
}
/* .cd-main-nav a {
display: block;
font-size: 1.8rem;
padding: .9em 2em .9em 1em;
border-bottom: 1px solid #33414a;
color: #ffffff;
-webkit-transition: -webkit-transform 0.3s, opacity 0.6s;
-moz-transition: -moz-transform 0.3s, opacity 0.6s;
transition: transform 0.3s, opacity 0.6s;
} */
.cd-main-nav li ul {
/* position: absolute; */
/* top: 0; */
/* left: 0;
width: 100%; */
/* -webkit-transition: -webkit-transform 0.6s;
-moz-transition: -moz-transform 0.6s;
transition: transform 0.6s;
-webkit-transform: translateX(260px);
-moz-transform: translateX(260px);
-ms-transform: translateX(260px);
-o-transform: translateX(260px);
transform: translateX(260px); */
}
.cd-main-nav.nav-is-visible {
visibility: visible;
-webkit-transition: visibility 0s 0s;
-moz-transition: visibility 0s 0s;
transition: visibility 0s 0s;
}
.cd-main-nav.moves-out > li > a {
/* push the navigation items to the left - and lower down opacity - when secondary nav slides in */
-webkit-transform: translateX(-100%);
-moz-transform: translateX(-100%);
-ms-transform: translateX(-100%);
-o-transform: translateX(-100%);
transform: translateX(-100%);
opacity: 0;
}
.cd-main-nav.moves-out > li > ul {
-webkit-transform: translateX(0);
-moz-transform: translateX(0);
-ms-transform: translateX(0);
-o-transform: translateX(0);
transform: translateX(0);
}
.cd-main-nav .cd-subnav-trigger, .cd-main-nav .go-back a {
position: relative;
}
.cd-main-nav .cd-subnav-trigger::before, .cd-main-nav .cd-subnav-trigger::after, .cd-main-nav .go-back a::before, .cd-main-nav .go-back a::after {
/* arrow icon in CSS */

}
.cd-main-nav .cd-subnav-trigger::before, .cd-main-nav .go-back a::before {
-webkit-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-ms-transform: rotate(45deg);
-o-transform: rotate(45deg);
transform: rotate(45deg);
}
.cd-main-nav .cd-subnav-trigger::after, .cd-main-nav .go-back a::after {
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg);
}
.cd-main-nav .cd-subnav-trigger::before, .cd-main-nav .cd-subnav-trigger::after {
/* arrow goes on the right side - children navigation */
right: 20px;
-webkit-transform-origin: 9px 50%;
-moz-transform-origin: 9px 50%;
-ms-transform-origin: 9px 50%;
-o-transform-origin: 9px 50%;
transform-origin: 9px 50%;
}
.cd-main-nav .go-back a {
padding-left: 2em;
}
.cd-main-nav .go-back a::before, .cd-main-nav .go-back a::after {
/* arrow goes on the left side - go back button */
left: 20px;
-webkit-transform-origin: 1px 50%;
-moz-transform-origin: 1px 50%;
-ms-transform-origin: 1px 50%;
-o-transform-origin: 1px 50%;
transform-origin: 1px 50%;
}
.cd-main-nav .placeholder {
/* never visible or clickable- it is used to take up the same space as the .cd-subnav-trigger */
display: none;
}
@media only screen and (min-width: 1025px) {
.cd-main-nav {
	position: static;
	visibility: visible;
	/* width: 100%; */
	width: auto;
	height: 100%;
	/* line-height: 80px; */
	/* padding left = logo size + logo left position*/
	/* padding: 0 5% 0 calc(5% + 124px); */
	/* border: 1px solid black; */
	background: transparent;
	text-align: right;
}
		.cd-main-nav li {
			/* display: inline-block;
			height: 100%; */
			/* padding: 0 .4em; */
		}
		.cd-main-nav li a {
			/* display: inline-block;
			padding: .8em;
			line-height: 1;
			font-size: 1.6rem; */
			border-bottom: none;
			/* Prevent .cd-subnav-trigger flicker is Safari */
			-webkit-transform: translateZ(0);
			-moz-transform: translateZ(0);
			-ms-transform: translateZ(0);
			-o-transform: translateZ(0);
			transform: translateZ(0);
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
			-webkit-transition: opacity 0.2s;
			-moz-transition: opacity 0.2s;
			transition: opacity 0.2s;
		}
		/* .cd-main-nav li a:not(.cd-subnav-trigger):hover {
			opacity: .6;
		} */
		.cd-main-nav .go-back {
			display: none;
		}
		.cd-main-nav .cd-subnav-trigger {
			z-index: 1;
			border: 1px solid rgba(255, 255, 255, 0.2);
			border-radius: 5em;
			-webkit-transition: border 0.6s;
			-moz-transition: border 0.6s;
			transition: border 0.6s;
		}
		.cd-main-nav .cd-subnav-trigger:hover {
			border-color: rgba(255, 255, 255, 0.4);
		}
		.cd-main-nav .cd-subnav-trigger::before, .cd-main-nav .cd-subnav-trigger::after {
			
		}
		.cd-main-nav .cd-subnav-trigger::before {
			left: 23px;
		}
		.cd-main-nav .cd-subnav-trigger, .cd-main-nav .placeholder {
			padding-right: 2.4em;
			padding-left: 1.1em;
		}
		.cd-main-nav li ul {
			/* PURPLE HERE */
			/* height: 80px;
			background-color: #7e4d7e; */
			/* padding left = logo size + logo left position*/
			/* padding: 0 5% 0 calc(5% + 124px);
			-webkit-transform: translateY(-80px);
			-moz-transform: translateY(-80px);
			-ms-transform: translateY(-80px);
			-o-transform: translateY(-80px);
			transform: translateY(-80px);
			-webkit-transition: -webkit-transform 0.3s 0.2s;
			-moz-transition: -moz-transform 0.3s 0.2s;
			transition: transform 0.3s 0.2s; */
		}
		.cd-main-nav li ul li {
			/* opacity: 0;
			-webkit-transform: translateY(-20px);
			-moz-transform: translateY(-20px);
			-ms-transform: translateY(-20px);
			-o-transform: translateY(-20px);
			transform: translateY(-20px);
			-webkit-transition: -webkit-transform 0.3s 0s, opacity 0.3s 0s;
			-moz-transition: -moz-transform 0.3s 0s, opacity 0.3s 0s;
			transition: transform 0.3s 0s, opacity 0.3s 0s; */
		}
		.cd-main-nav .placeholder {
			/* never visible or clickable- it is used to take up the same space as the .cd-subnav-trigger */
			/* display: block;
			visibility: hidden;
			opacity: 0;
			pointer-event: none; */
		}
		.cd-main-nav.moves-out > li > a {
			-webkit-transform: translateX(0);
			-moz-transform: translateX(0);
			-ms-transform: translateX(0);
			-o-transform: translateX(0);
			transform: translateX(0);
			opacity: 1;
		}
		.cd-main-nav.moves-out > li > ul {
			-webkit-transition: -webkit-transform 0.6s;
			-moz-transition: -moz-transform 0.6s;
			transition: transform 0.6s;
			-webkit-transform: translateY(0);
			-moz-transform: translateY(0);
			-ms-transform: translateY(0);
			-o-transform: translateY(0);
			transform: translateY(0);
		}
		.cd-main-nav.moves-out > li ul li {
			opacity: 1;
			-webkit-transform: translateY(0);
			-moz-transform: translateY(0);
			-ms-transform: translateY(0);
			-o-transform: translateY(0);
			transform: translateY(0);
			-webkit-transition: -webkit-transform 0.3s 0.2s, opacity 0.3s 0.2s;
			-moz-transition: -moz-transform 0.3s 0.2s, opacity 0.3s 0.2s;
			transition: transform 0.3s 0.2s, opacity 0.3s 0.2s;
		}
		.cd-main-nav.moves-out .cd-subnav-trigger::before, .cd-main-nav.moves-out .cd-subnav-trigger::after {
			width: 14px;
			right: 17px;
		}
		.cd-main-nav.moves-out .cd-subnav-trigger::before {
			-webkit-transform: rotate(225deg);
			-moz-transform: rotate(225deg);
			-ms-transform: rotate(225deg);
			-o-transform: rotate(225deg);
			transform: rotate(225deg);
		}
		.cd-main-nav.moves-out .cd-subnav-trigger::after {
			-webkit-transform: rotate(135deg);
			-moz-transform: rotate(135deg);
			-ms-transform: rotate(135deg);
			-o-transform: rotate(135deg);
			transform: rotate(135deg);
		}
		}

		.cd-main-content::before {
		/* never visible - this is used in jQuery to check the current MQ */
		display: none;
		content: 'mobile';
		}
		@media only screen and (min-width: 1025px) {
		.cd-main-content::before {
			content: 'desktop';
		}
		}

		.cd-main-content {
		position: relative;
		z-index: 2;
		min-height: 100vh;
		padding-top: 50px;
		background-color: #f2f2f2;
		-webkit-transition: -webkit-transform 0.6s;
		-moz-transition: -moz-transform 0.6s;
		transition: transform 0.6s;
		}
		.cd-main-content.nav-is-visible {
		-webkit-transform: translateX(260px);
		-moz-transform: translateX(260px);
		-ms-transform: translateX(260px);
		-o-transform: translateX(260px);
		transform: translateX(260px);
		}
		@media only screen and (min-width: 1025px) {
		.cd-main-content {
			padding-top: 80px;
		}
		.cd-main-content.nav-is-visible {
			-webkit-transform: translateX(0);
			-moz-transform: translateX(0);
			-ms-transform: translateX(0);
			-o-transform: translateX(0);
			transform: translateX(0);
		}
		}

		.no-js .cd-nav-trigger, .no-js .cd-subnav-trigger {
		display: none;
		}

		.no-js header {
		position: relative;
		height: auto;
		}

		.no-js .cd-logo img {
		margin-bottom: 14px;
		}

		.no-js .cd-main-nav {
		position: static;
		width: 100%;
		height: auto;
		visibility: visible;
		overflow: visible;
		}
		.no-js .cd-main-nav li {
		display: inline-block;
		}
		.no-js .cd-main-nav li:last-child {
		display: block;
		}
		.no-js .cd-main-nav .go-back {
		display: none;
		}
		.no-js .cd-main-nav li ul {
		position: static;
		width: 100%;
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-ms-transform: translateX(0);
		-o-transform: translateX(0);
		transform: translateX(0);
		}
		@media only screen and (min-width: 1025px) {
		.no-js .cd-main-nav {
			height: 80px;
		}
		.no-js .cd-main-nav li ul {
			position: absolute;
			top: 80px;
		}
		.no-js .cd-main-nav li ul li {
			-webkit-transform: translateY(0);
			-moz-transform: translateY(0);
			-ms-transform: translateY(0);
			-o-transform: translateY(0);
			transform: translateY(0);
			opacity: 1;
		}
		.no-js .cd-main-nav li ul li:last-child {
			display: none;
		}
		}

		.no-js .cd-main-content {
		padding-top: 0;
		}
		@media only screen and (min-width: 1025px) {
		.no-js .cd-main-content {
			padding-top: 80px;
		}
		}
	</style>
	<!-- SLIDE-OUT STYLES -->
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
		#solutionsNav .btn-primary-cta {
			background-color: #ff9000 !important;
		}
		@media (min-width: 1200px) {
			.smartling-fr #solutionsNav li {
				padding-right: 13px !important;
			}
		}
		@media (max-width: 1200px) and (min-width: 1025px) {
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
</style>
<style type="text/css">
        .main-content{
            margin-top: 66px;
        }
        #MainNav .main-nav-list>li.dropdown{
            height: auto !important;
        }
        .sitewide-nav{
            height: 66px;
        }
        .sitewide-nav .main-nav-row{
            margin-top: 0px !important;
            /*border: 1px solid black;*/
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
            background: #FFFFFF;
            /*border: 1px solid black;*/
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
            margin: 0 15px;
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
            background: #ffffff;
            transform: translateX(77vw);
            position: absolute;
        }
        #MainNav .main-nav-list>li.dropdown, 
        li.invoicing, li.apps, li.support {
            height: 64px !important;
            display: flex !important;
            align-items: center !important
        }
        /*a.dropdown-toggle:hover {
            color: black;
        }*/
        .sitewide-nav .site-navbar a.dropdown-toggle:hover, .sitewide-nav .site-navbar a.dropdown-toggle:focus {
            color: #000000;
            cursor: none;
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
        }
	</style>
<!-- Tablet navigation (mobile too?) -->
    <style type="text/css">
        @media (max-width: 1025px){
            #menuSignupPhoneTablet{
                color: #00b0ff !important;
            }
            #signup {
                padding-left: 0px;
                margin-left: 0px;
            }
			.whiteBg {
				display: none;
			}
			.sitewide-nav .navbar-brand {
				margin-left: 50px !important;
			}
			.logo-lg {
				display: none;
			}
        } 
	</style>
	<style>
		li.dropdown-submenu, #solutionsNav ul.dropdown-menu ul.sub-menu li {
			padding-right: 0px !important;
		}
		.sitewide-nav .nav>li>a {
			padding: 0px;
		}
		#solutionsNav li.smt-trigger {
			padding-right: 0px !important;
		}
		#smt-lang-selector {
			margin: 0px;
		}
		.sitewide-nav .nav>li>a {
			letter-spacing: initial !important;
		}
		#solutionsNav {
			padding-right: 0px;
		}
		.sitewide-nav {
			transition: transform 0.6s;
		}
		.smt-lang {
			text-transform: capitalize;
		}
	</style>
	<script>
		jQuery(document).ready(function($){
			//move nav element position according to window width
			moveNavigation();
			$(window).on('resize', function(){
				(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
			});

			//mobile version - open/close navigation
			$('.cd-nav-trigger').on('click', function(event){
				event.preventDefault();
				if($('header').hasClass('nav-is-visible')) $('.moves-out').removeClass('moves-out');
				
				$('header').toggleClass('nav-is-visible');
				$('.cd-main-nav').toggleClass('nav-is-visible');
				$('.cd-main-content').toggleClass('nav-is-visible');
			});

			//mobile version - go back to main navigation
			$('.go-back').on('click', function(event){
				event.preventDefault();
				$('.cd-main-nav').removeClass('moves-out');
			});

			//open sub-navigation
			$('.cd-subnav-trigger').on('click', function(event){
				event.preventDefault();
				$('.cd-main-nav').toggleClass('moves-out');
			});

			function moveNavigation(){
				var navigation = $('.cd-main-nav-wrapper');
				var screenSize = checkWindowWidth();
				if ( screenSize ) {
					//desktop screen - insert inside header element
					navigation.detach();
					navigation.insertBefore('.cd-nav-trigger');
				} else {
					//mobile screen - insert after .cd-main-content element
					navigation.detach();
					navigation.insertAfter('.cd-main-content');

				}
			}

			function checkWindowWidth() {
				var mq = window.getComputedStyle(document.querySelector('header'), '::before').getPropertyValue('content').replace(/"/g, '').replace(/'/g, "");
				return ( mq == 'mobile' ) ? false : true;
			}
		});
	</script>
	<!-- SLIDE-OUT SCRIPT --> 
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
              $(this).addClass('open')
            }, function() {
             $(this).removeClass('open');
               
			});
			
			$('.smt-lang').text("English");

            // japannese nav
            if(window.location.host == 'ja.tradeshift.com') {
                $('.sitewide-nav #solutionsNav li').css('padding-right', '20px').children().css('font-size', '13px');
            }

            // $(window).resize(function(){
            //     if ($(window).width() <= 992){  
            //         // do something here
            //         // var $langSelector = $('#smt-lang-selector').detach()
            //         // $langSelector.appendTo('#lang-selector-container');
            //     }
            //     else if($(window).width() >= 992) {
            //         alert('>=992px')
            //     }   
            // });


        }); // document ready ends
    })(jQuery); // function ends
</script>
<header id="MainNav" class="sitewide-nav">
    <div class="navbar-header logo-sm">
        <div class="navbar-brand">
            <a href="/">
                <img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166">
            </a>
        </div>
    </div>
    <nav class="site-navbar navbar navbar-default cd-main-nav-wrapper main-nav-wrapper hide-1024-below">
        <div class="whiteBg"></div>
        <div class="container">
            <!-- Logo -->
            <!-- ######################################## -->
            <div class="row logo-main-nav">
                <div class="navbar-header logo-lg">
                    <div class="navbar-brand">
                        <a href="/">
                            <img alt="Tradeshift" src="<?php bloginfo('template_directory'); ?>/img/brand/logo-black.png" width="166">
                        </a>
                    </div> 
                </div>
                
                <div id="navMainRow" class="main-nav-row nav-global">
                    <ul id="solutionsNav" class="nav navbar-nav cd-main-nav main-nav-list">
                        <!-- About -->
                        <!-- ######################################## -->
                        <li class="nav-list dropdown">
                            <a href="#javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/about/">About</a>
                                </li>
                                <li>
                                    <a href="/jobs">Jobs</a>
                                </li>
                                <li>
                                    <a href="/press">Press</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Solutions -->
                        <!-- ######################################## -->
                        <li class="nav-list dropdown solution">
                            <a href="#javascript:void(0)" id="slide-ts-trigger" class="dropdown-toggle subnav-trigger" data-toggle="dropdown">Solutions</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/enterprise/solutions/overview/" class="dropdown-header">Overview</a>
                                </li>
                                <li class="dropdown dropdown-submenu p2p-solution">
                                    <a href="/enterprise/solutions/procure-to-pay/" class="dropdown-toggle" data-toggle="dropdown">P2P</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/enterprise/solutions/procure-to-pay/" id="p2p-solution">P2P Solution</a>
                                        </li>
                                        <li>
                                            <a href="/go/">Tradeshift
                                                <sup>&reg;</sup> Go</a>
                                        </li>
                                        <li>
                                            <a href="/enterprise/solutions/buy/" id="ts-buy">Tradeshift
                                                <sup>&reg;</sup> Buy</a>
                                        </li>
                                        <li>
                                            <a href="/enterprise/solutions/pay/" id="ts-pay">Tradeshift
                                                <sup>&reg;</sup> Pay</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="/enterprise/solutions/connect/">Tradeshift
                                        <sup>&reg;</sup> Connect</a>
                                </li> -->
                                <li>
                                    <a href="/enterprise/solutions/apps/">Apps</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Apps -->
                        <!-- ######################################## -->
                        <li class="nav-list dropdown apps">
                            <a href="https://apps.tradeshift.com/" target="_blank">Apps</a>
                        </li>
                        <!-- Resources -->
                        <!-- ######################################## -->
                        <li class="nav-list dropdown resources">
                            <a href="#javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="https://tradeshift.com/resources/">Resource center</a>
                                </li>
                                <li>
                                    <a href="https://blog.tradeshift.com/">Blog</a>
                                </li>
                                <li>
                                    <a href="https://tradeshift.com/events-and-webinars/">Events and webinars</a>
                                </li>
                                <li>
                                    <a href="/shift-your-value">Value Estimator</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Support -->
                        <!-- ######################################## -->
                        <li class="nav-list support">
                            <a href="https://support.tradeshift.com/" target="_blank">Support</a>
                        </li>
                        <!-- Free Invoicing -->
                        <!-- ######################################## -->
                        <li class="nav-list invoicing">
                            <a href="https://tradeshift.com/roles/sb/small-business-free-invoicing/">Free Invoicing</a>
                        </li>
                        <!-- Login section -->
                        <!-- ######################################## -->
                        <div class="login-nav">
                            <div id="navLoginRow" class="login-translate-row">
                                <ul class="nav sign-up-login pull-left">
                                    <li id="signup" class="signup SL_swap">
                                        <a href="#javascript:void(0)" class="signup-link main-header-nav-links" data-toggle="modal" data-target="#SignUpModal">Sign Up</a>
                                    </li>
                                    <li id="login" class="login SL_swap">
                                        <a href="//go.tradeshift.com/login" class="login-link main-header-nav-links">Log In</a>
                                    </li>
                                </ul>
                                <span id="smt-lang-selector" class="pull-right"></span>
                            </div>
                        </div>
                    </ul>
                </div> <!-- navMainRow ends -->
            </div>
        </div>
    </nav>
    <nav class="main-nav-wrapper hide-1014-above">
        <ul class="main-nav">
            <!-- About -->
            <!-- ######################################## -->
            <li class="nav-list">
                <a id="slide-ts-trigger" href="javascript:void(0)" class="subnav-trigger">About</a>
                <ul class="subnav" style="display: none;">
                    <li>
                        <a href="/about/" class="main-header-nav-links">About</a>
                    </li>
                    <li>
                        <a href="/jobs/" class="main-header-nav-links">Jobs</a>
                    </li>
                    <li>
                        <a href="/press/" class="main-header-nav-links">Press</a>
                    </li>
                </ul>
            </li>
            <!-- Solutions -->
            <!-- ######################################## -->
            <li class="nav-list expand">
                <a id="slide-ent-trigger" href="javascript:void(0)" class="subnav-trigger">Solutions</a>
                <ul class="subnav" style="display: block;">
                    <li>
                        <a href="/enterprise/solutions/overview/" class="main-header-nav-links">Overview</a>
                    </li>
                    <li class="subnav-level-2">
                        <a href="/enterprise/solutions/overview/" class="main-header-nav-links header-link">P2P</a>
                        <div class="subnav-level-3">
                            <a href="/enterprise/solutions/overview/">P2P Solution</a>
                            <a href="https://tradeshift.com/go/">Tradeshift
                                <sup>®</sup> Go</a>
                            <a href="/enterprise/solutions/buy/" id="ts-buy">Tradeshift
                                <sup>®</sup> Buy</a>
                            <a href="/enterprise/solutions/pay/" id="ts-pay">Tradeshift
                                <sup>®</sup> Pay</a>
                        </div>
                    </li>
                    <!-- <li>
                        <a href="/enterprise/solutions/connect/" class="main-header-nav-links">Tradeshift
                            <sup>®</sup> Connect</a>
                    </li> -->
                    <li>
                        <a href="/enterprise/solutions/apps/" class="main-header-nav-links">Apps</a>
                    </li>
                </ul>
            </li>
            <!-- Apps -->
            <!-- ######################################## -->
            <li class="nav-list">
                <a href="http://apps.tradeshift.com" class="no-subnav main-header-nav-links">Apps</a>
            </li>
            <!-- Resources -->
            <!-- ######################################## -->
            <li class="nav-list">
                <a id="slide-resources-trigger" href="javascript:void(0)" class="no-subnav main-header-nav-links subnav-trigger">Resources</a>
                <ul class="subnav">
                    <li>
                        <a href="https://tradeshift.com/resources/" class="main-header-nav-links">Resource center</a>
                    </li>
                    <li>
                        <a href="https://blog.tradeshift.com/" class="main-header-nav-links">Blog</a>
                    </li>
                    <li>
                        <a href="https://tradeshift.com/events-and-webinars/" class="main-header-nav-links">Events and webinars</a>
                    </li>
                    <li>
                        <a href="/shift-your-value">Value Estimator</a>
                    </li>
                </ul>
            </li>
            <!-- Invoicing -->
            <!-- ######################################## -->
            <li class="nav-list">
                <a href="/roles/sb/small-business-free-invoicing/" class="no-subnav main-header-nav-links">Free Invoicing</a>
            </li>
            <!-- Sign up -->
            <!-- ######################################## -->
            <li id="signup" class="register SL_swap">
                <a id="menuSignupPhoneTablet" href="javascript:void(0)" class="signup-link no-subnav main-header-nav-links" data-target="#SignUpModal"
                    data-direction="bottom">Sign Up</a>
            </li>
            <!-- Log in -->
            <!-- ######################################## -->
            <li id="login" class="log-in SL_swap">
                <a class="no-subnav main-header-nav-links" href="https://go.tradeshift.com/login">Log In</a>
            </li>
        </ul>
    </nav>
    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
</header>