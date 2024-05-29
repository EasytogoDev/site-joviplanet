<?php
	require_once('../../../config.php'); 
	$codigoVINCULOINTERCAMBIABILIDADE = $_POST['codigoVINCULOINTERCAMBIABILIDADE']; 
	
 
	$deletar = mysqli_query($conexao, "DELETE FROM tb0501_intercambiabilidades_vinculos WHERE codigoVINCULOINTERCAMBIABILIDADE = '".$codigoVINCULOINTERCAMBIABILIDADE."' ");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	