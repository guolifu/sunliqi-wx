
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>微时代管家</title>
		<meta name="viewport"
			content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no,,minimal-ui" />
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<meta name="full-screen" content="true" />
		<meta name="screen-orientation" content="portrait" />
		<meta name="x5-fullscreen" content="true" />
		<meta name="360-fullscreen" content="true" />
		<link href="css/game.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="container">
			<div class="grid">
				<div class="page hide" id="loading" style="display: block;">
					<div class="loading-txt">
						加载中...
					</div>
				</div>
				<div class="page hide" id="index" style="display: none">
					<div
						style="position: absolute; width: 100%; height: 100%; max-width: 480px; z-index: -1">
						<img src="img/start.png" height="100%" width="100%" />
					</div>
					<!--<h1>
						来治明星的你
					</h1>

					<div id="help">
						出现提示字母时，从下面的三个头像中找到首字母相匹配的人物
					</div>
					  -->
					<div class="btns">
						<img src="img/startbtn.png" class="btn2" id="startbtn" />
						<img src="img/morebtn.png"  class="btn2" onClick="clickMore();" />
						
					</div>
				</div>
				<div class="page hide" id="room" style="display: none;">
					<header>
					<span class="lv">闯关： <em> 0 </em> </span>
					<span class="time">60</span>
					</header>
					<div id="boxguess" class="lv1" style="width: 150px; height: 150px;">
						<div class="boxguesstext"></div>
					</div>
					<div id="boxlist" style="width: 96%; height: 120px;">

					</div>
				</div>
				<div class="page hide" id="dialog">
					<div
						style="position: absolute; width: 100%; height: 100%; max-width: 480px; z-index: -1">
						<img src="img/over.png" height="100%" width="100%" />
					</div>
					<div class="inner">
						<div class="content gameover">
							<div class="inner-content">
								<div id="result"></div>
								<div class="btns">
									<img src="img/againbtn.png" class="btn2" id="againbtn">
									<img src="img/morebtn.png"  class="btn2" id="morebtn2" onClick="clickMore();">
									
								</div>


							</div>
						</div>
					</div>

				</div>
			</div>
			<div id="orientation" 
			style="position: absolute; width: 100%; height: 100%; max-width: 480px; z-index: 99;display:none;">
			<img src="img/orientation.jpg" height="100%" width="100%" />
		</div>
		</div>
		<script type="text/javascript"
			src="./auth/jquery.min.js"></script>
		<script type="text/javascript" src="js/game.js"></script>
		<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/xz120.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/xz120",
		        "tTitle": "寻找120C|H明星-软灵通",
		        "tContent": "寻找120C|H明星-软灵通"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("f=zf",1)>0){
				window.location = "http://www.v918.cn/vgames/games/xz120";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title ="120人神秘代码名单!我找到了"+myData.score+"个，你也来试试!"
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
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
            var myData = { gameid: "xz120" };
			 var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink = "http://www.v918.cn/vgames/games/xz120";
			function dp_submitScore(score){
				myData.score = score;
				myData.scoreName ="找到"+score+"个";
				if(score>0){
					if (confirm("你一共成功识别明星"+score+"个！你这么吊小伙伴们知道不？")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到软灵通排行榜吗？")) {
                            window.location = "http://www.v918.cn/vgames/games/";
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
		
	</body>
</html>