<?php
session_start();


header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);




 
date_default_timezone_set('America/Sao_Paulo');	

$make = @$_GET['make'];
$idioma = @$_GET['idioma'];
$pga = @$_GET['pga'];
$pgb = @$_GET['pgb'];
$pgc = @$_GET['pgc'];
$pgd = @$_GET['pgd'];
$pge = @$_GET['pge'];
 
 
$conexao=mysqli_connect("rainhadass.mysql.dbaas.com.br", "rainhadass", "K04974970", "rainhadass");
 
@mysqli_query($conexao, "SET NAMES 'utf8'");
@mysqli_query($conexao, 'SET character_set_connection=utf8');
@mysqli_query($conexao, 'SET character_set_client=utf8');
@mysqli_query($conexao, 'SET character_set_results=utf8');
 


/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 


// Change database to "test"
mysqli_select_db($conexao,"rainhadassete");


if(!isset($_SESSION['idiomasite'])){

	$_SESSION['idiomasite']='pt-br';
	
}

@$idiomasite=isset($_SESSION['idiomasite']) ? $_SESSION['idiomasite'] : 'pt-br';
 
$fonte = @$_GET['utm_source'];
$meio = @$_GET['utm_medium'];
$campanha = @$_GET['utm_campaign'];
$ativo = '1';


