<?php 
  // hostname or ip of server 
  $servername='localhost'; 
  // username and password  
  $dbusername='root'; 
  $dbpassword=''; 
  // ubah ke functioon mysqli_connect untuk php versi 7 keatas
  $link= mysqli_connect ("$servername","$dbusername","$dbpassword") 
    or die ( " Not able to connect to server "); 
  if ($link) { 
    echo "ok....koneksi berhasil"; 
  } 
?> 
