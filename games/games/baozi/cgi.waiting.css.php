<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta name="description" content="你访问的页面找不回来了，但是我们可以一起寻找失踪宝贝">
<meta name="description" content="公益404页面是由腾讯公司员工志愿者自主发起的互联网公益活动。">
<meta name="description" content="腾讯志愿者是腾讯公司内部员工为响应公司做“最受人尊敬的互联网企业”的号召，自发组织成立的腾讯志愿者协会。2012年成立腾讯志愿者技术分会，开展404公益计划，无障碍产品推动等，结合腾讯产品、技术平台，开展公益帮扶。">
<title>腾讯游戏温馨提示</title>
<!-- 设计：suxichen | 重构：dgguo | 创建：20120920 | 更新：20130123 | 团队博客：http://tgideas.qq.com -->
<style>
html,body{height:100%;}
*{margin:0;padding:0;}
body{display:none;font:normal 12px/18px Tahoma,"simsun","Microsoft Yahei";background:#FFFFFF;color:#858383;-webkit-text-size-adjust:none;}
ul{list-style:none;}
a{text-decoration:none;color:#FFFFFF;cursor:pointer;}
a:hover{text-decoration:underline;}
img{border:none;display:block;}
.hidden{height:0;display:block;overflow:hidden;}
.m0a{margin:0 auto;}
.fl{float:left;}
.fr{float:right;}
.hlh16{height:16px;line-height:16px;}
.c0E9{color:#0E97DD;}
.pa{position:absolute;bottom:0;left:0;}
.spr{display:block;background:url(http://ossweb-img.qq.com/images/game/404/gy/sprites.png) no-repeat;}
.wrap{width:670px;height:625px;overflow:hidden;padding:20px 0;}
.info{border:1px solid #D5D5D5;vertical-align:top;_zoom:1;}
.lost{padding:20px 30px;overflow:hidden;_zoom:1;}
.lost-img{width:115px;padding:5px;border:1px solid #E0E0E0;}
.error{width:465px;}
.error-desc{padding:5px 0 10px 0;font:bold 18px/24px "Microsoft Yahei";}
.other{border-top:1px solid #D5D5D5;background:#F6F6F6;overflow:hidden;_zoom:1;}
.other-lnk{height:49px;}
.lnk1{width:48px;background-position:0 -93px;}
.lnk2{width:105px;background-position:-48px -93px;}
.other-lst{padding:10px 20px;}
.other-bdr{border-left:1px solid #D5D5D5;}
.return{width:123px;height:43px;margin:5px 0 0 0;}
.sns{padding:15px 0;overflow:hidden;}
.sns-title{font-size:12px;font-weight:normal;}
.sns-lnk{width:16px;height:16px;margin:0 0 0 5px;overflow:hidden;}
.lnk-qzone{background-position:-153px -93px;}
.lnk-weibo{background-position:-169px -93px;}
.lnk-qq{background-position:-185px -93px;}
.lnk-sina{background-position:-201px -93px;}
.lnk-kaixin{background-position:-217px -93px;}
.lnk-renren{background-position:-233px -93px;}
.footer{width:100%;height:120px;padding:25px 0 0 0;color:#FFFFFF;}
.foot-box{width:780px;}
.logo{width:142px;height:50px;}
.footer-info{width:612px;line-height:20px;white-space:nowrap;}
.gap{padding:0 10px;font-size:9px;}
.spring .return{background-position:0 0;}
.spring .footer{background:#7BB801 url(http://ossweb-img.qq.com/images/game/404/gy/footer-spring.png) no-repeat center 0;}
.spring .logo{background-position:0 -43px;}
.spring .error-desc{color:#786B4D;}
.spring .color{color:#7BB801;}
.summer .return{background-position:-123px 0;}
.summer .footer{background:#FCBD00 url(http://ossweb-img.qq.com/images/game/404/gy/footer-summer.png) no-repeat center 0;}
.summer .logo{background-position:-142px -43px;}
.summer .error-desc{color:#787443;}
.summer .color{color:#FCBD00;}
.autumn .return{background-position:-246px 0;}
.autumn .footer{background:#F07800 url(http://ossweb-img.qq.com/images/game/404/gy/footer-autumn.png) no-repeat center 0;}
.autumn .logo{background-position:-284px -43px;}
.autumn .error-desc{color:#8B7C68;}
.autumn .color{color:#F07800;}
.winter .return{background-position:-369px 0;}
.winter .footer{background:#0E97DD url(http://ossweb-img.qq.com/images/game/404/gy/footer-winter.png) no-repeat center 0;}
.winter .logo{background-position:-426px -43px;}
.winter .error-desc{color:#3F3F3F;}
.winter .color{color:#0E97DD;}
</style>
</head>
<body>





<div class="wrap m0a" id="wrap">
	<img id="i404" width="544" height="272" class="m0a" alt="404" />
	<ul class="info">
		<li class="lost">
			<img class="lost-img fl" id="figure" alt="" />
			<ul class="error fr">
				<li class="error-desc">您访问的页面找不回来了！<br />但我们可以一起<strong class="color">寻找失踪宝贝</strong></li>
				<li>失踪地点：<span id="place"></span></li>
				<li>失踪人特征描述：<span id="desc"></span><a id="more" target="_blank" class="color"><strong>查看详情</strong></a></li>
			</ul>
		</li>
		<li class="other">
			<ul>
				<li class="other-lst fl"><a href="http://e.t.qq.com/Tencent-Volunteers" target="_blank" class="other-lnk lnk1 spr" title="腾讯志愿者"><strong class="hidden">腾讯志愿者</strong></a></li>
				<li class="other-lst other-bdr fl"><a href="http://bbs.baobeihuijia.com/" target="_blank" class="other-lnk lnk2 spr" title="宝贝回家"><strong class="hidden">宝贝回家</strong></a></li>
				<li class="other-lst fr"><a id="return" class="return fr spr" title="返回首页"><strong class="hidden">返回首页</strong></a></li>
			</ul>
		</li>
	</ul>
	<ul class="sns">
		<li class="fl" id="sns"></li>
		<li class="hlh16 fr">失踪儿童信息来自<a href="http://bbs.baobeihuijia.com/" target="_blank" class="c0E9" title="宝贝回家寻子网">宝贝回家寻子网</a></li>
	</ul>
</div>
<div class="footer" id="footer"><div class="foot-box m0a">
	<a href="http://game.qq.com/" target="_blank" title="腾讯游戏" class="logo fl spr"><strong class="hidden">腾讯游戏</strong></a>
	<ul class="footer-info fr">
		<li><a href="http://game.qq.com/portal2010/about.htm" target="_blank">关于腾讯游戏</a><span class="gap">|</span><a href="http://www.qq.com/contract.shtml" target="_blank">服务条款</a><span class="gap">|</span><a href="http://adver.qq.com/" target="_blank">广告服务</a><span class="gap">|</span><a href="http://game.qq.com/hr/" target="_blank">腾讯游戏招聘</a><span class="gap">|</span><a href="http://service.qq.com/" target="_blank">腾讯游戏客服</a><span class="gap">|</span><a href="http://game.qq.com/portal2010/business.htm" target="_blank">商务合作</a><span class="gap">|</span><a href="http://www.qq.com/" target="_blank">腾讯网</a><span class="gap">|</span><a href="http://www.qq.com/map/" target="_blank">网站导航</a></li>
		<li class="fr"><a href="http://www.tencent.com/law/mo_law.shtml?/law/copyright.htm" target="_blank">腾讯公司版权所有</a></li>
		<li>COPYRIGHT &copy;1998 - 2013 TENCENT. ALL RIGHTS RESERVED.</li>
	</ul>
</div></div>
<script src="../../../../xx.qq.com/commActCale/server_time.js"></script>
<script src="../../../../qzone.qq.com/gy/404/data.js"></script>
<script src="../../../../pingjs.qq.com/ping_tcss_ied.js"></script>
<script>
var g=function(o){return document.getElementById(o)},
w=g("wrap"),f=g("footer"),b=document.body,
host=window.location.host.split("."),n=host[0],
s={"1":"winter","2":"winter","3":"spring","4":"spring","5":"spring","6":"summer","7":"summer","8":"summer","9":"autumn","10":"autumn","11":"autumn","12":"winter"}[(new Date(nowtime*1000)).getMonth()+1],
h=document.documentElement.clientHeight||b.clientHeight,
o=jsondata["data"][Math.floor(jsondata["data"].length*Math.random())],
set=function(){
	if(h>=810){
		w.style.paddingTop=Math.ceil((h-770)/2)+"px";
		f.className="footer pa"
	}
	else{
		f.className="footer"
	};
},
sns=function(){
	var bsc={
		u:encodeURIComponent(o["url"]),
		n:encodeURIComponent('#宝贝回家#腾讯志愿者用技术点亮公益，让我们一起寻找走失的儿童吧！'),
		t:encodeURIComponent('腾讯志愿者用技术点亮公益，让我们一起寻找走失的儿童吧！'),
		c:['<h3 class="sns-title hlh16 fl">分享到：</h3>']
	},
	sites={
		qzone:"sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?desc="+bsc.n+"&title="+bsc.t+"&url=",
		weibo:"v.t.qq.com/share/share.php?title="+bsc.n+"&url=",
		qq:"http://ttxd.qq.com/cp/ttxd_cbzwdh_140505/css/connect.qq.com/widget/shareqq/index.html?summary="+bsc.n+"&desc="+bsc.t+"&url=",
		sina:"v.t.sina.com.cn/share/share.php?title="+bsc.n+"&url=",
		kaixin:"www.kaixin001.com/repaste/bshare.php?rtitle="+bsc.n+"&rurl=",
		renren:"share.renren.com/share/buttonshare.do?link="
	};
	for(var i in sites){
		bsc.c.push('<a href="http://'+sites[i]+bsc.u+'" target="_blank" title="分享到'+i+'" class="sns-lnk lnk-'+i+' spr fl"><strong class="hidden">分享到'+i+'</strong></a>');
	};
	document.getElementById("sns").innerHTML=bsc.c.join("");
},
int=function(){
	if(host.length==4){
		if(n=="app"||n=="game"){n=host[1]}
		else{n=host[0]+"."+host[1]}
	};
	g("return").href="http://"+n+".qq.com/?ADTAG=IED.InnerCop.gameWeb.errPage";
	g("i404").src="http://ossweb-img.qq.com/images/game/404/gy/season-"+s+".jpg";
	g("figure").src=o["child_pic"];
	g("figure").alt=o["name"];
	g("place").innerHTML=o["lost_place"];
	g("desc").innerHTML=o["child_feature"].replace(/\<br\/\>/g,"");
	g("more").href=o["url"];
	b.className=s;
	set();
	sns();
	b.style.display="block";
	a("resize",function(){
		h=document.documentElement.clientHeight||b.clientHeight;
		set();
	});
};
if(window.attachEvent){a=function(e,f){window.attachEvent("on"+e,f)}}
else{a=function(e,f){window.addEventListener(e,f,false)}};
if(typeof(pgvMain)=="function"){pgvMain()};
int();
</script>
</body>
</html><!--[if !IE]>|xGv00|9e71ac2be01108309c2fd53f8f65c66e<![endif]-->
