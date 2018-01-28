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
        Associates:<br/>
        <!--friends names and emails-->
        Profile : Username :
      </div>
      <hr></hr>
      <div class='P.Associates'>
        <?php
          $con=mysqli_connect("localhost","tester","tester","OpenS");
          $email=$_SESSION['email'];
          $sql="SELECT username,email from OpenSUsers where email!='$email'";
          $r=mysqli_query($con,$sql);
          #$array[];
          echo "<form method='GET'action='Userp.php' >";
          while ($f=mysqli_fetch_array($r))
          {
            $array['username']=$f[0];
            $array['email']=$f[1];
            #echo $array['email']." ".$array['username']."<br/>";
            echo "<table border='0px'>
            <tr><td>".$array['username']."</td><td><input type='submit' name='add' value='".$array['email']."'/></td></tr>
            </table>";
          }

        ?>
      </div>
      <div class='trending'>
        Subject:
      </div>
    </div>
    <div class='chatpage'>

    </div>
  </body>
</html>
