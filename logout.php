<?php
   session_start();
   session_destroy();
   echo("<br/> U r succefully logged out");
   echo("<br/> <a href='login.php'> Login again? </a>");

?>  