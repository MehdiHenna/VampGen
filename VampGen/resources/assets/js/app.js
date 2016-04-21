$(document).ready(function (){
	console.log('hello !');
	$('.vg-button').each(function(){
		$(this).append("<div class='ripple'></div>");
	});
	$('.vg-button').click(function(e){
		var $clicked = $(this);

		var offset = $clicked.offset();
		var relativeX = (e.pageX - offset.left);
		var relativeY = (e.page - offset.top);
		var width = $clicked.width();
		var $ripple = $clicked.find('.ripple');

		$ripple.addClass('notransition');
		$ripple.css({'top': relativeY, 'left': relativeX});
		$ripple[0].offsetHeight;
		$ripple.removeClass('notransition');

		$clicked.addClass("hovered");
		$ripple.css({ "width": width*2, "height": width*2, "margin-left": -width, "margin-top": -width });

		setTimeout(function(){
          $ripple.addClass("notransition");
          $ripple.attr("style", "");
          $ripple[0].offsetHeight;
          $clicked.removeClass("hovered");
          $ripple.removeClass("notransition");
      }, 300 );
	});
});