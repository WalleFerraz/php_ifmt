<?php
/*
Faça um programa em PHP que analise um vetor e decomponha em 2 outros vetores,
um contendo ordem ímpar e outro contento ordem par.
Exemplo: v = {3,5,6,8,4,2,3,7}
u = {3,6,1,2,7}
w = {5,8,4,3}
*/

$v = [3,5,6,8,4,2,3,7];
$u = array();
$w = array();

for ($i=0;$i<count($v);++$i){
    if ($i % 2==0) 
        array_push($u,$v[$i]);//insere o valor do vetor v no u (se ele for par)
    else 
        array_push($w,$v[$i]);//insere o valor do vetor v no w (se ele for impar)
        
}

print_r($u);
echo '<br>';
print_r($w);
?>