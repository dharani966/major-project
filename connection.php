<?php
session_start();
$db=mysqli_connect("localhost","root","","kdproject");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'http://localhost/transport/');
define('SITE_PATH','http://localhost/transport/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'admin/media/images/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'admin/media/images/');
if (mysqli_connect_errno()) {printf("Connect failed: %s\n", mysqli_connect_error());}
?>
