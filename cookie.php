<?php 
setcookie('user', 'Bakon', time()+3600);
if(isset($_COOKIE['user'])){
    echo 'Есть такая кука';
}else{
    echo 'Нет такой куки';
}
?>