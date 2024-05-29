<?php
	require_once('../../../config.php');
	$linha = $_GET['linha'];
	$produto = $_POST['codigoPRODUTO']; 
	
 
	$deletar = mysqli_query($conexao, "
	DELETE FROM tb0011_linhas_vinculos 
	WHERE codigoLINHAVINCULO = '".$linha."'
	");
	
	
	if($deletar){
		echo '1';
	}else{
		echo '0';
	}
	
	
	?>