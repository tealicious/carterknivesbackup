jQuery(document).ready(function ( $ ) {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });

var isBreakPoint = function (bp) {
    var bps = [320, 480, 768, 1024],
        w = $(window).width(),
        min, max
    for (var i = 0, l = bps.length; i < l; i++) {
      if (bps[i] === bp) {
        min = bps[i-1] || 0
        max = bps[i]
        break
      }
    }
    return w > min && w <= max
}
if (isBreakPoint(480)) {
    	  $("html, body").css({
    		height: $(window).height()
    		});
}
jQuery(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top-50
	    }, 450, 'swing', function () {
	        window.location.hash = target;
	    });
	});
  $('a[href^="#up"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 450, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});



});
