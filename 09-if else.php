<!-- if-else -->
<?php
echo ("<h2>if-else Practice</h2>");
	$item1 = 15;
	$item2 = 20;
	if($item1 >= 10 && $item1 <= 20){
		echo "i love php"."<br>";
		if(!$item1>=20){
			echo "this nested if just worked";
		}
		elseif(!$item1<=20){
			echo "second attemp of nested if";
		}
		else{
			echo "something wrong in nested if";
		}
	}
	elseif( $item1<=10 || $item1>=20){
		echo "this one is or operator";
	}
	else{
		echo "your code didn't work at all";
	}
echo ("<h2>if-else Practice 2</h2>");
	$var1="i love php";
	$count = str_word_count($var1);
	echo $count."<br>";
	if($count >= 3){
		echo "your string have 3 += words";
	}
	elseif(empty($count)){
		echo "your string is empty";
	}
	else{
		echo "string has less word to compare your input";
	}
?>