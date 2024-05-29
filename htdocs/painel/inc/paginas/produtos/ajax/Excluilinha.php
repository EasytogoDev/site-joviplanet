<?php
	require_once('../../../config.php');
	 
	$codigoLINHAVINCULO = $_POST['codigoLINHAVINCULO']; 
	
 
	$deletar = mysqli_query($conexao, "	DELETE FROM tb0011_linhas_vinculos WHERE codigoLINHAVINCULO = '".$codigoLINHAVINCULO."'	");
	
	 
	if($deletar){
		echo '1';
	}else{
		echo '0';
	} 