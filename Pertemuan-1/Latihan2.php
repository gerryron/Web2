<?php
  $A=123; //variabel global
  function test() {
    global $A; //variabel local
    echo "Nilai A dalam fungsi : $A \n";
  }
  test();
  echo "nilai A luar fungsi : $A \n";
?>