/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document) {

  'use strict';

  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  Drupal.behaviors.my_custom_behavior = {
    attach: function (context, settings) {

    var amountScrolled = 300;

    $(window).scroll(function() {
	  if ( $(window).scrollTop() > amountScrolled ) {
	    $('a.back-to-top').fadeIn('slow');
	  } 
	  else {
	    $('a.back-to-top').fadeOut('slow'); 
	  }
	  var hehe = $('.footer').height() + 20;
			
	  if ($(window).scrollTop() >= $(document).height() - $(window).height() - hehe) {
	    $('a.back-to-top').css('bottom', hehe);
	  }
	  else{
	    $('a.back-to-top').css('bottom','20px');
	  }

	});

    function scrollToAnchor(aid) {
	  var aTag = $("a[name='"+ aid +"']");
	  $('html,body').animate({scrollTop: aTag.offset().top-40},'slow');
    }

    function showArrow() {
	  resizeArrowWrapper();
	  if ($("#galeria_kertek").is(":visible")) {

	  }
	  else{
	    $('.arrow').stop().fadeIn(100);
	  }

	  return false;
    }

    function resizeArrowWrapper(){
      $('.box').height($( "div.ug-slide2").find("img").height());
      $('.box').width($( "div.ug-slide2").find("img").width());

      var position = $( "div.ug-slide2").find("img").position();

      $(".box").css('top', position.top);
      $(".box").css('left', position.left);
    }

    function hideArrow() {
      $('.arrow').stop().fadeOut(100);
      return false;
    }

    $('#nav a[href="#kerttervezes"').click(function(e) {scrollToAnchor('kerttervezes'); e.preventDefault();});
    $('#nav a[href="#kertepites"').click(function() {scrollToAnchor('kertepites');});
    $('#nav a[href="#kertgondozas"').click(function() {scrollToAnchor('kertgondozas');});
    $('#nav a[href="#ontozorendszer"').click(function() {scrollToAnchor('ontozorendszer');});
    $('#nav a[href="#arak"').click(function() {scrollToAnchor('arak');});
    $('#nav a[href="#magunkrol"').click(function() {scrollToAnchor('magunkrol');});
    $('#nav a[href="#galeria"').click(function() {scrollToAnchor('galeria');});
    $('#nav a[href="#elerhetoseg"').click(function() {scrollToAnchor('elerhetoseg');});

    var tovabb = $('<a class="tovabb" href="#">TOVÁBB...</a>');
	var vissza = $('<a class="vissza" href="#">...VISSZA</a>');
	var pos;
	$(".lead").append(tovabb);
	$(".tartalom > div:last-child").append(vissza);

	$(".tartalom").delay(1800).hide();

	$(".tovabb").click(function() {
		$(this).parents('.menupont').find('.tartalom').show();
		$(this).hide();
		$(this).parents('.menupont').find('.vissza').show();
		$(window).trigger('resize');
		return false;
	})

	$(".vissza").click(function() {
		$(this).parents(".tartalom").hide();
		$(this).hide();	
        $(this).parents('.menupont').find('.tovabb').show();	
	
	  	pos = $(this).parents('.menupont').offset();
	  <!-- /*$('html, body').scrollTop(pos.top);*/ -->
		$("html, body").animate({ scrollTop: pos.top }, "fast");
	
		return false;
	})











}
};

})(jQuery, Drupal, this, this.document);
