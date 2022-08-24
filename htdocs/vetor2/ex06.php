<?php
/*
    Uma empresa fez uma pesquisa de mercado para saber quantas pessoas gostaram de um filme. Foram coletadas apenas o sexo (f ou m) e dadas as seguintes opções: s - sim ou n - não. Cadrastre 4 questionários respondidos, calule e mostre:

    - O número de pessoas que responderam sim;
    - O número de mulheres que responderam não;
    - A percentagem de homens que responderam não.
*/

$pessoas = array();
array_push($pessoas,array(
    'sexo' => 'f',
    'opiniao' => 'n'
));
array_push($pessoas,array(
    'sexo'=> 'f',
    'opiniao' => 's'
));
array_push($pessoas,array(
    'sexo' => 'h',
    'opiniao' => 'n'
));
array_push($pessoas,array(
    'sexo' => 'h',
    'opiniao' => 'n'
));

$gostou = 0;
$mGostou = 0;
$hNaoGostou = 0;
$percentagem = 0;
for($i=0;$i<count($pessoas);$i++){
    if($pessoas[$i]['opiniao'] == 's')
        $gostou++;
    if($pessoas[$i]['sexo'] == 'f' && $pessoas[$i]['opiniao'] == 's')
        $mGostou++;
    if($pessoas[$i]['sexo'] == 'h' && $pessoas[$i]['opiniao'] == 'n')
        $hNaoGostou++;
}//for

$percentagem = $hNaoGostou/count($pessoas)*100;

echo 'Quantidade de pessoas que gostaram do filme: '.$gostou.'<br>';
echo 'Quantidade de mulheres que gostaram do filme: '.$mGostou.'<br>';
echo 'Percentagem de homens que não gostaram do filme: '.$percentagem.'%<br>';
?>