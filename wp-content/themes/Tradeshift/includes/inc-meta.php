<?php
/*
*
* Add meta fields to custom post types
*
*/

function get_value($arr, $key = '') {
	if (!is_array($arr)) return '';
	return isset($arr[$key]) ? $arr[$key] : '';
}

add_action('admin_init', 'admin_init');
function admin_init(){
	// add_meta_box('event_meta', 'Event Meta', 'event_meta', 'event', 'normal', 'low');
	add_meta_box('eventwebinar_meta', 'Additional Event/Webinar Info', 'eventwebinar_meta', 'event-webinar', 'normal', 'low');
	add_meta_box('resource_meta', 'Additional Resource Info', 'resource_meta', 'resource', 'normal', 'low');
	add_meta_box('press_meta', 'Additional Press Information', 'press_meta', 'press', 'normal', 'low');
	add_meta_box('supplier_meta', 'Additional Supplier Info', 'supplier_meta', 'supplier', 'normal', 'low');
	add_meta_box('homepagepromo_meta', 'Additional Info', 'homepagepromo_meta', 'homepagepromo', 'normal', 'low');
	add_meta_box('partner', 'Additional Partner Info', 'partner_meta', 'partner', 'normal', 'low');
	add_meta_box('app', 'Additional App Info', 'app_meta', 'app', 'normal', 'low');
	add_meta_box('confirmation', 'Custom Confirmation Message', 'confirmation_meta', 'confirmation', 'normal', 'low');
	add_meta_box('campaigngo_meta', 'Additional Go Campaign Info', 'campaigngo_meta', 'campaigngo', 'normal', 'low');
}

// Campaign - Go Meta fields
// -------------------------------------------------

