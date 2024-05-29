<?php
require_once("../../funcao.php");
require_once("../../config.php");
require_once("../../restrito.php");

$PDO = db_connect();

$tipoPLANO                = $_POST['tipoPLANO'];
$nomePLANO              = $_POST['nomePLANO'];
$valorPLANO             = $_POST['valorPLANO'];
$quantidadePLANO            = $_POST['quantidadePLANO'];
$slugPLANO                 = $_POST['slugPLANO'];
$urlPLANO               = $_POST['urlPLANO'];
$tempoPLANO               = $_POST['tempoPLANO'];

$InsertPlano = $PDO->prepare("

INSERT INTO tb0037_planos
(
codigoPLANO,
tipoPLANO,
nomePLANO,
quantidadePLANO,
slugPLANO,
urlPLANO,
tempoPLANO,
ativoPLANO

) 
VALUES 
(
    null,
    '".$tipoPLANO."',
    '".$nomePLANO."',
    '".$quantidadePLANO."',
    '".$slugPLANO."',
    '".$urlPLANO."',
    '".$tempoPLANO."',
    1
)
");


$InsertPlano->execute();


$ativoPLANO = $InsertPlano->rowCount(); 

if($ativoPLANO == 0){
    $ativoPLANO = "0"; 
}else{
    $ativoPLANO = "1"; 
}