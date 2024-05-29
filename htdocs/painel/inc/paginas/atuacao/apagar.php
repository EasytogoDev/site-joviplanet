<?php 

	$codigo = $_GET['codigo'];

	$deletar = mysqli_query("DELETE FROM tb0162_atuacoes WHERE codigoATUACAOS = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('Atuação deletado com sucesso!!');top.location.href='?make=atuacao'</script>";
	
	}else{
	
		echo "<script>alert('Atuação não pode ser deletado, Tente Novamente');top.location.href='?make=atuacao'</script>";
	
	}
	
?>