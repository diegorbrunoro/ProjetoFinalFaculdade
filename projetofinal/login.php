<?php
    
    require_once 'sm.php';

    include_once ("model/dbConnectiion.php");
    
    $email= $_POST['email'];
    $logar= $_POST['logar'];
    $password = ($_POST['password']);
    
   
    if(isset($logar)){
        $sql = "SELECT * FROM fdb.brunoro_usuario WHERE usu_login = '$email' AND usu_senha = '$password'" or die ("erro ao selecionar");
        $result = $connect->query($sql);
        //$result->num_rows  0
        
        if($result->num_rows > 0 ){
            echo "<script language='javascript' type='text/javascript'>
            alert('Login e/ou Senha incorretos');window.location
            .href='index.php';</script>";
            die();
        }
        else{
            header('Location: principal.php');
        }
    }
?>