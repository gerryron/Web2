<?php 
  include "koneksi.php"; 
  $articleID = $_GET['id']; 
  $perintah="DELETE FROM articles WHERE id =\"$articleID\""; 
  $hasil= mysqli_query ($koneksi, $perintah); 
  if ($hasil) { 
    echo "Artikel berhasil dihapus<br>"; 
    echo "<a href=\"edit_articles.php\">Back</a>"; 
  } else { 
    echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke database MySQL."; 
  } 
?>