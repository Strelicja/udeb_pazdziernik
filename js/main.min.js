

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
//add attrybute rel with number of index
        $(this).attr('rel', index+1);
          // if (index == 1)  {
//hide all tabs
            $('.tabsListContentMobile').hide();
            //  $(this).addClass('nowa2');
          //    $(this).show();
          // }
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
        $(this).fadeIn('slow');
      }
    });
    document.body.scrollTop=$('.tabsList ul').offset().top - $(this).height();
    html.documentElement.scrollTop=$('.tabsList ul').offset().top - $(this).height();
});
//Acordion faq

$(".acordionBox").on("click", function() {
var display = $(this).next().css("display");
// console.log(display);
    $(this).next().addClass('showAcordion').slideToggle('slow');
    $(this).addClass('colorAcordion arrowUp').removeClass('arrowDown');

    $(".acordionBox").not(this).next().removeClass('showAcordion').hide();
    $(".acordionBox").not(this).removeClass('colorAcordion arrowUp').addClass('arrowDown');

    if (display=="block") {
      $(this).removeClass('arrowUp').addClass(' arrowDown');
    }
    document.body.scrollTop=$('.titleOferta').offset().top - $(this).height();
    document.documentElement.scrollTop=$('.titleOferta').offset().top - $(this).height();



});
//scroll borderHeader
var $document = $(document),
    $element = $('.borderHeader2'),
    className = 'borderHeaderBox';
$document.scroll(function () {
  $element.toggleClass(className, $document.scrollTop()>=5 ); });


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

//logo mobile link to home
$('.imgLogoMobile').on('click', function () {
  window.location="/";
})



var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
if (iOS) {
    $(".buttonHam").addClass('btn');
    $(subMenuLiArrow).addClass('navbar');
}

// ***** contact form ***** //

var textarea =$('textarea');
var alert = $('.span.wpcf7-not-valid-tip');
var sent = $('input[type=submit]');
var height= '245px';

$(sent).on('click', function () {
  if (alert) {
    $('textarea').addClass('contactHeight');
  }
  else {
    $('textarea').removeClass('contactHeight');
  }
})



 });
