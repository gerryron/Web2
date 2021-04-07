<?php
  require "./functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <td><label for="nohp">Nomer HP : </label></td>
        <td><input type="text" name="nohp" id="nohp" required></td>
      </tr>
      <tr>
        <td><label for="password">Password : </label></td>
        <td><input type="password" name="password" id="password" required></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="rememberme" id="rememberme"></td>
        <td><label for="rememberme">Ingat Saya</label></td>
      </tr>
    </table>
  </form>
</body>
</html>