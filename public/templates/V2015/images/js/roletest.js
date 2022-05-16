var currentIndex=0;
var totalQuestionNum=10;
var answerArray=[];
var questionArray=[];
function initQuestion()
{
	questionArray=[];	
	var count=0;
	while(count<10)
	{
		var randomIndex=Math.ceil(Math.random()*35);
		var isSame=false;
		for(var i=0;i<questionArray.length;i++)
		{
			if(questionArray[i]=="q"+randomIndex)
			{
				isSame=true;
			}
		}
		if(!isSame)
		{
			var str="q"+randomIndex;
			questionArray.push(str);
			count++;
		}
	}
}

function closeUI()
{
	$(".testResult .share").hide();
	$(".m-roleTestPop .cnt").show();
	$(".m-roleTestPop .startTest").show();
	$(".m-roleTestPop .testItem").hide();
	$(".m-roleTestPop .testResult").hide();
	$(".pop_mask").hide();

}

$(function () {
	$(".testResult .share").hide();
	$(".startBtn").click(function(){
		initQuestion();
		currentIndex=0;
		$(".startTest").hide();
		$(".testItem").show();
		var key=questionArray[currentIndex];
		answerArray=[];
		$(".testItem .question .txt").html(qa[key].question);
		$(".testItem .question .num").html(currentIndex+1);

	})

	$(".yes").click(function(){
		if(currentIndex<totalQuestionNum-1)
		{
			var key=questionArray[currentIndex];
			answerArray=answerArray.concat(qa[key].yes);
			nextQuestion();
		}
		else
		{
			checkResult();
		}
	})

	$(".no").click(function(){
		if(currentIndex<totalQuestionNum-1)
		{
			var key=questionArray[currentIndex];
			answerArray=answerArray.concat(qa[key].no);
			nextQuestion();
		}
		else
		{
			checkResult();
		}
	})

	$(".testAgain").click(function(){
		currentIndex=0;		
		answerArray=[];
		initQuestion();
		var key=questionArray[currentIndex];
		$(".testItem .question .txt").html(qa[key].question);
		$(".testItem .question .num").html(currentIndex+1);
		$(".m-roleTestPop .cnt").show();
		$(".m-roleTestPop .testResult").hide().removeClass("a b c d e f");
		$(".testResult .share").hide();
	})

	$(".pop_mask").click(function(){
		$(".pop_mask").hide();
	})

	$(".s5").click(function(){
		$(".pop_mask img").attr("src","http://res.nie.netease.com/tianyu/qt/15/roletest_0112/m/images/"+role+".png");
		$(".pop_mask").show();
	})

})
var role;
function checkResult()
{
	var countA=0;
	var countB=0;
	var countC=0;
	var countD=0;
	var countE=0;
	var countF=0;	
	var max=0;
	for(var i=0;i<answerArray.length;i++)
	{
		switch(answerArray[i])
		{
			case "a":
				countA++;
			break;
			case "b":
				countB++;
			break;
			case "c":
				countC++;
			break;
			case "d":
				countD++;
			break;
			case "e":
				countE++;
			break;
			case "f":
				countF++;
			break;
		}

	}
	if(countA>countB)
	{
		max=countA;
		role="a";
	}
	else
	{
		max=countB;
		role="b";
	}
	if(countC>max)
	{
		max=countC;
		role="c";
	}
	if(countD>max)
	{
		max=countD;
		role="d";
	}
	if(countE>max)
	{
		max=countE;
		role="e";
	}
	if(countF>max)
	{
		max=countF;
		role="f";
	}
	showResult(role);
}

