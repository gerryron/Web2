<?php
  session_start();
  require "./functions.php";

  // cek ketersediaan cookie
  if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT nomer_hp FROM pasien WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan nomer hp
    if ($key === hash('sha256', $row['nomer_hp'])) {
      $_SESSION['login'] = true;
    }
  }

  // jika sudah ada session langsung arahkan ke index
  if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
  }

  if(isset($_POST["login"])) {
    $nomerHp = $_POST["nohp"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT id, nomer_hp, password FROM pasien WHERE nomer_hp = '$nomerHp'");

    if (mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);

      // set session & cookie 10 menit jika berhasil login
      if (password_verify($password, $row["password"])) {
        $_SESSION["login"] = true;

        if (isset($_POST["remember"])){
          setcookie('id', $row['id'], time()+600);
          setcookie('key', hash('sha256', $row['nomer_hp']), time()+600);
        }
        
        header("Location: index.php");
        exit;
      }
    }
    $error = true;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
</head>
<body>
  <h1>Halaman Login</h1>

  <?php if(isset($error)) :?>
    <p style="color: red; font-style: italic; ">nomer hp/ password salah</p>
  <?php endif; ?>

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
        <td>
         <input type="checkbox" name="remember" id="remember">
          <label for="remember">Ingat Saya</label>
        </td>
      </tr>
      <tr>
        <td><button type="submit" name="login">Login</button></td>
        <td><button onclick="document.location='register.php'">Register</button></td>
      </tr>
    </table>
  </form>
</body>
</html>