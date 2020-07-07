<?php

require_once 'sm.php';
require_once 'model/parametro.php';
$campo = $_POST['campo1'];
$idp    = $_POST['idp'];
$id    = $_GET['id'];

if (isset($id))
{
$idp =    $id; 
    
}    


$variavel = new parametro(); /// isntancia a classe
///////////////////////////
//incluir
if(isset($campo))
{    
    $variavel->setId($idp);
    $variavel->setNome($campo);
    $variavel->update();
}
  





$lista = $variavel->setId($idp);
$lista = $variavel->select("where id=$idp");


$id       = $lista[0]['id'];
$variavel = $lista[0]['nome'];
$sm->assign("id", $id);
$sm->assign("variavel", $variavel);
$sm->assign("lista", $lista);
$sm->display("update.tpl");
?>
