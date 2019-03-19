<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Training - bai 02</title>
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
	<div id="container">
		<div id="box1">
			<?php
				$stars = array("*", "**", "***", "****", "*****");
				$clength = count($stars);
				
				sort($stars);
				for ($i = 0; $i < $clength ; $i++) { 
					echo $stars[$i];
				    echo "<br>";
				}

				rsort($stars);
				for ($i = 0; $i < $clength ; $i++) { 
					echo $stars[$i];
				    echo "<br>";
				}
			?>
		</div>
		<div id="box2">
			<?php
				$stars = array("*", "***", "*****", "*******", "*********");
				$clength = count($stars);

				sort($stars);
				for ($i = 0; $i < $clength ; $i++) { 
					echo $stars[$i];
				    echo "<br>";
				}
			?>
		</div>
	</div>
</body>
</html>
