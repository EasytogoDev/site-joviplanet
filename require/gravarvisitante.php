<?php 
require_once("../../../restrito.php");

$PDO = db_connect();


$codigoVISITANTE =  $_POST['codigoVISITANTE'];
$imagemVISITANTE =  $_POST['imagemVISITANTE'];
$rgVISITANTE =  $_POST['rgVISITANTE'];
$nomeVISITANTE =  $_POST['nomeVISITANTE'];
$placaVISITANTE =  $_POST['placaVISITANTE'];
$observacaoVISITANTE =  $_POST['observacaoVISITANTE'];
$codigoempresaVISITANTE =  $_POST['codigoempresaVISITANTE'];
$empresaVISITANTE =  $_POST['empresaVISITANTE'];
$codigodestinoVISITANTE =  $_POST['codigodestinoVISITANTE'];
 $destinoVISITANTE =  $_POST['destinoVISITANTE'];
$usuarioPORTARIA = $_SESSION['codigoUSUARIO'];


//////////////////////////////////////////////////////////////////////////////////////////////



//AQUI CADASTRA EMPRESA 
if($codigoempresaVISITANTE==''){
	
	
	//AQUI INSERE NOVA EMPRESA
	$insertEMPRESA = $PDO->prepare("INSERT INTO tb0301_Empresas 
	(pastaEMPRESA,lixeiraEMPRESA,sistemaEMPRESA,usuarioEMPRESA,nomeEMPRESA,datacriacaoEMPRESA,observacaoEMPRESA,razaoEMPRESA,pessoaEMPRESA,cnpjEMPRESA,idiomaEMPRESA) 
	 VALUES 
	(3043, 0, 0, '".$usuarioPORTARIA."', '".$empresaVISITANTE."', GETDATE(), '".$observacaoVISITANTE."', '".$empresaVISITANTE."', 1, '".$rgVISITANTE."', 1)");
 
	$insertEMPRESA->execute();
	$statusinsertEMPRESA = $insertEMPRESA->rowCount(); 
	
	if($statusinsertEMPRESA == 1){ 
			
			$BuscaIDgerado = $PDO->query("SELECT MAX(codigoEMPRESA) AS codigoEMPRESA FROM tb0301_Empresas WHERE usuarioEMPRESA = '".$usuarioPORTARIA."' AND cnpjEMPRESA = '".$rgVISITANTE."' ");  
			$CarregaIDgerado = $BuscaIDgerado->fetchAll();
			$SelectLastID = $CarregaIDgerado[0];
			$codigoEMPRESA =  $SelectLastID['codigoEMPRESA'];   
 

	}
	
	 

	$codigoempresaVISITANTE =  $codigoEMPRESA;

 
	
}else{
	
	
$codigoempresaVISITANTE =  $_POST['codigoempresaVISITANTE'];
	
}


//////////////////////////////////////////////////////////////////////////////////////////////



//AQUI CADASTRA DESTINO
if($codigodestinoVISITANTE==''){
	
	
	
			//AQUI INSERE NOVO DESTINO
			$insertDESTINO = $PDO->prepare("INSERT INTO intra0021_Destinos
		   (nomeDESTINO, departamentoDESTINO, ativoDESTINO)
			VALUES
		   (:nomeDESTINO, 1, 1)");


			$insertDESTINO->execute(array( 
			':nomeDESTINO' => $destinoVISITANTE
			));


			$statusinsertDESTINO = $insertDESTINO->rowCount(); 
				
			if($statusinsertDESTINO == 1){	
			$IDDESTINOQUERY = $PDO->query("SELECT CAST(COALESCE(SCOPE_IDENTITY(), @@IDENTITY) AS int)");
			$IDDESTINOQUERY->execute();
			$resultDESTINO = $IDDESTINOQUERY->fetch();
			}
 
 
			
			$codigodestinoVISITANTE =  $resultDESTINO[0];
	
	
}else{
	
	
$codigodestinoVISITANTE =  $_POST['codigodestinoVISITANTE'];
	
}


 

					
					 
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
/////////////altera o visitante///////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////

//AQUI CADASTRA VISITANTE 
if($codigoVISITANTE==''){
	

			//AQUI INSERE NOVO VISITANTE
			$insertVISITANTE = $PDO->prepare("INSERT INTO intra0031_Visitantes
		   (empresaVISITANTE, nomeVISITANTE, rgVISITANTE, fotoVISITANTE, cadastroVISITANTE, permitidoVISITANTE, ativoVISITANTE)
			VALUES
		   (:empresaVISITANTE, :nomeVISITANTE, :rgVISITANTE, :fotoVISITANTE, GETDATE(), 1, 1)");


			$insertVISITANTE->execute(array( 
			':empresaVISITANTE' => $codigoempresaVISITANTE,
			':nomeVISITANTE' => $nomeVISITANTE,
			':rgVISITANTE' => $rgVISITANTE,
			':fotoVISITANTE' => $imagemVISITANTE
			));


			$statusinsertVISITANTE = $insertVISITANTE->rowCount(); 
			
			
			if($statusinsertVISITANTE == 1){
			$IDVISITANTEQUERY = $PDO->query("SELECT CAST(COALESCE(SCOPE_IDENTITY(), @@IDENTITY) AS int)");
			$IDVISITANTEQUERY->execute();
			$resultVISITANTE = $IDVISITANTEQUERY->fetch();
			}
  
			
			$codigoVISITANTE =  $resultVISITANTE[0];


}else{
//AQUI ALTERA O VISITANTE


		$updateVISITANTE = $PDO->prepare('UPDATE intra0031_Visitantes
				SET fotoVISITANTE = :fotoVISITANTE, 
				empresaVISITANTE = :empresaVISITANTE,
				nomeVISITANTE = :nomeVISITANTE
				WHERE codigoVISITANTE = :codigoVISITANTE');


				  $updateVISITANTE->execute(array( 
					':codigoVISITANTE' => $codigoVISITANTE,
					':nomeVISITANTE' => $nomeVISITANTE,
					':fotoVISITANTE' => $imagemVISITANTE,
					':empresaVISITANTE' => $codigoempresaVISITANTE
				  ));
				  
				   
				$statusupdateVISITANTE = $updateVISITANTE->rowCount(); 
	
	
	
			$codigoVISITANTE =  $_POST['codigoVISITANTE'];
	
	
}










///////AQUI CADASTRA A VISITA


 
			$insertVISITANTEPORTARIA = $PDO->prepare("INSERT INTO intra0051_Portaria
		   (empresaPORTARIA, pessoaPORTARIA, destinoPORTARIA, entradaPORTARIA, saidaPORTARIA, placaPORTARIA, kmPORTARIA, observacaoPORTARIA, tipoPORTARIA, usuarioPORTARIA, ativoPORTARIA)
			VALUES
		   (:empresaPORTARIA, :pessoaPORTARIA, :destinoPORTARIA, GETDATE(), NULL, :placaPORTARIA, NULL, :observacaoPORTARIA, 1, :usuarioPORTARIA, 1)");


			$insertVISITANTEPORTARIA->execute(array( 
			':empresaPORTARIA' => $codigoempresaVISITANTE,
			':pessoaPORTARIA' => $codigoVISITANTE,
			':destinoPORTARIA' => $codigodestinoVISITANTE,
			':placaPORTARIA' => $placaVISITANTE,
			':observacaoPORTARIA' => $observacaoVISITANTE,
			':usuarioPORTARIA' => $usuarioPORTARIA
			));



			$statusinsertVISITANTEPORTARIA = $insertVISITANTEPORTARIA->rowCount(); 
			 	 
			
			$BuscaIDgeradoP = $PDO->query("SELECT TOP 1 MAX(codigoPORTARIA) AS codigoPORTARIA FROM intra0051_Portaria WHERE usuarioPORTARIA = '".$usuarioPORTARIA."'  ");  
			$CarregaIDgeradoP = $BuscaIDgeradoP->fetchAll();
			$SelectLastIDP = $CarregaIDgeradoP[0];
			$codigoPORTARIA =  $SelectLastIDP['codigoPORTARIA'];   
			  
			
			
			if($statusinsertVISITANTEPORTARIA==1){
				
				echo $codigoPORTARIA;
			} 

 