<?php
	require_once('../../../config.php');
	
	
	$produtoVINCULOCONCORRENTE = $_POST['produtoVINCULOCONCORRENTE'];
	$concorrenteVINCULOCONCORRENTE = $_POST['concorrenteVINCULOCONCORRENTE']; 
	$valorVINCULOCONCORRENTE = $_POST['valorVINCULOCONCORRENTE']; 
	
	
	
	//INCLUI CONCORRENTE
	if($concorrenteVINCULOCONCORRENTE!='' AND $valorVINCULOCONCORRENTE!=''){
		
		$busca_concorrente = mysqli_query($conexao, "SELECT * FROM tb0402_vinculos_concorrentes 
		WHERE produtoVINCULOCONCORRENTE = '".$produtoVINCULOCONCORRENTE."' AND concorrenteVINCULOCONCORRENTE = '".$concorrenteVINCULOCONCORRENTE."' AND valorVINCULOCONCORRENTE = '".$valorVINCULOCONCORRENTE."'  ");
		
		$contagemCONCORRENTE = mysqli_num_rows($busca_concorrente);
		
		if($contagemCONCORRENTE==0){
			
			$query_concorrente = mysqli_query($conexao, "
			INSERT INTO tb0402_vinculos_concorrentes 		
			(
			codigoVINCULOCONCORRENTE,
			concorrenteVINCULOCONCORRENTE,
			produtoVINCULOCONCORRENTE,
			valorVINCULOCONCORRENTE,
			ativoVINCULOCONCORRENTE
			)
			VALUES
			(
			NULL,
			'".$concorrenteVINCULOCONCORRENTE."',
			'".$produtoVINCULOCONCORRENTE."',
			'".$valorVINCULOCONCORRENTE."',
			1
			);
			");
			
			if($query_concorrente){
				echo '1';
			}else{
				echo '0';
			}
		
		}
		
	}	 