function campaigngo_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$hero_title = get_value(get_value($custom, 'hero_title'), 0);
	$hero_subtitle = get_value(get_value($custom, 'hero_subtitle'), 0);
	$mkto_email_field = get_value(get_value($custom, 'mkto_email_field'), 0);
	$download_url = get_value(get_value($custom, 'download_url'), 0);
	$download_cta = get_value(get_value($custom, 'download_cta'), 0);
	$value_proposition = get_value(get_value($custom, 'value_proposition'), 0);
	$vp_image = get_value(get_value($custom, 'vp_image'), 0);
	$vp_video = get_value(get_value($custom, 'vp_video'), 0);
	$value_proposition2 = get_value(get_value($custom, 'value_proposition2'), 0);
	$resources_title = get_value(get_value($custom, 'resources_title'), 0);
	$resources1_image = get_value(get_value($custom, 'resources1_image'), 0);
	$resources1_title = get_value(get_value($custom, 'resources1_title'), 0);
	$resources1_desc = get_value(get_value($custom, 'resources1_desc'), 0);
	$resources1_url = get_value(get_value($custom, 'resources1_url'), 0);
	$resources1_cta = get_value(get_value($custom, 'resources1_cta'), 0);
	$resources2_image = get_value(get_value($custom, 'resources2_image'), 0);
	$resources2_title = get_value(get_value($custom, 'resources2_title'), 0);
	$resources2_desc = get_value(get_value($custom, 'resources2_desc'), 0);
	$resources2_url = get_value(get_value($custom, 'resources2_url'), 0);
	$resources2_cta = get_value(get_value($custom, 'resources2_cta'), 0);
	$footercta_title = get_value(get_value($custom, 'footercta_title'), 0);
	$footercta_desc = get_value(get_value($custom, 'footercta_desc'), 0);

	echo '<p style="color: #FF5200 !important"><strong>HERO SECTION</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Hero Section Title</label><br />';
	echo '<input type="text" style="width: 80%" name="hero_title" value="'.$hero_title.'" placeholder="Go: where company spend management & travel meet magic" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Hero Section Subtitle</label><br />';
	echo '<textarea name="hero_subtitle" style="width: 80%" rows="2" placeholder="Go is a smart virtual assistant that makes business spend management & travel surprisingly simple." />' .$hero_subtitle. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Marketo ID (used with the Go - Email Template)</label><br />';
	echo '<input type="text" style="width: 20%" name="mkto_email_field" value="'.$mkto_email_field.'" placeholder="1729" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Download CTA URL (used with the Go - Download Template)</label><br />';
	echo '<input type="text" style="width: 80%" name="download_url" value="'.$download_url.'" placeholder="http://tradeshift.com/upload/report.pdf" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Download CTA Text (used with the Go - Download Template)</label><br />';
	echo '<input type="text" style="width: 40%" name="download_cta" value="'.$download_cta.'" placeholder="Download Today" /></div>';
	echo '<hr />';
	echo '<p style="color: #FF5200 !important"><strong>VALUE PROPOSITION SECTION</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Value Proposition (HTML tags ok use h2 for title and p for contents</label><br />';
	echo '<textarea name="value_proposition" style="width: 80%" rows="6" placeholder="<h2>Track who\'s spending and approving what — in seconds.</h2><p>Go helps you manage everyday company spending as it happens. With in-the-moment approvals and single-use virtual credit cards, employees can buy what they need online, when they need it. Get instant transparency into credit card purchases and make manual reconciliations a thing of the past.</p>" />' .$value_proposition. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Image URL (Dimensions: 1029px x 528px | Ideal file size: less than 150kb)</label><br />';
	echo '<input type="text" style="width: 80%" name="vp_image" value="'.$vp_image.'" placeholder="http://tradeshift.com/upload/tradeshift-go.jpg" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Vidyard Video Embed Code ID</label><br />';
	echo '<input type="text" style="width: 40%" name="vp_video" value="'.$vp_video.'" placeholder="oasduwjnEon_adn" /></div>';
	echo '<hr />';
	echo '<p style="color: #FF5200 !important"><strong>FEATURES SECTION</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Features (HTML tags ok use h2 for title, h3 for subtitles, and p for contents)</label><br />';
	echo '<textarea name="value_proposition2" style="width: 80%" rows="10" placeholder="<h2>Try it with travel. Oh, the places you\'ll Go.</h2><h3>Super simple setup & approvals</h3><p>Your smart new assistant can help you do other tasks too — starting with booking your next work trip. Book flights, hotels and taxis simply by saying where you’re headed: Go does the rest.</p>" />' .$value_proposition2. '</textarea></div>';
	echo '<hr />';
	echo '<p style="color: #FF5200 !important"><strong>RESOURCES SECTION</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Resources Section Title (HTML tags ok use h2 for title and p.lead for subtitle)</label><br />';
	echo '<textarea name="resources_title" style="width: 80%" rows="3" placeholder="<h2>Here is your webinar / resources showcase</h2><p>Learn more about Tradeshift Go.</p>" />' .$resources_title. '</textarea></div>';
	echo '<p style="color: #FF5200 !important"><strong>Resources 1 (First Column)</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 1 Image URL (Dimensions: 500px x 268px | Ideal file size: less than 100kb)</label><br />';
	echo '<input type="text" style="width: 80%" name="resources1_image" value="'.$resources1_image.'" placeholder="https://tradeshift.com/upload/tradeshift-go.jpg" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 1 Title</label><br />';
	echo '<input type="text" style="width: 40%" name="resources1_title" value="'.$resources1_title.'" placeholder="EBOOK" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 1 Description</label><br />';
	echo '<textarea name="resources1_desc" style="width: 80%" rows="2" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />' .$resources1_desc. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 1 Link URL</label><br />';
	echo '<input type="text" style="width: 80%" name="resources1_url" value="'.$resources1_url.'" placeholder="https://tradeshift.com/upload/go-ebook.pdf" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 1 Link Title</label><br />';
	echo '<input type="text" style="width: 60%" name="resources1_cta" value="'.$resources1_cta.'" placeholder="Download the eBook" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 2 Image URL (Dimensions: 500px x 268px | Ideal file size: less than 100kb)</label><br />';
	echo '<p style="color: #FF5200 !important"><strong>Resources 2 (Second Column)</strong></p>';
	echo '<input type="text" style="width: 80%" name="resources2_image" value="'.$resources2_image.'" placeholder="https://tradeshift.com/upload/tradeshift-go.jpg" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 2 Title</label><br />';
	echo '<input type="text" style="width: 40%" name="resources2_title" value="'.$resources2_title.'" placeholder="WEBINAR" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 2 Description</label><br />';
	echo '<textarea name="resources2_desc" style="width: 80%" rows="2" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />' .$resources2_desc. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 2 Link URL</label><br />';
	echo '<input type="text" style="width: 80%" name="resources2_url" value="'.$resources2_url.'" placeholder="https://tradeshift.com/resources/go-webinar" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Resource 2 Link Title</label><br />';
	echo '<input type="text" style="width: 60%" name="resources2_cta" value="'.$resources2_cta.'" placeholder="Watch the Webinar" /></div>';
	echo '<hr />';
	echo '<p style="color: #FF5200 !important"><strong>FOOTER CTA SECTION</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Footer Section Title</label><br />';
	echo '<input type="text" style="width: 80%" name="footercta_title" value="'.$footercta_title.'" placeholder="No upfront fees. Earn and share your rewards." /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Footer Section Subtitle (Use p tags to separate paragraph).</label><br />';
	echo '<textarea name="footercta_desc" style="width: 80%" rows="4" placeholder="<p>You only pay with your rewards—we charge .5% of the credit card points you earn. Earn more by consolidating your rewards in one central account.</p><p>For more information, email us at <a href=\'mailto:go@tradeshift.com\'>go@tradeshift.com</a>.</p>" />' .$footercta_desc. '</textarea></div>';
}

