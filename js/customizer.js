/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

		// Events Template Hero Image
	wp.customize( 'events-page-hero-image', function(value) {
		value.bind(function(to){
			var eventsheroimg = $('#banner.events-background');
			eventsheroimg.css('background-image', 'url(' + to + ')');
		});
	});

    // Front Page Hero Image
   wp.customize( 'front-page-hero-image', function(value) {
		value.bind(function(to){
      var pagewrapper = $('body.landing #page-wrapper-front-page');
        pagewrapper.css('background-image', 'url( ' + to + ')');
		});
	});

	// Site title and description.
	wp.customize('blogname', function(value){
		value.bind(function(to){
			$('.site-title a').text(to);
		});
	});

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Telephone Number
	wp.customize( 'telephone_number', function( value ) {
		value.bind( function( to ) {
			$( '.inner h3' ).text( to );
		} );
	} );

	//Update row color on staff template
	wp.customize( 'tel_color', function( value ) {
		value.bind( function( newval ) {
			$('.inner h3').css('color', newval );
		} );
	} );

	wp.customize( 'frontp_title_color', function( value ) {
		value.bind( function( newval ) {
			$('.wrapper-home.style5').css('background-color', newval );
		} );
	} );

	// Front Page Grid Link
	wp.customize( 'frontp_grid_link', function( value ) {
		value.bind( function( newval ) {
			$('.container-fluid2 .caption a').css('color', newval );
		} );
	} );

	// Update site description color
	wp.customize('description_color', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).css('color', newval );
		});
	});

	// Update site description border color. Target pseudo elements.
	wp.customize('description_border', function( value ) {
		value.bind( function( newval ) {
			var style, el;
			style = '<style class="bannerhack">#banner h2:before, #banner h2:after { background-color: ' + newval + '; }</style>';
			el = $('.bannerhack');

			if ( el.length ) {
				el.replaceWith( style );
			}
		});
	});

	// Article Heading
	wp.customize( 'article_title', function( value ) {
		value.bind( function( to ) {
			$( '.article-title h1' ).text( to );
		} );
	} );
	wp.customize( 'article_title_small', function( value ) {
		value.bind( function( to ) {
			$( '.article-title h2' ).text( to );
		} );
	} );

  wp.customize( 'flip_page_title_color', function( value ) {
		value.bind( function( to ) {
			$( '#fp-well h3, #fp-well p' ).css( 'color', to );
		} );
	} );


	// Custom Menu Background Color
	wp.customize( 'menu_color', function( value ) {
		value.bind( function( to ) {
			$( '#menu' ).css(  {
				'background': to
			} );
		} );
	} );

	// Front Page Background Color
	wp.customize( 'frontp_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.container-fluid2' ).css('background-color', to );
		} );
	} );

	// Front Page Title Colors
	wp.customize( 'frontp_article_title', function( value ) {
		value.bind( function( to ) {
			$( '#title-section-fp h1, #title-section-fp h2' ).css('color', to );
		} );
	} );

	// Email CTA Background Color
	wp.customize( 'frontp_email_bg', function( value ) {
		value.bind( function( to ) {
			$( '#fp-well.well' ).css('background-color', to );
		} );
	} );

	// Front Page Text Color
	wp.customize( 'frontp_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.container-fluid2 h3.widget-title, .container-fluid2 .caption h3, .container-fluid2 .caption p' ).css('color', to );
		} );
	} );

	// Footer Web Page URL 1
	wp.customize( 'page_1', function( value ) {
		value.bind( function( to ) {
			$( '.page1' ).url( to );
		} );
	} );

	// Footer Web Page Label 1
	wp.customize( 'page_1_label', function( value ) {
		value.bind( function( to ) {
			$( '.page1label' ).text( to );
		} );
	} );

	// Footer Web Page URL 2
	wp.customize( 'page_2', function( value ) {
		value.bind( function( to ) {
			$( '.page2' ).url( to );
		} );
	} );

	// Footer Web Page Label 2
	wp.customize( 'page_2_label', function( value ) {
		value.bind( function( to ) {
			$( '.page2label' ).text( to );
		} );
	} );

		// Footer Web Page URL 3
	wp.customize( 'page_3', function( value ) {
		value.bind( function( to ) {
			$( '.page3' ).url( to );
		} );
	} );

	// Footer Web Page Label 3
	wp.customize( 'page_3_label', function( value ) {
		value.bind( function( to ) {
			$( '.page3label' ).text( to );
		} );
	} );

		// Footer Web Page URL 4
	wp.customize( 'page_4', function( value ) {
		value.bind( function( to ) {
			$( '.page4' ).url( to );
		} );
	} );

	// Footer Web Page Label 4
	wp.customize( 'page_4_label', function( value ) {
		value.bind( function( to ) {
			$( '.page4label' ).text( to );
		} );
	} );

	// Footer Web Page URL 5
	wp.customize( 'page_5', function( value ) {
		value.bind( function( to ) {
			$( '.page5' ).url( to );
		} );
	} );

	// Footer Web Page Label 5
	wp.customize( 'page_5_label', function( value ) {
		value.bind( function( to ) {
			$( '.page5label' ).text( to );
		} );
	} );

	// Footer Web Page URL 6
	wp.customize( 'page_6', function( value ) {
		value.bind( function( to ) {
			$( '.page6' ).url( to );
		} );
	} );

	// Footer Web Page Label 6
	wp.customize( 'page_6_label', function( value ) {
		value.bind( function( to ) {
			$( '.page6label' ).text( to );
		} );
	} );

	// Footer TFS Address
	wp.customize( 'address_field', function( value ) {
		value.bind( function( to ) {
			$( '.addressfield' ).html( to );
		} );
	} );

	// Footer Email URL
	wp.customize( 'tfs_email', function( value ) {
		value.bind( function( to ) {
			$( '.tfsemail' ).text( to );
		} );
	} );

	// Footer email Label
	wp.customize( 'tfs_email_label', function( value ) {
		value.bind( function( to ) {
			$( '.tfsemaillabel' ).text( to );
		} );
	} );

	// Page Link 1 URL
	wp.customize( 'link_1', function( value ) {
		value.bind( function( to ) {
			$( '.link1' ).url( to );
		} );
	} );

	// Page Link URL Label
	wp.customize( 'link_1_label', function( value ) {
		value.bind( function( to ) {
			$( '.link1label' ).text( to );
		} );
	} );

	// Page Link 2 URL
	wp.customize( 'link_2', function( value ) {
		value.bind( function( to ) {
			$( '.link2' ).url( to );
		} );
	} );

	// Page Link 2 URL Label
	wp.customize( 'link_2_label', function( value ) {
		value.bind( function( to ) {
			$( '.link2label' ).text( to );
		} );
	} );

	// Page Link 3 URL
	wp.customize( 'link_3', function( value ) {
		value.bind( function( to ) {
			$( '.link3' ).url( to );
		} );
	} );

	// Page Link 3 URL Label
	wp.customize( 'link_3_label', function( value ) {
		value.bind( function( to ) {
			$( '.link3label' ).text( to );
		} );
	} );

	// Page Link 4 URL
	wp.customize( 'link_4', function( value ) {
		value.bind( function( to ) {
			$( '.link4' ).url( to );
		} );
	} );

	// Page Link 4 URL Label
	wp.customize( 'link_4_label', function( value ) {
		value.bind( function( to ) {
			$( '.link4label' ).text( to );
		} );
	} );

	// Page Link 5 URL
	wp.customize( 'link_5', function( value ) {
		value.bind( function( to ) {
			$( '.link5' ).url( to );
		} );
	} );

	// Page Link 5 URL Label
	wp.customize( 'link_5_label', function( value ) {
		value.bind( function( to ) {
			$( '.link5label' ).text( to );
		} );
	} );

	// TFS Hours
	wp.customize( 'hours_field', function( value ) {
		value.bind( function( to ) {
			$( '.hoursfield' ).html( to );
		} );
	} );

	wp.customize('add_basic', function( value ) {
		value.bind( function( to ) {
			if ( true === to ) {
				$( '#element-basic').removeClass( 'hidebasic' );
			} else {
				$( '#element-basic' ).addClass( 'hidebasic' );
			}
		});
	});

	wp.customize('add_hilo', function( value ) {
		value.bind( function( to ) {
			if ( true === to ) {
				$( '#element-hilo').removeClass( 'hidehilo' );
			} else {
				$( '#element-hilo' ).addClass( 'hidehilo' );
			}
		});
	});

	// Private Waters Template

	wp.customize('beat-1', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#beat-1').removeClass('hide-beat1');
			} else {
				$('#beat-1').addClass('hide-beat1');
			}
		});
	});

	wp.customize('beat-2', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#beat-2').removeClass('hide-beat2');
			} else {
				$('#beat-2').addClass('hide-beat2');
			}
		});
	});

	wp.customize('beat-3', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#beat-3').removeClass('hide-beat3');
			} else {
				$('#beat-3').addClass('hide-beat3');
			}
		});
	});

	wp.customize('beat-4', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#beat-4').removeClass('hide-beat4');
			} else {
				$('#beat-4').addClass('hide-beat4');
			}
		});
	});

	wp.customize('beat-5', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#beat-5').removeClass('hide-beat5');
			} else {
				$('#beat-5').addClass('hide-beat5');
			}
		});
	});

	wp.customize('beat-6', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#beat-6').removeClass('hide-beat6');
			} else {
				$('#beat-6').addClass('hide-beat6');
			}
		});
	});

	wp.customize('spotlight_1_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(1)' ).css('background-color', newval );
		});
	});

	wp.customize('spotlight_1_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters1 h2, .privatewaters1 h4, .privatewaters1 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('spotlight_1_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters1 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('spotlight_1_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseTwo1 .panel-body, #collapseThree1 .panel-body, #collapseFour1 .panel-body, #collapseFive1 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('spotlight_2_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(2)' ).css('background-color', newval );
		});
	});

	wp.customize('spotlight_2_text_color', function( value ) {
		value.bind( function( newval ) {
			$('.privatewaters2 h2, .privatewaters2 h4, .privatewaters2 p.travel, .panel' ).css('color', newval);
		});
	});

	wp.customize('spotlight_2_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters2 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('spotlight_2_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseSix1 .panel-body, #collapseSeven1 .panel-body, #collapseEight1 .panel-body, #collapseNine1 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('spotlight_3_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(3)' ).css('background-color', newval );
		});
	});

	wp.customize('spotlight_3_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters3 h2, .privatewaters3 h4, .privatewaters3 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('spotlight_3_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters3 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('spotlight_3_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapse-beat1 .panel-body, #collapse-beat2 .panel-body, #collapse-beat3 .panel-body, #collapse-beat4 .panel-body, #collapse-beat5 .panel-body, #collapse-beat6 .panel-body ' ).css('border-top-color', newval );
		});
	});

	wp.customize('spotlight_4_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(4)' ).css('background-color', newval );
		});
	});

	wp.customize('spotlight_4_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters4 h2, .privatewaters4 h4, .privatewaters4 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('spotlight_4_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters4 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('spotlight_4_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseOne4 .panel-body' ).css('border-top-color', newval );
		});
	});

		wp.customize('spotlight_5_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(5)' ).css('background-color', newval );
		});
	});

	wp.customize('spotlight_5_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters5 h2, .privatewaters5 h4, .privatewaters5 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('spotlight_5_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters5 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('spotlight_5_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseOne5 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('guide-service-description', function(value) {
		value.bind( function( to ) {
			$('.inner p').text( to );
		} );
	} );

  // TRAVEL TEMPLATE //////////////////////////////////////////////

	wp.customize('sth_bg_color', function( value ) {
		value.bind( function( newval ){
			$( '#two-325.wrapper.style1.special' ).css( 'background-color', newval );
		});
	});

	wp.customize('sth_text_color', function( value ) {
		value.bind( function( newval ){
			$( '#setthehook-title h2, .setthehook-p' ).css( 'color', newval );
		});
	});

  wp.customize('travel_text_color', function( value ) {
    value.bind( function( newval ){
      $( '#travel-style-one h2,#travel-style-one h4,#travel-style-one p,#travel-style-two h2,#travel-style-two h4,#travel-style-two p,#travel-style-three h2,#travel-style-three h4,#travel-style-three p,#travel-style-four h2,#travel-style-four h4,#travel-style-four p,#travel-style-five h2,#travel-style-five h4,#travel-style-five p  ' ).css( 'color', newval );
    });
  });

  wp.customize('travel_fa_arrows', function( value ){
    value.bind( function( newval ){
      $('.panel-title.travel.travel-template .arrow-down').css( 'color', newval );
      $('#accordion1 .panel-collapse.collapse .panel-body.travel-template, #accordion2 .panel-collapse.collapse .panel-body.travel-template, #accordion3 .panel-collapse.collapse .panel-body.travel-template, #accordion4 .panel-collapse.collapse .panel-body.travel-template, #accordion5 .panel-collapse.collapse .panel-body.travel-template').css('border-top-color', newval );
    });
  });




	// GUIDE SERVICE TEMPLATE ///////////////////////////////////////

	wp.customize('guide-beat-1', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#guide-beat-1').removeClass('hide-guidebeat1');
			} else {
				$('#guide-beat-1').addClass('hide-guidebeat1');
			}
		});
	});

	wp.customize('guide-beat-2', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#guide-beat-2').removeClass('hide-guidebeat2');
			} else {
				$('#guide-beat-2').addClass('hide-guidebeat2');
			}
		});
	});

	wp.customize('guide-beat-3', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#guide-beat-3').removeClass('hide-guidebeat3');
			} else {
				$('#guide-beat-3').addClass('hide-guidebeat3');
			}
		});
	});

	wp.customize('guide-beat-4', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#guide-beat-4').removeClass('hide-guidebeat4');
			} else {
				$('#guide-beat-4').addClass('hide-guidebeat4');
			}
		});
	});

	wp.customize('guide-beat-5', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#guide-beat-5').removeClass('hide-guidebeat5');
			} else {
				$('#guide-beat-5').addClass('hide-guidebeat5');
			}
		});
	});

	wp.customize('guide-beat-6', function(value) {
		value.bind(function(to) {
			if(true === to) {
				$('#guide-beat-6').removeClass('hide-guidebeat6');
			} else {
				$('#guide-beat-6').addClass('hide-guidebeat6');
			}
		});
	});

	wp.customize('gs_1_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(1)' ).css('background-color', newval );
		});
	});

	wp.customize('gs_1_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters1 h2, .privatewaters1 h4, .privatewaters1 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('gs_1_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters1 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('gs_1_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseTwo1 .panel-body, #collapseThree1 .panel-body, #collapseFour1 .panel-body, #collapseFive1 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('gs_2_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(2)' ).css('background-color', newval );
		});
	});

	wp.customize('gs_2_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters2 h2, .privatewaters2 h4, .privatewaters2 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('gs_2_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters2 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('gs_2_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseSix1 .panel-body, #collapseSeven1 .panel-body, #collapseEight1 .panel-body, #collapseNine1 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('gs_3_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(3)' ).css('background-color', newval );
		});
	});

	wp.customize('gs_3_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters3 h2, .privatewaters3 h4, .privatewaters3 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('gs_3_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters3 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('gs_3_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseFishing4 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('gs_4_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(4)' ).css('background-color', newval );
		});
	});

	wp.customize('gs_4_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters4 h2, .privatewaters4 h4, .privatewaters4 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('gs_4_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters4 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('gs_4_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseLodging4 .panel-body' ).css('border-top-color', newval );
		});
	});

		wp.customize('gs_5_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.spotlight:nth-child(5)' ).css('background-color', newval );
		});
	});

	wp.customize('gs_5_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters5 h2, .privatewaters5 h4, .privatewaters5 p.travel, .panel' ).css('color', newval );
		});
	});

	wp.customize('gs_5_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.privatewaters5 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('gs_5_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseOne5 .panel-body' ).css('border-top-color', newval );
		});
	});


	// Attaches staff logo to staff template parallax header
	wp.customize( 'staff-logo-upload', function(value) {
		value.bind(function(to){
			var stafflogo = $('.stafflogo img');
			stafflogo.attr('src', to);
		});
	});

	// SCHOOLS TEMPLATE ////////////////////////////////////
	wp.customize('sch_title_color', function( value ) {
		value.bind( function( newval ) {
			$( 'h2#schools-title' ).css('color', newval );
		});
	});

	wp.customize('sch_titleborder_color', function( value ) {
	value.bind( function( newval ) {
		var style, el;
		style = '<style class="schoolshack">#banner h2#schools-title:before, #banner h2#schools-title:after { background-color: ' + newval + '; }</style>';
		el = $('.schoolshack');

		if ( el.length ) {
			el.replaceWith( style );
		}
	});
});

