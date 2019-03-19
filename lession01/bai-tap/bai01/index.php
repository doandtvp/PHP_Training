<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Training - bai 01</title>
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
	<div id="container">
		<div class="myDiv">
			<span>a.</span>
			<div class="box1">
				<?php
					$stars = array("*", "**", "***", "****", "*****", "******", "*******", 
						"********", "*********", "**********");
					$clength = count($stars);
					rsort($stars);
					for ($i = 0; $i < $clength ; $i++) { 
						echo $stars[$i];
				    	echo "<br>";
					}
				?>
			</div>
		</div>
		<div class="myDiv">
			<span>b.</span>
			<div class="box1">
				<?php
					$stars = array("*", "**", "***", "****", "*****", "******", "*******", 
						"********", "*********", "**********");
					$clength = count($stars);
					sort($stars);
					for ($i = 0; $i < $clength ; $i++) { 
						echo $stars[$i];
				    	echo "<br>";
					}
				?>
			</div>
		</div>
		<div class="myDiv">
			<span>c.</span>
			<div class="box2">
				<?php
					$stars = array("*", "**", "***", "****", "*****", "******", "*******", 
						"********", "*********", "**********");
					$clength = count($stars);
					sort($stars);
					for ($i = 0; $i < $clength ; $i++) { 
						echo $stars[$i];
			    		echo "<br>";
					}
				?>
			</div>
		</div>
		<div class="myDiv">
			<span>d.</span>
			<div class="box2">
				<?php
					$stars = array("*", "**", "***", "****", "*****", "******", "*******", 
						"********", "*********", "**********");
					$clength = count($stars);
					rsort($stars);
					for ($i = 0; $i < $clength ; $i++) { 
						echo $stars[$i];
			    		echo "<br>";
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
