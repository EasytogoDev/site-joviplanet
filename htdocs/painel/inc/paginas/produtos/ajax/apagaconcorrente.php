<?php
	require_once('../../../config.php'); 
	$codigoVINCULOCONCORRENTE = $_POST['codigoVINCULOCONCORRENTE']; 
	
 
	$deletar = mysqli_query($conexao, " DELETE FROM tb0402_vinculos_concorrentes WHERE codigoVINCULOCONCORRENTE = '".$codigoVINCULOCONCORRENTE."' ");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	