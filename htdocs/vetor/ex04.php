<?php

/*
    Faça um vetor com nomes de bicos e mostr apenas os nome na ordem que foram cadastrados. Ex:
        onça, papagaio, jacaré
        Execução:
        onça
        papagaio
        jacaré

*/

$animais = ['onça','papagaio','jacaré'];


for ($i=0;$i<count($animais);++$i)
    echo $animais[$i]. '<br>';


   echo '<br>';
echo 'Usando WHILE';
$a = 0;
while ($a < count($animais)) {
    echo $animais[$a]. '<br>';
    $a++;
}

echo  '<br>';
echo 'Usando o FOREACH<br>';
foreach ($animais as $animal) {
    echo $animal. '<br>';
}
?>