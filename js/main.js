$(document).ready(function() {

//scroll-animado

	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, 'easeInOutExpo');
	        return false;
	      }
	    }
	  });
	});

$('.menuLink').click(function() {
	// $('#navbar').dropdown('toggle')
	//$('.navbar-collapse').collapse('hide');
	// if($('.navbar-header .navbar-toggle').css('display') !='none'){
 //            $(".navbar-header .navbar-toggle").trigger( "click" );
 //        }
});

});





