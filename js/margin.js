$(function() {
    jQuery.fn.centerX = function(parent) {
        if (parent) {
            parent = this.parent();
        } else {
            parent = window;
        }
        this.css({
            "position": "absolute",
            "left": ((($(parent).width() - this.outerWidth()) / 2) + $(parent).scrollLeft() + "px")
        });
        return this;
    }
    jQuery.fn.centerY = function(parent) {
        if (parent) {
            parent = this.parent();
        } else {
            parent = window
        }
        this.css({
            "position": "absolute",
            "top": ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop() + "px"),
        })
    }
    centerPage();
    //if the page is being resized recall the centerng functions
    $(window).resize(function() {
        centerPage();
    });

    //check the orientation of the page
    screen.orientation.onchange = function() {
        centerPage();
    }

    function centerPage() {
        $(".to-page-center").centerX();
        if ($('.to-page-center').height() * 1.5 < $(window).height()) {
            $(".to-page-center").centerY();
        }
    }
});