<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //print_r($_POST);
        $fio = $_POST['fio'];
        $email = $_POST['email'];
        echo $fio;
        echo $email;
        //header('Location: формы.php');
        //exit;

       if(strlen($fio) > 5){
        echo 'ФИО больше 5 символов';
       }else{
        echo 'ФИО меньше 5 символов';
       }
    }
        
    
?>
