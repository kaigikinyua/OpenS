<?php
if (!isset($_COOKIE["username"])){header('Location:login.php');}
?>
<html>
  <head>
    <link rel='stylesheet' type='text/css' href='CSS/myCss.css'/>
    <link rel='stylesheet' href='bootstrap/dist/js/bootstrap.js'/>
    <link rel='stylesheet' href='bootstrap/dist/css/bootstrap.css'/>
  </head>
  <body>
     <!--navbar!-->



    <nav class='navbar navbar-inverse navbar-fixed-top'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <?php
            $email=$_COOKIE["email"];
            $con=mysqli_connect('localhost','root','root','OpenS');
            $sql="SELECT * from OpenSUsers where email='$email'";
            $r=mysqli_query($con,$sql);
            while ($row=mysqli_fetch_array($r)) {
              echo "<image class='profile' src='profile/".$row[3]."' height='50px' width='50px'/><br/><p style='color:lightblue'>".$_COOKIE['username']."</p>";
            }
          ?>
        </div>
            <div class="container">
            <ul class="nav nav-pills">
              <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
              <li class="active"><a href="userp.php"><span class="glyphicon glyphicon-inbox"></span>chatpage</a></li>
              <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
              <li><a href=""></a></li>
            </ul>
          </div>
        <!--tabs-->
        <!--tabs-->
      </div>

    </nav>
    <!--navbarend-->
    <div class='container' style="height:90px"></div>
    <div class="sidemenu">
      <h3><i>Your Hobbies</i></h3>
      <?php
      $con=mysqli_connect('localhost','root','root','OpenS');
      if($con){
        $email=$_COOKIE['email'];
        $sql="SELECT * from Community where useremail='$email'";
        $r=mysqli_query($con,$sql);
        if(mysqli_num_rows($r)==0){
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
          $sql1="SELECT * FROM Community where useremail='$email'";
          $r=mysqli_query($con,$sql1);
          echo "<ul type='disk'>";
          while($w=mysqli_fetch_array($r)){
            echo "<li>".$w[0]."</li>";//
          }echo "</ul>";
        }
        //   //
      }
      ?>
    </div>
    <div class='chatpage'>
      //dispaly the hobbies that have a notification//
    </div>
  </body>
  <!--neeed to set up time!-->
</html>
