<!-- Some important short things -->
<?php
echo ("<h2>Questions</h2> ");
	echo "Q1: how to use break"."<br>";
	echo "Q2: how to use koma,<br>";
	echo "Q3: konta konta variable hote parbe r konta parbena"."<br>";

echo ("<h1>important functions & short things</h1> ");
	echo "1.var_dump:"."<br>";
		$str = "hello";
		var_dump($str);
	echo "2.<pre> tag using to show array by breaking line";
		$item4 = array(10,"hello",'world'); /* this one is array data type */
		echo "<pre>";
		print_r ($item4); /* array will must print by "print_r" */
	echo "3.empty:"."<br>";
		$str = "hello";
		echo empty($str);
?>