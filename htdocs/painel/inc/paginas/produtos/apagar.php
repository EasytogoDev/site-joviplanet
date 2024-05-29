<?php 

	$codigo = $_GET['codigo'];
	$q = $_GET['q'];
	$make = $_GET['make'];
	$catproduto = $_GET['catproduto'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0015_produtos WHERE codigoPRODUTO = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('Deletado com sucesso!!');top.location.href='?make=".$make."&q=".$q."&catproduto=".$catproduto."&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Não pode ser deletado, Tente Novamente');top.location.href='javascript:;history.back(-1);</script>";
	
	}
	
?>