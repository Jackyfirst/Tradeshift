<?php
/**
 * This component serves the common elements of the HEAD on the header-*.php files
 *
 * @package wpbc_s
 */
?>
<!-- Marketo RTP tag --> 
	<script type='text/javascript'>
	(function(c,h,a,f,i,e){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
	 c[a].a=i;c[a].e=e;var g=h.createElement("script");g.async=true;g.type="text/javascript";
	 g.src=f+'?aid='+i;var b=h.getElementsByTagName("script")[0];b.parentNode.insertBefore(g,b);
	 })(window,document,"rtp","//sjrtp3-cdn.marketo.com/rtp-api/v1/rtp.js","tradeshift1");

	rtp('send','view');
	rtp('get', 'campaign',true);
	</script>

	<!-- Meta -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1'>
	<title><?php wp_title(''); ?></title>

	<!-- Schema.org markup for LinkedIn and  Google+ -->
	<meta itemprop="name" content="Tradeshift Go">
	<meta itemprop="description" content="Say hello to Go. Your new virtual business assistant.">
	<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/img/go/social-go.jpg">

	<!-- Twitter Card data -->
	<meta name="twitter:title" content="Tradeshift Go">
	<meta name="twitter:description" content="Say hello to Go. Your new virtual business assistant.">
	<meta name="twitter:creator" content="@tradeshift">

	<!-- Open Graph data -->
	<meta property="og:title" content="Tradeshift Go">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://tradeshift.com/go">
	<meta property="og:description" content="Say hello to Go. Your new virtual business assistant.">
	<meta property="og:site_name" content="Tradeshift">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/go/social-go.jpg">

	<!-- Languages - HREFLang -->
	<link rel="alternate" hreflang="x-default" href="//tradeshift.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
	<link rel="alternate" hreflang="de" href="//de.tradeshift.com<?php echo $_SERVER['REQUEST_URI']; ?>"/>
	<link rel="alternate" hreflang="es" href="//es.tradeshift.com<?php echo $_SERVER['REQUEST_URI']; ?>"/>
	<link rel="alternate" hreflang="fr-FR" href="//fr.tradeshift.com<?php echo $_SERVER['REQUEST_URI']; ?>"/>
	<link rel="alternate" hreflang="ja-JP" href="//ja.tradeshift.com<?php echo $_SERVER['REQUEST_URI']; ?>"/>

	<!-- Icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<!-- Fonts and CSS Libraries -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,300,700,800' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/fonts/linearicons/css/linearicons.css" rel="stylesheet">

	<!-- Global JS Libraries CDN -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js?ver=2.6.2" type="text/javascript"></script>
	<!-- GeoIP MaxMind Service -->
	<script src="//js.maxmind.com/js/apis/geoip2/v2.1/geoip2.js" type="text/javascript"></script>

	<!-- IE 10 sniffer to fix viewport issues on Win8 and Win Phone 8 complementing patch on utilities.sass -->
	<script type="text/javascript">
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		  var msViewportStyle = document.createElement('style')
		  msViewportStyle.appendChild(
		    document.createTextNode(
		      '@-ms-viewport{width:auto!important}'
		    )
		  )
		  document.querySelector('head').appendChild(msViewportStyle)
		}
	</script>