function save_campaigngo(){
	global $post;
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}

	update_post_meta($post->ID, 'hero_title', get_value($_POST, 'hero_title'));
	update_post_meta($post->ID, 'hero_subtitle', get_value($_POST, 'hero_subtitle'));
	update_post_meta($post->ID, 'mkto_email_field', get_value($_POST, 'mkto_email_field'));
	update_post_meta($post->ID, 'download_url', get_value($_POST, 'download_url'));
	update_post_meta($post->ID, 'download_cta', get_value(get_value($_POST, 'download_cta')));
	update_post_meta($post->ID, 'value_proposition', get_value($_POST, 'value_proposition'));
	update_post_meta($post->ID, 'vp_image', get_value($_POST, 'vp_image'));
	update_post_meta($post->ID, 'vp_video', get_value($_POST, 'vp_video'));
	update_post_meta($post->ID, 'value_proposition2', get_value($_POST, 'value_proposition2'));
	update_post_meta($post->ID, 'resources_title', get_value($_POST, 'resources_title'));
	update_post_meta($post->ID, 'resources1_image', get_value($_POST, 'resources1_image'));
	update_post_meta($post->ID, 'resources1_title', get_value($_POST, 'resources1_title'));
	update_post_meta($post->ID, 'resources1_desc', get_value($_POST, 'resources1_desc'));
	update_post_meta($post->ID, 'resources1_url', get_value($_POST, 'resources1_url'));
	update_post_meta($post->ID, 'resources1_cta', get_value($_POST, 'resources1_cta'));
	update_post_meta($post->ID, 'resources2_image', get_value($_POST, 'resources2_image'));
	update_post_meta($post->ID, 'resources2_title', get_value($_POST, 'resources2_title'));
	update_post_meta($post->ID, 'resources2_desc', get_value($_POST, 'resources2_desc'));
	update_post_meta($post->ID, 'resources2_url', get_value($_POST, 'resources2_url'));
	update_post_meta($post->ID, 'resources2_cta', get_value($_POST, 'resources2_cta'));
	update_post_meta($post->ID, 'footercta_title', get_value($_POST, 'footercta_title'));
	update_post_meta($post->ID, 'footercta_desc', get_value($_POST, 'footercta_desc'));
}
add_action('save_post', 'save_campaigngo');

// Confirmation Meta fields
// -------------------------------------------------

function confirmation_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$intro_text=get_value(get_value($custom, 'intro_text'), 0);
	$download_link=get_value(get_value($custom, 'download_link'), 0);
	$resource_tag=get_value(get_value($custom, 'resource_tag'), 0);

	echo '<p><label><strong>Introductory Text</strong></label></p>';
	echo '<textarea name="intro_text" cols="70" rows="2" placeholder="Here is your [Document Title] report." />'.$intro_text.'</textarea>';
	echo '<p><label><strong>Download Link</strong></label></p>';
	echo '<input type="text" style="width: 520px" name="download_link" value="'.$download_link.'" placeholder="http://download.tradeshift.com/report.pdf" />';
	echo '<p><label><strong>Related Resources Tag</strong><br /><em>(Separate each tag with comma)</em></label></p>';
	echo '<input type="text" style="width: 360px" name="resource_tag" value="'.$resource_tag.'" placeholder="top-resource, negotiating" />';
}

function save_confirmation_meta(){
	global $post;
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}

	update_post_meta($post->ID, 'intro_text', get_value($_POST, 'intro_text'));
	update_post_meta($post->ID, 'download_link', get_value($_POST, 'download_link'));
	update_post_meta($post->ID, 'resource_tag', get_value($_POST, 'resource_tag'));
}

add_action('save_post', 'save_confirmation_meta');

// Event/Webinar Meta fields
// -------------------------------------------------

function eventwebinar_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$event_active=get_value(get_value($custom, 'event_active'), 0);
	$featured=get_value(get_value($custom, 'featured'), 0);
	$featured_leading = get_value(get_value($custom, 'featured_leading'), 0);
	$event_hero_image = get_value(get_value($custom, 'event_hero_image'), 0);
	$event_date = get_value(get_value($custom, 'event_date'), 0);
	$event_date_number = get_value(get_value($custom, 'event_date_number'), 0);
	$event_time = get_value(get_value($custom, 'event_time'), 0);
	$event_venue = get_value(get_value($custom, 'event_venue'), 0);
	$mkt_form = get_value(get_value($custom, 'mkt_form'), 0);
	$form_header = get_value(get_value($custom, 'form_header'), 0);
	$reg_link = get_value(get_value($custom, 'reg_link'), 0);
	$reg_cta = get_value(get_value($custom, 'reg_cta'), 0);
	$reg_embed = get_value(get_value($custom, 'reg_embed'), 0);

	echo '<p><input type="checkbox" name="event_active"  id="event_active" ';
	 		 if ( $event_active==1) {
	 		echo ' checked ';
				}
	echo ' value="1"><label for="event_active"> Is this an active event?</label></p>';
	echo '<p><input type="checkbox" name="featured"  id="featured" ';
 		 if ( $featured==1) {
 		echo ' checked ';
			}
	echo ' value="1"><label for="featured"> Is this a featured event?</label></p>';
	echo '<p><label>Featured Event Lead Paragraph (app. 10-15 words limit)</label></p>';
	echo '<textarea name="featured_leading" cols="50" rows="5" placeholder="This content shows up below the title line in the Featured Event section, Leave blank if event is not featured." />'.$featured_leading.'</textarea>';
	echo '<p><label>Hero image for Events (not Webinars)</label></p>';
	echo '<input type="text" style="width: 240px" name="event_hero_image" value="'.$event_hero_image.'" placeholder="http://imageURL.jpg" />';
	echo '<p><label>Event Date (Free form: ie. 02 March 2016)</label></p>';
	echo '<input type="text" style="width: 240px" name="event_date" value="'.$event_date.'" placeholder="e.g. Aug. 23 - 26, 2015" />';
	echo '<p><label>Event Date in Numeric Form (Required to keep our events in order)</label></p>';
	echo '<input type="text" style="width: 290px" name="event_date_number" value="'.$event_date_number.'" placeholder="e.g. 9072015 for Sep 7, 2015" />';
	echo '<p><label>Marketo Form ID</label></p>';
	echo '<input type="text" style="width: 100px" name="mkt_form" value="'.$mkt_form.'" placeholder="e.g. 571" />';
	echo '<p><label>Event Venue</label></p>';
	echo '<input type="text" style="width: 240px" name="event_venue" value="'.$event_venue.'" placeholder="e.g. SF Moscone Center"/>';
	echo '<p><label>Event Time (Free form text)</label></p>';
	echo '<input type="text" name="event_time" value="'.$event_time.'" placeholder="e.g. 1:00 PM PST"/>';
	echo '<p><label>Marketo Form Heading</label></p>';
	echo '<input type="text" style="width: 240px" name="form_header" value="'.$form_header.'" placeholder="e.g. Register Today" />';
	echo '<p><label>Registration URL (if applicable)</label></p>';
	echo '<input type="text" style="width: 240px"  name="reg_link" value="'.$reg_link.'" placeholder="e.g. http://eventbrite.com" />';
	echo '<p><label>Registration Link CTA</label></p>';
	echo '<input type="text" style="width: 240px"  name="reg_cta" value="'.$reg_cta.'" placeholder="e.g. Buy tickets" />';
	echo '<p><label>Registration Embed Code (if applicable)</label></p>';
	echo '<textarea cols="50" rows="5"  name="reg_embed" placeholder="e.g. Eventbrite Ticket Widget Code">'.$reg_embed.'</textarea>';
}

