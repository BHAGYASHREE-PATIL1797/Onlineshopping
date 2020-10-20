<?php 
echo("<br/> uid :" .$REQUEST["uid"]);
echo("<br/> file name  :" .$_FILES["photo"]["name"]);


  if (move_uploaded_file($_FILES["photo"]["tmp_name"],"photos/".$_REQUEST["uid"].".jpg"))
 {
    echo "The file has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

echo("<p> upload file <p/>");
  $name=$_REQUEST["uid"].".jpg";
 // echo("<img src=".$name" width="200" height="200"/>");
echo("<img src=".$name"  width='200' height='200'/>");
?>