wp.customize('sch_description_color', function( value ) {
		value.bind( function( newval ) {
			$( 'p#schools-description' ).css('color', newval );
		});
	});
wp.customize('sch_schoolstel_color', function( value ) {
		value.bind( function( newval ) {
			$( 'h3#schools-tel' ).css('color', newval );
		});
	});

wp.customize('sch_1_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#schools-two .spotlight:nth-child(1)' ).css('background-color', newval );
		});
	});

	wp.customize('sch_1_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools1 h2, .schools1 h4, .schools1 .travel, .schools1 .travel p, .schools1 .travel strong, .schools1 .travel em' ).css('color', newval );
		});
	});

	wp.customize('sch_1_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools1 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('sch_1_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools1 #collapseTwo1 .panel-body, #collapseThree1 .panel-body, #collapseFour1 .panel-body, #collapseFive1 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('sch_2_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#schools-two .spotlight:nth-child(2)' ).css('background-color', newval );
		});
	});

	wp.customize('sch_2_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools2 h2, .schools2 h4, .schools2 .travel, .schools2 .travel p, .schools2 .travel strong, .schools2 .travel em' ).css('color', newval );
		});
	});

	wp.customize('sch_2_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools2 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('sch_2_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '#collapseSix1 .panel-body, #collapseSeven1 .panel-body, #collapseEight1 .panel-body, #collapseNine1 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('sch_3_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#schools-two .spotlight:nth-child(3)' ).css('background-color', newval );
		});
	});

	wp.customize('sch_3_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools3 h2, .schools3 h4, .schools3 .travel, .schools3 .travel p, .schools3 .travel strong, .schools3 .travel em' ).css('color', newval );
		});
	});

	wp.customize('sch_3_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools3 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('sch_3_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools3 #collapseOne3 .panel-body' ).css('border-top-color', newval);
		});
	});

	wp.customize('sch_4_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#schools-two .spotlight:nth-child(4)' ).css('background-color', newval );
		});
	});

	wp.customize('sch_4_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools4 h2, .schools4 h4, .schools4 .travel, .schools4 .travel p, .schools4 .travel strong, .schools4 .travel em' ).css('color', newval );
		});
	});

	wp.customize('sch_4_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools4 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('sch_4_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools4 #collapseOne4 .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('sch_5_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#schools-two .spotlight:nth-child(5)' ).css('background-color', newval );
		});
	});

	wp.customize('sch_5_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools5 h2, .schools5 h4, .schools5 .travel, .schools5 .travel p, .schools5 .travel strong, .schools5 .travel em' ).css('color', newval );
		});
	});

	wp.customize('sch_5_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools5 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('sch_5_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '.schools5 #collapseOne5 .panel-body' ).css('border-top-color', newval );
		});
	});

	// FISH CAMP TEMPLATE //////////////////////////////////////

	wp.customize('fc_cost_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#fishcamp-two .spotlight:nth-child(1)' ).css('background-color', newval );
		});
	});

	wp.customize('fc_cost_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp1 h2, .fishcamp1 .travel, .fishcamp1 .travel p, .fishcamp1 .travel strong' ).css('color', newval );
		});
	});

	wp.customize('fc_cost_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp1 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('fc_cost_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp .panel-heading + .panel-collapse > .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('fc_dates_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#fishcamp-two .spotlight:nth-child(2)' ).css('background-color', newval );
		});
	});

	wp.customize('fc_dates_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp2 h2, .fishcamp2 h4, .fishcamp2 .travel, .fishcamp2 .travel p, .fishcamp2 .travel strong, .fishcamp2 .travel em, #travel.travel, #travel.travel p, #travel.travel strong' ).css('color', newval );
		});
	});

	wp.customize('fc_dates_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp2 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('fc_dates_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp2 .panel-heading + .panel-collapse > .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('fc_lodging_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#fishcamp-two .spotlight:nth-child(3)' ).css('background-color', newval );
		});
	});

	wp.customize('fc_lodging_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp4 h2, .fishcamp4 h4, #travel-style.fishcamp4, #travel-style.fishcamp4 p, #travel-style.fishcamp4 strong' ).css('color', newval );
		});
	});

	wp.customize('fc_lodging_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp4 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('fc_lodging_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp4 .panel-heading + .panel-collapse > .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('fc_getting_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '#fishcamp-two .spotlight:nth-child(4)' ).css('background-color', newval );
		});
	});

	wp.customize('fc_getting_text_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp5 h2, .fishcamp5 h4, .fishcamp5 .travel, .fishcamp5 .travel p, .fishcamp5 .travel strong' ).css('color', newval );
		});
	});

	wp.customize('fc_getting_arrow_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp5 h4 .arrow-down' ).css('color', newval );
		});
	});

	wp.customize('fc_getting_border_color', function( value ) {
		value.bind( function( newval ) {
			$( '.fishcamp5 .panel-heading + .panel-collapse > .panel-body' ).css('border-top-color', newval );
		});
	});

	wp.customize('fc_itinerary_bg_color', function( value ) {
	value.bind( function( newval ) {
		$( '#fishcamp-two .spotlight:nth-child(5)' ).css('background-color', newval );
	});
});

