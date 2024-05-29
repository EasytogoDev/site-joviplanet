<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0150_galeria WHERE codigoGALERIA = '".$codigo."' ");

	if($deletar){
	
		echo "<script>alert('Galeria deletada com sucesso!!');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Galeria não pode ser deletada, Tente Novamente');top.location.href='?make=".$make."&p=".$p."'</script>";
	
	}
	
?>