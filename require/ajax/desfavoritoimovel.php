<?php
require_once("../funcao.php");
require_once("../config.php");
require_once("../restrito.php");

$PDO = db_connect();

$usuario = $usuario['codigoUSUARIO'];
 
$codigo = $_POST['codigo']; 

 

$InsertImovel = $PDO->prepare(" DELETE FROM `tb0202_favoritos` WHERE imovelFAVORITO = ".$codigo." AND usuarioFAVORITO = ".$usuario." ");


$InsertImovel->execute();


$statusImovel = $InsertImovel->rowCount(); 

if($statusImovel == 0){
    $statusImovel = "0"; 
}else{
    $statusImovel = "1"; 
}