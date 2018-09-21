<html>
  <head>
    <?php session_start()?>
    <title>Signup</title>
  </head>
  <body>
    <center>
      <form method="POST" action="Signup.php">
        <table border="0px">
          <tr>
            <td><input type="text" name='uname' placeholder="Username"/></td>
          </tr>
          <tr>
            <td><input type="text" name='email' placeholder="Email"/></td>
            <?php if(!empty($_SESSION['error_emailexists'])){ echo $_SESSION['error_emailexists'];session_destroy();}?>
          </tr>
          <tr>
            <td><input type="text" name='pass1' placeholder="Password"/></td>
          </tr>
          <tr>
            <td><input type="text" name='pass2' placeholder="Confirm Password"/></td>
          </tr>
          <tr>
            <td><input type="submit" name='submit' value="Submit"/></td>
          </tr>
        </table>
      </form>
    </center>
  </body>
</html>
