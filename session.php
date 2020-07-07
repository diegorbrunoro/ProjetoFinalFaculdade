<?php 
// Iniciando a session
session_start(); 
//echo  session_id();
$_SESSION["nome"] = "Diego";


$_SESSION["rg"] = session_id();



?> 