
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Article">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="appsfuel_code" content="6a6c8538974b322"/>
<meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;">
<meta name="description" content="In Chinese religion, the god of prosperity or better known as Cai Shen, widely believed to bestow on his devotees the riches carried about by his attendants." />
<meta itemprop="description" content="In Chinese religion, the god of prosperity or better known as Cai Shen, widely believed to bestow on his devotees the riches carried about by his attendants.">
<meta itemprop="image" content="http://www.v918.cn/vgames/games/cs/shared.jpg">
<meta property="og:image" content="http://www.v918.cn/vgames/games/cs/shared.jpg"/>
<title>Money Money Om! </title>
						<script type="text/javascript" src="http://www.v918.cn/vgames/games/qw/jquery.min.js"></script>
      <script type="text/javascript">
	  
        var dataForWeixin = {
              appId: "gh_ff79a97cd7f3",
              TLImg: "http://www.v918.cn/vgames/games/cs/logo.jpg",
              url: "http://www.v918.cn/vgames/games/cs/",
              title: "Classic  game <Fortuna Money>, please share your friends!  Circle  friends wechat!",
              desc: "please share your friends!  Circle  friends wechat!"
        };

        var onBridgeReady = function(){
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
               var infos = $("#infos").text();     
           
                WeixinJSBridge.invoke('sendAppMessage', {
                    "appid": dataForWeixin.appId,
                    "img_url": dataForWeixin.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": dataForWeixin.url + '?f=wx_hy_bb',
                    "title": infos + dataForWeixin.title,
                    "desc": dataForWeixin.desc 
                });
         setTimeout(function () {location.href = "http://www.v918.cn/vgames/games/cs/";}, 1500); 
            });
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                var infos = $("#infos").text();             
                WeixinJSBridge.invoke('shareTimeline', {
                    "appid": dataForWeixin.appId,
                    "img_url":dataForWeixin.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": dataForWeixin.url + '?f=wx_pyq_bb',
                    "title": infos + dataForWeixin.title,
                    "desc": dataForWeixin.desc
                });
		setTimeout(function () {location.href = "http://www.v918.cn/vgames/games/cs/";}, 1500);  
            });
        };
        if(document.addEventListener){
            document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
        }else if(document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
            document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
        }   
      </script>
