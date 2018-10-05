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

      <!--Dropdown Here-->
      <form method='POST' enctype="multipart/form-data">
        <input type='file' name='myupload'/>
        <input type='submit' name='upload' value='upload'/>
        <?php
          if(isset($_POST['upload'])){
            $con=mysqli_connect('localhost','root','root','OpenS');
            $target='profile/'.basename($_FILES['myupload']['name']);
            if ($con){
              $image=$_FILES['myupload']['name'];
              $sql="INSERT INTO OpenS(profile) VALUES('$image')";
              mysqli_query($con,$sql);
              if(move_uploaded_file($_FILES['myupload']['tmp_name'], $target)){
                echo "Success";
              }else{echo "Error";}
            }else{echo "Error";}
          }
        ?>
      </form>
      <!--dropdown end-->
      <?php
        $con=mysqli_connect('localhost','root','root','OpenS');
        $sql="SELECT * from test";
        $r=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($r)) {
          echo "<image src='profile/".$row[0]."' height='20px' width='20px'/>";
        }
      ?>
    </div>
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
