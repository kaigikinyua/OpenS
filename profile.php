<html>
  <head>
    <?php if(!isset($_COOKIE["username"]))
    {
      header("Location:Login.php");
    }?>
    <title><?php echo $_COOKIE["username"]?></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css"/>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
      </div>
    </div>
  </nav>
  <div class=" container"style="height:200px"></div>
    <div class='container'>
    <form method='POST' enctype="multipart/form-data">
      <input type='file' name='myupload'/>
      <input type='submit' name='upload' value='upload'/>
      <?php
        if(isset($_POST['upload'])){
          $con=mysqli_connect('localhost','root','root','OpenS');
          //directory to upload the file
          $target='profile/'.basename($_FILES['myupload']['name']);
          if ($con){
            $image=$_FILES['myupload']['name'];
            $email=$_COOKIE["email"];
            $sql="UPDATE OpenSUsers set profile='$image' WHERE email='$email'";
            mysqli_query($con,$sql);
            if(move_uploaded_file($_FILES['myupload']['tmp_name'], $target)){
              echo "Success";
              header("Location:profile.php");
            }else{echo "Error";}
          }else{echo "Error";}
        }
      ?>
    </form>
  </div>
  </body>
</html>