wp.customize('fc_itinerary_text_color', function( value ) {
	value.bind( function( newval ) {
		$( '.fishcamp3 h2, .fishcamp3 h4, .fishcamp3 .travel, .fishcamp3 .travel p, .fishcamp3 .travel strong' ).css('color', newval );
	});
});

wp.customize('fc_itinerary_arrow_color', function( value ) {
	value.bind( function( newval ) {
		$( '.fishcamp3 h4 .arrow-down' ).css('color', newval );
	});
});

wp.customize('fc_intinerary_border_color', function( value ) {
	value.bind( function( newval ) {
		$( '.fishcamp3 .panel-heading + .panel-collapse > .panel-body' ).css('border-top-color', newval );
	});
});

wp.customize('fc_h2_title', function( value ) {
	value.bind( function( newval ) {
		$( 'h2#fishcamp-h2' ).css('color', newval );
	});
});

wp.customize('fc_titleborder_color', function( value ) {
	value.bind( function( newval ) {
		var style, el;
		style = '<style class="fishcamphack">#banner h2#fishcamp-h2:before, #banner h2#fishcamp-h2:after { background-color: ' + newval + '; }</style>';
		el = $('.fishcamphack');

		if ( el.length ) {
			el.replaceWith( style );
		}
	});
});

wp.customize('fc_decription_color', function( value ) {
	value.bind( function( newval ) {
		$( 'p#fishcamp-desc' ).css('color', newval );
	});
});

