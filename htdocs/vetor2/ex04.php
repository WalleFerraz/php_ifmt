<?php
/*
    Faça um programa que analise um vetor e decomponha em 2 outros dois vetores. Um conendo valores divisiveis por 5 e outro por 3.
    Ex.:
    v = [3,4,5,6,7,8,9,10];
    y = [5,10];
    z = [3,6,9];
*/
$v = array(3,4,5,6,7,8,9,10);
$y = array();
$z = array();

for($i=0;$i<count($v);$i++){
    if($v[$i]%5 == 0)
        array_push($z,$v[$i]);
    elseif ($v[$i]%3 == 0)
        array_push($y,$v[$i]);
}

echo '<pre>';
    print_r($v);
echo '</pre><br>';

echo '<pre>';
    print_r($y);
echo '</pre><br>';

echo '<pre>';
    print_r($z);
echo '</pre>';
?>