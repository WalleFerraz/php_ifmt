<?php
/*
    Faça um programa que entre com informações relativas a idade, peso e altura de 5 pessoas. Calcule e mostre:
        - a média das idades;
        - a quantidade de pessoas com peso superior a 90kg e altura inferior a 1.5m;
        - a percentagem de pessoas com idade entre 10 e 30 anos.
*/
$pessoas = array();
array_push($pessoas, array(
        'idade' => 35,
        'peso' => 103.8,
        'altura' => 1.5
    )
);
array_push($pessoas, array(
        'idade' => 78,
        'peso' => 90.4,
        'altura' => 1.8
    )
);
array_push($pessoas, array(
        'idade' => 9,
        'peso' => 35,
        'altura' => 1.4
    )
);
array_push($pessoas, array(
        'idade' => 4,
        'peso' => 15,
        'altura' => 0.9
    )
);
array_push($pessoas, array(
        'idade' => 22,
        'peso' => 57,
        'altura' => 1.7
    )
);

echo '<pre>';
    print_r($pessoas);
echo '</pre><br>';

$soma = 0;
$a = 0;
$b = 0;
$percentagem = 0;

for($i=0;$i<count($pessoas);$i++){
    $soma += $pessoas[$i]['idade'];
    if($pessoas[$i]['peso'] > 10 && $pessoas[$i]['altura'] < 1.5)
        $a++;
    
    if($pessoas[$i]['idade'] >= 10 && $pessoas[$i]['idade'] <= 30)
        $b++;
}//for

$percentagem = $b/count($pessoas)*100;

echo '1. A média das idades: '.floor($soma/count($pessoas)). ' anos.<br>';
echo '2. Quantidade de pessoas com peso maior que 10kg e altura menor que 1.5m: '.$a.'<br>';
echo '3. A percentagem de pessoas com idade entre 10 e 30 anos: '.$percentagem.'%<br>';
?>