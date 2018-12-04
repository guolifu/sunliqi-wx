﻿<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>看你有多花-微时代管家</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="true">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <style>
        body {
            text-align: center;
            background: #000000;
            padding: 0;
            border: 0;
            margin: 0;
            height: 100%;
        }

        * {
            -webkit-touch-callout:none;
            -webkit-user-select:none;
            -khtml-user-select:none;
            -moz-user-select:none;
            -ms-user-select:none;
            user-select:none;
            -webkit-tap-highlight-color:rgba(0,0,0,0);
        }

        html {
            -ms-touch-action: none; /* Direct all pointer events to JavaScript code. */
        }
        .button {
        display: inline-block;
        zoom: 1;
        vertical-align: baseline;
        margin: 0 2px;
        outline: none;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        font: 14px/100% Arial, Helvetica, sans-serif;
        padding: .5em 2em .55em;
        text-shadow: 0 1px 1px rgba(0,0,0,.3);
        -webkit-border-radius: .5em;
        -moz-border-radius: .5em;
        border-radius: .5em;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
        box-shadow: 0 1px 2px rgba(0,0,0,.2);
        }

        .red {
        color: #F1C9F2;
        border: solid 0px #980c10;
        background: #F1C9F2;
		background-image: url(img/mm.jpg);       
        }
        .active {
            background: #d81b01;
        }

    </style>

</head>
<body>
<div style="display:inline-block;width:100%; height:100%;margin: 0 auto; background: black; position:relative;" id="gameDiv">
    <div style="text-align:center;margin-top:50px;">
        <p id="timer" style="color:#fff;font-size:20px;">10.00 秒</p>
        <div id="result_panel" style="display:none;text-align:center;background-color:rgba(0,0,0,0.5)">
            <div><button id="reset" style="font-size:25px">再玩一次</button><br>
            <button onClick="goHome();" style="font-size:25px">更多游戏</button></div>
        
    </div>
    <button  class="button red" style="margin-top: 30px;width: 150px;height:154px;border-radius:80px;font-size:18px;font-weight:bold;">戳我戳我</button>
	 <button  class="button red" style="margin-top: 30px;width: 150px;height:154px;border-radius:80px;font-size:18px;font-weight:bold;">戳我戳我</button>
    <div style="margin:20px;text-align:center;margin-bottom:0">
        <div id="result" style="color:#fff;font-size:30px;">0 次</div>
        <div id="best" style="margin-top:20px;color:#fff;font-size:20px;"> </div>
    </div>
</div>
        <script src="jquery.min.js"></script>
            <script type="text/javascript">
                    var initial = 1000;
                    var count = initial;
                    var counter; //10 will  run it every 100th of a second
                    var state = 0;
                    var total = 0;

                    if (localStorage.max) {
                        $('#best').html( '最好成绩：' + localStorage.max + ' 次');
                    }

                    function timer() {
                        if (count <= 0) {
                            clearInterval(counter);
                            state = 0;
                            $('#result_panel').show();
                            if ( !localStorage.max || parseInt(localStorage.max) < total) {
                                localStorage.max = total;
                                $('#best').html( '最好成绩：' + localStorage.max + ' 次');
                            }
							$('#timer').hide();
                            localStorage.max = parseInt(localStorage.max) > total ? localStorage.max: total;
                            dp_submitScore(total);
                            offEvent();
                            return;
                        }
                        count--;
                        displayCount(count);
                    }

                    function displayCount(count) {
                        var res = count / 100;
                        document.getElementById("timer").innerHTML = res.toPrecision(count.toString().length) + " 秒";
                    }
                    $(document).on('touchmove', function(e) {
                        e.preventDefault();
                    })
                  
                    function reset() {
                        count = initial;
                        total = 0;
                        state = 0;
                        $('#result').html(total + ' 次');
                        $('#timer').html(10 + ' 秒');
                        initEvent();
                    }
					
                    $('#reset').on('touchend  click', function (e) {
                        reset();
                        $('#result_panel').hide();
                        $('#timer').show();
                         e.preventDefault();
                    });
                    displayCount(initial);
                    initEvent();
                   function offEvent(){
                   		$('.button').unbind();
                   }
                   function initEvent(){
                   		  $('.button').on('touchstart click', function (e) {
                        	if (!state) {
                            	state = 1;
                            	counter = setInterval(timer, 10);
                        	}
                        	this.classList.add('active');
                        	e.preventDefault();
                    	});

                    $('.button').on('touchend click', function (e) {
                        if (state) {
                            total++;
                            $('#result').html(total + ' 次');
                        }
                        this.classList.remove('active');
                        e.preventDefault();
                    });
                   }
            </script>
			<script language="javascript">
		
		
		var mebtnopenurl = 'http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd';
		var myscore=0;
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/maomi.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/maomi/",
		        "tTitle": "看你有多花",
		        "tContent": "在10秒内疯狂戳MM,想花?没那么容易."
		};
				
		function goHome(){
			//_hmt.push(['_trackEvent', 'html5', 'forward', '更多游戏']);
			window.location='http://www.v918.cn/vgames/games/maomi/';
		}
		function dp_share(){
			var name=["青涩萝卜","花心萝卜","风流成性","水性杨花","堪称禽兽","禽兽不如"];
			var index=Math.floor(myscore/100);
			if (index>=name.length-1) {index=name.length-1;}
	
			document.title = "我戳了"+myscore+"下咪咪，我是【"+name[index]+"】,不服来戳!";
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
		<div id="share" style="display: none">
			<img width="100%" src="img/share.png" style="position: fixed; z-index: 9999; top: 0; left: 0; display: " ontouchstart="document.getElementById(&#39;share&#39;).style.display=&#39;none&#39;;">
		</div>
		<!--<script src="./finger/api.js"></script>-->
		<div style="display: none;">
			<script type="text/javascript">
			var myData={score:0,scoreName:''};
			
			function dp_submitScore(score){
				myscore=score;
				myData.score = score;
				myData.scoreName = "点了"+score+"下";
				if(score>5){
					var name=["青涩萝卜","花心萝卜","风流成性","水性杨花","堪称禽兽","禽兽不如"];
				    var index=Math.floor(score/100);
			       if (index>=name.length-1) {index=name.length-1;}
				   var mess="我戳了"+score+"下咪咪，我【"+name[index]+"】,向小伙伴们炫耀一下!";
					if (confirm(mess)){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
			    document.location.href = mebtnopenurl;
				//if (auth.user && myData.score != undefined) {
					
				//}
				//else {
		        //	document.location.href = mebtnopenurl;
				//}
	        }
			
			</script>
</div>
<div style="display: none;"><script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></div>
</body></html>
