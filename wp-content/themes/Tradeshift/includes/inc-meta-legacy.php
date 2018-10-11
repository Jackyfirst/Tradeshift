<?php
// Add Meta Boxes
add_action('admin_init', 'admin_init');
function admin_init(){
	add_meta_box('event_meta', 'Event Meta', 'event_meta', 'event', 'normal', 'low');
	add_meta_box('resource_meta', 'Resource Meta', 'resource_meta', 'resource', 'normal', 'low');
	add_meta_box('press_meta', 'Press Meta', 'press_meta', 'press', 'normal', 'low');
	add_meta_box('supplier_meta', 'Supplier Meta', 'supplier_meta', 'supplier', 'normal', 'low');
}



// Custom inputs for 'Events'
function event_types(){
	$e_types=array(1=>'Webinar', 2=>'Breakfast', 3=>'Conference/Exhibition ', 4=>'Seminar', 5=>'Meetup', 6=>'Event', 7=>'Trade Show', 8=>'Workshop');
	return $e_types ;
}

function event_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$date = $custom['date'][0];
	$sub_info = $custom['sub_info'][0];
	$end_date = $custom['end_date'][0];
	$event_type = $custom['event_type'][0];
	$mkt_form = $custom['mkt_form'][0];
	$reg_header = $custom['reg_header'][0];
	$reg_form = $custom['reg_form'][0];
	$img_link = $custom['img_link'][0];

	
	echo '<p><label>Event type</label></p>';
	echo'<select name="event_type" >';
		echo '<option value="1"';
			if ( $event_type== 1 ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">Webinar</option>';
		echo '<option value="2"';
			if ( $event_type== 2 ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">Breakfast</option>';
		echo '<option value="3"';
			if ( $event_type== 3 ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">Conference / Exhibition</option>';
		echo '<option value="4"';
			if ( $event_type== 4 ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">Seminar</option>';
		echo '<option value="5"';
			if ( $event_type== 5 ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">Meetup</option>';
		echo '<option value="6"';
			if ( $event_type== 6 ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">Event</option>';
		echo '<option value="7"';
			if ( $event_type== 7 ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">Trade Show</option>';
		echo '<option value="8"';
			if ( $event_type== 8 ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">Workshop</option>';
	echo '</select>';
	echo '<p><label>Event time</label></p>';
	echo '<textarea name="sub_info" />'.$sub_info.'</textarea>';
	echo '<p><label>Date</label></p>';
	echo '<input type="date" name="date" value="'.$date.'" class="tfdate"/>';
	echo '<p><label>End Date</label></p>';
	echo '<input type="date" name="end_date" value="'.$end_date.'" class="tfdate"/>';
	echo '<p><label>Marketo form ID</label></p>';
	echo '<input type="text" name="mkt_form" value="'.$mkt_form.'"/>';
	echo '<p><label>Form header</label></p>';
	echo '<textarea name="reg_header" />'.$reg_header.'</textarea>';
	echo '<p><label>Form Sub text</label></p>';
	echo '<textarea name="reg_form" />'.$reg_form.'</textarea>';
	echo '<p><label>Image link</label></p>';
	echo '<input type="text" name="img_link" value="'.$img_link.'"/>';
}
add_action('save_post', 'save_event');

function save_event(){
	global $post;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	update_post_meta($post->ID, 'date', $_POST['date']);
	update_post_meta($post->ID, 'sub_info', $_POST['sub_info']);
	update_post_meta($post->ID, 'end_date', $_POST['end_date']);
	update_post_meta($post->ID, 'event_type', $_POST['event_type']);
	update_post_meta($post->ID, 'mkt_form', $_POST['mkt_form']);
	update_post_meta($post->ID, 'reg_header', $_POST['reg_header']);
	update_post_meta($post->ID, 'reg_form', $_POST['reg_form']);
	update_post_meta($post->ID, 'img_link', $_POST['img_link']);
}

// function events_styles() {
// 	global $post_type;
// 	wp_enqueue_style('ui-datepicker', get_bloginfo('template_url') . '/admin-extras/jquery-ui-1.8.9.custom.css');
// }

// function events_scripts() {
// 	global $post_type;
// 	wp_enqueue_script('jquery-ui', get_bloginfo('template_url') . '/admin-extras/jquery-ui-1.8.9.custom.min.js', array('jquery'));
// 	wp_enqueue_script('ui-datepicker', get_bloginfo('template_url') . '/admin-extras/jquery.ui.datepicker.min.js');
// }

// add_action( 'admin_print_styles-post.php', 'events_styles', 1000 );
// add_action( 'admin_print_styles-post-new.php', 'events_styles', 1000 );

// add_action( 'admin_print_scripts-post.php', 'events_scripts', 1000 );
// add_action( 'admin_print_scripts-post-new.php', 'events_scripts', 1000 );
// add_image_size( 'homepage-thumb', 300, 300, true );

function resource_types()
{
	$r_types=array(1=>'Webinar', 2=>'White Paper',  3=>'Video', 4=>'Report', 5=>'Case study', 6=>'Infographic');
	return $r_types ;
}

function resource_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$sub_info = $custom['sub_info'][0];
	$date = $custom['date'][0];
	$resource_t = $custom['resource_t'][0];
	$platform=$custom['platform'][0];
	$management=$custom['management'][0];
	$featured=$custom['featured'][0];
	$invoicing=$custom['invoicing'][0];
	$workflow=$custom['workflow'][0];
	$finance=$custom['finance'][0];
	$tradeshift=$custom['tradeshift'][0];
	$compliance=$custom['compliance'][0];
	$lamerica=$custom['lamerica'][0];
	$china=$custom['china'][0];
	$onboarding=$custom['onboarding'][0];
	$suppliers=$custom['suppliers'][0];
	$integration=$custom['integration'][0];
	$partnerships=$custom['partnerships'][0];
	$mkt_form = $custom['mkt_form'][0];
	$reg_header = $custom['reg_header'][0];
	$pdf_link = $custom['pdf_link'][0];
	$pdf_cta = $custom['pdf_cta'][0];
	$slides_link = $custom['slides_link'][0];
	$video_link = $custom['video_link'][0];

	echo '<p><input type="checkbox" name="featured"  id="featured" ';
	 		 if ( $featured==1) {
	 		echo ' checked ';
				}
	echo' value="1"><label for="featured"> Is this a featured resource?</label></p>';
	// echo '<p><label>Resource type</label></p>';
	// echo'<select name="resource_t" >';
	// 	echo '<option value="1"';
	// 		if ( $resource_t== 1 ) {
	// 		echo ' selected="selected" ';
	// 			}
	// 	echo ' style="width: 170px">Webinar</option>';
	// 	echo '<option value="2"';
	// 		if ( $resource_t== 2 ) {
	// 		echo ' selected="selected" ';
	// 			}
	// 	echo ' style="width: 170px">White Paper</option>';
	// 	echo '<option value="3"';
	// 		if ( $resource_t== 3 ) {
	// 		echo ' selected="selected" ';
	// 			}
	// 	echo ' style="width: 170px">Video</option>';
	// 	echo '<option value="4"';
	// 		if ( $resource_t== 4 ) {
	// 		echo ' selected="selected" ';
	// 			}
	// 	echo ' style="width: 170px">Report</option>';
	// 	 echo '<option value="5"';
	// 		if ( $resource_t== 5 ) {
	// 		echo ' selected="selected" ';
	// 			}
	// 	echo ' style="width: 170px">Case study</option>';
	// 	 echo '<option value="6"';
	// 		if ( $resource_t== 6 ) {
	// 		echo ' selected="selected" ';
	// 			}
	// 	echo ' style="width: 170px">Infographic</option>';
	// echo '</select> ';
	// echo '<p><input type="checkbox" name="invoicing" id="invoicing" ';
	// 		 if ( $invoicing==1) {
	// 		echo ' checked ';
	// 			}
	// echo 'value="1"><label for="invoicing"> Invoicing</label></p>';
	// echo '<p><input type="checkbox" name="workflow"  id="workflow" ';
	// 		if ( $workflow==1) {
	// 		echo ' checked ';
	// 			}
	// echo 'value="1"><label for="workflow">Workflow</label></p>';
	// echo '<p><input type="checkbox" name="finance"   id="finance"';
	// 		if ( $finance==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="finance">Fianacial solutions</label></p>';
	// echo '<p><input type="checkbox" name="platform"  id="platform" ';
	// 		 if ( $platform==1) {
	// 		echo ' checked ';
	// 			}
	// echo' value="1"><label for="platform"> Platform</label></p>';
	//  echo '<p><input type="checkbox" name="management"  id="management" ';
	// 		 if ( $management==1) {
	// 		echo ' checked ';
	// 			}
	// echo' value="1"><label for="management"> Enterprise management </label></p>';

	// echo '<p><input type="checkbox" name="tradeshift"   id="tradeshift"';
	// 		if ( $tradeshift==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="tradeshift">Tradeshift</label></p>';
	// echo '<p><input type="checkbox" name="compliance"   id="compliance"';
	// 		if ( $compliance==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="compliance">Global compliance</label></p>';
	// echo '<p><input type="checkbox" name="lamerica"   id="lamerica"';
	// 		if ( $lamerica==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="lamerica">Latin America</label></p>';
	// echo '<p><input type="checkbox" name="china"   id="china"';
	// 		if ( $china==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="china">China</label></p>';
	// echo '<p><input type="checkbox" name="onboarding"   id="onboarding"';
	// 		if ( $onboarding==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="onboarding">Onboarding</label></p>';
	// echo '<p><input type="checkbox" name="suppliers"   id="suppliers"';
	// 		if ( $suppliers==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="suppliers">Suppliers</label></p>';
	// echo '<p><input type="checkbox" name="integration"   id="integration"';
	// 		if ( $integration==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="integration">Integration</label></p>';
	// echo '<p><input type="checkbox" name="partnerships"   id="partnerships"';
	// 		if ( $partnerships==1) {
	// 		echo ' checked ';
	// 			}
	// echo ' value="1"><label  for="partnerships">Partnerships</label></p>';
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
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	update_post_meta($post->ID, 'sub_info', $_POST['sub_info']);
	update_post_meta($post->ID, 'invoicing', $_POST['invoicing']);
	update_post_meta($post->ID, 'workflow', $_POST['workflow']);
	update_post_meta($post->ID, 'featured', $_POST['featured']);
	update_post_meta($post->ID, 'finance', $_POST['finance']);
	update_post_meta($post->ID, 'platform', $_POST['platform']);
	update_post_meta($post->ID, 'management', $_POST['management']);
	update_post_meta($post->ID, 'tradeshift', $_POST['tradeshift']);
	update_post_meta($post->ID, 'compliance', $_POST['compliance']);
	update_post_meta($post->ID, 'lamerica', $_POST['lamerica']);
	update_post_meta($post->ID, 'china', $_POST['china']);
	update_post_meta($post->ID, 'onboarding', $_POST['onboarding']);
	update_post_meta($post->ID, 'suppliers', $_POST['suppliers']);
	update_post_meta($post->ID, 'integration', $_POST['integration']);
	update_post_meta($post->ID, 'partnerships', $_POST['partnerships']);
	update_post_meta($post->ID, 'date', $_POST['date']);
	update_post_meta($post->ID, 'resource_t', $_POST['resource_t']);
	update_post_meta($post->ID, 'mkt_form', $_POST['mkt_form']);
	update_post_meta($post->ID, 'reg_header', $_POST['reg_header']);
	update_post_meta($post->ID, 'pdf_link', $_POST['pdf_link']);
	update_post_meta($post->ID, 'pdf_cta', $_POST['pdf_cta']);
	update_post_meta($post->ID, 'slides_link', $_POST['slides_link']);
	update_post_meta($post->ID, 'video_link', $_POST['video_link']);
}


function supplier_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$invoicing_your_customer = $custom['invoicing_your_customer'][0];
	$vimeo = $custom['vimeo'][0];
	$faq_link = $custom['faq_link'][0];
	$supplier_mail = $custom['supplier_mail'][0];
	$person_mail = $custom['person_mail'][0];
	$person_position = $custom['person_position'][0];
	$implementation = $custom['implementation'][0];
	$form_s = $custom['form_s'][0];
	$form_d = $custom['form_d'][0];
	$cloudscan = $custom['cloudscan'][0];
	$create_account = $custom['create_account'][0];

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
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	update_post_meta($post->ID, 'invoicing_your_customer', $_POST['invoicing_your_customer']);
	update_post_meta($post->ID, 'vimeo', $_POST['vimeo']);
	update_post_meta($post->ID, 'faq_link', $_POST['faq_link']);
	update_post_meta($post->ID, 'supplier_mail', $_POST['supplier_mail']);
	update_post_meta($post->ID, 'person_mail', $_POST['person_mail']);
	 update_post_meta($post->ID, 'person_position', $_POST['person_position']);
	update_post_meta($post->ID, 'form_s', $_POST['form_s']);
	update_post_meta($post->ID, 'form_d', $_POST['form_d']);
	update_post_meta($post->ID, 'cloudscan', $_POST['cloudscan']);
	update_post_meta($post->ID, 'create_account', $_POST['create_account']);
	update_post_meta($post->ID, 'implementation', $_POST['implementation']);
}

function news_meta(){

	global $post;
	$custom = get_post_custom($post->ID);
	$label = $custom['label'][0];
	$top_page = $custom['top_page'][0];
	$pdf_link = $custom['pdf_link'][0];
	$pdf_cta = $custom['pdf_cta'][0];
	$details = $custom['details'][0];
	echo '<p><label>Top page text</label></p>';
	echo '<textarea name="top_page" />'.$top_page.'</textarea>';  
	echo '<p><label>Label text</label></p>';
	echo '<textarea name="label" />'.$label.'</textarea>';  
	echo '<p><label>Details</label></p>';
	echo '<textarea name="details" />'.$details.'</textarea>';  
	echo '<p><label>News link</label></p>';
	echo '<input type="text" name="pdf_link" value="'.$pdf_link.'"/>';
	echo '<p><label>CTA text</label></p>';
	echo '<input type="text" name="pdf_cta" value="'.$pdf_cta.'"/>';
}
add_action('save_post', 'save_news');

function save_news(){
	global $post;
	// verify if this is an auto save routine.
	// If it is our form has not been submitted, so we dont want to do anything
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	update_post_meta($post->ID, 'label', $_POST['label']);
	update_post_meta($post->ID, 'top_page', $_POST['top_page']);
	update_post_meta($post->ID, 'details', $_POST['details']);
	update_post_meta($post->ID, 'pdf_link', $_POST['pdf_link']);
	update_post_meta($post->ID, 'pdf_cta', $_POST['pdf_cta']);
}

function articles_types()
{
	$articles_types=array('Articles', 'Awards', 'Videos');
	return $articles_types ;
}

function press_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$articles_types=articles_types();
	$a_cat = $custom['a_cat'][0];
	$link_article = $custom['link_article'][0];

	echo '<p><label>Category</label></p>';
	echo'<select name="a_cat" >';
		for($i=0; $i< count($articles_types); $i++) {
		echo '<option value="'.$i.'"';
			if ( $a_cat==$i ) {
			echo ' selected="selected" ';
				}
		echo ' style="width: 170px">'.$articles_types[$i].'</option>';
		}
	echo '</select>';
	echo '<p><label>Link to article</label></p>';
	echo '<input type="text" name="link_article" value="'.$link_article.'" />';
}
add_action('save_post', 'save_press');
function save_press(){
	global $post;
	// verify if this is an auto save routine.
	// If it is our form has not been submitted, so we dont want to do anything
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	update_post_meta($post->ID, 'a_cat', $_POST['a_cat']);
	update_post_meta($post->ID, 'link_article', $_POST['link_article']);
}