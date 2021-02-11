<!-- Loop -->
<?php
echo ("<h2>Loop Practice</h2> ");

  echo "<h3>while loop-1</h3> ";

	$var1= 0;
	while($var1<=10){
		if($var1<10){
			echo $var1."-";
		}
		else{
			echo $var1."\n";
		}
		$var1++;
	}
  echo "<h3>while loop-2</h3> ";

	$start = 0;
	$var2 = array(1,2,3,4,5,"hwllo");
	$count = count($var2);
	while($start<= $count){
		if($start<$count){
			echo $start."-";
		}
		else{
			echo $start;
		}
		$start++;

	}
  echo "<h3>do while loop</h3> ";

	$item2 = 0;
	do{
		echo $item2;
		$item2++;
	}
	while($item2<=10);

  echo "<h3>for loop-1</h3> ";
 	echo "the even number are: ";
	for($a=0;$a<=10;$a++){
		if($a%2 == 0){
			echo $a;
		}
		else{
			echo "\n";
		}
	}
  echo "<h3>for loop-2</h3> ";
 	echo "the odd number are: ";
	for($a=0;$a<=10;$a++){
		if($a%2 != 0){
			echo $a;
		}
		else{
			echo "\n";
		}
	}
  echo "<h3>foreach loop-1: without index number</h3> ";
  $array= array(5,6,2,7,3,1,"hellow");
	foreach($array as $foreach){
		echo $foreach;
	}
  echo "<h3>foreach loop-2: for adding index number</h3> ";
  $array= array(5,6,2,7,3,1,"hellow");
	foreach($array as $index => $foreach){
		echo $index."=>".$foreach."<br>";
	}
?>