<?php 

	$codigo = $_GET['codigo'];
	$p = $_GET['p'];
	

	$deletar = mysqli_query($conexao, "DELETE FROM tb084_grupo_faq WHERE codigoGRUPOFAQ = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('Grupo deletado com sucesso!!');top.location.href='?make=".$make."&acao=grupos&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('Grupo não pode ser deletado, Tente Novamente');top.location.href='?make=".$make."&acao=Grupos&p=".$p."'</script>";
	
	}
	
?>