function save_eventwebinar(){
	global $post;
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}
	update_post_meta($post->ID, 'event_active', get_value($_POST, 'event_active'));
	update_post_meta($post->ID, 'featured', get_value($_POST, 'featured'));
	update_post_meta($post->ID, 'featured_leading', get_value($_POST, 'featured_leading'));
	update_post_meta($post->ID, 'event_hero_image', get_value($_POST, 'event_hero_image'));
	update_post_meta($post->ID, 'event_date', get_value($_POST, 'event_date'));
	update_post_meta($post->ID, 'event_date_number', get_value($_POST, 'event_date_number'));
	update_post_meta($post->ID, 'event_time', get_value($_POST, 'event_time'));
	update_post_meta($post->ID, 'event_venue', get_value($_POST, 'event_venue'));
	update_post_meta($post->ID, 'mkt_form', get_value($_POST, 'mkt_form'));
	update_post_meta($post->ID, 'form_header', get_value($_POST, 'form_header'));
	update_post_meta($post->ID, 'reg_link', get_value($_POST, 'reg_link'));
	update_post_meta($post->ID, 'reg_cta', get_value($_POST, 'reg_cta'));
	update_post_meta($post->ID, 'reg_embed', get_value($_POST, 'reg_embed'));
}

add_action('save_post', 'save_eventwebinar');

// Home Page Banner Meta fields
// -------------------------------------------------

function homepagepromo_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$event_date = get_value(get_value($custom, 'event_date'), 0);
	$reg_link = get_value(get_value($custom, 'reg_link'), 0);
	$reg_cta = get_value(get_value($custom, 'reg_cta'), 0);

	echo '<p><label>Event Date(s)</label></p>';
	echo '<input type="text" style="width: 240px" name="event_date" value="'.$event_date.'" placeholder="e.g. Aug. 23 - 26, 2015" />';
	echo '<p><label>Registration URL (if applicable)</label></p>';
	echo '<input type="text" style="width: 240px"  name="reg_link" value="'.$reg_link.'" placeholder="e.g. http://eventbrite.com" />';
	echo '<p><label>Registration Link CTA</label></p>';
	echo '<input type="text" style="width: 240px"  name="reg_cta" value="'.$reg_cta.'" placeholder="e.g. Register today" />';

}

function save_homepagepromo(){
	global $post;
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}
	update_post_meta($post->ID, 'event_date', get_value($_POST, 'event_date'));
	update_post_meta($post->ID, 'reg_link', get_value($_POST, 'reg_link'));
	update_post_meta($post->ID, 'reg_cta', get_value($_POST, 'reg_cta'));
}

add_action('save_post', 'save_homepagepromo');


// Resource Meta fields
// -------------------------------------------------

function resource_types()
{
	$r_types=array(1=>'Webinar', 2=>'White Paper',  3=>'Video', 4=>'Report', 5=>'Case study', 6=>'Infographic');
	return $r_types ;
}

