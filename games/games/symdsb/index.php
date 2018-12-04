<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>随意门（屌丝版）</title>
    <link rel="icon" type="image/GIF" href="res/favicon.ico"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="yes"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <style>
        body, canvas, div {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -khtml-user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
    </style>
  
</head>
<body style="padding:0; margin: 0; background: #000;">
<canvas id="gameCanvas" width="320" height="480" style="position: absolute; z-index: 0"></canvas>
<script src="frameworks/cocos2d-html5/CCBoot.js"></script>
<script src="src/main.js"></script>
	<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/index.html';
var thegameurl ="http://www.v918.cn/vgames/games/symdsb/"; 
var guanzhuurl ="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd";
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/games/symdsb/icon.png",
		        "timeLineLink": thegameurl,
		        "tTitle": "随意门（屌丝版）",
		        "tContent": "随意门（屌丝版）"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			 if((window.location+"").indexOf("f=zf",1)>0){
			 	window.location =mebtnopenurl;
			  }
			  else{
			 	goHome();
			  }
		}
		function dp_share(){
			document.getElementById("share").style.display="";
			
		}
		function dp_Ranking(){
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
		        }, onShareComplete);
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, onShareComplete);
		    });
		}, false);
		</script>
		<div id=share style="display: none">
			<img width=100% src="./share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "symdsb" };
			
			function dp_submitScore(score){
				myData.score =parseInt(score*100);
				myData.scoreName = "用时"+score+"秒";
				document.title =window.shareData.tTitle = "我在随意门勇闯20扇门中只用了"+score+"秒，小伙伴们也来试一试吧！【微时代游戏】";
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("？")) {
                            window.location = mebtnopenurl;
                        }
                        else {
                            document.location.href = mebtnopenurl;
                        }
                    }, 500);
                }
				else {
		        	document.location.href = guanzhuurl ;
				}
	        }
			</script>
			<div style="display: none;">
				<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script>
			</div>
			<script type="text/javascript" src="js/game9g.utils.js"></script>
</body>
</html>
