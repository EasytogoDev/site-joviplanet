<?php 

	$codigo = $_GET['codigo'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0152_servicos WHERE codigoSERVICO = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('Serviço deletado com sucesso!!');top.location.href='?make=servicos'</script>";
	
	}else{
	
		echo "<script>alert('Serviço não pode ser deletado, Tente Novamente');top.location.href='?make=servicos'</script>";
	
	}
	
?>