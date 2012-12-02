$(document).ready(function() {
  //Give the photo divs a height since their contents are absolutely positioned
  $('div.photo').each(function() {
    var height = $(this).children('img').height();
    $(this).css('height', height);
  });

  //Hide the 2012 photo
  $('img.photo-2012').hide();

  //Show the 2012 on click
  $('.button-2012').click(function() {
    //alert('foo');
    $(this).parents('.photo-group').children('div.photo').children('img.photo-2012').fadeIn('1600');
  });

  //Hide the 2012 on click
  $('.button-1966').click(function() {
    //alert('foo');
    $(this).parents('.photo-group').children('div.photo').children('img.photo-2012').fadeOut('1600');
  });

});
