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

  function registrasi($data) {
    global $conn;
    $provinsi = $data["provinsi"];
    $kota = $data["kota"];
    $kecamatan = $data["kecamatan"];
    $jenis_faskes = $data["jenis_faskes"];
    $faskes = $data["faskes"];
    $nik = $data["nik"];
    $nama = $data["nama"];
    $gender = $data["gender"];
    $umur = $data["umur"];
    $tanggalLahir = $data["tanggal_lahir"];
    $nohp = $data["nohp"];
    $alamat = $data["alamat"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $data["confirm-password"]);

    $result = mysqli_query($conn, "SELECT nomer_hp FROM pasien WHERE nomer_hp = '$nohp'");
    if (mysqli_fetch_assoc($result)){
      echo "<script>
              alert('Nomer HP sudah terdaftar di sistem.');
           </script>";
      return false;
    }

    if ($password != $confirmPassword) {
      echo "<script>
              alert('Konfirmasi Password tidak sesuai');
           </script>";
      return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO pasien VALUES 
              (NULL, '$provinsi', '$kota', '$kecamatan', '$jenis_faskes', '$faskes', '$nik', '$nama', '$gender', '$umur', '$tanggalLahir', '$nohp', '$alamat', '$password')");

    return mysqli_affected_rows($conn);
  }

?>