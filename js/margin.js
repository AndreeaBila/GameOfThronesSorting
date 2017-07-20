$(function() {

  //Function that places the element on the center of the page
 
    var marginTop = (($('.to-page-center').parent().height() -  $('.to-page-center').height()) / 2) -100;
    marginTop = marginTop + 'px';

    var marginLeft = (($('.to-page-center').parent().width() -  $('.to-page-center').width()) / 2);
    marginLeft = marginLeft + 'px';

    console.log('document');
    console.log($(window).height());
    console.log('jumbotron');
    console.log($(this).height());
    console.log('marginTop');
    console.log(marginTop);
    console.log('marginLeft');
    console.log(marginLeft);

     $('.to-page-center').css({'margin-top': marginTop, 'margin-left': marginLeft, 'margin-bottom': '0px'});
 
    
  
});