<html>
<!--need to tignten security-->
  <head>
    <title>Login</title>
  </head>
  <body>
    <form method="POST" action="Login.php">
      <center>
      <table  border='0px'>
        <tr>
          <td><input type='text' name="email" placeholder="Email"></td>
        </tr>
        <tr>
          <td><input type='password' name="pass" placeholder="Password"></td>
        </tr>
        <tr>
          <td><input type='submit' name="submit" value="Submit"></td>
        </tr>
          <?php
            if(!empty($_SESSION['emptyfields'])){
              echo "<tr><td>".$_SESSION['emptyfields']."</td></tr>";
              session_destroy();
            }
          ?>
      </table>
      <center>
    </form>
  </body>
</html>
