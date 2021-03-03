<?php
  // ini adalah komentar dalam satu baris

  /*
    Kalau yang ini, komentar
    dalam banyak baris, yang baru
    akan selesai jika ditutup dengan
  */
?>

<html>
  <head>
    <title>Test Penyisipan PHP pada HTML</title>
  </head>
  <body>
    Kapal asing silahkan identifikasi diri anda!<br>
    <?php
      // Berikut merupakan inisialisai beberapa variabel
      $namad="Gerry";
      $namat="Luc";
      $namab="Piccard";
      $nilai1=25;
      $nilai2=50;
      $hasil=$nilai1*$nilai2;
      $a=2;
      $b=3;
      $hsl=pow($a,$b);
    ?>
    <b>Ini adalah kapal Federasi Planet USS Enterprise.<br>
    <?php
      echo "Saya $namad $namat $namab, kapten kapal.</b><br>";
      echo "$nilai1 * $nilai2 = $hasil<br>";
      echo "$a^$b = $hsl";
    ?>
  </body>
</html>