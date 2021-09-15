/*global $, jQuery, alert, window*/
$(function () { 
    "use strict";   
// Hide Placeholder On Form Focus
  $('[placeholder]').focus(function () {
    $(this).attr('data-text', $(this).attr('placeholder'));
    $(this).attr('placeholder', '');
  }).blur(function (){
        $(this).attr ('placeholder', $(this).attr('data-text'));
  });
//scroll top     
    var scrollButton = $("#scroll-top");
      $(window).scroll(function () {
    if ( $(this).scrollTop() >= 600 ) { 
      scrollButton.show();
      } else {
    scrollButton.hide();
      }
    });
    scrollButton.click(function () {
      $("html,body").animate({ scrollTop: 0}, 600);
    });
//login and signup    
    $('span.shift').click(function () {
    $(this).addClass('selected').siblings().removeClass('selected');
    $('.login-page form').hide();
    $('.' + $(this).data('class')).fadeIn(100);
    });
 // Add Asterisk On Required Field
	$('input').each(function () {
		if ($(this).attr('required') === 'required') {
			$(this).before('<span class="asterisk">*</span>');
		}
	});
	// Convert Password Field To Text Field On Hover
	var passField = $('.showpass');
	$('.show-pass').hover(function () {
		passField.attr('type', 'text');
	}, function () {
		passField.attr('type', 'password');
	});
    // Trigger The Selectboxit
	$("select").selectBoxIt({
		autoWidth: false
	});
// form control       
    $('.foot-lnk, .click').on("click", function () {
      $('.login-up').toggle("slow"); 
      $('.signup').toggle("slow");
    }); 
// scroll down
$('.header .arrow i').click(function () {
  $('html, body').animate({
    scrollTop: $('.features').offset().top
    }, 1000);
});
// scroll down login
$('#checked').click(function () {
  $('html, body').animate({
    scrollTop: $('.login-page').offset().top
    }, 1000);
});
$('#checked_2').click(function () {
  $('html, body').animate({
    scrollTop: $('.login-page').offset().top
    }, 1000);
});
//confirm massege
$('.confirm').click(function () {
		return confirm('لديك حساب الان للدخول للمنصة يجب عليك تسجيل الدخول  بالاسم وكلمة المرور   ');
    });
});
//moon and sun themes
var color= $(".profile .setting .lis i");
  color.click(function () {
  $("link[href*='theme']").attr("href", $(this).attr("data-value"));
}); 
//master information
$('.master').on("click", function () {
  $(this).next('div').toggle("slow"); 
});   