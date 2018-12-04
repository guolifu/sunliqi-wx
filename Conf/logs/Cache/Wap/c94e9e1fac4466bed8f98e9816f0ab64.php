<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>商品详情</title>
		<meta content="app-id=518966501" name="apple-itunes-app" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="black" name="apple-mobile-web-app-status-bar-style" />
		<meta content="telephone=no" name="format-detection" />
		<link href="<?php echo ($staticPath); ?>/tpl/static/unitary/css/comm.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo ($staticPath); ?>/tpl/static/unitary/css/goods.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo ($staticPath); ?>/tpl/static/unitary/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
		<style>
			.pagination {
				position: absolute;
				left: 0;
				text-align: center;
				bottom:10px;
				width: 100%;
			}
			.swiper-pagination-switch {
				display: inline-block;
				width: 10px;
				height: 10px;
				border-radius: 10px;
				background: #999;
				box-shadow: 0px 1px 2px #555 inset;
				margin: 0 3px;
				cursor: pointer;
			}
			.swiper-active-switch {
				background: #fff;
			}
			.swiper-container {
			  height: 230px;
			  width: 100%;
			}
		</style>
	</head>
	<body>
		<script src="<?php echo ($staticPath); ?>/tpl/static/unitary/js/jquery-2.1.3.min.js" language="javascript" type="text/javascript"></script>
		<script src="<?php echo ($staticPath); ?>/tpl/static/unitary/js/idangerous.swiper.js" language="javascript" type="text/javascript"></script>
		
		<div class="wrapper">
			<div id="divPic" class="pPic" style="height:220px;padding:0;">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php if(is_array($unitary_pic)): $i = 0; $__LIST__ = $unitary_pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="<?php echo ($vo); ?>" width="100%" height="220px"></div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<div class="pagination">
					</div>
				</div>
			</div>
			
			<div class="pro_info">
				<h2 class="gray6"><?php echo ($unitary["name"]); ?></h2>
				<cite class="gray9">价值：￥<?php echo ($unitary["price"]); ?>.00</cite>
				<div class="gRate">
					<div class="Progress-bar">
						<p class="u-progress" title="已完成<?php echo (($pay_count/$unitary['price'])*100)?>%">
							<span class="pgbar" style="width:<?php echo (($pay_count/$unitary['price'])*100)?>%;">
								<span class="pging"></span>
							</span>
						</p>
						<ul class="Pro-bar-li">
							<li class="P-bar01"><em><?php echo ($pay_count); ?></em>已参与</li>
							<li class="P-bar02"><em><?php echo ($unitary["price"]); ?></em>总需人次</li>
							<li class="P-bar03"><em><?php echo ($unitary['price'] - $pay_count);?></em>剩余</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="pro_record" style="border:0">
				<a style="border-top: 1px solid #dedede;border-bottom: 1px solid #dedede;" href="<?php echo U('Unitary/buyres',array('token'=>$token,'unitaryid'=>$unitary['id']));?>">所有参与记录<s class="fr"></s></a>
				<a style="border-bottom: 1px solid #dedede;" href="<?php echo U('Unitary/index',array('token'=>$token));?>">所有夺宝活动<s class="fr"></s></a>
				<a style="border-bottom: 1px solid #dedede;" href="<?php echo U('Unitary/mypay',array('token'=>$token));?>">我的购买记录<s class="fr"></s></a>
			</div>
			
			<style>
				.buy_foot{
					clear: both;
					width: 100%;
					background: #f7f7f7;
					border-top: 1px solid #dedede;
					padding: 6px 0;
					position: absolute;
					position: fixed;
					bottom: 0;
					z-index: 100;
				}
				.buy_foot i{
					width: 23px;
					height: 21px;
					display: block;
					background: url(http://mskin.1yyg.com/weixin/Images/set.png?v=140926);
					background-size: 35px auto;
					background-position: 0 -51px;
					margin-right: 20px;
					margin-top: 9px;
					position: relative;
				}
				.buy_foot i{
					
				}
				.buy_foot .but{
					margin-right: 53px;
				}
				.buy_foot .but li {
					float: left;
					width: 50%;
				}
				.buy_foot .but a {
					display: block;
					margin-left: 15px;
					height: 35px;
					line-height: 35px;
					text-align: center;
					color: #fff;
					border-radius: 3px;
					font-size: 16px;
				}
				.buy_foot i b {
					display: block;
					background: #f60;
					padding: 1px;
					min-width: 16px;
					height: 16px;
					line-height: 16px;
					border-radius: 16px;
					color: #fff;
					position: absolute;
					top: -7px;
					right: -10px;
					font-family: Arial;
					text-align: center;
				}
				#dialog{
					width: 256px;
					height: 46px;
					position: fixed;
					left: 50%;
					top:50%;
					margin-left: -128px;
					margin-top: -23px;
					display: none;
				}
			</style>
			<div class="buy_foot">
			   <a href="<?php echo U('Unitary/cart',array('token'=>$token));?>" id="btnCart"><i class="fr"><?php if($cart_count > 0){?><b><?php echo ($cart_count); ?></b><?php }?></i></a>
			   <div class="but">
				   <ul>
					   <li><a class="dobuy" href="<?php echo U('Unitary/buygoods',array('token'=>$token,'unitaryid'=>$unitary['id']));?>" unitaryid="<?php echo ($unitary["id"]); ?>" style="background: #f60;">立即1元夺宝</a></li>
					   <li><a class="docart" unitaryid="<?php echo ($unitary["id"]); ?>" style="background: #2af;">加入购物车</a></li>
				   </ul>
			   </div>
			</div>
			<div id="dialog">
				<div class="Prompt">
					<s></s>
					添加成功
				</div>
			</div>
		</div>
		<script type="text/javascript">
			var mySwiper = new Swiper('.swiper-container',{
				pagination: '.pagination',
				loop:true,
				grabCursor: true,
				paginationClickable: true
			})
			$(function(){
				$(".docart").click(function(){
					var id = $(this).attr("unitaryid");
					$.ajax({
						type:"POST",
						url:"<?php echo U('Unitary/goodsajax',array('token'=>$token));?>",
						dataType:"json",
						data:{
							type:'docart',
							token:"<?php echo ($token); ?>",
							wecha_id:"<?php echo ($wecha_id); ?>",
							id:id
						},
						success:function(data){
							$("#btnCart i").html("<b>"+data.count+"</b>")
							$("#dialog").fadeIn();
							setTimeout(function(){
								$("#dialog").fadeOut();
							},1000);
						}
					});
				})
			})
			
			
			
			
			
			
			
			
		</script>
		
<?php if($unitary == ''): ?><script type="text/javascript">
window.shareData = {  
            "moduleName":"Unitary",
            "moduleID":"0",
            "imgUrl": "<?php echo ($staticPath); ?>/tpl/static/unitary/images/wxnewspic.jpg", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Unitary/index',array('token'=>$token));?>",
            "tTitle": "一元夺宝",
            "tContent": ""
        };
</script>
<?php else: ?>
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Unitary",
            "moduleID":"0",
            "imgUrl": "<?php echo ($unitary['wxpic']); ?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Unitary/goodswhere',array('token'=>$token,'unitaryid'=>$_GET['unitaryid']));?>",
            "tTitle": "<?php echo ($unitary['name']); ?>",
            "tContent": "<?php echo ($unitary['wxinfo']); ?>"
        };
</script><?php endif; ?>
<?php echo ($shareScript); ?>
	</body>
</html>