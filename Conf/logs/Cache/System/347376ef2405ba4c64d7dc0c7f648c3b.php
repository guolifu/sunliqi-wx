<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body style="background:none">
<div class="content">
<div class="box">
	<h3>微信更新信息</h3>
    <div class="con dcon">
	<ul class="myinfo">
   <li>
   <?php echo ($updateinfo); ?>
   </li>
	</ul>
	<div class="update">
    <?php echo ($chanageinfo); ?>
       </div>
    </div>
</div>
<!--/box-->
<div class="box">
	<h3>微信帮助说明</h3>
    <div class="con dcon">    
    <ul class="myinfo kjinfo">
   <li class="title">更新注意事项</li>
   <li>注意了：在升级前请先备份好您的网站文件，不做备份直接升级可能造成网站不能访问</li>
   <li>不做备份直接升级造成的网站问题概不负责</li>
   <li>另外：必须做好数据库备份</li>
   <li>备份就是把您的网站文件拷贝一份放到其他地方</li>
	</ul>
    </div>
</div>
<!--/box-->
</div>
</body>
</html>