<?php
require_once("../../funcao.php");
require_once("../../config.php");
require_once("../../restrito.php");

$PDO = db_connect();


$destaque = $_POST['destaque']; 
$codigo = $_POST['codigo']; 


if($destaque==1){

    $campodestaque = 0;

}else{

    $campodestaque = 1;
}

$InsertImovel = $PDO->prepare(" UPDATE tb0031_imoveis SET  destaqueIMOVEL = '".$campodestaque."' WHERE codigoIMOVEL = '".$codigo."' ");


$InsertImovel->execute();


$statusImovel = $InsertImovel->rowCount(); 

if($statusImovel == 0){
    $statusImovel = "0"; 
}else{
    $statusImovel = "1"; 
}