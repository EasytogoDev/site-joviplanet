<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb0060_paginas` SET 
		`ativoPAGINA` = '1' WHERE `codigoPAGINA` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=paginas&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb0060_paginas` SET 
			`ativoPAGINA` = '0' WHERE `codigoPAGINA` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=paginas&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=pagina&p=".$p."'</script>";
}