<?php 
if(isset($_POST['Registration'])){
    echo 'Вы зарегистрированы';
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" id="">
        <button name="Registration">'Войти на сайт'</button>
    </form>
</body>
</html>
<?php
}
?>