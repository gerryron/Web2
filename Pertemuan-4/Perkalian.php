<?php
echo "Tabel Perkalian <br>=============<br> ";

for($i = 15 ;$i<= 45 ;$i++) {
if ($i % 2 == 0 ) continue ;
else {
  $hasil = 12 * $i;
  echo "12 * $i = $hasil <br>";
}
}
?> 