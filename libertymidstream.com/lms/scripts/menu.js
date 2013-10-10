// menu smothness
// version 1.0.2

$(function(){

  // dropdown menu with 3 levels

  $('#cssmenu li').click(function() {
    window.location = $(this).find('a:first').attr('href');
  });
  var level=0;
  $('#cssmenu').find('li:first-child').addClass('ms_first');
  $('#cssmenu').find('li:last-child').addClass('ms_last');
  $('#cssmenu').find('li:first-child').children('a').addClass('ms_first');
  $('#cssmenu').find('li:last-child').children('a').addClass('ms_last');
  $('#cssmenu ul').find('li:first-child').addClass('ms_first');
  $('#cssmenu ul').find('li:last-child').addClass('ms_last');
  $('#cssmenu ul').find('li:first-child').children('a').addClass('ms_first');
  $('#cssmenu ul').find('li:last-child').children('a').addClass('ms_last');
  $('#cssmenu').children('li').addClass('ms_top');
  $('#cssmenu').children('li').children('a').addClass('ms_top');
  $('#cssmenu').children('li').children('ul').parent().addClass('ms_havesubmenu');
  $('#cssmenu').children('li').children('ul').parent().children('a').addClass('ms_havesubmenu');
  $('#cssmenu ul li').children('ul').parent().addClass('ms_havesubmenu');
  $('#cssmenu ul li').children('ul').parent().children('a').addClass('ms_havesubmenu');
  $('#cssmenu li').hover(function(){
    $(this).find('ul:first').stop(true,true).slideDown(300).show();
    $(this).addClass('ms_hover');
    $(this).children('a').addClass('ms_hover');
    level++;
  },function(){
    $(this).find('ul:first').stop(true,true).slideUp(200);
    $(this).removeClass('ms_hover');
    $(this).children('a').removeClass('ms_hover');
    level--;
  });
});