<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 微信公众平台源码,微信机器人源码,微信自动回复源码 PigCms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script src="/tpl/static/jquery.min.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<?php if($usertplid == 0): ?><link href="<?php echo RES;?>/css/style.css?id=103" rel="stylesheet" type="text/css" />
<?php else: ?>
    <link href="<?php echo RES;?>/css/style-<?php echo ($usertplid); ?>.css?id=103" rel="stylesheet" type="text/css" /><?php endif; ?>
<style>

	.name {
		font-size:22px;
		text-align:left;
		font-weight:bold;
		
	}
	#nv_member {
		background: #fff;
	}
</style>
</head>
<body id="nv_member" >


<form class="form" method="post" id="form" action="">
  <input type="hidden" name="uid" value="<?php echo ($uinfo["id"]); ?>" />
  <input type="hidden" name="cardid" value="<?php echo ($cardid); ?>" />
  <div class="msgWrap bgfc"> 
		<p class="name">请选预览的粉丝</p>
    <table class="userinfoArea" style=" margin-left:100px;" border="0" cellspacing="0" cellpadding="0" width="70%"> 
      <tbody> 
        <tr>
          <th>粉丝昵称：</th> 
          <td>
            <input type="text" class="px" value="" id="name" style="width:150px;" />
            <a href="javascript:void(0);" class="btnGrayS" id="search">搜索</a>
          </td> 
        </tr>
        <tr> 
          <th><span class="red">*</span>openid</th> 
          <td><input type="text" name="openid" value="" class="px" id="openid" style="width:150px;" /></td> 
        </tr> 
        <tr>        
          <th>&nbsp;</th>
          <td>
           <button  type="submit" name="button"  class="btnGreen" id="sub">确认</button>
          </td> 
        </tr> 
      </tbody> 
    </table> 
  </div>
</form> 
<script>
  $(function(){

    $('#search').click(function(){
      var name  = $('#name').val();
      if(name != ''){
        $.getJSON("<?php echo U('Message/getOpenid',array('token'=>$token));?>&name="+name,function(res){
            if(res.error == 0){
              $('#openid').val(res.openid);
            }else{
              alert(res.info);
            }
        },JSON)
      }else{
        alert('请填写粉丝昵称');
      }
    });

    $('#sub').click(function(){
      if($('#openid').val() == ''){
        alert('请先搜索或者填写粉丝openid');
        return false;
      }
    });
  });
</script>
</body>
</html>