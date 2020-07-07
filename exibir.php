<?php
session_start();

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$ano = $_POST["ano"];

echo "O numero da seção é ".$_SESSION["id"];


echo $nome;
echo $endereco;
echo $ano;

echo $_SESSION["nome"];


echo $_SESSION["rg"];

echo $_COOKIE["nome"];


?>
