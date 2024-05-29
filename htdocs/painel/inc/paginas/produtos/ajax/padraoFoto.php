	<?php
	require_once('../../../config.php');
	$codigo = $_POST['codigo']; 
	$produto = $_POST['produto']; 
	
	$query_Despadronizar_fotos = mysqli_query($conexao, "
	UPDATE `tb0019_imagens_produtos` SET padraoIMAGEMPRODUTO = 0 WHERE `produtoIMAGEMPRODUTO` = '".$produto."'  
	");
 
	$query_padronizar_fotos = mysqli_query($conexao, "
	UPDATE `tb0019_imagens_produtos` SET padraoIMAGEMPRODUTO = 1 WHERE `codigoIMAGEMPRODUTO` = '".$codigo."'  
	");
 

 
 if($query_padronizar_fotos){

	echo 1;

 }else{

	echo 0;
	
 }