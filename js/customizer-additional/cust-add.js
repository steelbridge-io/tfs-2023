
( function( $ ) {
    wp.customize('holiday_bg_color', function( value ) {
        value.bind( function( newval ) {
            $( '.holiday_bg_color' ).css('background-color', newval );
        });
    });

    wp.customize('holiday_events_bg_color', function( value ) {
        value.bind( function( newval ) {
            $( '.holiday_events_bg_color' ).css('background-color', newval );
        });
    });

    wp.customize('holiday_link_color', function( value ) {
        value.bind( function( newval ) {
            $( '.caption a' ).css('color', newval );
        });
    });

    wp.customize('holiday_events_link_color', function( value ) {
        value.bind( function( newval ) {
            $( '.caption a' ).css('color', newval );
        });
    });

    wp.customize('holiday_text_color', function( value ) {
        value.bind( function( newval ) {
            $( '.holiday-text-color h3.widget-title a:hover, .holiday-text-color h3.widget-title, .holiday-text-color h4.widget-title, .holiday-text-color p' ).css('color', newval );
        });
    });

    wp.customize('holiday_events_text_color', function( value ) {
        value.bind( function( newval ) {
            $( '.holiday-events-text-color h3.widget-title a:hover, .holiday-events-text-color h3.widget-title, .holiday-events-text-color h4.widget-title, .holiday-events-text-color p' ).css('color', newval );
        });
    });

})(jQuery);