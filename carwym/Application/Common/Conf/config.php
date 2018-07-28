<?php
return array(
	////'配置项'=>'配置值'
	'SHOW_PAGE_TRACE'=> true,
	//分组
	'DEFAULT_MODULE' =>  'Admin',  // 默认模块
	//设置对比的分组列表
	'MODULE_ALLOW_LIST' => array('Home','Admin'),
	//开启smarty模板引擎
	//'TMPL_ENGINE_TYPE' => 'Smarty',     // 默认模板引擎 
	//缓存
	'APP_DEBUG'=>true,
	'DB_FIELD_CACHE'=>false,
	'HTML_CACHE_ON'=>false,
	'TMPL_CACHE_ON'=>false,
/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'carwym',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'cooky',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'co_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
);