<?php
	require_once('../../../config.php'); 
	$codigoORIGINALREFERENCIA = $_POST['codigoORIGINALREFERENCIA']; 
	
 
	$deletar = mysqli_query($conexao, "DELETE FROM tb0018_original_referencias WHERE codigoORIGINALREFERENCIA = '".$codigoORIGINALREFERENCIA."' ");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	