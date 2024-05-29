<?php
	require_once('../../../config.php');
	
	
	$produtoLINHAVINCULO = $_POST['produtoLINHAVINCULO'];
	$linhaLINHAVINCULO = $_POST['linhaLINHAVINCULO']; 
	
	
	
	//INCLUI LINHA
	if($linhaLINHAVINCULO!=''){
		
		$busca_linha = mysqli_query($conexao, "SELECT * FROM tb0011_linhas_vinculos 
		WHERE produtoLINHAVINCULO = '".$produtoLINHAVINCULO."' AND linhaLINHAVINCULO = '".$linhaLINHAVINCULO."' ");
		
		$contagemLINHA = mysqli_num_rows($busca_linha);
		
		if($contagemLINHA==0){
			
			$query_linha = mysqli_query($conexao, "
			INSERT INTO tb0011_linhas_vinculos 		
			(
			codigoLINHAVINCULO,
			produtoLINHAVINCULO,
			linhaLINHAVINCULO
			)
			VALUES
			(
			NULL,
			'".$produtoLINHAVINCULO."',
			'".$linhaLINHAVINCULO."'
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