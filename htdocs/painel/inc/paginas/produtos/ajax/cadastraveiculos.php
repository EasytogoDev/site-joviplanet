<?php
	require_once('../../../config.php');
	
	
	$codigoPRODUTO = $_POST['codigoPRODUTO'];
	$linhaLISTA = $_POST['linhaLISTA']; 
	
	
	
	//INCLUI LINHA
	if($linhaLISTA!=''){
		
		$busca_linha = mysqli_query($conexao, "SELECT * FROM tb0011_linhas_vinculos 
		WHERE produtoLINHAVINCULO = '".$codigoPRODUTO."' AND linhaLINHAVINCULO = '".$linhaLISTA."' ");
		
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
			'".$codigoPRODUTO."',
			'".$linhaLISTA."'
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