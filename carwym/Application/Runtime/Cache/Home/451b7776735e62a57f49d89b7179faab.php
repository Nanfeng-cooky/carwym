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
		<div class="car-list">
			<p>奥迪</p>
			<ul>
				<li><img src="<?php echo IMG_URL; ?>/A1.png" alt=""><p>Audi A1</p></li>
				<li><img src="<?php echo IMG_URL; ?>/A3.png" alt=""><p>Audi A3</p></li>
				<li><img src="<?php echo IMG_URL; ?>/A4.png" alt=""><p>Audi A4</p></li>
				<li><img src="<?php echo IMG_URL; ?>/A5.png" alt=""><p>Audi A5</p></li>
			</ul>
		</div>
	</div>
	<script>
		$('li img').mouseover(function(){
			var hwidth = 1.25 * $(this).width();
			var hheight = 1.25 * $(this).height();
			$(this).animate({
				width:hwidth,
				height:hheight,
			},500);
		})
		$('li img').mouseout(function(){
			var rwidth = $(this).width()*4/5;
			var rheight = $(this).height()*4/5;
			$(this).animate({
				width:rwidth,
				height:rheight,
			},500)

		})
		$('ul').on('click','li',function(){
			window.location.href = '/index.php/Home/Select/seltcar'
		})
	</script>

</body>
</html>