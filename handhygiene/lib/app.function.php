<?php
function savePostData($data){
	$data = date('Y-m-d H:i:s') . "---\n" . $data . "---\n" ;
	file_put_contents('/tmp/post.log', $data, FILE_APPEND);
}

?>