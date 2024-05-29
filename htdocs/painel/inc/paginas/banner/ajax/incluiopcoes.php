<?php
	require_once('../../../config.php');
	
 
	
	$banner = $_POST['banner'];
	$titulo = $_POST['titulo'];
	$tituloen = $_POST['tituloen']; 
	$tituloes = $_POST['tituloes']; 
	$subtitulo = $_POST['subtitulo'];
	$subtituloen = $_POST['subtituloen']; 
	$subtituloes = $_POST['subtituloes']; 
	$tipo = $_POST['tipo']; 
	$velocidade = $_POST['velocidade'];
	
 
			
			$query_linha = mysqli_query($conexao, "
			INSERT INTO tb0030_opcoes 		
			(
			codigoOPCAO,
			tituloOPCAO,
			tituloenOPCAO,
			tituloesOPCAO,
			subtituloOPCAO,
			subtituloenOPCAO,
			subtituloesOPCAO,
            tipoOPCAO,
			velocidadeOPCAO,
            bannerOPCAO,
            ativoOPCAO
			)
			VALUES
			(
			NULL,
			'".$titulo."',
			'".$tituloen."',
			'".$tituloes."',
			'".$subtitulo."',
			'".$subtituloen."',
			'".$subtituloes."',
			'".$tipo."',
			'".$velocidade."',
			'".$banner."',
            1
			);
			");
			
			if($query_linha){
				echo '1';
			}else{
				echo '0';
			}
		 