function resource_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$featured=get_value(get_value($custom, 'featured'), 0);
	$davos_event=get_value(get_value($custom, 'davos_event'), 0);
	$sub_info = get_value(get_value($custom, 'sub_info'), 0);
	$date = get_value(get_value($custom, 'date'), 0);
	$resource_t = get_value(get_value($custom, 'resource_t'), 0);
	$platform=get_value(get_value($custom, 'platform'), 0);
	$management=get_value(get_value($custom, 'management'), 0);
	$invoicing=get_value(get_value($custom, 'invoicing'), 0);
	$workflow=get_value(get_value($custom, 'workflow'), 0);
	$finance=get_value(get_value($custom, 'finance'), 0);
	$tradeshift=get_value(get_value($custom, 'tradeshift'), 0);
	$compliance=get_value(get_value($custom, 'compliance'), 0);
	$lamerica=get_value(get_value($custom, 'lamerica'), 0);
	$china=get_value(get_value($custom, 'china'), 0);
	$onboarding=get_value(get_value($custom, 'onboarding'), 0);
	$suppliers=get_value(get_value($custom, 'suppliers'), 0);
	$integration=get_value(get_value($custom, 'integration'), 0);
	$partnerships=get_value(get_value($custom, 'partnerships'), 0);
	$mkt_form = get_value(get_value($custom, 'mkt_form'), 0);
	$reg_header = get_value(get_value($custom, 'reg_header'), 0);
	$pdf_link = get_value(get_value($custom, 'pdf_link'), 0);
	$pdf_cta = get_value(get_value($custom, 'pdf_cta'), 0);
	$slides_link = get_value(get_value($custom, 'slides_link'), 0);
	$video_link = get_value(get_value($custom, 'video_link'), 0);

	echo '<p><input type="checkbox" name="featured"  id="featured" ';
	 		 if ( $featured==1) {
	 		echo ' checked ';
				}
	echo ' value="1"><label for="featured"> Is this a featured resource?</label></p>';
	echo '<p><input type="checkbox" name="davos_event"  id="davos_event" ';
	 		 if ( $davos_event==1) {
	 		echo ' checked ';
				}
	echo ' value="1"><label for="davos_event"> Is this a Davos Event?</label></p>';
	echo '<p><label>Featured Resource Lead Paragraph (app. 10-15 words limit)</label></p>';
	echo '<textarea name="sub_info" cols="30" rows="5" />'.$sub_info.'</textarea>';
	echo '<p><label>Date of Resource</label></p>';
	echo '<input type="date" name="date" value="'.$date.'" class="tfdate"/>';
	echo '<p><label>Marketo Form ID</label></p>';
	echo '<input type="text" name="mkt_form" value="'.$mkt_form.'"/>';
	echo '<p><label>Form header</label></p>';
	echo '<textarea name="reg_header" />'.$reg_header.'</textarea>';
	echo '<p><label>PDF link</label></p>';
	echo '<input type="text" name="pdf_link" value="'.$pdf_link.'"/>';
	echo '<p><label>CTA text</label></p>';
	echo '<input type="text" name="pdf_cta" value="'.$pdf_cta.'"/>';
	echo '<p><label>Slides embed code</label></p>';
	echo '<input type="text" name="slides_link" value="'.$slides_link.'"/>';
	echo '<p><label>Video embed code</label></p>';
	echo '<input type="text" name="video_link" value="'.$video_link.'"/>';
}
add_action('save_post', 'save_request');

function save_request(){
	global $post;
	// verify if this is an auto save routine.
	// If it is our form has not been submitted, so we dont want to do anything
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}
	update_post_meta($post->ID, 'featured', get_value($_POST, 'featured'));
	update_post_meta($post->ID, 'davos_event', get_value($_POST, 'davos_event'));
	update_post_meta($post->ID, 'sub_info', get_value($_POST, 'sub_info'));
	update_post_meta($post->ID, 'invoicing', get_value($_POST, 'invoicing'));
	update_post_meta($post->ID, 'workflow', get_value($_POST, 'workflow'));
	update_post_meta($post->ID, 'finance', get_value($_POST, 'finance'));
	update_post_meta($post->ID, 'platform', get_value($_POST, 'platform'));
	update_post_meta($post->ID, 'management', get_value($_POST, 'management'));
	update_post_meta($post->ID, 'tradeshift', get_value($_POST, 'tradeshift'));
	update_post_meta($post->ID, 'compliance', get_value($_POST, 'compliance'));
	update_post_meta($post->ID, 'lamerica', get_value($_POST, 'lamerica'));
	update_post_meta($post->ID, 'china', get_value($_POST, 'china'));
	update_post_meta($post->ID, 'onboarding', get_value($_POST, 'onboarding'));
	update_post_meta($post->ID, 'suppliers', get_value($_POST, 'suppliers'));
	update_post_meta($post->ID, 'integration', get_value($_POST, 'integration'));
	update_post_meta($post->ID, 'partnerships', get_value($_POST, 'partnerships'));
	update_post_meta($post->ID, 'date', get_value($_POST, 'date'));
	update_post_meta($post->ID, 'resource_t', get_value($_POST, 'resource_t'));
	update_post_meta($post->ID, 'mkt_form', get_value($_POST, 'mkt_form'));
	update_post_meta($post->ID, 'reg_header', get_value($_POST, 'reg_header'));
	update_post_meta($post->ID, 'pdf_link', get_value($_POST, 'pdf_link'));
	update_post_meta($post->ID, 'pdf_cta', get_value($_POST, 'pdf_cta'));
	update_post_meta($post->ID, 'slides_link', get_value($_POST, 'slides_link'));
	update_post_meta($post->ID, 'video_link', get_value($_POST, 'video_link'));
}


