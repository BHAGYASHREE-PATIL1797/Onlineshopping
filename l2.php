/*<?php	session_start();	?>
<?php
	$u_id=$_REQUEST["u_id"];
	$passward=$_REQUEST["passward"];
	$con=mysqli_connect("127.0.0.1:3307","root","","shoppingdb");
	if($con)
	{
		$query="select * from users where u_id = '$u_id' and password = '$passward'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result) == 1)
		{
			$row=mysqli_fetch_assoc($result);
			$_SESSION["fullname"]=$row["fname"]." ".$row["lname"];
			setcookie("loginerror","",time()-60);
			header('Location: categories.php');
		}
		else
		{
			setcookie("loginerror","Wrong ID/Password");
			header('Location: login.php');
		}
	}
?>
*/



<?php     session_start();    ?>


<?php
   $uid = $_REQUEST["u_id"];
   $pwd = $_REQUEST["passward"];

   $con = mysqli_connect("127.0.0.1:3307","root","","shoppingdb");
   $query = "select * from users";
   $result = mysqli_query($con,$query); 
   //echo("<br/>".mysqli_num_rows($result));
   $flag=false;
   while($row = mysqli_fetch_assoc($result))
   {
        if(strcmp($row["u_id"],$u_id)==0 && strcmp($row["password"],$passward)==0)
        {
            $flag=true;
		 $_SESSION["u_id"]=$row["u_id"];
            $_SESSION["email"]=$row["email"];
            $_SESSION["contact"]=$row["contact"];
            $_SESSION["name"]=$row["fname"]." ".$row["mname"]." ".$row["lname"];
            break;
        }
   }
   //echo($flag);
   
   if($flag)
   {
        header('Location: home.php');
   }
   else
   {
        header('Location: l1.php');
   }
   
?>