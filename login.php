<html>
<!--need to tignten security-->
  <head>
    <title>Login</title>
  </head>
  <body>
    <center>
      <div class="container">
        <form method="POST" action="Login.php">
          <div class="form-group">
            <label>Email<label><br/>
              <input type='text' name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label>Password</label><br/>
              <input type='password' name="pass" placeholder="Password">
            </div>
              <input type='submit' name="submit" value="Submit">
            </center>
              <?php
                if(!empty($_SESSION['emptyfields'])){
                  echo "<tr><td>".$_SESSION['emptyfields']."</td></tr>";
                  session_destroy();
                }
              ?>
        </form>
    </div>
  </body>
</html>
