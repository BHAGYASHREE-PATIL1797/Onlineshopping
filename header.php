<?php	session_start();	?>
<?php
echo("<div style='overflow:auto'>");
  if(isset($_SESSION["u_id"]))
    {
	   $src = "photos/".$_SESSION["u_id"].".jpg";
	   echo("<img src='$src' width='80' height='80' style='float:left'/>");
    }

	if(isset($_SESSION["fullname"]))
		echo("<h2>Welcome ".$_SESSION["fullname"]."</h2>");
	else
		echo("<h2>Welcome GUEST!!!</h2>");
	echo("<br/><hr/>");
?>