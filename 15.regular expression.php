<!-- Regular Expressions -->
<?php
echo ("<h2>Regular Expressions</h2> ");
	$str = "Visit Microsoft!";
	$pattern = "/microsoft/i";
	echo preg_replace($pattern, "W3Schools", $str);
	// its a string function
?>