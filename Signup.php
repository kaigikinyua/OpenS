<?php
  //security
  //check if useremail is already in use
    if (isset($_POST['submit'])){

      $pass1=$_POST['pass1'];
      $pass2=$_POST['pass2'];
      $con=mysqli_connect('localhost','tester','tester','OpenS');
      $email=$_POST['email'];
      if (check($email)==False){
      if (!empty($pass1) || !empty($pass2))
      {
        if ($pass1==$pass2){
          $name=$_POST['uname'];
          if ($con){
            echo $name.'<br/>'.$email.'<br/>'.$pass1;
            $sql="INSERT INTO OpenSUsers(username,email,password) VALUES('$name','$email','$pass1');";
            $r=mysqli_query($con,$sql);
            if ($r){
              header('Location:login.php');
            }
          }else{mysqli_error();}
        }
      }else{
        $message="password field required";
        $url="signup.php";
        header("Location:signup.php");}
    }}
    else{
      session_start();
      $_SESSION['error_emailexists']='Email already in use';
      header("Location:index.html");
    }?>
    <?php
    function check($uemail){
      $con=mysqli_connect('localhost','tester','tester','OpenS');
      $s="SELECT * FROM OpenSUsers where email='$uemail'";
      $r=mysqli_query($con,$s);
      if(mysqli_num_rows($r)==0){
        return False;
      }else{
        return True;
      }
    }
?>
