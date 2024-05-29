<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0171_clientes WHERE codigoCLIENTE = '".$codigo."' ");

	if($deletar){
	
		echo "<script>alert('Cliente deletada com sucesso!!');top.location.href='?make=clientes&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Cliente não pode ser deletado, Tente Novamente');top.location.href='?make=clientes&p=".$p."'</script>";
	
	}
	
?>