<?php 
//переменные и константы
$name = 'Вася';
define('PI', 3.1415);
define('QWE', 'строка');

echo $name;
echo '<br />';
echo $name;
echo '<br />';
$age = 22;
echo $age;
echo '<br />';
$s = 20 + $age;
$age = $age + 20;
echo $age;
$age = 0;
echo '<br />';
echo $age;
$age = 20 + $s;
/*
+ 
-
*
/
% - остаток от деления
*/
$s = 20 + $age;// 20 + 0 = 20
$s = $s - 10;//10
$s = $s * 2;//20
$age = $age + 33;
$s = $s / $age;//2
$s = $s%2; //0


echo PI;
echo '<br />';
print(QWE);
//print_r();
//var_dump($name);

/*
integer - числовой
string - строковый
float - с плавающей точкой (1.3, 5.6)
bool - булевый тип данных (true, false)
array - массивы
object
null ($a;)
*/

/*
операции сравнения
== равенство
!= не равно
>
<
>=
<=
*/
echo '<br />';
echo 10 == 10; //1 это true
echo 11 == 10;
echo '<br />';
echo 10 != 10; //0 это false
echo 11 != 10;
echo '<br />';

echo 10 > 5;//1
echo '<br />';
echo 5 < 10;//1
echo '<br />';
//логические операции
//лог. И(лог. умножение) &&
/*
false * false -> false
false * true -> false
true * false -> false
true true -> true
*/
echo 10 == 10 && 12 == 11;
//лог. ИЛИ (сложение) ||
/*
false + false -> false
false + true -> true
true + false -> true
true + true -> true
*/
echo 10 == 10 || 12 == 11;


$a = 20;
echo $a >= 18 && $a <= 50;


//if..else
$age = 20;
$name = 'Вася';
echo '<br />';
if($age > 18){
    echo 'Вы подходите';
}else{
    echo 'Вы не подходите';
}
if($age >= 10 && $age <= 18){
    echo 'Вы входите в диапазон от 10 до 18';
    echo 'Вы входите в диапазон от 10 до 18';
    echo 'Вы входите в диапазон от 10 до 18';
    echo 'Вы входите в диапазон от 10 до 18';
}elseif($age >= 19 && $age <= 30){
    echo 'Вы входите в диапазон от 19 до 38';
}else{
    echo 'Ваш возраст < 10 или > 30';
}


if(($age >= 18 && $age <= 30) || ($name == 'Вася')){
    echo 'ОК';
}

//тернарный оператор
$status = ($age >= 19 && $age <= 30) ? 'Взрослый':'Ребенок';


//Задача 1 Проверить является ли число четным
echo '<br />';
$number = 6;
if($number % 2 == 0){
    echo "$number является Четным";
    //echo $number.' является четным';
}else{
    echo "Не четное";
}

//Задача 2 Найти максимальное из 3-х чисел
$a = 15;
$b = 3;
$c = 10;
echo '<br />';
if($a > $b && $a > $c){
        echo $a.' максимально';
}
if($b > $a && $b > $c){
    echo $b.' максимально';
}
if($c > $b && $c > $a){
    echo $c.' максимально';
}
//Задача 3 Определить положительное или отрицательное число
echo '<br />';
$d = 10;
$status = ($d > 0) ? 'Положительное':'Отрицательное';
echo $status;


?>

