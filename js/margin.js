$(function() {

    //Function that places the element on the center of the page

    // var marginTop = ($(window).height() - $('.to-page-center').height()) / 2;
    // var marginLeft = ($(window).width() - $('.to-page-center').width()) / 2;

    // console.log('window height: ' + $(window).height());
    // console.log('window width: ' + $(window).width());
    // console.log('jumbotron height: ' + $('.to-page-center').height());
    // console.log('jumbotron width: ' + $('.to-page-center').width());
    // console.log('marginTop: ' + marginTop);
    // console.log('marginLeft: ' + marginLeft);

    // $('.to-page-center').css({ 'margin-top': marginTop, 'margin-left': marginLeft, 'margin-bottom': marginTop, 'margin-right': marginLeft });



    jQuery.fn.center = function(parent) {
        if (parent) {
            parent = this.parent();
        } else {
            parent = window;
        }
        this.css({
            "position": "absolute",
            "top": ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop() + "px"),
            "left": ((($(parent).width() - this.outerWidth()) / 2) + $(parent).scrollLeft() + "px")
        });
        return this;
    }
    $(".to-page-center").center(false);
});