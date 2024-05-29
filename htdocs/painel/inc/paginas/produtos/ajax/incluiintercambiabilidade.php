<?php
	require_once('../../../config.php');
	
	
	$produtoVINCULOINTERCAMBIABILIDADE = $_POST['produtoVINCULOINTERCAMBIABILIDADE'];
	$intercambiabilidadeVINCULOINTERCAMBIABILIDADE = $_POST['intercambiabilidadeVINCULOINTERCAMBIABILIDADE']; 
	$valorVINCULOINTERCAMBIABILIDADE = $_POST['valorVINCULOINTERCAMBIABILIDADE']; 
	
	
	
	//INCLUI INTERCAMBIABILIDADE
	if($intercambiabilidadeVINCULOINTERCAMBIABILIDADE!='' AND $valorVINCULOINTERCAMBIABILIDADE!=''){
		
		$busca_intercambiabilidade = mysqli_query($conexao, "SELECT * FROM tb0501_intercambiabilidades_vinculos 
		WHERE produtoVINCULOINTERCAMBIABILIDADE = '".$produtoVINCULOINTERCAMBIABILIDADE."' AND intercambiabilidadeVINCULOINTERCAMBIABILIDADE = '".$intercambiabilidadeVINCULOINTERCAMBIABILIDADE."' AND valorVINCULOINTERCAMBIABILIDADE = '".$valorVINCULOINTERCAMBIABILIDADE."'  ");
		
		$contagemINTERCAMBIABILIDADE = mysqli_num_rows($busca_intercambiabilidade);
		
		if($contagemINTERCAMBIABILIDADE==0){
			
			$query_intercambiabilidade = mysqli_query($conexao, "
			INSERT INTO tb0501_intercambiabilidades_vinculos 		
			(
			codigoVINCULOINTERCAMBIABILIDADE,
			intercambiabilidadeVINCULOINTERCAMBIABILIDADE,
			produtoVINCULOINTERCAMBIABILIDADE,
			valorVINCULOINTERCAMBIABILIDADE,
			ativoVINCULOINTERCAMBIABILIDADE
			)
			VALUES
			(
			NULL,
			'".$intercambiabilidadeVINCULOINTERCAMBIABILIDADE."',
			'".$produtoVINCULOINTERCAMBIABILIDADE."',
			'".$valorVINCULOINTERCAMBIABILIDADE."',
			1
			);
			");
			
			if($query_intercambiabilidade){
				echo '1';
			}else{
				echo '0';
			}
		
		}
		
	}	 