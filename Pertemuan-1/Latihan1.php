<?php
  $A=123; //ini adalah variabel global
  function test() {
    $A="Test";
    echo "Nilai A pada fungsi : $A \n";
  }
  test();
  echo "Nilai A pada luar fungsi : $A \n";
?>