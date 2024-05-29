	<?php
	require_once('../../../config.php');
	$codigoPRODUTO = $_POST['codigoPRODUTO'];
	$imagemPRODUTO = $_POST['imagemPRODUTO'];



	
	$query_Busca_fotos = mysqli_query($conexao, "
	SELECT 
	ordemIMAGEMPRODUTO 
	FROM `tb0019_imagens_produtos`  
	WHERE `produtoIMAGEMPRODUTO` = '".$codigoPRODUTO."' 
	ORDER BY ordemIMAGEMPRODUTO DESC
	");

	$fotosCount = mysqli_num_rows($query_Busca_fotos);
	$fotos = mysqli_fetch_assoc($query_fotos);

	if($fotosCount == 1){
		$padrao = 1;
		$ordem = $fotos['ordemIMAGEMPRODUTO']+1;
	}else{
		$padrao = 0;
		$ordem = 1;
	}

	


	$queryInsere_fotos = mysqli_query($conexao, "
	INSERT INTO `tb0019_imagens_produtos` (
		codigoIMAGEMPRODUTO,
		produtoIMAGEMPRODUTO,
		padraoIMAGEMPRODUTO,
		imagemIMAGEMPRODUTO,
		ordemIMAGEMPRODUTO,
		ativoIMAGEMPRODUTO
	) VALUES (
		null,
		'".$codigoPRODUTO."',
		'".$padrao."',
		'".$imagemPRODUTO."',
		'".$ordem."',
		1
	) ; 
	");
 
 if($queryInsere_fotos){

	echo 1;

 }else{

	echo 0;
	
 }