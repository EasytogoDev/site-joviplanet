<?php
	require_once('../../../config.php');
	$montadora = $_POST['montadora'];
	$codigoPRODUTO = $_POST['codigoPRODUTO']; 

	

		$deletar = mysqli_query($conexao, "DELETE FROM tb0013_montadoras_vinculos WHERE codigoMONTADORAVINCULO = '".$montadora."'");

		if($deletar){
			
			echo '1';
		
		}else{
			
			echo '0';
		
		}
		
?>