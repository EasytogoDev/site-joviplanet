<?php 

	$codigo = $_GET['codigo'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0085_destaques WHERE codigoDESTAQUE
	 = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('Página deletada com sucesso!!');top.location.href='?make=destaques'</script>";
	
	}else{
	
		echo "<script>alert('Página não pode ser deletado, Tente Novamente');top.location.href='?make=destaques'</script>";
	
	}
	
?>