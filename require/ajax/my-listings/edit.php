<?php
require_once("../../funcao.php");
require_once("../../config.php");
require_once("../../restrito.php");

$PDO = db_connect();


$codigoIMOVEL               = $_POST['codigoIMOVEL'];
$planoIMOVEL                = $_POST['planoIMOVEL'];
$clienteIMOVEL              = $_POST['clienteIMOVEL'];
$enderecoIMOVEL             = $_POST['enderecoIMOVEL'];
$categoriaIMOVEL            = $_POST['categoriaIMOVEL'];
$tipoIMOVEL                 = $_POST['tipoIMOVEL'];
$paisIMOVEL                 = $_POST['paisIMOVEL'];
$tituloIMOVEL               = $_POST['tituloIMOVEL'];
$descricaoIMOVEL            = $_POST['descricaoIMOVEL'];
$qtdpessoasIMOVEL           = $_POST['qtdpessoasIMOVEL'];
$quartosIMOVEL              = $_POST['quartosIMOVEL'];
$casalcamasIMOVEL           = $_POST['casalcamasIMOVEL'];
$solteirocamasIMOVEL        = $_POST['solteirocamasIMOVEL'];


$banheirosIMOVEL            = $_POST['banheirosIMOVEL'];
$metragemIMOVEL             = $_POST['metragemIMOVEL'];
$checkinIMOVEL              = $_POST['checkinIMOVEL'];
$checkoutIMOVEL             = $_POST['checkoutIMOVEL'];
$fotosIMOVEL                = $_POST['fotosIMOVEL'];
$videoIMOVEL                = $_POST['videoIMOVEL'];
$vagasgaragemIMOVEL         = $_POST['vagasgaragemIMOVEL'];
$arcondicionadoIMOVEL       = $_POST['arcondicionadoIMOVEL'];
$academiaIMOVEL             = $_POST['academiaIMOVEL'];
$lavanderiaIMOVEL           = $_POST['lavanderiaIMOVEL'];
$saunaIMOVEL                = $_POST['saunaIMOVEL'];
$fumarIMOVEL                = $_POST['fumarIMOVEL'];
$petsIMOVEL                 = $_POST['petsIMOVEL'];
$festaIMOVEL                = $_POST['festaIMOVEL'];
$criancasIMOVEL             = $_POST['criancasIMOVEL'];
$permanenciaminimaIMOVEL    = $_POST['permanenciaminimaIMOVEL'];
$permanenciamaximaIMOVEL    = $_POST['permanenciamaximaIMOVEL'];
$regrasadicionaisIMOVEL     = $_POST['regrasadicionaisIMOVEL'];
$slugIMOVEL                 = $_POST['slugIMOVEL']; 
$closetIMOVEL               = $_POST['closetIMOVEL'];
$salaodejogosIMOVEL         = $_POST['salaodejogosIMOVEL'];
$quadraesportivaIMOVEL      = $_POST['quadraesportivaIMOVEL'];
$portariaIMOVEL             = $_POST['portariaIMOVEL'];
$proximoaometroIMOVEL       = $_POST['proximoaometroIMOVEL'];
$elevadorIMOVEL             = $_POST['elevadorIMOVEL'];
$playgroundIMOVEL           = $_POST['playgroundIMOVEL'];
$roomIMOVEL                 = $_POST['roomIMOVEL'];
$cityIMOVEL                 = $_POST['cityIMOVEL'];
$numeroIMOVEL               = $_POST['numeroIMOVEL'];
$zipcodeIMOVEL              = $_POST['zipcodeIMOVEL']; 
$stateIMOVEL                = $_POST['stateIMOVEL'];
$valorIMOVEL                = $_POST['valorIMOVEL'];

$labelvalorIMOVEL                = $_POST['labelvalorIMOVEL'];
 




$InsertImovel = $PDO->prepare("

UPDATE tb0031_imoveis SET 

planoIMOVEL = '".$planoIMOVEL."',
clienteIMOVEL = '".$clienteIMOVEL."',
enderecoIMOVEL = '".$enderecoIMOVEL."',
categoriaIMOVEL = '".$categoriaIMOVEL."',
tipoIMOVEL = '".$tipoIMOVEL."',
paisIMOVEL = '".$paisIMOVEL."',
tituloIMOVEL = '".$tituloIMOVEL."',
descricaoIMOVEL = '".$descricaoIMOVEL."',
qtdpessoasIMOVEL = '".$qtdpessoasIMOVEL."',
quartosIMOVEL = '".$quartosIMOVEL."',
casalcamasIMOVEL = '".$casalcamasIMOVEL."',
solteirocamasIMOVEL = '".$solteirocamasIMOVEL."',
banheirosIMOVEL = '".$banheirosIMOVEL."',
metragemIMOVEL = '".$metragemIMOVEL."',
checkinIMOVEL = '".$checkinIMOVEL."',
checkoutIMOVEL = '".$checkoutIMOVEL."',

fotosIMOVEL = '".$fotosIMOVEL."',
videoIMOVEL = '".$videoIMOVEL."',
vagasgaragemIMOVEL = '".$vagasgaragemIMOVEL."',
arcondicionadoIMOVEL = '".$arcondicionadoIMOVEL."',
academiaIMOVEL = '".$academiaIMOVEL."',
lavanderiaIMOVEL = '".$lavanderiaIMOVEL."',
saunaIMOVEL = '".$saunaIMOVEL."',
fumarIMOVEL = '".$fumarIMOVEL."',
petsIMOVEL = '".$petsIMOVEL."',
festaIMOVEL = '".$festaIMOVEL."',
criancasIMOVEL = '".$criancasIMOVEL."',
permanenciaminimaIMOVEL = '".$permanenciaminimaIMOVEL."',
permanenciamaximaIMOVEL = '".$permanenciamaximaIMOVEL."',
regrasadicionaisIMOVEL = '".$regrasadicionaisIMOVEL."',

slugIMOVEL = '".$slugIMOVEL."', 
closetIMOVEL = '".$closetIMOVEL."',
salaodejogosIMOVEL = '".$salaodejogosIMOVEL."',
quadraesportivaIMOVEL = '".$quadraesportivaIMOVEL."',
portariaIMOVEL = '".$portariaIMOVEL."',
proximoaometroIMOVEL = '".$proximoaometroIMOVEL."',
elevadorIMOVEL = '".$elevadorIMOVEL."',
playgroundIMOVEL = '".$playgroundIMOVEL."',
numeroIMOVEL = '".$numeroIMOVEL."',

roomIMOVEL = '".$roomIMOVEL."',
cityIMOVEL = '".$cityIMOVEL."',
zipcodeIMOVEL = '".$zipcodeIMOVEL."', 
stateIMOVEL = '".$stateIMOVEL."',
valorIMOVEL = '".$valorIMOVEL."',
labelvalorIMOVEL = '".$labelvalorIMOVEL."' 
   
    WHERE codigoIMOVEL = '".$codigoIMOVEL."'
");


$InsertImovel->execute();


$statusImovel = $InsertImovel->rowCount(); 

if($statusImovel == 0){
    $statusImovel = "0"; 
}else{
    $statusImovel = "1"; 
}