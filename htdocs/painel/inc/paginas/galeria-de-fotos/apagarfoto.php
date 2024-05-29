<?php 

	@$codigo = $_GET['codigo'];
	@$galeria = $_GET['galeria'];
	@$p = $_GET['p'];

	
	$seleciona = mysqli_query($conexao, "SELECT fotoGALERIA FROM tb0150_galeria WHERE codigoGALERIA = '".$codigo."' ");
	
	$fotodagaleria = mysqli_fetch_assoc($seleciona);
	
	$somefile = $fotodagaleria['fotoGALERIA'];
	
	$apagouarquivo = unlink("..".$somefile);
	
	
	
	if($apagouarquivo == true){
		
	$deletar = mysqli_query($conexao, "DELETE FROM tb0150_galeria WHERE codigoGALERIA = '".$codigo."' ");
	
	}

	if($deletar){
	
		echo "<script>alert('Foto deletada com sucesso!!');top.location.href='?make=".$make."&acao=fotos&p=1&codigo=".$galeria."'</script>";
	
	}else{
	
		echo "<script>alert('Foto não pode ser deletada, Tente Novamente');top.location.href='?make=".$make."&acao=fotos&p=1&codigo=".$galeria."'</script>";
	
	}
	
?>