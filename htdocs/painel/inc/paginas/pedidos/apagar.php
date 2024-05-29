<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0031_cotacoes WHERE codigoCOTACAO = '".$codigo."' ");

	if($deletar){
	
		echo "<script>alert('COTACAO deletada com sucesso!!');top.location.href='?make=pedidos&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('COTACAO não pode ser deletado, Tente Novamente');top.location.href='?make=pedidos&p=".$p."'</script>";
	
	}
	
?>