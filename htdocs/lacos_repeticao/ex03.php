<?php
    /*
    Faça um laço de repetição que mostre os número de 0 a 100
    no intervalo de 5 a 5
    */
    for ($i=0; $i<=100; $i+=5){

        if ($i>=0 && $i<=30) continue;
        if ($i==95) break;
        echo $i. '<br>';
    }   

?>