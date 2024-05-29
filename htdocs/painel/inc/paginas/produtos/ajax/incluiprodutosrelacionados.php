<?php
	require_once('../../../config.php');
	
	
	$produtoPRODUTORELACIONADO 		= $_POST['produtoPRODUTORELACIONADO'];
	$subprodutoPRODUTORELACIONADO 	= $_POST['subprodutoPRODUTORELACIONADO']; 
	$tipoPRODUTORELACIONADO 		= $_POST['tipoPRODUTORELACIONADO']; 
	
	
	
	//INCLUI LINHA
	if($subprodutoPRODUTORELACIONADO!='' AND $tipoPRODUTORELACIONADO!=''){
		
		$busca_relacionados = mysqli_query($conexao, "SELECT * FROM tb0008_produtos_relacionados 
		WHERE produtoPRODUTORELACIONADO = '".$produtoPRODUTORELACIONADO."' AND subprodutoPRODUTORELACIONADO = '".$subprodutoPRODUTORELACIONADO."'   ");
		
		$contagemRELACIONADO = mysqli_num_rows($busca_relacionados);
		
		if($contagemRELACIONADO==0){
			
			$query_linha = mysqli_query($conexao, "
			INSERT INTO tb0008_produtos_relacionados 		
			(
			codigoPRODUTORELACIONADO,
			produtoPRODUTORELACIONADO,
			subprodutoPRODUTORELACIONADO,
			tipoPRODUTORELACIONADO,
			ativoPRODUTORELACIONADO
			)
			VALUES
			(
			NULL,
			'".$produtoPRODUTORELACIONADO."',
			'".$subprodutoPRODUTORELACIONADO."',
			'".$tipoPRODUTORELACIONADO."',
			'1'
			);
			");
			
			
			if($query_linha){
				echo '1';
			}else{
				echo '0';
			}
		
		}
		
	}	
	 
?>