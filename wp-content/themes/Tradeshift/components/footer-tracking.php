
<!-- Facebook -->
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1428002507484285&amp;ev=PixelInitialized" /></noscript>
<!-- End Facebook -->

<!-- Cookie Consent -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/cookieconsent/cookieconsent.min.css" />
<script src="<?php echo get_template_directory_uri(); ?>/vendor/cookieconsent/cookieconsent.min.js"></script>
<script>
var cookieQuery = (function() {
	var onSuccess = function(geoipResponse) {
	    var continentCode = geoipResponse.continent.code;
	    if (continentCode === "EU") {
	        window.addEventListener("load", function(){
			window.cookieconsent.initialise({
			  "palette": {
			    "popup": {
			      "background": "#252e39"
			    },
			    "button": {
			      "background": "#00b0ff",
			      "text" : "#ffffff"
			    },
			    "highlight": {
			      "background": "#004ee2",
			      "text" : "#ffffff"
			    }
			  },
			  "theme": "edgeless",
			  "position": "bottom-left",
			  "content": {
			    "message": "This website uses cookies to optimize your experience. By continuing, you agree with our Privacy Policy.",
			    "dismiss": "I agree. Continue.",
			    "link": "Learn more",
			    "href": "https://tradeshift.com/privacy-policy/"
			  }
			})});
	    } 
	    if($("body").hasClass("smartling-fr")) {
	    	window.addEventListener("load", function(){
			window.cookieconsent.initialise({
			  "palette": {
			    "popup": {
			      "background": "#252e39"
			    },
			    "button": {
			      "background": "#00b0ff",
			      "text" : "#ffffff"
			    },
			    "highlight": {
			      "background": "#004ee2",
			      "text" : "#ffffff"
			    }
			  },
			  "theme": "edgeless",
			  "position": "bottom-left",
			  "content": {
			    "message": "Afin d'améliorer votre expérience, nous utilisons des cookies. En poursuivant la navigation, vous acceptez les termes de notre politique de confidentialité.",
			    "dismiss": "J'accepte. Continuer.",
			    "link": "En savoir plus",
			    "href": "https://fr.tradeshift.com/privacy-policy/"
			  }
			})});
	    }
	   // console.log(continentCode);
	};
	var onError = function(){
	    // console.log('Hello Error');
	};
	return function() {
	    geoip2.country( onSuccess, onError );
	};
}());
cookieQuery();
</script>

