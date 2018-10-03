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
        $sql="SELECT * from HobbyList where useremail='$email'";
        $r=mysqli_query($con,$sql);
        if(mysqli_num_rows($r)<1){
          echo "Currently you do not have hobbies</br>Here are some interesting ones</br>";
          $sql1="SELECT * from Hobbies";
          $r1=mysqli_query($con,$sql1);
          //    //
          if($r1){
            //day10
            //list atleast 5 hobbies where the user can choose
            echo "<table border='0px'><form method='POST'>";
            while ($finished=mysqli_fetch_array($r1)){
              echo "<tr><td>".$finished[0]."</td><td>".$finished[2]." users</td> <td><input type='submit' name='new' value=".$finished[0]."></td></tr>";
            }echo "</form></table>";
            //have a next button for the next bunch
            if(isset($_POST['new'])){
              setcookie('newhobby',$_POST['new']);
              header('Location:dynamic.php');
            }
          }
        }else{
          //display users hobbies
          $sql1="SELECT ";
        }
        //   //
      }
      ?>
    </div>
  </body>
  <!--neeed to set up time!-->
</html>
