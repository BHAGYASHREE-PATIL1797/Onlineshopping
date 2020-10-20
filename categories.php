
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title></title>
</head>
<div class="container-fluid">
<?php
	//include("header.php");
	echo("<h2>All Categories</h2><br/>");
	$con=mysqli_connect("127.0.0.1:3307","root","","shoppingdb");
	$query="select * from category";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($result))
	{       $cid=$row["c_id"];
		$cnm=$row["c_name"];
		$desc=$row["c_description"];	
		echo("<br/><a href='selectproduct.php?cid=$cid' title='$desc'>$cnm</a>");
               
	}
?>


</div>
</html>