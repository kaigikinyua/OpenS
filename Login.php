<?php
    if (isset($_POST['submit'])){
      $email=$_POST['email'];$pass=$_POST['pass'];
      if (!empty($email) || !empty($pass)){
        $con=mysqli_connect('localhost','tester','tester','OpenS');
        if ($con){
          $sql="SELECT * FROM OpenSUsers WHERE (email='$email' and password='$pass')";
          $r=mysqli_query($con,$sql);
          if (mysqli_num_rows($r)==1){
            header('Location:index.html');
          }else{echo "Incorrect credentials";}
        }else{echo "Error conncting to the database";}
      }else{echo "Empty Fields";}
    }
?>
