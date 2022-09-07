<?php
    $frase = 'Luke, eu sou seu pai!';
    $frag = explode(' ',$frase);
    echo '<pre>';
        print_r($frag);
    echo '</pre>';

    /*
    4+1
    5
    */
    $entrada = '4 + 1';
    $char = explode(' ',$entrada);
    echo '<pre>';
        print_r($char);
    echo '</pre>';
    if ($char[1]  == '+')
        echo 'SOMA';
?>