<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'sm.php';

require_once 'model/diego_login.php';

    $email= $_POST["email"];
    $password= $_POST["password"];


$variavel = new juliana_login();

    $variavel->setEmail($email);
    $variavel->setPassword($password);
    $variavel->insert();


$sm->display("formCadastroLogin.tpl");

?>

