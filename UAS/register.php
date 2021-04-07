<?php
  require "./functions.php";
  // Membutuhkan Live Search dari Ajax jika ingin lebih mantap
  $provinsi = query("SELECT nama_wilayah FROM wilayah WHERE level = 1");
  $kota = query("SELECT nama_wilayah FROM wilayah WHERE level = 2");
  $kecamatan = query("SELECT nama_wilayah FROM wilayah WHERE level = 3");
  $faskes = query("SELECT nama_faskes FROM faskes");
?>

<!DOCTYPE html>
<head>
  <title>Registrasi Pasien</title>
</head>
<body>
  <form action="" method="post" id="regisForm">
    <table>
      <tr>
        <td><label for="provinsi">Provinsi : </label></td>
        <td>
            <select name="provinsi" id="provinsi" required>
              <option value="" disabled selected>Pilih Provinsi</option>
              <?php foreach($provinsi as $row) :
                $namaProvinsi = $row["nama_wilayah"];
              ?>
              <option value="<?= $namaProvinsi?>"><?= $namaProvinsi?></option>
              <?php endforeach; ?> 
            </select>
        </td>
      </tr>
      <tr>
        <td><label for="kota">Kabupaten / Kota : </label></td>
        <td>
            <select name="kota" id="kota" required>
            <option value="" disabled selected>Pilih Kab/Kota</option>
              <?php foreach($kota as $row) : 
                $namaKota = $row["nama_wilayah"];
              ?>
              <option value="<?= $namaKota?>"><?= $namaKota?></option>
              <?php endforeach; ?> 
            </select>
        </td>
      </tr>
      <tr>
        <td><label for="kecamatan">Kecamatan : </label></td>
        <td>
            <select name="kecamatan" id="kecamatan" required>
              <option value="" disabled selected>Pilih Kecamatan</option>
              <?php foreach($kecamatan as $row) : 
                $namaKecamatan = $row["nama_wilayah"];
              ?>
              <option value="<?= $namaKecamatan?>"><?= $namaKecamatan?></option>
              <?php endforeach; ?> 
            </select>
        </td>
      </tr>
      <tr>
        <td><label for="jenis_faskes">Jenis Faskes : </label></td>
        <td>
            <select name="jenis_faskes" id="jenis_faskes" required>
              <option value="" disabled selected>Pilih Jenis Faskes</option>
              <option value="rsud">RSUD</option>
              <option value="puskesmas">Puskesmas</option>
            </select>
        </td>
      </tr>
      <tr>
        <td><label for="faskes">Fasilitas Kesehatan : </label></td>
        <td>
            <select name="faskes" id="faskes" required>
              <option value="" disabled selected>Pilih Faskes</option>
              <?php foreach($faskes as $row) : 
                $namaFaskes = $row["nama_faskes"];
              ?>
              <option value="<?= $namaFaskes?>"><?= $namaFaskes?></option>
              <?php endforeach; ?> 
            </select>
        </td>
      </tr>
      <tr>
        <td><label for="nik">NIK : </label></td>
        <td><input type="text" name="nik" id="nik" required></td>
      </tr>
      <tr>
        <td><label for="nama">Nama : </label></td>
        <td><input type="text" name="nama" id="nama" required></td>
      </tr>
      <tr>
        <td><label for="gender">Jenis Kelamin : </label></td>
        <td>
            <select name="gender" id="gender" required>
              <option value="" disabled selected>Pilih Jenis Kelamin</option>
              <option value="Laki laki">RSUD</option>
              <option value="Perempuan">Puskesmas</option>
            </select>
        </td>
      </tr>
      <tr>
        <td><label for="umur">Umur : </label></td>
        <td><input type="number" name="umur" id="umur" required></td>
      </tr>
      <tr>
        <td><label for="tanggal_lahir">Tanggal Lahir : </label></td>
        <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" required></td>
      </tr>
      <tr>
        <td><label for="nohp">Nomer HP : </label></td>
        <td><input type="text" name="nohp" id="nohp" required></td>
      </tr>
      <tr>
        <td><label for="alamat">Alamat : </label></td>
        <td><textarea name="alamat" form="regisForm">Enter text here...</textarea></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit" class="btn-submit">Submit</button></td>
      </tr>
    </table>
  </form>
</body>
</html>

<?php 
  // if(isset($_POST["submit"])){
  //   var_dump($_POST["alamat"]);
  // }
?>