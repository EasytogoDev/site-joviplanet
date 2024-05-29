<?php
require_once("../../funcao.php");
require_once("../../config.php");
require_once("../../restrito.php");

$PDO = db_connect();


$ativo = $_POST['ativo']; 
$codigo = $_POST['codigo']; 


if($ativo==1){

    $campoativo = 0;

}else{

    $campoativo = 1;
}

$InsertImovel = $PDO->prepare(" UPDATE tb0031_imoveis SET  ativoIMOVEL = '".$campoativo."' WHERE codigoIMOVEL = '".$codigo."' ");


$InsertImovel->execute();


$statusImovel = $InsertImovel->rowCount(); 

if($statusImovel == 0){
    $statusImovel = "0"; 
}else{
    $statusImovel = "1"; 
}