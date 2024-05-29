<?php 

	$codigo = $_GET['codigo'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0075_eventos WHERE codigoEVENTO = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('Evento deletado com sucesso!!');top.location.href='?make=eventos'</script>";
	
	}else{
	
		echo "<script>alert('Evento não pode ser deletado, Tente Novamente');top.location.href='?make=eventos'</script>";
	
	}
	
?>