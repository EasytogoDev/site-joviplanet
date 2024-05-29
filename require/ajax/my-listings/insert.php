<?php
require_once("../../funcao.php");
require_once("../../config.php");
require_once("../../restrito.php");

$PDO = db_connect();


$imobiliariaIMOVEL       = $_POST['imobiliariaIMOVEL'];
$agenteIMOVEL            = $_POST['agenteIMOVEL'];
$clienteIMOVEL           = $_POST['clienteIMOVEL'];
$tituloIMOVEL            = $_POST['tituloIMOVEL'];
$descricaoIMOVEL         = $_POST['descricaoIMOVEL'];
$categoriaIMOVEL         = $_POST['categoriaIMOVEL'];
$tipoIMOVEL              = $_POST['tipoIMOVEL'];
$planoIMOVEL             = $_POST['planoIMOVEL'];
$valorIMOVEL             = $_POST['valorIMOVEL'];
$enderecoIMOVEL          = $_POST['enderecoIMOVEL'];
$numeroIMOVEL            = $_POST['numeroIMOVEL'];
$stateIMOVEL             = $_POST['stateIMOVEL'];
$cityIMOVEL              = $_POST['cityIMOVEL'];
$zipcodeIMOVEL           = $_POST['zipcodeIMOVEL'];
$countryIMOVEL           = $_POST['countryIMOVEL'];
$paisIMOVEL              = $_POST['paisIMOVEL'];
$latitudeIMOVEL          = $_POST['latitudeIMOVEL'];
$longitudeIMOVEL         = $_POST['longitudeIMOVEL'];
$metragemIMOVEL          = $_POST['metragemIMOVEL'];
$qtdpessoasIMOVEL        = $_POST['qtdpessoasIMOVEL'];
$solteirocamasIMOVEL     = $_POST['solteirocamasIMOVEL'];
$casalcamasIMOVEL        = $_POST['casalcamasIMOVEL'];
$banheirosIMOVEL         = $_POST['banheirosIMOVEL'];
$lavanderiaIMOVEL        = $_POST['lavanderiaIMOVEL'];
$wifiIMOVEL              = $_POST['wifiIMOVEL'];
$closetIMOVEL            = $_POST['closetIMOVEL'];
$arcondicionadoIMOVEL    = $_POST['arcondicionadoIMOVEL'];
$tipometragemIMOVEL      = $_POST['tipometragemIMOVEL'];
$quartosIMOVEL           = $_POST['quartosIMOVEL']; 
$roomIMOVEL              = $_POST['roomIMOVEL'];
$vagasgaragemIMOVEL      = $_POST['vagasgaragemIMOVEL'];
$fumarIMOVEL             = $_POST['fumarIMOVEL'];
$salaodejogosIMOVEL      = $_POST['salaodejogosIMOVEL'];
$portariaIMOVEL          = $_POST['portariaIMOVEL'];
$playgroundIMOVEL        = $_POST['playgroundIMOVEL'];
$proximoaometroIMOVEL    = $_POST['proximoaometroIMOVEL'];
$elevadorIMOVEL          = $_POST['elevadorIMOVEL'];
$poraoIMOVEL             = $_POST['poraoIMOVEL'];
$quadraesportivaIMOVEL   = $_POST['quadraesportivaIMOVEL'];
$festaIMOVEL             = $_POST['festaIMOVEL'];
$academiaIMOVEL          = $_POST['academiaIMOVEL'];
$saunaIMOVEL             = $_POST['saunaIMOVEL'];
$petsIMOVEL              = $_POST['petsIMOVEL'];
$regrasadicionaisIMOVEL  = $_POST['regrasadicionaisIMOVEL'];
$slugIMOVEL              = $_POST['slugIMOVEL'];
$coberturaIMOVEL         = $_POST['coberturaIMOVEL'];
$extraIMOVEL             = $_POST['extraIMOVEL'];
$idIMOVEL                = $_POST['idIMOVEL'];
$criancasIMOVEL          = $_POST['criancasIMOVEL'];
$checkinIMOVEL           = $_POST['checkinIMOVEL'];
$checkoutIMOVEL          = $_POST['checkoutIMOVEL'];
$permanenciaminimaIMOVEL = $_POST['permanenciaminimaIMOVEL'];
$permanenciamaximaIMOVEL = $_POST['permanenciamaximaIMOVEL'];
$fotosIMOVEL             = $_POST['fotosIMOVEL'];
$videoIMOVEL             = $_POST['videoIMOVEL'];
$emailIMOVEL             = $_POST['emailIMOVEL'];
$destaqueIMOVEL          = $_POST['destaqueIMOVEL'];
$disponivelIMOVEL        = $_POST['disponivelIMOVEL'];
$quadrabasqueteIMOVEL    = $_POST['quadrabasqueteIMOVEL'];
$sotaoIMOVEL             = $_POST['sotaoIMOVEL'];
$porteiroIMOVEL          = $_POST['porteiroIMOVEL'];
$jardimdefrenteIMOVEL    = $_POST['jardimdefrenteIMOVEL'];
$vistadolagoIMOVEL       = $_POST['vistadolagoIMOVEL'];
$vistadomarIMOVEL        = $_POST['vistadomarIMOVEL'];
$espacoprivadoIMOVEL     = $_POST['espacoprivadoIMOVEL'];
$adegaIMOVEL             = $_POST['adegaIMOVEL'];
$sprinklersIMOVEL        = $_POST['sprinklersIMOVEL'];
$visualizacaoIMOVEL      = $_POST['visualizacaoIMOVEL'];









