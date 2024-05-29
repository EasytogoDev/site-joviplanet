<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb084_grupo_faq` SET 
		`ativoGRUPOFAQ` = '1' WHERE `codigoGRUPOFAQ` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=grupos&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb084_grupo_faq` SET 
			`ativoGRUPOFAQ` = '0' WHERE `codigoGRUPOFAQ` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=grupos&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=".$make."&acao=grupos&p=".$p."'</script>";
}