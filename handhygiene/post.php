<?php
$data = var_export($_POSTi, 1);

$data = date('Y-m-d H:i:s') . "---\n" . $data . "---\n" ;

file_put_contents('/tmp/opmaster_debug.log', $data, FILE_APPEND);
