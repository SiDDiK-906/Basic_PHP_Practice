<!-- Some important short things -->
<?php

	// check php version
	echo phpversion();
	
echo ("<h2>Questions</h2> ");
	echo "Q1: "."<br>";
	echo "Q2: how to use koma,<br>";
	echo "Q3: what is salt string"."<br>";
	echo "Q4. loop er last value ta ami print korte chaiteci na"."<br>";
	echo "Q5. eki line e echo and print_r use kora jay?"."<br>";
	echo "Q6. normal array r ksort to eki?"."<br>";
	echo "Q7. ksort korar somoy jodi array te index customize kore string dei then sorting rules ta ki hobe,,,aage number asbe naki text asbe?"."<br>";

echo "<h3>Answer</h3> ";
  echo "Q1: how to use break/new line"."<br>";
	echo nl2br("hello world
	 i am enjoying php so much 
	 ");
	echo nl2br("i love php \n and i am the best");

echo ("<h1>important functions & short things</h1> ");

	echo "1.var_dump:"."<br>";
		$str = "hello";
		var_dump($str);

	echo "2.<pre> tag using to show array by breaking line";
		$item4 = array(10,"hello",'world'); /* this one is array data type */
		echo "<pre>";
		print_r ($item4); /* array will must print by "print_r" */

	echo "3.die:"."<br>";
		// echo die(); 
		// die(); when we will use die function after that no code will be execute.

	echo "4.empty:"."<br>";
		$str = "hello";
		echo empty($str);
	
	
	
?>