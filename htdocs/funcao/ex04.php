<?php
//Função anônima - não uso nome para uma função.
    $fn = function($palavra) {
        var_dump($palavra);
    };

    $fn('oi');
    $fn(1234);
    $fn(1.5);
?>