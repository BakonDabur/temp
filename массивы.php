<?php
$users = ['user1','user2','user3'];
//           0       1       2
echo $users[2];
echo '<br />';
foreach($users as $key=>$user){
    echo $key.' '.$user.'<br />';
}

$person = [
    'name' => 'User1',
    'age' => 20,
    
]; 
echo '<br />';
foreach($person as $key=>$user){
    echo $key.' '.$user.'<br />';
}
echo '<br />';
echo $person['name'];

$users = [
    [
        'name' => 'User2',
        'age' => 26
    ],
    [
        'name' => 'User3',
        'age' => 38
    ],
    [
        'name' => 'User4',
        'age' => 51
    ]
    ];
echo $users[0]['name']. ' '.$users[1]['name']. ' '.$users[2]['name'];
echo '<br />';
$aage = 0;
foreach($users as $user){
    echo $user['name'].'<br />';
    $aage = $aage + $user['age'];
}
$age = $aage / 3;
echo round($age);
echo '<br />';
echo ceil($age);
echo '<br />';
echo floor($age);
echo '<br />';

$matrix = [
    [
        2, 6, 15, 10
    ],
    [
        8, 3, 9, 4
    ],
    [
        4, 1, 7, 5
    ]
    ];
$s = 0;
foreach($matrix as $pill){
    print_r($pill);
    foreach($pill as $cypher){// $cypher = 2    $cypher = 6 
        $s = $s + $cypher;// $s = 0 + 2 = 2     $s = 2 + 6 =8
        
    }
}
echo round($s / 9);
echo '<br />';
$medium = [
    [
        2, 4, 7, 3, 5
    ],
    [
        8, 11, 5, 6, 13
    ],
    [
        1, 7, 14, 8, 9
    ],
    [
        3, 6, 12, 9, 10
    ],
    [
        4, 5, 13, 6, 2
    ]
    ];

$zero = 0;
$count = 0;
$min = $medium[0][0];
$max = $medium[0][0];
foreach($medium as $row){
    foreach($row as $column){
        $zero = $zero + $column;
        $count++;
        if ($column < $min){
            $min = $column;
        }
        if ($column > $max){
            $max = $column;
        }
    }
}
echo 'Сумма элементов матрицы равна '.$zero;
echo '<br />';
echo 'Среднее арифметическое матрицы равно '.$zero / $count;
echo '<br />';
echo 'Минимальный элемент матрицы равен '.$min;
echo '<br />';
echo 'Максимальный элемент матрицы равен '.$max;
echo '<br />';

$tiny = [
    [
        5, 12, 2
    ],
    [
        18, 8, 6
    ],
    [
        4, 17, 3
    ]
    ];

$even = 0;
foreach($tiny as $counting){
    foreach($counting as $divide){
        if($divide % 2 !== 0){
            $even++;
        }
    }
}
echo 'Количество нечетных элементов в матрице равно '.$even;
echo '<br />';
