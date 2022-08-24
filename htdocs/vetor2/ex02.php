<?php
    $alunos=array();
    //array_push($alunos,'Walisson','Sara'); //vetor homogênio
array_push($alunos,array(
    'nome' => 'Fernando',
    'idade' => 23,
    'peso' => 67.9
));
array_push($alunos,array(
    'nome' => 'Maria',
    'idade' => 22,
    'peso' => 58.4
));
array_push($alunos,array(
    'nome' => 'Carla',
    'idade' => 25,
    'peso' => 45.5
));

echo '<pre>';
print_r($alunos);
echo '</pre>';

echo 'Quantidade de cadastros: '.count($alunos).'<br>';
$idade=0;
$peso=0;
for($i=0;$i<count($alunos);$i++){
    $idade += $alunos[$i]['idade'];
    $peso += $alunos[$i]['peso'];
}//for

echo 'Soma das idades dos alunos: '.$idade.'<br>';
echo 'Média das idades dos alunos '.$idade/count($alunos).'<br>';
echo 'Média de peso dos alunos '.$peso/count($alunos).'<br>';



?>