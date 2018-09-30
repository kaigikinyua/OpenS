<?php
if (!isset($_COOKIE["username"])){header('Location:login.php');}
else{echo "Hello ".$_COOKIE["username"];}
?>
<html>
  <head>
    <link rel='stylesheet' type='text/css' href='CSS/myCss.css'/>
  </head>
  <body>
    <!--navbar!-->
    <div class='navbar'>
      <?php
      echo $_SESSION['username'];?>
    </div>
  </body>
  <!--neeed to set up time!-->
</html>
