<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>/main.css">
	<script src="<?php echo JS_URL; ?>/jquery-3.3.1.js"></script>
</head>
<body>
	<div class="loging-back">
		<div id="logo"></div>
		<div class="title">登陆</div>
		<div class="form-user">
			<form action="" method="post">
				<ul class="login">
					<li>用户名：<input type="text" placeholder="用户名/手机号码/注册邮箱" name="user_name"></li>
					<li>密&nbsp&nbsp码：<input type="password" name="user_password"><img src="<?php echo IMG_URL; ?>/invisible.png" alt=""></li>
				</ul>
				<div class="tips">用户名不存在</div>
				
			</form>
			<div class="middle"><button>确认</button></div>
		</div>
		<div class="other"><div class="left-angle"></div><span>其他登陆方式</span><div class="right-angle"></div></div>
		<div class="log-method">
			<ul>
				<li><a href=""><img src="<?php echo IMG_URL; ?>/sina.png" alt=""></a></li>
				<li><a href=""><img src="<?php echo IMG_URL; ?>/wechat.png" alt=""></a></li>
				<li><a href=""><img src="<?php echo IMG_URL; ?>/qq.png" alt=""></a></li>
			</ul>
		</div>
	</div>
	<script>
		$('button').bind('click',function(){
			if($('input:eq(0)').val() && $('input:eq(1)').val()){
				var user_name1 = $('input:eq(0)').val();
				var user_password1 = $('input:eq(1)').val();
				//console.log(user_name1+user_password1);
				$.post('/index.php/Home/Login/loging',{user_name:user_name1,user_password:user_password1},function(res){
					console.log(res);
					if(!res){
						$('.tips').text('账号密码错误');
						$('.tips').css('display','block');
					}else{
						$('.tips').text('账号密码确认无误');
						$('.tips').css('display','block');
						window.location.href = "/index.php/Home/select/addcar";
					}
				},'json');
			}
		})
	</script>
</body>
</html>