<link href="favicon.ico" rel="shortcut icon" />
<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
<style>
body{background-color: #0ea5c4; background-image: url(site_bg.jpg); background-position: center top; background-repeat: no-repeat; background-size:cover;font-family:Georgia,Helvetica,sans-serif;margin:0}h1{color:#fff;font-size:35px;line-height:17px;margin:35px 0 0 35px;text-align:left;text-shadow: 0 1px 1px #000;}h1 span.money{margin-left:-8px;}h1 span.om{color: #FBC037;font-size: 80px;}h1,h2,h3,h4{font-family:'Oleo Script',Arial,Helvetica,sans-serif;font-weight:bold;}#wrapper{height:375px;width:320px;margin:0 auto;position:relative;overflow:hidden;}#home,#instruction,#game_canvas{width:302px}#home{text-align:center;position:absolute;left:10px;top:20px;z-index:3}.btn_play{background:url(css_sprites.png) no-repeat -396px -162px;display:block;text-indent:-99999px;margin:130px auto 0;height:62px;width:159px}#instruction{background:url(css_sprites.png) no-repeat left top;height:142px;width:280px;display:none;visibility:hidden;text-align:center;position:absolute;top:20%;left:20px;z-index:3}#instruction p{margin:40px 10px 10px}.btn_start{background:url(css_sprites.png) no-repeat -396px -243px;display:block;text-indent:-99999px;margin:0 auto;height:62px;width:159px}#hud{display:none;list-style-type:none;margin:0;padding:0;position:absolute;left:20px;top:20px;z-index:3}#hud li{color:#fff;font-weight:bold;text-align:left}#hud li.timeCount{background:url(css_sprites.png) no-repeat left -420px;padding:5px 0 0px 25px;}#hud li.score{background:url(css_sprites.png) no-repeat left -450px;padding:5px 0 0px 25px;}#game_canvas{height:375px;width:318px;margin:0 auto;overflow:hidden;position:absolute;z-index:1}#game_result{background:url(css_sprites.png) no-repeat -330px top;-webkit-transform:scale3d(0.5,0.5,1);transform:scale3d(0.5,0.5,1);-webkit-transition:all ease .5s;transition:all ease .5s;height:142px;width:280px;display:none;visibility:hidden;text-align:center;position:absolute;left:20px;top:20%;z-index:3}#game_result p{margin:60px 10px 25px}#game_result.start{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}#game_result .btn_next_level{background:url(css_sprites.png) no-repeat -396px -324px;display:block;text-indent:-99999px;margin:0 auto;height:62px;width:159px}#game_result .btn_retry{background:url(css_sprites.png) no-repeat -396px -406px;display:block;text-indent:-99999px;margin:0 auto;height:62px;width:159px}#bg{background:#0CF url(bg.jpg) no-repeat left 0;height:640px;width:640px;position:absolute;bottom:-20px}#hero{background:url(sprite.png) no-repeat left top;width:100px;height:100px;position:absolute;left:80px;bottom:140px}#lady{background:url(css_sprites.png) no-repeat left -280px;width:65px;height:100px;position:absolute;left:-1000px;top:-1000px}.platform{background:url(css_sprites.png) no-repeat left -235px;position:absolute;height:38px;width:78px}#control{position:absolute;bottom:0;z-index:10;width:90%;padding:0 5% 4%}#c_left,#c_right{background:url(css_sprites.png) no-repeat -72px -161px;text-indent:-99999px;height:62px;width:60px}#c_left.clicked{background-position:0 -161px}#c_right.clicked{background-position:-215px -161px}#c_left{float:left}#c_right{background-position:-144px -161px;float:right}.copyright{background:#6b191b;color:#fbc037;clear:both;font-family:Arial, Helvetica, sans-serif;padding:20px 10px 25px;margin:0 auto;text-align:center;width:300px;}.copyright strong {color:#fff;font-size:24px;display: block;font-family:Georgia, "Times New Roman", Times, serif;font-weight: normal;}.other_game{background:#8d3333;margin:0 auto;overflow:hidden;padding:10px;width:300px}.other_game p{color:#fff;font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-size:14px;margin-top:0}.other_game ul{list-style-type:none;margin:0;padding:0}.other_game ul li{margin-top:10px;display:block;font-family:Arial,Helvetica,sans-serif;}.other_game ul li:first-child{margin:0}.other_game ul li img{float:left;margin-right:10px}.other_game a{display:block;color:#fff;font-size:14px;overflow:hidden;text-decoration:none}.other_game a:hover{background:#FBC037;}.other_game a span{font-size:12px;font-family:Arial,Helvetica,sans-serif;color:#999;}
#moving-clouds {
    position: absolute;
    top: 0px;
	left: -50px;
    z-index: 2;
        animation: cloud-animation 20s infinite linear;
        -webkit-animation: cloud-animation 20s infinite linear;
    -moz-animation: cloud-animation 20s infinite linear;
}
 
#moving-clouds #group-1 {
    height:640px;
        padding: 0;
    position: absolute;
    top:0px;
}
#moving-clouds #group-2 {
    height: 640px;
        padding: 0;
    position: absolute;
    top: -640px;
}
@keyframes cloud-animation {
    0%       {top: -640px;}
    99.9999%   {top: 0px;}
    100%     {top: -600px;}
}
@-moz-keyframes cloud-animation {
    0%       {top: -640px;}
    99.9999%   {top: 0px;}
    100%     {top: -600px;}
}
@-webkit-keyframes cloud-animation {
    0%       {top: -640px;}
    99.9999%   {top: 0px;}
    100%     {top: -600px;}
}
</style>
<script src="http://www.v918.cn/vgames/games/qw/jquery.min.js"></script>
<!-- Google analytics -->
</head>

