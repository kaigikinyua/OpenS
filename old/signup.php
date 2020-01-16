<html>
  <head>
    <?php session_start();?>
    <title>Signup</title>
  </head>
  <body text='red'>
    <center>
      <div class="container">
      <form method="POST" action="Signup.php">
          <div class="form-group">
            <label>Username</label></br>
            <input type="text" name='uname' placeholder="Username"/>
          </div>
          <?php if(!empty($_SESSION['error_username'])){ echo "<tr><td>".$_SESSION['error_username']."</td></tr>";session_destroy();}?>
          <div class="form-group">
            <label>Email</label></br>
            <input type="text" name='email' placeholder="Email"/>
          </div>
          <?php if(!empty($_SESSION['error_emailexists'])){ echo "<tr><td>".$_SESSION['error_emailexists']."</td></tr>";session_destroy();}?>
          <div class="form-group">
            <label>Password</label></br>
            <input type="password" name='pass1' placeholder="Password"/>
          </div>
          <?php if(!empty($_SESSION['error_pass1'])){ echo "<tr><td>".$_SESSION['error_pass1']."</td></tr>";session_destroy();}?>
          <div class="form-group">
            <label>Confirm Password</label></br>
            <input type="password" name='pass2' placeholder="Confirm Password"/>
          </div>
          <?php if(!empty($_SESSION['error_pass2'])){ echo "<tr><td>".$_SESSION['error_pass2']."</td></tr>";session_destroy();}?>
            <input type="submit" name='submit' value="Submit"/>
      </form>
    </div>
    </center>
  </body>
</html>
