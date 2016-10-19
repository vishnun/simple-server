<?php
	header("Cache-Control: no-cache");
	header("location: /projects/index.php",  true,  301 );  exit;
	// header("location: http://www.google.com",  true,  301 );  exit;
	die('should have redirected by now');
?>