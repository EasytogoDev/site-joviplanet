<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0030_banners WHERE codigoBANNER = '".$codigo."' ");
	
 
	if($deletar){
		
		mysqli_query($conexao, "DELETE FROM tb0030_banners_descricao WHERE bannerBANNERDESCRICAO = '".$codigo."' ");
	
		echo "<script>alert('Deletado com sucesso!!');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Não pode ser deletado, Tente Novamente');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}
	
?>