function supplier_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$invoicing_your_customer = get_value(get_value($custom, 'invoicing_your_customer'), 0);
	$vimeo = get_value(get_value($custom, 'vimeo'), 0);
	$faq_link = get_value(get_value($custom, 'faq_link'), 0);
	$supplier_mail = get_value(get_value($custom, 'supplier_mail'), 0);
	$person_mail = get_value(get_value($custom, 'person_mail'), 0);
	$person_position = get_value(get_value($custom, 'person_position'), 0);
	$implementation = get_value(get_value($custom, 'implementation'), 0);
	$form_s = get_value(get_value($custom, 'form_s'), 0);
	$form_d = get_value(get_value($custom, 'form_d'), 0);
	$cloudscan = get_value(get_value($custom, 'cloudscan'), 0);
	$create_account = get_value(get_value($custom, 'create_account'), 0);

	echo '<p><label>Invoicing your customer</label></p>';
	echo '<textarea name="invoicing_your_customer" />'.$invoicing_your_customer.'</textarea>';
	echo '<p><label>Vimeo Video</label></p>';
	echo '<input type="text" name="vimeo" value="'.$vimeo.'"/>';
	echo '<p><label>FAQ link</label></p>';
	echo '<input type="text" name="faq_link" value="'.$faq_link.'"/>';
	echo '<p><input type="checkbox" name="create_account"  id="create_account" ';
			 if ( $create_account==1) {
			echo ' checked ';
				}
	echo' value="1"><label for="create_account"> Create an account </label></p>';
	echo '<p><label>Supplier e-mail</label></p>';
	echo '<input type="text" name="supplier_mail" value="'.$supplier_mail.'"/>';
	echo '<p><label>Branches list</label></p>';
	echo '<textarea name="person_mail" />'.$person_mail.'</textarea>';
	echo '<p><label>Branches mails</label></p>';
	echo '<textarea name="person_position" />'.$person_position.'</textarea>';
	echo '<p><label>Implementation guide</label></p>';
	echo '<textarea name="implementation" />'.$implementation.'</textarea>';
	echo '<p><label>Form 1</label></p>';
	echo '<textarea name="form_s" />'.$form_s.'</textarea>';
	echo '<p><label>Form 2</label></p>';
	echo '<textarea name="form_d" />'.$form_d.'</textarea>';
	echo '<p><input type="checkbox" name="cloudscan"   id="cloudscan"';
			if ( $cloudscan==1) {
			echo ' checked ';
				}
	echo ' value="1"><label  for="cloudscan">Cloudscan</label></p>';

}
add_action('save_post', 'save_supplier');

function save_supplier(){
	global $post;
	// verify if this is an auto save routine.
	// If it is our form has not been submitted, so we dont want to do anything
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}

	update_post_meta($post->ID, 'invoicing_your_customer', get_value($_POST, 'invoicing_your_customer'));
	update_post_meta($post->ID, 'vimeo', get_value($_POST, 'vimeo'));
	update_post_meta($post->ID, 'faq_link', get_value($_POST, 'faq_link'));
	update_post_meta($post->ID, 'supplier_mail', get_value($_POST, 'supplier_mail'));
	update_post_meta($post->ID, 'person_mail', get_value($_POST, 'person_mail'));
	update_post_meta($post->ID, 'person_position', get_value($_POST, 'person_position'));
	update_post_meta($post->ID, 'form_s', get_value($_POST, 'form_s'));
	update_post_meta($post->ID, 'form_d', get_value($_POST, 'form_d'));
	update_post_meta($post->ID, 'cloudscan', get_value($_POST, 'cloudscan'));
	update_post_meta($post->ID, 'create_account', get_value($_POST, 'create_account'));
	update_post_meta($post->ID, 'implementation', get_value($_POST, 'implementation'));
}

function press_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$pr_date = get_value(get_value($custom, 'pr_date'), 0);
	$pr_time = get_value(get_value($custom, 'pr_time'), 0);
	$press_title = get_value(get_value($custom, 'press_title'), 0);
	$pr_teaser = get_value(get_value($custom, 'pr_teaser'), 0);
	$link_article = get_value(get_value($custom, 'link_article'), 0);
	$awarded_mentioned_by = get_value(get_value($custom, 'awarded_mentioned_by'), 0);

	echo '<div style="margin-bottom: 11px;"><label>Date (Press Release)</label><br />';
	echo '<input type="text" style="width: 200px" name="pr_date" placeholder="October 7, 1981" value="'.$pr_date.'" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Time (Press Release)</label><br />';
	echo '<input type="text" style="width: 300px" name="pr_time" value="09:00 AM Eastern Daylight Time" value="'.$pr_time.'" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Title (Press Release, Awards, Mentions)</label><br />';
	echo '<textarea cols="70" rows="2" name="press_title" placeholder="Tradeshift debuts in NASDAQ. Trading ends 80% above opening price." />' .$press_title. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Teaser (Press Release)</label><br />';
	echo '<textarea name="pr_teaser" cols="70" rows="5" placeholder="Please write an introductory text to appear on the Press page below the title.  Usualy two sentence long." />' .$pr_teaser. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Link to the Article (Press Award/Mention)</label><br />';
	echo '<input type="text" style="width: 70%" name="link_article" placeholder="http://techcrunch.com/tradeshift_rocks" value="'.$link_article.'" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Awarded by (For Mentions, use featured image to upload logo)</label><br />';
	echo '<input type="text" style="width: 70%" name="awarded_mentioned_by" placeholder="Sustaina100 2015" value="'.$awarded_mentioned_by.'" /></div>';

}

