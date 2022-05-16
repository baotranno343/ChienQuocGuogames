/**
 * Created by hzwangshuyan on 2015/4/7.
 */
var navRender=(function(navrender){
	navrender.id= GetQueryString("tid") || 1;
	navrender.extid= GetQueryString("extid") || 1;
	navrender.subid= GetQueryString("subid");

	navrender.extBindE=function(ele){
		ele.delegate("li","click",function(e){
			var subnav=$(this).find(".s-subnav") || null;
			var $e=$(e.target);
			if($e.is('a.subnav')){
				if($(this).is(".active")){
					$(this).removeClass("active");
				}else{
					$(this).addClass("active");
					$(this).siblings().removeClass("active");
				}
				if(subnav){
					if(subnav.is(":visible")){
						subnav.slideUp();
						$(this).find('a').addClass("wtb");
					} else{
						subnav.slideDown();
						$(this).find('a').removeClass("wtb");
					}
				}
				$(this).siblings().find(".s-subnav").slideUp();
				$(this).siblings().find('a').addClass("wtb");
			}
		});
	};

	navrender.rendererNav=function(navele,subele,positon){
		/* url 参数静态化 */
		var id=this.id;
		var extid=this.extid;
		var subtid=this.subid;
		var navdata=this.navData;
		if(navdata[id][extid].length>1 && !subtid){  subtid= 1;  }
		var urltext=navdata[id][0][1];//英文索引
		/* 一级nav 渲染 */
		var navHtml='';
		for(var a=1,nl=this.navData.length; a<nl;a++){
			var navclass='';
			if(a===1){ navclass='first'}
			if(a===nl-1){ navclass='last'}
			if(typeof navdata[a][0][3]==='object' && (navdata[a][0][3] instanceof  Array)===true){
				navHtml+='<li>'+'\n'+
				'<a  class="'+navclass+'"  href="'+this.host+'&tid='+a+'&extid='+navdata[a][0][3][0]
				+'&subid='+navdata[a][0][3][1]+'&id='+navdata[a][0][1]+'"><span class="num">'+a+'</span><span class="navunit"><span class="navunitcn">'+navdata[a][0][0]+'</span> <span class="navuniten">'+navdata[a][0][2]+'</span> </span></a>'+'\n'+
				'</li>';
				continue;
			}
			navHtml+='<li>'+'\n'+
			'<a  class="'+navclass+'"  href="'+this.host+'&tid='+ a+'&id='+navdata[a][0][1]+'"><span class="num">'+a+'</span><span class="navunit"><span class="navunitcn">'+navdata[a][0][0]+'</span> <span class="navuniten">'+navdata[a][0][2]+'</span> </span></a>'+'\n'+
			'</li>';
		}
		navele.append(navHtml);
		navele.children('li:eq(' +parseInt(id-1) +')').addClass("active");

		/* 二级渲染 */
		var subNavHtml='';
		for(var i=1,l=navdata[id].length; i<l; i++){
			var ahtml='',subhtml='',subdisplay='',hassub='';
			// 确定当前项
			if(extid==i){
				hassub='active';
				subdisplay='style="display:block"';
			}else{
				hassub='';
			}
			//如果有三级导航,循环渲染三级导航，如果没有则给与链接
			if(navdata[id][i].length>1){
				var wtb=' wtb';
				if(extid===i){
					wtb='';
				}
				ahtml='<a class="subnav'+wtb+'">'+navdata[id][i][0]+'<b class="hassub"></b></a>';
				for(var j=1,sl=navdata[id][i].length;j<sl; j++){
					// 确定当前项
					var sunact='';
					if(extid==i && subtid==j){
						sunact=' '+'active';
					}
					// 三级导航循环体
					// 特殊页面
					if(typeof navdata[id][i][j]==='object' && (navdata[id][i][j] instanceof Array)){
					subhtml+='<a class="sunit'+sunact+'" href="'+this.host+'&tid='+id+'&extid='+i+'&subid='+j+'&id='+navdata[id][i][j][1]+'"><span>'+navdata[id][i][j][0]+'</span></a>';
					continue;
					}
					if(id==4)
					switch(navdata[id][i][j]){
						case '禁卫军':subhtml+='<a class="sunit'+sunact+'" href="/special/menpai/jwj.html" target="_blank"><span>'+ navdata[id][i][j]+'</span></a>';continue;
						case '昆仑山':subhtml+='<a class="sunit'+sunact+'" href="/special/menpai/kls.html" target="_blank"><span>'+ navdata[id][i][j]+'</span></a>';continue;
						case '茅山':subhtml+='<a class="sunit'+sunact+'" href="/special/menpai/ms.html" target="_blank"><span>'+ navdata[id][i][j]+'</span></a>';continue;
						case '唐门':subhtml+='<a class="sunit'+sunact+'" href="/special/menpai/tm.html" target="_blank"><span>'+ navdata[id][i][j]+'</span></a>';continue;
						case '蜀山':subhtml+='<a class="sunit'+sunact+'" href="/special/menpai/ss.html" target="_blank"><span>'+ navdata[id][i][j]+'</span></a>';continue;
						case '桃花源':subhtml+='<a class="sunit'+sunact+'" href="/special/menpai/thy.html" target="_blank"><span>'+ navdata[id][i][j]+'</span></a>';continue;
						case '云梦泽':subhtml+='<a class="sunit'+sunact+'" href="/special/menpai/ymz.html" target="_blank"><span>'+ navdata[id][i][j]+'</span></a>';continue;
					}
					// 职业测试的特殊页面
					if(id==2 && i===1 && j===1){
						subhtml+='<a class="sunit'+sunact+'"  href="javascript:openroletest()"><span>'+navdata[id][i][j]+'</span></a>';
						continue;
					}
					subhtml+='<a class="sunit'+sunact+'" href="'+this.host+'&tid='+id+'&extid='+i+'&subid='+j+'&id='+navdata[id][i][0]+'"><span>'+navdata[id][i][j]+'</span></a>'
				}
				subhtml='<div class="s-subnav"'+subdisplay+'>'+ subhtml +"</div>"
			}else{
				ahtml='<a  class="subnav wtb" href="'+this.host+urltext+'-'+i+'-'+1+'.html">'+navdata[id][i][0]+'</a>'
			}
			// 二级导航循环体
			if(typeof navdata[id][i][0]==='object' && (navdata[id][i][0] instanceof Array)===true && navdata[id][i][0][1]===0){
				hassub+=' f-dn';
			}
			subNavHtml+='<li class="'+hassub+'">'+ ahtml+subhtml+'</li>';
		}
		subele.append(subNavHtml);

		/*  位置确定 */
		var p1=typeof navdata[id][0][0]==='string' ? navdata[id][0][0] : ' ' ;
		var p2=typeof navdata[id][extid][0]==='string' ? navdata[id][extid][0] : ' ' ;
		var p3=typeof navdata[id][extid][subtid]==='object' ? navdata[id][extid][subtid][0] : navdata[id][extid][subtid];
		positon.append(((id?id:'') && '/<span>'+p1+'</span>')+((extid?extid:'') && '/<span>'+p2+'</span>' )+((subtid?subtid:'') && '/<span>'+p3+'</span>'));

		this.extBindE(subele);
	};
	return navrender;
})(window.navrender || {});

