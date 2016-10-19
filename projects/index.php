<html>
 <head>
 	<link rel="stylesheet" type="text/css" href="/styles/main.css">
 	<script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
  <title>Chi Lab</title>
 </head>
 <body>

 <?php
	function is_dir_empty($dir) {
    	$files_in_directory = scandir($dir);
		$items_count = count($files_in_directory);
		return $items_count <=2;
	}
 ?>

	<div class="header">
	  <h1>Chi Lab Studies	</h1>
	</div>
	<div class="content">
		<?php
			$thelist = '';
	 		$dir_path = ".";
			if ($handle = opendir($dir_path)) {
			    $blacklist = array('.', '..', '.DS_Store');
			    while (false !== ($file = readdir($handle)))
			    {
			    	if (is_dir($file) && !is_dir_empty($file) && !empty($file) && !in_array($file, $blacklist))
			        {
			            $thelist .= '<li class="item inline-b-item">
			            	<div class="display-table">
			            		<a href="'.$dir_path.'/'.$file.'">'.$file.' </a>
			            	</div>
			            </li>';
			        }
			    }
			    closedir($handle);
			}
		?>


		<ul class="container inline-b">
		  <?=$thelist?>
		</ul>

	</div>
 	

 	<script type="text/javascript" src="/javascripts/header.js"></script>
 </body>
</html>