<?php
require_once("../../funcao.php");
require_once("../../config.php");
require_once("../../restrito.php");

$PDO = db_connect();

$codigo = $_POST['codigo']; 


if($ativo==1){

    $campoativo = 0;

}else{

    $campoativo = 1;
}

$InsertImovel = $PDO->prepare(" UPDATE tb0031_imoveis SET visualizacaoIMOVEL = visualizacaoIMOVEL+1  WHERE codigoIMOVEL = '".$codigo."' ");


$InsertImovel->execute();


$statusImovel = $InsertImovel->rowCount(); 

if($statusImovel == 0){
    $statusImovel = "0"; 
}else{
    $statusImovel = "1"; 
}