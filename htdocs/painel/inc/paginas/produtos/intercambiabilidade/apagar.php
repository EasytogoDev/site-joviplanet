<?php 

	$p = @$_GET['p'];	
	$q = @$_GET['q'];	
	$codigo = $_GET['codigo'];

	$deletar = mysqli_query($conexao, "DELETE FROM tb0501_intercambiabilidades WHERE codigoINTERCAMBIABILIDADE = '".$codigo."'");

	if($deletar){
	
		echo "<script>alert('deletada com sucesso!!');top.location.href='?make=".$make."&acao=".$acao."&q=".$q."&p=".$p."'</script>";
	
	}else{
	
		echo "<script>alert('não pode ser deletado, Tente Novamente');top.location.href='javascript:;history.back(-1);'</script>";
	
	}
	
?>