<?php
/*------------------------------------*\
	Milicious: extras + legacy + cleanup
\*------------------------------------*/

// Dynamic Copyright
function dynamic_copyright() {
  // code goes here
}

// Need comments: ???
function get_ts_available_languages() {
	$langs = array(
		"en" => "English",
		"es" => "Español",
		"da" => "Dansk",
		"de" => "Deutsch",
		"fr" => "Français",
		"nl" => "Nederlands",
		"fi" => "Suomi",
		"hu" => "Magyar",
		"pl" => "Polski",
		"pt" => "Português (Brasil)"
	);
	return $langs;
} 


// Need comments: ???
function reverseTsLink( $currentPage, $newLanguage ) {
	$currentPages = explode("/", $currentPage);
	$p_num = count($currentPages);
	if($p_num==4){
		$currentPageId=$currentPages[2];
	}else{
		$currentPageId=$currentPages[1];
	}
	return '/'.$newLanguage.'/'.$currentPageId.'/' ;
}   


// Need comments: ???
function get_client_ip() {
	$ipaddress = '';
	if ($_SERVER['HTTP_CLIENT_IP'])
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if($_SERVER['HTTP_X_FORWARDED_FOR'])
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if($_SERVER['HTTP_X_FORWARDED'])
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if($_SERVER['HTTP_FORWARDED_FOR'])
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if($_SERVER['HTTP_FORWARDED'])
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if($_SERVER['REMOTE_ADDR'])
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';
	return $ipaddress; 
}


// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

function countryCityFromIP($ipAddr)
{
  // ip2long($ipAddr)== -1 || ip2long($ipAddr) === false ? trigger_error("Invalid IP", E_USER_ERROR) : "";$ipDetail=array();

   $xml = file_get_contents("http://api.hostip.info/?ip=".$ipAddr);
   //get the city name inside the node <gml:name> and </gml:name>

   preg_match("@<Hostip>(\s)*<gml:name>(.*?)</gml:name>@si",$xml,$match);

   $ipDetail['city']=$match[2];

   preg_match("@<countryName>(.*?)</countryName>@si",$xml,$matches);

   $ipDetail['country']=$matches[1];

   preg_match("@<countryAbbrev> (.*?)</countryAbbrev>@si",$xml,$cc_match);$ipDetail['country_code']=$cc_match[1]; //assing the country code to array

   return $ipDetail;
}

