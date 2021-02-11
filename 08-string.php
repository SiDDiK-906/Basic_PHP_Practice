<!-- String -->
<?php
echo ("<h2>String & String Function</h2> ");
	
	$_var1 = "Hello world, i love the php and i.am the.best";

	echo nl2br("string reverse-\n");
	echo "Ans: ". strrev ($_var1)."<br>";
echo nl2br("\n");

	echo nl2br ("string length- \n");
	echo "Ans: ". strlen ($_var1)."<br>";
echo nl2br("\n");

	echo nl2br("string replace- \n");
	echo "Ans: ".str_replace("the best","enjoying it",$_var1)."<br>";
echo nl2br("\n");

	echo nl2br ("string word count- \n");
	echo "Ans: ". str_word_count($_var1)."<br>";
echo nl2br("<br>");

	echo nl2br ("string exploding- \n");
	$new = explode(".",$_var1);
	print_r("Ans: ". end($new)."<br>");
echo nl2br("\n");
	
	echo nl2br ("string add slash automaticaly(addslashes)- \n");
	$slash = "hello wo.r'ld's";
	echo "Ans: ". addslashes($slash)."<br>";
echo nl2br("<br>");

	echo nl2br ("string add slash manually(addcslashes)- \n");
	echo "Ans: ". addcslashes($slash,"'")."<br>";
echo nl2br("<br>");

	echo nl2br ("HTML special characters- \n");
	echo "Ans: ". htmlspecialchars($slash)."<br>";
echo nl2br("<br>");

	echo nl2br ("HTML entities- \n");
	$htmlent = "<b>bold</b> hello this is bold";
	echo "Ans: ". htmlentities($htmlent)."<br>";
echo nl2br("<br>");

	echo nl2br ("string uppercase- \n");
	echo "Ans: ". strtoupper($slash)."<br>";
echo nl2br("<br>");

	echo nl2br ("string lowercase- \n");
	echo "Ans: ". strtolower($slash)."<br>";
echo nl2br("<br>");

	echo nl2br ("string only first letter capital- \n");
	echo "Ans: ". ucfirst($slash)."<br>";
echo nl2br("<br>");

	echo nl2br ("string every first letter capital- \n");
	echo "Ans: ". ucwords($slash)."<br>";
echo nl2br("<br>");

	echo nl2br ("creating hash password by md5- \n");
	echo "Ans: ". md5($slash)."<br>";
echo nl2br("<br>");

	echo nl2br ("creating hash password by crypt- \n");
	$crypt = "156";
	echo "Ans: ". crypt($crypt,'st')."<br>";
echo nl2br("<br>");

	echo nl2br ("creating hash password by password hash- \n");
	echo "Ans: ". password_hash($slash, PASSWORD_DEFAULT)."<br>";
echo nl2br("<br>");

	echo nl2br ("trim the string from left side- \n");
	$trim = "h'ello world's!";
	echo "Ans: ". ltrim($trim,"h'")."<br>";
echo nl2br("<br>");

	echo nl2br ("trim the string from right side- \n");
	echo "Ans: ". rtrim($trim, "'s!")."<br>";
echo nl2br("<br>");

	echo nl2br ("string- \n");
	$item1 = array("hello","world","i","love","php");
	echo "Ans: ". count($item1)."<br>";
echo nl2br("<br>");
	
?>