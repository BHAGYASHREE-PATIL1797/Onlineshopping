<?php
include("header.php");
$con=mysqli_connect("127.0.0.1:3307","root","","shoppingdb");
$cid=$_REQUEST["cid"];
$query="select * from product where cat_id=$cid";
$result=mysqli_query($con,$query);

echo("<script src='jquery-3.5.1.min.js'></script>");
//echo("<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>");
echo("<script>$(document).ready(function ()
{
    $('a.slide').click(function ()
    {   
        $(this).next().slideToggle(1000);
    });
            
        });</script>");
//echo("select product:");
//echo("select product_name:");
//echo("<select name='product'>");
echo("<form action='addtocart.php'>");
while($row=mysqli_fetch_assoc($result))
{
	$pid=$row["p_id"];
	$pnm=$row["p_name"];
	$pr=$row["p_price"];
	$desc=$row["p_description"];
	//echo("<br/>product_name::".$pnm);
	//echo("<option value='$pid'>$pnm</option>");
	//echo("<a href='#' id='view1'>DETAILS</a>");
	//echo("<a href='#' id='view2'>DETAILS</a>");
	
	
	echo("<div><h1>".$pname."</h1>&emsp;&emsp;&emsp;&emsp;<a href='#' class='slide'>Details of product</a>");
    echo("<div style='display:none;background-color:lightsalmon'><p> prize :".$pr."<br/> Type:".$desc."<br/><br/><a href='addtocart.php?p_id=$pid'>want to add to cart</a></p></div><br/><br/> </div>");
	
	
}
echo("</form>");
	mysqli_close($con);

?>