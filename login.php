<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title></title>


<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("back.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>





</head>
<body>
<div class="bg">

	 <?php	include("header.php")	?>
         <?php
		if(isset($_COOKIE["loginerror"]))
			echo("<p style='color:red'>".$_COOKIE["loginerror"]."</p>");
	?>

  <div class="container-fluid">


     <div class="row">
       <div class="col-md-6">
          <form action="logincheck.php">
             <div class="form-group">
                 <label for="u_id"> <b>User id : </b></label>
                    <input type="text" name="u_id" class="form-control form-control-lg" />
             </div>    
            <div class="form-group">
                 <label for="pwd"> <b>PWD<b> : </label>
                     <input type="passward" name="passward" id="passward" class="form-control form-control-sm" />
            </div>
            <div>
                 <input type="submit" value="LOGIN" class="btn btn-primary btn-lg" />
            </div>
          </form>
       </div>
    </div>
    <a href="entry.html">New user Register here </a>
  </div>
</div>
</body>
</html>