<?php
	require_once('../../../config.php');
	
	
	$produtoVINCULOESPECIFICAO = $_POST['produtoVINCULOESPECIFICAO'];
	$especificaoVINCULOESPECIFICAO = $_POST['especificaoVINCULOESPECIFICAO']; 
	$valorVINCULOESPECIFICAO = $_POST['valorVINCULOESPECIFICAO']; 
	
	
	
	//INCLUI FABRICANTE
	if($especificaoVINCULOESPECIFICAO!='' AND $valorVINCULOESPECIFICAO!=''){
		
		$busca_fabricante = mysqli_query($conexao, "SELECT * FROM tb0022_vinculos_especificacoes 
		WHERE produtoVINCULOESPECIFICAO = '".$produtoVINCULOESPECIFICAO."' AND especificaoVINCULOESPECIFICAO = '".$especificaoVINCULOESPECIFICAO."' AND valorVINCULOESPECIFICAO = '".$valorVINCULOESPECIFICAO."'  ");
		
		$contagemFABRICANTE = mysqli_num_rows($busca_fabricante);
		
		if($contagemFABRICANTE==0){
			
			$query_fabricante = mysqli_query($conexao, "
			INSERT INTO tb0022_vinculos_especificacoes 		
			(
			codigoVINCULOESPECIFICAO,
			produtoVINCULOESPECIFICAO,
			especificaoVINCULOESPECIFICAO,
			valorVINCULOESPECIFICAO,
			ativoVINCULOESPECIFICAO
			)
			VALUES
			(
			NULL,
			'".$produtoVINCULOESPECIFICAO."',
			'".$especificaoVINCULOESPECIFICAO."',
			'".$valorVINCULOESPECIFICAO."',
			1
			);
			");
			
			if($query_fabricante){
				echo '1';
			}else{
				echo '0';
			}
		
		}
		
	}	 