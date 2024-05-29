<?php
	require_once('../../../config.php');
	
	
	$codigoPRODUTO = $_POST['codigoPRODUTO'];
	$montadoraLISTA = $_POST['montadoraLISTA'];
	$veiculosLISTA = $_POST['veiculosLISTA'];
	
	
	
	//INCLUI MONTADORA
	if($montadoraLISTA!=''){
		
		$busca_montadora = mysqli_query($conexao, "SELECT * FROM tb0013_montadoras_vinculos 
		WHERE produtoMONTADORAVINCULO = '".$codigoPRODUTO."' AND montadoraMONTADORAVINCULO = '".$montadoraLISTA."' ");
		
		$contagemMONTADORA = mysqli_num_rows($busca_montadora);
		
		if($contagemMONTADORA==0){
			
			$query_montadora = mysqli_query($conexao, "
			INSERT INTO tb0013_montadoras_vinculos 		
			(
			codigoMONTADORAVINCULO,
			produtoMONTADORAVINCULO,
			montadoraMONTADORAVINCULO
			)
			VALUES
			(
			NULL,
			'".$codigoPRODUTO."',
			'".$montadoraLISTA."'
			);
			");
			
			if($query_montadora){
				echo '1';
			}else{
				echo '0';
			}
		
		}
		
	}	
	
	echo';';
	
	//INCLUI VEICULO
		if($veiculosLISTA!=''){
			
			$busca_veiculo = mysqli_query($conexao, "SELECT * FROM tb0014_veiculos_vinculo 
			WHERE produtoVEICULOVINCULO = '".$codigoPRODUTO."' AND veiculoVEICULOVINCULO = '".$veiculosLISTA."' ");
			
			$contagemVEICULO = mysqli_num_rows($busca_veiculo);
			
			if($contagemVEICULO==0){ 
			
			
				$query_veiculo = mysqli_query($conexao, "
				INSERT INTO	tb0014_veiculos_vinculo 		
				(
				codigoVEICULOVINCULO,
				produtoVEICULOVINCULO,
				veiculoVEICULOVINCULO
				)
				VALUES
				(
				NULL,
				'".$codigoPRODUTO."',
				'".$veiculosLISTA."'
				);
				");
			
			if($query_veiculo){
				echo '1';
			}else{
				echo '0';
			}
		
		}		
		}
?>