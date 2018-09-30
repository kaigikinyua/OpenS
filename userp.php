<html>
  <head>
    <?php
    session_start();
    ?>
    <link rel='stylesheet' type='text/css' href='CSS/myCss.css'/>
  </head>
  <body>
    <!--navbar!-->
    <div class='navbar'>
      <?php
      echo $_SESSION['username'];?>
    </div>
  </body>
</html>
