<?php
/*
 * Plugin Name: CF7 Redirect after Submit
 * Version: 0.1
 * http://wordpress.org/support/topic/plugin-contact-form-7-how-to-redirect-after-submit
 */

add_action('wpcf7_mail_sent', 'ts_wpcf7_mail_sent');
function ts_wpcf7_mail_sent($wpcf7) {
	$on_sent_ok = $wpcf7->additional_setting('ts_on_sent_ok', false);
	if (is_array($on_sent_ok) && count($on_sent_ok) > 0) {
		wp_redirect(trim($on_sent_ok[0]));
		exit;
	}
}
