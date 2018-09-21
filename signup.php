<html>
  <head>
    <?php session_start();?>
    <title>Signup</title>
  </head>
  <body text='red'>
    <center>
      <form method="POST" action="Signup.php">
        <table border="0px">
          <tr>
            <td><input type="text" name='uname' placeholder="Username"/></td>
          </tr>
          <?php if(!empty($_SESSION['error_username'])){ echo "<tr><td>".$_SESSION['error_username']."</td></tr>";session_destroy();}?>
          <tr>
            <td><input type="text" name='email' placeholder="Email"/></td>
          </tr>
          <?php if(!empty($_SESSION['error_emailexists'])){ echo "<tr><td>".$_SESSION['error_emailexists']."</td></tr>";session_destroy();}?>
          <tr>
            <td><input type="password" name='pass1' placeholder="Password"/></td>
          </tr>
          <?php if(!empty($_SESSION['error_pass1'])){ echo "<tr><td>".$_SESSION['error_pass1']."</td></tr>";session_destroy();}?>
          <tr>
            <td><input type="password" name='pass2' placeholder="Confirm Password"/></td>
          </tr>
          <?php if(!empty($_SESSION['error_pass2'])){ echo "<tr><td>".$_SESSION['error_pass2']."</td></tr>";session_destroy();}?>
          <tr>
            <td><input type="submit" name='submit' value="Submit"/></td>
          </tr>
        </table>
      </form>
    </center>
  </body>
</html>
