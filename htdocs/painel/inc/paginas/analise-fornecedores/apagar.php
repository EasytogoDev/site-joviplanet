<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0006_fornecedores WHERE codigoFORNECEDOR = '".$codigo."' ");

	if($deletar){
	
		echo "<script>alert('Contato deletado com sucesso!!');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Contato não pode ser deletado, Tente Novamente');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}
	
?>