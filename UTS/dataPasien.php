<!DOCTYPE html>
<html>
  <head>
    <title>Data pasien covid-19</title>
  </head>
  <style>
    html, body {
    margin: 0px;
    padding: 0px;
    background-color: azure;
  }
  h1 {
    text-align: center;
    margin-top: 100px;
  }
  form {
    width: 400px;
    height: 300px;
    background-color: lightgoldenrodyellow;
    margin: 50px auto 0px auto;
    padding: 10px;
    border-radius: 10px;
  }
  .form-table{
    margin : 20px auto 0px auto;
  }
  .btn-submit{
    margin : 30px 180px;
  } 
  </style>
  <body>
    <h1>Tambah data pasien</h1>
    <form action="" method="post">
      <table class="form-table">
        <tr>
          <td><label for="wilayah">Nama Wilayah : </label></td>
          <td>
            <select name="wilayah" id="wilayah" required>
              <option value="" disabled selected>Pilih Wilayah</option>
              <option value="DKI Jakarta">DKI Jakarta</option>
              <option value="Jawa Barat">Jawa Barat</option>
              <option value="Banten">Banten</option>
              <option value="Jawa Tengah">Jawa Tengah</option>
            </select>
        </td>
        </tr>
        <tr>
          <td><label for="positif">Jumlah Positif : </label></td>
          <td><input type="text" name="positif" id="positif" required></td>
        </tr>
        <tr>
          <td><label for="dirawat">Jumlah Dirawat : </label></td>
          <td><input type="text" name="dirawat" id="dirawat" required></td>
        </tr>
        <tr>
          <td><label for="sembuh">Jumlah Sembuh : </label></td>
          <td><input type="text" name="sembuh" id="sembuh" required></td>
        </tr>
        <tr>
          <td><label for="meninggal">Jumlah Meninggal : </label></td>
          <td><input type="text" name="meninggal" id="meninggal" required></td>
        </tr>
        <tr>
          <td><label for="nama">Nama Operator : </label></td>
          <td><input type="text" name="nama" id="nama" required></td>
        </tr>
        <tr>
          <td><label for="nim">NIM Mahasiswa : </label></td>
          <td><input type="text" name="nim" id="nim" required></td>
        </tr>
      </table>
      <button type="submit" name="submit" class="btn-submit">Submit</button>
    </form>
  </body>
</html>

<?php 
  if(isset($_POST["submit"])){
    $myFile = fopen("db.html", "w") or die("Unable to open file!");
    $datas = explode("|", implode("|", $_POST));
    $wilayah = $datas[0];
    $positif = $datas[1];
    $dirawat = $datas[2];
    $sembuh = $datas[3];
    $meninggal = $datas[4];
    $operator = $datas[5];
    $nim = $datas[6];
    $currentDate = date('d F Y h:i:s', time());

    $htmlW = <<<HTMLW
    <!DOCTYPE html>
    <html>
      <head>
        <title>Data Pasien Wilayah $wilayah</title>
      </head>
      <style>
        html, body {
          margin: 0px;
          padding: 0px;
          background-color: azure;
        }
        div {
          margin : 100px auto;
          font-size: 17px;
          text-align: justify;
          line-height: 1.2;
        }
        table, tr, td, th{
          margin: 20px auto 0px auto;
          border: 1px solid black;
          border-collapse: collapse;
          padding: 0.7rem 2rem;
        }
      </style>
      <body>
        <div style="text-align:center;">
          Data pemantauan Covid-19 Wilayah $wilayah<br>
          Per $currentDate <br>
          $operator/$nim
          <table>
            <thead>
              <tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>$positif</td>
                <td>$dirawat</td>
                <td>$sembuh</td>
                <td>$meninggal</td>
              </tr>
            </tbody>
          </table>
        </div>
      </body>
    </html>
    HTMLW;
    fwrite($myFile, $htmlW);
    fclose($myFile);

    header("Location: db.html");
    exit;
  }
?>