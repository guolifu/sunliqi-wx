
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0 target-densitydpi=device-dpi"/>
    <link rel="icon" type="image/GIF" href="res/favicon.ico"/>
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="viewport" content="user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="yes"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    <title>逼死强迫症-微时代管家</title> 
    <script src="js/cocos2d-3.0rc1.canvas.v2.min.js"></script>
    <style type="text/css">
    body {
        background-color: black;
    }
    </style>
</head>
<body>	 
    <canvas id="gameCanvas" width="640" height="1136"></canvas>
    <script type="text/javascript">
          window.onload = function(){
              cc.game.onStart = function(){
                  cc.view.enableAutoFullScreen(false);
                  cc.view.setDesignResolutionSize(640, 1136, cc.ResolutionPolicy.SHOW_ALL);
                  cc.view.resizeWithBrowserSize(true);
                  cc.director.setDisplayStats(cc.game.config.showFPS);
                  //load resources
                  //cc._loaderImage = "";
                  cc.LoaderScene.preload(["res/bg.jpg","res/imgs.png", "res/imgs.json", "icon.png"], function () {
                      cc.spriteFrameCache.addSpriteFrames('res/imgs.json', 'res/imgs.png');
                      cc.director.runScene(new HelloWorldScene());
                  }, this);
              };
              cc.game.run("gameCanvas");
          };
    </script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/index.html';
var thegameurl ="http://www.v918.cn/vgames/games/bsqpz2/"; 
var guanzhuurl ="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd";
		var is9gUser=false;
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/games/bsqpz2/icon.png",
		        "timeLineLink":thegameurl,
		        "tTitle": "逼死强迫症-软灵通",
		        "tContent": "逼死强迫症-软灵通:v918_cn"
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
			<img width=100% src="share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "bsqpz" };
			
			function dp_submitScore(score){
				myData.score = parseInt(score);
				myData.scoreName = "干掉了"+score+"个新提示";
					document.title ="强迫症真的伤不起，我干掉了"+score+"个新提示，你也来试试";
					window.shareData.tTitle = document.title;
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score>0) {
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
			 <script type="text/javascript" src="js/game9g.utils.js?r="+Math.rand()></script>
</body>
</html>
