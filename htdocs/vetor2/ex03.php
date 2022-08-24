<?php
/*
Ex01 - Exibir os valores de um vetor na ordem inversa daquela em ue foram armazenadas. Exemplo: [30,5,11,28,25]
         [25,28,11,5,30]
*/
$itens = array(30,5,11,28,25);

echo '[';
for($i=count($itens)-1;$i>0=;$i--)
    echo $itens[$i].' ';
echo ']';
?>