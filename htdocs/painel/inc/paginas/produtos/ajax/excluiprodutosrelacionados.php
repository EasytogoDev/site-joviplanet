<?php
	require_once('../../../config.php');
	$codigo = $_POST['codigo']; 
	
 
	$deletar = mysqli_query($conexao, "
	DELETE FROM tb0008_produtos_relacionados 
	WHERE codigoPRODUTORELACIONADO = '".$codigo."'
	");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	
	?>