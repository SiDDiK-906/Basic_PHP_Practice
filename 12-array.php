<!-- Array -->
<?php
echo ("<h2>Array Practice</h2> ");

  echo "<h4>Index Array-1: with define function</h4> "."<br>";
	define("cars",["maruti","tata","lamborghini"]);
	print_r(cars)."<br>";

  echo "<h4>Index Array-2 with normal array function</h4> "."<br>";
	$car= array("maruti","tata","lamborghini");
	print_r($car)."<br>";

  echo "<h4>Index Array-3 normal array with third bracket</h4> "."<br>";
	$_car= ["maruti","tata","lamborghini"];
	print_r($_car[1])."<br>";

  echo "<h4>Associative Array</h4> "."<br>";
	$asso_array= array("maruti" => "1lakh",56 => 89,"lambo" => "5lakh");
	print_r ($asso_array)."<br>";

  echo "<h4>Multidimentional Array-1</h4> "."<br>";
	$arr = array(
		array("barishal","Dhaka"),"khulna");
		echo "<pre>";
	print_r($arr[1]);

  echo "<h4>Multidimentional Array-2</h4> "."<br>";
	$arrr = array(
		array("barishal","Dhaka"),
		array("savar","goakhali","hello world!"),
		"dinajpur","shylet"
	);
		echo "<pre>";
	print_r($arrr[0][1]);

  echo "<h4>Sorting Array-2</h4> "."<br>";
	
	echo "<h4>sorting in ascending order</h4> "."<br>";
	$sort_var = ["hello","world","i","love","php"];
	sort($sort_var);
	print_r($sort_var);

	echo "<h4>sorting in decending order</h4> "."<br>";
	rsort($sort_var);
	print_r ($sort_var);

	echo "<h4>sort associative arrays in ascending order, according to the value</h4> "."<br>";
	$asort_var = ["hello","world","i","love","php"];
	asort($asort_var);
	print_r ($asort_var);

	echo "<h4>sort associative arrays in ascending order, according to the key</h4> "."<br>";
	$ksort_var = ["hello","world","now_what"=>"i","love","php"];
	ksort($ksort_var);
	print_r ($ksort_var);

	echo "<h4>sort associative arrays in descending order, according to the value</h4> "."<br>";
	$arsort_var = ["hello","world","i","love","php"];
	arsort($arsort_var);
	print_r ($arsort_var);

	echo "<h4>sort associative arrays in descending order, according to the key</h4> "."<br>";
	$krsort_var = ["hello","world","now_what"=>"i","love","php"];
	krsort($krsort_var);
	print_r ($krsort_var);
?>