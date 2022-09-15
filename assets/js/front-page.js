function frontPageform() { "use strict";
var w = window.open('https://www.verticalresponse.com','vr_optin_popup','scrollbars=yes,width=600,height=450'); 
                          
w.onload = function() {
    jQuery(w.document.body).append("<div class='.chart'>");                          
};
                     
}

//window.open( 'https://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;