function save_press(){
	global $post;
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}
	update_post_meta($post->ID, 'pr_date', get_value($_POST, 'pr_date'));
	update_post_meta($post->ID, 'pr_time', get_value($_POST, 'pr_time'));
	update_post_meta($post->ID, 'press_title', get_value($_POST, 'press_title'));
	update_post_meta($post->ID, 'pr_teaser', get_value($_POST, 'pr_teaser'));
	update_post_meta($post->ID, 'link_article', get_value($_POST, 'link_article'));
	update_post_meta($post->ID, 'awarded_mentioned_by', get_value($_POST, 'awarded_mentioned_by'));
}

add_action('save_post', 'save_press');


// Partner Meta fields
// -------------------------------------------------

function partner_meta(){
	global $post;
	if ( !is_object($post) ) {
		return;
	}
	$custom = get_post_custom($post->ID);
	$hero_title = get_value(get_value($custom, 'hero_title'), 0);
	$lead_tagline = get_value(get_value($custom, 'lead_tagline'), 0);
	$partner_hero_bg_image = get_value(get_value($custom, 'partner_hero_bg_image'), 0);
	$partner_logo_image = get_value(get_value($custom, 'partner_logo_image'), 0);
	$mkt_form_id = get_value(get_value($custom, 'mkt_form_id'), 0);
	$btn_cta = get_value(get_value($custom, 'btn_cta'), 0);
	$partner_apps_title = get_value(get_value($custom, 'partner_apps_title'), 0);
	$partner_apps_lead = get_value(get_value($custom, 'partner_apps_lead'), 0);
	$partner_apps_content = get_value(get_value($custom, 'partner_apps_content'), 0);
	$partner_apps_imagery = get_value(get_value($custom, 'partner_apps_imagery'), 0);
	$about_partner_title = get_value(get_value($custom, 'about_partner_title'), 0);
	$about_partner_content = get_value(get_value($custom, 'about_partner_content'), 0);
	$about_partner_imagery = get_value(get_value($custom, 'about_partner_imagery'), 0);

	echo '<p style="color: #FF5200 !important"><strong>HERO SECTION</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Hero Title</label><br />';
	echo '<input type="text" style="width: 80%" name="hero_title" value="'.$hero_title.'" placeholder="Supply Chain Collaboration by Partner" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Lead paragraph below title</label><br />';
	echo '<textarea name="lead_tagline" cols="70" rows="4" placeholder="This content shows up below the title line." />' .$lead_tagline. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Hero image for smartphone view (dimension: 800px by 515px)</label><br />';
	echo '<input type="text" style="width: 80%" name="partner_hero_bg_image" value="'.$partner_hero_bg_image.'" placeholder="http://tradeshift.com/upload/hero-bg-800.jpg" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Powered by partner logo (dimension: 230px by 80px | transparent)</label><br />';
	echo '<input type="text" style="width: 80%" name="partner_logo_image" value="'.$partner_logo_image.'" placeholder="http://tradeshift.com/upload/partner-logo.png" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Marketo Form ID</label><br />';
	echo '<input type="text" style="width: 100px" name="mkt_form_id" value="'.$mkt_form_id.'" placeholder="571" /></div>';
	echo '<div style="margin-bottom: 22px;"><label>Button CTA Text</label><br />';
	echo '<input type="text" style="width: 200px" name="btn_cta" value="'.$btn_cta.'" placeholder="Book a demo" /></div>';
	echo '<hr />';

	echo '<p style="color: #FF5200 !important"><strong>PARTNER APPS FEATURES</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Partner Features Title</label><br />';
	echo '<input type="text" style="width: 80%" name="partner_apps_title" value="'.$partner_apps_title.'" placeholder="Partner apps include:" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Lead paragraph below title</label><br />';
	echo '<textarea name="partner_apps_lead" cols="70" rows="4" placeholder="This content shows up below the title line." />' .$partner_apps_lead. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Section content (HTML Tags: h4 for subtitle, p for copy below)</label><br />';
	echo '<textarea name="partner_apps_content" cols="70" rows="10" placeholder="This content will appear next to the laptop app screenshot in desktop view." />' .$partner_apps_content. '</textarea></div>';
	echo '<div style="margin-bottom: 22px;"><label>Partner app laptop screenshot</label><br />';
	echo '<input type="text" style="width: 80%" name="partner_apps_imagery" value="'.$partner_apps_imagery.'" placeholder="http://tradeshift.com/upload/app-laptop-screenshot.jpg" /></div>';
	echo '<hr />';
	echo '<p style="color: #FF5200 !important"><strong>ABOUT PARTNER</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>About Partner Title</label><br />';
	echo '<input type="text" style="width: 80%" name="about_partner_title" value="'.$about_partner_title.'" placeholder="Partner: Supply Chain Experts" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Section content (HTML Tags: Enclose copy with p html tag)</label><br />';
	echo '<textarea name="about_partner_content" cols="70" rows="10" placeholder="This content will appear next to the smartphone app screenshot in desktop view." />' .$about_partner_content. '</textarea></div>';
	echo '<div style="margin-bottom: 22px;"><label>Partner app smartphone screenshot</label><br />';
	echo '<input type="text" style="width: 80%" name="about_partner_imagery" value="'.$about_partner_imagery.'" placeholder="http://tradeshift.com/upload/app-smartphone-screenshot.jpg" /></div>';

}

