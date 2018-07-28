<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加车辆</title>
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>/main.css">
	<script src="<?php echo JS_URL; ?>/jquery-3.3.1.js"></script>
</head>
<body>
	<div class="no-back">
		<div id="back-foward"></div>
		<div id="car"></div>
		<div id="logo"></div>
		<div class="car-title">
			<span>奥迪-></span>
			<span>Audi A4-></span>
			<span>全新奥迪A4</span>
		</div>
		<div class="selcolor-show">
			<img src="<?php echo IMG_URL; ?>/A4regular.png" alt="">
		</div>
		<div class="seltcar-title">
			选择颜色
		</div>
		<div class="selcolor-list">
			<ul>
				<li>
					<div class="sel-brown"></div>
					<p>格斯棕</p>
				</li>
				<li>
					<div class="sel-grey"></div>
					<p>季风灰</p>
				</li>
				<li>
					<div class="sel-black"></div>
					<p>传奇黑</p>
				</li>
				<li>
					<div class="sel-red"></div>
					<p>探戈红</p>
				</li>
				<li>
					<div class="sel-golden"></div>
					<p>白金</p>
				</li>
				<li>
					<div class="sel-silver"></div>
					<p>花键银</p>
				</li>

			</ul>
		</div>
	</div>
	<script>
		$('li div').mouseover(function(){
			var divColor = $(this);
			var hwidth = 1.25 * divColor.width();
			var hheight = 1.25 * divColor.height();
			var hborder = 1.25 * parseFloat(divColor.css('border-radius'));
			divColor.animate({
				width:hwidth,
				height:hheight,
			},500);
			divColor.css('border-radius',hborder+"px");
		})
		$('li div').mouseout(function(){
			var divColor = $(this);
			var rwidth = 24;
			var rheight = 24;
			var rborder = '12px';
			divColor.animate({
				width:rwidth,
				height:rheight,
			},500);
			divColor.css('border-radius',rborder);
		})
		$('li').click(function(){
			window.location.href = '/index.php/Home/user/index';
		})
	</script>
</body>
</html>