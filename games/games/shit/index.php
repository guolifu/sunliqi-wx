<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no,target-densitydpi=device-dpi" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title>炸屎奇遇记</title>
	<script src="js/mootools-core.js"></script>
	<script src="js/touch.js"></script>
	<script src="js/chainrxn.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
<script>
if(Browser.isMobile){
	document.addEvent('touchstart touchend', function(event){
		event.preventDefault();
	});
}
var s = document.getElementById('install');
</script>
<style type="text/css">
body {
	font-family: 'proxima-nova', Helvetica, Arial, sans-serif;
	background: #333;
	color: #fff;
	font-size: 12px;
	margin:0px;
	-webkit-user-select: none;
}
#container {
	width: 100%;
	margin: 0 auto;
	position: relative;
}
#html5{
	position: absolute;
	left: 5px;
	top: 0px;
}
#promo{
	position: absolute;
	right: 5px;
}
#promo a {
	color: #A8DC65;
	text-decoration: none;
}
#promo a:hover {
	text-decoration: underline;
}
#rate{
	position: absolute;
	left: 5px;
	top: 74px;
}
h1 {
	font-family: 'proxima-nova', Helvetica, Arial, sans-serif;
	margin: 0 auto;
	font-size: 72px;
	color: #fff;
	text-align: center;
}
#ballField {
	background: url('vapp/game.png') repeat;
	margin: 0 auto;
	
	-webkit-user-select: none;
}
#notifierBox {
	width: 300px;
	position: absolute;
	z-index: 50;
	top: 50%;
	left: 50%;
	margin: -100px 0 0 -150px;
	background: #555;
	border: 3px solid #fff;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	-webkit-box-shadow: 5px 5px 5px #333;
}
#notifierTitle {
	margin-top: 6px;
	font-size: 26px;
	text-align: center;
}
#notifierButton {
	margin: 10px;
	border-radius: 7px;
	-moz-border-radius: 7px;
	-webkit-border-radius: 7px;
	background: #a8dc65;
	text-align: center;
	cursor: pointer;
	padding: 7px 0;
	font-size: 30px;
	color: #297a22;
	border: 1px solid #297a22;
	-webkit-box-shadow: 3px 3px 3px #333;
}
#notifierButton2 {
	margin: 10px;
	border-radius: 7px;
	-moz-border-radius: 7px;
	-webkit-border-radius: 7px;
	background: #a8dc65;
	text-align: center;
	cursor: pointer;
	padding: 7px 0;
	font-size: 30px;
	color: #297a22;
	border: 1px solid #297a22;
	-webkit-box-shadow: 3px 3px 3px #333;
}
#starterBall {
	width:194px;
	height:194px;
	position:absolute;
	padding:0px;
	background: url("vapp/pointerball.png");
	-webkit-user-select: none;
}
#ballsExpanded, #levelScore, #totalScore, #levelNumber {
	padding: 5px;
	position: absolute;
}
#ballsExpanded {
	left: 70px;
	top: 0px;
}
#levelNumber {
	left: 70px;
	top: 15px;
}
#levelScore {
	right: 0px;
	bottom: 0px;
}
#totalScore {
	left: 0px;
	bottom: 0px;
}
.points {
	font-size: 15px;
	text-align:center;
	color:#fff;
	width:50px;
	height:20px;
}
.supported a {
	color: #fff;
}
.supported {
	display: block;
	width: 100%;
	font-size: 15px;
	text-align:center;
}
#share-wx{
	background:rgba(0,0,0,0.8);
	position:absolute;top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:10000;
	display:none;
}
#wx-qr{
	background:rgba(0,0,0,0.8);
	position:absolute;top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:10000;
	display:none;
}
.lis{ left: 0;overflow: hidden;width: 100%;z-index: 122;position: absolute;bottom: 0;}
.lis a{float: left;width:99.9%;margin-right:1px;color:#ffffff;font-size:14px;text-decoration: none;background:#606783;text-align: center;opacity: 0.8;line-height:30px;font-weight: bold;font-family:"微软雅黑"；}
.lis a img{position: relative;top: 1px;}
</style>
</head>
<body>
	
	 <div class="lis">
		<div style="float: left;width:33.2%;"><a style="border-bottom: 3px solid #fd6766;" href="http://www.v918.cn/vgames/">游戏列表</a></div>
		<div style="float: left;width:34%;"><a style="border-bottom: 3px solid #04fece;" href="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd">关注收藏</a></div>
		<div style="float: left;width:33.2%;"><a style="width:100%;margin:0;border-bottom: 3px solid #fdcd01;" onclick="location.href=location.href;" href="javascript:;" ><img width="15" src="vapp/4.png">重玩</a></div>
	</div> 
	<div id="container">
			<img src="vapp/html5.png" alt="HTML5" id="html5">
			<canvas id="ballField"></canvas>
			<div id="ballsExpanded"></div>
			<div id="totalScore"></div>
			<div id="levelScore"></div>
			<div id="levelNumber"></div>
			<div id="notifierBox">
				<div id="notifierTitle">
					点击以开炸
				</div>
				<div id="notifierButton">
					开始炸屎
				</div>
				<div id="notifierButton2" onclick="clickMore();">
					更多游戏
				</div>
			</div>
		</div>
		<script language="javascript"> 
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-325506-4']);
			_gaq.push(['_trackPageview']);

			var sos;
			window.onload=function()
			{
				var w=document.documentElement.clientWidth ;//可见区域宽度
				var h=document.documentElement.clientHeight;//可见区域高度
				sos=document.getElementById("ballField");
				sos.style.height=h+"px";
				sos.style.width=w+"px";
			}
			</script>
		<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/';
		var myscore=0;
		var mylevel=0;
		window.shareData = {
			"appId": "",
			"imgUrl": "./vapp/3.jpg",
			"timeLineLink": "http://www.v918.cn/vgames/games/shit/",
			"tTitle": "炸屎奇遇记",
		     "tContent": "《炸屎奇遇记》，来试试你的能力？"
		};		
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = mebtnopenurl;
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title =shareTitle(myscore,mylevel);
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}
		function dp_Ranking(){
			window.location=mebtnopenurl;
		}
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		    
		    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
		        WeixinJSBridge.invoke('sendAppMessage', {
		            "img_url": window.shareData.imgUrl,
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        });
				 setTimeout(function () {location.href = mebtnopenurl;}, 1500); 
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        });
				 setTimeout(function () {location.href = mebtnopenurl;}, 1500); 
		    });
		}, false);
		</script>
		<div id=share style="display: none">
			<img width=100% src="vapp/share.png" style="position: fixed; z-index: 9999; top: 0; left: 0; display: " ontouchstart="document.getElementById('share').style.display='none';">
		</div>
		<div style="display: none;">
			<script type="text/javascript">
			var myData = {};
			function dp_submitScore(score,level){
				myscore=score;
				mylevel=level
				myData.score = score;
				myData.scoreName = score+"分";
				if(score>5){
					if (confirm("真行,你炸了"+score+"分！要不要通知下小伙伴们呢？")){
						dp_share();
					}
				}
			}
			</script>
<div style="display:none;">
 

</div>
</body>
</html>