function save_partner(){
	global $post;
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}
	update_post_meta($post->ID, 'hero_title', get_value($_POST, 'hero_title'));
	update_post_meta($post->ID, 'lead_tagline', get_value($_POST, 'lead_tagline'));
	update_post_meta($post->ID, 'partner_hero_bg_image', get_value($_POST, 'partner_hero_bg_image'));
	update_post_meta($post->ID, 'partner_logo_image', get_value($_POST, 'partner_logo_image'));
	update_post_meta($post->ID, 'mkt_form_id', get_value($_POST, 'mkt_form_id'));
	update_post_meta($post->ID, 'btn_cta', get_value($_POST, 'btn_cta'));
	update_post_meta($post->ID, 'partner_apps_title', get_value($_POST, 'partner_apps_title'));
	update_post_meta($post->ID, 'partner_apps_lead', get_value($_POST, 'partner_apps_lead'));
	update_post_meta($post->ID, 'partner_apps_content', get_value($_POST, 'partner_apps_content'));
	update_post_meta($post->ID, 'partner_apps_imagery', get_value($_POST, 'partner_apps_imagery'));
	update_post_meta($post->ID, 'about_partner_title', get_value($_POST, 'about_partner_title'));
	update_post_meta($post->ID, 'about_partner_content', get_value($_POST, 'about_partner_content'));
	update_post_meta($post->ID, 'about_partner_imagery', get_value($_POST, 'about_partner_imagery'));
}

add_action('save_post', 'save_partner');

// App Meta fields
// -------------------------------------------------

function app_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$hero_title = get_value(get_value($custom, 'hero_title'), 0);
	$lead_tagline = get_value(get_value($custom, 'lead_tagline'), 0);
	$app_hero_bg_image = get_value(get_value($custom, 'app_hero_bg_image'), 0);
	$app_logo_image = get_value(get_value($custom, 'app_logo_image'), 0);
	$btn_cta = get_value(get_value($custom, 'btn_cta'), 0);
	$btn_cta_topurl = get_value(get_value($custom, 'btn_cta_topurl'), 0);
	$btn_cta_bottomurl = get_value(get_value($custom, 'btn_cta_bottomurl'), 0);

	echo '<p style="color: #FF5200 !important"><strong>HERO SECTION</strong></p>';
	echo '<div style="margin-bottom: 11px;"><label>Hero Title</label><br />';
	echo '<input type="text" style="width: 80%" name="hero_title" value="'.$hero_title.'" placeholder="A Tradeshift App That Delights" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>Lead paragraph below title</label><br />';
	echo '<textarea name="lead_tagline" cols="70" rows="4" placeholder="This content shows up below the title line." />' .$lead_tagline. '</textarea></div>';
	echo '<div style="margin-bottom: 11px;"><label>Hero image for smartphone view (dimension: 800px by 539px)</label><br />';
	echo '<input type="text" style="width: 80%" name="app_hero_bg_image" value="'.$app_hero_bg_image.'" placeholder="http://tradeshift.com/upload/app-hero-bg-800.jpg" /></div>';
	echo '<div style="margin-bottom: 11px;"><label>App Logo (dimension: width 162px | transparent)</label><br />';
	echo '<input type="text" style="width: 80%" name="app_logo_image" value="'.$app_logo_image.'" placeholder="http://tradeshift.com/upload/app-logo.png" /></div>';
	echo '<div style="margin-bottom: 22px;"><label>Button Universal CTA Text</label><br />';
	echo '<input type="text" style="width: 200px" name="btn_cta" value="'.$btn_cta.'" placeholder="Activate App Now" /></div>';
	echo '<div style="margin-bottom: 22px;"><label>Top (Hero) Button CTA URL</label><br />';
	echo '<input type="text" style="width: 80%" name="btn_cta_topurl" value="'.$btn_cta_topurl.'" placeholder="https://go.tradeshift.com/#/apps/" /></div>';
	echo '<div style="margin-bottom: 22px;"><label>Bottom CTA Text</label><br />';
	echo '<input type="text" style="width: 80%" name="btn_cta_bottomurl" value="'.$btn_cta_bottomurl.'" placeholder="https://go.tradeshift.com/#/apps/" /></div>';
}

function save_app(){
	global $post;
	if ( !is_object($post) || (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) {
		return;
	}
	update_post_meta($post->ID, 'hero_title', get_value($_POST, 'hero_title'));
	update_post_meta($post->ID, 'lead_tagline', get_value($_POST, 'lead_tagline'));
	update_post_meta($post->ID, 'app_hero_bg_image', get_value($_POST, 'app_hero_bg_image'));
	update_post_meta($post->ID, 'app_logo_image', get_value($_POST, 'app_logo_image'));
	update_post_meta($post->ID, 'btn_cta', get_value($_POST, 'btn_cta'));
	update_post_meta($post->ID, 'btn_cta_topurl', get_value($_POST, 'btn_cta_topurl'));
	update_post_meta($post->ID, 'btn_cta_bottomurl', get_value($_POST, 'btn_cta_bottomurl'));
}

add_action('save_post', 'save_app');
