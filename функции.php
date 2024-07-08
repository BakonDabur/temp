<?php
function factorial($number){
    $five = 1;
    $result = 1;
    while($five <= $number){
        $result = $result * $five;
        $five++;
    }
    return $result;
}

echo factorial(5);
echo '<br />';
echo factorial(10);
echo '<br />';
echo factorial(3);
echo '<br />';
echo factorial(15);
echo '<br />';
echo factorial(8);
echo '<br />';

function maxpayne($a=0, $b=2, $c=8){
    if($a > $b && $a > $c)
    return $a;
    if ($b > $a && $b > $c)
    return $b;
    if ($c > $b && $c > $a)
    return $c;
}

echo maxpayne(8, 23, 4);
echo '<br />';
echo maxpayne(5, 1, 2);
//анмные ф-ции
echo '<br />';

$a = function($name = 'пользователь'){
    return 'Привет, '.$name;
};
echo $a('Вася');
echo '<br />';
echo $a();
echo '<br />';
echo maxpayne();

function filterArray($array, $callback){
    $res = [];
    foreach($array as $ar){
        if($callback($ar)){
            $res[] = $ar;
        }
    }
    return $res;
}
echo '<br />';

$numbers = [2,3,4,5,6,7,8,2,3,4,5,7,5];
$filter = function($number){
    return $number % 2 == 0;
};
$evens = filterArray($numbers, $filter);
print_r($evens);





function massivearray($massive, $array){
    foreach($array as $ar){
        if($massive($ar)){
            echo $ar.'<br />';
        }
    }
}
echo '<br />';
massivearray(function ($a){return $a > 0;}, [4, -2, 12, -53]);