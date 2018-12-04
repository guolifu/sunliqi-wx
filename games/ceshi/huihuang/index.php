<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes">
<title>测测你一生中最辉煌的年龄</title>
<meta name="keywords" content="测测你一生中最辉煌的年龄" />
<meta name="description" content="测测你一生中最辉煌的年龄" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jQueryRotate.2.2.js"></script>
<script type="text/javascript" src="jquery.easing.min.js"></script>
<link rel="stylesheet" href="zp.css" />
<style>
#disk{background:url(wenzhangku.gif) no-repeat }
</style>

<script type="text/javascript">
var info=new Array()
info[0]="45岁，万人敬仰的额领袖"
info[1]="36岁，跨国企业的CEO"
info[2]="32岁，福布斯榜首人物"
info[3]="43岁，迪拜首富"
info[4]="40岁，一夜暴富的土豪"
info[5]="31岁，潜力股变蓝筹股"
info[6]="37岁，房产无数，豪车三辆"
info[7]="33岁，精装房一套，存款千万"
info[8]="38岁，名车五辆，公司两家"
info[9]="28岁，豪门阔太的生活"
info[10]="30岁，名车接送，专人伺候"
info[11]="35岁，女王般的生活"


function choujiang(){
	if($("#name").val()==""){
		alert("请输入名字");
		$("#name").focus();
		return false;
	}
	
	$.post("do.php", { name: $("#name").val()},function(data){
		var a = data*30+15;
		$("#startbtn").rotate({
			duration:6000,
			angle: 0, 
			animateTo:2880+a,
			easing: $.easing.easeOutSine,
			callback: function(){
							
				var infos="“"+$("#name").val()+"”最辉煌的时候会在"+info[data]+"。";
				$(document).attr('title',infos+"测测你一生中最辉煌的年龄");
				var infos="<font color=orange><b>【测试结果】</b></font><br />"+infos;
				$("#tip").html(infos);
				$("#info").css({display:""});
			}
		});
				 
	});
				 
}

function retry(){
	$("#info").css({display:"none"});
}

</script>
</head>

<body>



<div id="main">
	<h1>测测你一生中最辉煌的年龄</h1>


   <div class="demo">
        <div id="disk"></div>
        <div id="start"><img src="start.png" id="startbtn" onClick="choujiang()"></div>
   </div>

	<div class="shuru">请输入您的名字：<input value="" id="name"></div>
   
</div>

<div id="info" style="display:none;">
	<div id="tip"></div>
	
	<div class="retry">
	<button onClick="retry()">重新测试</button>
	<button onClick="location.href='http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd'">关注我们</button>
	　<button onclick="location.href='http://www.v918.cn/vgames/'">更多好玩测试</button>
	</div>

</div>


<div id="footad">
	</div>


<div class="more_test_list" id="more_test">
<dt><h2>↓ 更多好玩测试 ↓</h2></dt>
<dd><a href="../huihuang/"><li>测测你一生中最辉煌的年龄</li></a><a href="../nianxin/"><li>测测年薪多少才配得上你？</li></a><a href="../kaiche/"><li>测你五年内会开什么车</li></a><a href="../tiansheng/"><li>测测你天生是什么命</li></a><a href="../qianshi/"><li>测测你前世是什么人</li></a><a href="../chuanyue/"><li>穿越回古代你会是谁？</li></a><a href="../ceo/"><li>测你会成为哪家公司总裁。</li></a><a href="../qianshi/"><li>测测你前世是什么人</li></a></dd>
</div>

<footer style="margin-top:10px; font-size:10px; color:#bbb; text-align:center;">
郑重承诺：本页面为纯静态HTML制作，绝不收集任何用户信息!
</footer>

<textarea id="adhtml" style="display:none">
	
<button onClick="location.href='http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd'">关注我们</button>
<button onClick="location.href='http://www.v918.cn/vgames/'">智力游戏</button>
	</textarea>


<script>
	infos=$("#adhtml").val();
	$("#footad").append(infos);
	</script>
<div style="display:none">
<script language="javascript" type="text/javascript" src="http://js.users.51.la/15858550.js"></script>
</div>

</body>
</html>
