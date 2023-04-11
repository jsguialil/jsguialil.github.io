
<!DOCTYPE html>
<!-- call another php file, use include or require -->
<?php
 include 'dashboard.php';
//  require 'dashboard.php';
//  $today=date("y-m-d");
// var_dump($today);
 ?>



<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>WebDev</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />

		<style>
			div.gallery {
				margin: 5px;
				border: 1px solid #ccc;
				float: left;
				width: 150px;
				}

				div.gallery:hover {
				border: 1px solid #777;
				}

				div.gallery img {
				width: 100%;
				height: auto;
				}

				div.desc {
				padding: 15px;
				text-align: center;
				}
		</style>
	</head>
	<body>
		
<div class="gallery">
  <a target="_blank" href="dreamhigh.jpg">
    <img src="dreamhigh.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Dream High</div>
  
</div>

<div class="gallery">
  <a target="_blank" href="vagabond.jpg">
    <img src="wyws.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">While You Were Sleeping</div>
</div>
<div class="gallery">
  <a target="_blank" href="vagabond.jpg">
    <img src="vagabond.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Vagabond</div>
</div>
	
</body>
</html>