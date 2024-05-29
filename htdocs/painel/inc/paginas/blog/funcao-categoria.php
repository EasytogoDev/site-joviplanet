<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb080_categorias` SET 
		`ativoCATEGORIA` = '1' WHERE `codigoCATEGORIA` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=categorias&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb080_categorias` SET 
			`ativoCATEGORIA` = '0' WHERE `codigoCATEGORIA` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=categorias&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=".$make."&acao=categorias&p=".$p."'</script>";
}