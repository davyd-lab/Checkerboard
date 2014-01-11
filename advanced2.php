<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<title>Advanced 2</title>
</head>

<body>

	<?php

	function make_checkerboard($size, $color1, $color2){

		for($i=1; $i<$size;$i++){

			echo "<ul class='clear'>";
			
			for($j=1; $j<$size;$j++){

				if(($i+$j)%2==0){
					echo "<li style='background-color: $color1;'> </li>";
				}

				else{
					echo "<li style='background-color: $color2;'> </li>";

				}
			}
		echo "</ul>";
		}

	

	}

	//call make_checkerboard function to generate table. First parameter is size.
	//The next two are the desired colors.

	make_checkerboard(11, "black", "red");
	echo "<br class='clear' /><h3>Second table with different parameters:</h3>";

	make_checkerboard(8, "#123888", "#111333");
	

	?>

	

</body>
</html>