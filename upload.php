<?php

define("APP_PATH", dirname(__FILE__));

if (isset($_FILES["file"])) {
	$file = $_FILES["file"];
	$tmp_name = $file["tmp_name"];
	$real_name = $file["name"];
	move_uploaded_file($tmp_name, APP_PATH."/uploads/". $real_name);

	print "OK";
}