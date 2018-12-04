﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="target-densitydpi=320,width=640,user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>一起来玩心动连萌吧！</title>
    <meta name="keywords" content="games,game,html5,flow,flow free,html5 games,flow html5,puzzle" />
    <meta name="description" content="" />
    <meta name="author" content="">
<!-- <script type="text/javascript">document.write('<script type="text/javascript" src="../resource/js/resource_loader.js?ver='+Math.random()+'"><\/script>')</script>    -->
   <link rel="stylesheet" href="css/style.css?v=2.3.1" />
    <script src="js/common.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/mkGame.js?v=2.2.1"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/mainJS.js?v=2.2.5"></script>
</head>
<body>



    <div id="maskloading" style="display: block; text-align: center;">
        <div id="loading_div">
            <img id="loading" src="image/loading.gif" style="width: 80%; top: 50%; left: 10%; margin: -70px auto 0; position: fixed;" />
        </div>
    </div>
    <div id="content" style="width: 640px; position: absolute; height: 1138px; margin: 0 auto; display: none; overflow: hidden; z-index: 99999;" class="zoomh">
        <img id="Logo2" src="image/Logo2.png" style="position: absolute; width: 485px; top: 236px; left: -295px;">
        <img id="Logo3" src="image/Logo3.png" style="position: absolute; width: 485px; top: 236px; left: 435px;">
        <img id="Logo1" src="image/gameover.png" style="position: absolute; width: 485px; top: 236px; left: 90px; display: none;">
    </div>
    <div id="main" style="width: 640px; position: relative; margin: 0 auto; overflow: hidden; height: 100%;">
        <div id="page0" style="width: 100%; position: relative;">
            <div id="p1" style="position: relative; width: 640px;">
                <img class="btn_menu" src="image/btn_menu.png" style="display: none; position: absolute; position: absolute; z-index: 99; left: 25px; top: 22px;">
                <div id="p1_1" style="width: 100%;">
                    <div style="position: absolute; width: 100%; height: 100%;" class="zoomh">
                        <img id="logo2" src="image/Logo2.png" style="position: absolute; width: 485px; top: 236px; left: -295px;">
                        <img id="logo3" src="image/Logo3.png" style="position: absolute; width: 485px; top: 236px; left: 435px;">
                        <img id="logo1" src="image/Logo1.png" style="position: absolute; width: 485px; top: 236px; left: 90px; display: none;">
                        <img id="play" src="image/btn_play.png" style="position: absolute; width: 100%; top: 1150px;">
                    </div>
                    <img style="width: 100%; vertical-align: top; display: block;" id="pimg1" src="image/home.jpg">
                </div>
                <div id="p1_2" style="width: 100%; display: none;">
                    <img id='continue' src='image/btn_continue.png' style='position: absolute; width: 640px; top: 1580px;'>
                    <img style="width: 100%; vertical-align: top; display: block;" id="pimg2" src="image/instructions.jpg">
                </div>
                <div id="p1_3" style="display: none;">
                    <img style="width: 100%; position: absolute; display: block;" id="pimg3" src="image/game/gamebg.jpg">
                    <img src="image/game/level.png" style="position: absolute; top: 20px; left: 15%;">
                    <div id="levelName" style="text-align: left; position: absolute; height: 54px; line-height: 54px; vertical-align: middle; font-size: 42px; color: #fff; top: 20px; left: 35%;">1</div>
                    <img src="image/game/score.png" style="position: absolute; top: 20px; left: 60%;">
                    <div id="score" style="position: absolute; font-size: 42px; color: #FFF; height: 54px; line-height: 54px; vertical-align: middle; text-align: left; top: 20px; left: 80%;">0</div>
                    <div class='mainS'>
                        <img src='image/game/grid_below.png' style='position: absolute; width: 534px; left: 0px; right: 0px; margin: 0 auto;'>
                        <img src='image/game/grid_top.png' style='position: absolute; width: 534px; left: 0px; right: 0px; margin: 0 auto;'>
                        <div id='game_screen' style='top: 49px; left: 79px; position: absolute;'>
                            <div style='width: 480px; height: 480px; position: absolute; top: 0; left: 0;'>
                                <canvas width='480' height='480' id='liCanvas'></canvas>
                                <canvas width='480' height='480' id='bgCanvas'></canvas>
                            </div>

                            <!--     <audio id='Sleak' preload='auto'>
                                <source src='sounds/leak.ogg' type='audio/ogg'>
                                <source src='sounds/leak.mp3' type='audio/mp3'>
                                <source src='sounds/leak.wav' type='audio/wav'>
                            </audio>-->
                            <audio id='Sforward' preload='auto'>
                                <source src='sounds/forward.ogg' type='audio/ogg'>
                                <source src='sounds/forward.mp3' type='audio/mp3'>
                                <source src='sounds/forward.wav' type='audio/wav'>
                            </audio>
                        </div>
                        <img src='image/game/timebg.png' style='position: absolute; top: 540px; text-align: center; width: 450px; left: 0; right: 0; margin: 0 auto;'>
                        <img id='timebar' src='image/game/timebar.png' style='position: absolute; width: 360px; height: 33px; top: 566px; margin-left: 176px;'>
                    </div>
                    <div id="gamebtn" style="width: 640px; position: fixed; bottom: 15%;" class="zoom_btn">
                        <img id="reset" src="image/btn_reset.png" style="float: left; width: 180px; margin-left: 100px;" />
                        <img id="help" src="image/btn_help.png" style="float: left; width: 180px; margin-left: 80px;" />
                    </div>
                </div>
                <div id="p1_4" style="display: none; width: 100%">
                    <img id="pimg4" src='image/scorecard/bg.jpg' style='width: 100%; display: block;'>
                    <div id="result" style="width: 100%; position: absolute; top: 0; height: 100%;" class="zoomh">
                    	 <img id="result_bg" style="position: absolute; width: 100%; top: 140px;" src="image/scorecard/scorebg0.png">
                        <div id="result_score" style="position: absolute; font-size: 75px; color: rgb(47,197,245); width: 100%; text-align: center;top:230px;"></div>
                        <img id="playAgain" style="position: absolute; width: 100%; top: 340px;" src="image/scorecard/btn_playAgain.png" />
                        <img id="more_game" style="position: absolute; width: 100%; top: 525px;" src="image/scorecard/btn_MoreGames.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--<div class="sceentip">为了给您提供最佳游戏体验，请竖屏体验吧！~</div>-->
    <audio id='game_start' preload='auto'>
        <source src='sounds/game.ogg' type='audio/ogg'>
        <source src='sounds/game.mp3' type='audio/mp3'>
        <source src='sounds/game.wav' type='audio/wav'>
    </audio>
    <audio id='menu_click' preload='auto'>
        <source src='sounds/menubtn.ogg' type='audio/ogg'>
        <source src='sounds/menubtn.mp3' type='audio/mp3'>
        <source src='sounds/menubtn.wav' type='audio/wav'>
    </audio>
    <audio id='intro' preload='auto'>
        <source src='sounds/Intro.ogg' type='audio/ogg'>
        <source src='sounds/Intro.mp3' type='audio/mp3'>
        <source src='sounds/Intro.wav' type='audio/wav'>
    </audio>
    <script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/;
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/xindonglian.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/xindonglian/",
		        "tTitle": "一起来玩心动连萌吧！",
		        "tContent": "超好玩的连线小游戏!"
		};
				
		function clickMore(){
			 window.location = "http://ddqian2.aliapp.com/game";
		}
		
		function do_share(){
			//document.title ="来玩心动连连看，感受初恋的味道，我赢了"+myData.scoreName+"，还能在使点劲不！";
			document.getElementById("share").style.display="";
			//window.shareData.tTitle = document.title;
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
			<img width=100% src="image/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "" };
			
            function dp_getGameResulte(level,score,callback) {
                 
            }

			function do_submitScore(score){
			debugger;
				myData.score = score;
				myData.scoreName = score+"分";
				
				var Rankstr = "";
				//dp_getGameResulte(-1,score, function(resulte){
				//		window.shareData.timeLineLink = resulte.url;	 
				//		if(resulte.rank > 0 && resulte.rank <= 100)  Rankstr = ",在全球玩家排名第"+ resulte.rank; 
				//},0);
				document.title = window.shareData.tTitle = "我在【心动连萌】中赢得了"+score+"分"+Rankstr+",一起来感受初恋的味道吧！"
	
				if(score>100){
					if (confirm("我去！竟然获得了"+myData.scoreName+Rankstr+",真是让人萌萌哒，还等什么呢我的小伙伴儿们一起来耍下！")){
						do_share();
					}
				}
			}
			
			function onShareComplete(res) {
				//dp_share(); 
				//document.location.href = window.shareData.timeLineLink;
				document.location.href = mebtnopenurl;
	        }
			</script>
<script type="text/javascript" src="http://www.v918.cn/vgames/js/46.js"></script>
<div style="display: none;"> <img src="http://img.tongji.linezing.com/3455448/tongji.gif"></div>
 
</body>
</html>