wp.customize('fc_tel_color', function( value ) {
	value.bind( function( newval ) {
		$( 'h3#fishcamp-tel' ).css('color', newval );
	});
});

wp.customize('signature_bg_color', function( value ) {
	value.bind( function( newval ) {
		$( '.signature_bg_color' ).css('background-color', newval );
	});
});

wp.customize('travelblog_bg_color', function( value ) {
	value.bind( function( newval ) {
		$( '.travelblog_bg_color' ).css('background-color', newval );
	});
});

wp.customize('travelnews_bg_color', function( value ) {
	value.bind( function( newval ) {
		$( '#travel-blog.blog-well.well .col-md-6 .inner-wrap' ).css('background-color', newval );
	});
});

wp.customize('signature_events_bg_color', function( value ) {
	value.bind( function( newval ) {
		$( '.signature_events_bg_color' ).css('background-color', newval );
	});
});

wp.customize('staff_bg_color', function( value ) {
	value.bind( function( newval ) {
		$( '.staff_bg_color' ).css('background-color', newval );
	});
});

wp.customize('staff_text_color', function( value ) {
	value.bind( function( newval ) {
		$( '.staff-text-color h3.widget-title, .staff-text-color h4.widget-title, .staff-text-color p' ).css('color', newval );
	});
});

