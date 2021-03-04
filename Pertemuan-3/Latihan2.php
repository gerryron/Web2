<html>
  <head>
    <title>contoh Pengguna IF</title>
  </head>
  <body>
    <form>
      Besar pembelian :
      <input type="text" name="total_beli"><br><br>
      <input type="submit" value="Tentukan Diskon">
    </form>
    <?php
      if(isset($total_beli)) {
        $total_beli= intval($total_beli);
        $diskon=0;
        if($total_beli>=200000) {
          $diskon=0.1;
        } else if($total_beli>=100000) {
          $diskon=0.05;
        } else {
          $diskon=0.01;
        }

        $diskon=$diskon * intval($total_beli);
        printf("Diskon= %s<br>\n", $diskon);
        printf("Pembayaran= %s<br>\n", $total_beli-$diskon);
      }
    ?>
  </body>
</html>