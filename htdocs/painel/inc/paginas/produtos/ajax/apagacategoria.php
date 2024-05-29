<?php
	require_once('../../../config.php');
	$categoria = $_GET['categoria'];
	$produto = $_POST['codigoPRODUTO']; 
	
 
	$deletar = mysqli_query($conexao, "
	DELETE FROM tb0012_categorias_vinculos 
	WHERE codigoCATEGORIAVINCULO = '".$categoria."'
	");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	
	?>