function showResult(role)
{
	$(".m-roleTestPop .cnt").hide();
	$(".m-roleTestPop .testResult").removeClass("a b c d e f").show().addClass(role).find(".result .p1 b").html(roleInfo[role].name);
	$(".m-roleTestPop .testResult .result .p2").html(roleInfo[role].info);
	$(".m-roleTestPop .more").attr("href",roleInfo[role].url);
	var shareUrl1=shareApi(2,shareTextObject[role][0],encodeURIComponent(shareTextObject[role][1]),shareTextObject[role][2]);
	var shareUrl2=shareApi(0,shareTextObject[role][0],encodeURIComponent(shareTextObject[role][1]),shareTextObject[role][2]);
	var shareUrl3=shareApi(1,shareTextObject[role][0],encodeURIComponent(shareTextObject[role][1]),shareTextObject[role][2]);
	$(".testResult .s1").attr("href",shareUrl1);
	$(".testResult .s2").attr("href",shareUrl2)
	$(".testResult .s3").attr("href",shareUrl3)
	//yixin
	// shareData.
	shareData.pic=roleInfo[role].shareIcon;
	shareData.title=roleInfo[role].shareTitle;
	shareData.desc=roleInfo[role].shareTxt;
	var shareUrl4=shareToYixin(shareData);
	$(".testResult .s4").attr("href",shareUrl4);
	$(".testResult .share").show();
	pgcheck_code("role_pc="+role);
}

function nextQuestion()
{
	currentIndex++;
	var key=questionArray[currentIndex];
	$(".testItem .question .txt").html(qa[key].question);
	$(".testItem .question .num").html(currentIndex+1);
}


