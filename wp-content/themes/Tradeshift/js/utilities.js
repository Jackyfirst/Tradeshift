// This file contains custom, vanilla JS used to make the Tradeshift.com marketing pages UI come alive.
// Hook this into libraries and see magic
// Hello Denica!

// Put "placeholder" on input form fields in IE9
// ----------------------------------------------------------------
jQuery(function($){
	$('input').placeholder({customClass: 'ie9-placeholder'});
});

// A hacky fix of affix.js in bootstrap changing width on scroll
// -----------------------------------------------------------------

$(function() {
    var $affixElement = $('div[data-spy="affix"]');
    $affixElement.width($affixElement.parent().width());
});

