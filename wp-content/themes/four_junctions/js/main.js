/* eslint-disable no-console */
/* eslint-disable eqeqeq */
/* eslint-disable no-undef */

( function( jQuery ) {
	window.$ = jQuery.noConflict();
	$( '.investors-content .tab-pane' ).each( function() {
		$( this ).hide();
		$( '.investors-content .tab-pane:first-child()' ).show();
	} );
	$( '.nav-tabs li>a' ).on( 'click', function( e ) {
		e.preventDefault();
		const id = $( this ).attr( 'data-href' );
		$( '.investors-content .tab-pane' ).each( function() {
			$( this ).hide();
			if ( $( this ).attr( 'id' ) == id ) {
				$( this ).show();
			}
		} );
	} );
}( jQuery ) );
