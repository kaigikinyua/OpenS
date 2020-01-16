<?php
    if (isset($_POST['submit'])){
      $email=$_POST['email'];$pass=$_POST['pass'];
      if (!empty($email) && !empty($pass)){
        $con=mysqli_connect('localhost','root','root','OpenS');
        if ($con){
          $sql="SELECT username FROM OpenSUsers WHERE (email='$email' and password='$pass')";
          $r=mysqli_query($con,$sql);
          if (mysqli_num_rows($r)==1){
            $output=mysqli_fetch_assoc($r);
            $cookie_value=$output['username'];
            setcookie("username",$cookie_value);
            setcookie("email",$email);
            header('Location:userp.php');
          }else{echo "Incorrect credentials";}
        }else{echo "Error conncting to the database";}
      }else{  session_start();
        $_SESSION['emptyfields']="PLease fill in all the fields";
      header("Location:login.php");}
    }
?>