wp.customize('staff_link_color', function( value ) {
	value.bind( function( newval ) {
		$( '.caption a' ).css('color', newval );
	});
});

wp.customize('signature_link_color', function( value ) {
	value.bind( function( newval ) {
		$( '.caption a' ).css('color', newval );
	});
});

wp.customize('travelblog_link_color', function( value ) {
	value.bind( function( newval ) {
		$( '.travel-caption.caption a' ).css('color', newval );
	});
});

wp.customize('signature_events_link_color', function( value ) {
	value.bind( function( newval ) {
		$( '.caption a' ).css('color', newval );
	});
});

wp.customize('signature_text_color', function( value ) {
	value.bind( function( newval ) {
		$( '.signature-text-color h3.widget-title a:hover, .signature-text-color h3.widget-title, .signature-text-color h4.widget-title, .signature-text-color p' ).css('color', newval );
	});
});

wp.customize('travelblog_text_color', function( value ) {
	value.bind( function( newval ) {
		$( '.travelblog-text-color h3.widget-title a:hover, .travelblog-text-color h3.widget-title, .travelblog-text-color h4.widget-title, .travelblog-text-color p' ).css('color', newval );
	});
});

wp.customize('signature_events_text_color', function( value ) {
	value.bind( function( newval ) {
		$( '.signature-events-text-color h3.widget-title a:hover, .signature-events-text-color h3.widget-title, .signature-events-text-color h4.widget-title, .signature-events-text-color p' ).css('color', newval );
	});
});

