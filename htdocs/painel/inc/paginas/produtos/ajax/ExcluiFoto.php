	<?php
	require_once('../../../config.php');
	$codigo = $_POST['codigo']; 
 
	
	$query_Apaga_fotos = mysqli_query($conexao, "
	DELETE FROM `tb0019_imagens_produtos` WHERE `codigoIMAGEMPRODUTO` = '".$codigo."'  
	");
 
 
 if($query_Apaga_fotos){

	echo 1;

 }else{

	echo 0;
	
 }