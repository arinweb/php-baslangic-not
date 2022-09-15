<?php
echo "<h1>For Döngüsü İle Çarpım Tablosu</h1>";
for ($i = 1; $i <= 10; $i++) {
     for ($x = 1; $x < 9; $x++) {
          echo "$i × $x =".$i*$x;
          echo "<br><br>";
     }
}
?>
