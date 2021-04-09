<?php
  session_start();
  if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }
?>

<!DOCTYPE html>
<head>
  <title>Data Pasien Covid-19</title>
</head>
<body>
  <p><a href="logout.php">LOGOUT</a></p>
  <h1>Anda Sudah Login!</h1>
</body>
</html>