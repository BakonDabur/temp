<?php
//циклы
//for, while, do..while, foreach

//while
//$i++ = икремент
//$i-- - декримент


$i = 20;
while($i >= 0){

    echo $i.'<br />';
    $i--; //инкремент
}

$a = 10;
echo '<br />';
echo $a++;//сначала выводим значение переменной $a, а потом делаем инкремент
echo '<br />';
echo $a;
echo '<br />';
echo ++$a;//сначала инкремент, потом выводим значение;
echo '<br />';
echo $a;
echo '<br />';

//Задача 1 Таблица умножения
$x = 1;
while($x <= 10){
    $y = 1;
    while ($y <= 10){
        echo $x.' * '.$y.' = '. ($x * $y). '<br />'; //1 * 1 = 2
       // echo "$x * $y = ".($x*$y);
        $y++;
    }
    $x++;
}

//Задача найти факториал числа
//5!=1*2*3*4*5=
//6!=1*2*3*4*5*6=

//факториал 5
echo '<br />';
$n = 7; //факториал числа, которое надо высчитать;
$x = 1;
$f = 1;
while($x <= $n){
     $f = $f * $x; //$f = 1 * 1 = 1         $f = 1 * 2 = 2      $f = 2 * 3 = 6      $f = 6 * 4 = 24     $f = 24 * 5 = 120
     $x++;
}
echo 'Факториал числа '.$n.' = '.$f;
echo '<br />';

//Найти сумму цифр числа (пример, 1234=1+2+3+4=10)

//do..while
//Sposob 1
$dj = 1234;
$d = (string)$dj;
echo $d;
echo '<br />';
$t = 0;
$s = 0;
while($t < 4){
    $s = $s + (int)$d[$t];
    //echo gettype((int)$d[$t]).'<br />';
    $t++;
}
echo $s.'<br />';

$s = 'asdfasfeg';
echo $s[0];
echo '<br />';
//Sposob 2
$sum = 0;
$number = 2353;
while($number > 0){
    $digit = $number % 10;
    $sum = $sum + $digit;
    $number = intdiv($number, 10); // 2353//10=235
}
echo $sum;
echo '<br />';
