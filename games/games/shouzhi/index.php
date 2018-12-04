<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>疯狂手指 - 根本不能停下来</title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <meta name="full-screen" content="true"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    

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
        color: #faddde;
        border: solid 1px #980c10;
        background: #d81b21;
        background: -webkit-gradient(linear, left top, left bottom, from(#ed1c24), to(#aa1317));
        background: -moz-linear-gradient(top, #ed1c24, #aa1317);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ed1c24', endColorstr='#aa1317');
        }

        .active {
            background: #d81b01;
        }

    </style>
</head>
<body>
<div style="display:inline-block;width:100%; height:100%;margin: 0 auto; background: black; position:relative;" id="gameDiv">
    <div style="text-align:center;margin:50px;">
        <span id="timer" style="color:#fff;font-size:20px;">10 秒</span>
    </div>
    <button id="button" class="button red" style="margin-top: 30px;width: 160px;height:160px;border-radius:80px;font-size:18px;font-weight:bold;">点我点我</button>
    <div style="margin:20px;text-align:center;">
        <div id="result" style="color:#fff;font-size:30px;">0 次</div>
        <div id="best" style="margin-top:20px;color:#fff;font-size:20px;"> </div>
    </div>
</div>

<div id="sbg" class="sbg">
    <div class="arron"></div>
    <p id="msg">请点击右上角<br />点击【分享到朋友圈】<br />测测好友的反应能力吧！</p>
</div>

<div class="ads" style="width: 100%; height: 69px; margin: 0px; margin-top: -60px; padding: 0px; border: none; background: none; "-->
    <a align="center" style="color:white" href="http://www.v918.cn/vgames/index.html">更多游戏</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a align="center" style="color:white" href="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd">关注我们</a>
</div>


<script language=javascript>
        var helptime=0;
        function help(){
            
        }

       var mebtnopenurl = 'http://www.v918.cn/vgames/index.html';
        var myscore=0;
        window.shareData = {
                "imgUrl": "./icon.png",
                "timeLineLink": "./shouzhi/",
                "tTitle": "疯狂手指-根本停不下来，玩过之后我的手指已经不是我的了！",
                "tContent": "在10秒内疯狂的点按钮，想赢？不容易。"
        };
                
        function goHome(){
            window.location="http://www.xjwdm.com/";
        }
        function dp_share(score){
            if(score>0){
                document.title = "10秒我能点"+score+"下！你行？你试试"
            }
            else{
                document.title = "疯狂手指-根本停不下来，玩过之后我的手指已经不是我的了！"
            }
            document.getElementById("share").style.display="";
            window.shareData.tTitle = document.title;
        }
        function dp_Ranking(){
            window.location="http://www.v918.cn/vgames/";
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
            <img width=100% src="share.png" style="position: fixed;z-index:9999; top: 0; left: 0; display: " ontouchstart="document.getElementById('share').style.display='none';">
        </div>
        <div id="result_panel" style="display:none;text-align:center;padding-top:50px;position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(0,0,0,0.5)">
            <div><button id="reset" style="font-size:25px">再玩一次</button><br><button id="doShare" style="font-size:25px">炫耀一下</button></div>
        </div>
        <script src="jquery.min.js"></script>
        <div style="display: none;">
            <script type="text/javascript">
            function dp_submitScore(score){

                dp_share(score);

                /*
                if(score<40){
                    if (confirm("")){
                        myCRdata.score = score;
                        myCRdata.scoreName = score+"步";
                        dp_share(score);
                    }
                }
                */
            }
            function onShareComplete(res) {
                    document.location.href = mebtnopenurl;
            }
            </script>

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

                            localStorage.max = parseInt(localStorage.max) > total ? localStorage.max: total;
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

                    $('#button').on('touchstart', function () {

                        if (!state) {
                            state = 1;
                            counter = setInterval(timer, 10);
                        }

                        this.classList.add('active');
                    });

                    $('#button').on('touchend', function () {
                        if (state) {
                            total++;
                            $('#result').html(total + ' 次');
                        }
                        this.classList.remove('active');
                    });

                    // $('#stop').on('click', function () {
                    //     clearInterval(counter);
                    // });

                    function reset() {
                        count = initial;
                        total = 0;
                        state = 0;
                        $('#result').html(total + ' 次');
                        $('#timer').html(10 + ' 秒');
                    }

                    $('#reset').on('touchend', function () {
                        reset();
                        $('#result_panel').hide();
                    });

                    $('#doShare').on('touchend', function () {
                        dp_share(total);
                        $('#result_panel').hide();
                        reset();
                    });


                    displayCount(initial);
            </script>

<scritp>
<!-- document.getElementById("ads").style.display='inline-block'; -->
</script>

<div style="display:none">
</div>
</body>
</html>