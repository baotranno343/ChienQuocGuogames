/*弹出框效果*/
function isExist(elem){
	if(typeof elem !== 'undefined' && typeof elem !== null) {
		return true;
	}else{
		return false;	
	}
}
var ie6 = $.browser.msie && parseInt($.browser.version)<=6 ;
var addOverlay = function(cl, op){		
removeOverlay();
var	overlayCss = {
		position       : 'fixed',
		zIndex         : '20',
		top            : '0px',
		left           : '0px',
		height         : '100%',
		width          : '100%',
		backgroundColor: '#000',
		filter         : 'alpha(opacity=60)',
		opacity        : 0.6
},
overlayCss2 = { //for ie 6
		position : 'absolute',
		height   : $(document).height()
};
var overlay = $('<div id="Overlay" class="OverlayBG" />');		
if(isExist(cl))		overlayCss.backgroundColor = cl;		
$('body').append(overlay.css(overlayCss));		
if(ie6)		overlay.css(overlayCss2);		
if(isExist(op))		$('#Overlay').animate({opacity: op},0);		
}
/*** removeOverlay ***/
var removeOverlay = function(){
	if(isExist($('#Overlay')))		$('#Overlay').remove();
}
/*** popup ***/
function popup(target){
	  addOverlay('#000', 0.8);
	  if(ie6){
		  target.css("position","absolute")
				   .css("top",($(window).height()-target.height())/2 + $(window).scrollTop())
				   .css("left",($(window).width()-target.width())/2+$(window).scrollLeft())
				   .css("z-index","99")
				   .fadeIn();
		  $(window).scroll( function() { 
				target.css("top",($(window).height()-target.height())/2 + $(window).scrollTop())
						  .css("left",($(window).width()-target.width())/2+$(window).scrollLeft())
		   });
	  }
	  else {
		  target.css("position","fixed")
				   .css("top",($(window).height()-target.height())/2)
				   .css("left",($(window).width()-target.width())/2)
				   .css("z-index","99")
				   .fadeIn();
		  
	  }

	  $(".close", target).click(function(){
		  hideMask(target);
		  return false;
	  });
	  
	  $("#Overlay").click(function(){
		  hideMask(target);
	  });
	  
}
/*** close  popup ***/
function hideMask(target){
		removeOverlay();
		target.fadeOut();
		return false;
};
function MovieShow(){
	popup($("#video_player"));
	var v_id = $('#left_video').attr('rel');
	$('#video_player h2').text($('#left_video').attr('title'));
	$('#video_placeholder').flash({
		'src':'gddflvplayer.swf',
		'width':'640',
		'height':'360',
		'allowfullscreen':'true',
		'allowscriptaccess':'always',
		'wmode':'transparent',
		'flashvars': {
			'vdo':v_id,
			'sound':'60',
			'splashscreen':'',
			'autoplay':'true'
		}
	});
	return false;		
}