<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];
	

	$deletar = mysqli_query($conexao, "DELETE FROM tb081_posts WHERE codigoPOST = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('Post deletado com sucesso!!');top.location.href='?make=".$make."'</script>";
	
	}else{
	
		echo "<script>alert('Post não pode ser deletado, Tente Novamente');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}
	
?>