var qa={
	q1:{
		question:"你是一个热血好战的人！",
		yes:["a","b","e"],
		no:["c","d","f"]
	},
	q2:{
		question:"你总是团队中的中坚领袖，守卫团队抵御攻击！",
		yes:["a"],
		no:["c","d","f","b","e"]
	},
	q3:{
		question:"比起进攻，你更喜欢保护队友，做团队的守护者！",
		yes:["d","f"],
		no:["a","b","c","e"]
	},
	q4:{
		question:"在以往，你都是铜墙铁壁，身先士卒的那一个。",
		yes:["a"],
		no:["b","c","d","e","f"]
	},
	q5:{
		question:"相比武力，你更喜欢用智慧及神力操控星罗万象的力量。",
		yes:["c","f"],
		no:["a","b","e","d"]
	},
	q6:{
		question:"对比坚毅硬朗，你更喜欢潇洒风流的外表。",
		yes:["e","f","b"],
		no:["a","d","c"]
	},
	q7:{
		question:"相比稳扎稳打，你更倾向于快速解决对手！",
		yes:["b","c","e"],
		no:["a","d","f"]
	},
	q8:{
		question:"你喜欢在远处攻击敌人。",
		yes:["c","d","e","f"],
		no:["a","b"]
	},
	q9:{
		question:"你是个热爱宠物的人，喜欢萌萌哒。",
		yes:["d"],
		no:["a","b","c","e","f"]
	},
	q10:{
		question:"面对死亡，你总能默默接受。",
		yes:["a","b"],
		no:["c","d","e","f"]
	},
	q11:{
		question:"你在异性面前具有很强的吸引力。",
		yes:["b","c","e","f"],
		no:["a","d"]
	},
	q12:{
		question:"你喜欢单打独斗，不喜欢以多打少。",
		yes:["b","e"],
		no:["a","e","f","c"]
	},
	q13:{
		question:"每次战斗时你总是被集火的那个。",
		yes:["c","e","f"],
		no:["a","b","d"]
	},
	q14:{
		question:"团队输出，你总是不可或缺的。",
		yes:["b","c","e"],
		no:["a","d","f"]
	},
	q15:{
		question:"你是一个控制欲望非常强烈的人。",
		yes:["c","f"],
		no:["a","b","e","d"]
	},
	q16:{
		question:"充满挑战的事情总是最令人兴奋的。",
		yes:["b","f"],
		no:["a","c","d","e"]
	},
	q17:{
		question:"行医济世拯救苍生，实乃乐事也。",
		yes:["d","f"],
		no:["a","b","c","e"]
	},
	q18:{
		question:"剑气纵横，要的就是那种驭剑、绝世高手的感觉！",
		yes:["b","c"],
		no:["a","d","e","f"]
	},
	q19:{
		question:"战斗时，你总能灵活穿梭于千军万马之间。",
		yes:["b"],
		no:["a","c","d","e","f"]
	},
	q20:{
		question:"你极度渴望自由，讨厌形形色色的约束。",
		yes:["b","e","f"],
		no:["a","d","c"]
	},
	q21:{
		question:"没有什么是可值得留恋的，人终有一死。",
		yes:["b","f"],
		no:["a","c","d","e"]
	},
	q22:{
		question:"神秘、两面性，都是你身上最显而易见的标签。",
		yes:["f"],
		no:["a","b","c","d","e"]
	},
	q23:{
		question:"你经常扭转战场的局势。",
		yes:["a","f"],
		no:["b","c","d","e"]
	},
	q24:{
		question:"你崇拜仙人一般的生活，最好不食人间烟火。",
		yes:["c","f","d"],
		no:["a","b","e"]
	},
	q25:{
		question:"幻想对我来说从来都是多余的，我喜欢实际的东西。",
		yes:["a","b","f"],
		no:["c","d","e"]
	},
	q26:{
		question:"世间万物都是会说话的，只是你需要用心倾听。",
		yes:["d","f"],
		no:["a","b","c","e"]
	},
	q27:{
		question:"敢爱敢恨，做事毅然决然。",
		yes:["b","e","f"],
		no:["a","d","c"]
	},
	q28:{
		question:"比起进攻，你更喜欢保护队友，做团队的守护者！",
		yes:["a","b","f"],
		no:["b","c","e"]
	},
	q29:{
		question:"喜欢对大片的敌人造成高伤害和限制。",
		yes:["c"],
		no:["a","b","d","e","f"]
	},
	q30:{
		question:"喜欢远程输出且伤害高，但生命较为脆弱的角色。",
		yes:["c","e"],
		no:["a","b","d","f"]
	},
	q31:{
		question:"喜欢幻想，有梦就会成真！",
		yes:["c","d","e"],
		no:["a","b","f"]
	},
	q32:{
		question:"凡事要谨慎，不能欠考虑鲁莽而行！",
		yes:["c","d","e"],
		no:["a","b","f"]
	},
	q33:{
		question:"攻击固然重要，但亦求自保能力强。",
		yes:["d","f"],
		no:["a","b","c","e"]
	},
	q34:{
		question:"追击到底！敌人总是逃脱不了我的手掌！",
		yes:["e"],
		no:["a","b","c","d","f"]
	},
	q35:{
		question:"我是游戏高手，喜欢难度高的挑战！",
		yes:["b","c","f"],
		no:["a","b","d"]
	}


}
//圣堂A 光刃B 玉虚C 灵珑D 炎天E 流光F
roleInfo={
	a:{
		name:"圣堂",
		info:"圣堂，忠于信仰的铁血守护者。 自五帝纪元起，圣堂弟子便向黄帝起誓，甘愿以雷霆炼体，以自身的鲜血与勇气守护文明。圣堂永远不懂“独善其身”，只会尽一切努力惩恶扶弱。正因如此，在数百年后的今日，圣堂仍然是夏大陆人民最信任的忠毅之师。",
		url:"http://tianyu.163.com/role/shengtang.html",
		shareIcon:"http://res.nie.netease.com/tianyu/qt/15/roletest_0112/m/images/st_icon.jpg",
		shareTxt:"圣堂，忠于信仰的铁血守护者。亲们快来测试一下你适合的职业吧！来和我一起畅玩",
		shareTitle:"原来在《天谕》里我适合的职业是“圣堂”！"
	},
	b:{
		name:"光刃",
		info:"光刃，以武悟道的战神继承人。五帝纪元末，白帝为止乱世之战掷下巨剑，其追随者从中继承了战神武技。期间百年，光刃门人逐渐从中领悟到人剑合一的武道所在，从而成为云垂的武道大家，修武者门派的翘楚。",
		url:"http://tianyu.163.com/role/guangren.html",
		shareIcon:"http://res.nie.netease.com/tianyu/qt/15/roletest_0112/m/images/gr_icon.jpg",
		shareTxt:"光刃，以武悟道的战神继承人。亲们快来测试一下你适合的职业吧！来和我一起畅玩",
		shareTitle:"原来在《天谕》里我适合的职业是“光刃”！"
	},
	c:{
		name:"玉虚",
		info:"玉虚，超然世外的沉静星宿师。 五帝纪元时，青帝在玉虚峰向人类传授星辰法则。 玉虚尝试以剑为媒，引动日、月和星三曜之力， 称为“三曜入剑”。百年之间， 玉虚专注于炼剑悟星，以出尘之姿，翩然行走于世间，坚守着传承于青帝、 除魔卫道的千年信念。",
		url:"http://tianyu.163.com/role/yuxu.html",
		shareIcon:"http://res.nie.netease.com/tianyu/qt/15/roletest_0112/m/images/yx_icon.jpg",
		shareTxt:"原来在《天谕》里我适合的职业是“玉虚”！玉虚，超然世外的沉静星宿师。亲们快来测试一下你适合的职业吧！来和我一起畅玩",
		shareTitle:"原来在《天谕》里我适合的职业是“玉虚”！"
	},
	d:{
		name:"灵珑",
		info:"灵珑，与灵兽为伴的生机散播者。五帝纪元之初，灵珑在祖龙许可下，与灵界建立互助盟约，成为人类与灵界间交流的纽带。纯净包容的心灵，让灵珑能够与灵兽和植物结下契约，获得与众不同的力量。灵珑可以救人，亦可伤人，但始终不变的， 是灵珑温柔守护的心意。",
		url:"http://tianyu.163.com/role/linglong.html",
		shareIcon:"http://res.nie.netease.com/tianyu/qt/15/roletest_0112/m/images/ll_icon.jpg",
		shareTxt:"原来在《天谕》里我适合的职业是“灵珑”！灵珑，与灵兽为伴的生机散播者。亲们快来测试一下你适合的职业吧！来和我一起畅玩",
		shareTitle:"原来在《天谕》里我适合的职业是“灵珑”！"
	},
	e:{
		name:"炎天",
		info:"炎天，造物悟火的天才枪械家。 五帝纪元后，炎天从赤帝留下的神器火种中，发现了不同寻常的力量。通过对火种的研究，炎天开始验证对火药和机械的理解，终于创造出超越时代的武器。但炎天不会止步于此，不断追求机械造物术的巅峰，才是炎天的信仰。",
		url:"http://tianyu.163.com/role/yantian.html",
		shareIcon:"http://res.nie.netease.com/tianyu/qt/15/roletest_0112/m/images/yt_icon.jpg",
		shareTxt:"炎天，造物悟火的天才枪械家。亲们快来测试一下你适合的职业吧！来和我一起畅玩",
		shareTitle:"原来在《天谕》里我适合的职业是“炎天”！"
	},
	f:{
		name:"流光",
		info:"流光，监控着魂界和人界能量的平衡。魂界女皇在人界选中的使者，也是夏大陆上最好的刑讯者，因为他们可以直接拷问灵魂，而灵魂是不会说谎的。灵魂的技巧需要施法者自身保持不被迷惑的清醒，因此流光也必须保持着淡漠的感情，冷眼看待世间，很多时候连他们自己都不清楚自己是否还活着。",
		url:"http://tianyu.163.com/role/liuguang.html",
		shareIcon:"http://res.nie.netease.com/tianyu/qt/15/roletest_0112/m/images/lg_icon.jpg",
		shareTxt:"流光，魂界女皇在人界选中的使者。亲们快来测试一下你适合的职业吧！来和我一起畅玩",
		shareTitle:"原来在《天谕》里我适合的职业是“流光”！"
	}
}
var shareObject={
	img:"",
	content:"",
	url:""
}
//圣堂A 光刃B 玉虚C 灵珑D 炎天E 流光F
var shareTextObject={
	a:["http://res.nie.netease.com/tianyu/qt/15/roletest_0112/pc/images/share_st.jpg","原来在《天谕》里我适合的职业是“圣堂”！圣堂，忠于信仰的铁血守护者。亲们快来测试一下你适合的职业吧！来和我一起畅玩#天谕#！#天谕职业测试#http://tianyu.163.com/zlz",window.location.href+"?from=share"],
	b:["http://res.nie.netease.com/tianyu/qt/15/roletest_0112/pc/images/share_gr.jpg","原来在《天谕》里我适合的职业是“光刃”！光刃，以武悟道的战神继承人。亲们快来测试一下你适合的职业吧！来和我一起畅玩#天谕#！#天谕职业测试#http://tianyu.163.com/zlz",window.location.href+"?from=share"],
	c:["http://res.nie.netease.com/tianyu/qt/15/roletest_0112/pc/images/share_yx.jpg","原来在《天谕》里我适合的职业是“玉虚”！玉虚，超然世外的沉静星宿师。亲们快来测试一下你适合的职业吧！来和我一起畅玩#天谕#！#天谕职业测试#http://tianyu.163.com/zlz",window.location.href+"?from=share"],
	d:["http://res.nie.netease.com/tianyu/qt/15/roletest_0112/pc/images/share_ll.jpg","原来在《天谕》里我适合的职业是“灵珑”！灵珑，与灵兽为伴的生机散播者。亲们快来测试一下你适合的职业吧！来和我一起畅玩#天谕#！#天谕职业测试#http://tianyu.163.com/zlz",window.location.href+"?from=share"],
	e:["http://res.nie.netease.com/tianyu/qt/15/roletest_0112/pc/images/share_yt.jpg","原来在《天谕》里我适合的职业是“炎天”！炎天，造物悟火的天才枪械家。亲们快来测试一下你适合的职业吧！来和我一起畅玩#天谕#！#天谕职业测试#http://tianyu.163.com/zlz",window.location.href+"?from=share"],
	f:["http://res.nie.netease.com/tianyu/qt/15/roletest_0112/pc/images/share_lg.jpg","原来在《天谕》里我适合的职业是“流光”！流光，魂界女皇在人界选中的使者。亲们快来测试一下你适合的职业吧！来和我一起畅玩#天谕#！#天谕职业测试#http://tianyu.163.com/zlz",window.location.href+"?from=share"]
}
//分享代码
function shareApi(target, img, content, url) {
    switch (target) {
        case 0:
            return "http://v.t.sina.com.cn/share/share.php?pic=" + img + "&title=" + content + "&url=" + url + "&rcontent=";
        case 1:
            return "http://v.t.qq.com/share/share.php?title=" + content + "&pic=" + img + "&url=" + url;
        case 2:
            return "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=" + content + "&pics=" + img + "&url=" + url;
        case 3:
            return "http://share.renren.com/share/buttonshare.do?title=" + content + "&link=" + url + "&rcontent=";
        case 4:
            return "http://www.kaixin001.com/repaste/share.php?rtitle=" + content + "&rurl=" + url + "&rcontent=";
        case 5:
            return "http://www.douban.com/recommend/?title=" + content + "&url=" + url + "&rcontent=";
        default:
            return "http://v.t.sina.com.cn/share/share.php?pic=" + img + "&title=" + content + "&url=" + url + "&rcontent=";
    }
}

function shareToYixin(_shareData)
{
	var _s=[];
	for(var i in _shareData){
		if(_shareData.hasOwnProperty(i)){
			_shareData[i]!=null&&_s.push(i.toString()+'='+encodeURIComponent(_shareData[i].toString()||''));
		}
	}
	var _url="http://open.yixin.im/share?";
	return (_url+_s.join('&'));
}
var shareData={
	"appkey":"yx3ae08a776bf04178a583cb745fb6aa0c",
	"type":"webpage",
	"title":"原来在天谕我适合这个职业！你呢？",
	"desc":"来跟谕姐做个小测试，让潜意识带你寻找最适合你的《天谕》职业！",
	"pic":"tongyi.jpg",
	"url":"http://tianyu.163.com/2015/roletest/yixin/yixin.html"
}
