<?php
	require_once('../../../config.php');
	$veiculo = $_POST['veiculo'];
	$produto = $_POST['codigoPRODUTO']; 
	
 
	$deletar = mysqli_query($conexao, "
	DELETE FROM tb0014_veiculos_vinculo 
	WHERE codigoVEICULOVINCULO = '".$veiculo."'
	");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	
	?>