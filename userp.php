<?php
if (!isset($_COOKIE["username"])){header('Location:login.php');}
?>
<html>
  <head>
    <link rel='stylesheet' type='text/css' href='CSS/myCss.css'/>
  </head>
  <body>
    <!--navbar!-->
    <div class='navbar'>
      <?php echo $_COOKIE['username'];
      //userprofile ?>

    </div>
    <div class="sidemenu">
      <h3><i>Your Hobbies</i></h3>
      <?php
      $con=mysqli_connect('localhost','root','root','OpenS');
      if($con){
        $email=$_COOKIE['email'];
        $sql="SELECT hobby from HobbyList where useremail='$email'";
        $r=mysqli_query($con,$sql);
        if(mysqli_num_rows($r)<1){
          echo "Recommended Hobbies</br>";
          $sql1="SELECT hobbyname from Community";
          $r1=mysqli_query($con,$sql1);
          //    //
          if($r1){
            //day10
            //list atleast 5 hobbies where the user can choose
            echo "Almost Done";
            //have a next button for the next bunch
          }
        }else{
          //display users hobbies
          echo "Hello there";
        }
        //   //
      }
      ?>
    </div>
  </body>
  <!--neeed to set up time!-->
</html>