$InsertImovel = $PDO->prepare("

INSERT INTO tb0031_imoveis
(
    codigoIMOVEL,
    imobiliariaIMOVEL,
    agenteIMOVEL,
    clienteIMOVEL,
    tituloIMOVEL,
    descricaoIMOVEL,
    categoriaIMOVEL,
    tipoIMOVEL,
    planoIMOVEL,
    valorIMOVEL,
    labelvalorIMOVEL,
    enderecoIMOVEL,
    numeroIMOVEL,
    stateIMOVEL,
    cityIMOVEL,
    zipcodeIMOVEL,
    countryIMOVEL,
    paisIMOVEL,
    latitudeIMOVEL,
    longitudeIMOVEL,
    metragemIMOVEL,
    qtdpessoasIMOVEL,
    solteirocamasIMOVEL,
    casalcamasIMOVEL,
    banheirosIMOVEL,
    lavanderiaIMOVEL,
    wifiIMOVEL,
    closetIMOVEL,
    arcondicionadoIMOVEL,
    tipometragemIMOVEL,
    quartosIMOVEL,
    roomIMOVEL,
    vagasgaragemIMOVEL,
    fumarIMOVEL,
    salaodejogosIMOVEL,
    portariaIMOVEL,
    playgroundIMOVEL,
    proximoaometroIMOVEL,
    elevadorIMOVEL,
    poraoIMOVEL,
    quadraesportivaIMOVEL,
    festaIMOVEL,
    academiaIMOVEL,
    saunaIMOVEL,
    petsIMOVEL,
    regrasadicionaisIMOVEL,
    slugIMOVEL,
    coberturaIMOVEL,
    extraIMOVEL,
    idIMOVEL,
    criancasIMOVEL,
    checkinIMOVEL,
    checkoutIMOVEL,
    permanenciaminimaIMOVEL,
    permanenciamaximaIMOVEL,
    fotosIMOVEL,
    videoIMOVEL,
    emailIMOVEL,
    destaqueIMOVEL,
    disponivelIMOVEL,
    quadrabasqueteIMOVEL,
    sotaoIMOVEL,
    porteiroIMOVEL,
    jardimdefrenteIMOVEL,
    vistadolagoIMOVEL,
    vistadomarIMOVEL,
    espacoprivadoIMOVEL,
    adegaIMOVEL,
    sprinklersIMOVEL,
    floorIMOVEL,
    0

) 
VALUES 
(
    null,
    '".$imobiliariaIMOVEL."',
    '".$agenteIMOVEL."',
    '".$clienteIMOVEL."',
    '".$tituloIMOVEL."',
    '".$descricaoIMOVEL."',
    '".$categoriaIMOVEL."',
    '".$tipoIMOVEL."',
    '".$planoIMOVEL."',
    '".$valorIMOVEL."',
    '".$labelvalorIMOVEL."',
    '".$enderecoIMOVEL."',
    '".$numeroIMOVEL."',
    '".$stateIMOVEL."',
    '".$cityIMOVEL."',
    '".$zipcodeIMOVEL."',
    '".$countryIMOVEL."',
    '".$paisIMOVEL."',
    '".$latitudeIMOVEL."',
    '".$longitudeIMOVEL."',
    '".$metragemIMOVEL."',
    '".$qtdpessoasIMOVEL."',
    '".$solteirocamasIMOVEL."',
    '".$casalcamasIMOVEL."',
    '".$banheirosIMOVEL."',
    '".$banheirosIMOVEL."',
    '".$wifiIMOVEL."',
    '".$closetIMOVEL."',
    '".$arcondicionadoIMOVEL."',
    '".$tipometragemIMOVEL."',
    '".$quartosIMOVEL."',
    '".$roomIMOVEL."',
    '".$vagasgaragemIMOVEL."',
    '".$fumarIMOVEL."',
    '".$salaodejogosIMOVEL."',
    '".$portariaIMOVEL."',
    '".$playgroundIMOVEL."',
    '".$proximoaometroIMOVEL."',
    '".$elevadorIMOVEL."',
    '".$poraoIMOVEL."',
    '".$quadraesportivaIMOVEL."',
    '".$festaIMOVEL."',
    '".$academiaIMOVEL."',
    '".$saunaIMOVEL."',
    '".$petsIMOVEL."',
    '".$regrasadicionaisIMOVEL."',
    '".$coberturaIMOVEL."',
    '".$idIMOVEL."',
    '".$criancasIMOVEL."',
    '".$checkinIMOVEL."',
    '".$checkoutIMOVEL."',
    '".$permanenciaminimaIMOVEL."',
    '".$permanenciamaximaIMOVEL."',
    '".$fotosIMOVEL."',
    '".$videoIMOVEL."',
    '".$emailIMOVEL."',
    '".$destaqueIMOVEL."',
    '".$disponivelIMOVEL."',
    '".$quadrabasqueteIMOVEL."',
    '".$sotaoIMOVEL."',
    '".$porteiroIMOVEL."',
    '".$jardimdefrenteIMOVEL."',
    '".$vistadolagoIMOVEL."',
    '".$vistadomarIMOVEL."',
    '".$espacoprivadoIMOVEL."',
    '".$adegaIMOVEL."',
    '".$sprinklersIMOVEL."',
    '".$floorIMOVEL."',
    0
    

    
)
");


$InsertImovel->execute();


$statusImovel = $InsertImovel->rowCount(); 

if($statusImovel == 0){
    $statusImovel = "0"; 
}else{
    $statusImovel = "1"; 
}