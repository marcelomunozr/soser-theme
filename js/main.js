
$(document).ready(function(){
	$('#menu li.expand').mouseenter(function(e){
		e.stopPropagation();
		$(this).addClass('active');
		$('.nav li.active ul.sub-menu').css('background','#887257');
		$(this).find('.sub-menu').stop(true, true).fadeIn(200);
		$(this).find('.sub-menu').css({'z-index':'1000'});
	});
	$('#menu li.expand').mouseleave(function(e){
		e.stopPropagation();
		$(this).removeClass('active');
		$(this).find('.sub-menu').stop(true, true).fadeOut(200);
	});
	$('#ver-menu').click(function(){
		$('#menu').slideToggle();
	})
	//ACTIVE URL
	var str=location.href.toLowerCase();
	has_current=false;
	$($(".nav li a").get().reverse()).each(function() {
		if (str.indexOf(this.href.toLowerCase()) > -1 && !has_current) {
		$(this).parents("li.li-class").addClass("current");
		has_current=true;
	}
	});
	$('.nav li.expand.current').parents('.nav').css('margin-bottom','37px');

	if ($('body#rico-y-sano').size()==1) {
		var bg=['/wp-content/themes/soser/images/bg-rico-y-sano.png','/wp-content/themes/soser/images/bg-rico-y-sano-.png'];		
		var i=0;
		setInterval(function(){
			$('body').css('background-image','url("'+bg[i]+'")');
			i=i==0?1:0;
		},900)

	};
})
