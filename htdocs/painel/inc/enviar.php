<?php
require_once('config.php');

 $codigo = $_POST['codigoGALERIA'];
 $evento = $_POST['eventoGALERIA'];

 $imagens = $_FILES['arquivo'];
 $indice = count(array_filter($imagens["name"]));

 if($indice <= 0)
 {
	 echo "você não selecionou nenhuma imagem";
 }else{
	 for($i = 0; $i < $indice; $i++)
	 {
		 $imagens["name"][$i];	

$arquivodefoto = "/images/upload/galeria/".$imagens["name"][$i];		 
	$enviar[$i] = move_uploaded_file($imagens["tmp_name"][$i], "../..".$arquivodefoto);
	
	
	
	
	$fotoGALERIA = $arquivodefoto;
	$codigoGALERIA = $codigo;
	$eventoGALERIA = $evento;
	
	
	
 if($enviar[$i] == true){

$query = mysqli_query($conexao, "
INSERT INTO  tb0150_galeria (
	vinculoGALERIA,
			fotoGALERIA,
					eventoGALERIA,
				ordemGALERIA,	
					capaGALERIA,
						ativoGALERIA
	)
VALUES (
 '".$codigoGALERIA."',
		'".$fotoGALERIA."',
		'".$eventoGALERIA."',
				'0',	
					'0',
						'1'
);
");

 }else{
	 
	 echo 'erro ao cadastrar a foto: '. $imagens["name"][$i];
	 
 }
	
	 }
	 
	 
	 
	  if($query == true)
	 {
		 
		  //echo "Suas fotos foram enviadas corretamente";
		  
echo '<script>alert("Suas fotos foram enviadas corretamente!");top.location.href="?make=galeria-de-fotos&acao=fotos&p=1&codigo='.$codigo.'";</script>';
	 }else{
		 
		 
		  echo "Houve um erro ao inserir as fotos";
	 }
	 
	 
 }

?>