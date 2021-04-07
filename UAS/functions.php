<?php
  $conn = mysqli_connect("localhost", "root", "", "uas_kelompok6");
  if (!$conn) {
		die("Gagal Terhubung dengan database".mysqli_connect_error());
	}

  function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }

    return $rows;
  }

?>