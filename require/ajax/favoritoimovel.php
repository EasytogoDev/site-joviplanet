<?php
require_once("../funcao.php");
require_once("../config.php");
require_once("../restrito.php");

$PDO = db_connect();

$usuario = $usuario['codigoUSUARIO'];
 
$codigo = $_POST['codigo']; 


if($destaque==1){

    $campodestaque = 0;

}else{

    $campodestaque = 1;
}

$InsertImovel = $PDO->prepare(" 
INSERT INTO `tb0202_favoritos`(`codigoFAVORITO`, `imovelFAVORITO`, `usuarioFAVORITO`, `dataFAVORITO`, `ativoFAVORITO`) VALUES (null,".$codigo.",".$usuario.",NOW(),1)

 ");


$InsertImovel->execute();


$statusImovel = $InsertImovel->rowCount(); 

if($statusImovel == 0){
    $statusImovel = "0"; 
}else{
    $statusImovel = "1"; 
}