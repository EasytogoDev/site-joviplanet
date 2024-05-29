<?php
	require_once('../../../config.php');
	 
	$codigo = $_POST['codigo']; 
	
 
	$deletar = mysqli_query($conexao, " DELETE FROM tb0030_opcoes  WHERE codigoOPCAO = '".$codigo."' ");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	 