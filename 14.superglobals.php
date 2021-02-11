<!-- Superglobals -->
<?php
echo ("<h2>Superglobals Practice</h2> ");

  echo "This 4(get post file request) variable used in form normally";
	echo "<h4>GET global variable</h4> ";
	print_r($_GET);
	echo "<h4>POST global variable</h4> ";
	print_r($_POST);
	echo "<h4>FILE global variable</h4> ";
	print_r($_FILES);
	echo "<h4>REQUEST global variable</h4> ";
	print_r($_REQUEST);
	echo " <br> ";

  echo "this variables used to check the information";
	echo "<h4>SERVER global variable</h4> ";
	echo "<pre>";
	print_r($_SERVER);

	echo "<h4>SESSION global variable</h4> ";
	// print_r ($_SESSION); for this we need some other code

	echo "<h4>COOKIE global variable</h4> ";
	print_r($_COOKIE);

	echo "<h4>ENVIRONMENT global variable</h4> ";
	print_r($_ENV);

  echo "we can make custom Superglobal variable by this";
    print_r ($GLOBALS);
?>