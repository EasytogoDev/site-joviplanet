<?php
	require_once('../../../config.php'); 
	$codigoVINCULOESPECIFICAO = $_POST['codigoVINCULOESPECIFICAO']; 
	
 
	$deletar = mysqli_query($conexao, "DELETE FROM tb0022_vinculos_especificacoes WHERE codigoVINCULOESPECIFICAO = '".$codigoVINCULOESPECIFICAO."' ");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	