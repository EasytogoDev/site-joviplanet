<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];
	

	$deletar = mysqli_query($conexao, "DELETE FROM tb080_categorias WHERE codigoCATEGORIA = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('Categoria deletada com sucesso!!');top.location.href='?make=".$make."&acao=categorias&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Categoria não pode ser deletado, Tente Novamente');top.location.href='?make=".$make."&acao=categorias&p=".$p."'</script>";
	
	}
	
?>