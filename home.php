<?php
    include("header.php");

    $con = mysqli_connect("127.0.0.1:3307","root","","shoppingdb");
    $query = "select * from category";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result))
    {
        //echo("<a href='selectproduct.php?catid=".$row["c_id"]."'>".$row["c_name"]."</a> <br/>" );
        //github
echo("<a href='selectproduct.php?catid=".$row["c_id"]."'>".$row["c_name"]."</a> <br/>" );
    }
    mysqli_close($con);


?>
