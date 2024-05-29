<?php 

	$codigo = $_GET['codigo'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb084_faq WHERE codigoFAQ
	 = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('F.A.Q deletada com sucesso!!');top.location.href='?make=faq'</script>";
	
	}else{
	
		echo "<script>alert('F.A.Q não pode ser deletado, Tente Novamente');top.location.href='?make=faq'</script>";
	
	}
	
?>