<html>
 <head>
 	<link rel="stylesheet" type="text/css" href="./styles/main.css">
 	<script type="text/javascript" src="./javascripts/jquery-3.1.1.min.js"></script>
  <title>Chi Lab</title>
 </head>
 <body>

	<div class="header">
	  <h1>Chi Lab Studies	</h1>
	</div>
	<div class="content">
		<?php
			$thelist = '';
	 		$dir_path = "./projects";
			if ($handle = opendir($dir_path)) {
			    while (false !== ($file = readdir($handle)))
			    {
			        if ($file != "." && $file != ".." && $file != ".DS_Store")
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
 	

 	<script type="text/javascript" src="./javascripts/header.js"></script>
 </body>
</html>