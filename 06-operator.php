<!-- Operator -->
<?php
echo ("<h1>Operator Practice</h1>");
  echo "<h2>Arithmatic Operator</h2> ";
	echo "<h3>1. Modulus:</h3> ";
		$A =  3;
		$B =  6;
		$X = $A % $B;
		echo "The Result is".' '. $X;
	echo "<h3>1. Exponential:</h3> ";
		$A =  3;
		$B =  6;
		$X = $A ** $B;
		echo "The Result is".' '. $X;

  echo "<h2>String Operator</h2> ";
	echo "<h3>1.Concatenation</h3>";
		$var_1="hello";
		$var_2="world";
		echo $var_1 ." ". $var_2;
	echo "<h3>1.Concatenation Assignment</h3>";
		$var_1="hello";
		$var_2="world";
		$concate = $var_1 .=" ". $var_2;
		echo $concate;
  echo "<h2>Increament/Decreament Operator</h2> ";
		$item1 = 5;
		echo $item1++ ."<br>";
		echo ++$item1 ."<br>";
		echo $item1-- ."<br>";
		echo --$item1 ."<br>";
?>