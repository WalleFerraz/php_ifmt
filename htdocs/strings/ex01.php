<?php
    $frase = 'IFMT Campus Rondonópolis';
    $palavra = 'Campus';


    $pos = strpos($frase, $palavra);
    var_dump($pos);
    echo '<br>';

    $novaFrase = substr($frase, 0, 4);
    var_dump($novaFrase);
    echo '<br>';

    $qtd = strlen($frase);
    var_dump($qtd);
    var_dump($frase[strlen($frase)-1]);
?>