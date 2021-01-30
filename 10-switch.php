<!-- Echo/Print -->
<?php
echo ("<h2>echo/print</h2> ");
	$favcolor = "yellow";

	switch ($favcolor) {
		case "red":
			echo "Your favorite color is red!";
			break;
		case "blue":
			echo "Your favorite color is blue!";
			break;
		case "green":
			echo "Your favorite color is green!";
			break;
		default:
			echo "No color matched Your favorite color";
	}

?> 