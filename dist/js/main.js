jQuery(document).ready(function($){var MqL=1170;moveNavigation();$(window).on('resize',function(){(!window.requestAnimationFrame)?setTimeout(moveNavigation,300):window.requestAnimationFrame(moveNavigation);});$('.cd-nav-trigger').on('click',function(event){event.preventDefault();if($('.cd-main-content').hasClass('nav-is-visible')){closeNav();$('.demo-2').removeClass('is-visible');}else{$(this).addClass('nav-is-visible');$('.cd-primary-nav').addClass('nav-is-visible');$('.cd-main-header').addClass('nav-is-visible');$('.cd-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){$('body').addClass('overflow-hidden');});toggleSearch('close');$('.demo-2').addClass('is-visible');}});$('.cd-search-trigger').on('click',function(event){event.preventDefault();toggleSearch();closeNav();});$('.demo-2').on('swiperight',function(){if($('.cd-primary-nav').hasClass('nav-is-visible')){closeNav();$('.demo-2').removeClass('is-visible');}});$('.nav-on-left .demo-2').on('swipeleft',function(){if($('.cd-primary-nav').hasClass('nav-is-visible')){closeNav();$('.demo-2').removeClass('is-visible');}});$('.demo-2').on('click',function(){closeNav();toggleSearch('close')
$('.demo-2').removeClass('is-visible');});$('.cd-primary-nav').children('.has-children').children('a').on('mouseover',function(event){event.preventDefault();});$('.has-children').children('a').on('mouseover',function(event){if(!checkWindowWidth())event.preventDefault();var selected=$(this);if(selected.next('ul').hasClass('is-hidden')){selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');$('.demo-2').addClass('is-visible');}else{selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');$('.demo-2').removeClass('is-visible');}toggleSearch('close');});$('.go-back').on('click',function(){$(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');});function closeNav(){$('.cd-nav-trigger').removeClass('nav-is-visible');$('.cd-main-header').removeClass('nav-is-visible');$('.cd-primary-nav').removeClass('nav-is-visible');$('.has-children ul').addClass('is-hidden');$('.has-children a').removeClass('selected');$('.moves-out').removeClass('moves-out');$('.cd-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){$('body').removeClass('overflow-hidden');});}function toggleSearch(type){if(type=="close"){$('.cd-search').removeClass('is-visible');$('.cd-search-trigger').removeClass('search-is-visible');$('.demo-2').removeClass('search-is-visible');}else{$('.cd-search').toggleClass('is-visible');$('.cd-search-trigger').toggleClass('search-is-visible');$('.demo-2').toggleClass('search-is-visible');if($(window).width()>MqL&&$('.cd-search').hasClass('is-visible'))$('.cd-search').find('input[type="search"]').focus();($('.cd-search').hasClass('is-visible'))?$('.demo-2').addClass('is-visible'):$('.demo-2').removeClass('is-visible');}}function checkWindowWidth(){var e=window,a='inner';if(!('innerWidth'in window)){a='client';e=document.documentElement||document.body;}if(e[a+'Width']>=MqL){return true;}else{return false;}}function moveNavigation(){var navigation=$('.cd-nav');var desktop=checkWindowWidth();if(desktop){navigation.detach();navigation.insertBefore('.cd-header-buttons');}else{navigation.detach();navigation.insertAfter('.cd-main-content');}}});

'use strict';
var base_url=location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '/web/');

jQuery(document).ready(function() {
  /*suscribe foorm */
  $('.success-message2').hide();
	$('.error-message').hide();
	$('.success-message3').hide();
	$('.error-message2').hide();
     $('#form_sus').submit(function(e) {
		e.preventDefault();
		var form = $(this);
	    var postdata = form.serialize();
	    $.ajax({
	        type: 'POST',
	        url: base_url+'/layouts/subscribe.php',
	        data: postdata,
	        dataType: 'json',
	        success: function(json) {
	            if(json.valid == 0) {
	                $('.success-message2').hide();
	                $('.error-message').hide();
	                $('.error-message').html(json.message);
	                $('.error-message').fadeIn();
	            }else {
	                $('.error-message').hide();
	                $('.success-message2').hide();
	                form.hide();
	                $('.success-message2').html(json.message);
	                $('.success-message2').fadeIn();
	            }
	        }
	    });
	});
     $('#form_sus2').submit(function(e) {
		e.preventDefault();
		var form = $(this);
	    var postdata = form.serialize();
	    $.ajax({
	        type: 'POST',
	        url: base_url+'/layouts/subscribe.php',
	        data: postdata,
	        dataType: 'json',
	        success: function(json) {
	            if(json.valid == 0) {
	                $('.success-message3').hide();
	                $('.error-message2').hide();
	                $('.error-message2').html(json.message);
	                $('.error-message2').fadeIn();
	            }else {
	                $('.error-message2').hide();
	                $('.success-message3').hide();
	                form.hide();
	                $('.success-message3').html(json.message);
	                $('.success-message3').fadeIn();
	            }
	        }
	    });
	});
 });

/* 
 * Documentation JS script
 */
$(function () {
  var slideToTop = $("<div />");
  slideToTop.html('<i class="fa fa-chevron-up"></i>');
  slideToTop.css({
    position: 'fixed',
    top: '20px',
    right: '25px',
    width: '40px',
    height: '40px',
    color: '#eee',
    'font-size': '',
    'line-height': '40px',
    'text-align': 'center',
    'background-color': 'rgb(22, 128, 185)',
    cursor: 'pointer',
    'border-radius': '5px',
    'z-index': '99999',
    opacity: '.9',
    'display': 'none'
  });
  slideToTop.on('mouseenter', function () {
    $(this).css('opacity', '1');
  });
  slideToTop.on('mouseout', function () {
    $(this).css('opacity', '.7');
  });
  $('body').append(slideToTop);
  $(window).scroll(function () {
    if ($(window).scrollTop() >= 150) {
      if (!$(slideToTop).is(':visible')) {
        $(slideToTop).fadeIn(500);
      }
    } else {
      $(slideToTop).fadeOut(500);
    }
  });
  $(slideToTop).click(function () {
    $("body").animate({
      scrollTop: 0
    }, 500);
  });
  $(".sidebar-menu li:not(.treeview) a").click(function () {
    var $this = $(this);
    var target = $this.attr("href");    
    if (typeof target === 'string') {
      $("body").animate({
        scrollTop: ($(target).offset().top) + "px"
      }, 500);
    }
  });
  //Skin switcher
  var current_skin = "skin-blue";
  $('#layout-skins-list [data-skin]').click(function(e) {
    e.preventDefault();
    var skinName = $(this).data('skin');
    $('body').removeClass(current_skin);
    $('body').addClass(skinName);
    current_skin = skinName;
  });
});