wp.customize('basic_page_bg', function( value ) {
	value.bind( function( newval ) {
		$( '.container-fluid.basic-page-template' ).css('background-color', newval );
	});
});

wp.customize('basic_page_color', function( value ) {
	value.bind( function( newval ) {
		$( '.basic-page-template p' ).css('color', newval );
	});
});

wp.customize('default_page_bg', function( value ) {
	value.bind( function( newval ) {
		$( 'article.default-template' ).css('background-color', newval );
	});
});

wp.customize('default_cont_bg', function( value ) {
	value.bind( function( newval ) {
		$( '.container.default-template' ).css('background-color', newval );
	});
});

wp.customize('default_page_color', function( value ) {
	value.bind( function( newval ) {
		$( '.default-template p' ).css('color', newval );
	});
});

wp.customize('archive_page_hero', function( value ) {
  value.bind( function(to) {
    var archhero = $( 'img.archive-hero' );
    archhero.attr( 'src', to );
  });
});

wp.customize('archive_page_logo', function( value ){
  value.bind( function(to){
    var archlogo = $( '.dd-1 img' );
    archlogo.attr('src', to);
  });
});

wp.customize( 'archive_page_textarea', function( value ) {
  value.bind( function( to ) {
    $( '.archive.panel-body' ).text( to );
  } );
} );

