/**
 * jquery.matchHeight-min.js v0.5.2
 * http://brm.io/jquery-match-height/
 * License: MIT
 */


/*if( ! /Android|webOS|iPhone|iPod|iPad|BlackBerry/i.test(navigator.userAgent)) {

    $(document).ready(function () {
        var s = skrollr.init();
    })
}*/

AOS.init({
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: true,
    delay: 1100, // values from 0 to 3000, with step 50ms
    duration: 1500, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
});

// When the user scrolls down 50px from the top of the document, resize the header's font size

var x = window.matchMedia("(min-width: 991.98px)")
scrollFunction(x) // Call listener function at run time
x.addListener(scrollFunction) // Attach listener function on state changes

window.onscroll = function() {scrollFunction()};

function scrollFunction() {

    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("news-cta").style.maxHeight = "2800px";
        document.getElementById("news-cta").style.height = "auto";
        document.getElementById("news-cta").style.backgroundColor = "black";
        document.getElementById("news-cta").style.transition = "max-height 1.5s ease-out";
    } else if (x.matches) {
        var a = document.getElementById('news-cta');
        if (typeof(a) != 'undefined' && a != null) {
            a.style.maxHeight = "0px";
        }
        var b = document.getElementById('news-cta');
        if (typeof(b) != 'undefined' && a != null) {
            b.style.backgroundColor = "#000";
        }
    } else {
        var b = document.getElementById('news-cta');
        if (typeof(b) != 'undefined' && a != null) {
            b.style.backgroundColor = "#000";
        }
    }
}

(function(d) {
    var g = -1,
        e = -1,
        n = function(a) {
            var b = null,
                c = [];
            d(a).each(function() {
                var a = d(this),
                    k = a.offset().top - h(a.css("margin-top")),
                    l = 0 < c.length ? c[c.length - 1] : null;
                null === l ? c.push(a) : 1 >= Math.floor(Math.abs(b - k)) ? c[c.length - 1] = l.add(a) : c.push(a);
                b = k
            });
            return c
        },
        h = function(a) {
            return parseFloat(a) || 0
        },
        b = d.fn.matchHeight = function(a) {
            if ("remove" === a) {
                var f = this;
                this.css("height", "");
                d.each(b._groups, function(a, b) {
                    b.elements = b.elements.not(f)
                });
                return this
            }
            if (1 >= this.length) return this;
            a = "undefined" !==
            typeof a ? a : !0;
            b._groups.push({
                elements: this,
                byRow: a
            });
            b._apply(this, a);
            return this
        };
    b._groups = [];
    b._throttle = 80;
    b._maintainScroll = !1;
    b._beforeUpdate = null;
    b._afterUpdate = null;
    b._apply = function(a, f) {
        var c = d(a),
            e = [c],
            k = d(window).scrollTop(),
            l = d("html").outerHeight(!0),
            g = c.parents().filter(":hidden");
        g.css("display", "block");
        f && (c.each(function() {
            var a = d(this),
                b = "inline-block" === a.css("display") ? "inline-block" : "block";
            a.data("style-cache", a.attr("style"));
            a.css({
                display: b,
                "padding-top": "0",
                "padding-bottom": "0",
                "margin-top": "0",
                "margin-bottom": "0",
                "border-top-width": "0",
                "border-bottom-width": "0",
                height: "100px"
            })
        }), e = n(c), c.each(function() {
            var a = d(this);
            a.attr("style", a.data("style-cache") || "").css("height", "")
        }));
        d.each(e, function(a, b) {
            var c = d(b),
                e = 0;
            f && 1 >= c.length || (c.each(function() {
                var a = d(this),
                    b = "inline-block" === a.css("display") ? "inline-block" : "block";
                a.css({
                    display: b,
                    height: ""
                });
                a.outerHeight(!1) > e && (e = a.outerHeight(!1));
                a.css("display", "")
            }), c.each(function() {
                var a = d(this),
                    b = 0;
                "border-box" !== a.css("box-sizing") &&
                (b += h(a.css("border-top-width")) + h(a.css("border-bottom-width")), b += h(a.css("padding-top")) + h(a.css("padding-bottom")));
                a.css("height", e - b)
            }))
        });
        g.css("display", "");
        b._maintainScroll && d(window).scrollTop(k / l * d("html").outerHeight(!0));
        return this
    };
    b._applyDataApi = function() {
        var a = {};
        d("[data-match-height], [data-mh]").each(function() {
            var b = d(this),
                c = b.attr("data-match-height") || b.attr("data-mh");
            a[c] = c in a ? a[c].add(b) : b
        });
        d.each(a, function() {
            this.matchHeight(!0)
        })
    };
    var m = function(a) {
        b._beforeUpdate &&
        b._beforeUpdate(a, b._groups);
        d.each(b._groups, function() {
            b._apply(this.elements, this.byRow)
        });
        b._afterUpdate && b._afterUpdate(a, b._groups)
    };
    b._update = function(a, f) {
        if (f && "resize" === f.type) {
            var c = d(window).width();
            if (c === g) return;
            g = c
        }
        a ? -1 === e && (e = setTimeout(function() {
            m(f);
            e = -1
        }, b._throttle)) : m(f)
    };
    d(b._applyDataApi);
    d(window).bind("load", function(a) {
        b._update(!1, a)
    });
    d(window).bind("resize orientationchange", function(a) {
        b._update(!0, a)
    })


    // Smooth Scroll to ID
    $(document).on('click', 'a[href^="#"]', function(e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $id.offset().top - 50; // Distance from the top in pixels. So, 50px

        // animated top scrolling
        $('body, html').animate({scrollTop: pos }, 2000 );
    });

})(jQuery);


/*var myVar = setInterval(setColor, 6000);

function setColor() {
    var x = document.getElementById("myDiv");
    x.style.display = x.style.display == "none" ? "block" : "none";
}

function stopColor() {
    clearInterval(myVar);
}*/

/*$("#s3").cycle({ fx: 'fade', speed:  2500 });*/


// Adds a prompt to add iCal per the submit-iCal icon found in the events list
const addtoIcal1 = document.querySelector('form#download-iCal-frm-1');

if (addtoIcal1 !== null) {

    const addText1 = document.createElement('span');
    addText1.className = 'add-to-ical';
    addText1.textContent = "Add to iCal";
    addtoIcal1.appendChild(addText1);

}


const addtoIcal2 = document.querySelector('form#download-iCal-frm-2');

if (addtoIcal2 !== null) {

    const addText2 = document.createElement('span');
    addText2.className = 'add-to-ical';
    addText2.textContent = "Add to iCal";
    addtoIcal2.appendChild(addText2);

}

const addtoIcal3 = document.querySelector('form#download-iCal-frm-3');

if (addtoIcal3 !== null) {

    const addText3 = document.createElement('span');
    addText3.className = 'add-to-ical';
    addText3.textContent = "Add to iCal";
    addtoIcal3.appendChild(addText3);

}


const addtoIcal4 = document.querySelector('form#download-iCal-frm-4');

if (addtoIcal4 !== null) {

    const addText4 = document.createElement('span');
    addText4.className = 'add-to-ical';
    addText4.textContent = "Add to iCal";
    addtoIcal4.appendChild(addText4);

}
