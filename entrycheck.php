<?php

 $host = '127.0.0.1:3307';  
 $user = 'root';  
 $pass = '';  
 $dbname = 'shoppingdb';  
  
 $conn = mysqli_connect($host, $user, $pass,$dbname);  
      if(!$conn){  
          die('Could not connect: '.mysqli_connect_error());  
                }  
        echo 'Connected successfully<br/>';  

 $u_id=$_REQUEST["u_id"];
 $passward=$_REQUEST["passward"];
 $fname=$_REQUEST["fname"];
 $mname=$_REQUEST["mname"];
 $lname=$_REQUEST["lname"];
 $email=$_REQUEST["email"];
 $contact=$_REQUEST["contact"];


 $sql = "INSERT INTO users  VALUES ('$u_id','$passward','$fname','$mname','$lname','$email',$contact)";  
    if(mysqli_query($conn, $sql))
        {  
        echo "Registration  successfully";  
         }
        else
        {  
          echo "Could not register: ".mysqli_error($conn);  
         }  
      echo("<br/>Want to proceed for <a href='login.php'>login?</a>");
	//mysqli_close($conn);
   
  echo("<br/> click to upload the img <a href='uploadphoto.html'> select </a> ");
   print_r($_FILES["photo"]);

   echo("photos/".$u_id.".jpg");

  if(move_uploaded_file($_FILES["photo"]["tmp_name"],"photos/".$u_id.".jpg"))
	echo("<br/> Photo uploaded");
          else
          echo("<br/> Photo not uploaded");
      
  echo("<a href='login.php'> Login again? </a>");  
 //mysqli_close($conn);  

  
?>