wp.customize('archive_page_title', function( value ){
  value.bind( function(to){
    var archtitle = $( 'h2.archive-title, h1.archive-title' );
    archtitle.attr('html', to);
  });
});

wp.customize('archive_page_color', function( value ) {
	value.bind( function( newval ) {
		$( '#archive-entry-styles table th,#archive-entry-styles strong,#archive-entry-styles b,h2.archive.logo-tel,#archive-entry-styles table td' ).css('color', newval );
	});
});

wp.customize('archive_page_bg', function( value ) {
  value.bind( function( newval ){
    $( 'body.archivetemplate' ).css('background-color', newval );
  });
});

wp.customize('archive_cont_color', function( value ) {
  value.bind( function( newval ){
    $( 'article.archive-template' ).css('background-color', newval );
  });
});


// Twitter Link
	wp.customize( 'twitter_link_footer', function( value ) {
		value.bind( function( to ) {
			$( '#social-footer .twitter a' ).url( to );
		} );
	} );

// Facebook Link
	wp.customize( 'facebook_link_footer', function( value ) {
		value.bind( function( to ) {
			$( '#social-footer .facebook a' ).url( to );
		} );
	} );

// Instagram Link
	wp.customize( 'instagram_link_footer', function( value ) {
		value.bind( function( to ) {
			$( '#social-footer .instagram a' ).url( to );
		} );
	} );

// Youtube Link
	wp.customize( 'youtube_link_footer', function( value ) {
		value.bind( function( to ) {
			$( '#social-footer .youtube a' ).url( to );
		} );
	} );

// Email Link
	wp.customize( 'email_link_footer', function( value ) {
		value.bind( function( to ) {
			$( '#social-footer .email a' ).text( to );
		} );
	} );

// Survey Template
	// Survey Template
	wp.customize( 'survey-logo', function(value) {
		value.bind(function(to){
			var surveylogo = $('img.survey-logo');
			surveylogo.attr('src', to);
		});
	});

})(jQuery);
