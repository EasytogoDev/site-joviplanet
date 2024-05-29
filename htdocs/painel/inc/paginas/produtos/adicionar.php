<?php 
	
	
	$query = mysqli_query($conexao, "
		INSERT INTO tb0015_produtos (partnumberPRODUTO,ativoPRODUTO) VALUES ('','1');
	");
	
	$codigo = mysqli_insert_id($conexao);
	
	
	$query = mysqli_query($conexao, "
		INSERT INTO tb0012_categorias_vinculos (produtoCATEGORIAVINCULO,categoriaCATEGORIAVINCULO) VALUES ('".$codigo."','1');
	");
	
	if($query){
	
		echo '<script>top.location.href="?make=produtos&acao=editar&codigo='.$codigo.'";</script>';
	
	}else{ 
	
		echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

?>