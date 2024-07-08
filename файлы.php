<?php 
$file_name = 'users.txt';
$data = 123456;
if(file_exists($file_name)){
    file_put_contents($file_name, 'Нагибатель');
    echo file_get_contents($file_name);
}else{
    echo 'Такого файла не существует';
}

if(is_dir('users')){
    file_put_contents('users/users.txt', 'Подниматель');
}else{
    mkdir('users');
}

$files = scandir('users');
    foreach($files as $folder){
        if(file_exists('users/'.$folder)){
        echo $folder;
        echo '<br />';
        }
    }

if(file_exists('users.txt')){
    unlink('users.txt');
}

/*$fileaf = scandir('users');
    foreach($fileaf as $foldery){
        echo $foldery;
        echo '<br />';
        if(is_dir('users/'.$foldery)){
            rmdir('users/'.$foldery);
        }else{
            if (file_exists('users/'.$foldery)){
            unlink('users/'.$foldery);
            }
        }
    }

if(is_dir('users')){
    rmdir('users');
}*/

$firestart = glob('users/*');
    foreach($firestart as $startfire){
        echo $startfire;
        echo '<br />';
        if(is_dir($startfire)){
        rmdir($startfire);
        }else{
            if (file_exists($startfire)){
                unlink($startfire);
            }
        }   
    }

if(is_dir('users')){
    rmdir('users');
}

?>