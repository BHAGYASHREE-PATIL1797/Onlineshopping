
<?php
         include("header.php");
        $sp = $_REQUEST["product"];
	if(isset($_SESSION["cart"]))
		array_push($_SESSION["cart"],$sp);
	else
		$_SESSION["cart"]=array($sp);
	echo(  "<br/> $sp is added to cart");
	echo("<br/>There are total ".count($_SESSION['cart'])." product in the cart");
	echo("<br/><a href='categories.php'>More Selection</a>");
	echo("<br/><a href='viewchart.php'>View cart</a>");
        echo("<br/> <a href='home.php'> Go Back to Home </a> ");
?>

