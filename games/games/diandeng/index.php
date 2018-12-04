<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
			content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="full-screen" content="true">
		<meta name="screen-orientation" content="portrait">
		<meta name="x5-fullscreen" content="true">
		<meta name="360-fullscreen" content="true">
		<title>最强电灯泡</title>
		<style type="text/css">
.btn {
	border: 1px solid #ccc;
	border-radius: 4px;
	padding: 12px;
	transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	background-color: #3498db;
	color: #fff;
	display:inline;
	margin-right:10px;
}
.result-container {
	display: none;
}

.result-container {
	display: none;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	text-align: center;
	background: rgba(0, 0, 0, 0.9);
	color: #fff;
	padding-top: 50px;
}

.result-container>p {
	margin: 20px 0 40px 0;
	font-size: 18px;
}

.play-again {
	background-color: #1abc9c;
}

.title {
	color: #fff;
	font-size: 13px;
}

#switchBtn {
	background: #1abc9c;
}
.rcontainer{
	position:relative;
	top:20%;
	width:80%;
	margin:auto;
}
</style>
		<script type="text/javascript" src="js/game.js"></script>
	</head>
	<body bgcolor=#AABBCC>
		<div ALIGN=center>
			<div style="font-weight: bold; color: #3498db;">
				<span id="movecount">0</span> 步			</div>
			<h1 class="title">
				把所有电灯泡都点亮吧!
			</h1>
			<table border=4 cellpadding=0 cellspacing=2 bgcolor=#CCCCCC
				id="table">
			</table>
			<br>
			<table>
				<tr>
					<td>
						<div class="btn play-again" onclick="javascript:Init(true)">
							重新开始
						</div>
					</td>
					<td>
						<div class="btn"  onclick="clickMore();">更多福利</div>
					</td>
				</tr>
			</table>
			<div class="result-container" id="result_container" style="display:block;">
				<div class="rcontainer">
					<p id="result"></p>
					<div class="btn play-again" onclick="Init(true)">
							再来一盘
						</div>
					<div class="btn"  onclick="clickMore();">更多福利</div>
				</div>
			</div>
		</div>
		<script language=javascript>
            var mebtnopenurl = 'http://www.v918.cn/vgames/';
		window.shareData = {
		        "imgUrl": "./img/icon.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/zqdp/",
		        "tTitle": "最强电灯泡",
		        "tContent": "最强电灯泡"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = "http://www.v918.cn/vgames/";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title ="点亮你的智商！我用了"+myData.score+"步,点亮了所有电灯，你也来试试吧！";
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
			<img width=100% src="./img/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
        <script src="js/jquery.min.js"></script>
        <script src="js/api.js"></script>
		<div style="display: none;">
			<script type="text/javascript">
			var auth = new Auth9G("zqddp");
			auth.order = "asc";
			var myData = {};
			auth.identify = function() {
				if (auth.user) {
					window.shareData.timeLineLink += ((window.shareData.timeLineLink.indexOf("?") == -1 ? "?" : "&") + "uid=" + auth.myuid);
				}
			}
			
			function dp_submitScore(score){
				myData.score = score;
				myData.scoreName = score+"步";
				if(score>0){
					if (confirm("真行,你用了"+score+"步点亮了所有的灯！要不要通知下小伙伴们呢？")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
				if (auth.user && myData.score != undefined) {
					setTimeout(function(){
						if (confirm("要将成绩提交到游戏排行榜吗？")) {
							auth.submit(myData.score, myData.scoreName, function(){
					        	auth.gotoRank("24h");
							});
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
			<script language="JavaScript">
   				draw();
  				Init(true);
			</script>
<div style='display:none'>
 
</div>
	</body>
</html>
