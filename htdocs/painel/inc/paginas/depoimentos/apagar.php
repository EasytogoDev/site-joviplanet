<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0172_depoimentos WHERE codigoDEPOIMENTO = '".$codigo."' ");

	if($deletar){
	
		echo "<script>alert('Depoimento deletado com sucesso!!');top.location.href='?make=depoimentos&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Depoimento não pode ser deletado, Tente Novamente');top.location.href='?make=depoimentos&p=".$p."'</script>";
	
	}
	
?>