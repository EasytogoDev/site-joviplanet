<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0101_atendimentos WHERE codigoATENDIMENTO = '".$codigo."' ");

	if($deletar){
	
		echo "<script>alert('Contato deletado com sucesso!!');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Contato não pode ser deletado, Tente Novamente');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}
	
?>