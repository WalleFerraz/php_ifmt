<?php
//POO manipular datas
$hoje = new DateTime();//classe DateTime
echo $hoje->format('d/m/Y - H:i:s').'<br>';

/*
Y - ano 2022
y - ano 22
M - mês Sep
m - mês 09
D - dia Wed
d - dia 06
*/

//Acrescentar 30 dias apartir de hoje
//Acrescentar 5 anos, 1 mês, 2 dias e 4 horas a partir de hoje.
$periodo = new DateInterval('P1M');
$hoje->add($periodo);
echo $hoje->format('d/m/Y - H:i:s').'<br>';

$periodo2 = new DateInterval('P5Y1M2DT4H');
$hoje->add($periodo2);//Método "add"
echo $hoje->format('d/m/Y - h:i:s').'<br>';

//A partir do pedido calcular o prazo de entrega 1 hora e 30 minutos.
$periodo = new DateInterval('PT1H30M');
$hoje->add($periodo);
echo $hoje->format('d/m/Y - h:i:s').'<br>';

$hoje->sub($periodo);
echo $hoje->format('d/m/Y - h:i:s').'<br>';
/*
add - adiciona
sub - subtrai

P+quantidade numérica+símbolo temporal
Y - -ano
M - mês
D - dia
Inserir "T" e utilizar os seguintes símbolos
H - hora
M - minuto
S - segundo
*/

















?>