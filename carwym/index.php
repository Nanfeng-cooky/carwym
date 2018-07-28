<?php 
//给系统静态资源设置常量
define('SITE_URL','http://www.car.com/');
//前台常量
define ('CSS_URL','/Application/Home/Public/css');
define ('JS_URL','/Application/Home/Public/js');
define ('IMG_URL','/Application/Home/Public/img');
//后台常量
define ('ADMIN_CSS_URL','/Application/Admin/Public/css');
define ('ADMIN_JS_URL','/Application/Admin/Public/js');
define ('ADMIN_IMG_URL','/Application/Admin/Public/img');

//引入thinkphp
include ('../thinkphp/index.php');