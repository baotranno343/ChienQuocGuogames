$(function(){
	$('body').append($('<div id="backToTop"><a href="javascript:void(0);">回到顶部</a><div class="bt_bg"></div></div>').hide(0));
    $(window).scroll(function(){
        $('#backToTop').show();
        if ($(document).scrollTop() != 0) 
            $('#backToTop').show();
        else 
            $('#backToTop').hide();
    });
    $('#backToTop a').click(function(){
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
	//顶部导航
	// $(".menuNav").bind('mouseover',function(){
	// 	$('.header').addClass('header_hover');
	// 	$('ul.subNav').show();
	// }).bind('mouseleave',function(){
	// 	$('.header').removeClass('header_hover');
	// 	$('ul.subNav').hide();
	// });
	$(".subNav").bind('mouseover',function(){
		$('.header').addClass('header_hover');
		$('ul.subNav').show();
	}).bind('mouseleave',function(){
		$('.header').removeClass('header_hover');
		$('ul.subNav').hide();
	});
	  
	 
	
	//解决奇像素背景错位BUG
	function oddPxBug(){
	  var w_w = $(window).width();
	  //alert(w_w);
	  if( w_w%2 ){
		  $('html').width(w_w-1);
	  }else{
		  $('html').width("auto");  
	  }
	}
	oddPxBug();
	$(window).resize(function(){oddPxBug();}); 
    //延时加载页面图片。
	$('img[data-src]').live('inview', function(event, isVisible) {
	  if (!isVisible) { return; }
	  var img = $(this);
	  // Show a smooth animation
	  img.css('opacity', 0);
	  img.load(function() { img.animate({ opacity: 1 }, 500); });
	  // Change src
	  img.attr('src', img.attr('data-src'));
	  // Remove it from live event selector
	  img.removeAttr('data-src');
	});
})