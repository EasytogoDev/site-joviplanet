<?php
require_once("../../funcao.php");
require_once("../../config.php");
require_once("../../restrito.php");

$PDO = db_connect();


$codigoPLANO  = $_POST['codigoPLANO'];


$DeletePlano = $PDO->prepare(" DELETE FROM tb0037_planos WHERE codigoPLANO = '".$codigoPLANO."'
");


$DeletePlano->execute();


$ApagaPlano = $DeletePlano->rowCount(); 

if($ApagaPlano == 0){
    $ApagaPlano = "0"; 
}else{
    $ApagaPlano = "1"; 
}

echo $ApagaPlano;