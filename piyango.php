<?php

$say=1;
$kazan=2;
$tahmin=3;

do{
     $sayi=rand(1,5);
     echo "$say. denemede\n\n $sayi";
     echo "<br><br>";
     $say++;
     
} while($sayi != $tahmin);{
          echo "<i>$say denemede bulundu</i>";
     echo "<br><br>";
     if($say<=$kazan){
          echo "Kazandın";
     echo "<br><br>";
     }else{
          echo "Kaybetdin";
     echo "<br><br>";
     }
}

?>
