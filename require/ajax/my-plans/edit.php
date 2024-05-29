<?php
require_once("../../funcao.php");
require_once("../../config.php");
require_once("../../restrito.php");

$PDO = db_connect();


$codigoPLANO               = $_POST['codigoPLANO'];
$tipoPLANO                = $_POST['tipoPLANO'];
$nomePLANO              = $_POST['nomePLANO'];
$valorPLANO             = $_POST['valorPLANO'];
$quantidadePLANO            = $_POST['quantidadePLANO'];
$slugPLANO                 = $_POST['slugPLANO'];
$urlPLANO               = $_POST['urlPLANO'];
$tempoPLANO               = $_POST['tempoPLANO'];

$InsertPlano = $PDO->prepare("

UPDATE tb0037_planos SET 

tipoPLANO = '".$tipoPLANO."',
nomePLANO = '".$nomePLANO."',
valorPLANO = '".$valorPLANO."',
quantidadePLANO = '".$quantidadePLANO."',
slugPLANO = '".$slugPLANO."',
urlPLANO = '".$urlPLANO."',
tempoPLANO = '".$tempoPLANO."'


   
    WHERE codigoPLANO = '".$codigoPLANO."'
");


$InsertPlano->execute();


$ativoPLANO = $InsertPlano->rowCount(); 

if($ativoPLANO == 0){
    $ativoPLANO = "0"; 
}else{
    $ativoPLANO = "1"; 
}