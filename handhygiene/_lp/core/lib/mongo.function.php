<?php
function mongo($host = null , $port = null , $user = null , $password = null , $db_name = null ){
	$mongo_key = md5($host .'-'. $port .'-'. $user .'-'. $password .'-'. $db_name);
	if (!isset( $GLOBALS['LP_Mongo_'.$mongo_key] )){
		include_once( AROOT .  'config/app.config.php' );
		$mongo_config = $GLOBALS['config']['mongo'];

		if( $host == null ) $host = $mongo_config['mongo_host'];
		if( $port == null ) $port = $mongo_config['mongo_port'];
		if( $user == null ) $user = $mongo_config['mongo_user'];
		if( $password == null ) $password = $mongo_config['mongo_password'];
		if( $db_name == null ) $db_name = $mongo_config['mongo_name'];

		/*
		 3 steps: connect to mongo server, select db, do auth.
		 using try/catch 
		 mongoDB version 2.0.4 
		 # Function MongoDB::authenticate() is deprecated 
		 # db admin system.users
		 # db pool system.users
		*/
		try{
			$conn = "mongodb://".$user.":".$password."@".$host.":".$port;
			//echo $conn;
			//$mongo = new MongoClient($conn);
			$mongo = new MongoClient();
			try{
				$mongo_db = $mongo->selectDB($db_name);
			}catch (Exception $e){
				echo "can't select db".$db_name;
				return false;
			}
		}catch (Exception $e){
			echo "can't connect to mongodb server";
			return false;
		}
	
		$GLOBALS['LP_Mongo_'.$mongo_key] = $mongo_db;
	}

	return $GLOBALS['LP_Mongo_'.$mongo_key];
}

// mostly the collection operation function
// http://cn2.php.net/manual/zh/class.mongocollection.php
function mongo_count($collection_name, $query_array = NULL, $limit = NULL, $skip = NULL, $mongo_db =NULL){
	if( $mongo_db == NULL ) $mongo_db = mongo();
	if( $query_array == NULL ) $query_array = array();
	if( $limit == NULL ) $limit = 0;
	if( $skip == NULL ) $skip = 0;

	$collection = $mongo_db->selectCollection($collection_name);
	$count = $collection->count($query_array,$limit,$skip);
	
	return $count;
}

function mongo_find($collection_name, $query_array = NULL, $fields_array = NULL, $skip=NULL, $limit=NULL, $sort=NULL, $mongo_db =NULL){
	if( $mongo_db == NULL ) $mongo_db = mongo();
	if( $query_array == NULL ) $query_array = array();
	if( $fields_array == NULL ) $fields_array = array();
	if( $skip == NULL) $skip = 0;
	if( $limit == NULL) $limit = 0;
	if( $sort == NULL ) $sort = array();

	$collection = $mongo_db->selectCollection($collection_name);
	$cursor = $collection->find($query_array, $fields_array);
	// MongoCursor limit skip sort
	if(!empty($sort)){$cursor->sort($sort);}
	if($skip!=0){$cursor->skip($skip);}
	if($limit!=0){$cursor->limit($limit);}

	$mongo_data = array();
	foreach ($cursor as $document) {
    	$mongo_data[]=$document;
	}

	return $mongo_data;
}

function mongo_find_one($collection_name, $query_array = NULL, $fields_array = NULL, $mongo_db =NULL){
	if( $mongo_db == NULL ) $mongo_db = mongo();
	if( $query_array == NULL ) $query_array = array();
	if( $fields_array == NULL ) $fields_array = array();
	
	$collection = $mongo_db->selectCollection($collection_name);
	$cursor = $collection->findOne($query_array, $fields_array);

	return $cursor;
}

// NOTE
// array(4) { ["n"]=> int(0) ["connectionId"]=> int(55) ["err"]=> NULL ["ok"]=> float(1) }
function mongo_save($collection_name, $data_array, $mongo_db =NULL){
	if( $mongo_db == NULL ) $mongo_db = mongo();
	if( empty($data_array) ) return false;
	
	$collection = $mongo_db->selectCollection($collection_name);
	$mongo_data = $collection->save($data_array);

	return $mongo_data;
}

// NOTE
// array(5) { ["updatedExisting"]=> bool(true) ["n"]=> int(1) ["connectionId"]=> int(51) ["err"]=> NULL ["ok"]=> float(1) }
function mongo_update($collection_name, $criteria_array, $data_array, $mongo_db =NULL){
	if( $mongo_db == NULL ) $mongo_db = mongo();

	$collection = $mongo_db->selectCollection($collection_name);
	$new_data_array = array('$set'=>$data_array);
	$result = $collection->update($criteria_array, $new_data_array);

	return $result;
}

function mongo_update_full($collection_name, $criteria_array, $data_array, $option_arr=NULL, $mongo_db =NULL){
	if( $mongo_db == NULL ) $mongo_db = mongo();
	if( $option_arr == NULL) $option_arr = array();

	$collection = $mongo_db->selectCollection($collection_name);
	$reult = $collection->update($criteria_array, $data_array,$option_arr);

	return $result;
}

// MongoDB::lastError
function mongo_last_error(){

}

// waiting
function mongo_remove($collection_name, $criteria_array, $data_array=array(),$mongo_db =NULL){
	if( $mongo_db == NULL ) $mongo_db = mongo();

	$collection = $mongo_db->selectCollection($collection_name);
	$result = $collection->remove($criteria_array, $data_array);

	return $result;
}
function mongo_remove_one($collection_name, $criteria_array,$mongo_db =NULL){
	$data_array=array("justOne" => true);
	return mongo_remove($collection_name, $criteria_array, $data_array,$mongo_db =NULL);
}
?>