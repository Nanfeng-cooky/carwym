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
		<div class="form-search">
			<form action="">
				<input type="text" placeholder="搜索品牌如：宝马">
				<img src="<?php echo IMG_URL; ?>/search-icon.png" alt="">
			</form>
		</div>
		<div class="search-list">
			<ul>
				<li><a href="#A">A</a></li>
				<li><a href="#B">B</a></li>
				<li><a href="#C">C</a></li>
				<li><a href="">D</a></li>
				<li><a href="">E</a></li>
				<li><a href="">F</a></li>
				<li><a href="">G</a></li>
				<li><a href="">H</a></li>
				<li><a href="">I</a></li>
				<li><a href="">J</a></li>
				<li><a href="">K</a></li>
				<li><a href="">L</a></li>
				<li><a href="">M</a></li>
				<li><a href="">N</a></li>
				<li><a href="">O</a></li>
				<li><a href="">P</a></li>
				<li><a href="">Q</a></li>
				<li><a href="">R</a></li>
				<li><a href="">S</a></li>
				<li><a href="">T</a></li>
				<li><a href="">U</a></li>
				<li><a href="">V</a></li>
				<li><a href="">W</a></li>
				<li><a href="">X</a></li>
				<li><a href="">Y</a></li>
				<li><a href="">Z</a></li>
			</ul>
		</div>
		<div class="brand-list">
			<ul>
				<li><a name="A">A</a></li>
				<li><img src="<?php echo IMG_URL; ?>/阿斯顿马丁.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/阿尔法.罗密欧.png" alt=""></li>
				<li><a name="B">B</a></li>
				<li><img src="<?php echo IMG_URL; ?>/比亚迪.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/标志.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/本田.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/保时捷.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/宝马.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/奔驰.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/奔腾.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/北京汽车.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/别克.png" alt=""></li>
				<li><a name="C">C</a></li>
				<li><img src="<?php echo IMG_URL; ?>/比亚迪.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/标志.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/本田.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/保时捷.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/宝马.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/奔驰.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/奔腾.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/北京汽车.png" alt=""></li>
				<li><img src="<?php echo IMG_URL; ?>/别克.png" alt=""></li>

			</ul>

		</div>
	</div>
	<script>
		$('.brand-list li').bind('click',function(){
			window.location.href= '/index.php/Home/Select/selccar';
		})
	</script>

</body>
</html>