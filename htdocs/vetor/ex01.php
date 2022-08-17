<?php
    $produtos = ['Maça', 'Laranja', 'Tomate', 'abacaxi'];
    var_dump($produtos);
    echo '<br>';
    echo 'Quantidade de elementos no vetor: '.count($produtos); 
    echo '<br>';
    echo $produtos[count($produtos)-1];//mostre o último elemento
    echo '<br>';
    echo $produtos[0]; //mostre o primeiro elemento

    echo '<br>';
    echo '<pre>';
        print_r($produtos);
    echo '</pre>';
?>