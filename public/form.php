<?php
require_once '../config/init.php';

if(isset( $_POST['post_var'] )) {
	$result = (new MyAPI\Classes\DataGetter)->sendPost();
}

echo $result;