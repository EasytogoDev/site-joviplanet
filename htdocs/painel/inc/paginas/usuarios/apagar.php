<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0301_usuarios WHERE codigoUSUARIO = '".$codigo."' ");

	if($deletar){
	
		echo "<script>alert('Usuario deletado com sucesso!!');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Usuario não pode ser deletado, Tente Novamente');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}
	
?>