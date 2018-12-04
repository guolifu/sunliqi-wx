<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>微时代管家</title>
   <link rel="icon" type="image/GIF" href="res/icon.png"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="yes"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
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
<canvas id="gameCanvas" width="640" height="960"></canvas>

<script src="game.min.js"></script>
<script language=javascript>
		var mebtnopenurl = 'http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/xksds.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/xksds/index.html",
		        "tTitle": "胸口碎大石-软灵通",
		        "tContent": "小伙伴们,我在菜市口卖艺快来给我捧场啊!"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			 if((window.location+"").indexOf("f=zf",1)>0){
			 	window.location = "http://www.v918.cn/vgames/games/xksds/index.html";
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
            var myData = { gameid: "xksds" };
			function dp_submitScore(score,specific){
				myData.score =parseInt(score);
				myData.scoreName = "得了"+specific+"分";
				document.title ="我在菜市口卖艺赚了"+specific+". 这钱太好挣了,你也来试试吧";	
				window.shareData.tTitle = document.title;
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到微时代游戏排行榜吗？")) {
                            window.location = "http://www.v918.cn/vgames/games/xksds/index.html"
                        }
                        else {
                            document.location.href = mebtnopenurl;
                        }
                    }, 500);
                }
				else {
		        	document.location.href = mebtnopenurl;
				}
	        }
			</script>
			<div style="display: none;">
				<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script>
			</div>
			<script type="text/javascript" src="./game9g.utils.js"></script>
</body>
</html>