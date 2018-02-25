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

    $('#nav a').each(function() {

    	var anchor = $(this).attr('href').substring(1);
    	$(this).click(function() {
    		scrollToAnchor(anchor);
    	})
    })

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

	$('.lev').each(function() {
		$(this).html($(this).data('b') + '&#64;' + $(this).data('a')  + '&#46;' + $(this).data('c'));
	})

	$(".galeria_kertek_open").click(function() {
	
	
	    if ($("#galeria_kertek").is(":visible")){
		$(".galeria_kertek_open").removeClass('kertek_open_hatter');
			$("#galeria_kertek").fadeOut(500);
	    }
		else{
		$(".galeria_novenyek_open").removeClass('novenyek_open_hatter');
		$(".galeria_kertek_open").addClass('kertek_open_hatter');
			$("#galeria_novenyek").hide();
			$("#galeria_kertek").fadeIn(1500);
			$(window).trigger('resize');

		}

		return false;
	})

	$(".galeria_novenyek_open").click(function() {
		if ($("#galeria_novenyek").is(":visible")){
		$(".galeria_novenyek_open").removeClass('novenyek_open_hatter');
			$("#galeria_novenyek").fadeOut(500);
		}
		else{
		
		$(".galeria_novenyek_open").addClass('novenyek_open_hatter');
		$(".galeria_kertek_open").removeClass('kertek_open_hatter');
			$("#galeria_kertek").hide();
			$("#galeria_novenyek").fadeIn(1500);
			$(window).trigger('resize');
			
				
		}	

		return false;
	})

	$("#garden-gallery, #kerttervezes-gallery").unitegallery({
		tile_width:280,
		tile_height:200,
		grid_padding:0,
		grid_num_rows:30,
		tile_overlay_color: "#00bb00",
		tile_enable_border:false,
		tile_enable_shadow:false,	
		lightbox_overlay_color:"#000000",				
		lightbox_overlay_opacity:0.8,	
		lightbox_textpanel_title_font_size:50,
		lightbox_numbers_size:40,
		lightbox_show_textpanel: false,
 	});

 	$("#frontpage-plant-gallery").unitegallery({

		tile_width:280,
		tile_height:200,
		grid_padding:0,
		grid_num_rows:50,
		tile_overlay_color: "#00bb00",
		tile_enable_border:false,
		tile_enable_shadow:false,	
		lightbox_overlay_color:"#000000",				
		lightbox_overlay_opacity:0.8,
		
		lightbox_textpanel_title_font_size:35,
		lightbox_numbers_size:25,
		lightbox_textpanel_title_text_align: "center",
		lightbox_textpanel_desc_text_align:"center",
		lightbox_textpanel_enable_description: true,	
		lightbox_textpanel_enable_title: false,	
		
		lightbox_slider_control_zoom:false,
	});








}
};

})(jQuery, Drupal, this, this.document);
