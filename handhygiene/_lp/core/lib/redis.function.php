<?php
function redis($host = null , $port = null ){
	$redis_key = md5($host .'-'. $port);
	if (!isset( $GLOBALS['LP_Redis_'.$redis_key] )){
		include_once( AROOT .  'config/app.config.php' );
		$mongo_config = $GLOBALS['config']['redis'];

		if( $host == null ) $host = $mongo_config['redis_host'];
		if( $port == null ) $port = $mongo_config['redis_port'];

		$redis = new redis();  
		$connect_status = $redis->connect($host, $port);  
		$GLOBALS['LP_Redis_'.$redis_key] = $redis;
	}

	return $GLOBALS['LP_Redis_'.$redis_key];
}

// set
function redis_set($k,$v, $redis =NULL){
	if ($redis == NULL) $redis = redis();

	return $redis->set($k,$v);  // success, return true
}

// get
function redis_get($k,$redis=NULL){
	if ($redis == NULL) $redis = redis();
	return $redis->get($k);
}

// setex
function redis_setex($k,$v,$t=NULL, $redis =NULL){
	if ($redis == NULL) $redis = redis();
	if ($t == NULL) $t=120;		// 2分钟失效

	$status = $redis->setex($k,$t,$v);  
}

function get_set(){
	//
}
?>