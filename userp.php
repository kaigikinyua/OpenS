<html>
  <head>
    <?php
    session_start();
    echo "<title>".$_SESSION['username']."</title>";
    ?>
    <link rel='stylesheet' type='text/css' href='CSS/myCss.css'/>
  </head>
  <body>
    <div class='contacts'>
      <div class='userprofile'>
        <!--userpicture-->
        <?php echo $_SESSION['username']; ?>
      </div>
      <hr></hr>
      <form method="POST">
        Create Hobby:<br/>
        <input type="text" name="Hobby_name" placeholder="Hobby Name"/>
        <input type="text" name='description' placeholder="Hobby description"/>
        <input type="submit" name="submit" value="submit"/>
      </form>
      <?php
      if(isset($_POST['submit'])){
        $con=mysqli_connect("localhost","tester","tester","OpenS");
        if($con){
          $hobby=$_POST["Hobby_name"];$desc=$_POST["description"];
          if (!empty($hobby) && !empty($desc)){
            $name=$_SESSION['email'];
            $sql="INSERT INTO HobbyList(hobby_name,description,creator) VALUES('$hobby','$desc','$name')";
            $r=mysqli_query($con,$sql);
            $sql2="INSERT INTO Hobbiest (hobby_name,email) VALUES('$hobby','$name')";
            $r2=mysqli_query($con,$sql2);
          }else{echo "<p>One field is empty</p>";}
        }else{echo mysqli_error($con);}
      }
      ?>
    </div>
    <div class='chatpage'>
    </div>
    <div class ="hobbies">
      <form method="POST"></f
    </div>
  </body>
</html>
