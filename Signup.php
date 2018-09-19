<?php
  //security
  //check if useremail is already in use
    if (isset($_POST['submit'])){
      $pass1=$_POST['pass1'];
      $pass2=$_POST['pass2'];
      if (!empty($pass1) || !empty($pass2))
      {
        if ($pass1==$pass2){
          $name=$_POST['uname'];$email=$_POST['email'];
          $con=mysqli_connect('localhost','tester','tester','OpenS');
          if ($con){
            echo $name.'<br/>'.$email.'<br/>'.$pass1;
            $sql="INSERT INTO OpenSUsers(username,email,password) VALUES('$name','$email','$pass1');";
            $r=mysqli_query($con,$sql);
            if ($r){
              header('Location:login.html');
            }
          }else{mysqli_error();}
        }
      }else{echo 'both password fields are needed';}
    }
?>
