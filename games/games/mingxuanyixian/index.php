<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=480,user-scalable=yes,uc-user-scalable=yes,target-densitydpi=high-dpi"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <script language="javascript" type="text/javascript" src="jj.js"></script>
    <script language="javascript" type="text/javascript" src="min.js"></script>
    <title>新疆微电影微信小游戏</title>
<style>
	body{margin:0px; background-color:#434243; color:#6A6A6A;}
	.bandiv{float:left; width:100%; background-color:#DBD1BB;}
		.bandiv div{padding:10px; text-align:left;}
</style>
</head>
<body onLoad="main()" lang="http://www.v918.cn/vgames/" id="0">
<div style="text-align:center;">
	<canvas id="jsGameScreen"> 
	</canvas> 
</div>

		<script language=javascript>
		var mebtnopenurl = 'http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd';
		window.shareData = {
		        "imgUrl": "./1.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/mingxuanyixian/",
		        "tTitle": "命悬一线-软灵通小游戏",
		        "tContent": "用绳命在玩的游戏"
		};
		
		
		function dp_submitScore(m,t){
			if(t>1000){
				alert("不错哦！得了"+t+"分！");
				dp_share(t);
			}
		}
		
		function dp_share(t){
			document.title = t+"分！吓死我了，玩完这个《命悬一线》我得了恐高症！软灵通小游戏";
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}
		function dp_Ranking(){
			//alert("到更多");
			window.location=mebtnopenurl;
		}

		function showAd(){
		}
		function hideAd(){
		}
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		    
		    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
		        WeixinJSBridge.invoke('sendAppMessage', {
		            "img_url": window.shareData.imgUrl,
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, function(res) {
		        	document.location.href = mebtnopenurl;
		        })
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, function(res) {
		        	document.location.href = mebtnopenurl;
		        });
		    });
		}, false);
		</script>


<div id='share' style="display:none">

</div>
</body>
</html>