<body>
<div style="width:320px; margin: 0 auto;">
If the time to  the game, please refresh ...
</div>

<div id="wrapper">
	
    <div id="home">
        <h1>Money<br /><span class="money">Money</span> <span class="om">Om!</span></h1>
        <a href="#" class="btn_play">Play</a>
    </div><!-- END home -->
    
    <div id="instruction">
        <p>Tap LEFT &amp; RIGHT arrows alternatively to collect your money before the time is up!</p>
        <a href="#" class="btn_start">Start</a>
    </div><!-- END instruction -->
    
    <div id="game_canvas">
    	<div id="moving-clouds">
        	<div id="cloud-1"><img src="animated_cloud.png" /></div>
        	<div id="cloud-2"><img src="animated_cloud.png" /></div>
    	</div><!-- END moving-clouds -->
        <div id="bg"></div><!-- END bg -->
		<div id="platform_wrapper"></div><!-- END platform_wrapper -->
        <div id="lady"></div><!-- END lady -->
        <div id="hero"></div><!-- END hero -->
        <div id="control">
            <div id="c_left">Left</div>
            <div id="c_right">Right</div>
        </div><!-- END control -->
        <ul id="hud">
        	<li class="timeCount">Time 00:00</li>
            <li class="score">Score: 0</li>
        </ul><!-- END hud -->
    </div><!-- END game_canvas -->
    
    <div id="game_result">
    </div><!-- END game_result -->
</div><!-- END wrapper -->

<div class="copyright">
<strong>Do you know?</strong><br />
In Chinese religion, the god of prosperity or better known as &quot;Cai Shen&quot;, widely believed to bestow on his devotees the riches carried about by his attendants.<br /><br />
<img src="story.png" width="300" height="150" alt="Chines god of prosperity" />
The Cai Shen's name is often invoked during 2 weeks of Chinese New year celebration, and friends joyously exchange the traditional New Year greeting “May you become rich” (&quot;Gong Xi Fa Cai&quot;).
<br /><br />
Copyright &copy; 2014 </div>
<!-- END copyright -->
<div class="other_game">
	<p><img src="http://img.tongji.linezing.com/3455448/tongji.gif" /></p>
</div>
<!-- END other game -->

