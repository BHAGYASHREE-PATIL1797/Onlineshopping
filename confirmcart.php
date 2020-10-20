<?php          session_start();      ?>

<?php

    echo("Bill is generated <br/>");
    echo("<br/>Bill will be mailed at ".$_SESSION["email"]);
    echo("<br/>U will receive the message before delivery on ".$_SESSION["contact"]);
    $dt = date("Y-m-d");
    $u_id = $_SESSION["u_id"];
    $tot = $_SESSION["total"];
    echo("<br/>" .$dt." : ".$u_id." : ".$tot);
    $con = mysqli_connect("127.0.0.1:3307","root","","shoppingdb");  
    $query = "insert into shopping(user_id,shoppingDate,totalprice) values('$u_id' ,'$dt', $tot)";
    if(mysqli_query($con,$query))
	  echo("<br/>Shopping summary is inserted");
    echo("<br/><a href='logout.php'>  Logout?  </a>");

?>