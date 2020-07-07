<?php

require_once 'sm.php';
require_once 'model/parametro.php';
$campo = $_POST['campo1'];
$id = $_GET['id'];
$acao = $_GET['acao'];

echo $acao;


$variavel = new parametro(); /// isntancia a classe
///////////////////////////
//incluir

switch ($acao) {
    case 'u':
        $variavel->setId($id);
        $variavel->setNome($campo);
        $variavel->update();
        break;
    
    case 'd':
         $variavel->setId($id);
         $variavel->delete();
        break;

    default:
        $variavel->setId($id);
        $variavel->setNome($campo);
        $variavel->insert();
        
        break;
}






$lista = $variavel->select();
$variavel = "";

$sm->assign("variavel", $variavel);
$sm->assign("lista", $lista);
$sm->display("index.tpl");
?>