/* 二级导航渲染 */
navRender.rendererNav($('.m-navwrap'),$('.m-subnav'),$('.m-navpositon'));
/* 页面布局 */
function resizeWin(){
	$(".g-wrap,.g-main").css("min-height",$(window).height()+"px");
	$(".g-side").css("height",$(window).height()+"px");
}
$(window).bind("load resize",resizeWin);

// 页面标题渲染
var numbig=['〇','一','二','三','四','五','六','七','八','九','十','十一','十二','十三','十四','十五','十六','十七','十八','十九','二十']
$("h2").each(function(){
	var h2t=$(this).index("h2");
	$(this).prepend('<span class="num">' + numbig[h2t+1] +'</span>');
});
/* 序列列表前面加数字 */
$("ol").each(function(){
	var olt=$(this).index("ol");
	var selfli=$("ol").eq(olt).children("li");
	selfli.each(function(){
		$(this).prepend('<span class="num">' + (parseInt($(this).index())+1) +'</span>');
	});
});
/* 右侧导航 */
$(".m-fixedright").delegate('a','click',function(){
	if($(this).index() < 3){
		if($(this).is(".active")){
			$(this).removeClass("active");
		}else{
			$(this).addClass("active").siblings().removeClass("active");
		}
	}else{
		$("html,body").animate({"scrollTop":0},200)
	}
});
/* 职业测试 */
function openroletest(){
	$(".m-opendiv").css({'left':($(window).width()-745)/2+'px','top':($(window).height()-334)/2+$(document).scrollTop()+'px'}).fadeIn(50);
	$('#mask').css({'width':$(window).width()+'px','height':$(document).height()+'px'}).fadeIn(50);
}
$(".opendiv").click(function(){
	openroletest();
});
if(GetQueryString("from")=="share"){
	openroletest();
}
$(".j-close").click(function(){
	closeUI();
	$(".m-opendiv,#mask").fadeOut(100)
});

/* get URL var  */
function GetQueryString(name){
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if(r!=null){
		return  unescape(r[2]);
	}else{
		return null;
	}
}