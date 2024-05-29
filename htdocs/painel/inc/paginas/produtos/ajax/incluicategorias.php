<?php
	require_once('../../../config.php');
	
	
	$codigoPRODUTO = $_POST['codigoPRODUTO'];
	$categoriaLISTA = $_POST['categoriaLISTA']; 
	
	
	
	//INCLUI CATEGORIA
	if($categoriaLISTA!=''){
		
		$busca_categoria = mysqli_query($conexao, "SELECT * FROM tb0012_categorias_vinculos 
		WHERE produtoCATEGORIAVINCULO = '".$codigoPRODUTO."' AND categoriaCATEGORIAVINCULO = '".$categoriaLISTA."' ");
		
		$contagemCATEGORIA = mysqli_num_rows($busca_categoria);
		
		if($contagemCATEGORIA==0){
			
			$query_categoria = mysqli_query($conexao, "
			INSERT INTO tb0012_categorias_vinculos 		
			(
			codigoCATEGORIAVINCULO,
			produtoCATEGORIAVINCULO,
			categoriaCATEGORIAVINCULO
			)
			VALUES
			(
			NULL,
			'".$codigoPRODUTO."',
			'".$categoriaLISTA."'
			);
			");
			
			if($query_categoria){
				echo '1';
			}else{
				echo '0';
			}
		
		}
		
	}	
	 
?>