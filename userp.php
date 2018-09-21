<html>
  <head>
    <?php
    session_start();
    echo "<title>".$_SESSION['username']."</title>";
    ?>
    <link rel='stylesheet' type='text/css' href='CSS/myCss.css'/>
  </head>
  <body>
    <div class='contacts'>
      <div class='userprofile'>
        <!--userpicture-->
        <?php echo $_SESSION['username']; ?>
      </div>
      <hr></hr>

      <div class='friends'>
        Contributors:<br/>
        <!--friends names and emails-->
        Profile : Username :
      </div>
      <hr></hr>
      <div class='trending'>
        Subject:
      </div>
    </div>
    <div class='chatpage'>
      
    </div>
  </body>
</html>
