/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container, button, back, close, menu, menuitems, submenu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByClassName( 'menu-toggle' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	back  = container.getElementsByClassName( 'back-toggle' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	close  = container.getElementsByClassName( 'close-toggle' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menuitems  = container.getElementsByClassName( 'menu-item-has-children' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByClassName( 'nav-wrap' )[0];

	submenu = container.getElementsByClassName( 'dl-submenu' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );

	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	menuitems.onclick = function() {
		if ( -1 !== submenu.className.indexOf( 'show-sub-menu' ) ) {
			submenu.className = submenu.className.replace( ' show-sub-menu', '' );
			menuitems.setAttribute( 'aria-expanded', 'false' );
		} else {
			submenu.className += ' show-sub-menu';
			menuitems.setAttribute( 'aria-expanded', 'true' );
		}
	};

} )();