<?php
	require_once('../../../config.php');
	
	
	$produtoORIGINALREFERENCIA = $_POST['produtoORIGINALREFERENCIA'];
	$fabricanteORIGINALREFERENCIA = $_POST['fabricanteORIGINALREFERENCIA']; 
	$valorORIGINALREFERENCIA = $_POST['valorORIGINALREFERENCIA']; 
	
	
	
	//INCLUI FABRICANTE
	if($fabricanteORIGINALREFERENCIA!='' AND $valorORIGINALREFERENCIA!=''){
		
		$busca_fabricante = mysqli_query($conexao, "SELECT * FROM tb0018_original_referencias 
		WHERE produtoORIGINALREFERENCIA = '".$produtoORIGINALREFERENCIA."' AND fabricanteORIGINALREFERENCIA = '".$fabricanteORIGINALREFERENCIA."' AND valorORIGINALREFERENCIA = '".$valorORIGINALREFERENCIA."'  ");
		
		$contagemFABRICANTE = mysqli_num_rows($busca_fabricante);
		
		if($contagemFABRICANTE==0){
			
			$query_fabricante = mysqli_query($conexao, "
			INSERT INTO tb0018_original_referencias 		
			(
			codigoORIGINALREFERENCIA,
			produtoORIGINALREFERENCIA,
			fabricanteORIGINALREFERENCIA,
			valorORIGINALREFERENCIA,
			ativoORIGINALREFERENCIA
			)
			VALUES
			(
			NULL,
			'".$produtoORIGINALREFERENCIA."',
			'".$fabricanteORIGINALREFERENCIA."',
			'".$valorORIGINALREFERENCIA."',
			1
			);
			");
			
			if($query_fabricante){
				echo '1';
			}else{
				echo '0';
			}
		
		}
		
	}	 