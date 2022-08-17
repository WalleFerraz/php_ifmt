<?php
/*
    Implemente um programa PHP que leia um dia da semana em formato inteiro (1-7)
    e apresente qual dia da semana equivale.Por exemplo, se for 1, apresente domingo.
    Se for 2, apresente segunda-feira.

*/

$dia= 'tu';
switch($dia){
    case 1: case 'su': //se $dia for 1 ou 'su', apresente domingo
        echo 'sunday';
        break;
    case 2: case 'mo':
        echo 'monday';
        break;
    case 3: case 'tu':
        echo 'tuesday';
        break;
    case 4: case 'we':
        echo 'wednesday';
        break;
    case 5: case 'th':
        echo 'thursday';
        break;
    case 6: case 'fr':
        echo 'friday';
        break;
    case 7: case 'sa':
        echo 'saturday';
        break;
    

}

?>