if($fonte!='' || $meio!='' || $campanha!=''){
	
	
$ip = $_SERVER['REMOTE_ADDR'];

$datetime = date('Y-m-d H:m:s');
	
	$query_empresa_padrao = mysqli_query($conexao, "INSERT INTO tb0201_campanhas
	
	(fonteCAMPANHA, meioCAMPANHA, campanhaCAMPANHA, ipCAMPANHA, dataCAMPANHA, ativoCAMPANHA) VALUES ('".$fonte."', '".$meio."', '".$campanha."', '".$ip."', '".$datetime."',  '".$ativo."');
	
	");

	
}




$query_empresa = mysqli_query($conexao, "SELECT codigoEMPRESA, nomeEMPRESA, logoEMPRESA,
CASE 
WHEN '".$idiomasite."' = 'en' THEN breveenEMPRESA
WHEN '".$idiomasite."' = 'es' THEN breveesEMPRESA
ELSE breveEMPRESA END AS breveEMPRESA,
CASE 
WHEN '".$idiomasite."' = 'en' THEN sobreenEMPRESA
WHEN '".$idiomasite."' = 'es' THEN sobreesEMPRESA
ELSE sobreEMPRESA END AS sobreEMPRESA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN missaoenEMPRESA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN missaoesEMPRESA 
ELSE missaoEMPRESA END AS missaoEMPRESA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN visaoenEMPRESA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN visaoesEMPRESA 
ELSE visaoEMPRESA END AS visaoEMPRESA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN valoresenEMPRESA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN valoresesEMPRESA 
ELSE valoresEMPRESA END AS valoresEMPRESA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN qualidadeenEMPRESA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN qualidadeesEMPRESA 
ELSE qualidadeEMPRESA END AS qualidadeEMPRESA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN paisenEMPRESA
ELSE paisEMPRESA END AS paisEMPRESA,
emailEMPRESA, codigotelefoneEMPRESA, telefoneEMPRESA, telefone2EMPRESA, celularEMPRESA, watsEMPRESA, ruaEMPRESA, numeroEMPRESA, cepEMPRESA, bairroEMPRESA, cidadeEMPRESA, estadoEMPRESA, paisEMPRESA, locationEMPRESA, dominioEMPRESA, keyworksEMPRESA, restoreEMPRESA, descriptionEMPRESA, analyctisEMPRESA, hostEMPRESA, usernameEMPRESA, passwordEMPRESA, manutencaoEMPRESA, videoEMPRESA, seguroEMPRESA, facebookEMPRESA, tiktokEMPRESA, youtubeEMPRESA, twitterEMPRESA, linkedinEMPRESA, instagranEMPRESA, googleplusEMPRESA, ativoEMPRESA
FROM tb0151_empresas WHERE 
ativoEMPRESA ='1' ");
$configempresa = mysqli_fetch_assoc($query_empresa);

$configuracoes['diretorio']= "/";
$configuracoes['diretorioimg']= "/";
$configuracoes['codigoEMPRESA'] = $configempresa['codigoEMPRESA'];
$configuracoes['emailEMPRESA'] = $configempresa['emailEMPRESA'];
$configuracoes['nomeEMPRESA'] = $configempresa['nomeEMPRESA'];
$configuracoes['codigotelefoneEMPRESA'] = $configempresa['codigotelefoneEMPRESA'];
$configuracoes['telefoneEMPRESA'] = $configempresa['telefoneEMPRESA'];
$configuracoes['telefone2EMPRESA'] = $configempresa['telefone2EMPRESA'];
$configuracoes['celularEMPRESA'] = $configempresa['celularEMPRESA'];
$configuracoes['watsEMPRESA'] = $configempresa['watsEMPRESA'];
$configuracoes['ruaEMPRESA'] = $configempresa['ruaEMPRESA'];
$configuracoes['numeroEMPRESA'] = $configempresa['numeroEMPRESA'];
$configuracoes['cepEMPRESA'] = $configempresa['cepEMPRESA'];
$configuracoes['bairroEMPRESA'] = $configempresa['bairroEMPRESA'];
$configuracoes['cidadeEMPRESA'] = $configempresa['cidadeEMPRESA'];
$configuracoes['estadoEMPRESA'] = $configempresa['estadoEMPRESA'];
$configuracoes['paisEMPRESA'] = $configempresa['paisEMPRESA'];
$configuracoes['locationEMPRESA'] = $configempresa['locationEMPRESA'];
$configuracoes['logoEMPRESA'] = $configempresa['logoEMPRESA'];
$configuracoes['breveEMPRESA'] = $configempresa['breveEMPRESA'];
$configuracoes['sobreEMPRESA'] = $configempresa['sobreEMPRESA'];
$configuracoes['missaoEMPRESA'] = $configempresa['missaoEMPRESA'];
$configuracoes['visaoEMPRESA'] = $configempresa['visaoEMPRESA'];
$configuracoes['valoresEMPRESA'] = $configempresa['valoresEMPRESA'];
$configuracoes['qualidadeEMPRESA'] = $configempresa['qualidadeEMPRESA'];
$configuracoes['keyworksEMPRESA'] = $configempresa['keyworksEMPRESA'];
$configuracoes['descriptionEMPRESA'] = $configempresa['descriptionEMPRESA'];
$configuracoes['dominioEMPRESA'] = $configempresa['dominioEMPRESA'];
$configuracoes['locationEMPRESA'] = $configempresa['locationEMPRESA'];
$configuracoes['facebookEMPRESA'] = $configempresa['facebookEMPRESA'];
$configuracoes['youtubeEMPRESA'] = $configempresa['youtubeEMPRESA'];
$configuracoes['twitterEMPRESA'] = $configempresa['twitterEMPRESA'];
$configuracoes['linkedinEMPRESA'] = $configempresa['linkedinEMPRESA'];
$configuracoes['instagranEMPRESA'] = $configempresa['instagranEMPRESA'];
$configuracoes['googleplusEMPRESA'] = $configempresa['googleplusEMPRESA'];
$configuracoes['seguroEMPRESA'] = $configempresa['seguroEMPRESA'];


$configuracoes['manutencaoEMPRESA'] = $configempresa['manutencaoEMPRESA'];
$configuracoes['videoEMPRESA'] = $configempresa['videoEMPRESA'];

 
$configuracoes['analyctisEMPRESA'] = $configempresa['analyctisEMPRESA'];

$configuracoes['titulopagEMPRESA'] = "Stoik ".$configuracoes['nomeEMPRESA']." |   São Paulo | SP - ".$configuracoes['codigotelefoneEMPRESA']." ".$configuracoes['telefoneEMPRESA'];
  
	 