<?php
  //check if useremail is already in use
  //error in username
    if (isset($_POST['submit'])){
      $pass1=$_POST['pass1'];
      $pass2=$_POST['pass2'];
      $con=mysqli_connect('localhost','root','root','OpenS');
      $email=$_POST['email'];
      if (check($email)==False){
        if (!empty($pass1) || !empty($pass2))
        {
          if ($pass1==$pass2){
            $name=$_POST['uname'];
            if (checkU($name)==False){
                if ($con){
              echo $name.'<br/>'.$email.'<br/>'.$pass1;
              $sql="INSERT INTO OpenSUsers(username,email,password) VALUES('$name','$email','$pass1');";
              $r=mysqli_query($con,$sql);
              if ($r){
                header('Location:login.php');
              }
              }else{mysqli_error();}
            }else{
              session_start();
              $_SESSION['error_username']="Please fill in the Username";
              header('Location:signup.php');
            }
        }
      }else{
        session_start();
        $_SESSION['pass1']="Password Field is empty";
        header("Location:signup.php");
      }
    }
    else{
      session_start();
      $_SESSION['error_emailexists']='Email already in use';
      header("Location:signup.php");
    }
  }
  ?>
    <?php
    function check($uemail){
      $con=mysqli_connect('localhost','root','root','OpenS');
      $s="SELECT * FROM OpenSUsers where email='$uemail'";
      $r=mysqli_query($con,$s);
      if(mysqli_num_rows($r)==0){
        return False;
      }else{
        return True;
      }
    }
?>
<?php
    function checkU($uname){
      if(!empty($uname)){return False;}
      else{return True;}
    }
?>
