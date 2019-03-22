<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Training - bai 01</title>
</head>
<body>
	<?php
		//cau a
		echo "a.";
		echo "<br>";
		for ($i = 10; $i >= 0; $i--) { 
			for ($j = 0; $j < $i; $j++) { 
				echo " * ";
			}
			echo "<br>";
		}
		// cau b
		echo "b.";
		echo "<br>";
		for ($i = 0; $i <= 10; $i++) { 
			for ($j = 0; $j < $i; $j++) { 
				echo " * ";
			}
			echo "<br>";
		}
		// cau c
		echo "c.";
		echo "<br>";
		for ($i = 10; $i >= 0; $i--) { 
			for ($j = 0; $j < 10; $j++) { 
				if ($j < $i) {
					echo "&nbsp &nbsp";
				} else {
					echo "* ";
				}
			}
			echo "<br>";
		}
		// cau d
		echo "<br>";
		echo "d.";
		echo "<br>";
		for ($i = 0; $i <= 10; $i++) { 
			for ($j = 0; $j < 10 ; $j++) { 
				if ($j < $i) {
					echo "&nbsp &nbsp";
				} else {
					echo "* ";
				}
			}
			echo "<br>";
		}
		//cau e
		echo "e.";
		echo "<br>";
		for ($i = 0; $i <= 5; $i++) { 
			for ($j = 0; $j < $i; $j++) { 
				echo " * ";
			}
			echo "<br>";
		}
		for ($i = 5; $i >= 0; $i--) { 
			for ($j = 0; $j < $i; $j++) { 
				echo " * ";
			}
			echo "<br>";
		}
		//cau f
		echo "<br>";
		echo "f.";
		echo "<br>";
		for ($i = 5; $i > 0 ; $i--) { 
			for ($j = 0; $j <= (10 - $i); $j++) { 
				if ($j >= $i) {
					echo "* ";
				} else {
					echo "&nbsp &nbsp";
				}
			}
			echo "<br>";
		}
	?>
</body>
</html>
