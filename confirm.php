
<?php
   /*$uid = 
   $total = 
   $dt = date('Y-m-d');
   insert these details into shopping table - id(primary key, auto incerement),uid,shoppindate,price */
   include("header.php");   

   echo("<br/> UID : ".$_SESSION["u_id"]);
   echo("<br/> Date : ".date('Y-m-d'));
   echo("<br/> Cost : ".$_SESSION["total"]);

   echo("<br/> Cart is confirmed <br/>");
   echo("<br/> You will receive the bill on ".$_SESSION["email"]);
   echo("<br/> You will receive the message on ".$_SESSION["contact"]." before deleivery");
   echo("<br/> <a href='logout.php'> Logout? </a> <br/>"); 
   //github

?>
