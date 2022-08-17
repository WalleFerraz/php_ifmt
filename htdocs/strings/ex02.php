<?php
    $a = 'Walisson Rodrigues Ferraz';
    var_dump(strtoupper($a)); //Deixou todo o texto em caixa alta.
    echo '<br>';
    var_dump(strtolower($a)); //Converte String para minúsculas.
    
    echo '<br>';
    $novaFrase = str_replace('a','#',$a);
    var_dump($novaFrase);

    echo '<br>';
    $texto = '   Amanhã         será      um    novo    dia';
    var_dump(str_replace('  ',' ',$texto));
?>