$(function(){
  $('#copyrightText').hide();

  $('.copyrights').on('mouseover', function(){
    $('#copyrightIcon').hide();
    $('#copyrightText').show("slide", { direction: "left" }, 2000);
  });


});