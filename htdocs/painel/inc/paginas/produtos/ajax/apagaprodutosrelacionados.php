<?php
	require_once('../../../config.php');
	$produto = $_GET['produto']; 
	
 
	$deletar = mysqli_query($conexao, "
	DELETE FROM tb0008_produtos_relacionados 
	WHERE codigoPRODUTORELACIONADO = '".$produto."'
	");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	
	?>