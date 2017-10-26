

$(document).ready( function(){
//Persons Tabs
$('.tabsListTitle').each(function (index, item) {
        $(this).attr('rel', index+1);
          if (index+1 == 1) {
             $(this).addClass('nowa');
          }
    });
$('.tabsListContent').each(function (index, item) {

        $(this).attr('rel', index+1);
          if (index+1 == 1)  {
            $('.tabsListContent').hide();
            //  $(this).addClass('nowa2');
             $(this).show();
          }
    });

$(".tabsListTitle").on("click", function(){
  var rell = $(this).attr('rel');
    $(".tabsListTitle").removeClass("nowa");
     liClass = $(this).addClass("nowa");

    $('.tabsListContent').each(function (index, item) {
      var divy = $(this).attr('rel');
      if (divy == rell) {
        $('.tabsListContent').hide();
        // $(this).addClass('nowa2');
        $(this).show();
      }
    });
});
//Persons Tabs Mobile
$('.tabsListTitleMobile').each(function (index, item) {
        $(this).attr('rel', index+1);
          if (index+1 == 1) {
             $(this).addClass('nowa');
          }
    });
$('.tabsListContentMobile').each(function (index, item) {

        $(this).attr('rel', index+1);
          if (index+1 == 1)  {
            $('.tabsListContentMobile').hide();
            //  $(this).addClass('nowa2');
             $(this).show();
          }
    });

$(".tabsListTitleMobile").on("click", function(){
  var rell = $(this).attr('rel');
    $(".tabsListTitleMobile").removeClass("nowa");
     liClass = $(this).addClass("nowa");

    $('.tabsListContentMobile').each(function (index, item) {
      var divy = $(this).attr('rel');
      if (divy == rell) {
        $('.tabsListContentMobile').hide();
        // $(this).addClass('nowa2');
        $(this).show();
      }
    });
});
//Acordion faq

$(".acordionBox").on("click", function() {
var display = $(this).next().css("display");
// console.log(display);
    $(this).next().addClass('showAcordion').slideToggle('slow');
    $(this).addClass('colorAcordion arrowUp').removeClass('arrowDown');

    $(".acordionBox").not(this).next().removeClass('showAcordion').slideUp('slow');
    $(".acordionBox").not(this).removeClass('colorAcordion arrowUp').addClass('arrowDown');

    if (display=="block") {
      $(this).removeClass('arrowUp').addClass(' arrowDown');

    }
// console.log(this);

});

//******  active submenu  *****////
var navHover = $(".sub-menu").find('li').find('a');
$(navHover).on("mouseenter", function(){
  $(".sub-menu").parent().addClass('hoverNav-menu');
});
$(navHover).on("mouseleave", function(){
  $(".sub-menu").parent().removeClass('hoverNav-menu');
});

// //***** FIXED MENU *****//
// var  mn = $(".site-branding");
//     mns = "main-nav-scrolled";
//
// $(window).scroll(function() {
//     mn.addClass(mns);
// });

//***** TOGGLE MENU MOBILE *****//

var liUlSubmenu = $('.nav>li:nth-child(2)>a')
var subMenuLiArrow = $('.nav>li:nth-child(2)');
var linext =$(liUlSubmenu).next().css('display');

$('.nav>li:nth-child(2)').addClass('arrowsDown ');

//block a href
$('.nav>li:nth-child(2)>a').on("touchstart",function(e) {
    e.preventDefault();
});
//arrows
  $(subMenuLiArrow).on("touchstart", function(e) {
    if ($('.nav>li:nth-child(2)').hasClass('arrowsDown')) {
      $(this).removeClass('arrowsDown').addClass('arrowsUp ');
      $('.nav>li:last-child').addClass('marginLiSubmenu');
    }
    else {
      $(this).removeClass('arrowsUp').addClass('arrowsDown');
      $('.nav>li:last-child').removeClass('marginLiSubmenu');
    }
 });

//***** OPEN HAMBURGER MENU MOBILE *****//

 $(document).ready(function(){
 	$('#nav-icon2').click(function(){
 		$(this).toggleClass('open');
 	});
 });



 });
