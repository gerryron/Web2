  
<?php 
	$koneksi = mysqli_connect("localhost","root","","lat_dbase" );
  if (!$koneksi) {
		die("Gagal Terhubung dengan database".mysqli_connect_error());
	}
?>