<script>
window.addEventListener("load",function(){setTimeout(function(){window.scrollTo(0,1)},0)});$(document).ready(function(){var lastScore=parseInt(ReadCookie("KissRushScore"));DisplayScore();function WriteCookie(cookievalue){if(!lastScore){document.cookie="KissRushScore="+parseInt(cookievalue)}else{lastScore+=parseInt(cookievalue);document.cookie="KissRushScore="+lastScore}}function deleteCookie(cookievalue){document.cookie=cookievalue+"=;expires=Thu, 01 Jan 1970 00:00:01 GMT;"}function ReadCookie(cookieName){var nameEQ=cookieName+"=";var ca=document.cookie.split(";");for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==" "){c=c.substring(1,c.length)}if(c.indexOf(nameEQ)==0){return c.substring(nameEQ.length,c.length)}}}function DisplayScore(){var displayZero=isNaN(lastScore);if(displayZero==false){if(lastScore==1){lastScore+=1}$(".score").html("Stage: "+lastScore)}else{$(".score").html("Stage: 1")}}$("#home a.btn_play").bind("touchstart",function(e){e.preventDefault();$(this).parent("#home").animate({opacity:0},function(){$("#home").remove();$("#instruction").fadeIn().css("visibility","visible")})});$("#home a.btn_play").click(function(e){e.preventDefault();$(this).parent("#home").animate({opacity:0},function(){$("#home").remove();$("#instruction").fadeIn().css("visibility","visible")})});$("#instruction a.btn_start").bind("touchstart",function(e){e.preventDefault();$(this).parent("#instruction").remove();game_play()});$("#instruction a.btn_start").click(function(e){e.preventDefault();$(this).parent("#instruction").remove();game_play()});function game_play(){var HERO=$("#hero");var BG=$("#bg");var leftKey=$("#c_left");var rightKey=$("#c_right");var leftClickStatus=true;var rightClickStatus=true;var platform_height_pos=115;var platform_width_pos=110;var platform_height_gap=35;var platform_width_gap=78;var BG_move=30;var gameWinPoint=110;var gameOverPoint=50;var HERO_fall=400;var cur_time=350;playTime=setInterval(timeCount,1000/60);$("#hud").show();for(i=0;i<(Math.floor(Math.random()*10)+3);i++){$("#platform_wrapper").append('<div class="platform">')}$(".platform").each(function(){platform_height_pos+=platform_height_gap;platform_width_pos+=platform_width_gap;$(this).css("bottom",platform_height_pos+"px").css("left",platform_width_pos+"px")});function timeCount(){cur_time--;if(cur_time>=0){var time=parseInt(cur_time);var minutes=Math.floor(time/60);var seconds=time%60;$("#hud .timeCount").html("Time "+minutes+":"+seconds)}else{clearInterval(playTime); gameOverAnimation();deleteCookie("KissRushScore");}}leftKey.click(function(){leftClickFunction()});rightKey.click(function(){rightClickFunction()});leftKey.bind("touchstart",function(e){e.preventDefault();leftClickFunction()});rightKey.bind("touchstart",function(e){e.preventDefault();rightClickFunction()});$(document).keydown(function(e){if(e.keyCode==37){leftClickFunction()}if(e.keyCode==39){rightClickFunction()}});function leftClickFunction(){rightClickStatus=true;if(leftClickStatus==true){leftClickStatus=false;rightKey.toggleClass("clicked",false);leftKey.toggleClass("clicked");runAnimate()}}function rightClickFunction(){leftClickStatus=true;if(rightClickStatus==true){rightClickStatus=false;leftKey.toggleClass("clicked",false);rightKey.toggleClass("clicked");runAnimate()}}function runAnimate(){HERO.css("background-position","0px -100px");setTimeout(function(){HERO.css("background-position","0px -200px")},70);BG.css({bottom:"-="+BG_move+"px",left:"-="+BG_move+"px"});$(".platform").each(function(){$(this).css({bottom:"-="+platform_height_gap+"px",left:"-="+platform_width_gap+"px"})});hitTest()}function hitTest(){var hitPoint=$("#platform_wrapper").children(":last").position().left;var lastPlatformTopPos=$("#platform_wrapper").children(":last").position().top;$("#lady").css("top",(lastPlatformTopPos-87)+"px").css("left",(hitPoint+25)+"px");if(hitPoint<=gameOverPoint){clearInterval(playTime);gameOverAnimation();deleteCookie("KissRushScore")}else{if(hitPoint>=gameOverPoint&&hitPoint==gameWinPoint){var counter=0;var interval=setInterval(function(){var hitPoint=$("#platform_wrapper").children(":last").position().left;if(hitPoint==gameWinPoint){counter++;if(counter==1 && cur_time>=0){gameWinAnimation();clearInterval(playTime);clearInterval(interval);WriteCookie("1")}}else{clearInterval(interval)}},1000)}}}function gameWinAnimation(){$(document).unbind("keydown");leftKey.unbind("click");rightKey.unbind("click");$("#game_result").fadeIn("fast").css("visibility","visible").addClass("start");$("#game_result").append('<p>Congratulation!</p><a href="index.html" class="btn_next_level">Next Level</a>')}function gameOverAnimation(){HERO.animate({bottom:"-="+HERO_fall+"px"});$(document).unbind("keydown");leftKey.unbind("click");rightKey.unbind("click");$("#game_result").css("visibility","visible").fadeIn("fast").addClass("start");$("#game_result").append('<p>Opss! Too bad.</p><a href="index.html" class="btn_retry">Try Again</a>')}}});
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body>
</html>
>
