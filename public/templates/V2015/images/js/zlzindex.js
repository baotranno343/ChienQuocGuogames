/**
 * Created by hzwangshuyan on 2015/4/7.
 */
var navRender=(function(navrender){
	navrender.viewNav=function(ele,sideele){
		var navData=this.navData;
		var html='',sidehtml='';
		for(var i=1,l=navData.length; i<l; i++){
			var navDataExt=navData[i];
			var extnav='';
			for(var j=1,el=navDataExt.length; j<el;j++){
				var navDataSub=navDataExt[j];
				var subnav='';
				for(var k=1,sl=navDataSub.length;k<sl; k++){
					if(typeof navDataSub[k]==='object' &&   (navDataSub[k] instanceof  Array)===true){
							subnav+='<a href="'+this.host+'&tid='+i+'&extid='+j+'&subid='+k+'&id='+ navDataSub[k][1]+'">'+ navDataSub[k][0]+'</a>';
							continue;
					}
					if(i==4)
					switch(navDataSub[k]){
						case '禁卫军':subnav+='<a href="/special/menpai/jwj.html" target="_blank">'+ navDataSub[k]+'</a>';continue;
						case '昆仑山':subnav+='<a href="/special/menpai/kls.html" target="_blank">'+ navDataSub[k]+'</a>';continue;
						case '茅山':subnav+='<a href="/special/menpai/ms.html" target="_blank">'+ navDataSub[k]+'</a>';continue;
						case '唐门':subnav+='<a href="/special/menpai/tm.html" target="_blank">'+ navDataSub[k]+'</a>';continue;
						case '蜀山':subnav+='<a href="/special/menpai/ss.html" target="_blank">'+ navDataSub[k]+'</a>';continue;
						case '桃花源':subnav+='<a href="/special/menpai/thy.html" target="_blank">'+ navDataSub[k]+'</a>';continue;
						case '云梦泽':subnav+='<a href="/special/menpai/ymz.html" target="_blank">'+ navDataSub[k]+'</a>';continue;
					}
					/*弹出测试
					if(i==2 && j===1 && k===1){
						subnav+='<a  href="javascript:openroletest()"" >'+ navDataSub[k]+'</a>';
						continue;
					}
					*/
				}
				var extshow=  typeof navDataExt[j][0]!=='string' ?  'f-dn' : '';
				extnav+='<li class="'+extshow+'">'+
				'<b>'+navDataExt[j][0]+'：</b>'+subnav+
				'</li>'
			}
			html+='<dd>'+
			'<hgroup class="f-cb"><big class="title'+i+'">i</big><h2 class="f-fl">'+navData[i][0][0]+'</h2><small>'+navData[i][0][2] +'</small></hgroup>'+
			'<ul>'+extnav+'</ul>'+
			'</dd>';
			sidehtml+='<a href="javascript:void(0)">'+navData[i][0][0]+'</a>'
		}
		ele.append(html);
		sideele.append(sidehtml)
	};
	return navrender;
})(window.navrender || {});

navRender.viewNav($('.m-zlzlist'),$('.m-nav'));

var nav=(function(navObj){
	navObj.init=function(){
		this.n=0;
		this.offsetTop=[];
		this.scrolltype=true;
		this.review=function(){
			$(".m-nav a").eq(this.n).addClass("active").siblings().removeClass("active");
			$(".m-nav .current").css("background-position","0px "+this.n*32+"px");
		};
		for(var i=0; i<$('.m-zlzlist dd').length; i++){
			this.offsetTop.push($('.m-zlzlist dd').eq(i).offset().top);
		}
		navObj.bindE();
	};

	navObj.bindE=function(){
		var self=this;
		/* 滚动改变 菜单*/
		$(window).bind("load scroll",function(){
			var stval=$(this).scrollTop();
			//console.log(stval)
			if(stval>295){
				if(stval<self.offsetTop[0]){
					self.n=0;
				}else{
					for(var j=0; j<self.offsetTop.length;j++){
						if(stval>self.offsetTop[j] && stval<self.offsetTop[j+1] ){  self.n=j+1; break;}
					}
				}
				if(self.scrolltype===true){
					self.review();
				}
				$(".g-sidenav").addClass("g-sidenav-fixed");
			}else{
				$(".g-sidenav").removeClass("g-sidenav-fixed");
			}
		});

		$(".u-gototop").click(function(){
			$("html,body").animate({scrollTop:0},300);
		});

		$(".m-nav").delegate("a","click",function(e){
			self.n=$(this).index(".m-nav a");
			self.scrolltype=false;
			self.review();
			var t=self.offsetTop[self.n];
			$("html,body").animate({scrollTop:t},300,function(){
				self.scrolltype=true
			});
		});
	};
	return navObj
})(window.navObj || {});
nav.init();


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
var obj={
	title:"",
	desc:"",
	url:""
};
function GetQueryString(name){
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if(r!=null){
		return  unescape(r[2]);
	}else{
		return null;
	}
}